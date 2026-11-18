<?php
if (!defined('ABSPATH')) exit;

$link = function ($path, $label) {
    return '<a href="' . esc_url(hd_local_url($path)) . '">' . esc_html($label) . '</a>';
};
$year = hd_upcoming_new_year();

return [
    'seo' => [
        'title' => 'New Year’s Eve Balloon Decorations Toronto ' . $year . ' | Happy Day Toronto',
    ],
    'title' => 'New Year’s Eve Balloon Decorations in Toronto & the GTA',
    'intro' => [
        'Balloon decor for New Year’s Eve ' . $year . ': countdown photo walls, ceiling balloons, ' . $year . ' number displays, front door garlands and full party setups. We design it, bring it and install it at your home, restaurant, office or venue in Toronto, Vaughan, Richmond Hill and across the GTA.',
        'December 31 is one of the busiest days of our year, and every setup has to be ready before the first guest arrives. Tell us your date, address and colours and we will tell you what fits your space and budget.',
    ],
    'hero_button' => 'Plan My New Year’s Decor',
    'hero_alt' => 'New Year’s Eve balloon decoration in Toronto',
    'page_class' => 'hd-holiday hd-ny',
    'sections' => [
        [
            'title' => 'Balloon Decor That Is Ready Before Midnight',
            'placeholder' => true,
            'paragraphs' => [
                'Most New Year’s Eve balloons in Toronto are sold as bouquets that you pick up or get delivered and then arrange yourself. We do the other part: we look at the room, plan where the decor goes, and install it on site, so you are not standing on a chair at 8 pm taping balloons to the wall.',
                'A typical New Year’s setup is built around one place where everyone takes photos at midnight, plus a few details that carry the look through the room: balloons on the ceiling, a garland over the bar or fireplace, the year in big numbers, and something at the front door so guests know they are at the right house.',
                'You can book one piece, like a ' . $link('services/balloon-arch-garland', 'balloon garland') . ' or a ' . $link('services/backdrop-rental', 'backdrop') . ', or the whole room. We will suggest what is worth adding and what you can skip.',
            ],
        ],
        [
            'title' => 'New Year’s Eve Setups We Build Most',
            'class' => 'ny-bg ny-bg-champagne',
            'paragraphs' => [
                'Each of these can be booked on its own or combined. The size, colours and details are adjusted to your room.',
            ],
            'cards_style' => 'tickets',
            'cards' => [
                [
                    'icon' => 'panorama',
                    'title' => 'Countdown photo wall',
                    'text' => 'A backdrop with a balloon garland and the year ' . $year . ' in large numbers. This is where the midnight photos happen, so we place it where there is light and room to stand.',
                    'meta' => 'Best for: house parties, restaurants, venues',
                ],
                [
                    'icon' => 'arrow-up',
                    'title' => 'Ceiling balloons',
                    'text' => 'Helium balloons with ribbons covering the ceiling of the main room. Gold, silver, black and clear confetti balloons are the usual mix. More on this on our ' . $link('services/balloon-ceiling-decor', 'balloon ceiling decor') . ' page.',
                    'meta' => 'Best for: living rooms, party rooms, small venues',
                ],
                [
                    'icon' => 'sparkles',
                    'title' => 'Midnight balloon drop',
                    'text' => 'Balloons held in a net above the dance floor and released at midnight. It needs a ceiling anchor point, so we check the venue first.',
                    'meta' => 'Best for: venues, restaurants, large homes',
                ],
                [
                    'icon' => 'gift',
                    'title' => 'Front door and porch garland',
                    'text' => 'A garland around the entrance so the party starts at the door. In winter we build it to handle the cold; see the porch section below.',
                    'meta' => 'Best for: houses and townhouses',
                ],
                [
                    'icon' => 'wand-magic-sparkles',
                    'title' => 'Bar, fireplace and table decor',
                    'text' => 'A champagne-tone garland along the bar or mantel, small arrangements on tables, balloons tied to chairs. Good for adding the theme without filling the room.',
                    'meta' => 'Best for: dinners and smaller gatherings',
                ],
                [
                    'icon' => 'file-contract',
                    'title' => 'Restaurant and office countdown',
                    'text' => 'Entrance arch, a branded photo wall, decor for the stage or DJ area. Installed before opening hours or before the event starts.',
                    'meta' => 'Best for: restaurants, offices, event halls',
                ],
            ],
        ],
        [
            'title' => 'Decorating Your Home for New Year’s',
            'placeholder' => true,
            'paragraphs' => [
                'Most New Year’s parties in the GTA happen at home, and a house is a different job from a banquet hall. Rooms are smaller, ceilings are lower, there are stairs, kids and pets. We plan the decor so it looks full in photos but still leaves space to walk, sit and dance.',
                'If you have young kids who will not last until midnight, a lot of families do an early countdown at 7 or 8 pm. We can set up a smaller photo corner for that, with brighter colours and a balloon drop the kids can actually reach.',
            ],
            'lead' => 'Places in a house we usually decorate:',
            'list' => [
                'Living room ceiling',
                'Fireplace and mantel',
                'Staircase railing',
                'Wall behind the dining table',
                'Bar cart or kitchen island',
                'Front door and porch',
                'Basement party room',
                'Kids’ countdown corner',
            ],
        ],
        [
            'title' => 'Front Door and Porch Decor in Winter',
            'class' => 'ny-bg ny-bg-ice',
            'paragraphs' => [
                'Outdoor balloon decor in a Toronto winter works, but not the same way as in summer. Helium shrinks in the cold, so helium balloons outside lose lift and start to sag. Latex also gets stiff in frost and wind. That is why we build outdoor decor differently from what goes inside.',
            ],
            'zones' => [
                ['label' => 'Inside the house', 'degrees' => '+21°', 'temp' => 'Warm', 'use' => 'Helium ceiling balloons, garlands, backdrops, numbers', 'note' => 'Helium balloons are filled on the day so they are still up at midnight.'],
                ['label' => 'Covered porch', 'degrees' => '−5°', 'temp' => 'Cold', 'use' => 'Air-filled garland on a frame, foil accents', 'note' => 'Air-filled garlands do not depend on helium, so the cold does not make them sink.'],
                ['label' => 'Open driveway', 'degrees' => '−8°', 'temp' => 'Cold and windy', 'use' => 'Air-filled garland, foil numbers', 'note' => 'Wind and snow are the risk. We secure everything and tell you honestly if the spot is too exposed.'],
            ],
            'note' => 'Temperatures are typical for a New Year’s Eve night in Toronto.',
        ],
        [
            'title' => $year . ' Numbers: Three Ways to Show the Year',
            'class' => 'ny-bg ny-bg-navy',
            'paragraphs' => [
                'The year in big numbers is the one detail almost every New Year’s photo has. There are three ways to do it, and they look and cost quite different.',
            ],
            'showcase' => [
                'text' => (string) $year,
                'items' => [
                    ['style' => 'foil', 'title' => 'Foil number balloons', 'looks' => 'Shiny gold, silver or rose gold numbers, floating or on a stand.', 'best' => 'On a photo wall or above a table'],
                    ['style' => 'marquee', 'title' => 'Light-up marquee numbers', 'looks' => '4-ft numbers with warm bulbs. They glow when the lights go down at midnight.', 'best' => 'On the floor in front of a backdrop. See ' . $link('services/number-rental', 'marquee number rental') . '.'],
                    ['style' => 'garland', 'title' => 'Number garland', 'looks' => 'The year built into the balloon garland itself, in your colours.', 'best' => 'As the centre of a countdown wall'],
                ],
            ],
        ],
        [
            'title' => 'Colours for New Year’s Eve',
            'placeholder' => true,
            'paragraphs' => [
                'Black and gold is the classic, but it is not the only option, and it can look heavy in a small room with dark walls. Tell us what your space looks like and we will suggest a palette that photographs well in it.',
            ],
            'lead' => 'Palettes that feel like New Year’s Eve:',
            'palettes' => [
                ['name' => 'Black, gold and clear confetti', 'note' => 'Midnight glamour', 'colors' => ['#1d1f2b', '#d4af6a', 'clear']],
                ['name' => 'Champagne, ivory and gold', 'note' => 'The toast at midnight', 'colors' => ['#e6cc9a', '#fbf4e4', '#c99a3e']],
                ['name' => 'Silver, white and chrome', 'note' => 'Sparkle and disco ball', 'colors' => ['#c3c9d4', '#ffffff', '#8e98ab']],
                ['name' => 'Midnight navy and gold', 'note' => 'Night sky and stars', 'colors' => ['#1c2a55', '#d4af6a', '#2f4a8c']],
                ['name' => 'Icy blue, silver and white', 'note' => 'Snow and frost outside', 'colors' => ['#bfe3f5', '#ffffff', '#c3c9d4']],
                ['name' => 'All gold with mixed finishes', 'note' => 'Glitter and confetti', 'colors' => ['#f2d58f', '#c99a3e', '#a87b2c']],
                ['name' => 'Bright fireworks colours', 'note' => 'For kids’ countdowns', 'colors' => ['#f17ca4', '#7cc4e8', '#f5c542']],
                ['name' => 'Your brand colours (for businesses)', 'note' => 'Office and restaurant parties', 'colors' => ['outline', 'outline', 'outline']],
            ],
        ],
        [
            'title' => 'New Year’s Eve at Restaurants, Offices and Venues',
            'class' => 'ny-bg ny-bg-champagne ny-reverse',
            'placeholder' => true,
            'paragraphs' => [
                'For restaurants and venues, New Year’s Eve decor has to be installed around your schedule: before lunch service, between seatings, or the morning of the event. We agree on the time slot in advance and arrive on time, because on December 31 nobody can wait.',
                'For offices and companies we also do year-end parties in December, with logo colours, a branded photo wall and decor for the stage or reception. See our ' . $link('services/corporate-event-balloons', 'corporate event balloons') . ' and ' . $link('services/christmas-balloons', 'Christmas balloon decor') . ' pages for holiday party ideas.',
            ],
            'menu' => [
                'title' => 'New Year’s Eve Menu',
                'subtitle' => 'What we install for businesses',
                'items' => [
                    ['Entrance arches', 'front door or lobby'],
                    ['Branded photo walls', 'where guests take photos'],
                    ['Stage and DJ area decor', 'by the dance floor'],
                    ['Bar and buffet garlands', 'bar and food stations'],
                    ['Ceiling balloons over the dance floor', 'main room'],
                    ['Midnight balloon drops', 'at 12:00'],
                ],
            ],
        ],
        [
            'title' => 'New Year’s Eve Balloon Decor Prices',
            'class' => 'ny-bg ny-bg-rose',
            'paragraphs' => [
                'Starting prices in CAD. ' . hd_price_terms(),
                hd_price_factors() . ' On December 31 the install time slot also matters, so send your details early and we will confirm the exact price before you book.',
            ],
            'price_table' => ['garland', 'backdrop', 'numbers', 'latex', 'foil', 'letters'],
            'combos' => [
                'title' => 'New Year’s Eve Combinations and What They Cost',
                'intro' => 'Most New Year’s bookings combine a few of the items above. Here is what typical combinations come to at our starting prices.',
                'note' => 'Estimates from our starting prices in CAD, before delivery. Installation and takedown are included for garlands and backdrops. Your exact price is confirmed in the quote.',
                'items' => [
                    ['title' => 'Front Door Garland', 'for' => 'Houses and townhouses', 'items' => [['garland', 1, 'Garland around the front door']]],
                    ['title' => 'Living Room Ceiling', 'for' => 'Small house parties', 'items' => [['latex', 50, 'Helium ceiling balloons'], ['foil', 10, 'Foil stars and accents']]],
                    ['title' => 'Home Countdown Party', 'for' => 'House parties up to ~30 guests', 'items' => [['garland', 1, 'Garland over the fireplace'], ['latex', 40, 'Helium ceiling balloons'], ['foil', 10, 'Foil accents']]],
                    ['title' => 'Countdown Photo Wall', 'for' => 'The midnight photo spot', 'items' => [['backdrop', 1, 'Backdrop'], ['garland', 1, 'Balloon garland'], ['numbers', 4, '4-ft marquee numbers ' . $year]]],
                    ['title' => 'Restaurant or Venue', 'for' => 'Restaurants, halls, offices', 'items' => [['garland', 1, 'Entrance garland'], ['backdrop', 1, 'Photo backdrop'], ['garland', 1, 'Backdrop garland'], ['numbers', 4, '4-ft marquee numbers ' . $year]]],
                    ['title' => 'Full New Year’s Party', 'for' => 'Big house parties and venues', 'items' => [['backdrop', 1, 'Backdrop'], ['garland', 1, 'Balloon garland'], ['numbers', 4, '4-ft marquee numbers ' . $year], ['latex', 100, 'Helium ceiling balloons']]],
                ],
            ],
        ],
        [
            'title' => 'Booking for December 31',
            'class' => 'ny-booking',
            'calendar' => [
                'date' => ($year - 1) . '-12-31',
                'text' => 'Install slots on New Year’s Eve are limited. Ask now, even if your plans are not final yet.',
                'button' => 'Check My Date',
            ],
            'paragraphs' => [
                'December 31 install slots run out first, usually well before Christmas. Weekend dates around New Year’s fill up too. The earlier you send your request, the more choice you have on the install time.',
            ],
            'lead' => 'To get a quote quickly, send us:',
            'list' => [
                'Address and type of place (house, condo, restaurant, venue)',
                'When guests arrive',
                'Which room or area to decorate',
                'Colours or an inspiration photo',
                'Rough budget',
                'Photo of the space, if you have one',
            ],
            'note' => 'We reply the same day. Condo buildings often need an elevator booking for deliveries; let us know if yours does.',
        ],
        [
            'title' => 'New Year’s Balloon Decor in Toronto & GTA',
            'class' => 'service-gta-section ny-bg ny-bg-ice',
            'paragraphs' => [
                'We deliver, install and take down New Year’s Eve balloon decorations in Toronto, Vaughan, Woodbridge, Kleinburg, Maple, Richmond Hill, Thornhill, North York, King City and nearby areas of the GTA.',
                'We decorate houses and condos for New Year’s parties, family countdowns at home, restaurants and bars, banquet halls, offices and event venues. We bring everything with us, set it up on site before your guests arrive and, if you need it, come back after the party to take the decorations down and clear them away.',
                'We are based in the north of the city, so York Region and North York are the easiest to fit in on a busy December 31.',
                'Not sure if we come to your area? Send the address with your request and we will confirm.',
            ],
            'included' => [
                ['icon' => 'gift', 'title' => 'We bring it', 'text' => 'Delivery to your home, restaurant or venue. Delivery is priced by distance.'],
                ['icon' => 'wand-magic-sparkles', 'title' => 'We set it up', 'text' => 'Installation on site, finished before your guests arrive.'],
                ['icon' => 'arrow-rotate-left', 'title' => 'We take it down', 'text' => 'If you need it, we come back after the party and take everything away.'],
            ],
            'route' => [
                'title' => 'New Year’s Eve Route',
                'subtitle' => 'Where we deliver, set up and take down',
                'stops' => [
                    ['name' => 'Toronto', 'path' => '', 'text' => 'Homes, condos, restaurants'],
                    ['name' => 'North York', 'path' => 'service-areas/north-york', 'text' => 'House parties and venues'],
                    ['name' => 'Thornhill', 'path' => null, 'text' => 'House parties and dinners'],
                    ['name' => 'Richmond Hill', 'path' => 'service-areas/richmond-hill', 'text' => 'Homes, restaurants, venues'],
                    ['name' => 'Vaughan', 'path' => 'service-areas/vaughan', 'text' => 'Homes, banquet halls, offices'],
                    ['name' => 'Maple', 'path' => null, 'text' => 'House parties'],
                    ['name' => 'Woodbridge', 'path' => 'service-areas/woodbridge', 'text' => 'Family countdowns at home'],
                    ['name' => 'Kleinburg', 'path' => 'service-areas/kleinburg', 'text' => 'Homes and private events'],
                    ['name' => 'King City', 'path' => 'service-areas/king-city', 'text' => 'Homes and estates'],
                ],
                'all' => 'All service areas',
            ],
        ],
    ],
    'process_title' => 'How New Year’s Decor Booking Works',
    'process' => [
        ['Send Your Details', 'Address, time guests arrive, the room you want decorated, colours and a photo of the space if you have one.'],
        ['Get a Plan and Price', 'We suggest the setup that fits your space and budget and confirm the price and install time.'],
        ['We Install on Site', 'We arrive in the agreed time slot, set everything up and check it is ready before your guests come.'],
        ['We Take It Down', 'We agree on the takedown time when you book and take everything away after the party.'],
    ],
    'faq' => [
        ['How much does New Year’s Eve balloon decor cost in Toronto?', 'At Happy Day Toronto, a New Year’s Eve balloon garland starts ' . lcfirst(hd_price('garland')) . ' and a backdrop starts ' . lcfirst(hd_price('backdrop')) . ' (CAD). Single latex balloons are ' . hd_price('latex') . ', foil balloons ' . hd_price('foil') . ', 4-ft light-up marquee numbers ' . lcfirst(hd_price('numbers')) . ' and marquee letters ' . hd_price('letters') . '. Installation is included in garland and backdrop prices; delivery is priced by distance. The final quote depends on the size of the setup, whether a backdrop is added, the distance to your address and the install time on December 31.'],
        ['What is included in the price?', 'Garland and backdrop prices include the design, the balloons, delivery-day installation on site and takedown after the party. Delivery is not included and is priced by distance from our base in the north of Toronto. Single balloons and marquee numbers are priced per item.'],
        ['Do you install New Year’s Eve decor on December 31?', 'Yes. Happy Day Toronto installs New Year’s Eve balloon decor on December 31 and on the days before it, at homes, condos, restaurants, banquet halls, offices and event venues. Every setup is finished before your guests arrive. Install slots on December 31 are limited, so the time slot is confirmed when you book.'],
        ['How early should I book New Year’s Eve balloon decor?', 'Book in November or early December. December 31 install slots usually fill up before Christmas, and booking early gives you more choice of install time. To get a quote, send your address, the time guests arrive, the room to decorate, your colours and a photo of the space.'],
        ['Can you decorate my house for a New Year’s party?', 'Yes. Most of our New Year’s setups are in private houses and condos. We decorate living room ceilings, fireplaces and mantels, staircase railings, the wall behind the dining table, bar carts and kitchen islands, basement party rooms and front doors. For families with young kids we also set up a smaller early-countdown corner for 7 or 8 pm.'],
        ['Do you take the decorations down after the party?', 'Yes, if you need it. We agree on the takedown time when you book, come back after the party and remove all balloons, frames and decor, so you do not have to clear anything on New Year’s Day.'],
        ['Will helium balloons stay up until midnight?', 'Yes. Helium balloons are filled on the day of the party, so they are still floating at midnight. Ceiling balloons usually stay up through New Year’s Day as well.'],
        ['Can you put balloons outside in winter?', 'Yes, with the right materials. Helium shrinks in the cold, so helium balloons outside lose lift and sag. For front doors and porches we use air-filled garlands on a frame and foil accents, which do not depend on helium. On an open driveway or a very exposed porch, wind and snow are the risk; we secure everything and tell you if the spot is too exposed.'],
        ['Do you do ' . $year . ' number balloons?', 'Yes, in three ways: gold, silver or rose gold foil number balloons, 4-ft light-up marquee numbers that glow when the lights go down (' . lcfirst(hd_price('numbers')) . '), or the year ' . $year . ' built into a balloon garland as the centre of a countdown photo wall.'],
        ['Do you do balloon drops at midnight?', 'Yes. Balloons are held in a net above the dance floor and released at midnight. A balloon drop needs an anchor point in the ceiling, so we check the room and the venue rules before we confirm it.'],
        ['Which colours work for New Year’s Eve?', 'The most common New Year’s palettes are black, gold and clear confetti balloons; champagne, ivory and gold; silver, white and chrome; midnight navy and gold; icy blue, silver and white; and all gold with mixed finishes. Black and gold can look heavy in a small room with dark walls, so we suggest a palette based on a photo of your space.'],
        ['Which areas do you serve on New Year’s Eve?', 'Happy Day Toronto delivers, installs and takes down New Year’s Eve balloon decor in Toronto, North York, Thornhill, Richmond Hill, Vaughan, Maple, Woodbridge, Kleinburg, King City and nearby areas of the GTA. We are based in the north of the city, so York Region and North York are the easiest to fit in on December 31. Delivery is priced by distance.'],
        ['Do you decorate homes and venues in Vaughan, Woodbridge and Maple for New Year’s?', 'Yes. We deliver and install New Year’s Eve balloon decor in Vaughan, Woodbridge and Maple for house parties, family countdowns at home, banquet halls, restaurants and offices, and take it down after the party if you need it.'],
        ['Do you decorate in Richmond Hill and Thornhill for New Year’s Eve?', 'Yes. Richmond Hill and Thornhill are close to our base, so they are among the easiest areas to schedule on December 31. We decorate houses, condos, restaurants and venues there and can come back for takedown.'],
        ['Do you deliver New Year’s balloon decor to North York and Toronto?', 'Yes. We install New Year’s Eve decor in North York and across Toronto, including condos. Many condo buildings need an elevator booking for deliveries, so tell us when you book if yours does.'],
        ['Do you serve Kleinburg and King City on New Year’s Eve?', 'Yes. We decorate homes, estates and private events in Kleinburg and King City. Because these areas are further out, the delivery cost and the install time slot are confirmed with your quote.'],
    ],
    'cta_title' => 'Plan Your New Year’s Eve Decor',
    'event_type' => 'New Year’s Eve',
    'cta_text' => [
        'Tell us where the party is, when guests arrive and what you have in mind. We will reply the same day with ideas and a price.',
        'December 31 slots are limited, so it is worth asking early even if the details are not final yet.',
    ],
    'cta_button' => 'Get a New Year’s Decor Quote',
];
