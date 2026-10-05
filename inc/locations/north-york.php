<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};
$home = '<a href="' . esc_url(home_url('/')) . '">Toronto</a>';

return [
    'seo' => [
        'title' => 'Balloon Decorations North York | Arches, Garlands & Backdrops',
        'description' => 'Custom balloon decorations in North York for birthdays, showers, Bar Mitzvahs, weddings and office events. Condo party rooms, homes and venues. Get a quote.',
        'focus' => 'balloon decorations North York',
    ],
    'area' => [
        'type' => 'Place',
        'name' => 'North York',
        'within' => [['City', 'Toronto'], ['State', 'Ontario']],
    ],
    'map_focus' => 'North York',
    'title' => 'Balloon Decorations in North York',
    'intro' => [
        'Happy Day Toronto designs and installs custom balloon decorations in North York — from Willowdale and Yonge and Sheppard to Don Mills, York Mills, Bayview Village, Downsview, and the neighbourhoods along Bathurst Street.',
        'We create balloon arches, garlands, backdrops, ceiling installations, and marquee number displays for birthdays, baby showers, Bar and Bat Mitzvahs, weddings, office events, and condo party room celebrations.',
    ],
    'hero_asset' => 'assets/images/locations/north-york-hero.webp',
    'photo_ids' => [26, 116, 149, 154, 159, 107, 175],
    'hero_button' => 'Plan My North York Setup',
    'hero_alt' => 'Blue, ivory and silver balloon backdrop in a modern party lounge — illustrative cover',
    'sections' => [
        [
            'title' => 'Balloon Decor Across North York',
            'placeholder' => true,
            'paragraphs' => [
                'North York was its own city until it joined Toronto in 1998, and it still feels like a city within a city. Every part of it celebrates a little differently, so we plan each balloon setup around the neighbourhood and the space.',
                'In Willowdale and around Yonge and Finch, most events happen in condo party rooms and smaller units, where compact garlands and round backdrops work best. Around Yonge and Sheppard and North York Centre, near Mel Lastman Square, we often decorate offices and venues before business hours. Bayview Village, York Mills, and Hoggs Hollow have larger family homes and backyards with room for full entrance arches and garden photo areas.',
                'Along Bathurst Street — in Bathurst Manor, Clanton Park, and Lansing — many celebrations are Bar and Bat Mitzvahs and family holidays in homes and event halls. In Don Mills, Parkwoods, and Fairview we decorate homes, offices, and restaurants, and around Downsview and York University graduation parties are especially popular.',
            ],
        ],
        [
            'title' => 'Celebrations We Decorate in North York',
            'class' => 'service-age-section',
            'placeholder' => true,
            'paragraphs' => [
                'North York is one of the most diverse parts of Toronto. Korean, Persian, Chinese, Filipino, Russian-speaking, Jewish, Italian, and many other communities live here side by side, and each brings its own celebrations and favourite colours.',
                'That means our work here covers a wide range of events — from a Korean first-birthday table in Willowdale to a Bar Mitzvah reception on Bathurst, a Nowruz family gathering near Yonge and Finch, or a product launch in an office tower.',
            ],
            'lead' => 'Popular North York events include:',
            'list' => [
                'Kids’ birthdays and first birthdays',
                'Milestone birthdays',
                'Bar and Bat Mitzvah receptions',
                'Baby showers and gender reveals',
                'Bridal showers and engagements',
                'Graduation celebrations',
                'Office parties and launches',
                'Nowruz, Lunar New Year and Hanukkah',
                'Condo party room celebrations',
            ],
        ],
        [
            'title' => 'Popular Balloon Services in North York',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service below is available across North York. Each link opens a detailed page with styles, ideas, and answers to common questions.',
            ],
            'lead' => 'Choose a service:',
            'list' => [
                $link('services/balloons-for-birthdays', 'Birthday balloon decorations'),
                $link('services/balloon-arch-garland', 'Balloon arches and garlands'),
                $link('services/backdrop-rental', 'Backdrop rental'),
                $link('services/bar-mitzvah-balloons', 'Bar and Bat Mitzvah balloons'),
                $link('services/baby-shower-balloons', 'Baby shower balloons'),
                $link('services/balloon-ceiling-decor', 'Balloon ceiling decor'),
                $link('services/corporate-event-balloons', 'Corporate event balloons'),
                $link('services/number-rental', 'Marquee number rental'),
                $link('services/wedding-balloons', 'Wedding balloon decor'),
                $link('services/graduation-balloons', 'Graduation balloons'),
            ],
        ],
        [
            'title' => 'Condo Party Rooms, Homes & Venues',
            'class' => 'service-themes-section',
            'placeholder' => true,
            'paragraphs' => [
                'Condo party rooms are among the most common places we decorate in North York. Most buildings ask for a booked service elevator, a certificate of insurance, and a set window for setup and removal. Checking these rules with your property management early helps avoid delays on the day of the event.',
                'For private homes, we look at ceiling height, entrance width, and where guests will take photos. For restaurants and banquet halls, we coordinate the setup time with the venue so the decor is finished before guests arrive.',
                'We also decorate offices, schools, retail spaces, and community venues. For business events, we can work with brand colours and install outside of busy hours when the venue requires it.',
            ],
        ],
        [
            'title' => 'Balloon Styles That Work Well in North York',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Because so many North York events happen in condos and compact rooms, we often suggest designs that give a big effect without taking up much floor space: a garland wrapped around a round backdrop, a half arch framing a welcome sign, or a ceiling cluster above the dessert table.',
                'In larger homes and halls, full entrance arches, double-layered garlands, and balloon walls with custom names or numbers create a stronger focal point for photos.',
                'White, gold, and chrome are popular for formal receptions. Blue, white, and silver are a classic choice for Bar and Bat Mitzvahs and Hanukkah, soft pastels for baby showers, and bright, playful colours for kids’ birthdays. We can match any palette, including school colours and brand colours.',
            ],
        ],
        [
            'title' => 'Planning a North York Event',
            'class' => 'service-backdrops-section',
            'placeholder' => true,
            'paragraphs' => [
                'The busiest times of year in North York are June, when high schools and York University celebrate graduation, and December, with Hanukkah, Christmas, and office holiday parties. Spring brings Nowruz, Easter, and Passover gatherings, and fall is a busy season for Bar and Bat Mitzvahs. For these dates, booking two to four weeks ahead gives you the most choice.',
                'If your event is in a condo, ask your building about elevator bookings and vendor insurance before you book. Some party rooms and venues also limit helium or ceiling attachments — in that case, we can suggest air-filled designs that look just as full.',
            ],
            'lead' => 'Helpful details to send with your request:',
            'list' => [
                'Event date and start time',
                'Address or venue name',
                'Building rules for vendors',
                'Photos of the room or wall',
                'Wall width and ceiling height',
                'Parking or loading details',
            ],
        ],
        [
            'title' => 'North York and Nearby Areas We Serve',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'North York is part of the City of Toronto, and we decorate events across the neighbourhoods around it. If your celebration is in the rest of ' . $home . ' or just north of Steeles Avenue in ' . $link('service-areas/vaughan', 'Vaughan') . ' or ' . $link('service-areas/richmond-hill', 'Richmond Hill') . ', we can help there too.',
                'Send us your event address and date, and we will confirm availability for your location.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works in North York',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, the North York address or venue, event type, colours, and any inspiration photos.'],
        ['Confirm Venue Access', 'We check setup times, elevator or loading access, and any building rules for vendors.'],
        ['We Plan the Design', 'We prepare the balloon colours, size, structure, and setup plan based on your space.'],
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Do you provide balloon decorations in North York?', 'Yes. Happy Day Toronto provides custom balloon decorations throughout North York, including Willowdale, Yonge and Sheppard, Bayview Village, York Mills, Don Mills, Bathurst Manor, Fairview, and Downsview. We decorate homes, condo party rooms, restaurants, banquet halls, offices, and community venues.'],
        ['Can you decorate a condo party room in North York?', 'Yes. Condo party rooms are one of the most common spaces we decorate. Please check with your property management about elevator bookings, vendor insurance, and setup and removal times, and share those details when you request a quote.'],
        ['What balloon decor fits a small condo party room?', 'Garlands around a round backdrop, half arches, balloon columns, and ceiling clusters give a strong look without taking much floor space. We choose the size based on your wall width, ceiling height, and doorway size.'],
        ['Do you decorate Bar and Bat Mitzvah celebrations in North York?', 'Yes. We create balloon arches, backdrops, entrance decor, ceiling balloons, and number displays for Bar and Bat Mitzvah receptions at homes, halls, and event venues across North York.'],
        ['Can you create decor for cultural celebrations?', 'Yes. We design balloon decor for Nowruz, Lunar New Year, Hanukkah, Christmas, Diwali, Korean first birthdays, and other cultural and religious celebrations, in the colours and style that match your traditions.'],
        ['Do you decorate office and corporate events in North York?', 'Yes. We create branded balloon decor for offices, lobbies, launches, open houses, and staff events around North York Centre and across the area. We can install before business hours when the building requires it.'],
        ['How much do balloon decorations cost in North York?', 'The price depends on the size of the setup, balloon quantity and finishes, backdrops or rentals, installation time, venue access, and removal needs. Send us your event details and inspiration photos for an accurate quote.'],
        ['How far in advance should I book?', 'Two to four weeks ahead is ideal for most events. Book earlier for June graduation season, December holidays, Bar and Bat Mitzvahs, and large installations.'],
        ['Can you remove the balloon decor after the event?', 'Removal can be arranged when the venue requires same-day teardown or when rental items such as backdrops or marquee numbers are included. Please mention removal needs when you ask for a quote.'],
        ['Is North York part of Toronto?', 'Yes. North York became part of the City of Toronto in 1998. We serve North York as well as the rest of Toronto and nearby York Region communities such as Vaughan and Richmond Hill.'],
    ],
    'cta_title' => 'Plan Your North York Balloon Decor',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, North York address or venue, colours, and the kind of setup you have in mind.',
        'We will check availability and help you choose the right balloon decor for your space.',
    ],
    'cta_button' => 'Get a North York Quote',
];
