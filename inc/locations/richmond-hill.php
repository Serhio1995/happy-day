<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};
$home = '<a href="' . esc_url(home_url('/')) . '">Toronto</a>';

return [
    'seo' => [
        'title' => 'Balloon Decorations Richmond Hill | Local Balloon Decorator',
        'description' => 'Richmond Hill balloon decorator for birthdays, showers, weddings, Nowruz and corporate events. Custom arches, garlands, backdrops and ceiling decor.',
        'focus' => 'balloon decorations Richmond Hill',
    ],
    'area' => [
        'type' => 'City',
        'name' => 'Richmond Hill',
        'within' => [['AdministrativeArea', 'York Region'], ['State', 'Ontario']],
    ],
    'map_focus' => 'Richmond Hill',
    'title' => 'Balloon Decorations in Richmond Hill',
    'intro' => [
        'Happy Day Toronto serves Richmond Hill with custom balloon decorations for homes, venues, and businesses across the city — from Oak Ridges and Jefferson to Mill Pond, Bayview Hill, Richvale, Langstaff, and Rouge Woods.',
        'We design balloon arches, garlands, backdrops, ceiling installations, and marquee number displays for birthdays, showers, weddings, cultural celebrations, and corporate events.',
    ],
    'hero_asset' => 'assets/images/locations/richmond-hill-hero.webp',
    'photo_ids' => [25, 114, 146, 151, 156, 173, 118],
    'hero_button' => 'Plan My Richmond Hill Setup',
    'hero_alt' => 'Blush and ivory balloon garland beside a celebration dessert table — illustrative cover',
    'sections' => [
        [
            'title' => 'Your Local Richmond Hill Balloon Decorator',
            'placeholder' => true,
            'paragraphs' => [
                'We provide balloon decoration services throughout Richmond Hill, with installation plans tailored to your home or venue. We coordinate setup times, access, and design details before your event. Availability depends on the date, so we recommend booking early.',
                'In the north, Oak Ridges and the homes around Lake Wilcox are great for backyard parties and outdoor photo areas. Jefferson, Westbrook, and Bayview Hill have large family homes with high ceilings, perfect for staircase garlands and statement backdrops. Mill Pond and the historic Yonge Street core mix older homes, restaurants, and small venues.',
                'Richvale and South Richvale are established family streets close to Hillcrest Mall, while Rouge Woods and Elgin Mills on the east side are newer neighbourhoods full of kids’ parties. Around Langstaff and Richmond Hill Centre, near Yonge and Highway 7, we plan compact setups for condo party rooms, and in the Headford business area we decorate offices for launches and staff events.',
            ],
        ],
        [
            'title' => 'Celebrations We Decorate in Richmond Hill',
            'class' => 'service-age-section',
            'placeholder' => true,
            'paragraphs' => [
                'Richmond Hill is one of the most diverse cities in York Region, with large Chinese, Iranian, Russian-speaking, Korean, Italian, and South Asian communities. We design balloon decor for family traditions, cultural holidays, and everyday milestones.',
                'A Nowruz gathering might call for fresh greens, gold, and white around the Haft-Seen table. A Lunar New Year party often uses red and gold, and a baby shower might be soft sage and cream. We adapt the design to the celebration.',
            ],
            'lead' => 'Popular Richmond Hill events include:',
            'list' => [
                'Kids’ birthdays and first birthdays',
                'Sweet 16 and milestone birthdays',
                'Baby showers and gender reveals',
                'Nowruz, Lunar New Year and Diwali',
                'Bridal showers and engagements',
                'Weddings and anniversaries',
                'Graduation parties',
                'Office events and grand openings',
                'Christmas and holiday parties',
            ],
        ],
        [
            'title' => 'Popular Balloon Services in Richmond Hill',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service below is available across Richmond Hill. Each link opens a detailed page with styles, ideas, and answers to common questions.',
            ],
            'lead' => 'Choose a service:',
            'list' => [
                $link('services/balloons-for-birthdays', 'Birthday balloon decorations'),
                $link('services/balloon-arch-garland', 'Balloon arches and garlands'),
                $link('services/backdrop-rental', 'Backdrop rental'),
                $link('services/baby-shower-balloons', 'Baby shower balloons'),
                $link('services/bridal-shower-balloons', 'Bridal shower balloons'),
                $link('services/engagement-balloons', 'Engagement balloons'),
                $link('services/balloon-and-flower-decoration', 'Balloon and flower decoration'),
                $link('services/graduation-balloons', 'Graduation balloons'),
                $link('services/corporate-event-balloons', 'Corporate event balloons'),
                $link('services/number-rental', 'Marquee number rental'),
            ],
        ],
        [
            'title' => 'Homes, Condos, Venues & Offices',
            'class' => 'service-themes-section',
            'placeholder' => true,
            'paragraphs' => [
                'Many Richmond Hill celebrations happen at home. A living room can hold a garland over the fireplace or a round backdrop for photos, while a backyard can fit a larger arch or a full photo area. We look at ceiling height, wall width, and doorways before choosing the setup.',
                'Condo party rooms near Yonge Street and Highway 7 usually require an elevator booking and vendor insurance. Banquet halls and restaurants often have a fixed setup window. We confirm these details in advance so the installation goes smoothly.',
                'For offices and retail spaces, we can design balloon decor in brand colours for launches, open houses, client events, and staff celebrations.',
            ],
        ],
        [
            'title' => 'Balloon Styles That Work Well in Richmond Hill',
            'class' => 'service-room-section',
            'paragraphs' => [
                'Many Richmond Hill homes have open-concept layouts, double-height foyers, and curved staircases. These are perfect for balloon garlands that follow the railing, ceiling clusters in the foyer, and large round backdrops in the living room.',
                'Elegant, modern palettes are especially popular here: white and gold, beige and cream, sage and ivory, blush and champagne, with chrome accents. For kids’ parties, bright themed designs with number balloons are the favourites.',
                'For cultural celebrations, we can combine balloons with flowers, greenery, and custom signage in the language you choose.',
            ],
        ],
        [
            'title' => 'Planning a Richmond Hill Event',
            'class' => 'service-backdrops-section',
            'placeholder' => true,
            'paragraphs' => [
                'Some of the busiest weekends in Richmond Hill are around Lunar New Year in winter, Nowruz in March, graduation season in June, and the December holidays. Summer is popular for backyard birthdays and engagement parties in Oak Ridges, Jefferson, and Bayview Hill. For these dates, booking two to four weeks ahead gives you the most choice.',
                'Before booking, ask your condo, hall, or restaurant about setup times, helium rules, and whether decor can be attached to walls or ceilings. For outdoor parties, a covered patio or the shaded side of the yard helps balloons look better for longer.',
            ],
            'lead' => 'Helpful details to send with your request:',
            'list' => [
                'Event date and start time',
                'Address or venue name',
                'Photos of the room or yard',
                'Wall width and ceiling height',
                'Venue or building rules',
                'Colours and inspiration photos',
            ],
        ],
        [
            'title' => 'Richmond Hill and Nearby Areas We Serve',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Along with Richmond Hill, we also serve the surrounding communities, including ' . $link('service-areas/king-city', 'King City') . ', ' . $link('service-areas/vaughan', 'Vaughan') . ', ' . $link('service-areas/north-york', 'North York') . ', and ' . $home . '.',
                'Send us your event address and date, and we will confirm availability for your location.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works in Richmond Hill',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, Richmond Hill address or venue, event type, colours, and inspiration photos.'],
        ['Confirm Access and Timing', 'We check setup times, parking or elevator access, and any venue rules for vendors.'],
        ['We Plan the Design', 'We prepare the balloon colours, size, structure, and setup plan based on your space.'],
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Does Happy Day Toronto serve Richmond Hill?', 'Yes. Happy Day Toronto provides custom balloon decorations for homes, venues, and businesses across Richmond Hill, with delivery and installation arranged for your event.'],
        ['Which Richmond Hill neighbourhoods do you serve?', 'We serve all of Richmond Hill, including Oak Ridges, Lake Wilcox, Jefferson, Westbrook, Mill Pond, Bayview Hill, Richvale, Langstaff, Rouge Woods, Elgin Mills, Headford, and the Yonge Street corridor.'],
        ['Can you decorate for Nowruz or Lunar New Year?', 'Yes. We design balloon decor for Nowruz, Lunar New Year, Diwali, Christmas, and other cultural and religious celebrations, in colours and styles that match your traditions, for homes, restaurants, halls, and community events.'],
        ['Can you create balloon decor for a home party?', 'Yes. Home parties are one of the most common events we decorate. Garlands, round backdrops, arches, ceiling balloons, and number displays can all be sized to fit your living room, dining area, foyer, or backyard.'],
        ['Can you decorate a staircase or a double-height foyer?', 'Yes. Staircase garlands and foyer installations are very popular in Richmond Hill homes. Send us photos of the space and the railing so we can plan the size and attachment method.'],
        ['Can you add custom signs in other languages?', 'Yes. Custom signage can be added to backdrops and arches in English or other languages, such as Persian, Chinese, or Korean.'],
        ['How much do balloon decorations cost in Richmond Hill?', hd_price_summary() . ' ' . hd_price_factors() . ' Send your event details and inspiration photos for an accurate quote.'],
        ['How far in advance should I book?', 'Two to four weeks ahead is ideal for most events. Book earlier for Nowruz, graduation season, December holidays, and large installations.'],
        ['Do you decorate offices and businesses in Richmond Hill?', 'Yes. We create branded balloon decor for offices, retail stores, grand openings, and corporate events, and can install before opening hours.'],
        ['Can you remove the decor after the event?', 'Removal can be arranged when the venue requires same-day teardown or when rental items are included. Please mention removal needs when you ask for a quote.'],
    ],
    'cta_title' => 'Plan Your Richmond Hill Balloon Decor',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, Richmond Hill address or venue, colours, and the kind of setup you have in mind.',
        'We will check availability and help you choose the right balloon decor for your space.',
    ],
    'cta_button' => 'Get a Richmond Hill Quote',
];
