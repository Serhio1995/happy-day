<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Bridal Shower Balloons for Her Moment to Shine',
    'intro' => [
        'Celebrate the bride-to-be with elegant, stylish, and photo-ready bridal shower balloons in Toronto and across the GTA. Happy Day Toronto creates custom balloon decor for bridal showers, bride-to-be parties, restaurant celebrations, home gatherings, banquet halls, and private event spaces.',
        'From soft balloon garlands to beautiful backdrops and bride-to-be decor, we design each setup around your colours, venue, theme, and celebration style.',
    ],
    'hero_button' => 'Plan My Bridal Shower Decor',
    'hero_image' => 85,
    'card_asset' => 'assets/images/bridal-shower-balloon-decoration-toronto.webp',
    'sections' => [
        [
            'title' => 'Elegant Bridal Shower Balloon Decor',
            'image' => 118,
            'paragraphs' => [
                'A bridal shower should feel personal, beautiful, and memorable. Our bridal shower balloon decor can be designed for soft romantic themes, modern neutral palettes, luxury displays, floral-inspired setups, playful bride-to-be parties, or elegant pre-wedding celebrations.',
                'We can create a simple balloon garland around a sign or dessert table, or a larger setup with a backdrop, balloon arch, balloon wall, floral accents, custom signage, and a photo area. Each design is planned around the space, guest flow, colours, and the type of photos you want to create.',
                'For a fuller event setup, bridal shower balloons can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . ', or ' . $link('services/wedding-balloons', 'wedding balloon decor') . '.',
            ],
        ],
        [
            'title' => 'Bridal Shower Balloon Arch',
            'class' => 'service-age-section',
            'image' => 119,
            'paragraphs' => [
                'A bridal shower balloon arch is one of the most popular ways to create a strong focal point. It can be placed around the entrance, behind the dessert table, near the gift area, or as part of a main photo setup.',
                'Balloon arches can be soft and minimal or full and dramatic depending on the venue and theme. Popular colours include white, blush, nude, champagne, gold, silver, sage, pink, lavender, ivory, and pearl-inspired tones.',
                'A bridal shower balloon arch works especially well with a welcome sign, custom bride-to-be sign, flower accents, a shimmer wall, a round backdrop, or a dessert table display.',
            ],
            'lead' => 'A bridal shower arch can frame:',
            'list' => [
                'The event entrance',
                'A bride-to-be backdrop',
                'The dessert table',
                'The gift area',
                'A welcome sign',
                'The main photo zone',
            ],
        ],
        [
            'title' => 'Bridal Shower Balloon Garland & Backdrop',
            'class' => 'service-options-section',
            'paragraphs' => [
                'A bridal shower balloon garland is a flexible decor option that can be used in many areas of the event. It can frame a backdrop, decorate a welcome sign, wrap around a dessert table, highlight the bride’s chair, or create a soft photo area for guests.',
                'For backdrop-focused setups, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page.',
            ],
            'lead' => 'Popular options include:',
            'list' => [
                'Bridal shower balloon garlands',
                'Bridal shower balloon arches',
                'Bridal shower balloon backdrops',
                'Backdrop and balloon combinations',
                'Balloon walls for photos',
                'Balloon bouquets and table accents',
                'Bridal shower centerpieces',
                'Balloon and flower decoration',
                'Bride-to-be balloon decoration',
                'Welcome signs with balloons',
            ],
        ],
        [
            'title' => 'Bride-to-Be Balloon Decoration',
            'class' => 'service-themes-section',
            'image' => 120,
            'paragraphs' => [
                'Bride-to-be balloon decoration is perfect for creating a fun and beautiful area for photos, gifts, cake, and group moments. This can include a bride-to-be sign, balloon garland, backdrop, balloon bouquets, floral accents, and colour-matched decor.',
                'We can create soft and elegant bride-to-be balloons for a classy bridal shower or something more playful for a pre-wedding celebration. A party-focused setup can include bachelorette-inspired colours, metallic balloons, heart details, or a bold photo area.',
                'Every setup is tailored to the event rather than copied from a fixed theme, so the design feels right for the bride, venue, and celebration style.',
            ],
        ],
        [
            'title' => 'Bridal Shower Balloon Centerpieces, Bouquets & Table Decor',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Not every bridal shower needs a large installation. Smaller decor pieces can also make the event feel styled and intentional. Bridal shower balloon centerpieces and bridal shower balloon bouquets work well for tables, entrances, gift areas, dessert tables, and restaurant spaces.',
                'Balloon bouquets can be used as standalone accents or combined with a main backdrop or garland. Table decor can include small balloon arrangements, floral details, mini signs, soft ribbons, metallic accents, and colour-matched pieces that fit the event theme.',
                'These details are especially useful for smaller rooms, restaurant showers, condo party rooms, and intimate home celebrations.',
            ],
        ],
        [
            'title' => 'Bridal Shower Balloons for Different Themes',
            'class' => 'service-backdrops-section',
            'image' => 121,
            'paragraphs' => [
                'Bridal shower balloons can be customized to match many different styles. Some clients prefer a clean and elegant setup, while others want something fun, bright, floral, romantic, or modern.',
                'If you already have inspiration photos, colours, or a theme name, we can help turn it into a bridal shower balloon setup that fits your venue.',
            ],
            'lead' => 'Popular bridal shower themes include:',
            'list' => [
                'She Said Yes',
                'Bride-to-Be',
                'Miss to Mrs.',
                'Champagne brunch',
                'Garden and floral shower',
                'Pink and gold',
                'White and champagne',
                'Boho neutral',
                'Pearls and bows',
                'Romantic blush and ivory',
            ],
        ],
        [
            'title' => 'Bridal Shower Balloons in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides bridal shower balloons in Toronto and across the Greater Toronto Area. We decorate homes, condos, restaurants, banquet halls, party rooms, private venues, community spaces, and outdoor celebration areas.',
                'If you are searching for bridal shower balloons near me, bridal shower balloon decor, bridal shower balloon arch, or balloons for bridal shower events in Toronto, send us your event date, location, colours, theme, and inspiration photos. We will help you choose the right setup for your celebration.',
            ],
        ],
    ],
    'process_title' => 'How Bridal Shower Balloon Booking Works',
    'process' => [
        ['Share Your Bridal Shower Details', 'Tell us your event date, location, theme, colours, venue type, and any inspiration photos you have.'],
        ['Choose the Setup Style', 'We can help you choose a balloon arch, garland, backdrop, balloon bouquet, table decor, balloon and flower decoration, or a full bridal shower setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, decor elements, installation details, setup size, and timing based on your event space.'],
        ['We Set Up the Decor', 'We arrive at your location and install the bridal shower balloon decorations before guests arrive, so the space is ready for photos and celebration.'],
    ],
    'faq' => [
        ['Do you offer bridal shower balloons in Toronto?', 'Yes. Happy Day Toronto offers bridal shower balloons in Toronto and across the GTA for home celebrations, restaurants, banquet halls, condo party rooms, private venues, and outdoor events. We can create balloon arches, garlands, backdrops, balloon bouquets, centerpieces, table decor, and full bridal shower setups.'],
        ['What types of bridal shower balloon decor can you create?', 'We create bridal shower balloon arches, balloon garlands, balloon backdrops, bridal shower balloon walls, balloon bouquets, centerpieces, dessert table decor, welcome sign decor, photo zones, balloon and flower decoration, and bride-to-be balloon setups. Each design can be customized around your colours, venue, and theme.'],
        ['Can you create a bridal shower balloon arch?', 'Yes. A bridal shower balloon arch is one of the most requested options. It can be used around a backdrop, entrance, dessert table, gift area, welcome sign, or photo zone. Balloon arches can be designed in blush, white, champagne, gold, silver, nude, pink, lavender, sage, or any custom colour palette.'],
        ['Do you create bridal shower balloon garlands?', 'Yes. Bridal shower balloon garlands are a beautiful option for dessert tables, backdrops, welcome signs, bride-to-be chairs, photo walls, and gift areas. A garland can be simple and elegant or fuller with flowers, signage, props, and themed accents.'],
        ['Can you create a bridal shower backdrop with balloons?', 'Yes. A bridal shower backdrop with balloons is a great choice for photos and main event styling. We can combine a backdrop with balloon garlands, balloon bouquets, floral accents, custom text, bride-to-be signage, and decor details that match the event theme.'],
        ['Do you offer bride-to-be balloons decoration?', 'Yes. We create bride-to-be balloons decoration for bridal showers, pre-wedding celebrations, and bride-focused parties. These setups can include a bride-to-be sign, balloon garland, backdrop, heart balloons, floral accents, metallic balloons, and photo-ready decor.'],
        ['Can bridal shower balloons be combined with flowers?', 'Yes. Bridal shower balloons can be combined with flowers for a softer and more elegant look. Floral accents work well on balloon garlands, arches, backdrops, table displays, balloon walls, and photo areas.'],
        ['Do you offer bridal shower balloons near me?', 'Happy Day Toronto serves Toronto and many areas across the Greater Toronto Area. If you are looking for bridal shower balloons near me, send us your event location and date, and we will confirm availability for your celebration.'],
        ['How far in advance should I book bridal shower balloon decor?', 'It is best to book as early as possible, especially for weekends, holidays, and larger bridal shower setups. Early booking gives more time to confirm the theme, colours, backdrop rental, floral details, venue access, and installation timing.'],
    ],
    'cta_title' => 'Plan Your Bridal Shower Balloons',
    'event_type' => 'Bridal Shower',
    'cta_text' => [
        'Ready to create a beautiful bridal shower setup? Happy Day Toronto designs custom bridal shower balloons in Toronto and the GTA for arches, garlands, backdrops, bouquets, centerpieces, table decor, photo areas, and bride-to-be celebrations.',
        'Tell us your event date, location, colours, theme, and the type of setup you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Bridal Shower Balloon Quote',
];
