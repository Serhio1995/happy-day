<?php
if (!defined('ABSPATH')) exit;

/*
 * FAQ copy for the Gallery page ("Balloon Decoration Ideas & Real Photos").
 *
 * Questions stay at the cross-cutting "how do I choose / adapt an idea"
 * level and use the photos as the vehicle, so they serve the gallery's
 * "balloon decoration ideas / photos" intent without repeating the
 * event-specific design, timing and pricing questions the service pages
 * already answer. Answers link outward to the style pages and contact.
 */

$link = static function ($path, $label) {
  return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

$instagram_url = function_exists('hd_instagram_url') ? hd_instagram_url() : '';
$instagram = $instagram_url
  ? '<a href="' . esc_url($instagram_url) . '" target="_blank" rel="noopener">Instagram</a>'
  : 'Instagram';

return [
  [
    'q' => 'How do I choose the right balloon decoration idea for my event?',
    'a' => 'Start with the room and the moment guests will look at and photograph most — an entrance, a cake or sweetheart table, a stage, or a dedicated photo area — and build one strong feature there rather than decorating every wall. Match the scale to the ceiling height and the floor space people need to move through, then choose a palette of two or three balloon colours plus a metallic or neutral. Browsing the gallery filtered to your event type shows how those choices look in real Toronto and GTA venues. For a dense, sculptural look see ' . $link('services/balloon-arch-garland', 'balloon arches and garlands') . '; for a clean photo feature with no wall fixings see ' . $link('services/backdrop-rental', 'backdrop rental') . '.',
  ],
  [
    'q' => 'What are the most popular balloon decoration ideas in these photos?',
    'a' => 'The setups you will see most are organic balloon garlands framing a backdrop, table or doorway; balloon arches marking an entrance or photo spot; freestanding balloon walls and feature panels; oversized number balloons for milestone birthdays and anniversaries; ceiling clouds and canopies for rooms where the floor is tight; and balloon-and-flower accents for a softer, more formal finish. Each has its own page with more examples and the details we need from you: ' . $link('services/balloon-arch-garland', 'balloon arch and garland') . ', ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ', ' . $link('services/number-rental', 'marquee number rental') . ' and ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
  ],
  [
    'q' => 'The photos are inspiring — are they real, and can you recreate one?',
    'a' => 'Every image is a real installation our team designed and set up for a client event across Toronto and the GTA; nothing is stock or a supplier catalogue. We can recreate the style, proportions and mood of any photo, but the finished piece always adapts to your venue, ceiling height, event date and the balloon colours available at the time. Because each garland, arch and backdrop is built by hand for one room, your setup becomes its own version rather than an exact copy. Send the photo with your details through ' . $link('contact', 'the contact page') . ' and we will show you how it translates.',
  ],
  [
    'q' => 'How do I turn a photo I like into a plan for my own space?',
    'a' => 'Look past the balloons and work out what actually makes the photo work — the composition, the colour ratio, whether the piece is wall-mounted or freestanding, and where it sits relative to tables, doors and camera angles. Then send us that photo together with photos and measurements of your own room, your date, guest count and palette. We use those to rescale the idea, re-colour it if needed and confirm what will fit. ' . $link('contact', 'Start a quote') . ' with as much of that information as you have.',
  ],
  [
    'q' => 'How big should a balloon setup be for my room?',
    'a' => 'A photo reads well because the decor is in proportion to the space, not because it is large. In a condo, home or small party room, a compact asymmetric garland or a freestanding mini feature usually gives the strongest result without blocking furniture or walkways. In an open banquet hall, a full arch plus a backdrop or a longer garland holds the room better. Send the width of the wall or area, the ceiling height and where guests will gather, and we will recommend a size — see ' . $link('services/backdrop-rental', 'backdrop rental') . ' for freestanding options.',
  ],
  [
    'q' => 'Can I combine ideas from several photos into one design?',
    'a' => 'Yes, and it is common. The key is to choose one lead feature and let anything else act as an accent, keep the palette to two or three balloon colours plus a metallic or neutral, and make sure the pieces do not compete for the same wall or sightline. Send every photo that appeals to you and note what you like about each one; we will compose them into a single design that suits your venue. You can do that from ' . $link('contact', 'the contact page') . '.',
  ],
  [
    'q' => 'Do ideas from indoor photos work for outdoor events?',
    'a' => 'Sometimes, but not identically. Wind, direct sun, heat and cold change how balloons look, move and last, so an indoor design usually needs heavier bases or frames, different balloon types and shaded placement to work outside. We can adapt most ideas for a patio, backyard or park, or suggest a sheltered version with a backup plan. Tell us the outdoor location and timing when you ' . $link('contact', 'request a quote') . ' so we can plan for the conditions.',
  ],
  [
    'q' => 'Where can I see your newest balloon decoration ideas and photos?',
    'a' => 'We add photos to the gallery regularly after events, with seasonal work going up around Valentine\'s Day, graduation season, Halloween and Christmas. The most recent installations, often from the same week, appear first on our ' . $instagram . '. If you are planning around a specific holiday or theme, ask us and we can send recent examples that are not in the gallery yet.',
  ],
];
