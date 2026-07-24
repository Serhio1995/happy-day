<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Anniversary Balloon Decoration for Another Beautiful Year',
    'intro' => [
        'Celebrate another beautiful year together with custom anniversary balloon decoration in Toronto and across the GTA. Happy Day Toronto creates romantic, elegant, and photo-ready balloon setups for wedding anniversaries, milestone celebrations, private dinners, venue parties, and surprise events.',
        'From soft balloon garlands to stylish backdrops and number displays, we design anniversary decor around your colours, venue, and celebration style.',
    ],
    'hero_button' => 'Plan My Anniversary Decor',
    'hero_image' => 77,
    'sections' => [
        [
            'title' => 'Balloon Decor for Anniversary Celebrations',
            'image' => 110,
            'paragraphs' => [
                'An anniversary is a personal celebration, so the decor should feel warm, meaningful, and connected to the couple or family being celebrated. Our balloon decor for anniversary events can be designed for intimate home dinners, restaurant celebrations, banquet halls, surprise parties, family gatherings, and larger milestone events.',
                'We can create a simple romantic setup or a more detailed event display with a backdrop, balloon garland, floral accents, signage, number balloons, and a photo area. The style can be soft and elegant, modern and minimal, luxury and dramatic, or bright and festive depending on the event.',
                'For a more complete setup, anniversary balloon decoration can be combined with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Anniversary Balloon Decoration for Romantic Events',
            'class' => 'service-age-section',
            'image' => 111,
            'paragraphs' => [
                'Romantic anniversary decor often works best when it feels clean, soft, and intentional. Balloon colours like white, ivory, champagne, blush, gold, silver, red, burgundy, black, nude, and soft pink can create a polished look for dinners, surprise setups, and venue celebrations.',
                'We can help you choose the right setup based on the room size, event style, photos, and budget.',
            ],
            'lead' => 'Popular anniversary balloon decoration options include:',
            'list' => [
                'Balloon garlands for photo areas',
                'Anniversary backdrops',
                'Entrance and feature-wall arches',
                'Number balloons for milestone years',
                'Balloon and flower decoration',
                'Cake table balloon decor',
                'Romantic room setups',
                'Custom anniversary signs',
                'Elegant balloon walls',
                'Small home surprise setups',
            ],
        ],
        [
            'title' => '25th and 50th Anniversary Balloon Decorations',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Milestone anniversaries often deserve a more special setup. A 25th anniversary balloon decoration may use silver, white, ivory, or soft metallic colours to create a classic celebration style. A 50th anniversary balloon decoration often works beautifully with gold, champagne, white, black, or elegant neutral tones.',
                'For these events, we can create decor around the main celebration area, sweetheart table, family photo zone, cake table, entrance, or stage. Number balloons, custom signage, backdrops, and floral details can help make the milestone feel more personal and memorable.',
            ],
            'lead' => 'Milestone decor can include:',
            'list' => [
                'Silver 25th anniversary displays',
                'Gold 50th anniversary setups',
                'Milestone number balloons',
                'Family photo backdrops',
                'Sweetheart and cake table decor',
                'Custom signs and floral details',
            ],
        ],
        [
            'title' => 'Wedding Anniversary Balloon Decoration',
            'class' => 'service-themes-section',
            'image' => 112,
            'paragraphs' => [
                'Wedding anniversary balloon decoration can be created for couples celebrating a private dinner, family party, restaurant event, banquet hall celebration, or surprise setup. The decor can highlight the number of years together, the couple’s names, a favourite colour palette, or a romantic theme.',
                'For wedding anniversaries, we often recommend a clean backdrop with balloon garlands, a small floral accent, number balloons, and a decorated cake or dessert area. This creates a clear focal point for photos without making the room feel crowded.',
                'If you are planning related romantic events, you can also explore our ' . $link('services/wedding-balloons', 'wedding balloon decor') . ' and ' . $link('services/engagement-balloons', 'engagement balloon decoration') . ' services.',
            ],
        ],
        [
            'title' => 'Anniversary Backdrops, Garlands & Photo Areas',
            'class' => 'service-room-section',
            'paragraphs' => [
                'A photo area is one of the most useful parts of anniversary decor because guests naturally gather there throughout the event. A backdrop with balloons gives the celebration a central visual moment and makes photos look more polished.',
                'Anniversary backdrops can include balloon garlands, number balloons, custom signage, flowers, props, or a simple colour theme. Balloon garlands can also be placed around a dessert table, entrance, fireplace, restaurant wall, or banquet hall stage.',
                'For more backdrop options, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page. For arch and garland styles, visit our ' . $link('services/balloon-arch-garland', 'balloon arch and garland') . ' page.',
            ],
        ],
        [
            'title' => 'Anniversary Balloon Decoration Ideas',
            'class' => 'service-backdrops-section',
            'image' => 113,
            'paragraphs' => [
                'If you are not sure what style to choose, we can help you plan anniversary balloon decoration ideas based on your event type and venue. Some couples prefer romantic and minimal decor, while others want a larger celebration setup with a backdrop, balloons, flowers, signage, and a cake table.',
                'Every idea can be adjusted for a small private celebration or a larger family event.',
            ],
            'lead' => 'Popular ideas include:',
            'list' => [
                'Gold and white anniversary balloons',
                'Red and black romantic decor',
                'Silver 25th anniversary decor',
                'Gold 50th anniversary displays',
                'Photo backdrop balloon garlands',
                'Anniversary number balloons',
                'Balloon and flower decor',
                'Restaurant table setups',
                'Home surprise setups',
                'Elegant banquet hall decor',
            ],
        ],
        [
            'title' => 'Anniversary Balloon Decoration in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides anniversary balloon decoration in Toronto and across the Greater Toronto Area. We decorate homes, condos, restaurants, banquet halls, private venues, party rooms, and event spaces for anniversary celebrations of different sizes.',
                'If you are searching for anniversary balloon decoration, balloon decor for anniversary, or wedding anniversary balloon decoration in Toronto, send us your event date, location, colour preferences, and setup ideas. We will help you choose decor that fits your celebration.',
            ],
        ],
    ],
    'process_title' => 'How Anniversary Balloon Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us the anniversary date, location, milestone year, colour palette, venue type, and any inspiration photos you have.'],
        ['Choose the Decor Style', 'We can help you choose a balloon garland, backdrop, arch, number display, table setup, balloon and flower decoration, or a full anniversary setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, decor elements, setup size, installation details, and timing based on your event space.'],
        ['We Set Up the Decor', 'We arrive at the event location and install the anniversary balloon decorations before guests arrive or photos begin.'],
    ],
    'faq' => [
        ['Do you offer anniversary balloon decoration in Toronto?', 'Yes. Happy Day Toronto offers anniversary balloon decoration in Toronto and across the GTA for private dinners, restaurant celebrations, banquet halls, home events, surprise parties, and milestone anniversaries. We can create balloon garlands, backdrops, arches, number displays, balloon and flower decoration, and elegant photo-ready setups.'],
        ['What types of anniversary balloon decor can you create?', 'We can create balloon decor for anniversary celebrations, including romantic backdrops, balloon garlands, entrance arches, cake table decor, number balloons, room setups, photo areas, and full event displays. Each setup can be customized around your colours, venue, milestone year, and celebration style.'],
        ['Can you create 25th anniversary balloon decoration?', 'Yes. We can create 25th anniversary balloon decoration using silver, white, ivory, champagne, or custom colours. A 25th anniversary setup can include number balloons, a backdrop, balloon garland, cake table decor, signage, and photo area styling.'],
        ['Do you offer 50th anniversary balloon decorations?', 'Yes. We offer 50th anniversary balloon decorations for golden anniversary celebrations, family parties, restaurant events, banquet halls, and private venues. Gold, white, champagne, black, and neutral tones are popular choices for 50th anniversary balloon setups.'],
        ['Can you create wedding anniversary balloon decoration?', 'Yes. Wedding anniversary balloon decoration can be designed for couples celebrating at home, in a restaurant, at a banquet hall, or in a private event venue. We can include romantic colours, number balloons, custom signage, floral accents, backdrops, and balloon garlands.'],
        ['Can anniversary balloons be combined with flowers?', 'Yes. Balloon and flower decoration works very well for anniversary events because it creates a softer and more elegant look. Flowers can be added to balloon garlands, backdrops, arches, table displays, and photo areas.'],
        ['Do you decorate small anniversary celebrations at home?', 'Yes. We can create anniversary balloon decoration for home celebrations, including living rooms, dining rooms, condo party rooms, backyards, and small private spaces. Home setups can be simple, romantic, and compact while still creating a beautiful focal point for photos.'],
        ['How far in advance should I book anniversary balloon decor?', 'It is best to book as early as possible, especially for weekends, holidays, and larger milestone celebrations. Early booking gives more time to confirm colours, setup details, backdrop rental, flowers, signage, and installation timing.'],
    ],
    'cta_title' => 'Plan Your Anniversary Balloon Decoration',
    'event_type' => 'Anniversary',
    'cta_text' => [
        'Ready to celebrate your special milestone? Happy Day Toronto creates custom anniversary balloon decoration in Toronto and the GTA for romantic celebrations, wedding anniversaries, milestone years, home setups, restaurant events, and venue parties.',
        'Tell us your event date, location, anniversary year, colours, and setup ideas. We will help you plan the right balloon decor for your celebration.',
    ],
    'cta_button' => 'Get Anniversary Balloon Decor Quote',
];
