<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};

return [
    'seo' => [
        'title' => 'Balloon Decorations Kleinburg | Elegant Event Balloon Decor',
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
    'sections' => [
        [
            'title' => 'Refined Balloon Decor for Kleinburg Celebrations',
            'placeholder' => true,
            'paragraphs' => [
                'Kleinburg is a historic village in the City of Vaughan, set above the Humber River valley and known for its heritage main street, the McMichael Canadian Art Collection, and its green, scenic surroundings. Many hosts here want decor that feels polished and natural rather than loud.',
                'In the village core along Islington Avenue, venues are often smaller, so we keep designs in proportion and plan parking and loading carefully. West of the village, Nashville Road has quiet streets and larger lots for garden parties and backyard arches. The newer estate-style homes around Major Mackenzie Drive and Highway 427 have open layouts and high ceilings, ideal for staircase garlands and statement backdrops.',
                'Homes near the Humber River ravine have beautiful natural backdrops that suit organic garlands with greenery and flowers, and the larger rural lots toward King Township leave room for outdoor installations.',
            ],
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
            'class' => 'service-themes-section',
            'placeholder' => true,
            'paragraphs' => [
                'Many Kleinburg celebrations happen at home — in large foyers, open-concept living spaces, and landscaped backyards. A grand staircase, a double-height entrance, or a long patio are great places for a balloon garland or statement arch.',
                'For restaurants and venues in the village, we coordinate the setup time with the venue and keep the design in proportion to the space, so the decor frames the room instead of crowding it.',
                'Outdoor garden events are beautiful in Kleinburg, but balloons outside are affected by sun, wind, and heat. We recommend a covered or shaded spot for the main feature and plan secure anchoring.',
            ],
        ],
        [
            'title' => 'Balloon Styles That Work Well in Kleinburg',
            'class' => 'service-room-section',
            'paragraphs' => [
                'The most requested look in Kleinburg is soft and organic: garlands in several balloon sizes, mixed with greenery, pampas, or seasonal flowers, in palettes like ivory and sage, blush and champagne, or white and gold.',
                'Chrome and pearl finishes add a subtle shine for weddings and anniversaries. Custom acrylic or wooden signs with names, dates, or a monogram make the setup feel personal.',
                'For autumn events, warm tones such as terracotta, rust, and cream suit the colours of the Humber River valley. For winter holidays, we often use white, silver, and deep green with a touch of gold.',
            ],
        ],
        [
            'title' => 'Planning a Kleinburg Event',
            'class' => 'service-backdrops-section',
            'placeholder' => true,
            'paragraphs' => [
                'Wedding season and summer garden parties make June to August the busiest time in Kleinburg, so for weddings and floral designs we recommend booking three to five weeks ahead. In September the village is busy with local events such as the Binder Twine Festival, so plan parking and setup times around them.',
                'Neutral and floral palettes often use specialty balloon finishes, so it helps to choose colours early. Some village venues also have rules about helium, wall attachments, or setup times. If you already have a florist, we can match their flowers so the balloons and florals look like one design.',
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
        ['We Install Before Guests Arrive', 'Our team arrives at the agreed time and finishes the decor so the space is ready for photos.'],
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
