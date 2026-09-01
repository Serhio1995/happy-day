<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Christmas Balloon Decor That Feels Like Holiday Magic',
    'intro' => [
        'Bring your holiday celebration to life with festive Christmas balloon decor in Toronto and across the GTA. Happy Day Toronto creates custom balloon decorations for Christmas parties, office events, family gatherings, retail displays, restaurant celebrations, photo areas, and seasonal event setups.',
        'From elegant balloon garlands to Christmas backdrops, balloon arches, and festive tree-inspired displays, we design each setup around your space, colours, theme, and celebration style.',
    ],
    'hero_button' => 'Plan My Christmas Decor',
    'hero_image' => 86,
    'card_asset' => 'assets/images/christmas-balloon-decoration-toronto.webp',
    'sections' => [
        [
            'title' => 'Festive Christmas Balloon Decorations',
            'image' => 126,
            'paragraphs' => [
                'Christmas decor should make the space feel warm, joyful, and celebration-ready. Our Christmas balloon decorations can be designed for small family gatherings, office holiday parties, corporate events, retail activations, school celebrations, restaurants, banquet halls, and private venues.',
                'We can create a clean and elegant holiday setup or a bright and playful Christmas display with balloons, backdrops, garlands, props, signage, and themed decorative details. The design can be classic red and green, winter white, gold and champagne, silver and blue, candy cane inspired, luxury black and gold, or custom colours that match your event.',
                'For a fuller setup, Christmas balloon decor can be combined with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Xmas Balloon Decoration for Holiday Parties',
            'class' => 'service-age-section',
            'image' => 127,
            'paragraphs' => [
                'Xmas balloon decoration works well for both private and business events. It can help define the main party area, create a photo spot, decorate the entrance, highlight a dessert table, or make an office space feel more festive.',
                'Each setup can be customized for your venue size, guest count, theme, and preferred level of detail.',
            ],
            'lead' => 'Popular holiday party setups include:',
            'list' => [
                'Christmas balloon garlands',
                'Office party balloon decor',
                'Entrance balloon arches',
                'Christmas balloon backdrops',
                'Photo-area balloon walls',
                'Dessert table decoration',
                'Merry Christmas displays',
                'Balloon Christmas trees',
                'Winter-themed displays',
                'Venue Christmas party decor',
            ],
        ],
        [
            'title' => 'Christmas Party Balloon Decor',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Christmas party balloon decor can be playful, elegant, branded, or family-friendly depending on the event. For corporate holiday parties, many clients choose clean colour palettes, branded accents, entrance arches, or photo backdrops. For family events, brighter colours, Christmas characters, candy cane themes, and festive balloon displays can make the space feel more fun.',
                'If your Christmas party needs a main photo moment, a backdrop with balloon garland is usually one of the strongest options.',
            ],
            'lead' => 'We can decorate:',
            'list' => [
                'Office Christmas parties',
                'Corporate holiday events',
                'Family Christmas gatherings',
                'Restaurant holiday dinners',
                'Retail and store displays',
                'School Christmas events',
                'Community celebrations',
                'Banquet hall parties',
                'Private home celebrations',
                'Holiday photo areas',
            ],
        ],
        [
            'title' => 'Christmas Backdrops, Arches & Garlands',
            'class' => 'service-themes-section',
            'image' => 128,
            'paragraphs' => [
                'Backdrops, arches, and garlands are some of the most popular choices for Christmas balloon decoration because they create a clear feature area. A Christmas backdrop can be used for guest photos, family pictures, company holiday portraits, Santa photos, product displays, or social media content.',
                'A balloon arch can frame an entrance, stage, photo area, or dessert table. A balloon garland can add holiday colour to a sign, wall, backdrop, fireplace, staircase, or event display.',
                'Popular palettes include red, green and white; gold, white and champagne; silver, blue and white; candy cane red and white; winter wonderland tones; neutral beige and gold; or custom brand colours. For more options, visit our ' . $link('services/balloon-arch-garland', 'balloon arch and garland') . ' page.',
            ],
        ],
        [
            'title' => 'Balloon Christmas Tree Decorations',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Balloon Christmas tree decorations are a fun way to create a unique holiday display. A balloon tree can be used in offices, retail spaces, event venues, schools, restaurants, party rooms, and photo areas. It can be designed as a playful Christmas feature or as part of a more polished holiday installation.',
                'Christmas tree balloon decorations can be made with green balloons, metallic accents, ornaments, stars, candy cane colours, winter colours, or brand colours. They work well as a standalone feature or together with a backdrop, garland, arch, or holiday display.',
                'A balloon Christmas tree creates a memorable focal point while allowing the scale, colours, and decorative details to be tailored to the venue.',
            ],
        ],
        [
            'title' => 'Christmas Decorations with Balloons for Businesses',
            'class' => 'service-backdrops-section',
            'image' => 129,
            'paragraphs' => [
                'Christmas decorations with balloons are useful for businesses that want a festive setup without permanent decor. Balloon installations can be created for a one-day event, a weekend promotion, a holiday party, or a seasonal display.',
                'For business and corporate spaces, we can create balloon decor for entrances, lobbies, reception areas, product displays, staff parties, photo walls, retail windows, and branded holiday events.',
                'If your business is planning a holiday celebration, you may also want to explore our ' . $link('services/corporate-event-balloons', 'corporate event balloons') . ' page for branded balloon displays, grand openings, office parties, and company events.',
            ],
            'lead' => 'Business holiday installations include:',
            'list' => [
                'Lobby and reception displays',
                'Retail window decoration',
                'Branded holiday backdrops',
                'Office party photo areas',
                'Product display accents',
                'Seasonal entrance decor',
            ],
        ],
        [
            'title' => 'Christmas Balloon Decor in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides Christmas balloon decor in Toronto and across the Greater Toronto Area. We decorate homes, restaurants, offices, retail spaces, banquet halls, schools, community venues, event spaces, and private party locations.',
                'If you are looking for Christmas balloon decorations, Xmas balloon decor, Christmas party balloon decor, or balloon decoration for Christmas in Toronto, send us your event date, location, theme, colour preferences, and setup ideas. We will help you choose the right festive balloon setup for your space.',
            ],
        ],
    ],
    'process_title' => 'How Christmas Balloon Booking Works',
    'process' => [
        ['Share Your Holiday Event Details', 'Tell us your event date, location, venue type, theme, colour palette, setup area, and any inspiration photos you have.'],
        ['Choose the Christmas Setup Style', 'We can help you choose a balloon garland, balloon arch, Christmas backdrop, balloon tree display, entrance decor, photo area, or full holiday setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, layout, decor elements, installation details, and timing based on your event space and schedule.'],
        ['We Set Up the Decor', 'We arrive at your location and install the Christmas balloon decorations before guests, customers, staff, or family members arrive.'],
    ],
    'faq' => [
        ['Do you offer Christmas balloon decor in Toronto?', 'Yes. Happy Day Toronto offers Christmas balloon decor in Toronto and across the GTA for holiday parties, office events, family gatherings, retail displays, restaurants, schools, banquet halls, and private celebrations. We can create balloon garlands, arches, backdrops, balloon tree displays, photo areas, and full festive setups.'],
        ['What types of Christmas balloon decorations can you create?', 'We create Christmas balloon decorations for entrances, backdrops, dessert tables, office parties, photo zones, retail displays, family events, and holiday celebrations. Popular options include Christmas balloon garlands, Xmas balloon decorations, festive arches, Merry Christmas balloon decoration, balloon Christmas tree decorations, and seasonal balloon walls.'],
        ['Can you create Xmas balloon decoration for an office party?', 'Yes. Xmas balloon decoration works very well for office parties and corporate holiday events. We can create branded holiday backdrops, entrance balloon arches, company colour balloon garlands, photo areas, stage decor, and festive lobby displays for staff and guests.'],
        ['Do you create Christmas party balloon decor?', 'Yes. We create Christmas party balloon decor for homes, offices, restaurants, banquet halls, schools, and private venues. The setup can be playful, elegant, traditional, winter-themed, or customized around your event colours and location.'],
        ['Can you make balloon Christmas tree decorations?', 'Yes. We can create balloon Christmas tree decorations and Christmas tree balloon decorations for parties, offices, retail spaces, schools, and photo areas. A balloon tree can be designed in traditional green, red and white, winter colours, metallic tones, or custom colours.'],
        ['Can Christmas balloons be used for photo backdrops?', 'Yes. Christmas balloons are a great choice for photo backdrops because they create a festive and memorable focal point. A backdrop with balloons can be used for Santa photos, family portraits, office party photos, retail displays, guest pictures, or social media content.'],
        ['Can you match a specific Christmas colour theme?', 'Yes. We can match your Christmas balloon decoration to a specific colour palette, brand theme, venue style, or inspiration photo. Popular options include red and green, gold and white, silver and blue, candy cane colours, winter wonderland, black and gold, or soft neutral holiday tones.'],
        ['How far in advance should I book Christmas balloon decorations?', 'It is best to book Christmas balloon decorations early because the holiday season is usually busy. Office parties, weekend events, school celebrations, retail displays, and larger Christmas setups should be planned in advance so colours, timing, venue access, and installation details can be confirmed.'],
    ],
    'cta_title' => 'Plan Your Christmas Balloon Decor',
    'event_type' => 'Christmas Party',
    'cta_text' => [
        'Ready to make your holiday celebration feel festive and photo-ready? Happy Day Toronto designs custom Christmas balloon decor in Toronto and the GTA for office parties, family gatherings, restaurants, retail spaces, backdrops, arches, balloon trees, and seasonal event setups.',
        'Tell us your event date, location, theme, colours, and the type of Christmas balloon decoration you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Christmas Balloon Decor Quote',
];
