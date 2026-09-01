<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Graduation Balloon Decor for a Moment Worth Celebrating',
    'intro' => [
        'Celebrate the graduate with custom graduation balloon decor in Toronto and across the GTA. Happy Day Toronto creates balloon decorations for graduation parties, school celebrations, college and university events, home gatherings, banquet halls, restaurants, and private venues.',
        'From school-colour garlands to photo-ready backdrops, balloon arches, and party displays, we design each graduation setup around your colours, venue, graduate, and celebration style.',
    ],
    'hero_button' => 'Plan My Graduation Decor',
    'hero_image' => 89,
    'card_asset' => 'assets/images/graduation-balloon-decoration-toronto.webp',
    'sections' => [
        [
            'title' => 'Custom Graduation Balloon Decorations',
            'image' => 162,
            'paragraphs' => [
                'Graduation is a major milestone, and the decor should make the moment feel special. Our graduation balloon decorations can be designed for small family parties, larger venue celebrations, school events, college graduations, university parties, and private gatherings.',
                'A graduation setup can be clean and elegant, bright and festive, school-colour focused, or fully themed around the graduate’s next step. We can create a main photo area, decorate a cake table, frame an entrance, style a stage, or build a full party backdrop.',
                'For a more complete event setup, graduation balloon decor can be paired with ' . $link('services/backdrop-rental', 'backdrop rental') . ', ' . $link('services/balloon-arch-garland', 'balloon arch and garland setups') . ', ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Balloon Decoration for Graduation Parties',
            'class' => 'service-age-section',
            'image' => 159,
            'paragraphs' => [
                'Balloon decoration for graduation parties works well because it creates a strong visual area for photos and helps the celebration feel organized. Whether the party is at home, in a restaurant, at a banquet hall, or at a school venue, balloons can bring the theme and colours together.',
                'Each setup can be customized to match the school colours, graduate’s favourite colours, party theme, or venue style.',
            ],
            'lead' => 'Popular graduation setups include:',
            'list' => [
                'Graduation balloon garlands',
                'Graduation balloon backdrops',
                'Entrance and photo-area arches',
                'School-colour displays',
                'Graduation party decoration',
                'Cake table balloon decor',
                'Photo-area balloon walls',
                'Year number balloons',
                'Balloon bouquets and accents',
                'Venue graduation decor',
            ],
        ],
        [
            'title' => 'Graduation Backdrops, Arches & Photo Areas',
            'class' => 'service-options-section',
            'paragraphs' => [
                'A photo area is one of the most useful parts of graduation decor. Guests usually want photos with the graduate, family, friends, and classmates, so a dedicated backdrop makes the event feel more polished.',
                'Graduation backdrops can include balloon garlands, year numbers, custom signs, school colours, flowers, props, or a simple colour palette. Balloon arches can frame the entrance, dessert table, stage area, or main photo zone.',
                'For backdrop-focused events, visit our ' . $link('services/backdrop-rental', 'backdrop rental') . ' page. For arch and garland styles, visit our ' . $link('services/balloon-arch-garland', 'balloon arch and garland') . ' page.',
            ],
            'lead' => 'Photo-area details can include:',
            'list' => [
                'Balloon garlands',
                'Graduation year numbers',
                'Custom graduate signs',
                'School-colour accents',
                'Floral details and props',
                'Entrance and stage arches',
            ],
        ],
        [
            'title' => 'Graduation Decor Balloons for Different Events',
            'class' => 'service-themes-section',
            'image' => 163,
            'paragraphs' => [
                'Graduation decor balloons can be used for many types of celebrations. Some families want a simple home setup for photos and dinner. Others need a larger balloon display for a banquet hall, restaurant, school event, or group celebration.',
                'We create decor for kindergarten, elementary school, high school, college, and university graduations, as well as dinner parties, ceremonies, receptions, family celebrations, restaurant parties, and backyard events.',
                'The setup can be playful for younger graduates or more elegant for high school, college, and university celebrations.',
            ],
        ],
        [
            'title' => 'School-Colour Graduation Balloon Decor',
            'class' => 'service-room-section',
            'paragraphs' => [
                'School colours are one of the most popular ways to personalize graduation balloon decor. We can create balloon garlands, backdrops, arches, and table accents using colours inspired by the graduate’s school, college, university, or program.',
                'Gold, black, white, silver, blue, red, green, and navy are common graduation colours, but the design can be fully customized. Metallic accents, number balloons, custom signage, and photo props can make the setup feel more connected to the occasion.',
                'If you have school colours, a logo colour direction, or inspiration photos, send them with your request so we can recommend a matching design.',
            ],
        ],
        [
            'title' => 'Graduation Cake Tables, Numbers & Party Details',
            'class' => 'service-backdrops-section',
            'image' => 164,
            'paragraphs' => [
                'Smaller coordinated details help connect the main graduation backdrop with the rest of the celebration. Cake table garlands, year balloons, bouquets, signs, and table accents can repeat the school colours throughout the room.',
                'These details work for a compact home party or as supporting decor around a larger venue installation.',
            ],
            'lead' => 'Coordinated details include:',
            'list' => [
                'Graduation year balloons',
                'Cake table garlands',
                'Balloon bouquets',
                'Custom graduate signs',
                'School-colour table accents',
                'Entrance balloon details',
                'Photo props and flowers',
                'Stage-area decoration',
            ],
        ],
        [
            'title' => 'Graduation Balloon Decor in Toronto & GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides graduation balloon decor in Toronto and across the Greater Toronto Area. We decorate homes, condos, restaurants, banquet halls, schools, community spaces, event venues, backyards, and private party locations.',
                'If you are looking for graduation balloon decorations, graduation decorations balloons, balloon decor for graduation, or graduation party balloon decorations in Toronto, send us your event date, location, colours, and setup ideas. We will help you choose the right graduation balloon setup for your celebration.',
            ],
        ],
    ],
    'process_title' => 'How Graduation Balloon Booking Works',
    'process' => [
        ['Share Your Graduation Details', 'Tell us your event date, location, graduation level, colour palette, venue type, and any inspiration photos you have.'],
        ['Choose the Setup Style', 'We can help you choose a graduation balloon backdrop, garland, arch, cake table setup, photo area, balloon bouquet, or full party decor setup.'],
        ['We Plan the Design', 'Our team prepares the balloon colours, layout, decor elements, installation details, and timing based on your event space.'],
        ['We Set Up the Decor', 'We arrive at your location and install the graduation balloon decorations before guests arrive, so the space is ready for photos and celebration.'],
    ],
    'faq' => [
        ['Do you offer graduation balloon decor in Toronto?', 'Yes. Happy Day Toronto offers graduation balloon decor in Toronto and across the GTA for home parties, restaurants, banquet halls, schools, community spaces, outdoor celebrations, and private venues. We can create graduation balloon garlands, arches, backdrops, cake table decor, photo areas, and full celebration setups.'],
        ['What types of graduation balloon decorations can you create?', 'We create graduation balloon decorations for entrances, backdrops, dessert tables, photo zones, school events, family parties, and venue celebrations. Popular options include balloon garlands, balloon arches, graduation backdrops, year number balloons, school-colour displays, balloon bouquets, and table accents.'],
        ['Can you create balloon decoration for a graduation party?', 'Yes. We create balloon decoration for graduation party setups in homes, restaurants, banquet halls, backyards, condo party rooms, schools, and event venues. The setup can be simple and elegant or more detailed with a backdrop, garland, arch, number balloons, signage, and themed details.'],
        ['Can you match school colours?', 'Yes. We can design graduation balloon decor around school colours, university colours, program colours, or the graduate’s preferred colour palette. You can send us colour references, inspiration photos, or school details, and we will help create a matching balloon setup.'],
        ['Can graduation balloons be combined with a backdrop?', 'Yes. Graduation balloons can be combined with a backdrop to create a polished photo area for the graduate, family, and guests. A backdrop can include balloon garlands, year numbers, custom signage, school colours, flowers, and themed props.'],
        ['Do you decorate for small graduation celebrations at home?', 'Yes. We can create graduation balloon decorations for home celebrations, including living rooms, dining rooms, backyards, condo party rooms, and small private spaces. Home setups can include a balloon garland, number balloons, a small backdrop, cake table decor, or a photo corner.'],
        ['Do you offer graduation party balloon decorations for schools?', 'Yes. We can provide graduation party balloon decorations for school events, ceremonies, receptions, classroom celebrations, community spaces, and group celebrations. The design can be customized for school colours, event size, venue layout, and photo areas.'],
        ['How far in advance should I book graduation balloon decorations?', 'It is best to book graduation balloon decorations early, especially during graduation season, weekends, and busy event dates. Early booking gives more time to confirm colours, backdrop rental, venue access, setup timing, and any custom decor details.'],
    ],
    'cta_title' => 'Plan Your Graduation Balloon Decor',
    'event_type' => 'Graduation',
    'cta_text' => [
        'Ready to celebrate the graduate? Happy Day Toronto creates custom graduation balloon decor in Toronto and the GTA for graduation parties, school events, family gatherings, photo areas, backdrops, arches, garlands, and celebration setups.',
        'Tell us your event date, location, school colours, theme, and the type of graduation balloon decorations you have in mind. We will help you plan the next step.',
    ],
    'cta_button' => 'Get Graduation Balloon Decor Quote',
];
