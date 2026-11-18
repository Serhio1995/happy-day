<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'seo' => [
        'title' => 'Balloon Decorations Kleinburg, Vaughan | Weddings & Estates',
        'description' => 'Elegant balloon decorations in Kleinburg for weddings, showers, birthdays and private events at homes, estates and village venues. Request a quote.',
        'focus' => 'balloon decorations Kleinburg',
    ],
    'area' => [
        'type' => 'Place',
        'name' => 'Kleinburg',
        'within' => [['City', 'Vaughan'], ['AdministrativeArea', 'York Region'], ['State', 'Ontario']],
    ],
    'map_focus' => 'Kleinburg',
    'title' => 'Balloon Decorations in Kleinburg',
    'intro' => [
        'Happy Day Toronto creates elegant balloon decorations in Kleinburg for private homes, estate properties, restaurants, and event venues — from the historic village core on Islington Avenue to the newer neighbourhoods along Major Mackenzie Drive and Nashville Road.',
        'We design refined balloon arches, garlands, floral balloon installations, and photo backdrops for weddings, showers, milestone birthdays, and family celebrations.',
    ],
    'hero_asset' => 'assets/images/locations/kleinburg-hero.webp',
    'photo_ids' => [105, 120, 174, 150, 165, 111, 119],
    'hero_button' => 'Plan My Kleinburg Setup',
    'hero_alt' => 'Blush and mauve balloon garland in a garden courtyard — illustrative cover',
    'page_class' => 'hd-city',
    'sections' => [
        [
            'title' => 'Refined Balloon Decor for Kleinburg Celebrations',
            'eyebrow' => 'Around the village',
            'class' => 'city-bg city-bg-cream',
            'no_photo' => true,
            'paragraphs' => [
                'Kleinburg is a historic village in the City of Vaughan, set above the Humber River valley and known for its heritage main street, the McMichael Canadian Art Collection, and its green, scenic surroundings. Many hosts here want decor that feels polished and natural rather than loud.',
            ],
            'cards_style' => 'tickets',
            'cards' => [
                [
                    'icon' => 'heart',
                    'title' => 'Village core',
                    'text' => 'Smaller venues along Islington Avenue, so we keep designs in proportion and plan parking and loading carefully.',
                    'meta' => 'Best for: restaurant dinners, showers, anniversaries',
                ],
                [
                    'icon' => 'panorama',
                    'title' => 'Nashville Road',
                    'text' => 'Quiet streets and larger lots west of the village, good for garden parties and backyard arches.',
                    'meta' => 'Best for: garden parties, kids’ birthdays, engagements',
                ],
                [
                    'icon' => 'sparkles',
                    'title' => 'Major Mackenzie & Highway 427',
                    'text' => 'Newer estate-style homes with open layouts and high ceilings, ideal for staircase garlands and statement backdrops.',
                    'meta' => 'Best for: milestone birthdays, baptisms, bridal showers',
                ],
                [
                    'icon' => 'gift',
                    'title' => 'Humber River ravine',
                    'text' => 'Homes with beautiful natural backdrops that suit organic garlands with greenery and flowers.',
                    'meta' => 'Best for: at-home weddings, proposals, anniversaries',
                ],
            ],
            'note' => 'Kleinburg is part of Vaughan. See also ' . $link('service-areas/vaughan', 'balloon decorations in Vaughan') . '.',
        ],
        [
            'title' => 'Celebrations We Decorate in Kleinburg',
            'class' => 'service-age-section',
            'placeholder' => true,
            'paragraphs' => [
                'Kleinburg is a popular place for weddings, family milestones, and at-home entertaining. Hosts often want decor that feels special but still suits the calm, elegant character of the village.',
                'Of course, if you want bold colours and a playful theme for a kids’ party, we design that too.',
            ],
            'lead' => 'Popular Kleinburg events include:',
            'list' => [
                'Wedding receptions and at-home weddings',
                'Engagement parties and proposals',
                'Bridal showers and baby showers',
                'Milestone birthdays',
                'Kids’ birthdays and first birthdays',
                'Baptisms and christenings',
                'Anniversary celebrations',
                'Garden parties and summer events',
                'Holiday gatherings',
            ],
        ],
        [
            'title' => 'Popular Balloon Services in Kleinburg',
            'class' => 'service-options-section',
            'paragraphs' => [
                'Every service below is available in Kleinburg. Each link opens a detailed page with styles, ideas, and answers to common questions.',
            ],
            'lead' => 'Choose a service:',
            'list' => [
                $link('services/balloon-and-flower-decoration', 'Balloon and flower decoration'),
                $link('services/wedding-balloons', 'Wedding balloon decor'),
                $link('services/engagement-balloons', 'Engagement balloons'),
                $link('services/bridal-shower-balloons', 'Bridal shower balloons'),
                $link('services/baby-shower-balloons', 'Baby shower balloons'),
                $link('services/balloon-arch-garland', 'Balloon arches and garlands'),
                $link('services/backdrop-rental', 'Backdrop rental'),
                $link('services/baptism-balloons', 'Baptism balloons'),
                $link('services/balloons-for-birthdays', 'Birthday balloon decorations'),
                $link('services/number-rental', 'Marquee number rental'),
            ],
        ],
        [
            'title' => 'Estate Homes, Gardens & Village Venues',
            'eyebrow' => 'Where the party happens',
            'class' => 'city-bg city-bg-sky',
            'no_photo' => true,
            'paragraphs' => [
                'Most Kleinburg celebrations happen in one of three kinds of space. This is what we check and what usually works in each.',
            ],
            'zones' => [
                [
                    'label' => 'Estate home',
                    'temp' => 'Foyers and open-concept rooms',
                    'use' => 'Staircase garland, double-height entrance arch, patio garland',
                    'note' => 'A grand staircase, a double-height entrance or a long patio is the best place for the main garland.',
                ],
                [
                    'label' => 'Village venue',
                    'temp' => 'Islington Avenue',
                    'use' => 'Proportioned backdrop, table garlands, entrance piece',
                    'note' => 'We coordinate the setup time with the venue and keep the design in proportion, so it frames the room instead of crowding it.',
                ],
                [
                    'label' => 'Garden',
                    'temp' => 'Backyards and patios',
                    'use' => 'Organic garland with greenery, arch in a shaded spot',
                    'note' => 'Sun, wind and heat affect balloons outside, so we choose a covered or shaded spot and anchor everything securely.',
                ],
            ],
        ],
        [
            'title' => 'Balloon Arches, Garlands & Floral Balloon Decor in Kleinburg',
            'eyebrow' => 'Colours that photograph well',
            'class' => 'service-room-section',
            'paragraphs' => [
                'The most requested look in Kleinburg is soft and organic: garlands in several balloon sizes, mixed with greenery, pampas, or seasonal flowers.',
                'Chrome and pearl finishes add a subtle shine for weddings and anniversaries. Custom acrylic or wooden signs with names, dates, or a monogram make the setup feel personal.',
            ],
            'lead' => 'Palettes Kleinburg hosts ask for most:',
            'palettes' => [
                [
                    'name' => 'Ivory and sage',
                    'note' => 'Garden weddings',
                    'colors' => ['#f6efe1', '#b7c4a8', '#ffffff'],
                ],
                [
                    'name' => 'Blush and champagne',
                    'note' => 'Showers and engagements',
                    'colors' => ['#f4c6cf', '#e6cc9a', '#ffffff'],
                ],
                [
                    'name' => 'White and gold',
                    'note' => 'Receptions',
                    'colors' => ['#ffffff', '#d4af6a', '#f3ead7'],
                ],
                [
                    'name' => 'Chrome and pearl',
                    'note' => 'Weddings and anniversaries',
                    'colors' => ['#d9dde4', '#f4efe6', '#b9c0cc'],
                ],
                [
                    'name' => 'Terracotta, rust and cream',
                    'note' => 'Autumn events',
                    'colors' => ['#c9704d', '#a4492b', '#f6efe1'],
                ],
                [
                    'name' => 'White, silver and deep green',
                    'note' => 'Winter holidays',
                    'colors' => ['#ffffff', '#c3c9d4', '#2f5a43'],
                ],
            ],
        ],
        [
            'title' => 'Popular Kleinburg Setups and What They Cost',
            'eyebrow' => 'Real starting prices',
            'class' => 'city-bg city-bg-blush',
            'no_photo' => true,
            'paragraphs' => [hd_price_summary()],
            'combos' => [
                'note' => 'Estimates from our starting prices in CAD, before delivery. Installation and takedown are included for garlands and backdrops. Your exact price is confirmed in the quote.',
                'items' => [
                    [
                        'title' => 'Bridal Shower Backdrop',
                        'for' => 'Homes and village venues',
                        'items' => [
                            ['backdrop', 1, 'Backdrop'],
                            ['garland', 1, 'Floral-style garland'],
                        ],
                    ],
                    [
                        'title' => 'Staircase & Foyer',
                        'for' => 'Estate homes',
                        'items' => [
                            ['garland', 1, 'Staircase garland'],
                            ['garland', 1, 'Entrance garland'],
                        ],
                    ],
                    [
                        'title' => 'Baptism Lunch',
                        'for' => 'After the church service',
                        'items' => [
                            ['backdrop', 1, 'Backdrop'],
                            ['garland', 1, 'Backdrop garland'],
                            ['latex', 20, 'Helium balloons'],
                        ],
                    ],
                    [
                        'title' => 'At-Home Wedding',
                        'for' => 'Gardens and great rooms',
                        'items' => [
                            ['garland', 1, 'Ceremony arch garland'],
                            ['backdrop', 1, 'Sweetheart table backdrop'],
                            ['garland', 1, 'Backdrop garland'],
                        ],
                    ],
                ],
            ],
        ],
        [
            'title' => 'Planning a Kleinburg Event',
            'eyebrow' => 'When to book',
            'class' => 'service-backdrops-section',
            'paragraphs' => [
                'For weddings and floral designs we recommend booking three to five weeks ahead. Neutral and floral palettes often use specialty balloon finishes, so it helps to choose colours early.',
                'Some village venues have rules about helium, wall attachments, or setup times. If you already have a florist, we can match their flowers so the balloons and florals look like one design.',
            ],
            'menu' => [
                'title' => 'Kleinburg’s Busy Seasons',
                'subtitle' => 'When install slots fill up first',
                'items' => [
                    ['Weddings and summer garden parties', 'June to August'],
                    ['Binder Twine Festival: plan parking', 'September'],
                    ['Warm autumn palettes', 'October to November'],
                    ['White, silver and green holiday decor', 'December'],
                ],
            ],
            'lead' => 'Helpful details to send with your request:',
            'list' => [
                'Event date and start time',
                'Address or venue name',
                'Colour palette and inspiration',
                'Photos of the space',
                'Florist details, if any',
                'Parking or loading details',
            ],
        ],
        [
            'title' => 'Kleinburg and Nearby Areas We Serve',
            'class' => 'service-gta-section',
            'paragraphs' => [
                'Kleinburg is part of ' . $link('service-areas/vaughan', 'Vaughan') . ', and we also decorate events in nearby ' . $link('service-areas/woodbridge', 'Woodbridge') . ', ' . $link('service-areas/king-city', 'King City') . ', and ' . $link('service-areas/richmond-hill', 'Richmond Hill') . '.',
                'Send us your event address and date, and we will confirm availability for your location.',
            ],
        ],
    ],
    'process_title' => 'How Booking Works in Kleinburg',
    'process' => [
        ['Share Your Event Details', 'Tell us your date, the Kleinburg address or venue, event type, colours, and inspiration photos.'],
        ['Choose the Style', 'We help you select balloon finishes, flowers, backdrops, and signage that match your palette.'],
        ['We Plan the Design', 'We prepare the size, structure, placement, and setup timing based on your space.'],
        ['We Install Before Guests Arrive', 'Delivery and installation are included in the plan: our team arrives at your Kleinburg home, estate or venue at the agreed time and finishes the decor so the space is ready for photos.'],
    ],
    'faq' => [
        ['Do you provide balloon decorations in Kleinburg?', 'Yes. Happy Day Toronto provides custom balloon decorations in Kleinburg for private homes, estate properties, restaurants, and event venues, including the village core, Nashville, and the newer neighbourhoods around Major Mackenzie Drive.'],
        ['Can you create elegant balloon decor for a Kleinburg wedding?', 'Yes. We design wedding balloon decor in soft, refined palettes, often combined with flowers, greenery, fabric, and signage. It can be used for entrances, sweetheart tables, photo areas, and dessert tables.'],
        ['Can you combine balloons with flowers?', 'Yes. Balloon and flower decoration is one of the most popular styles in Kleinburg. We can use fresh or faux flowers and greenery to create a softer, more natural look, and we can match the work of your florist.'],
        ['Can you decorate a staircase or foyer?', 'Yes. Staircase garlands and foyer installations are popular in Kleinburg estate homes. Send us photos of the railing and the space so we can plan the size and attachment method.'],
        ['Do you decorate small venues in the village?', 'Yes. For smaller restaurants and venues on Islington Avenue, we design compact, well-proportioned decor and coordinate setup times and loading with the venue.'],
        ['Do you decorate outdoor garden parties?', 'Yes. We plan outdoor decor with secure anchoring and recommend a shaded or covered spot for the main feature, because sun, wind, and heat affect balloons outside.'],
        ['How much do balloon decorations cost in Kleinburg?', hd_price_summary() . ' ' . hd_price_factors() . ' Send your event details and inspiration photos for an accurate quote.'],
        ['Is Kleinburg part of Vaughan?', 'Yes. Kleinburg is a historic village within the City of Vaughan in York Region. We serve Kleinburg as well as the rest of Vaughan, including Woodbridge, Maple, and Concord.'],
        ['How far in advance should I book?', 'For weddings and floral designs, three to five weeks ahead is best. Smaller setups can often be booked two to three weeks ahead, depending on the season.'],
        ['Can you remove the decor after the event?', 'Removal can be arranged when the venue requires same-day teardown or when rental items are included. Please mention removal needs when you ask for a quote.'],
    ],
    'cta_title' => 'Plan Your Kleinburg Balloon Decor',
    'event_type' => '',
    'cta_text' => [
        'Tell us your event date, Kleinburg address or venue, colours, and the style you have in mind.',
        'We will check availability and help you plan elegant balloon decor for your celebration.',
    ],
    'cta_button' => 'Get a Kleinburg Quote',
];
