<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Backdrop Rental That Puts Every Moment in Focus',
    'intro' => [
        'Create a beautiful photo-ready focal point with custom backdrop rental in Toronto and across the GTA. Happy Day Toronto provides backdrops for birthdays, weddings, baby showers, bridal showers, corporate events, photoshoots, parties, and private celebrations.',
        'From clean fabric backdrops to balloon backdrop decor, arches, garlands, flowers, signage, and themed setups, we help design a backdrop that fits your event style, colours, venue, and celebration.',
    ],
    'hero_button' => 'Plan My Backdrop Setup',
    'hero_image' => 79,
    'sections' => [
        [
            'title' => 'Custom Backdrop Rental for Events',
            'image' => 146,
            'paragraphs' => [
                'A backdrop is one of the most important decor pieces at an event because it gives guests a clear place to take photos and helps the whole setup feel complete. It can be used behind a cake table, dessert table, sweetheart table, stage, gift area, welcome sign, product display, or main photo zone.',
                'Our backdrop rental service can be simple and elegant or fully styled with balloon decorations, flowers, props, custom signs, and themed details. We can create a soft romantic look, a bright birthday setup, a polished corporate display, or a luxury event photo area depending on your occasion.',
                'For a stronger visual effect, a backdrop can be combined with ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . ', ' . $link('services/balloons-for-birthdays', 'birthday balloon decoration') . ', or ' . $link('services/wedding-balloons', 'wedding balloon decor') . '.',
            ],
        ],
        [
            'title' => 'Balloon Backdrop Decor',
            'class' => 'service-age-section',
            'image' => 147,
            'paragraphs' => [
                'Balloon backdrop decor is a popular choice for birthdays, baby showers, bridal showers, weddings, corporate events, graduations, and private parties. Balloons add colour, shape, and volume to the backdrop while keeping the setup festive and photo-friendly.',
                'A balloon backdrop can be styled in soft pastels, neutrals, metallics, bold colours, seasonal colours, or a custom palette that matches your event.',
            ],
            'lead' => 'Balloon backdrop options include:',
            'list' => [
                'Backdrop balloon garlands',
                'Arches with backdrop panels',
                'Balloon walls for photos',
                'Circle backdrop decoration',
                'Dessert table backdrops',
                'Balloon and backdrop packages',
                'Arch and backdrop setups',
                'Themed party backdrops',
                'Balloon and flower designs',
                'Custom signage accents',
            ],
        ],
        [
            'title' => 'Birthday Backdrop Rental',
            'class' => 'service-options-section',
            'paragraphs' => [
                'A birthday backdrop can turn a simple party area into the main photo moment of the celebration. It works well behind a cake table, dessert table, gift area, number display, or themed setup.',
                'Birthday backdrop rental is suitable for kids’ birthdays, first birthdays, teen parties, adult birthdays, milestone birthdays, and themed celebrations. The backdrop can be paired with balloons, number displays, character-inspired colours, florals, custom signs, or props.',
            ],
            'lead' => 'Popular birthday backdrop styles include:',
            'list' => [
                'First birthday backdrops',
                'Kids’ birthday backdrops',
                'Milestone birthday displays',
                'Cake table backdrops',
                'Princess and pastel themes',
                'Luxury and themed setups',
                'Balloon garland backdrops',
                'Birthday party backdrop rentals',
            ],
        ],
        [
            'title' => 'Wedding Backdrop Rental',
            'class' => 'service-themes-section',
            'image' => 148,
            'paragraphs' => [
                'Wedding backdrop rental is a strong choice for ceremony areas, sweetheart tables, receptions, photo zones, engagement parties, and bridal events. A wedding backdrop can create a clean focal point for photos and help define the most important area of the room.',
                'We can create wedding backdrop rentals with soft fabric, balloon accents, florals, signage, arches, or elegant colour palettes. Popular wedding colours include white, ivory, champagne, blush, nude, gold, silver, sage, and romantic neutral tones.',
                'The scale and materials are planned around the venue, table placement, ceremony layout, and the type of photos you want to create.',
            ],
        ],
        [
            'title' => 'Photo Backdrop Rental',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Photo backdrop rental is ideal when the goal is to create a polished space for pictures, content, and guest interaction. A backdrop helps make photos look more intentional, especially at events where people will be taking pictures throughout the celebration.',
                'Photo backdrop rental can be used for birthdays, weddings, baby showers, bridal showers, corporate events, product displays, brand activations, family portraits, holiday events, social media content, and photoshoots.',
                'Send us the location, style, colour direction, and any inspiration photos. We can help recommend a backdrop style that fits the shoot or event.',
            ],
        ],
        [
            'title' => 'Event, Party & Backdrop Stand Rental',
            'class' => 'service-backdrops-section',
            'image' => 149,
            'paragraphs' => [
                'Event backdrop rental works for many types of celebrations, from small private parties to larger venue setups. A backdrop can be the central design element of the room or a supporting decor piece that frames another area.',
                'When a venue does not have a suitable wall or installation area, backdrop stand rental can create a freestanding photo area, dessert table display, or event feature wall. The right setup depends on venue rules, ceiling height, floor surface, access, available space, and installation needs.',
                'We provide backdrop setups for birthdays, baby showers, bridal showers, baptisms, graduations, engagements, anniversaries, corporate events, Christmas parties, Valentine’s Day events, and Bar Mitzvah celebrations.',
            ],
            'lead' => 'Related event services include:',
            'list' => [
                'Baby shower balloons',
                'Bridal shower balloons',
                'Baptism balloons',
                'Graduation balloons',
                'Engagement balloons',
                'Corporate event balloons',
                'Christmas balloons',
                'Valentine’s Day balloons',
                'Bar Mitzvah balloons',
                'Freestanding backdrop stands',
            ],
        ],
        [
            'title' => 'Backdrop Rental in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides backdrop rental in Toronto and across the Greater Toronto Area for homes, restaurants, banquet halls, offices, community spaces, event venues, photoshoot locations, and private party spaces.',
                'Send us your event date, location, backdrop style, colour direction, installation area, and any balloon or floral details you want to include. We will help you choose a backdrop setup that works for your venue and event.',
            ],
        ],
    ],
    'process_title' => 'How Backdrop Rental Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us your event date, location, event type, venue details, colour palette, and the area where you want the backdrop placed.'],
        ['Choose the Backdrop Style', 'We can help you choose a birthday backdrop, wedding backdrop, photo backdrop, balloon backdrop, event backdrop, party backdrop, or backdrop with stand rental.'],
        ['Add Balloons or Extra Decor', 'You can keep the backdrop simple or add balloon garlands, arches, flowers, signage, props, table decor, or themed details.'],
        ['We Set Up the Backdrop', 'Our team arrives at the event location and installs the backdrop setup before guests arrive, photos begin, or the event starts.'],
    ],
    'faq' => [
        ['Do you offer backdrop rental in Toronto?', 'Yes. Happy Day Toronto offers backdrop rental in Toronto and across the GTA for birthdays, weddings, baby showers, bridal showers, parties, photoshoots, corporate events, and private celebrations. We can create simple backdrops or fuller setups with balloons, flowers, signage, arches, garlands, and themed decor.'],
        ['What types of backdrops can I rent?', 'We provide backdrop rentals for many event styles, including birthday backdrops, wedding backdrops, photo backdrops, party backdrops, event backdrops, balloon backdrops, bridal shower backdrops, engagement backdrops, and corporate display backdrops. The setup can be customized around your colours, theme, venue, and event type.'],
        ['Can I rent a backdrop with balloons?', 'Yes. Balloon and backdrop rental is one of the most popular options. We can add balloon garlands, balloon arches, balloon walls, floral accents, signs, and custom colours to your backdrop so it fits the celebration and creates a strong photo area.'],
        ['Do you offer wedding backdrop rental in Toronto?', 'Yes. We offer wedding backdrop rental in Toronto and the GTA for receptions, sweetheart tables, ceremony areas, engagement parties, bridal showers, cake tables, and guest photo zones. Wedding backdrops can be styled with soft colours, elegant balloons, florals, signage, and romantic details.'],
        ['Do you offer birthday backdrop rental?', 'Yes. We provide birthday backdrop rental for kids’ parties, first birthdays, adult birthdays, milestone celebrations, themed parties, and cake table setups. Birthday backdrops can be paired with balloon garlands, number displays, props, custom signs, and themed colours.'],
        ['Can I rent a photo backdrop for a photoshoot?', 'Yes. We offer photo backdrop rental for photoshoots, content creation, family portraits, event photos, brand activations, and social media displays. Share your shoot style, location, colours, and inspiration photos, and we can help recommend a suitable backdrop setup.'],
        ['Do you offer backdrop stand rental?', 'Yes. Backdrop stand rental may be available depending on the event setup and venue requirements. A stand can help create a freestanding display when there is no wall or fixed area for installation. Share your venue details and setup space so we can confirm the best option.'],
        ['How far in advance should I book a backdrop rental?', 'It is best to book your backdrop rental as early as possible, especially for weekends, weddings, larger parties, and busy event seasons. Early booking gives more time to confirm backdrop style, balloon colours, installation details, venue access, and setup timing.'],
    ],
    'cta_title' => 'Plan Your Backdrop Rental',
    'event_type' => 'Backdrop Rental',
    'cta_text' => [
        'Ready to create a beautiful photo area for your event? Happy Day Toronto provides custom backdrop rental in Toronto and the GTA for birthdays, weddings, baby showers, bridal showers, photoshoots, parties, corporate events, and private celebrations.',
        'Tell us your event date, location, colours, theme, and the type of backdrop setup you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Backdrop Rental Quote',
];
