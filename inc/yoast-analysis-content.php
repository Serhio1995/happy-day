<?php
/**
 * Feed Yoast SEO the rendered front-end content of template-driven Pages.
 *
 * This theme builds most Pages (homepage, About, Contact, Gallery and every
 * service page) entirely in PHP templates, so the editor content field is
 * empty and Yoast's SEO / Readability analysis has nothing to grade. Here we
 * render the Page's real front-end output once, cache it, and hand the
 * <main class="site-main"> HTML to Yoast's in-editor analyser through its
 * supported JS plugin API (the same hook page builders use).
 *
 * Scope: Pages only. Posts use the editor normally and are left untouched.
 */
if (!defined('ABSPATH')) exit;

/**
 * Return the cached rendered <main> HTML for a Page, fetching it if needed.
 * The cache entry carries the Page's modified time, so saving refreshes it;
 * a failed fetch is cached briefly so a broken loopback cannot hang every
 * editor load for 15s.
 */
function hd_yoast_rendered_content($post) {
  $post = get_post($post);
  if (!$post || $post->post_type !== 'page') return '';

  $stamp = (string) $post->post_modified_gmt;
  $key   = 'hd_yoast_render_' . $post->ID;
  $cache = get_transient($key);
  if (is_array($cache) && isset($cache['stamp']) && $cache['stamp'] === $stamp) {
    return (string) $cache['html'];
  }

  $html = hd_yoast_fetch_rendered_main($post);
  set_transient(
    $key,
    ['stamp' => $stamp, 'html' => $html],
    $html === '' ? 5 * MINUTE_IN_SECONDS : HOUR_IN_SECONDS
  );

  return $html;
}

/**
 * Do the actual front-end request and pull the page body out of it.
 */
function hd_yoast_fetch_rendered_main($post) {
  $url = $post->post_status === 'publish'
    ? get_permalink($post)
    : get_preview_post_link($post);
  if (!$url) return '';
  $url = add_query_arg('hd-yoast-scan', '1', $url);

  $args = [
    'timeout'     => 15,
    'redirection' => 2,
    'sslverify'   => false,
    'headers'     => ['X-Happy-Day-Yoast-Scan' => '1'],
  ];
  // Carry the editor's session so drafts and pending Pages still render.
  if (!empty($_COOKIE)) {
    $args['cookies'] = [];
    foreach ($_COOKIE as $name => $value) {
      if (is_string($value)) {
        $args['cookies'][] = new WP_Http_Cookie(['name' => $name, 'value' => $value]);
      }
    }
  }

  $response = wp_remote_get($url, $args);
  if (is_wp_error($response) || wp_remote_retrieve_response_code($response) >= 400) {
    return '';
  }

  $body = (string) wp_remote_retrieve_body($response);
  if (!preg_match('#<main\b[^>]*\bsite-main\b[^>]*>(.*?)</main>#is', $body, $m)) {
    return '';
  }

  // Keep the HTML (Yoast needs headings, links and images) but drop blocks
  // that would only distort the word count and readability score.
  $html = preg_replace('#<(script|style|svg|noscript)\b[^>]*>.*?</\1>#is', ' ', $m[1]);
  $html = preg_replace('#<!--.*?-->#s', ' ', (string) $html);
  $html = trim((string) $html);

  return strlen($html) < 40 ? '' : $html;
}

/**
 * Drop the cache when a Page changes or is deleted.
 */
function hd_yoast_clear_rendered_cache($post_id) {
  delete_transient('hd_yoast_render_' . (int) $post_id);
}
add_action('save_post_page', 'hd_yoast_clear_rendered_cache');
add_action('deleted_post', 'hd_yoast_clear_rendered_cache');

/**
 * On the Page editor screen, push the rendered content into Yoast's analysis.
 */
function hd_yoast_enqueue_analysis_content($hook) {
  if ($hook !== 'post.php') return;
  if (!defined('WPSEO_VERSION')) return;

  $screen = get_current_screen();
  if (!$screen || $screen->post_type !== 'page') return;

  $post_id = isset($_GET['post']) ? (int) $_GET['post'] : 0;
  if (!$post_id) return;

  $content = hd_yoast_rendered_content($post_id);
  if ($content === '') return;

  wp_register_script('hd-yoast-analysis-content', '', [], null, true);
  wp_enqueue_script('hd-yoast-analysis-content');
  wp_add_inline_script(
    'hd-yoast-analysis-content',
    'window.hdYoastRenderedContent=' . wp_json_encode($content) . ';' . hd_yoast_analysis_inline_js()
  );
}
add_action('admin_enqueue_scripts', 'hd_yoast_enqueue_analysis_content');

/**
 * The client-side glue: register a Yoast plugin and replace the analysed
 * content with the rendered page. Yoast's bundle may load after this runs,
 * so poll until its legacy app API is available.
 */
function hd_yoast_analysis_inline_js() {
  return <<<'JS'
(function () {
  if (window.__hdYoastRenderedHooked) return;
  var extra = window.hdYoastRenderedContent || "";
  if (!extra) return;

  function ready() {
    return window.YoastSEO && window.YoastSEO.app &&
      typeof window.YoastSEO.app.registerPlugin === "function" &&
      typeof window.YoastSEO.app.registerModification === "function";
  }

  function hook() {
    try {
      window.YoastSEO.app.registerPlugin("hdRenderedContent", { status: "ready" });
      window.YoastSEO.app.registerModification("content", function (content) {
        return extra.length > (content ? content.length : 0) ? extra : content;
      }, "hdRenderedContent", 5);
      if (typeof window.YoastSEO.app.refresh === "function") {
        window.YoastSEO.app.refresh();
      }
      window.__hdYoastRenderedHooked = true;
      return true;
    } catch (e) {
      return false;
    }
  }

  if (ready() && hook()) return;
  var tries = 0;
  var timer = setInterval(function () {
    if ((ready() && hook()) || ++tries > 80) clearInterval(timer);
  }, 500);
})();
JS;
}
