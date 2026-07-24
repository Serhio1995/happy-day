<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Balloon Arch & Garland Decoration That Makes an Entrance',
    'intro' => [
        'Create a beautiful entrance, backdrop, or photo area with custom balloon arch and garland decoration in Toronto and across the GTA. Happy Day Toronto designs balloon arches and garlands for birthdays, weddings, baby showers, bridal showers, corporate events, graduations, grand openings, and private celebrations.',
        'From soft balloon garlands to full entrance arches and round arch balloon decoration, we create each setup around your event colours, venue, theme, and celebration style.',
    ],
    'hero_button' => 'Plan My Balloon Arch Setup',
    'hero_image' => 81,
    'sections' => [
        [
            'title' => 'Custom Balloon Arch Decor for Events',
            'image' => 150,
            'paragraphs' => [
                'Balloon arch decor is one of the most versatile ways to decorate an event. It can frame an entrance, highlight a dessert table, create a photo area, decorate a stage, or make a backdrop feel more complete.',
                'A balloon arch can be bold and colourful for a birthday, soft and romantic for a wedding, playful for a baby shower, or clean and branded for a corporate event. The shape, size, colours, and placement can all be customized to fit your venue and event style.',
                'For a fuller setup, balloon arch decoration can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloons-for-birthdays', 'birthday balloon decoration') . ', ' . $link('services/wedding-balloons', 'wedding balloon decor') . ', ' . $link('services/baby-shower-balloons', 'baby shower balloons') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Balloon Garland Decoration',
            'class' => 'service-age-section',
            'image' => 151,
            'paragraphs' => [
                'Balloon garland decoration is a great choice when you want a stylish setup that can be adapted to almost any space. A garland can be placed around a backdrop, across a wall, over a dessert table, around a welcome sign, near an entrance, or along a staircase or railing.',
                'Balloon garlands can be simple and elegant or full and dramatic. They can include different balloon sizes, colours, metallic accents, flowers, ribbons, signage, or themed details. If you are not sure whether you need an arch or a garland, we can recommend the right setup based on your space.',
            ],
            'lead' => 'Popular balloon garland setups include:',
            'list' => [
                'Backdrop garlands',
                'Dessert table garlands',
                'Welcome sign garlands',
                'Half arch decoration',
                'Round arch decoration',
                'Entrance garlands',
                'Staircase balloon garlands',
                'Garlands with flowers',
                'Custom colour garlands',
                'Themed party garlands',
            ],
        ],
        [
            'title' => 'Entrance Arch Balloon Decoration',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Entrance arch balloon decoration is perfect when you want guests to feel the celebration before they even walk into the room. A balloon arch at the entrance can welcome guests, highlight the event theme, and create a strong first impression.',
                'Entrance arches work well for birthday parties, weddings, baby showers, corporate events, grand openings, school events, and seasonal celebrations. They can be designed with soft colours, bold colours, branded colours, metallic tones, or a theme-specific palette.',
                'For business events and grand openings, entrance arches can be paired with branded signage, ribbon-cutting areas, or photo backdrops. For private parties, they can match the main backdrop, cake table, or event colour palette.',
            ],
            'lead' => 'Entrance arches work well for:',
            'list' => [
                'Birthday parties',
                'Wedding entrances',
                'Baby and bridal showers',
                'Corporate events',
                'Grand openings',
                'School celebrations',
                'Seasonal events',
                'Branded photo areas',
            ],
        ],
        [
            'title' => 'Half Arch & Round Arch Balloon Decoration',
            'class' => 'service-themes-section',
            'image' => 152,
            'paragraphs' => [
                'Half arch balloon decoration and round arch balloon decoration are popular choices for modern event setups. These styles work especially well around circular backdrops, shimmer walls, welcome signs, dessert tables, and photo zones.',
                'A half arch creates a softer, asymmetrical look that feels stylish and less formal. A round arch creates a complete frame that works beautifully for birthdays, baby showers, bridal showers, weddings, engagements, and photo areas.',
                'These setups can be styled with pastel balloons, beige and white tones, gold or chrome accents, floral details, custom signs, number balloons, celebration themes, wedding palettes, or corporate colours.',
            ],
        ],
        [
            'title' => 'Balloon Arch Decoration for Birthday Parties',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Balloon arch decoration for birthday parties can make the event feel more festive and photo-ready. A birthday arch can frame the cake table, highlight a number display, decorate the entrance, or create a main photo area for guests.',
                'Birthday balloon arch decorations can be designed for kids, teens, adults, milestone birthdays, first birthdays, Sweet 16 celebrations, and themed parties.',
                'The design can be playful, colourful, elegant, neutral, metallic, or fully themed around the celebration.',
            ],
        ],
        [
            'title' => 'Balloon Arch Wedding Decorations',
            'class' => 'service-backdrops-section',
            'image' => 153,
            'paragraphs' => [
                'Balloon arch wedding decorations can be soft, romantic, and elegant when designed with the right colours and placement. A wedding balloon arch can be used around the entrance, sweetheart table, ceremony space, photo area, stage, or dessert table.',
                'Popular wedding colours include white, ivory, champagne, blush, nude, sage, gold, silver, and soft neutrals. Balloon arches can also be combined with flowers, fabric, signage, or backdrops for a more polished wedding look.',
                'For wedding-focused decor, visit our ' . $link('services/wedding-balloons', 'wedding balloon decor') . ' page. For softer floral styling, visit our ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . ' page.',
            ],
            'lead' => 'Wedding arch placements include:',
            'list' => [
                'Venue entrances',
                'Sweetheart tables',
                'Ceremony areas',
                'Wedding photo zones',
                'Stages and feature walls',
                'Dessert table displays',
            ],
        ],
        [
            'title' => 'Balloon Arch & Garland Decoration in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides balloon arch and garland decoration in Toronto and across the Greater Toronto Area. We create balloon setups for homes, restaurants, banquet halls, offices, schools, community spaces, retail locations, event venues, and private party spaces.',
                'If you are searching for balloon arch decor near me, balloon arch decorations near me, balloon arch decorators near me, balloon garland decor, or balloon garland decoration in Toronto, send us your event date, location, colours, and setup ideas. We will help you choose the right arch or garland style for your celebration.',
            ],
        ],
    ],
    'process_title' => 'How Balloon Arch & Garland Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us your event date, location, event type, venue space, colour palette, and any inspiration photos you have.'],
        ['Choose the Setup Style', 'We can help you choose a balloon arch, balloon garland, half arch, round arch, entrance arch, backdrop garland, or full balloon installation.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, layout, size, structure, installation details, and setup timing based on your event space.'],
        ['We Set Up the Decor', 'We arrive at your event location and install the balloon arch or garland before guests arrive, so your space is ready for photos and celebration.'],
    ],
    'faq' => [
        ['Do you offer balloon arch decoration in Toronto?', 'Yes. Happy Day Toronto offers balloon arch decoration in Toronto and across the GTA for birthdays, weddings, baby showers, bridal showers, corporate events, grand openings, graduations, and private celebrations. We can create entrance arches, backdrop arches, half arches, round arches, and custom balloon arch setups for different venues.'],
        ['What is the difference between a balloon arch and a balloon garland?', 'A balloon arch usually creates a more structured frame for an entrance, backdrop, stage, or photo area. A balloon garland is more flexible and can be placed around a sign, wall, table, backdrop, staircase, or display. Both options can be customized with colours, flowers, signs, and themed details.'],
        ['Can you create balloon garland decoration for my event?', 'Yes. We create balloon garland decoration for birthdays, baby showers, bridal showers, weddings, corporate events, holiday parties, and private celebrations. Garlands can be simple and clean or more detailed with different balloon sizes, metallic accents, flowers, signage, and themed elements.'],
        ['Do you offer balloon arch decor near me?', 'Happy Day Toronto serves Toronto and many areas across the Greater Toronto Area. If you are searching for balloon arch decor near me, balloon arch decorations near me, or balloon arch decorators near me, send us your event location and date so we can confirm availability.'],
        ['Can you create an entrance arch balloon decoration?', 'Yes. Entrance arch balloon decoration is a great option for welcoming guests and making the event feel more polished from the start. It works well for birthdays, weddings, baby showers, corporate events, grand openings, school events, and seasonal celebrations.'],
        ['Do you offer half arch and round arch balloon decoration?', 'Yes. We create half arch balloon decoration and round arch balloon decoration for backdrops, welcome signs, dessert tables, photo areas, and event displays. These styles are popular for birthdays, baby showers, bridal showers, weddings, engagements, and modern party setups.'],
        ['Can balloon arches be used for weddings?', 'Yes. Balloon arch wedding decorations can be designed in elegant colours and paired with flowers, fabric, signage, or backdrops. Wedding balloon arches can be used for entrances, sweetheart tables, ceremony areas, stages, and photo zones.'],
        ['Can balloon arches and garlands be combined with a backdrop?', 'Yes. Balloon arches and garlands are often combined with backdrops to create a stronger photo area or event focal point. A backdrop can be styled with a half arch, round arch, balloon garland, flowers, signage, props, or custom colours.'],
        ['How much does balloon arch decoration cost?', 'The cost of balloon arch decoration depends on the size, style, balloon colours, location, installation needs, and any add-ons such as flowers, backdrop rental, signage, or custom props. For an accurate quote, send us your event date, location, setup area, and inspiration photos.'],
        ['How far in advance should I book balloon arch or garland decor?', 'It is best to book as early as possible, especially for weekends, holidays, and larger event setups. Early booking gives more time to confirm colours, backdrop needs, venue access, installation timing, and any custom decor details.'],
    ],
    'cta_title' => 'Plan Your Balloon Arch or Garland Setup',
    'event_type' => 'Balloon Arch & Garland',
    'cta_text' => [
        'Ready to create a beautiful event feature? Happy Day Toronto designs custom balloon arch and garland decoration in Toronto and the GTA for birthdays, weddings, baby showers, corporate events, entrances, backdrops, photo areas, and private celebrations.',
        'Tell us your event date, location, colours, and the type of arch or garland setup you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Balloon Arch & Garland Quote',
];
