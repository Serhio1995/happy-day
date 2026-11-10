<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'seo' => [
        'title' => 'Balloon Decorations King City | Estates & Tent Parties',
        'description' => 'Balloon decorations in King City and King Township for estate homes, tented backyard parties, weddings and private events. Custom arches and backdrops.',
        'focus' => 'balloon decorations King City',
    ],
    'area' => [
        'type' => 'Place',
        'name' => 'King City',
        'within' => [['City', 'King Township'], ['AdministrativeArea', 'York Region'], ['State', 'Ontario']],
    ],
    'map_focus' => 'King City',
    'title' => 'Balloon Decorations in King City',
    'intro' => [
        'Happy Day Toronto designs custom balloon decorations in King City and across King Township, including Nobleton, Schomberg, and Kettleby — for estate homes, private properties, tented backyard events, golf and country clubs, and event venues.',
        'We create balloon arches, garlands, backdrops, and photo areas for birthdays, showers, weddings, anniversaries, and private celebrations, with a setup plan that suits larger properties and outdoor spaces.',
    ],
    'hero_asset' => 'assets/images/locations/king-city-hero.webp',
    'photo_ids' => [104, 117, 148, 153, 168, 110, 152],
    'hero_button' => 'Plan My King City Setup',
    'hero_alt' => 'Sage and ivory balloon arch for a sheltered garden celebration — illustrative cover',
    'sections' => [
        [
            'title' => 'Balloon Decor for King City Homes & Estates',
            'placeholder' => true,
            'paragraphs' => [
                'King City is the largest community in King Township, a rural part of York Region known for its large lots, country homes, horse farms, and green, open landscape on the Oak Ridges Moraine. Many celebrations here take place at home — in spacious great rooms, on wide patios, in landscaped gardens, or under a rented tent.',
                'These spaces allow for bigger balloon features than a typical city home: a long garland along a terrace, a grand entrance arch at the front door, an oversized backdrop for family photos, or decor that ties a tent, a dessert table, and a lounge area together.',
                'Beyond King City itself, we decorate events in Nobleton along Highway 27, in the historic village of Schomberg, in Kettleby and Pottageville, and on private estates and farms across the township, where long driveways, barns, and open fields leave room for truly large installations.',
            ],
        ],
        [
            'title' => 'Celebrations We Decorate in King City',
            'class' => 'service-age-section',
            'placeholder' => true,
            'paragraphs' => [
                'From family milestones to formal receptions, King City events often combine indoor and outdoor spaces. We design balloon decor that looks consistent across both, so the entrance, the main room, and the garden all feel like one event.',
            ],
            'lead' => 'Popular King City events include:',
            'list' => [
                'Milestone birthdays and reunions',
                'Kids’ birthdays and first birthdays',
                'Backyard and tented garden parties',
                'Baby showers and bridal showers',
                'Engagements and at-home weddings',
                'Anniversary celebrations',
                'Graduation parties',
                'Golf club and private club events',
                'Holiday gatherings',
            ],
        ],
        [
            'title' => 'Popular Balloon Services in King City',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service below is available in King City and King Township. Each link opens a detailed page with styles, ideas, and answers to common questions.',
            ],
            'lead' => 'Choose a service:',
            'list' => [
                $link('services/balloon-arch-garland', 'Balloon arches and garlands'),
                $link('services/backdrop-rental', 'Backdrop rental'),
                $link('services/balloon-and-flower-decoration', 'Balloon and flower decoration'),
                $link('services/wedding-balloons', 'Wedding balloon decor'),
                $link('services/anniversary-balloons', 'Anniversary balloons'),
                $link('services/balloons-for-birthdays', 'Birthday balloon decorations'),
                $link('services/baby-shower-balloons', 'Baby shower balloons'),
                $link('services/engagement-balloons', 'Engagement balloons'),
                $link('services/graduation-balloons', 'Graduation balloons'),
                $link('services/number-rental', 'Marquee number rental'),
            ],
        ],
        [
            'title' => 'Outdoor & Tented Events in King Township',
            'class' => 'service-themes-section',
            'placeholder' => true,
            'paragraphs' => [
                'Open properties in King Township can be windier and sunnier than sheltered city backyards. Balloons outdoors are affected by wind, heat, direct sun, rain, and uneven ground, so outdoor decor needs a stronger structure and secure anchoring.',
                'A tent is often the best place for the main balloon feature. It protects the decor from sun and rain and gives a clear frame for an arch, garland, or backdrop. We can also style entrances, tent poles, and lounge areas.',
                'For rural addresses, please share clear directions, where our team can park, and how far the setup area is from the driveway.',
            ],
        ],
        [
            'title' => 'Balloon Styles That Work Well in King City',
            'class' => 'service-room-section',
            'paragraphs' => [
                'The natural setting of King Township suits organic, garden-inspired designs. Balloon garlands mixed with greenery, dried grasses, or fresh flowers look beautiful against wood, stone, and open fields.',
                'Popular palettes include sage, ivory, and eucalyptus green; terracotta, sand, and cream; and classic white and gold for formal receptions. For kids’ birthdays and family reunions, bright colours and big number balloons stand out well outdoors.',
                'Large properties also allow for statement pieces: a balloon arch over the driveway entrance, a garland along a barn door, or a backdrop wide enough for a full family photo.',
            ],
        ],
        [
            'title' => 'Planning a King City Event',
            'class' => 'service-backdrops-section',
            'placeholder' => true,
            'paragraphs' => [
                'Summer is the busiest season in King Township, with garden parties, tented events, at-home weddings, and family reunions from late spring to early fall. For large outdoor setups, booking three to six weeks ahead is best. Spring events are often held indoors or under cover, and winter holidays bring foyer, staircase, and fireplace decor in family homes.',
                'For outdoor events, choose a sheltered main spot — a tent, covered porch, or the side of the house protected from wind — and keep an indoor backup in case of strong wind or rain. If you are renting a tent, let us know when it will be up so we can install after it is ready.',
            ],
            'lead' => 'Helpful details to send with your request:',
            'list' => [
                'Event date and start time',
                'Property address and directions',
                'Gate and parking details',
                'Photos of the setup area',
                'Tent size and setup time',
                'Weather backup location',
            ],
        ],
        [
            'title' => 'King City and Nearby Areas We Serve',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'We also decorate events in the communities close to King City, including ' . $link('service-areas/richmond-hill', 'Richmond Hill') . ', ' . $link('service-areas/kleinburg', 'Kleinburg') . ', ' . $link('service-areas/vaughan', 'Vaughan') . ', and ' . $link('service-areas/woodbridge', 'Woodbridge') . '.',
                'Send us your event address and date, and we will confirm availability for your location.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works in King City',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, the King City address or venue, event type, colours, and inspiration photos.'],
        ['Walk Us Through the Property', 'Share photos of the setup area, the tent or patio layout, and access from the driveway.'],
        ['We Plan the Design', 'We prepare the balloon colours, size, structure, anchoring, and setup plan for your space.'],
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Do you provide balloon decorations in King City?', 'Yes. Happy Day Toronto provides custom balloon decorations in King City and across King Township, including Nobleton, Schomberg, and Kettleby. We decorate private homes, estates, tented events, clubs, and event venues.'],
        ['Can you decorate an outdoor or tented event in King City?', 'Yes. We create balloon arches, garlands, and backdrops for outdoor and tented events. Wind, sun, heat, and rain affect balloons, so we plan anchoring and recommend a sheltered spot for the main feature.'],
        ['Do you create large balloon installations for estate homes?', 'Yes. Larger properties allow for grand entrance arches, long terrace garlands, oversized backdrops, and decor that connects several areas of the event. The design is planned around your space and guest flow.'],
        ['Can you combine balloons with flowers and greenery?', 'Yes. Garden-inspired designs with greenery, dried grasses, and fresh or faux flowers are very popular in King Township and suit outdoor and country-style events.'],
        ['Do you decorate at-home weddings?', 'Yes. We create ceremony backdrops, entrance arches, sweetheart table decor, and photo areas for at-home and tented weddings, in soft or classic wedding palettes.'],
        ['What details do you need for a rural address?', 'Please share clear directions, gate or entry instructions, where our vehicle can park, and how far the setup area is from the parking spot. Photos of the setup area are also very helpful.'],
        ['How much do balloon decorations cost in King City?', hd_price_summary() . ' ' . hd_price_factors() . ' Send your event details and photos of the space for an accurate quote.'],
        ['How far in advance should I book?', 'For large outdoor setups, three to six weeks ahead is best, especially for summer weekends. Smaller indoor setups can often be booked two to three weeks ahead.'],
        ['What happens if the weather is bad?', 'We recommend having a tent, covered porch, or indoor backup space. If strong wind or rain is expected, we can move the main feature to the sheltered area on the day.'],
        ['Is King City part of Vaughan?', 'No. King City is in King Township, a separate municipality in York Region, just north of Vaughan and west of Richmond Hill. We serve all three areas.'],
    ],
    'cta_title' => 'Plan Your King City Balloon Decor',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, King City address or venue, colours, and the kind of setup you have in mind.',
        'We will check availability and help you plan balloon decor that works for your property.',
    ],
    'cta_button' => 'Get a King City Quote',
];
