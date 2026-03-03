<?php
// index.php - EventsBox Homepage
$page_title = "Find Australia's Best Events Here!";
$is_transparent_header = true;
include 'inc/header.php';
?>

    <!-- Hero Section -->
    <section class="relative flex flex-col md:block h-screen min-h-[600px] md:h-[95vh] md:min-h-[650px] overflow-hidden bg-white">
        <!-- Hero Background & Overlay (60vh on mobile, full on desktop) -->
        <div class="relative h-[60vh] md:h-full md:absolute md:inset-0 w-full flex items-center justify-center z-0 pt-[80px] md:pt-[250px]">
            <div class="absolute inset-0 z-0 overflow-hidden">
                <img src="assets/img/hero-cover.jpg" alt="Hero Background" class="w-full h-full object-cover md:scale-105 md:animate-[slow-zoom_20s_ease-in-out_infinite_alternate]">
                <div class="absolute inset-0 bg-[#00000040]"></div>
            </div>

            <!-- Title inside image section -->
            <div class="container mx-auto px-6 relative z-10 flex flex-col items-center text-center">
                <h1 class="text-[2.65rem] md:text-5xl lg:text-7xl font-black text-white mb-2 md:mb-10 leading-[1.1] tracking-tight animate-fade-in-up md:whitespace-nowrap px-2" style="animation-delay: 0.1s;">
                    Find Australia's <br class="block md:hidden">Best Events Here!
                </h1>
                <div class="h-1 w-12 bg-[#F0665B] md:hidden animate-fade-in-up mt-2" style="animation-delay: 0.2s;"></div>
            </div>
        </div>

        <!-- Search Bar Section (40vh on mobile, absolute centered on desktop) -->
        <div class="relative h-[40vh] md:h-auto md:absolute md:bottom-[20%] lg:bottom-[15%] md:left-0 w-full flex flex-col justify-center px-5 md:px-0 py-6 md:py-0 z-10 animate-fade-in-up" style="animation-delay: 0.3s;">
            <div class="container mx-auto px-0 md:px-6 flex justify-center w-full">
                <!-- Search Container -->
                <div class="w-full max-w-5xl bg-white md:bg-white md:p-2 md:rounded-[10px] md:shadow-2xl flex flex-col md:flex-row items-center gap-3 md:gap-0 border-none">
                    
                    <div class="w-full md:flex-1 flex items-center px-4 md:px-6 py-3 md:py-4 transition-colors cursor-text group border border-[#e5e7eb] rounded-[5px] md:border-none md:border-r md:border-gray-100 md:rounded-none">
                        <i data-lucide="search" class="hidden md:block w-5 md:w-6 h-5 md:h-6 text-gray-400 group-hover:text-primary transition-colors mr-3"></i>
                        <input type="text" placeholder="Enter name ..." class="w-full focus:outline-none text-[#6b7280] placeholder:text-[#9ca3af] text-[15px] md:text-lg font-medium bg-transparent">
                    </div>
                    
                    <div class="w-full md:flex-1 flex items-center px-4 md:px-6 py-3 md:py-4 transition-colors group cursor-pointer border border-[#e5e7eb] rounded-[5px] md:border-none md:border-r md:border-gray-100 md:rounded-none relative">
                        <i data-lucide="map-pin" class="hidden md:block w-5 md:w-6 h-5 md:h-6 text-gray-400 group-hover:text-primary transition-colors mr-3"></i>
                        <select class="w-full focus:outline-none text-[#9ca3af] bg-transparent appearance-none text-[15px] md:text-lg font-medium cursor-pointer w-[calc(100%-20px)]">
                            <option value="">All Cities</option>
                            <option value="sydney">Sydney, NSW</option>
                            <option value="melbourne">Melbourne, VIC</option>
                            <option value="brisbane">Brisbane, QLD</option>
                            <option value="perth">Perth, WA</option>
                        </select>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-gray-300 absolute right-4 md:hidden pointer-events-none"></i>
                    </div>
                    
                    <div class="w-full md:flex-1 flex items-center px-4 md:px-6 py-3 md:py-4 transition-colors group cursor-pointer border border-[#e5e7eb] rounded-[5px] md:border-none md:rounded-none relative">
                        <i data-lucide="calendar" class="hidden md:block w-5 md:w-6 h-5 md:h-6 text-gray-400 group-hover:text-primary transition-colors mr-3"></i>
                        <select class="w-full focus:outline-none text-[#9ca3af] bg-transparent appearance-none text-[15px] md:text-lg font-medium cursor-pointer w-[calc(100%-20px)]">
                            <option value="">Select Category</option>
                            <option value="today">Today</option>
                            <option value="tomorrow">Tomorrow</option>
                            <option value="weekend">This Weekend</option>
                            <option value="month">This Month</option>
                        </select>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-gray-300 absolute right-4 md:hidden pointer-events-none"></i>
                    </div>

                    <button class="w-full md:w-auto bg-[#F0665B] text-white px-8 md:px-10 py-[14px] md:py-4 md:m-1 rounded-[5px] md:rounded-[10px] text-base md:text-lg font-bold hover:bg-[#e0564b] transition-all flex items-center justify-center gap-2 hover:shadow-[0_0_20px_rgba(255,102,102,0.4)] whitespace-nowrap mt-1 md:mt-0">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Event Carousel Section -->
    <section class="py-12 bg-white overflow-hidden border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl md:text-3xl font-bold">Trending Now</h2>
                <div class="flex gap-2">
                    <button class="swiper-prev-btn size-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-all">
                        <i data-lucide="chevron-left" class="w-6 h-6"></i>
                    </button>
                    <button class="swiper-next-btn size-10 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:border-primary hover:text-primary transition-all">
                        <i data-lucide="chevron-right" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>

            <div class="swiper event-carousel">
                <div class="swiper-wrapper">
                    <?php
                    // Using same horizontal card style as Latest Events
                    $carousel_events = [
                        [
                            'title' => 'Vivid Sydney 2026 - Light, Music & Ideas',
                            'date' => 'MAY 22, 2026',
                            'day' => 'Friday',
                            'time' => '6:00 PM - 11:00 PM',
                            'category' => 'Festival',
                            'price' => 'Free',
                            'city' => 'Sydney',
                            'location' => 'Circular Quay',
                            'description' => 'The world\'s largest festival of light, music and ideas return to Sydney.',
                            'image' => 'assets/img/hero-cover.jpg',
                            'link' => 'single-event.php'
                        ],
                        [
                            'title' => 'Australian Open 2026 - Finals Weekend',
                            'date' => 'JAN 31, 2026',
                            'day' => 'Saturday',
                            'time' => '10:00 AM - 11:30 PM',
                            'category' => 'Sports',
                            'price' => '$150.00',
                            'city' => 'Melbourne',
                            'location' => 'Rod Laver Arena',
                            'description' => 'Witness history at the first Grand Slam of the year in Melbourne.',
                            'image' => 'assets/img/anmolbrisbane.jpg',
                            'link' => 'single-event.php'
                        ],
                        [
                            'title' => 'Brisbane Comedy Festival 2026',
                            'date' => 'APR 15, 2026',
                            'day' => 'Wednesday',
                            'time' => '7:00 PM - 10:30 PM',
                            'category' => 'Comedy',
                            'price' => '$45.00',
                            'city' => 'Brisbane',
                            'location' => 'Brisbane Powerhouse',
                            'description' => 'A month-long celebration of laughter featuring local and international acts.',
                            'image' => 'assets/img/baithak3-1.jpg',
                            'link' => 'single-event.php'
                        ]
                    ];
                    foreach ($carousel_events as $event):
                    ?>
                    <div class="swiper-slide">
                        <div class="group bg-slate-50 rounded-[10px] overflow-hidden border border-gray-100 transition-all-custom flex flex-col md:flex-row items-stretch shadow-sm hover:shadow-md h-full mx-1">
                            <!-- Image Left or Top -->
                            <div class="w-full md:w-56 shrink-0 overflow-hidden relative aspect-[16/9] md:aspect-[2/3]">
                                <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            </div>
                            
                            <!-- Content Right or Bottom -->
                            <div class="flex-1 p-4 md:p-6 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between mb-3">
                                        <span class="text-xs md:text-sm font-bold text-primary uppercase tracking-wider"><?= $event['date'] ?></span>
                                        <span class="bg-white text-[10px] md:text-xs font-bold text-gray-700 uppercase px-2.5 py-1 rounded border border-gray-100"><?= $event['category'] ?></span>
                                    </div>
                                    <h3 class="text-lg md:text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors leading-tight line-clamp-2">
                                        <?= $event['title'] ?>
                                    </h3>
                                    <p class="text-sm text-gray-600 mb-5 line-clamp-2 leading-relaxed">
                                        <?= $event['description'] ?>
                                    </p>
                                    
                                    <div class="space-y-2">
                                        <div class="flex items-center gap-2.5 text-gray-700 text-xs">
                                            <i data-lucide="map-pin" class="w-4 h-4 text-primary"></i>
                                            <span class="font-bold"><?= $event['city'] ?></span>
                                        </div>
                                        <div class="flex items-center gap-2.5 text-gray-600 text-xs">
                                            <i data-lucide="calendar-days" class="w-4 h-4 text-gray-400"></i>
                                            <span class="font-semibold"><?= $event['day'] ?> • <?= $event['time'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between mt-4">
                                    <span class="text-lg font-black text-secondary"><?= $event['price'] ?></span>
                                    <a href="<?= $event['link'] ?>" class="bg-primary text-white p-2 rounded-[10px] hover:scale-110 transition-all shadow-md shadow-primary/20">
                                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Event Categories -->
    <section class="py-16 bg-slate-50">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="text-center mb-12">
                <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Featured Event Categories</span>
                <h2 class="text-3xl md:text-4xl font-black text-secondary leading-tight">Explore by Categories</h2>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
                <?php
                $featured_categories = [
                    ['name' => 'Ras Garba', 'events' => '20 Events', 'icon' => 'disc', 'color' => 'bg-orange-500'],
                    ['name' => 'Festival', 'events' => '19 Events', 'icon' => 'sparkles', 'color' => 'bg-purple-500'],
                    ['name' => 'Music', 'events' => '9 Events', 'icon' => 'music', 'color' => 'bg-blue-500'],
                    ['name' => 'Dance', 'events' => '7 Events', 'icon' => 'user', 'color' => 'bg-pink-500'],
                    ['name' => 'Food & Drink', 'events' => '9 Events', 'icon' => 'utensils', 'color' => 'bg-red-500'],
                    ['name' => 'Celebrity', 'events' => '11 Events', 'icon' => 'star', 'color' => 'bg-yellow-500'],
                ];
                foreach ($featured_categories as $cat):
                ?>
                <a href="#" class="group relative bg-white p-6 rounded-[10px] border border-gray-100 transition-all-custom flex flex-col items-center text-center hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 hover:border-primary/20">
                    <div class="size-16 md:size-20 rounded-[10px] <?= $cat['color'] ?> text-white flex items-center justify-center mb-5 rotate-3 group-hover:rotate-0 transition-transform shadow-lg shadow-black/5">
                        <i data-lucide="<?= $cat['icon'] ?>" class="w-8 h-8 md:w-10 md:h-10"></i>
                    </div>
                    <h3 class="font-bold text-secondary text-base md:text-lg mb-1 group-hover:text-primary transition-colors"><?= $cat['name'] ?></h3>
                    <p class="text-[10px] md:text-xs font-bold text-gray-400 uppercase tracking-widest"><?= $cat['events'] ?></p>
                    
                    <!-- Decorative background element -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-[10px]"></div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Upcoming Events Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Upcoming Events</h2>
                    <p class="text-gray-500 max-w-xl">Don't miss out on these trending events happening across Australia this month.</p>
                </div>
                <a href="#" class="mt-4 md:mt-0 text-primary font-bold flex items-center gap-2 group">
                    View All Events
                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4">
                <?php
                $events = [
                    [
                        'title' => 'Standup Comedy by Gaurav Gupta Live in Perth - 2026', 
                        'date' => 'MAY 22, 2026', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Comedy',
                        'regular_price' => '$59.00',
                        'early_bird' => '$49.00',
                        'city' => 'Perth',
                        'location' => 'Crown Theatre', 
                        'image' => 'assets/img/gaurav-gupta.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'ANMOL MAGIC\'S Out Of This World - Live In Brisbane', 
                        'date' => 'FEB 27, 2026', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Magic Show',
                        'regular_price' => '$35.00',
                        'early_bird' => '$25.00',
                        'city' => 'Brisbane',
                        'location' => 'SunPAC', 
                        'image' => 'assets/img/anmolbrisbane.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Sur Aur Sitaar - An Evening With Ustad Shujaat Khan in Sydney', 
                        'date' => 'MAR 06, 2026', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Classical Music',
                        'price' => '$59.00', 
                        'city' => 'Sydney',
                        'location' => 'State Theatre', 
                        'image' => 'assets/img/ustad-shujaat-khan.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Chinmaya Hanuman Festival 2026', 
                        'date' => 'APR 03, 2026', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Festival',
                        'price' => '$5.00', 
                        'city' => 'Melbourne',
                        'location' => 'Melbourne Town Hall', 
                        'image' => 'assets/img/chinmaya-mission.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Standup Comedy by Gaurav Gupta Live in Adelaide - 2026', 
                        'date' => 'MAY 29, 2026', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Comedy',
                        'price' => '$59.00', 
                        'city' => 'Adelaide',
                        'location' => 'Woodville Town Hall', 
                        'image' => 'assets/img/gg-adl-2026.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Harsh Gujral Live in Melbourne 2026', 
                        'date' => 'JUL 12, 2026', 
                        'day' => 'SUN',
                        'time' => '6:00 PM',
                        'category' => 'Comedy',
                        'price' => '$49.00', 
                        'city' => 'Melbourne',
                        'location' => 'Palais Theatre', 
                        'image' => 'assets/img/harsh-mel.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'ANMOL MAGIC\'S Out Of This World - Live In Perth', 
                        'date' => 'MAR 01, 2026', 
                        'day' => 'SUN',
                        'time' => '6:00 PM',
                        'category' => 'Magic Show',
                        'price' => '$25.00', 
                        'city' => 'Perth',
                        'location' => 'Mandurah Performing Arts Centre', 
                        'image' => 'assets/img/anmolmagic.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Baithak 3 Live in Sydney 2026', 
                        'date' => 'MAR 07, 2026', 
                        'day' => 'SAT',
                        'time' => '7:00 PM',
                        'category' => 'Music',
                        'price' => '$19.50', 
                        'city' => 'Sydney',
                        'location' => 'Science Theatre UNSW', 
                        'image' => 'assets/img/baithak3-1.jpg',
                            'link' => 'single-event.php'
                    ]
                ];
                foreach ($events as $event):
                ?>
                <div class="group bg-white rounded-[10px] border border-gray-100 p-3 md:p-5 overflow-hidden transition-all-custom flex flex-col items-center hover:shadow-xl hover:shadow-primary/5 hover:border-primary/20">
                    <a href="<?= $event['link'] ?>" class="relative block overflow-hidden aspect-[2/3] w-full rounded-[10px] mb-4 shadow-sm group-hover:shadow-md transition-shadow">
                        <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </a>
                    
                    <div class="flex flex-col items-center text-center w-full px-1">
                        <a href="<?= $event['link'] ?>" class="w-full">
                            <h3 class="text-[11px] md:text-sm font-bold mb-1 md:mb-1.5 text-secondary group-hover:text-primary transition-colors line-clamp-2 min-h-[1.5rem] md:min-h-[2.5rem] leading-tight px-1">
                                <?= $event['title'] ?>
                            </h3>
                        </a>
                        
                        <p class="text-[9px] md:text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-4 md:mb-5">
                            <?= $event['day'] ?> <?= date('jS M', strtotime($event['date'])) ?> @ <?= $event['time'] ?>
                        </p>

                        <a href="<?= $event['link'] ?>" class="bg-secondary text-white px-4 md:px-6 py-2 md:py-3 rounded-[10px] flex items-center justify-center gap-2 group/btn hover:bg-primary transition-all text-[9px] md:text-[10px] font-extrabold uppercase tracking-widest w-full max-w-[170px] shadow-lg shadow-black/10">
                            Book Tickets
                            <i data-lucide="arrow-right-circle" class="w-3.5 h-3.5 md:w-4 h-4 group-hover/btn:translate-x-0.5 transition-transform"></i>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Top Cities Section -->
    <section class="py-20 bg-slate-100 overflow-hidden">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="text-center mb-12">
                <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Buy Tickets Now!</span>
                <h2 class="text-3xl md:text-4xl font-black text-secondary leading-tight">Explore Events By Top Cities</h2>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                <?php
                $top_cities = [
                    ['name' => 'Melbourne', 'events' => 80, 'image' => 'assets/img/melbourne.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Sydney', 'events' => 8, 'image' => 'assets/img/sydney.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Perth', 'events' => 9, 'image' => 'assets/img/perth.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Adelaide', 'events' => 5, 'image' => 'assets/img/adelaide.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Brisbane', 'events' => 2, 'image' => 'assets/img/brisbane.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Canberra', 'events' => 0, 'image' => 'assets/img/canberra.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Darwin', 'events' => 0, 'image' => 'assets/img/darwin.jpg', 'link' => 'single-event.php'],
                    ['name' => 'Hobart', 'events' => 0, 'image' => 'assets/img/hobart.jpg', 'link' => 'single-event.php'],
                ];
                foreach ($top_cities as $city):
                ?>
                <a href="<?= $city['link'] ?>" class="group block relative overflow-hidden rounded-[15px] aspect-square shadow-sm hover:shadow-2xl hover:shadow-primary/20 transition-all duration-300 transform hover:-translate-y-1 bg-black">
                    <img src="<?= $city['image'] ?>" alt="<?= $city['name'] ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 w-full p-4 md:p-6 flex flex-col items-start justify-end">
                        <h3 class="text-white font-black text-xl md:text-2xl mb-2 group-hover:text-primary transition-colors"><?= $city['name'] ?></h3>
                        <p class="text-white font-bold text-[10px] uppercase tracking-widest bg-white/20 backdrop-blur-md px-3 py-1 rounded-full border border-white/10"><?= $city['events'] ?> Events</p>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="text-center mb-16">
                <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">How It Works</span>
                <h2 class="text-3xl md:text-4xl font-black text-secondary leading-tight">Best Ticket Buying Experience</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 relative">
                <!-- Connecting Line (Desktop) -->
                <div class="hidden lg:block absolute top-[48px] left-[15%] right-[15%] h-[2px] bg-gradient-to-r from-transparent via-gray-200 to-transparent z-0"></div>

                <!-- Step 1 -->
                <div class="relative z-10 flex flex-col items-center text-center group">
                    <div class="w-24 h-24 mb-6 rounded-full bg-white border-4 border-white shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] flex items-center justify-center text-primary group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_-10px_rgba(0,0,0,0.15)] transition-all duration-300 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary text-white font-bold flex items-center justify-center border-[3px] border-white text-sm shadow-sm transition-colors group-hover:bg-primary">1</span>
                        <i data-lucide="compass" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Explore Events</h3>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-[220px]">Browse our platform to find the events that match your interests.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 flex flex-col items-center text-center group">
                    <div class="w-24 h-24 mb-6 rounded-full bg-white border-4 border-white shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] flex items-center justify-center text-primary group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_-10px_rgba(0,0,0,0.15)] transition-all duration-300 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary text-white font-bold flex items-center justify-center border-[3px] border-white text-sm shadow-sm transition-colors group-hover:bg-primary">2</span>
                        <i data-lucide="ticket" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Buy Ticket</h3>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-[220px]">Purchase tickets for the events you like with secure checkout.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 flex flex-col items-center text-center group">
                    <div class="w-24 h-24 mb-6 rounded-full bg-white border-4 border-white shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] flex items-center justify-center text-primary group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_-10px_rgba(0,0,0,0.15)] transition-all duration-300 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary text-white font-bold flex items-center justify-center border-[3px] border-white text-sm shadow-sm transition-colors group-hover:bg-primary">3</span>
                        <i data-lucide="mail" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Get Ticket</h3>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-[220px]">Receive your purchased ticket via email or mobile instantly.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 flex flex-col items-center text-center group">
                    <div class="w-24 h-24 mb-6 rounded-full bg-white border-4 border-white shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] flex items-center justify-center text-primary group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_-10px_rgba(0,0,0,0.15)] transition-all duration-300 relative">
                        <span class="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary text-white font-bold flex items-center justify-center border-[3px] border-white text-sm shadow-sm transition-colors group-hover:bg-primary">4</span>
                        <i data-lucide="smile" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors">Attend & Have Fun!</h3>
                    <p class="text-gray-500 text-sm leading-relaxed max-w-[220px]">Go to the event, have an amazing time, and make great memories!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Multi-vendor CTA -->
    <section class="py-24 relative overflow-hidden">
        <!-- Background Image & Overlay -->
        <div class="absolute inset-0">
            <img src="assets/img/organize-event-bg.jpg" alt="Organize Event" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-secondary/80"></div>
        </div>

        <div class="container mx-auto px-6 max-w-[1280px] relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <span class="inline-block py-1.5 px-4 rounded-full bg-white/10 border border-white/20 text-white font-bold text-xs uppercase tracking-widest mb-6">For Organizers</span>
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 leading-[1.2]">
                    Want to organize your own successful event?
                </h2>
                <p class="text-white/70 text-base md:text-xl mb-8 leading-relaxed">
                    Join Australia's fastest-growing event platform. Sell tickets effortlessly, manage attendees actively, and grow your brand.
                </p>
                
                <div class="flex flex-wrap items-center justify-center gap-4 md:gap-6 text-white text-xs md:text-sm font-medium mb-10">
                    <div class="flex items-center gap-2 bg-white/5 backdrop-blur-md px-4 py-2 rounded-full border border-white/10">
                        <i data-lucide="smartphone" class="w-4 h-4 text-primary"></i>
                        <span>Ticket Scanning App</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 backdrop-blur-md px-4 py-2 rounded-full border border-white/10">
                        <i data-lucide="layout-dashboard" class="w-4 h-4 text-primary"></i>
                        <span>High-end Organizer Portal</span>
                    </div>
                    <div class="flex items-center gap-2 bg-white/5 backdrop-blur-md px-4 py-2 rounded-full border border-white/10">
                        <i data-lucide="zap" class="w-4 h-4 text-primary"></i>
                        <span>Flexible Plans</span>
                    </div>
                </div>

                <div class="flex justify-center">
                    <a href="#" class="group relative px-8 md:px-10 py-4 md:py-5 bg-primary text-white font-bold rounded-full overflow-hidden transition-all hover:scale-105 flex items-center gap-3 shadow-xl shadow-primary/20">
                        <span class="relative z-10 text-base md:text-lg">Start Selling Tickets</span>
                        <i data-lucide="arrow-right" class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-slate-50 border-t border-gray-100">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="text-center mb-16">
                <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Features</span>
                <h2 class="text-3xl md:text-4xl font-black text-secondary leading-tight">Why Choose Us</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">
                <!-- For Organizer -->
                <div class="bg-white p-8 md:p-10 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-8">
                        <i data-lucide="briefcase" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-black text-secondary mb-8 pb-4 border-b border-gray-100">For Organizer</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-primary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Flexible Pricing</h4>
                                <p class="text-gray-500 text-sm">Commission per ticket or fixed price per event.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-primary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Seamless Payments</h4>
                                <p class="text-gray-500 text-sm">Vendors can easily integrate their own Stripe account.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-primary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Advanced Scanning App</h4>
                                <p class="text-gray-500 text-sm">Works flawlessly both with and without internet.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-primary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Detailed Analytics</h4>
                                <p class="text-gray-500 text-sm">Comprehensive dashboard delivering deep insights.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-primary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Seating Planner</h4>
                                <p class="text-gray-500 text-sm">Simple and easy seating plan management for any event.</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- For Guest -->
                <div class="bg-white p-8 md:p-10 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
                    <div class="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center text-secondary mb-8">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-black text-secondary mb-8 pb-4 border-b border-gray-100">For Guest</h3>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-secondary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Easy Checkout</h4>
                                <p class="text-gray-500 text-sm">Simple and intuitive ticket purchasing system.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-secondary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Secure Payments</h4>
                                <p class="text-gray-500 text-sm">Top-tier encryption to ensure your data is always safe.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-secondary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Unique QR Tickets</h4>
                                <p class="text-gray-500 text-sm">Conflict-free scanning with dedicated QR codes.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-secondary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Mobile Apps</h4>
                                <p class="text-gray-500 text-sm">Available on both Android and iOS platforms.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-secondary shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="font-bold text-secondary mb-1">Event Updates</h4>
                                <p class="text-gray-500 text-sm">Get real-time updates on the events you are interested in.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
<?php include 'inc/footer.php'; ?>
