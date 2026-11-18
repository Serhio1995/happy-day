<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'seo' => [
        'title' => 'Balloon Decorations Vaughan | Maple, Concord & Thornhill',
        'description' => 'Custom balloon decorations in Vaughan, Maple, Concord and Thornhill. Arches, garlands, backdrops and ceiling decor for homes, banquet halls and offices.',
        'focus' => 'balloon decorations Vaughan',
    ],
    'area' => [
        'type' => 'City',
        'name' => 'Vaughan',
        'within' => [['AdministrativeArea', 'York Region'], ['State', 'Ontario']],
    ],
    'map_focus' => 'Vaughan',
    'title' => 'Balloon Decorations in Vaughan',
    'intro' => [
        'Happy Day Toronto creates custom balloon decorations in Vaughan, including Maple, Concord, Thornhill, Vellore Village, Patterson, Carrville, and the Vaughan Metropolitan Centre.',
        'From backyard birthday parties to banquet hall receptions and corporate events near Highway 7, we design balloon arches, garlands, backdrops, ceiling decor, and number displays that fit your venue and your colour palette.',
    ],
    'hero_asset' => 'assets/images/locations/vaughan-hero.webp',
    'photo_ids' => [106, 142, 147, 155, 162, 108, 145],
    'hero_button' => 'Plan My Vaughan Setup',
    'hero_alt' => 'Blush, ivory and gold balloon arch in an elegant event hall — illustrative cover',
    'page_class' => 'hd-city',
    'sections' => [
        [
            'title' => 'Balloon Decor Across Vaughan',
            'eyebrow' => 'Neighbourhood by neighbourhood',
            'class' => 'city-bg city-bg-cream',
            'no_photo' => true,
            'paragraphs' => [
                'Vaughan is one of the fastest-growing cities in York Region, and each of its communities celebrates a little differently. We plan every setup around the neighbourhood, the venue and the way guests will move through the space.',
            ],
            'cards_style' => 'tickets',
            'cards' => [
                [
                    'icon' => 'cake-candles',
                    'title' => 'Maple',
                    'text' => 'Family homes with backyards around Major Mackenzie Drive, with room for a full arch, a garden photo corner or a marquee number display.',
                    'meta' => 'Best for: backyard birthdays, showers, graduations',
                ],
                [
                    'icon' => 'sparkles',
                    'title' => 'Thornhill',
                    'text' => 'Around Bathurst Street, Clark Avenue and Thornhill Woods. Many celebrations here are Bar and Bat Mitzvahs, holidays and family milestones. See our ' . $link('services/bar-mitzvah-balloons', 'Bar and Bat Mitzvah balloons') . '.',
                    'meta' => 'Best for: Bar/Bat Mitzvahs, Hanukkah, milestones',
                ],
                [
                    'icon' => 'file-contract',
                    'title' => 'Concord & the VMC',
                    'text' => 'Offices, showrooms and new condo towers near Highway 7. We design branded decor and compact setups that fit a condo party room.',
                    'meta' => 'Best for: grand openings, office parties, condo party rooms',
                ],
                [
                    'icon' => 'gift',
                    'title' => 'Vellore, Patterson & Carrville',
                    'text' => 'Family neighbourhoods with open-concept homes, where ceiling balloons, staircase garlands and a living room backdrop work well.',
                    'meta' => 'Best for: baby showers, baptisms, kids’ birthdays',
                ],
            ],
            'note' => 'Planning in Woodbridge or Kleinburg? Both are part of Vaughan and have their own pages: ' . $link('service-areas/woodbridge', 'Woodbridge') . ' and ' . $link('service-areas/kleinburg', 'Kleinburg') . '.',
        ],
        [
            'title' => 'Celebrations We Decorate in Vaughan',
            'class' => 'service-age-section',
            'paragraphs' => [
                'Vaughan has large Italian, Jewish, Russian-speaking, South Asian, and many other communities, and families here love to celebrate together. Events range from small at-home gatherings to receptions with hundreds of guests.',
                'We design balloon decor for religious milestones, family traditions, and business events, always in the colours and style that fit the occasion.',
            ],
            'lead' => 'Popular Vaughan events include:',
            'list' => [
                'Birthday parties for all ages',
                'First and milestone birthdays',
                'Baby showers and gender reveals',
                'Baptisms and first communions',
                'Bridal showers and weddings',
                'Bar and Bat Mitzvahs in Thornhill',
                'Anniversary parties',
                'Grand openings and corporate events',
                'Christmas, Hanukkah and holiday parties',
            ],
        ],
        [
            'title' => 'Popular Balloon Services in Vaughan',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service below is available across Vaughan. Each link opens a detailed page with styles, ideas, and answers to common questions.',
            ],
            'lead' => 'Choose a service:',
            'list' => [
                $link('services/balloons-for-birthdays', 'Birthday balloon decorations'),
                $link('services/balloon-arch-garland', 'Balloon arches and garlands'),
                $link('services/backdrop-rental', 'Backdrop rental'),
                $link('services/baby-shower-balloons', 'Baby shower balloons'),
                $link('services/bar-mitzvah-balloons', 'Bar and Bat Mitzvah balloons'),
                $link('services/baptism-balloons', 'Baptism balloons'),
                $link('services/wedding-balloons', 'Wedding balloon decor'),
                $link('services/anniversary-balloons', 'Anniversary balloons'),
                $link('services/corporate-event-balloons', 'Corporate event balloons'),
                $link('services/balloon-ceiling-decor', 'Balloon ceiling decor'),
                $link('services/number-rental', 'Marquee number rental'),
            ],
        ],
        [
            'title' => 'Banquet Halls, Backyards & Business Spaces',
            'eyebrow' => 'Where the party happens',
            'class' => 'city-bg city-bg-sky',
            'no_photo' => true,
            'paragraphs' => [
                'Each type of venue has its own rules, timing and space. This is what we check and what usually works in each one.',
            ],
            'zones' => [
                ['label' => 'Banquet hall', 'temp' => 'Highway 7 & Rutherford Road', 'use' => 'Entrance arch, head table backdrop, ceiling balloons over the dance floor', 'note' => 'Most halls give vendors a fixed setup window. We confirm it with you and the venue, so the decor is ready before guests arrive.'],
                ['label' => 'Backyard', 'temp' => 'Maple, Vellore & Thornhill', 'use' => 'Full arch, garden photo area, weighted balloon columns', 'note' => 'Outdoor decor needs a plan for wind, heat and rain. We anchor everything and suggest a sheltered spot if the forecast is uncertain.'],
                ['label' => 'Office & showroom', 'temp' => 'Concord & the VMC', 'use' => 'Branded entrance arch, balloon columns, logo photo backdrop', 'note' => 'Decor in your brand colours, installed before opening hours so it does not get in the way of work.'],
            ],
        ],
        [
            'title' => 'Balloon Arches, Garlands & Styles for Vaughan Events',
            'eyebrow' => 'Colours that photograph well',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Vaughan homes and halls often have high ceilings and wide rooms, which suits statement pieces: a full entrance arch, a wide backdrop behind the head table, a balloon ceiling over the dance floor, or a long garland along a staircase.',
            ],
            'lead' => 'Palettes Vaughan families ask for most:',
            'palettes' => [
                ['name' => 'White and gold', 'note' => 'Weddings and receptions', 'colors' => ['#ffffff', '#d4af6a', '#f3ead7']],
                ['name' => 'Ivory and champagne', 'note' => 'Banquet hall elegance', 'colors' => ['#f6efe1', '#e6cc9a', '#c99a3e']],
                ['name' => 'Blush and silver', 'note' => 'Showers and engagements', 'colors' => ['#f4c6cf', '#c3c9d4', '#ffffff']],
                ['name' => 'White and soft blue', 'note' => 'Baptisms and communions', 'colors' => ['#ffffff', '#bcd7f0', '#d4af6a']],
                ['name' => 'Navy, gold and white', 'note' => 'Bar Mitzvahs and milestones', 'colors' => ['#1c2a55', '#d4af6a', '#ffffff']],
                ['name' => 'Black and gold', 'note' => 'Milestone birthdays', 'colors' => ['#1d1f2b', '#d4af6a', '#c99a3e']],
                ['name' => 'Bright party colours', 'note' => 'Kids’ birthdays', 'colors' => ['#f17ca4', '#7cc4e8', '#f5c542']],
                ['name' => 'Your brand colours', 'note' => 'Concord and VMC businesses', 'colors' => ['outline', 'outline', 'outline']],
            ],
        ],
        [
            'title' => 'Popular Vaughan Setups and What They Cost',
            'eyebrow' => 'Real starting prices',
            'class' => 'city-bg city-bg-blush',
            'no_photo' => true,
            'paragraphs' => [
                hd_price_summary(),
            ],
            'combos' => [
                'note' => 'Estimates from our starting prices in CAD, before delivery. Installation and takedown are included for garlands and backdrops. Your exact price is confirmed in the quote.',
                'items' => [
                    ['title' => 'Backyard Birthday', 'for' => 'Maple and Vellore homes', 'items' => [['garland', 1, 'Garland over the cake table'], ['numbers', 2, '4-ft marquee numbers for the age']]],
                    ['title' => 'Living Room Milestone', 'for' => 'Family dinners at home', 'items' => [['garland', 1, 'Garland over the fireplace'], ['foil', 10, 'Foil accents'], ['numbers', 2, '4-ft marquee numbers']]],
                    ['title' => 'Baptism at Home', 'for' => 'After the church service', 'items' => [['backdrop', 1, 'Backdrop'], ['garland', 1, 'Backdrop garland'], ['latex', 20, 'Helium balloons']]],
                    ['title' => 'Bar Mitzvah Photo Wall', 'for' => 'Thornhill halls and homes', 'items' => [['backdrop', 1, 'Backdrop'], ['garland', 1, 'Balloon garland'], ['numbers', 2, '4-ft marquee numbers “13”']]],
                    ['title' => 'Banquet Hall Entrance', 'for' => 'Receptions on Highway 7', 'items' => [['garland', 1, 'Entrance garland'], ['backdrop', 1, 'Head table backdrop'], ['garland', 1, 'Backdrop garland']]],
                    ['title' => 'Grand Opening', 'for' => 'Concord and VMC businesses', 'items' => [['garland', 1, 'Entrance garland in brand colours'], ['latex', 30, 'Helium balloons for the storefront']]],
                ],
            ],
        ],
        [
            'title' => 'Planning a Vaughan Event',
            'eyebrow' => 'When to book',
            'class' => 'service-backdrops-section',
            'paragraphs' => [
                'Vaughan’s calendar has a few busy stretches. For these dates, booking two to four weeks ahead gives you the most choice; for weddings, communion season and December, book earlier.',
            ],
            'menu' => [
                'title' => 'Vaughan’s Busy Seasons',
                'subtitle' => 'When install slots fill up first',
                'items' => [
                    ['Easter, Passover and first communions', 'March to May'],
                    ['Backyard birthdays, engagements and weddings', 'June to August'],
                    ['Bar and Bat Mitzvahs in Thornhill', 'September to November'],
                    ['Christmas, Hanukkah and office parties', 'December'],
                ],
            ],
            'lead' => 'Helpful details to send with your request:',
            'list' => [
                'Event date and start time',
                'Address or venue name',
                'Venue setup window',
                'Photos of the room or yard',
                'Floor plan for halls',
                'Guest count and colours',
            ],
        ],
        [
            'title' => 'Vaughan and Nearby Areas We Serve',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'We decorate events across all of Vaughan and the surrounding communities. Neighbouring areas with their own pages include ' . $link('service-areas/woodbridge', 'Woodbridge') . ', ' . $link('service-areas/kleinburg', 'Kleinburg') . ', ' . $link('service-areas/richmond-hill', 'Richmond Hill') . ', ' . $link('service-areas/king-city', 'King City') . ', and ' . $link('service-areas/north-york', 'North York') . '.',
                'Send us your event address and date, and we will confirm availability for your location.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works in Vaughan',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, the Vaughan address or venue, event type, colours, and inspiration photos.'],
        ['Confirm the Setup Window', 'We check the venue’s access time, parking or loading area, and any rules for vendors.'],
        ['We Plan the Design', 'We prepare the balloon colours, size, structure, and setup plan based on your space.'],
        ['We Install Before Guests Arrive', 'Delivery and installation are included in the plan: our team arrives anywhere in Vaughan, from Maple to Thornhill, at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Do you provide balloon decorations in Vaughan?', 'Yes. Happy Day Toronto provides custom balloon decorations across Vaughan, including Maple, Concord, Thornhill, Vellore Village, Patterson, Carrville, and the Vaughan Metropolitan Centre. We decorate homes, banquet halls, restaurants, offices, and event venues.'],
        ['Can you decorate a banquet hall in Vaughan?', 'Yes. We create entrance arches, backdrops, head table decor, ceiling balloons, and photo areas for banquet halls. We coordinate the setup time with the venue so everything is ready before guests arrive.'],
        ['Do you decorate outdoor and backyard parties in Vaughan?', 'Yes. Outdoor balloon decor is possible, but wind, heat, rain, and direct sunlight affect how balloons look and how long they last. We plan anchoring and placement for your yard and recommend a backup spot when needed.'],
        ['Do you decorate Bar and Bat Mitzvahs in Thornhill?', 'Yes. We create balloon arches, backdrops, ceiling decor, and number displays for Bar and Bat Mitzvah celebrations at homes, synagogue halls, and event venues in Thornhill and across Vaughan.'],
        ['Can you create balloon decor for a baptism or first communion?', 'Yes. We design soft, elegant decor for baptisms, christenings, and first communions, often in white with gold, silver, blue, or blush, for homes, halls, and restaurants.'],
        ['Do you work with businesses in Concord and the VMC?', 'Yes. We create branded balloon decor for grand openings, showroom events, office parties, and product launches, and can install before opening hours.'],
        ['How much do balloon decorations cost in Vaughan?', hd_price_summary() . ' ' . hd_price_factors() . ' Send your event details and inspiration photos for an accurate quote.'],
        ['How far in advance should I book?', 'Two to four weeks ahead is ideal for most events. Book earlier for weddings, communion season, and December holidays.'],
        ['Can you remove the decor after the event?', 'Removal can be arranged when the venue requires same-day teardown or when rental items are included. Please mention removal needs when you ask for a quote.'],
    ],
    'cta_title' => 'Plan Your Vaughan Balloon Decor',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, Vaughan address or venue, colours, and the kind of setup you have in mind.',
        'We will check availability and help you choose the right balloon decor for your space.',
    ],
    'cta_button' => 'Get a Vaughan Quote',
];
