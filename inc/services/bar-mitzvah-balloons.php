<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Bar Mitzvah Balloon Decorations for a Milestone to Remember',
    'intro' => [
        'Celebrate this important milestone with custom Bar Mitzvah balloon decorations in Toronto and across the GTA. Happy Day Toronto creates stylish balloon decor for Bar Mitzvahs, Bat Mitzvahs, family celebrations, banquet halls, restaurants, community venues, and private party spaces.',
        'From balloon centerpieces and table decor to backdrops, arches, garlands, and photo areas, we design each setup around your theme, colours, venue, and celebration style.',
    ],
    'hero_button' => 'Plan My Bar Mitzvah Decor',
    'hero_image' => 84,
    'sections' => [
        [
            'title' => 'Custom Bar Mitzvah Balloons for a Meaningful Celebration',
            'image' => 142,
            'paragraphs' => [
                'A Bar Mitzvah is a special family milestone, and the decor should help the celebration feel personal, joyful, and well-planned. Our Bar Mitzvah balloons can be designed for formal receptions, fun party spaces, themed celebrations, family dinners, photo moments, and venue entrances.',
                'We can create a clean and elegant setup, a bright party atmosphere, or a fully themed balloon display depending on your event. The design can include your chosen colour palette, name or initial details, number elements, custom signage, table displays, and a photo-ready backdrop.',
                'For a more complete setup, Bar Mitzvah balloon decorations can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Bar Mitzvah Decoration for Party Spaces',
            'class' => 'service-age-section',
            'image' => 143,
            'paragraphs' => [
                'Bar Mitzvah decoration can be simple, elegant, colourful, modern, or theme-based. Some families want a polished reception look, while others want a fun party setup with bold colours, sports themes, music themes, LED-style inspiration, metallic balloons, or a custom photo area.',
                'Each setup is planned around the venue layout, guest flow, table placement, colours, and the main areas where guests will take photos.',
            ],
            'lead' => 'We create Bar Mitzvah decorations for:',
            'list' => [
                'Banquet hall celebrations',
                'Restaurant events',
                'Synagogue and community halls',
                'Private home celebrations',
                'Condo party rooms',
                'Themed party spaces',
                'Dessert and cake displays',
                'Entrances and welcome areas',
                'Photo zones and backdrops',
                'Dance floor and stage areas',
            ],
        ],
        [
            'title' => 'Bar Mitzvah Balloon Centerpieces',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Bar Mitzvah balloon centerpieces are a good option when you want the room to feel decorated without relying only on one large installation. Centerpieces can bring colour and height to guest tables, dessert tables, welcome tables, or lounge areas.',
                'Balloon centerpieces can be designed in your event colours and paired with table numbers, small signs, themed details, metallic balloons, or custom accents. They can be playful for a teen-focused party or more polished for a formal family celebration.',
                'We can match balloon centerpieces with the backdrop, entrance garland, balloon arch, or main feature wall so the room feels connected.',
            ],
            'lead' => 'Centerpiece options include:',
            'list' => [
                'Guest table arrangements',
                'Dessert table accents',
                'Welcome table displays',
                'Lounge area balloons',
                'Table numbers and signs',
                'Theme-matched metallic details',
            ],
        ],
        [
            'title' => 'Bar Mitzvah Table Decor',
            'class' => 'service-themes-section',
            'image' => 144,
            'paragraphs' => [
                'Bar Mitzvah table decor helps make the event feel organized and complete. Balloon table decorations can be used for guest tables, dessert tables, gift tables, sign-in tables, buffet areas, or the main family table.',
                'Popular options include balloon centerpieces, table bouquets, dessert table garlands, custom colour accents, name or initial displays, welcome sign decor, cake table decoration, and smaller arrangements for restaurant events.',
                'Bar Mitzvah table decorations work especially well when they match the main backdrop or photo zone.',
            ],
        ],
        [
            'title' => 'Bat Mitzvah Balloon Decorations',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Happy Day Toronto also creates Bat Mitzvah balloon decorations for elegant, colourful, themed, or modern celebrations. Bat Mitzvah setups can include soft balloon garlands, photo backdrops, table decorations, balloon centerpieces, arches, shimmer walls, flower accents, and custom signs.',
                'Popular colour palettes include pink and gold, lavender and silver, white and blush, black and hot pink, blue and silver, pastel colours, metallic tones, or custom colours based on the event theme.',
                'Bar Mitzvah and Bat Mitzvah celebrations can share the same thoughtful planning approach while every design remains personal to the family, venue, and theme.',
            ],
        ],
        [
            'title' => 'Backdrops, Arches & Photo Areas',
            'class' => 'service-backdrops-section',
            'image' => 145,
            'paragraphs' => [
                'A backdrop or photo area is one of the most useful decor elements for a Bar Mitzvah party. Guests naturally gather around photo zones, and a strong balloon display can make the event feel more polished in pictures.',
                'Balloon arches can be used at the entrance, near a stage, around a backdrop, or beside the dessert table. Balloon garlands can frame signs, walls, tables, and photo areas. A backdrop with balloons can be customized with colours, name signage, initials, age numbers, or themed props.',
                'For more backdrop options, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page. For garlands and arches, visit our ' . $link('services/balloon-arch-garland', 'balloon arch and garland') . ' page.',
            ],
            'lead' => 'Feature-area options include:',
            'list' => [
                'Entrance balloon arches',
                'Stage and dessert table decor',
                'Custom photo backdrops',
                'Name and initial signage',
                'Age-number displays',
                'Theme-matched props',
            ],
        ],
        [
            'title' => 'Bar Mitzvah Balloon Decorations in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides Bar Mitzvah balloon decorations in Toronto and across the Greater Toronto Area. We decorate banquet halls, restaurants, homes, condo party rooms, community spaces, event venues, and private party locations.',
                'If you are looking for Bar Mitzvah balloons, Bat Mitzvah balloon decorations, Bar Mitzvah table decor, or Bar Mitzvah balloon centerpieces in Toronto, send us your event date, location, theme, colour preferences, and setup ideas. We will help you choose the right balloon decor for your celebration.',
            ],
        ],
    ],
    'process_title' => 'How Bar Mitzvah Balloon Booking Works',
    'process' => [
        ['Share Your Celebration Details', 'Tell us your event date, location, venue type, theme, colour palette, guest table needs, and any inspiration photos you have.'],
        ['Choose the Decor Style', 'We can help you choose balloon centerpieces, table decor, a backdrop, balloon arch, garland, entrance display, or full Bar Mitzvah party setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, table details, backdrop layout, installation plan, and setup timing based on your venue and event schedule.'],
        ['We Set Up the Decor', 'We arrive at your event location and install the balloon decorations before guests arrive, so the space is ready for photos, celebration, and family moments.'],
    ],
    'faq' => [
        ['Do you offer Bar Mitzvah balloon decorations in Toronto?', 'Yes. Happy Day Toronto offers Bar Mitzvah balloon decorations in Toronto and across the GTA for banquet halls, restaurants, community spaces, homes, condo party rooms, and private event venues. We can create balloon centerpieces, table decor, arches, garlands, backdrops, photo areas, and full party setups.'],
        ['What types of Bar Mitzvah balloons can you create?', 'We can create Bar Mitzvah balloons for entrances, guest tables, dessert tables, backdrops, photo zones, stages, and main celebration areas. Popular options include balloon garlands, balloon arches, balloon centerpieces, table balloon decorations, name displays, themed balloon decor, and custom colour setups.'],
        ['Do you create Bat Mitzvah balloon decorations?', 'Yes. We create Bat Mitzvah balloon decorations for elegant, fun, colourful, or themed celebrations. Bat Mitzvah decor can include balloon backdrops, garlands, arches, centerpieces, table decorations, shimmer walls, floral accents, and custom signage.'],
        ['Can you create Bar Mitzvah balloon centerpieces?', 'Yes. Bar Mitzvah balloon centerpieces are a popular option for guest tables, dessert tables, welcome tables, and party spaces. They can be matched to your event colours, theme, table layout, and other balloon decorations in the room.'],
        ['Do you offer Bar Mitzvah table decor?', 'Yes. We can create Bar Mitzvah table decor with balloon centerpieces, balloon bouquets, table accents, dessert table garlands, sign-in table decor, and theme-based arrangements. Table decor can be coordinated with the main backdrop, entrance arch, or photo area.'],
        ['Can you match the Bar Mitzvah party theme?', 'Yes. We can design Bar Mitzvah decorations around your theme, colours, venue, and inspiration photos. Popular styles include sports themes, music themes, luxury metallics, bold colour palettes, black and gold, blue and silver, neon-style parties, and custom name or initial displays.'],
        ['Can Bar Mitzvah balloons be combined with a backdrop?', 'Yes. A backdrop with balloons is a strong choice for Bar Mitzvah and Bat Mitzvah celebrations because it creates a dedicated photo area. It can include balloon garlands, custom signage, themed props, initials, age numbers, and colour-matched decor.'],
        ['How far in advance should I book Bar Mitzvah balloon decor?', 'It is best to book as early as possible, especially for weekends and larger venue setups. Early booking gives more time to confirm the theme, colours, table decor, backdrop rental, venue access, installation timing, and custom details.'],
    ],
    'cta_title' => 'Plan Your Bar Mitzvah Balloon Decorations',
    'event_type' => 'Bar Mitzvah',
    'cta_text' => [
        'Ready to create a beautiful and memorable celebration setup? Happy Day Toronto designs custom Bar Mitzvah balloon decorations in Toronto and the GTA for centerpieces, table decor, backdrops, arches, garlands, photo areas, and themed party spaces.',
        'Tell us your event date, location, colours, theme, and the type of Bar Mitzvah decor you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Bar Mitzvah Balloon Decor Quote',
];
