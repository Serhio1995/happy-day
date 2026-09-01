<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Baby Shower Balloons for the Sweetest Welcome',
    'intro' => [
        'Welcome the new arrival with soft, beautiful, and photo-ready baby shower balloons in Toronto and across the GTA. Happy Day Toronto creates custom balloon decor for baby showers, gender celebrations, family gatherings, restaurant events, home parties, and venue setups.',
        'From elegant balloon arches to themed backdrops and garlands, we design each baby shower setup around your colours, venue, theme, and celebration style.',
    ],
    'hero_button' => 'Plan My Baby Shower Decor',
    'hero_image' => 78,
    'card_asset' => 'assets/images/baby-shower-balloon-decor-toronto.webp',
    'sections' => [
        [
            'title' => 'Beautiful Baby Shower Balloon Decor',
            'image_asset' => 'assets/images/beautiful-baby-shower-balloon-decor.jpg',
            'image_alt' => 'Beautiful custom baby shower balloon decor',
            'paragraphs' => [
                'A baby shower is one of the sweetest celebrations before the baby arrives, and the decor should feel warm, joyful, and personal. Our baby shower balloon decor can be styled for soft neutral themes, pastel colours, baby girl showers, baby boy showers, gender-neutral events, luxury setups, or playful family celebrations.',
                'We can create a simple balloon garland for a dessert table or a larger setup with a backdrop, arch, floral details, signage, and photo area. Each design is planned around the event space, guest flow, theme, and the type of photos you want to create.',
                'For a more complete setup, baby shower balloons can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Baby Shower Balloon Arch',
            'class' => 'service-age-section',
            'image_asset' => 'assets/images/baby-shower-balloon-arch.jpg',
            'image_alt' => 'Baby shower balloon arch for a decorated celebration',
            'paragraphs' => [
                'A baby shower balloon arch is one of the most popular decor choices because it creates a clear focal point for the event. It can be placed at the entrance, around a backdrop, behind the dessert table, near the gift area, or in a main photo zone.',
                'Balloon arches can be soft and minimal or fuller and more dramatic depending on the space. Popular colours include white, cream, beige, blush, pink, blue, sage, gold, silver, lavender, peach, and pastel combinations.',
                'A baby shower balloon arch works especially well when combined with a welcome sign, custom backdrop, flowers, teddy bear theme, moon and stars theme, or baby name signage.',
            ],
            'lead' => 'A baby shower arch can frame:',
            'list' => [
                'The main event entrance',
                'A custom photo backdrop',
                'The dessert table',
                'The gift and welcome area',
                'Baby name signage',
                'A themed feature wall',
            ],
        ],
        [
            'title' => 'Baby Shower Balloon Garlands & Backdrops',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Baby shower balloon garlands are flexible and can be used in many parts of the event. They can frame a backdrop, decorate a dessert table, wrap around a sign, highlight a gift table, or create a soft photo area for guests.',
                'For backdrop-focused events, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page.',
            ],
            'lead' => 'Popular setup options include:',
            'list' => [
                'Baby shower balloon garlands',
                'Entrance and photo-area arches',
                'Baby shower balloon backdrops',
                'Balloon bouquets and table accents',
                'Dessert table balloon decoration',
                'Baby name and welcome signage',
                'Balloon and flower decoration',
                'Soft pastel balloon displays',
                'Neutral baby shower setups',
                'Girl baby shower balloon decor',
            ],
        ],
        [
            'title' => 'Balloons for Baby Shower Themes',
            'class' => 'service-themes-section',
            'image_asset' => 'assets/images/balloons-for-baby-shower-themes.jpg',
            'image_alt' => 'Themed balloon decoration for a baby shower',
            'paragraphs' => [
                'Balloons for baby shower events can be customized to match almost any theme. Some clients want a soft and elegant look, while others prefer a cute themed setup with props, signs, characters, or playful colours.',
                'Popular themes include teddy bear, baby in bloom, moon and stars, Oh Baby, little princess, little gentleman, safari, jungle, boho neutral, pink, blue, sage and beige, or white, gold and cream.',
                'If you already have inspiration photos, colours, or a theme name, we can help turn it into a balloon setup that fits your venue.',
            ],
        ],
        [
            'title' => 'Baby Shower Balloon Bouquet & Table Decor',
            'class' => 'service-room-section',
            'paragraphs' => [
                'A baby shower balloon bouquet is a good option when you want smaller decorative accents instead of a full backdrop or arch. Balloon bouquets can be placed near the gift table, dessert table, entrance, seating area, or photo corner.',
                'They can also be used together with larger decor. For example, a main balloon backdrop can be paired with smaller balloon bouquets around the room to make the event feel more complete.',
                'Table decor can include balloon accents, small arrangements, number or letter balloons, soft floral details, and colour-matched decorations around the cake, sweets, or favours.',
            ],
        ],
        [
            'title' => 'Baby Shower Balloons for Girls and Boys',
            'class' => 'service-backdrops-section',
            'image_asset' => 'assets/images/baby-shower-balloons-for-girls-and-boys.jpg',
            'image_alt' => 'Baby shower balloons styled for girls and boys',
            'paragraphs' => [
                'Happy Day Toronto creates beautiful baby shower balloon decorations for both baby girl and baby boy celebrations.',
                'For baby girl showers, popular colour combinations include blush, pink, white, lavender, peach, gold, and other soft pastel tones. These palettes work beautifully with princess, floral, butterfly, teddy bear, cloud, and elegant modern themes.',
                'For baby boy showers, many clients choose blue, white, beige, sage, silver, navy, or sky-inspired colours. Popular themes include teddy bears, clouds, stars, moons, jungle animals, and classic blue-and-white designs.',
                'Not sure which colour palette will work best? We can recommend balloon colours and design ideas based on your venue, backdrop, and overall baby shower theme.',
            ],
            'lead' => 'Colour and theme ideas:',
            'list' => [
                'Blush, pink and soft pastels',
                'Blue, white and sky tones',
                'Sage, beige and neutral palettes',
                'Princess and floral themes',
                'Teddy bear and cloud themes',
                'Modern gender-neutral decor',
            ],
        ],
        [
            'title' => 'Baby Shower Balloons in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides baby shower balloons in Toronto and throughout the Greater Toronto Area. We decorate homes, condos, restaurants, banquet halls, party rooms, private venues, and outdoor celebration spaces.',
                'Send us your event date, location, theme, colour palette, and preferred setup. We will confirm availability and recommend baby shower balloon decor that fits your venue and celebration style.',
            ],
        ],
    ],
    'process_title' => 'How Baby Shower Balloon Booking Works',
    'process' => [
        ['Share Your Baby Shower Details', 'Tell us your event date, location, theme, colours, venue type, and any inspiration photos you have.'],
        ['Choose the Setup Style', 'We can help you choose a balloon arch, garland, backdrop, balloon bouquet, table decor, balloon and flower decoration, or a full baby shower setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, decor elements, installation details, setup size, and timing based on your event space.'],
        ['We Set Up the Decor', 'We arrive at your location and install the baby shower balloon decorations before guests arrive, so the space is ready for photos and celebration.'],
    ],
    'faq' => [
        ['Do you offer baby shower balloons in Toronto?', 'Yes. Happy Day Toronto offers baby shower balloons in Toronto and across the GTA for home parties, restaurants, banquet halls, condo party rooms, private venues, and outdoor celebrations. We can create balloon arches, garlands, backdrops, balloon bouquets, table decor, and full baby shower setups.'],
        ['What types of baby shower balloon decor can you create?', 'We can create baby shower balloon arches, balloon garlands, balloon backdrops, balloon bouquets, dessert table decor, entrance displays, photo zones, balloon and flower decoration, and themed event setups. Each design can be customized around your colours, theme, venue, and celebration style.'],
        ['Can you create a baby shower balloon arch?', 'Yes. A baby shower balloon arch is one of the most requested options. It can be used around a backdrop, entrance, dessert table, gift area, or photo zone. Balloon arches can be designed in soft pastels, neutral tones, pink, blue, gold, white, sage, or any custom colour palette.'],
        ['Do you create baby shower balloon garlands?', 'Yes. Baby shower balloon garlands are a great choice for dessert tables, backdrops, welcome signs, photo walls, and gift areas. A garland can be simple and elegant or fuller and more detailed with flowers, signage, props, or themed accents.'],
        ['Can you make balloons for a baby shower girl theme?', 'Yes. We create balloons for baby shower girl themes using colours such as pink, blush, white, lavender, peach, gold, and soft neutrals. Girl baby shower setups can include balloon garlands, arches, backdrops, balloon bouquets, floral accents, and custom signs.'],
        ['Do you offer gender-neutral baby shower balloons?', 'Yes. Gender-neutral baby shower balloons can be designed with beige, cream, white, sage green, gold, yellow, brown, terracotta, or pastel colours. These palettes work well for boho themes, teddy bear themes, baby in bloom, moon and stars, and modern baby shower setups.'],
        ['Can baby shower balloons be combined with flowers?', 'Yes. Baby shower balloons can be combined with flowers for a softer and more elegant look. Floral accents work well on balloon garlands, arches, backdrops, dessert table displays, and photo areas.'],
        ['How far in advance should I book baby shower balloon decor?', 'It is best to book as early as possible, especially for weekends, holidays, and larger baby shower setups. Early booking gives more time to confirm the theme, colours, backdrop rental, flowers, venue access, and installation timing.'],
    ],
    'cta_title' => 'Plan Your Baby Shower Balloons',
    'event_type' => 'Baby Shower',
    'cta_text' => [
        'Ready to create a beautiful baby shower setup? Happy Day Toronto designs custom baby shower balloons in Toronto and the GTA for arches, garlands, backdrops, bouquets, photo areas, table decor, and themed celebrations.',
        'Tell us your event date, location, colours, theme, and the type of setup you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Baby Shower Balloon Quote',
];
