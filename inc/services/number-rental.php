<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'schema' => [
        'name' => 'Marquee Number and Letter Rental',
        'service_type' => 'Marquee number and letter rental',
        'offers' => ['numbers', 'letters'],
    ],
    'title' => 'Marquee Number & Letter Rental That Lights Up the Moment',    'intro' => [
        'Make a milestone impossible to miss with marquee number and letter rental in Toronto and the GTA. Our 4-ft light-up numbers and marquee letters create a bold, photo-ready focal point for birthdays, proposals, weddings, anniversaries, graduations and business events.',
        'Numbers start ' . lcfirst(hd_price('numbers')) . ' and letters are ' . hd_price('letters') . '. We deliver, set up and collect them, and we can style them with balloons, a backdrop or flowers for a complete display.',
    ],
    'hero_button' => 'Reserve My Marquee Display',
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
                'Large light-up numbers instantly show guests what the celebration is about. They work as an entrance feature, a backdrop for photos, a statement beside the cake table, or the centrepiece of a larger balloon installation.',
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
                $link('blog/first-birthday-balloon-decoration-ideas', 'First birthday') . ' number displays',
                '13th and ' . $link('blog/16th-birthday-balloon-decoration-ideas', '16th birthdays'),
                $link('blog/18th-birthday-balloon-decoration-ideas', '18th birthday') . ' celebrations',
                '30th and 40th birthdays',
                $link('blog/50th-birthday-balloon-decorations', '50th') . ' and ' . $link('blog/60th-birthday-balloon-decorations', '60th') . ' milestones',
                '75th and 80th birthdays',
                'Anniversary year displays',
                'Graduation year numbers',
                'Business anniversary numbers',
                'Custom milestone combinations',
            ],
        ],
        [
            'title' => 'Marquee Letter Rental: LOVE, Marry Me, Names & Initials',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Marquee letters spell out the moment itself. A light-up LOVE behind the sweetheart table, MARRY ME at a ' . $link('services/engagement-balloons', 'proposal') . ', a baby’s name at a shower or a company name at a launch turns a simple word into the main photo spot of the event.',
                'Letters are ' . hd_price('letters') . ', so a word is easy to price before you book: LOVE is four letters, MARRY ME is seven. Tell us the word or name you want and we confirm the letters available for your date.',
                'For a proposal in a hotel room or at home, see our ' . $link('blog/hotel-room-proposal-ideas-toronto', 'hotel room proposal ideas') . ' and ' . $link('blog/proposal-ideas-toronto', 'proposal ideas in Toronto') . '.',
            ],
            'lead' => 'Popular marquee letter words:',
            'list' => [
                'LOVE for weddings and anniversaries',
                'MARRY ME for proposals',
                'BRIDE for bridal showers',
                'BABY or the baby’s name for showers',
                'ONE for a first birthday',
                'Initials of the couple',
                'A company or brand name',
                'A short custom word',
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
                'Marquee numbers and letters with balloons create a complete feature area without hiding the lights. Balloon clusters can frame the base, rise along one side, connect the numbers to a backdrop, or extend into a larger garland.',
                'We can match soft neutrals, pastels, metallics, bright birthday colours, corporate palettes, or colours inspired by your invitation and venue. The balloon placement is adjusted to keep the numbers readable and the lighting visible in photos.',
                'If you already have a venue layout or inspiration photo, send it with your enquiry. We can recommend a balanced number-and-balloon arrangement for the available space.',
            ],
        ],
        [
            'title' => '4-Ft Marquee Numbers: Size, Power & Placement',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Our marquee numbers are 4 feet tall and stand on the floor, so they are noticed across a room and in every photo. Their scale works especially well in banquet halls, restaurants, condo party rooms, studios, offices, and larger home celebrations.',
                'The display needs a stable, level position and suitable clearance around it. Plan for a nearby power outlet, and allow more wall or floor width for a longer word or a four-digit year than for a single age.',
                'Not sure whether one number, two digits or a full word suits the room? Send the space and the photos you want, and we recommend a display that fits. Availability is confirmed for your date before booking.',
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
            'title' => 'Marquee Number & Letter Prices',
            'paragraphs' => [
                'Starting prices in CAD. Delivery is priced by distance, and we collect the numbers and letters after the party.',
                'The final price depends on how many digits or letters you need, the distance to your venue, the setup time, and whether balloons or a backdrop are added.',
            ],
            'price_table' => ['numbers', 'letters'],
            'combos' => [
                'title' => 'Example Prices',
                'intro' => 'Popular displays and what they start at.',
                'note' => 'Estimates from our starting prices in CAD, before delivery. Your exact price is confirmed in the quote.',
                'items' => [
                    ['title' => 'Birthday Age', 'for' => 'A 60th or any two-digit age', 'items' => [['numbers', 2, '4-ft marquee numbers “60”']]],
                    ['title' => 'Wedding LOVE', 'for' => 'Sweetheart table or dance floor', 'items' => [['letters', 4, 'Marquee letters “LOVE”']]],
                    ['title' => 'Proposal', 'for' => 'Home, hotel room or venue', 'items' => [['letters', 7, 'Marquee letters “MARRY ME”']]],
                    ['title' => 'Graduation Year', 'for' => 'Grad party or school event', 'items' => [['numbers', 4, '4-ft marquee numbers “2027”']]],
                    ['title' => 'Age With a Garland', 'for' => 'Birthday photo spot', 'items' => [['numbers', 2, '4-ft marquee numbers'], ['garland', 1, 'Balloon garland']]],
                    ['title' => 'Full Photo Wall', 'for' => 'Milestone party or banquet hall', 'items' => [['backdrop', 1, 'Backdrop'], ['garland', 1, 'Balloon garland'], ['numbers', 2, '4-ft marquee numbers']]],
                ],
            ],
        ],
        [
            'title' => 'Marquee Number & Letter Rental in Toronto & the GTA',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Happy Day Toronto provides marquee number and letter rental in Toronto, North York, Vaughan, Richmond Hill, King City, Kleinburg, and Woodbridge. We work with homes, restaurants, banquet halls, studios, offices, condo party rooms, and private event venues.',
                'Send us your event date, location, the numbers or word you need, setup time, and styling ideas. We will confirm availability and recommend a number display that fits the celebration and the space.',
            ],
        ],
    ],
    'process_title' => 'How Marquee Number & Letter Rental Works',
    'process' => [
        ['Share Your Milestone', 'Tell us the event date, venue, the numbers or word you need, celebration type, setup area, and any balloon colours or styling ideas.'],
        ['Choose the Display Style', 'Select the numbers or letters and decide whether you want them on their own or styled with balloons and a backdrop.'],
        ['Confirm Delivery Details', 'We confirm availability, venue access, placement, setup timing, collection arrangements, and everything included in your quote.'],
        ['We Set Up the Display', 'Our team delivers and positions the marquee numbers and letters so the display is ready before your guests arrive.'],
    ],
    'faq' => [
        ['What is included with a marquee number rental?', 'Your quote will identify the reserved number or number combination, rental period, delivery area, setup requirements, and collection arrangements. Balloon styling, backdrops, flowers, or other decor can be added when requested and will be listed separately so the booking is clear.'],
        ['How large are the light-up marquee numbers?', 'Our marquee numbers are 4 feet tall and stand on the floor. A longer combination, such as a four-digit year, needs more width, so tell us where the display will go and we confirm it fits before booking.'],
        ['Can I rent LOVE or Marry Me marquee letters?', 'Yes. LOVE and MARRY ME are among the most requested words, along with names, initials and company names. Letters are ' . hd_price('letters') . ', so LOVE starts at $' . hd_price_value('letters') * 4 . ' and MARRY ME at $' . hd_price_value('letters') * 7 . '. Send us the word and your date and we confirm the letters available.'],
        ['Which marquee numbers are available for rent?', 'Availability depends on your date and the exact combination you need. Send us the age, year, or milestone you want to display and we will confirm the available numbers. Early enquiries are recommended for popular weekend dates and multi-number displays.'],
        ['Can marquee numbers be decorated with balloons?', 'Yes. Marquee numbers can be styled with balloon clusters, organic garlands, a coordinated backdrop, flowers, or a custom colour palette. The decor is positioned so the illuminated numbers stay readable and remain the main focal point in photographs.'],
        ['How much does marquee number rental cost in Toronto?', '4-ft marquee numbers start ' . lcfirst(hd_price('numbers')) . ' each and marquee letters are ' . hd_price('letters') . ', so a two-digit age starts at $' . hd_price_value('numbers') * 2 . '. The final price depends on the number of digits, event location and distance, delivery and collection timing, setup time, and whether balloons or a backdrop are added. Send your event details and we will confirm the exact price.'],
        ['Can light-up numbers be used outdoors?', 'Outdoor placement may be possible only when the equipment, weather, ground surface, power access, and venue rules allow it. Because illuminated rental decor must be protected from rain, wind, moisture, and unstable surfaces, outdoor use must be approved in advance and may require an indoor backup location.'],
        ['What power and floor space do marquee numbers need?', 'The numbers should be placed on a stable, level surface with enough clearance for guests and venue traffic. A suitable nearby power source may be required. We ask for display dimensions, outlet location, access information, and venue restrictions before confirming the setup.'],
        ['How far in advance should I reserve birthday marquee numbers?', 'Reserve as early as possible for weekends, milestone birthdays, graduations, and busy event seasons. Booking early gives us time to confirm the exact number combination, venue access, balloon colours, setup schedule, and collection plan.'],
        ['What balloons do you use to decorate marquee numbers?', 'When balloons are added to a marquee number, we use premium, mostly Italian-made latex from trusted Canadian suppliers rather than the cheapest imported balloons. This keeps the colour and shape of the styling consistent against the illuminated frame and helps it hold up for the full rental period instead of starting to sag or dull early. If your rental spans multiple days, let us know so we can recommend balloon styling suited to that length of display.'],
    ],
    'cta_title' => 'Light Up Your Milestone',
    'event_type' => 'Other',
    'cta_text' => [
        'Planning a birthday, proposal, wedding, graduation, or business milestone? Reserve marquee number and letter rental in Toronto and the GTA for a bright, memorable display built around the moment you are celebrating.',
        'Tell us the numbers or word you need, your event date and venue, and whether you would like balloons or a backdrop. We will confirm availability and help plan the setup.',
    ],
    'cta_button' => 'Get a Marquee Rental Quote',
];
