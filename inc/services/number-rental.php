<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'title' => 'Marquee Number Rental That Lights Up the Moment',
    'intro' => [
        'Make a milestone impossible to miss with marquee number rental in Toronto and the GTA. Our illuminated numbers create a bold, photo-ready focal point for birthdays, anniversaries, graduations, business milestones, and private celebrations.',
        'Choose the numbers that matter to your event, then style them on their own or pair them with balloons, a backdrop, flowers, and coordinated colours for a complete display.',
    ],
    'hero_button' => 'Reserve My Marquee Numbers',
    'hero_asset' => 'assets/images/marquee-number-rental-toronto-hero.jpg',
    'card_asset' => 'assets/images/marquee-number-rental-toronto.webp',
    'sections' => [
        [
            'title' => 'Light-Up Numbers Made for Milestones',
            'image_asset' => 'assets/images/number-rental/light-up-numbers-made-for-milestones.jpeg',
            'image_alt' => 'Light-up marquee numbers styled for a milestone celebration',
            'image_width' => 900,
            'image_height' => 1200,
            'paragraphs' => [
                'Large illuminated numbers instantly show guests what the celebration is about. They work as an entrance feature, a backdrop for photos, a statement beside the cake table, or the centrepiece of a larger balloon installation.',
                'Our marquee number rental service is planned around the age, year, anniversary, or milestone you want to highlight. We help choose a placement that suits the venue, photographs well, and leaves comfortable space for guests to move around the display.',
                'For a fuller setup, your numbers can be combined with ' . $link('services/balloon-arch-garland', 'balloon arches and garlands') . ', ' . $link('services/backdrop-rental', 'backdrop rental') . ', or ' . $link('services/balloon-and-flower-decoration', 'balloon and flower decoration') . '.',
            ],
        ],
        [
            'title' => 'Birthday Marquee Numbers for Every Age',
            'class' => 'service-age-section',
            'image_asset' => 'assets/images/number-rental/birthday-marquee-numbers-for-every-age.jpeg',
            'image_alt' => 'Birthday marquee number display with balloon decorations',
            'image_width' => 1000,
            'image_height' => 1333,
            'paragraphs' => [
                'Birthday marquee numbers make the guest of honour’s age part of the decor. A single number can suit a first birthday, while paired numbers create a strong display for teens, adults, and milestone celebrations.',
                'The styling can feel playful, elegant, modern, or dramatic. We coordinate the number display with your balloon palette, venue, cake table, backdrop, and party theme so it feels like one intentional setup.',
            ],
            'lead' => 'Popular milestone displays include:',
            'list' => [
                'First birthday number displays',
                '13th and 16th birthdays',
                '18th birthday celebrations',
                '30th and 40th birthdays',
                '50th and 60th milestones',
                '75th and 80th birthdays',
                'Anniversary year displays',
                'Graduation year numbers',
                'Business anniversary numbers',
                'Custom milestone combinations',
            ],
        ],
        [
            'title' => 'Choose the Right Number Display',
            'class' => 'service-options-section',
            'paragraphs' => [
                'The right number combination depends on the milestone, available floor space, guest flow, and the photos you want to create. We can help you decide whether one illuminated number or a multi-number display will fit the room best.',
                'Availability is confirmed for your event date before booking. Share the exact numbers you need, where the display will be installed, and whether it will be styled alone or with additional decor.',
            ],
            'lead' => 'Number rental options may include:',
            'list' => [
                'Single illuminated numbers',
                'Two-digit birthday ages',
                'Anniversary year displays',
                'Graduation year combinations',
                'Business milestone numbers',
                'Numbers beside a cake table',
                'Numbers within a photo area',
                'Numbers with a coordinated backdrop',
            ],
        ],
        [
            'title' => 'Marquee Numbers with Balloon Decor',
            'class' => 'service-themes-section',
            'image_asset' => 'assets/images/number-rental/marquee-numbers-with-balloon-decor.jpg',
            'image_alt' => 'Marquee numbers framed with coordinated balloon decor',
            'image_width' => 1000,
            'image_height' => 1333,
            'paragraphs' => [
                'Marquee numbers with balloons create a complete feature area without hiding the illuminated numbers. Balloon clusters can frame the base, rise along one side, connect the numbers to a backdrop, or extend into a larger garland.',
                'We can match soft neutrals, pastels, metallics, bright birthday colours, corporate palettes, or colours inspired by your invitation and venue. The balloon placement is adjusted to keep the numbers readable and the lighting visible in photos.',
                'If you already have a venue layout or inspiration photo, send it with your enquiry. We can recommend a balanced number-and-balloon arrangement for the available space.',
            ],
        ],
        [
            'title' => '4-Foot Marquee Number Rental',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Large light-up numbers are designed to be noticed across a room and in event photography. Their scale works especially well in banquet halls, restaurants, condo party rooms, studios, offices, and larger home celebrations.',
                'The display needs a stable, level position and suitable clearance around it. Access to a nearby power source may also be required, depending on the selected numbers and venue setup.',
                'Before confirming the rental, tell us about stairs, elevators, loading access, floor surface, venue restrictions, and the planned display area. These details help us prepare a safe and efficient installation.',
            ],
        ],
        [
            'title' => 'Delivery, Setup & Collection',
            'class' => 'service-backdrops-section',
            'image_asset' => 'assets/images/number-rental/delivery-setup-collection.jpg',
            'image_alt' => 'Marquee number rental prepared for delivery and event setup',
            'image_width' => 1000,
            'image_height' => 1333,
            'paragraphs' => [
                'A marquee number display should arrive ready for the event, stand securely, and be positioned where guests can enjoy it without blocking entrances or walkways. We coordinate delivery and setup details around the venue access window and event schedule.',
                'Collection arrangements are confirmed as part of the booking. Timing, delivery area, installation requirements, and any balloon additions are listed clearly in your quote so you know what is included before the event.',
            ],
            'lead' => 'Please share these details with your request:',
            'list' => [
                'Event date & venue',
                'Number(s) required',
                'Indoor or outdoor location',
                'Delivery & setup window',
                'Access and loading details',
                'Display dimensions',
                'Balloon colours or theme',
                'Venue and pickup rules',
            ],
        ],
        [
            'title' => 'Marquee Number Rental in Toronto & the GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides marquee number rental in Toronto, North York, Vaughan, Richmond Hill, King City, Kleinburg, and Woodbridge. We work with homes, restaurants, banquet halls, studios, offices, condo party rooms, and private event venues.',
                'Send us your event date, location, required numbers, setup time, and styling ideas. We will confirm availability and recommend a number display that fits the celebration and the space.',
            ],
        ],
    ],
    'process_title' => 'How Marquee Number Rental Works',
    'process' => [
        ['Share Your Milestone', 'Tell us the event date, venue, required numbers, celebration type, setup area, and any balloon colours or styling ideas.'],
        ['Choose the Display Style', 'Select the number combination and decide whether you want the light-up numbers on their own or styled with balloons and a backdrop.'],
        ['Confirm Delivery Details', 'We confirm availability, venue access, placement, setup timing, collection arrangements, and everything included in your quote.'],
        ['We Set Up the Numbers', 'Our team delivers and positions the marquee numbers so the display is ready before your guests arrive.'],
    ],
    'faq' => [
        ['What is included with a marquee number rental?', 'Your quote will identify the reserved number or number combination, rental period, delivery area, setup requirements, and collection arrangements. Balloon styling, backdrops, flowers, or other decor can be added when requested and will be listed separately so the booking is clear.'],
        ['How large are the light-up marquee numbers?', 'Large marquee numbers are designed to create a visible floor-standing display and are often described as approximately four feet tall. Exact dimensions can vary by number, so we confirm the available size and the floor space needed for your chosen combination before booking.'],
        ['Which marquee numbers are available for rent?', 'Availability depends on your date and the exact combination you need. Send us the age, year, or milestone you want to display and we will confirm the available numbers. Early enquiries are recommended for popular weekend dates and multi-number displays.'],
        ['Can marquee numbers be decorated with balloons?', 'Yes. Marquee numbers can be styled with balloon clusters, organic garlands, a coordinated backdrop, flowers, or a custom colour palette. The decor is positioned so the illuminated numbers stay readable and remain the main focal point in photographs.'],
        ['How much does marquee number rental cost in Toronto?', 'Pricing depends on the number of digits, event location, access, delivery and collection timing, rental duration, and whether balloons or other decor are added. Send your event details for a tailored quote instead of relying on a one-size-fits-all price.'],
        ['Can light-up numbers be used outdoors?', 'Outdoor placement may be possible only when the equipment, weather, ground surface, power access, and venue rules allow it. Because illuminated rental decor must be protected from rain, wind, moisture, and unstable surfaces, outdoor use must be approved in advance and may require an indoor backup location.'],
        ['What power and floor space do marquee numbers need?', 'The numbers should be placed on a stable, level surface with enough clearance for guests and venue traffic. A suitable nearby power source may be required. We ask for display dimensions, outlet location, access information, and venue restrictions before confirming the setup.'],
        ['How far in advance should I reserve birthday marquee numbers?', 'Reserve as early as possible for weekends, milestone birthdays, graduations, and busy event seasons. Booking early gives us time to confirm the exact number combination, venue access, balloon colours, setup schedule, and collection plan.'],
    ],
    'cta_title' => 'Light Up Your Milestone',
    'event_type' => 'Other',
    'cta_text' => [
        'Planning a birthday, anniversary, graduation, or business milestone? Reserve marquee number rental in Toronto and the GTA for a bright, memorable display built around the moment you are celebrating.',
        'Tell us the numbers you need, your event date and venue, and whether you would like balloons or a backdrop. We will confirm availability and help plan the setup.',
    ],
    'cta_button' => 'Get Marquee Number Rental Quote',
];
