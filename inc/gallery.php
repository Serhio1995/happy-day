<?php
if (!defined('ABSPATH')) exit;

/**
 * Gallery management.
 *
 * One Gallery Album represents one frontend filter/category. Each album can
 * contain any number of Media Library images with an optional title and event
 * label. The previous one-post-per-image content type remains registered but
 * hidden so existing data can be migrated without being lost.
 */
function hd_register_gallery_content(){
  register_post_type('hd_gallery_album',[
    'labels'=>[
      'name'=>'Gallery',
      'singular_name'=>'Gallery Album',
      'menu_name'=>'Gallery',
      'add_new'=>'Add Category',
      'add_new_item'=>'Add Gallery Category',
      'edit_item'=>'Edit Gallery Category',
      'new_item'=>'New Gallery Category',
      'view_item'=>'View Gallery Category',
      'search_items'=>'Search Gallery Categories',
      'not_found'=>'No gallery categories found',
      'not_found_in_trash'=>'No gallery categories found in Trash',
    ],
    'public'=>false,
    'publicly_queryable'=>false,
    'show_ui'=>true,
    'show_in_menu'=>true,
    'show_in_rest'=>false,
    'menu_position'=>21,
    'menu_icon'=>'dashicons-format-gallery',
    'supports'=>['title','page-attributes'],
    'has_archive'=>false,
    'rewrite'=>false,
    'query_var'=>false,
    'map_meta_cap'=>true,
  ]);

  // Legacy records are hidden, not deleted.
  register_post_type('hd_gallery_item',[
    'public'=>false,
    'publicly_queryable'=>false,
    'show_ui'=>false,
    'show_in_menu'=>false,
    'supports'=>['title','thumbnail','page-attributes'],
    'has_archive'=>false,
    'rewrite'=>false,
    'query_var'=>false,
  ]);

  register_taxonomy('hd_gallery_category',['hd_gallery_item'],[
    'public'=>false,
    'show_ui'=>false,
    'show_in_rest'=>false,
    'hierarchical'=>true,
    'rewrite'=>false,
    'query_var'=>false,
  ]);
}
add_action('init','hd_register_gallery_content');

function hd_gallery_album_meta_box(){
  add_meta_box(
    'hd-gallery-album-images',
    'Images in this category',
    'hd_gallery_album_meta_box_html',
    'hd_gallery_album',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes','hd_gallery_album_meta_box');

function hd_gallery_album_meta_box_html($post){
  wp_nonce_field('hd_save_gallery_album','hd_gallery_album_nonce');
  $images=get_post_meta($post->ID,'_hd_gallery_images',true);
  if(!is_array($images)) $images=[];
  ?>
  <div class="hd-gallery-album-editor">
    <div class="hd-gallery-album-toolbar">
      <div>
        <strong>Gallery images</strong>
        <p>Select many images at once, then drag them into the desired order.</p>
      </div>
      <button type="button" class="button button-primary" id="hd-gallery-add-images">
        <span class="dashicons dashicons-plus-alt2"></span> Add images
      </button>
    </div>

    <div id="hd-gallery-image-list" class="hd-gallery-image-list">
      <?php foreach($images as $image): 
        $image_id=absint($image['id']??0);
        if(!$image_id) continue;
        $thumb=wp_get_attachment_image_url($image_id,'thumbnail');
        ?>
        <div class="hd-gallery-image-row" data-id="<?php echo esc_attr((string)$image_id); ?>">
          <span class="hd-gallery-drag dashicons dashicons-move" title="Drag to reorder"></span>
          <img src="<?php echo esc_url($thumb?:wp_mime_type_icon($image_id)); ?>" alt="">
          <input type="hidden" name="hd_gallery_image_id[]" value="<?php echo esc_attr((string)$image_id); ?>">
          <label>
            <span>Work title</span>
            <input type="text" name="hd_gallery_image_title[]" value="<?php echo esc_attr((string)($image['title']??'')); ?>" placeholder="Example: Elegant balloon backdrop">
          </label>
          <label>
            <span>Short event label</span>
            <input type="text" name="hd_gallery_image_event[]" value="<?php echo esc_attr((string)($image['event']??'')); ?>" placeholder="Example: Birthday celebration">
          </label>
          <button type="button" class="button-link-delete hd-gallery-remove-image" aria-label="Remove image">
            <span class="dashicons dashicons-trash"></span>
          </button>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="hd-gallery-empty<?php echo $images?' is-hidden':''; ?>">
      <span class="dashicons dashicons-format-gallery"></span>
      <strong>No images added yet</strong>
      <p>Click “Add images” and select multiple files from the Media Library.</p>
    </div>
  </div>
  <?php
}

function hd_save_gallery_album($post_id){
  if(!isset($_POST['hd_gallery_album_nonce'])
    ||!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['hd_gallery_album_nonce'])),'hd_save_gallery_album')
    ||(defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE)
    ||get_post_type($post_id)!=='hd_gallery_album'
    ||!current_user_can('edit_post',$post_id)){
    return;
  }

  $ids=isset($_POST['hd_gallery_image_id'])
    ?array_map('absint',(array)wp_unslash($_POST['hd_gallery_image_id']))
    :[];
  $titles=isset($_POST['hd_gallery_image_title'])
    ?array_map('sanitize_text_field',(array)wp_unslash($_POST['hd_gallery_image_title']))
    :[];
  $events=isset($_POST['hd_gallery_image_event'])
    ?array_map('sanitize_text_field',(array)wp_unslash($_POST['hd_gallery_image_event']))
    :[];

  $images=[];
  $seen=[];
  foreach($ids as $index=>$image_id){
    if(!$image_id||isset($seen[$image_id])||get_post_type($image_id)!=='attachment') continue;
    $seen[$image_id]=true;
    $images[]=[
      'id'=>$image_id,
      'title'=>$titles[$index]??'',
      'event'=>$events[$index]??'',
    ];
  }

  if($images){
    update_post_meta($post_id,'_hd_gallery_images',$images);
  }else{
    delete_post_meta($post_id,'_hd_gallery_images');
  }
}
add_action('save_post_hd_gallery_album','hd_save_gallery_album');

function hd_gallery_album_title_placeholder($title,$post){
  return $post instanceof WP_Post&&$post->post_type==='hd_gallery_album'
    ?'Category name, for example Birthdays'
    :$title;
}
add_filter('enter_title_here','hd_gallery_album_title_placeholder',10,2);

function hd_gallery_album_admin_assets($hook){
  $screen=get_current_screen();
  if(!$screen||$screen->post_type!=='hd_gallery_album') return;
  wp_enqueue_media();
  wp_enqueue_script('jquery-ui-sortable');
  wp_enqueue_style(
    'hd-gallery-admin',
    get_template_directory_uri().'/assets/gallery-admin.css',
    [],
    (string)filemtime(get_template_directory().'/assets/gallery-admin.css')
  );
  wp_enqueue_script(
    'hd-gallery-admin',
    get_template_directory_uri().'/assets/gallery-admin.js',
    ['jquery','jquery-ui-sortable'],
    (string)filemtime(get_template_directory().'/assets/gallery-admin.js'),
    true
  );
}
add_action('admin_enqueue_scripts','hd_gallery_album_admin_assets');

function hd_gallery_album_columns($columns){
  return [
    'cb'=>$columns['cb']??'<input type="checkbox">',
    'title'=>'Gallery category',
    'hd_gallery_preview'=>'Images',
    'hd_gallery_count'=>'Image count',
    'menu_order'=>'Order',
    'date'=>'Date',
  ];
}
add_filter('manage_hd_gallery_album_posts_columns','hd_gallery_album_columns');

function hd_gallery_album_column_content($column,$post_id){
  $images=get_post_meta($post_id,'_hd_gallery_images',true);
  if(!is_array($images)) $images=[];
  if($column==='hd_gallery_preview'){
    echo '<div class="hd-gallery-admin-thumbs">';
    foreach(array_slice($images,0,5) as $image){
      echo wp_get_attachment_image(absint($image['id']??0),[52,52],false,['loading'=>'lazy']);
    }
    echo '</div>';
  }elseif($column==='hd_gallery_count'){
    echo esc_html((string)count($images));
  }elseif($column==='menu_order'){
    echo esc_html((string)get_post_field('menu_order',$post_id));
  }
}
add_action('manage_hd_gallery_album_posts_custom_column','hd_gallery_album_column_content',10,2);

function hd_gallery_album_admin_order($query){
  if(!is_admin()||!$query->is_main_query()||$query->get('post_type')!=='hd_gallery_album') return;
  if(!$query->get('orderby')) $query->set('orderby',['menu_order'=>'ASC','date'=>'ASC']);
}
add_action('pre_get_posts','hd_gallery_album_admin_order');

function hd_get_gallery_albums(){
  return get_posts([
    'post_type'=>'hd_gallery_album',
    'post_status'=>'publish',
    'posts_per_page'=>-1,
    'orderby'=>['menu_order'=>'ASC','date'=>'ASC'],
    'order'=>'ASC',
    'no_found_rows'=>true,
  ]);
}

function hd_get_gallery_filters(){
  $filters=[];
  foreach(hd_get_gallery_albums() as $album){
    $slug=$album->post_name?:sanitize_title($album->post_title);
    if($slug!=='') $filters[$slug]=get_the_title($album);
  }
  if($filters) return $filters;

  // Temporary compatibility with previously created per-image records.
  $terms=get_terms([
    'taxonomy'=>'hd_gallery_category',
    'hide_empty'=>true,
    'orderby'=>'name',
    'order'=>'ASC',
  ]);
  if(!is_wp_error($terms)){
    foreach($terms as $term) $filters[$term->slug]=$term->name;
  }
  return $filters;
}

/**
 * Normalized data consumed by page-gallery.php.
 */
function hd_get_managed_gallery_items(){
  $albums=hd_get_gallery_albums();
  if($albums){
    $items=[];
    foreach($albums as $album){
      $category=$album->post_name?:sanitize_title($album->post_title);
      $images=get_post_meta($album->ID,'_hd_gallery_images',true);
      if(!is_array($images)) continue;
      foreach($images as $image){
        $image_id=absint($image['id']??0);
        if(!$image_id) continue;
        if(!isset($items[$image_id])){
          $attachment_title=get_the_title($image_id);
          $items[$image_id]=[
            'post_id'=>$album->ID,
            'id'=>$image_id,
            'title'=>(string)($image['title']??'')?:$attachment_title,
            'event'=>(string)($image['event']??'')?:get_the_title($album),
            'categories'=>[$category],
            'shape'=>'landscape',
          ];
        }elseif(!in_array($category,$items[$image_id]['categories'],true)){
          $items[$image_id]['categories'][]=$category;
        }
      }
    }
    return array_values($items);
  }

  $posts=get_posts([
    'post_type'=>'hd_gallery_item',
    'post_status'=>'publish',
    'posts_per_page'=>-1,
    'orderby'=>['menu_order'=>'ASC','date'=>'DESC'],
    'order'=>'ASC',
    'no_found_rows'=>true,
  ]);
  $items=[];
  foreach($posts as $gallery_post){
    $image_id=get_post_thumbnail_id($gallery_post);
    if(!$image_id) continue;
    $categories=wp_get_post_terms($gallery_post->ID,'hd_gallery_category',['fields'=>'slugs']);
    if(is_wp_error($categories)) $categories=[];
    $event=(string)get_post_meta($gallery_post->ID,'_hd_gallery_event',true);
    $items[]=[
      'post_id'=>$gallery_post->ID,
      'id'=>(int)$image_id,
      'title'=>get_the_title($gallery_post),
      'event'=>$event!==''?$event:'Happy Day Toronto setup',
      'categories'=>array_values(array_filter(array_map('sanitize_title',$categories))),
      'shape'=>'landscape',
    ];
  }
  return $items;
}
