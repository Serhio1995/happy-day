<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Halloween Balloon Decor with a Stylish Spooky Twist',
    'intro' => [
        'Create a spooky, playful, and photo-ready celebration with custom Halloween balloon decor in Toronto and across the GTA. Happy Day Toronto designs Halloween balloon decorations for parties, school events, family gatherings, restaurant displays, retail spaces, themed backdrops, photo areas, and private celebrations.',
        'From black and orange balloon garlands to spooky arches, Halloween backdrops, and themed party displays, we create each setup around your space, colours, event style, and celebration theme.',
    ],
    'hero_button' => 'Plan My Halloween Decor',
    'hero_image' => 90,
    'sections' => [
        [
            'title' => 'Custom Halloween Balloon Decorations',
            'image' => 169,
            'paragraphs' => [
                'Halloween balloon decorations can instantly change the atmosphere of a room. They can make a space feel spooky, fun, festive, dramatic, or kid-friendly depending on the look you want.',
                'Our Halloween balloon decor can be designed for home parties, kids’ events, school celebrations, corporate Halloween parties, restaurants, retail displays, community events, and private venues. The setup can be simple and clean or more detailed with a backdrop, balloon garland, arch, props, signage, and themed colours.',
                'For a fuller Halloween setup, balloon decor can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ', or ' . $link('services/corporate-event-balloons', 'corporate event balloons') . '.',
            ],
        ],
        [
            'title' => 'Halloween Decor with Balloons for Parties',
            'class' => 'service-age-section',
            'image' => 170,
            'paragraphs' => [
                'Halloween decor with balloons works well because it adds strong colour, shape, and theme without needing permanent decoration. Balloons can be used to decorate an entrance, dessert table, photo wall, stage, party room, classroom, restaurant corner, or retail display.',
                'Each setup can be adjusted for a fun family party, a more dramatic adult event, or a clean branded display for a business.',
            ],
            'lead' => 'Popular Halloween setups include:',
            'list' => [
                'Black and orange garlands',
                'Halloween balloon arches',
                'Spooky balloon backdrops',
                'Photo-area balloon walls',
                'Pumpkin-inspired displays',
                'Ghost and spider decor',
                'Dessert table decoration',
                'Entrance balloon arches',
                'Indoor ceiling balloons',
                'Kids’ Halloween balloon decor',
            ],
        ],
        [
            'title' => 'Halloween Backdrops, Arches & Photo Areas',
            'class' => 'service-options-section',
            'paragraphs' => [
                'A Halloween backdrop is one of the best ways to create a memorable photo moment. It gives guests a clear place to take pictures and helps the event feel more complete.',
                'Halloween balloon decorations can be added around a backdrop, welcome sign, dessert table, or entrance. A balloon arch can frame the photo area, while a balloon garland can add shape and colour to the main display.',
                'For photo-focused setups, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page.',
            ],
            'lead' => 'Popular colour palettes include:',
            'list' => [
                'Black and orange',
                'Black, purple and silver',
                'Orange, white and gold',
                'Black, green and purple',
                'White and black ghost theme',
                'Pumpkin orange and beige',
                'Dark red and black',
                'Custom brand colours',
            ],
        ],
        [
            'title' => 'Halloween Balloon Decor for Kids’ Parties',
            'class' => 'service-themes-section',
            'image' => 171,
            'paragraphs' => [
                'Halloween balloon decor can be made fun and friendly for children’s parties. Instead of making the setup too scary, we can create playful Halloween balloon decorations with pumpkins, ghosts, bats, spiders, bright colours, and cute spooky details.',
                'This type of setup works well for home parties, school events, daycare celebrations, community events, and family gatherings. A balloon garland or backdrop can create a fun space for photos, games, treats, and party activities.',
                'For kids’ Halloween parties, we can also coordinate balloons with a cake table, candy station, entrance area, or indoor play space.',
            ],
        ],
        [
            'title' => 'Halloween Balloon Decor for Businesses',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Halloween is also a good seasonal opportunity for businesses. Restaurants, cafes, salons, boutiques, studios, offices, and retail stores can use Halloween balloon decor to create a festive display for customers, staff, photos, and social media content.',
                'Business Halloween setups can include window displays, entrance arches, branded Halloween backdrops, product photo areas, balloon garlands, and themed event decor. These displays can be playful, spooky, elegant, or matched to your brand colours.',
                'If you are planning a corporate or branded seasonal setup, explore our ' . $link('services/corporate-event-balloons', 'corporate event balloons') . ' page.',
            ],
        ],
        [
            'title' => 'Halloween Themes, Colours & Details',
            'class' => 'service-backdrops-section',
            'image' => 172,
            'paragraphs' => [
                'The right mix of colours and themed details helps a Halloween setup feel intentional. We can create something cute and playful, dark and dramatic, polished for adults, or branded for a business event.',
                'Props, signs, themed balloons, dessert table accents, ceiling decor, and photo-area details can be coordinated into one consistent setup.',
            ],
            'lead' => 'Theme details can include:',
            'list' => [
                'Pumpkins and friendly ghosts',
                'Bats, spiders and webs',
                'Black and metallic accents',
                'Candy table styling',
                'Spooky custom signage',
                'Themed foil balloons',
                'Ceiling balloon details',
                'Business brand colours',
            ],
        ],
        [
            'title' => 'Halloween Balloon Decor in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides Halloween balloon decor in Toronto and across the Greater Toronto Area. We decorate homes, schools, restaurants, offices, retail spaces, banquet halls, community venues, event spaces, and private party locations.',
                'If you are looking for Halloween balloon decorations, Halloween decor balloons, Halloween decorations with balloons, or Halloween balloon decoration in Toronto, send us your event date, location, colour preferences, and setup ideas. We will help you choose the right spooky or festive balloon setup for your space.',
            ],
        ],
    ],
    'process_title' => 'How Halloween Balloon Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us your event date, location, event type, colour palette, setup area, and any inspiration photos you have.'],
        ['Choose the Halloween Setup Style', 'We can help you choose a Halloween balloon garland, arch, backdrop, photo area, entrance display, ceiling balloons, or full themed setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, layout, decor elements, installation details, and timing based on your event space and schedule.'],
        ['We Set Up the Decor', 'We arrive at your location and install the Halloween balloon decorations before guests, customers, students, or family members arrive.'],
    ],
    'faq' => [
        ['Do you offer Halloween balloon decor in Toronto?', 'Yes. Happy Day Toronto offers Halloween balloon decor in Toronto and across the GTA for home parties, school events, restaurants, retail displays, offices, community celebrations, and private events. We can create balloon garlands, arches, backdrops, photo areas, entrance displays, and full Halloween-themed balloon setups.'],
        ['What types of Halloween balloon decorations can you create?', 'We can create Halloween balloon decorations for entrances, backdrops, dessert tables, photo zones, classrooms, retail spaces, restaurants, and party rooms. Popular options include black and orange balloon garlands, spooky arches, balloon walls, ghost-themed displays, pumpkin-inspired decor, and Halloween backdrops with balloons.'],
        ['Can Halloween balloons be used for a photo backdrop?', 'Yes. Halloween balloons work very well for photo backdrops because they create a clear themed area for guests, families, kids, staff, or customers to take pictures. A backdrop can be styled with balloon garlands, props, signage, spooky details, and custom colours.'],
        ['Do you decorate Halloween parties for kids?', 'Yes. We create Halloween balloon decor for kids’ parties, school celebrations, daycare events, family gatherings, and community events. Kids’ Halloween setups can be playful and friendly with pumpkins, ghosts, bats, spiders, bright colours, and cute spooky details.'],
        ['Do you offer Halloween balloon decor for businesses?', 'Yes. We provide Halloween balloon decoration for restaurants, cafes, salons, boutiques, offices, studios, retail stores, and branded seasonal displays. These setups can help create a festive atmosphere and give customers or staff a photo-ready area.'],
        ['What colours work best for Halloween balloon decor?', 'Popular colours for Halloween balloon decor include black, orange, purple, white, silver, green, dark red, and metallic accents. We can also match the balloon colours to your brand, venue, party theme, or inspiration photos.'],
        ['Can Halloween balloons be combined with backdrops or props?', 'Yes. Halloween balloons can be combined with backdrops, signs, props, dessert tables, ceiling balloons, arches, and themed decorative details. This creates a fuller Halloween event setup and makes the main display more photo-ready.'],
        ['How far in advance should I book Halloween balloon decorations?', 'It is best to book Halloween balloon decorations early because seasonal dates can fill quickly, especially for weekends, school events, business displays, and larger party setups. Early booking gives more time to confirm colours, venue access, setup timing, and custom decor details.'],
    ],
    'cta_title' => 'Plan Your Halloween Balloon Decor',
    'event_type' => 'Halloween Party',
    'cta_text' => [
        'Ready to create a spooky and festive setup? Happy Day Toronto designs custom Halloween balloon decor in Toronto and the GTA for parties, schools, restaurants, retail displays, backdrops, arches, photo areas, and private events.',
        'Tell us your event date, location, colours, theme, and the type of Halloween balloon decoration you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Halloween Balloon Decor Quote',
];
