<?php
if (!defined('ABSPATH')) exit;

/* The hub is a directory. It routes visitors to the city pages and keeps the
 * local detail (neighbourhood venues, seasonal planning, city FAQs) on those
 * pages, so the hub and the cities never compete for the same searches. */
$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};
$area = function ($slug, $city) use ($link) {
    return $link('service-areas/' . $slug, 'balloon decorations in ' . $city);
};
$home = '<a href="' . esc_url(home_url('/')) . '">Toronto</a>';

return [
    'seo' => [
        'title' => 'Service Areas | Happy Day Toronto Balloon Decorations',
        'description' => 'Areas where Happy Day Toronto provides balloon decorations: Toronto, North York, Vaughan, Richmond Hill, King City, Kleinburg and Woodbridge.',
        'focus' => 'balloon decoration service areas',
    ],
    'title' => 'Balloon Decoration Service Areas',
    'intro' => [
        'Happy Day Toronto provides custom balloon decorations in Toronto, North York, and across York Region — including Vaughan, Richmond Hill, King City, Kleinburg, and Woodbridge.',
        'Choose your area below to see local details, popular services, and planning tips for your celebration.',
    ],
    'hero_asset' => 'assets/images/balloon-decorations-toronto-gta-events.webp',
    'hero_button' => 'Check Availability',
    'hero_alt' => 'Custom balloon decor from the Happy Day Toronto portfolio',
    // Not used on any city page or in the shared gallery block below.
    'photo_ids' => [144, 143, 122, 163],
    'area_directory' => [
        'title' => 'Choose Your Area',
        'text' => 'Every area has its own page with the neighbourhoods we cover, the venues we work in most, and local planning tips.',
        'cards' => [
            ['path' => '', 'image_id' => 109, 'name' => 'Toronto', 'region' => 'City of Toronto', 'label' => 'Balloon decorations in Toronto',
                'text' => 'Our home base: condos, homes, restaurants, and event venues across the city.'],
            ['path' => 'north-york', 'image_id' => 113, 'name' => 'North York', 'region' => 'City of Toronto', 'label' => 'Balloon decorations in North York',
                'text' => 'Condo party rooms, family homes, and offices from Willowdale to Don Mills.'],
            ['path' => 'vaughan', 'image_id' => 133, 'name' => 'Vaughan', 'region' => 'York Region', 'label' => 'Balloon decorations in Vaughan',
                'text' => 'Maple, Concord, Thornhill, and the VMC — homes, halls, and business events.'],
            ['path' => 'richmond-hill', 'image_id' => 115, 'name' => 'Richmond Hill', 'region' => 'York Region', 'label' => 'Balloon decorations in Richmond Hill',
                'text' => 'Oak Ridges to Langstaff — family homes, restaurants, and community venues.'],
            ['path' => 'king-city', 'image_id' => 164, 'name' => 'King City', 'region' => 'King Township', 'label' => 'Balloon decorations in King City',
                'text' => 'Estate homes, tented backyards, and country clubs across King Township.'],
            ['path' => 'kleinburg', 'image_id' => 125, 'name' => 'Kleinburg', 'region' => 'Vaughan', 'label' => 'Balloon decorations in Kleinburg',
                'text' => 'Elegant decor for the village core, estate properties, and garden venues.'],
            ['path' => 'woodbridge', 'image_id' => 132, 'name' => 'Woodbridge', 'region' => 'Vaughan', 'label' => 'Balloon decorations in Woodbridge',
                'text' => 'Banquet halls, church halls, and big family celebrations.'],
        ],
    ],
    'sections' => [
        [
            'title' => 'One Team for Toronto and York Region',
            'paragraphs' => [
                'Happy Day Toronto is a local balloon decor studio. The same team designs, delivers, and installs every setup, whether the event is in a downtown condo, a North York office, or a backyard in King Township.',
                'We decorate homes, condo party rooms, banquet halls, restaurants, churches, offices, schools, and outdoor events. Each area page explains what usually matters for local venues — parking, elevators, setup windows, or space for a larger arch.',
                'If you are not sure which page covers your address, look for your neighbourhood below or send us the address and date.',
            ],
        ],
        [
            'title' => 'Find Your Neighbourhood',
            'class' => 'service-age-section',
            'paragraphs' => [
                'Many GTA neighbourhoods go by their own names. Here is where the most common ones are covered on our site:',
            ],
            'list' => [
                'Willowdale, Yonge and Sheppard, Don Mills, York Mills, Bayview Village, Downsview — ' . $area('north-york', 'North York'),
                'Maple, Concord, Thornhill, Vellore Village, Patterson, Carrville, VMC — ' . $area('vaughan', 'Vaughan'),
                'Oak Ridges, Jefferson, Mill Pond, Bayview Hill, Richvale, Langstaff, Rouge Woods — ' . $area('richmond-hill', 'Richmond Hill'),
                'Nobleton, Schomberg, Kettleby — ' . $area('king-city', 'King City'),
                'Kleinburg village, Major Mackenzie Drive, Nashville Road — ' . $area('kleinburg', 'Kleinburg'),
                'East Woodbridge, Sonoma Heights, Vellore, the Highway 7 corridor — ' . $area('woodbridge', 'Woodbridge'),
                'Downtown, midtown, and the rest of the city — ' . $home,
            ],
        ],
        [
            'title' => 'Services Available in Every Area',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service is offered in all of our areas. Choose an occasion or a type of decor to see styles, ideas, and answers to common questions.',
            ],
        ],
        [
            'title' => 'How Venues Differ Across the GTA',
            'class' => 'service-themes-section',
            'paragraphs' => [
                'The venue shapes the design as much as the colour palette does. Condo party rooms and offices usually need compact decor, a booked elevator, and a short setup window. Banquet halls give a fixed time before guests arrive, so we plan the install order around it.',
                'Larger homes and private properties have room for full arches, wide backdrops, and garden photo areas, but outdoor decor needs a plan for wind, heat, and rain.',
                'Each area page covers the venues we see most often there, so you can plan around the space you actually have.',
            ],
        ],
        [
            'title' => 'Travel, Setup and Timing',
            'class' => 'service-backdrops-section',
            'paragraphs' => [
                'We travel to every address in our service areas with all the materials and tools for the installation. Travel, venue access, and setup time are included in your written quote, so there are no surprises on the day.',
                'Most installations are finished before guests arrive. When a venue needs same-day teardown, or when rentals such as backdrops and marquee numbers are included, we can schedule removal after the event.',
            ],
            'lead' => 'Book further ahead for:',
            'list' => [
                'Weekends in May and June',
                'Wedding and graduation season',
                'December holiday parties',
                'Large or multi-room installations',
                'Venues with short setup windows',
                'Events outside our main areas',
            ],
        ],
        [
            'title' => 'Map of Our Service Areas',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Our team travels to your home or venue, installs the decor before guests arrive, and can arrange removal when it is needed. Travel, access, and setup time are included in your quote.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, address or venue, event type, colours, and inspiration photos.'],
        ['Confirm Availability', 'We confirm the date, travel, venue access, and setup timing for your location.'],
        ['We Plan the Design', 'We prepare the balloon colours, size, structure, and setup plan based on your space.'],
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Which areas does Happy Day Toronto serve?', 'Happy Day Toronto provides balloon decorations in Toronto, North York, Vaughan, Richmond Hill, King City, Kleinburg, and Woodbridge. If your event is in another nearby GTA community, send us the address and date to check availability.'],
        ['How do I know which area page covers my address?', 'Check the neighbourhood list on this page. For example, Maple, Concord, and Thornhill are covered on the Vaughan page, and Nobleton and Schomberg on the King City page. If your neighbourhood is not listed, send us the address and we will confirm.'],
        ['Are all services available in every area?', 'Yes. Balloon arches, garlands, backdrops, ceiling decor, marquee number rentals, and decor for every occasion are available across all of our service areas.'],
        ['Do you deliver and install at my venue?', 'Yes. We deliver and install balloon decor at homes, venues, and businesses across our service areas. Send your event address and date so we can confirm availability and setup details.'],
        ['Is travel included in the quote?', 'Delivery is not part of the starting prices: it is priced by the distance to your venue and listed in your quote, so you know the full cost before booking. Installation is included, and we take everything down after the party.'],
        ['Can you decorate several locations on the same day?', 'Often, yes — for example a ceremony and a reception, or several office locations. It depends on the distance between venues and the setup windows, so share all addresses and times when you ask for a quote.'],
        ['Do you decorate outside these areas?', 'Sometimes. Availability outside our main service areas depends on the date, the size of the setup, and travel time. Contact us with your event details and we will let you know.'],
    ],
    'cta_title' => 'Check Availability for Your Area',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, address or venue, colours, and the kind of setup you have in mind.',
        'We will confirm availability for your location and help you plan the next step.',
    ],
    'cta_button' => 'Check Availability',
];
