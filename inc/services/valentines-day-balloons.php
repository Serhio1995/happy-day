<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Valentine’s Day Balloon Decor Made for Romance',
    'intro' => [
        'Create a romantic, stylish, and photo-ready setup with custom Valentine’s Day balloon decor in Toronto and across the GTA. Happy Day Toronto designs balloon decorations for romantic room setups, proposals, date nights, private celebrations, restaurant events, brand displays, and Valentine’s Day parties.',
        'From heart balloons and soft garlands to elegant backdrops and surprise room decor, we create each setup around your colours, space, occasion, and celebration style.',
    ],
    'hero_button' => 'Plan My Valentine’s Day Decor',
    'hero_image' => 91,
    'sections' => [
        [
            'title' => 'Romantic Valentine Balloon Decoration',
            'image' => 130,
            'paragraphs' => [
                'Valentine balloon decoration can turn a simple space into something warm, personal, and memorable. Whether you are planning a surprise at home, a proposal, a romantic dinner, a restaurant setup, or a small private event, balloons can help create the right mood without making the space feel too heavy.',
                'Our Valentine’s Day balloons decorations can be soft and elegant, bold and romantic, playful and fun, or luxury-inspired depending on the look you want. Popular colour palettes include red and pink, red and white, blush and gold, black and red, champagne and nude, white and rose gold, or custom colours that match your event.',
                'For a fuller setup, Valentine’s Day balloon decor can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Balloon Decoration for Valentine’s Day Events',
            'class' => 'service-age-section',
            'image' => 131,
            'paragraphs' => [
                'Balloon decoration for Valentine’s Day is not only for couples. It can also be used for restaurants, retail shops, salons, cafes, offices, content shoots, pop-up events, and themed parties. A strong balloon setup can create a clear photo area, decorate an entrance, highlight a product display, or make a venue feel more festive for the season.',
                'Each setup can be customized for the location, theme, colour palette, and amount of space available.',
            ],
            'lead' => 'Valentine’s Day setups include:',
            'list' => [
                'Romantic room decorations',
                'Proposal balloon setups',
                'Valentine’s Day backdrops',
                'Heart balloon garlands',
                'Restaurant and cafe displays',
                'Retail and brand activations',
                'Photo zones and content areas',
                'Private dinner decor',
                'Valentine’s Day party decor',
                'Balloon and flower arrangements',
            ],
        ],
        [
            'title' => 'Valentine’s Day Backdrops, Garlands & Photo Areas',
            'class' => 'service-options-section',
            'paragraphs' => [
                'A Valentine’s Day backdrop is one of the best choices if you want the setup to look polished in photos. It can be used for a proposal, romantic dinner, party, restaurant display, retail event, or content shoot.',
                'Balloon garlands can frame the backdrop, decorate a wall, surround a sign, highlight a dessert table, or create a soft photo area. Heart balloons, foil balloons, flowers, signage, and fabric details can be added to make the setup feel more personal.',
            ],
            'lead' => 'Popular setup styles include:',
            'list' => [
                'Red and pink balloon garlands',
                'Heart balloon backdrops',
                'Romantic room balloon decor',
                'Balloon walls for photos',
                'Proposal backdrops',
                'Dessert table decoration',
                'Balloon and flower decor',
                'Custom signs and messages',
                'Restaurant photo areas',
                'Brand display backdrops',
            ],
        ],
        [
            'title' => 'Romantic Room Balloon Setups',
            'class' => 'service-themes-section',
            'image' => 132,
            'paragraphs' => [
                'A romantic room setup is a popular choice for Valentine’s Day, anniversaries, proposals, birthdays, and private surprises. Balloons can be used around the bed, wall, floor area, table, window, ceiling, or main photo corner to make the room feel more special.',
                'Room setups can include heart balloons, balloon garlands, rose petals, floral details, number or letter balloons, custom signs, and a colour palette that matches the mood of the celebration. The design can be simple and sweet or more detailed for a stronger surprise effect.',
                'This service focuses on custom Valentine’s Day balloon decor and romantic room setups planned specifically for your space and occasion.',
            ],
        ],
        [
            'title' => 'Valentine’s Day Balloon Decor for Businesses',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Valentine’s Day is also a strong seasonal opportunity for businesses. Restaurants, cafes, salons, boutiques, studios, and retail stores can use balloons to create a festive display that attracts attention and gives customers a place to take photos.',
                'Business setups can include entrance decor, window displays, branded Valentine’s Day backdrops, product photo areas, heart balloon garlands, and seasonal balloon installations.',
                'If you are planning a branded or business-focused setup, explore our ' . $link('services/corporate-event-balloons', 'corporate event balloons') . ' page for more event display options.',
            ],
        ],
        [
            'title' => 'Valentine’s Day Colours & Styling',
            'class' => 'service-backdrops-section',
            'image' => 133,
            'paragraphs' => [
                'The right colour palette changes the mood of Valentine’s Day decor. A classic red and pink setup feels festive and romantic, while blush, champagne, nude, or rose gold can create a softer look. Black, burgundy, and gold work well for a more dramatic setting.',
                'We can coordinate balloons with flowers, furniture, restaurant interiors, hotel rooms, brand colours, signage, and the lighting of your space.',
            ],
            'lead' => 'Popular colour directions include:',
            'list' => [
                'Classic red and pink',
                'Red and white',
                'Blush and gold',
                'Black and red',
                'Champagne and nude',
                'White and rose gold',
                'Burgundy and gold',
                'Custom brand colours',
            ],
        ],
        [
            'title' => 'Valentine’s Day Balloon Decor in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides Valentine’s Day balloon decor in Toronto and across the Greater Toronto Area. We decorate homes, condos, restaurants, cafes, retail spaces, studios, hotels, event venues, and private party locations.',
                'If you are looking for Valentine’s balloon decor, Valentine balloon decoration, Valentine’s Day balloon decoration, or balloon decorations for Valentine’s Day in Toronto, send us your event date, location, colour preferences, and setup ideas. We will help you choose the right romantic balloon setup for your space.',
            ],
        ],
    ],
    'process_title' => 'How Valentine’s Day Balloon Booking Works',
    'process' => [
        ['Share Your Setup Details', 'Tell us your date, location, occasion, colour palette, setup area, and any inspiration photos you have.'],
        ['Choose the Decor Style', 'We can help you choose a romantic balloon garland, heart balloon display, backdrop, room setup, balloon and flower decoration, or full Valentine’s Day setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, layout, decor elements, installation details, and timing based on your space and schedule.'],
        ['We Set Up the Decor', 'We arrive at your location and install the Valentine’s Day balloon decorations before the surprise, event, dinner, party, or photos begin.'],
    ],
    'faq' => [
        ['Do you offer Valentine’s Day balloon decor in Toronto?', 'Yes. Happy Day Toronto offers Valentine’s Day balloon decor in Toronto and across the GTA for romantic room setups, proposals, private dinners, restaurants, cafes, retail displays, event venues, and Valentine’s Day parties. We can create balloon garlands, heart balloon backdrops, room decor, photo areas, and balloon and flower setups.'],
        ['What types of Valentine balloon decoration can you create?', 'We can create Valentine balloon decoration for homes, restaurants, hotels, retail spaces, cafes, studios, and private events. Popular options include heart balloon displays, romantic backdrops, balloon garlands, proposal setups, room decorations, photo walls, dessert table decor, and Valentine’s Day balloons decorations with flowers or signage.'],
        ['Can you create balloon decoration for Valentine’s Day proposals?', 'Yes. Balloon decoration for Valentine’s Day proposals can include a romantic backdrop, heart balloons, custom signage, flowers, balloon garlands, floor balloons, and a photo-ready setup. We can design the decor around your location, colours, and the type of surprise you want to create.'],
        ['Do you offer romantic room balloon setups?', 'Yes. We create romantic room balloon setups for Valentine’s Day, anniversaries, proposals, date nights, and private celebrations. A room setup can include heart balloons, garlands, ceiling balloons, flower accents, custom text, and a decorated photo corner.'],
        ['Can Valentine’s Day balloons be combined with flowers?', 'Yes. Valentine’s Day balloons can be combined with flowers for a softer and more romantic look. Balloon and flower decoration works well for backdrops, garlands, proposals, dinner setups, room decor, and photo areas.'],
        ['Do you decorate restaurants or businesses for Valentine’s Day?', 'Yes. We provide Valentine’s Day balloon decoration for restaurants, cafes, salons, boutiques, studios, retail stores, and branded seasonal displays. These setups can help create a festive atmosphere and give customers a photo-ready area for the holiday.'],
        ['What colours work best for Valentine’s Day balloon decor?', 'Popular colours for Valentine’s Day balloon decor include red, pink, blush, white, gold, rose gold, black, champagne, nude, and burgundy. We can also match the balloon colours to your brand, room style, restaurant decor, or event theme.'],
        ['How far in advance should I book Valentine’s Day balloon decorations?', 'It is best to book Valentine’s Day balloon decorations early because the holiday can be busy, especially for restaurants, proposals, weekend events, and custom room setups. Early booking gives more time to confirm colours, timing, location access, and installation details.'],
    ],
    'cta_title' => 'Plan Your Valentine’s Day Balloon Decor',
    'event_type' => 'Valentine’s Day',
    'cta_text' => [
        'Ready to create a romantic and photo-ready setup? Happy Day Toronto designs custom Valentine’s Day balloon decor in Toronto and the GTA for proposals, room decorations, date nights, restaurants, brand displays, private events, and festive celebrations.',
        'Tell us your date, location, colours, occasion, and the type of Valentine balloon decoration you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Valentine’s Day Balloon Decor Quote',
];
