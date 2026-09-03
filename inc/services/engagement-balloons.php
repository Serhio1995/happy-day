<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Engagement Balloon Decoration for the Perfect Yes',
    'intro' => [
        'Celebrate the moment with custom engagement balloon decoration in Toronto and across the GTA. Happy Day Toronto creates romantic balloon decor for proposals, engagement parties, Marry Me setups, private dinners, restaurant celebrations, home surprises, and photo-ready event spaces.',
        'From soft balloon garlands to elegant backdrops and proposal setups, we design each engagement decoration around your colours, location, theme, and celebration style.',
    ],
    'hero_button' => 'Plan My Engagement Decor',
    'hero_image' => 88,
    'card_asset' => 'assets/images/engagement-balloon-decoration-toronto.webp',
    'sections' => [
        [
            'title' => 'Romantic Balloon Decoration for Engagement Celebrations',
            'image' => 165,
            'paragraphs' => [
                'An engagement is one of the most meaningful moments in a couple’s story, so the decor should feel personal, romantic, and beautiful in photos. Our balloon decoration for engagement events can be designed for intimate proposals, family celebrations, restaurant dinners, backyard parties, banquet halls, and private venues.',
                'The setup can be simple and elegant or more detailed with a backdrop, balloon garland, flowers, custom signage, candles, heart balloons, or a dedicated photo area. We can create a soft romantic look, a luxury proposal setup, a playful engagement party display, or a clean modern design depending on your space.',
                'For a fuller setup, engagement balloon decoration can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . ', or ' . $link('services/wedding-balloons', 'wedding balloon decor') . '.',
            ],
        ],
        [
            'title' => 'Proposal Balloon Decoration',
            'class' => 'service-age-section',
            'image' => 166,
            'paragraphs' => [
                'Proposal balloon decoration helps create a clear, romantic focal point for the big question. Whether you are planning a surprise at home, a hotel room setup, a restaurant proposal, an outdoor moment, or a private venue celebration, balloons can help make the setting feel intentional and memorable.',
                'If you already have inspiration photos or a proposal plan, send them with your request so we can help shape the decor around your idea.',
            ],
            'lead' => 'Popular proposal setups include:',
            'list' => [
                'Romantic balloon backdrops',
                'Marry Me balloon displays',
                'Heart balloon garlands',
                'Proposal photo areas',
                'Balloon and flower arrangements',
                'Custom names and messages',
                'Romantic colour palettes',
                'Ring-inspired balloon accents',
                'Room balloon setups',
                'Backdrop and balloon combinations',
            ],
        ],
        [
            'title' => 'Marry Me Balloons Decoration',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Marry Me balloons decoration is one of the most popular choices for proposals because it clearly frames the moment. It can be designed as a simple sign with balloons or as a full romantic setup with a backdrop, flowers, candles, heart balloons, and a photo-ready display.',
                'A Marry Me setup can work well in homes, hotel rooms, restaurants, private rooms, rooftops, gardens, event venues, and photo studios. The design can be soft and minimal or more dramatic depending on the surprise you want to create.',
                'We can also create Will You Marry Me balloon decoration with custom text, proposal signage, or a larger feature display.',
            ],
            'lead' => 'A Marry Me setup can include:',
            'list' => [
                'Custom proposal signage',
                'Heart balloon details',
                'Romantic floral accents',
                'Candles and floor decor',
                'Photo-ready backdrops',
                'Garlands and feature displays',
            ],
        ],
        [
            'title' => 'Engagement Party Balloon Decor',
            'class' => 'service-themes-section',
            'image' => 167,
            'paragraphs' => [
                'Engagement party balloon decor is a great way to bring the celebration together after the proposal. Balloons can decorate the entrance, dessert table, sweetheart table, photo area, stage, backyard, restaurant room, or banquet hall.',
                'Engagement party setups can include balloon garlands, arches, backdrops, dessert table decoration, guest photo zones, balloon walls, balloon and flower decor, couple-name signage, ring-inspired balloons, and romantic table accents.',
                'We often recommend a backdrop or balloon garland as the main feature because guests naturally gather there for photos.',
            ],
        ],
        [
            'title' => 'Engagement Backdrops, Garlands & Photo Areas',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Backdrops and garlands are some of the best options for engagement decorations because they create a polished area for photos. A backdrop can highlight the couple, frame the proposal moment, or become the main display at the engagement party.',
                'Balloon garlands can be added around a backdrop, welcome sign, dessert table, or entrance. For a softer look, balloons can be combined with flowers, fabric, signage, and romantic colour palettes.',
                'Popular colours include white, ivory, blush, champagne, gold, silver, nude, red, burgundy, black, and soft pink. For more backdrop options, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page.',
            ],
        ],
        [
            'title' => 'Engagement Decoration with Balloons & Flowers',
            'class' => 'service-backdrops-section',
            'image' => 168,
            'paragraphs' => [
                'Engagement decoration with balloons can feel even more romantic when flowers are added. Balloon and flower decoration works well for proposals, engagement parties, Marry Me setups, backdrops, arches, and photo corners.',
                'Flowers can be added to balloon garlands, around signs, on backdrops, near the floor area, or around a dessert table. This style is especially good for couples who want a soft, elegant, and polished look rather than a purely balloon-based setup.',
                'For floral-style setups, visit our ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . ' page.',
            ],
            'lead' => 'Floral balloon details include:',
            'list' => [
                'Flower-accented garlands',
                'Romantic proposal backdrops',
                'Floral balloon arches',
                'Sign and floor arrangements',
                'Dessert table accents',
                'Soft photo-corner styling',
            ],
        ],
        [
            'title' => 'Engagement Balloon Decoration in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides engagement balloon decoration in Toronto and across the Greater Toronto Area. We decorate homes, condos, restaurants, hotel rooms, banquet halls, private venues, rooftops, backyards, and event spaces.',
                'If you are looking for engagement balloon decoration, proposal balloon decoration, engagement party balloon decor, Marry Me balloons decoration, or Will You Marry Me balloon decoration in Toronto, send us your event date, location, colour preferences, and setup ideas. We will help you choose the right romantic balloon decor for the occasion.',
            ],
        ],
    ],
    'process_title' => 'How Engagement Balloon Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, location, occasion, colour palette, setup area, and whether the decor is for a proposal or engagement party.'],
        ['Choose the Setup Style', 'We can help you choose a proposal backdrop, Marry Me setup, balloon garland, balloon arch, engagement party backdrop, balloon and flower decoration, or full romantic setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, layout, signage details, floral accents, installation plan, and setup timing based on your location.'],
        ['We Set Up the Decor', 'We arrive at the event location and install the engagement balloon decorations before the proposal, party, dinner, or photo moment begins.'],
    ],
    'faq' => [
        ['Do you offer engagement balloon decoration in Toronto?', 'Yes. Happy Day Toronto offers engagement balloon decoration in Toronto and across the GTA for proposals, engagement parties, Marry Me setups, restaurant celebrations, home surprises, hotel room setups, banquet halls, and private venues. We can create balloon garlands, backdrops, arches, romantic photo areas, and balloon and flower setups.'],
        ['What types of engagement balloon decorations can you create?', 'We create engagement balloon decorations for proposals, engagement parties, backdrops, dessert tables, entrances, photo areas, and romantic room setups. Popular options include balloon garlands, Marry Me balloon displays, engagement backdrops, heart balloons, balloon arches, floral balloon decor, and custom signage.'],
        ['Can you create proposal balloon decoration?', 'Yes. Proposal balloon decoration can include a romantic backdrop, Marry Me sign, heart balloons, flowers, balloon garlands, floor balloons, candles, and a photo-ready setup. We can design the decor around your proposal location, colours, and surprise plan.'],
        ['Do you offer Marry Me balloons decoration?', 'Yes. We create Marry Me balloons decoration for proposals in homes, restaurants, hotel rooms, rooftops, private venues, and event spaces. A Marry Me setup can be simple and elegant or more detailed with a backdrop, flowers, heart balloons, and custom decorative details.'],
        ['Can you create will you marry me balloon decoration?', 'Yes. We can create Will You Marry Me balloon decoration with custom text, proposal signage, balloon garlands, flowers, and romantic colours. This style is ideal when you want the proposal message to be the main visual focus of the setup.'],
        ['Do you decorate engagement parties?', 'Yes. We offer engagement party balloon decor for home parties, restaurants, banquet halls, backyards, private rooms, and event venues. Engagement party decor can include balloon arches, garlands, backdrops, dessert table decor, photo areas, and balloon and flower decoration.'],
        ['Can engagement balloons be combined with flowers?', 'Yes. Engagement balloons can be combined with flowers for a softer, more romantic look. Floral accents work well on balloon garlands, arches, backdrops, proposal displays, dessert tables, and photo areas.'],
        ['What colours work best for engagement balloon decoration?', 'Popular colours for engagement balloon decoration include white, ivory, blush, champagne, gold, silver, nude, red, burgundy, black, and soft pink. We can also match the setup to your venue, outfit colours, proposal theme, or future wedding palette.'],
        ['How far in advance should I book engagement balloon decor?', 'It is best to book engagement balloon decor as early as possible, especially for weekends, restaurant proposals, hotel room setups, and larger engagement parties. Early booking gives more time to confirm colours, location access, setup timing, signage, flowers, and installation details.'],
    ],
    'cta_title' => 'Plan Your Engagement Balloon Decoration',
    'event_type' => 'Engagement',
    'cta_text' => [
        'Ready to create a romantic setup for your proposal or engagement party? Happy Day Toronto designs custom engagement balloon decoration in Toronto and the GTA for Marry Me setups, proposals, backdrops, garlands, party decor, and photo-ready celebration spaces.',
        'Tell us your date, location, colours, occasion, and the type of engagement balloon decoration you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Engagement Balloon Decor Quote',
];
