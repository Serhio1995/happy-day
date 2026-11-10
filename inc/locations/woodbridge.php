<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};
$home = '<a href="' . esc_url(home_url('/')) . '">Toronto</a>';

return [
    'seo' => [
        'title' => 'Balloon Decorations Woodbridge | Banquet Halls & Homes',
        'description' => 'Balloon decorations in Woodbridge for banquet halls, weddings, baptisms, communions, showers and birthdays. Custom arches, backdrops and ceiling decor.',
        'focus' => 'balloon decorations Woodbridge',
    ],
    'area' => [
        'type' => 'Place',
        'name' => 'Woodbridge',
        'within' => [['City', 'Vaughan'], ['AdministrativeArea', 'York Region'], ['State', 'Ontario']],
    ],
    'map_focus' => 'Woodbridge',
    'title' => 'Balloon Decorations in Woodbridge',
    'intro' => [
        'Happy Day Toronto creates custom balloon decorations in Woodbridge for banquet halls, restaurants, church halls, family homes, and backyard parties — from the historic village along Woodbridge Avenue to East Woodbridge, Sonoma Heights, Vellore, and the Highway 7 corridor.',
        'We design balloon arches, garlands, backdrops, ceiling installations, and number displays for weddings, baptisms, first communions, showers, birthdays, and large family celebrations.',
    ],
    'hero_asset' => 'assets/images/locations/woodbridge-hero.webp',
    'photo_ids' => [27, 123, 176, 157, 167, 112, 124],
    'hero_button' => 'Plan My Woodbridge Setup',
    'hero_alt' => 'Ivory, gold and burgundy balloon backdrop in a warm event venue — illustrative cover',
    'sections' => [
        [
            'title' => 'Balloon Decor for Big Woodbridge Celebrations',
            'placeholder' => true,
            'paragraphs' => [
                'Woodbridge is a historic community on the Humber River that became part of Vaughan in 1971. It is home to one of the largest Italian-Canadian communities in the country, along with many Portuguese, Filipino, and other families — and a strong tradition of celebrating together. Many events here are large: a baptism with extended family, a first communion lunch, a shower for a hundred guests, or a wedding reception in a banquet hall.',
                'The historic village around Woodbridge Avenue and Market Lane has restaurants, cafés, and older family homes, where compact, well-planned setups work best. East Woodbridge and West Woodbridge are established family neighbourhoods popular for home birthdays, showers, and garden parties near the Humber River. Sonoma Heights has larger homes with high ceilings and big backyards, ideal for grand arches and ceiling decor, while Vellore and the Weston Road area are full of young families and first birthdays.',
                'Along Highway 7 and the Pine Valley corridor, banquet halls and event venues host most of the area’s weddings, communions, and large receptions.',
            ],
        ],
        [
            'title' => 'Celebrations We Decorate in Woodbridge',
            'class' => 'service-age-section',
            'placeholder' => true,
            'paragraphs' => [
                'From religious milestones to milestone birthdays, we design balloon decor in the colours and style that match each celebration — whether it is a classic white-and-gold baptism, a soft pink first communion, or a bold 50th birthday party.',
            ],
            'lead' => 'Popular Woodbridge events include:',
            'list' => [
                'Baptisms and christenings',
                'First communions and confirmations',
                'Weddings and engagement parties',
                'Bridal showers and baby showers',
                'Kids’ birthdays and first birthdays',
                'Milestone birthdays and anniversaries',
                'Graduation parties',
                'Business openings and corporate events',
                'Christmas and holiday parties',
            ],
        ],
        [
            'title' => 'Popular Balloon Services in Woodbridge',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service below is available in Woodbridge. Each link opens a detailed page with styles, ideas, and answers to common questions.',
            ],
            'lead' => 'Choose a service:',
            'list' => [
                $link('services/baptism-balloons', 'Baptism balloons'),
                $link('services/wedding-balloons', 'Wedding balloon decor'),
                $link('services/balloon-ceiling-decor', 'Balloon ceiling decor'),
                $link('services/balloon-arch-garland', 'Balloon arches and garlands'),
                $link('services/backdrop-rental', 'Backdrop rental'),
                $link('services/bridal-shower-balloons', 'Bridal shower balloons'),
                $link('services/baby-shower-balloons', 'Baby shower balloons'),
                $link('services/balloons-for-birthdays', 'Birthday balloon decorations'),
                $link('services/anniversary-balloons', 'Anniversary balloons'),
                $link('services/number-rental', 'Marquee number rental'),
            ],
        ],
        [
            'title' => 'Banquet Halls, Restaurants & Family Homes',
            'class' => 'service-themes-section',
            'placeholder' => true,
            'paragraphs' => [
                'Banquet halls in and around Woodbridge usually give vendors a fixed window to set up before the doors open. We confirm the time with you and the venue, and plan the installation so everything is finished before the first guests arrive.',
                'In a large hall, the main focal points are usually the entrance, the head table or sweetheart table, the cake or dessert table, and a photo area. We design these pieces to work together in one colour palette.',
                'For home parties and backyard events, we look at the room size, ceiling height, and outdoor conditions, and choose decor that fits the space and the weather.',
            ],
        ],
        [
            'title' => 'Balloon Styles That Work Well in Woodbridge',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Classic, elegant palettes are the most requested in Woodbridge: white and gold, ivory and champagne, white and silver, and soft blush. For baptisms and first communions, white is usually the base, with a touch of baby blue, pink, gold, or silver.',
                'In banquet halls, balloon ceilings over the dance floor, tall balloon columns at the entrance, and wide backdrops with the family name or the date make a strong impression in photos.',
                'At home, we often suggest a garland over the dining table or fireplace, a round backdrop with a custom sign, and a small arch at the front door to welcome guests.',
            ],
        ],
        [
            'title' => 'Planning a Woodbridge Event',
            'class' => 'service-backdrops-section',
            'placeholder' => true,
            'paragraphs' => [
                'First communion and confirmation season, usually from April to June, is the busiest time for Woodbridge halls and family homes, followed by summer weddings. Fall brings the Woodbridge Fall Fair, Thanksgiving gatherings, and anniversaries, and December is full of Christmas family events. For banquet hall events, booking three to five weeks ahead is best.',
                'Banquet halls often have back-to-back events, so ask for the exact access time and removal deadline in writing. For baptisms and communions, check whether decor is allowed at the church, and plan the main setup at the reception venue.',
            ],
            'lead' => 'Helpful details to send with your request:',
            'list' => [
                'Event date and start time',
                'Hall or home address',
                'Venue setup and removal times',
                'Floor plan or room photos',
                'Guest count and colours',
                'Names or dates for signage',
            ],
        ],
        [
            'title' => 'Woodbridge and Nearby Areas We Serve',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Woodbridge is part of ' . $link('service-areas/vaughan', 'Vaughan') . ', and we also decorate events in nearby ' . $link('service-areas/kleinburg', 'Kleinburg') . ', ' . $link('service-areas/north-york', 'North York') . ', ' . $link('service-areas/king-city', 'King City') . ', and ' . $home . '.',
                'Send us your event address and date, and we will confirm availability for your location.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works in Woodbridge',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, the Woodbridge address or venue, event type, guest count, colours, and inspiration photos.'],
        ['Confirm the Setup Window', 'We check the venue’s access and removal times, loading area, and any decor rules.'],
        ['We Plan the Design', 'We prepare the balloon colours, size, structure, and layout based on your room and table plan.'],
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Do you provide balloon decorations in Woodbridge?', 'Yes. Happy Day Toronto provides custom balloon decorations in Woodbridge for banquet halls, restaurants, church halls, homes, and backyard events, including the historic village, East and West Woodbridge, Sonoma Heights, and Vellore.'],
        ['Can you decorate a banquet hall in Woodbridge?', 'Yes. We create entrance arches, head table backdrops, ceiling balloons, cake table decor, and photo areas for banquet halls. We coordinate setup and removal times with the venue.'],
        ['Do you decorate baptisms and first communions?', 'Yes. We design balloon decor for baptisms, christenings, first communions, and confirmations in soft or classic palettes such as white, ivory, gold, silver, blue, and blush, for homes, halls, and restaurants.'],
        ['Can you add the child’s name or the date to the decor?', 'Yes. Custom signs, balloon lettering, and marquee numbers can be added to backdrops and arches to personalize the celebration.'],
        ['Can you create a balloon ceiling for a large hall?', 'Yes. Balloon ceilings over the dance floor or head table are popular for weddings and large parties. We check the ceiling height, venue rules, and setup time before planning.'],
        ['Do you decorate home parties in Woodbridge?', 'Yes. We create garlands, round backdrops, arches, and table displays sized for living rooms, dining rooms, and backyards.'],
        ['How much do balloon decorations cost in Woodbridge?', hd_price_summary() . ' ' . hd_price_factors() . ' Send your event details and inspiration photos for an accurate quote.'],
        ['Is Woodbridge part of Vaughan?', 'Yes. Woodbridge is a community within the City of Vaughan in York Region. We serve Woodbridge as well as the rest of Vaughan, including Kleinburg, Maple, and Concord.'],
        ['How far in advance should I book?', 'For banquet hall events, three to five weeks ahead is best, and even earlier for spring communion season and summer weddings. Smaller home setups can often be booked two to three weeks ahead.'],
        ['Can you remove the decor after the event?', 'Removal can be arranged when the venue requires same-day teardown or when rental items are included. Please mention removal needs when you ask for a quote.'],
    ],
    'cta_title' => 'Plan Your Woodbridge Balloon Decor',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, Woodbridge address or venue, guest count, colours, and the kind of setup you have in mind.',
        'We will check availability and help you choose the right balloon decor for your celebration.',
    ],
    'cta_button' => 'Get a Woodbridge Quote',
];
