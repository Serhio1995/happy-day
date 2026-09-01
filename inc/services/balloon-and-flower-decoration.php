<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Balloon and Flower Decoration for Effortless Elegance',
    'intro' => [
        'Create a softer, more elegant event setup with custom balloon and flower decoration in Toronto and across the GTA. Happy Day Toronto designs flower balloon decor for birthdays, weddings, baby showers, bridal showers, engagements, anniversaries, backdrops, wall displays, room setups, and private celebrations.',
        'From floral balloon garlands to balloon flower wall decoration and photo-ready backdrops, we create each setup around your colours, venue, theme, and celebration style.',
    ],
    'hero_button' => 'Plan My Balloon & Flower Setup',
    'hero_image' => 80,
    'card_asset' => 'assets/images/balloon-and-flower-decoration-toronto.webp',
    'sections' => [
        [
            'title' => 'Elegant Flower Balloon Decor for Events',
            'image' => 173,
            'paragraphs' => [
                'Flower balloon decor is a beautiful option when you want the celebration to feel stylish, soft, and more polished than standard balloon decoration. The combination of balloons and floral accents adds texture, colour, and a more premium look to the event space.',
                'This style works well for events where photos matter, including birthdays, weddings, baby showers, bridal showers, engagements, anniversaries, private dinners, and luxury party setups. It can be used as the main feature or as an accent around a backdrop, arch, garland, table, wall, or entrance.',
                'For a complete setup, balloon and flower decoration can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/wedding-balloons', 'wedding balloon decor') . ', ' . $link('services/balloons-for-birthdays', 'birthday balloon decoration') . ', or ' . $link('services/baby-shower-balloons', 'baby shower balloons') . '.',
            ],
        ],
        [
            'title' => 'Balloon Flower Decoration for Backdrops & Photo Areas',
            'class' => 'service-age-section',
            'image' => 174,
            'paragraphs' => [
                'Balloon flower decoration is especially effective for backdrops and photo zones. A backdrop with balloons and flowers gives the event a clear visual focal point and creates a polished area for guest photos, family photos, couple photos, or branded event content.',
                'A balloon and flower backdrop can be soft and romantic, bright and playful, neutral and modern, or bold and luxury-inspired depending on your event style.',
            ],
            'lead' => 'Popular backdrop styles include:',
            'list' => [
                'Garlands with floral accents',
                'Flower balloon backdrops',
                'Balloon flower walls',
                'Balloon and flower arches',
                'Floral balloon photo areas',
                'Dessert table decoration',
                'Balloon and flower wall displays',
                'Custom signs with florals',
                'Event entrance arrangements',
                'Colour-matched backdrop setups',
            ],
        ],
        [
            'title' => 'Balloon Flower Wall Decoration',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Balloon flower wall decoration is a strong choice when you want one main feature area for photos. It can be used behind a dessert table, near the entrance, beside a seating area, or as the main event backdrop.',
                'A flower wall with balloons can work for birthdays, weddings, baby showers, bridal showers, engagements, anniversaries, corporate events, and private celebrations. The design can include artificial flowers, balloon garlands, custom signs, themed colours, metallic accents, or soft floral details.',
                'For wall-style setups, we recommend choosing one clear colour direction so the balloons, flowers, signage, and venue work together.',
            ],
            'lead' => 'Popular wall colour combinations:',
            'list' => [
                'White and blush',
                'Cream and gold',
                'Pink and champagne',
                'Sage and ivory',
                'Lavender and white',
                'Red and pink',
                'Neutral beige tones',
                'Custom event palettes',
            ],
        ],
        [
            'title' => 'Flower Balloon Decoration for Birthday Celebrations',
            'class' => 'service-themes-section',
            'image' => 175,
            'paragraphs' => [
                'Flower balloon decoration for birthday events is ideal when you want a birthday setup that feels more elegant or photo-ready. This can be used for kids’ birthdays, first birthdays, adult birthdays, milestone birthdays, Sweet 16 celebrations, and private dinner parties.',
                'Birthday balloon flower decoration can include a balloon garland with flowers, a backdrop, a cake table display, a number balloon setup, a flower wall, or a room decoration with balloons and flowers.',
                'This style works especially well for princess and pastel themes, adult dinners, milestone celebrations, luxury backdrops, restaurant setups, and photo-ready party areas. For more details, visit our ' . $link('services/balloons-for-birthdays', 'birthday balloon decoration') . ' page.',
            ],
        ],
        [
            'title' => 'Balloon and Flower Decorations for Weddings',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Balloon and flower decorations for weddings can create a romantic and elegant look when designed with the right colours and placement. This style can be used for wedding receptions, sweetheart tables, ceremony areas, bridal showers, engagement parties, wedding backdrops, and photo areas.',
                'Popular wedding-style setups include soft balloon garlands with flowers, neutral balloon backdrops, floral arches, sweetheart table displays, champagne and ivory palettes, and romantic photo zones.',
                'Wedding balloon and flower decor can feel modern, minimal, classic, or luxury-inspired. For wedding-focused decor, visit our ' . $link('services/wedding-balloons', 'wedding balloon decor') . ' page. For bridal showers, visit our ' . $link('services/bridal-shower-balloons', 'bridal shower balloons') . ' page.',
            ],
        ],
        [
            'title' => 'Decoration with Balloons and Flowers for Different Spaces',
            'class' => 'service-backdrops-section',
            'image' => 176,
            'paragraphs' => [
                'Decoration with balloons and flowers can be adapted to many event spaces. It can be used for a full venue setup or one main focal point. The right setup depends on the size of the room, event type, guest flow, and where people will take photos.',
                'For larger venues, balloon and flower decoration can be used around a stage or main display area. For smaller events, a compact backdrop or garland can still create a strong visual effect without overwhelming the room.',
            ],
            'lead' => 'Common setup areas include:',
            'list' => [
                'Event entrances',
                'Dessert and cake tables',
                'Backdrops and flower walls',
                'Photo zones',
                'Sweetheart tables',
                'Gift tables',
                'Restaurant walls',
                'Home party rooms',
                'Banquet hall stages',
                'Private event spaces',
            ],
        ],
        [
            'title' => 'Balloon and Flower Decoration in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides balloon and flower decoration in Toronto and across the Greater Toronto Area. We decorate homes, condos, restaurants, banquet halls, event venues, party rooms, offices, retail spaces, and private celebration locations.',
                'If you are searching for flower and balloon decoration near me, balloon flower decoration, flower balloon decor, or decoration with balloons and flowers in Toronto, send us your event date, location, colours, theme, and inspiration photos. We will help you choose the right setup for your celebration.',
            ],
        ],
    ],
    'process_title' => 'How Balloon and Flower Decoration Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us your event date, location, event type, colour palette, venue type, and any inspiration photos you have.'],
        ['Choose the Setup Style', 'We can help you choose a balloon and flower backdrop, garland, arch, wall display, room setup, table decor, or full event installation.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, floral accents, layout, installation details, setup size, and timing based on your space and event style.'],
        ['We Set Up the Decor', 'We arrive at your event location and install the balloon and flower decoration before guests arrive, so the space is ready for photos and celebration.'],
    ],
    'faq' => [
        ['Do you offer balloon and flower decoration in Toronto?', 'Yes. Happy Day Toronto offers balloon and flower decoration in Toronto and across the GTA for birthdays, weddings, baby showers, bridal showers, engagements, anniversaries, and private events. We can create balloon garlands with flowers, floral balloon backdrops, balloon flower wall decoration, arches, table displays, and photo-ready event setups.'],
        ['What is flower balloon decor?', 'Flower balloon decor combines balloons with floral accents to create a softer and more elegant event look. Flowers can be added to balloon garlands, arches, backdrops, walls, table displays, or photo areas. This style is popular for romantic events, birthdays, weddings, baby showers, bridal showers, and luxury party setups.'],
        ['Can you create a balloon flower wall decoration?', 'Yes. We can create balloon flower wall decoration for birthdays, weddings, baby showers, bridal showers, engagements, and photo areas. A balloon flower wall can include floral panels, balloon garlands, custom signage, colour-matched decor, and themed details.'],
        ['Can you create flower balloon decoration for birthdays?', 'Yes. We create flower balloon decoration for birthday celebrations, including first birthdays, kids’ parties, adult birthdays, milestone birthdays, Sweet 16 parties, and restaurant events. Birthday balloon flower decoration can include backdrops, cake table displays, garlands, number balloons, and room decor.'],
        ['Do you offer balloon and flower decorations for weddings?', 'Yes. We create balloon and flower decorations for weddings, receptions, engagement parties, bridal showers, sweetheart tables, backdrops, arches, and photo areas. Wedding-style balloon and flower decor can be designed in soft, romantic, neutral, or luxury colour palettes.'],
        ['Can balloons and flowers be used for room decoration?', 'Yes. Room decoration with balloons and flowers works well for birthdays, proposals, anniversaries, bridal showers, baby showers, romantic setups, and private celebrations. A room setup can include balloon garlands, flowers, table decor, wall displays, backdrops, and photo areas.'],
        ['Can balloon and flower decoration be used on a stage?', 'Yes. Stage decoration with balloons and flowers can work well for weddings, birthdays, corporate events, school events, cultural celebrations, and private venue setups. A stage display can include balloon garlands, floral accents, backdrops, signage, and colour-matched decor.'],
        ['How far in advance should I book balloon and flower decoration?', 'It is best to book as early as possible, especially for weekends, weddings, large backdrops, flower wall setups, and custom floral details. Early booking gives more time to confirm colours, venue access, installation timing, floral accents, and setup design.'],
    ],
    'cta_title' => 'Plan Your Balloon & Flower Setup',
    'event_type' => 'Balloon & Flower Decoration',
    'cta_text' => [
        'Ready to create a soft, elegant, and photo-ready event setup? Happy Day Toronto designs custom balloon and flower decoration in Toronto and the GTA for birthdays, weddings, baby showers, bridal showers, engagements, backdrops, room decor, wall displays, and private celebrations.',
        'Tell us your event date, location, colours, theme, and the type of flower balloon decor you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Balloon & Flower Decor Quote',
];
