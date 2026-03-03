<?php include 'inc/header.php'; ?>

    <!-- Page Header -->
    <div class="bg-secondary relative py-20 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-secondary/90 z-10"></div>
            <!-- Decorative Gradients -->
            <div class="absolute -right-40 -top-40 w-[500px] h-[500px] bg-primary/20 rounded-full blur-[100px] z-0"></div>
            <div class="absolute -left-40 -bottom-40 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] z-0"></div>
        </div>
        <div class="container mx-auto px-6 max-w-[1280px] relative z-20 text-center">
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Upcoming Events</h1>
            <p class="text-white/70 text-lg md:text-xl max-w-2xl mx-auto">
                Discover the best upcoming events happening near you. Secure your tickets today and make unforgettable memories!
            </p>
        </div>
    </div>

    <!-- Events Grid Section -->
    <section class="py-20 bg-slate-50 min-h-screen">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <!-- Search and Filter Bar -->
            <div class="bg-white p-4 md:p-6 rounded-[15px] shadow-sm border border-gray-100 mb-8 lg:mb-12 flex flex-col md:flex-row gap-4 items-center justify-between z-10 relative">
                <div class="w-full md:w-1/2 relative">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5"></i>
                    <input type="text" placeholder="Search events by name or city..." class="w-full pl-12 pr-4 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium">
                </div>
                <div class="w-full md:w-auto flex flex-col sm:flex-row gap-4">
                    <div class="relative min-w-[160px]">
                        <select class="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer">
                            <option value="">All Categories</option>
                            <option value="music">Music & Concerts</option>
                            <option value="comedy">Comedy Shows</option>
                            <option value="festival">Festivals</option>
                            <option value="sports">Sports</option>
                        </select>
                        <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none"></i>
                    </div>
                    <div class="relative min-w-[160px]">
                        <select class="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer">
                            <option value="">Any Time</option>
                            <option value="today">Today</option>
                            <option value="tomorrow">Tomorrow</option>
                            <option value="this-week">This Week</option>
                            <option value="this-month">This Month</option>
                        </select>
                        <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none"></i>
                    </div>
                </div>
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
                        'price' => '$59.00',
                        'city' => 'Perth',
                        'image' => 'assets/img/gaurav-gupta.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'ANMOL MAGIC\'S Out Of This World - Live In Brisbane', 
                        'date' => 'FEB 27, 2026', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Magic Show',
                        'price' => '$35.00',
                        'city' => 'Brisbane',
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
            
            <!-- Pagination Placeholder -->
            <div class="mt-12 flex justify-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 hover:bg-primary hover:text-white hover:border-primary transition-all">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-primary text-white shadow-md shadow-primary/20 font-bold">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 hover:bg-primary hover:text-white hover:border-primary transition-all">3</a>
                <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-secondary hover:bg-primary hover:text-white hover:border-primary transition-all">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'; ?>
