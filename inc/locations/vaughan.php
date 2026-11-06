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
    'sections' => [
        [
            'title' => 'Balloon Decor Across Vaughan',
            'placeholder' => true,
            'paragraphs' => [
                'Vaughan is one of the fastest-growing cities in York Region, and each of its communities celebrates a little differently. We plan every balloon setup around the neighbourhood, the venue, and the way guests will move through the space.',
                'Family homes in Maple, Vellore Village, and Patterson host backyard birthdays, showers, and graduation parties, often with room for a full arch or a garden photo area. In Thornhill, around Bathurst Street and Clark Avenue, and in Carrville and Thornhill Woods, many celebrations are Bar and Bat Mitzvahs, holidays, and family milestones. Concord and the Vaughan Metropolitan Centre are home to offices, showrooms, and new condo towers, where we design branded decor and compact party room setups.',
                'Planning an event in Woodbridge or Kleinburg? Both are part of Vaughan, and each has its own page with local details: ' . $link('service-areas/woodbridge', 'balloon decorations in Woodbridge') . ' and ' . $link('service-areas/kleinburg', 'balloon decorations in Kleinburg') . '.',
            ],
        ],
        [
            'title' => 'Celebrations We Decorate in Vaughan',
            'class' => 'service-age-section',
            'placeholder' => true,
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
            'class' => 'service-themes-section',
            'placeholder' => true,
            'paragraphs' => [
                'Banquet halls along Highway 7 and Rutherford Road usually give vendors a fixed setup window before the event. We confirm that time with you and the venue, so arches, backdrops, and table decor are ready before guests arrive.',
                'Backyard events in Maple, Vellore, and Thornhill give more room for large arches and photo areas, but outdoor decor needs a plan for wind, heat, and rain. We choose the right anchoring and suggest a sheltered spot when the forecast is uncertain.',
                'For offices, showrooms, and retail stores in Concord and near the Vaughan Metropolitan Centre, we can design decor in brand colours and install it before opening hours.',
            ],
        ],
        [
            'title' => 'Balloon Styles That Work Well in Vaughan',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Vaughan homes and halls often have high ceilings and wide rooms, which makes them perfect for statement pieces: a full entrance arch, a wide backdrop behind the head table, a balloon ceiling over the dance floor, or a long garland along a staircase.',
                'For family celebrations, classic palettes like white and gold, ivory and champagne, or blush and silver are very popular. Baptisms and communions often use white with soft blue, pink, or gold, while kids’ birthdays go bright and themed.',
                'For businesses in Concord and the VMC, we design clean, modern decor in brand colours — entrance arches for grand openings, balloon columns for showrooms, and branded backdrops for photo areas.',
            ],
        ],
        [
            'title' => 'Planning a Vaughan Event',
            'class' => 'service-backdrops-section',
            'placeholder' => true,
            'paragraphs' => [
                'Spring is busy in Vaughan with Easter, Passover, and first communion season, and summer brings backyard birthdays, engagement parties, and weddings. Fall is a popular time for Bar and Bat Mitzvahs in Thornhill, and December fills up quickly with Christmas, Hanukkah, and office parties. For these dates, booking two to four weeks ahead gives you the most choice.',
                'For banquet halls, it helps to share the floor plan, so we can place decor where it looks best without blocking tables or the dance floor. For backyard parties, choose a shaded or sheltered spot for the main balloon feature and keep a backup plan for strong wind or rain.',
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
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Do you provide balloon decorations in Vaughan?', 'Yes. Happy Day Toronto provides custom balloon decorations across Vaughan, including Maple, Concord, Thornhill, Vellore Village, Patterson, Carrville, the Vaughan Metropolitan Centre, Woodbridge, and Kleinburg. We decorate homes, banquet halls, restaurants, offices, and event venues.'],
        ['Can you decorate a banquet hall in Vaughan?', 'Yes. We create entrance arches, backdrops, head table decor, ceiling balloons, and photo areas for banquet halls. We coordinate the setup time with the venue so everything is ready before guests arrive.'],
        ['Do you decorate outdoor and backyard parties in Vaughan?', 'Yes. Outdoor balloon decor is possible, but wind, heat, rain, and direct sunlight affect how balloons look and how long they last. We plan anchoring and placement for your yard and recommend a backup spot when needed.'],
        ['Do you decorate Bar and Bat Mitzvahs in Thornhill?', 'Yes. We create balloon arches, backdrops, ceiling decor, and number displays for Bar and Bat Mitzvah celebrations at homes, synagogue halls, and event venues in Thornhill and across Vaughan.'],
        ['Can you create balloon decor for a baptism or first communion?', 'Yes. We design soft, elegant decor for baptisms, christenings, and first communions, often in white with gold, silver, blue, or blush, for homes, halls, and restaurants.'],
        ['Do you work with businesses in Concord and the VMC?', 'Yes. We create branded balloon decor for grand openings, showroom events, office parties, and product launches, and can install before opening hours.'],
        ['How much do balloon decorations cost in Vaughan?', hd_price_summary() . ' ' . hd_price_factors() . ' Send your event details and inspiration photos for an accurate quote.'],
        ['Do you also serve Woodbridge and Kleinburg?', 'Yes. Woodbridge and Kleinburg are both part of Vaughan, and we decorate events in both communities. Each has its own page with local details.'],
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
