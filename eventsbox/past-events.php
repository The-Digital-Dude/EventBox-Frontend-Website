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
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Past Events</h1>
            <p class="text-white/70 text-lg md:text-xl max-w-2xl mx-auto">
                Take a look back at some of the incredible events we've hosted. See what you missed and get ready for the next one!
            </p>
        </div>
    </div>

    <!-- Events Grid Section -->
    <section class="py-20 bg-slate-50 min-h-screen">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4 opacity-80 mix-blend-luminosity hover:mix-blend-normal hover:opacity-100 transition-all duration-500">
                <?php
                // Using past dates for the demonstration
                $events = [
                    [
                        'title' => 'Standup Comedy by Gaurav Gupta Live in Perth - 2023', 
                        'date' => 'MAY 22, 2023', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Comedy',
                        'price' => 'Ended',
                        'city' => 'Perth',
                        'image' => 'assets/img/gaurav-gupta.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'ANMOL MAGIC\'S Out Of This World - Live In Brisbane', 
                        'date' => 'FEB 27, 2023', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Magic Show',
                        'price' => 'Ended',
                        'city' => 'Brisbane',
                        'image' => 'assets/img/anmolbrisbane.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Sur Aur Sitaar - An Evening With Ustad Shujaat Khan in Sydney', 
                        'date' => 'MAR 06, 2023', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Classical Music',
                        'price' => 'Ended', 
                        'city' => 'Sydney',
                        'image' => 'assets/img/ustad-shujaat-khan.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Chinmaya Hanuman Festival 2023', 
                        'date' => 'APR 03, 2023', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Festival',
                        'price' => 'Ended', 
                        'city' => 'Melbourne',
                        'image' => 'assets/img/chinmaya-mission.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Standup Comedy by Gaurav Gupta Live in Adelaide - 2023', 
                        'date' => 'MAY 29, 2023', 
                        'day' => 'FRI',
                        'time' => '7:00 PM',
                        'category' => 'Comedy',
                        'price' => 'Ended', 
                        'city' => 'Adelaide',
                        'image' => 'assets/img/gg-adl-2026.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Harsh Gujral Live in Melbourne 2023', 
                        'date' => 'JUL 12, 2023', 
                        'day' => 'SUN',
                        'time' => '6:00 PM',
                        'category' => 'Comedy',
                        'price' => 'Ended', 
                        'city' => 'Melbourne',
                        'image' => 'assets/img/harsh-mel.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'ANMOL MAGIC\'S Out Of This World - Live In Perth', 
                        'date' => 'MAR 01, 2023', 
                        'day' => 'SUN',
                        'time' => '6:00 PM',
                        'category' => 'Magic Show',
                        'price' => 'Ended', 
                        'city' => 'Perth',
                        'image' => 'assets/img/anmolmagic.jpg',
                        'link' => 'single-event.php'
                    ],
                    [
                        'title' => 'Baithak 3 Live in Sydney 2023', 
                        'date' => 'MAR 07, 2023', 
                        'day' => 'SAT',
                        'time' => '7:00 PM',
                        'category' => 'Music',
                        'price' => 'Ended', 
                        'city' => 'Sydney',
                        'image' => 'assets/img/baithak3-1.jpg',
                        'link' => 'single-event.php'
                    ]
                ];
                foreach ($events as $event):
                ?>
                <div class="group bg-white rounded-[10px] border border-gray-100 p-3 md:p-5 overflow-hidden flex flex-col items-center shadow-sm relative grayscale-[50%] hover:grayscale-0 transition-all">
                    <div class="absolute inset-0 bg-black/5 z-10 pointer-events-none group-hover:bg-transparent transition-all"></div>
                    <a href="<?= $event['link'] ?>" class="relative block overflow-hidden aspect-[2/3] w-full rounded-[10px] mb-4 shadow-sm group-hover:shadow-md transition-shadow">
                        <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700">
                    </a>
                    
                    <div class="flex flex-col items-center text-center w-full px-1">
                        <a href="<?= $event['link'] ?>" class="w-full">
                            <h3 class="text-[11px] md:text-sm font-bold mb-1 md:mb-1.5 text-gray-500 line-clamp-2 min-h-[1.5rem] md:min-h-[2.5rem] leading-tight px-1">
                                <?= $event['title'] ?>
                            </h3>
                        </a>
                        
                        <p class="text-[9px] md:text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-4 md:mb-5">
                            <?= $event['day'] ?> <?= date('jS M', strtotime($event['date'])) ?> @ <?= $event['time'] ?>
                        </p>

                        <div class="text-gray-400 px-4 md:px-6 py-2 md:py-3 rounded-[10px] flex items-center justify-center gap-2 border border-gray-200 bg-gray-50 text-[9px] md:text-[10px] font-extrabold uppercase tracking-widest w-full max-w-[170px]">
                            <i data-lucide="check-circle" class="w-3.5 h-3.5 md:w-4 h-4"></i>
                            Ended
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Pagination Placeholder -->
            <div class="mt-12 flex justify-center gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 hover:bg-gray-100 transition-all">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-gray-200 text-gray-700 font-bold">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 hover:bg-gray-100 transition-all">3</a>
                <span class="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 hover:bg-gray-100 transition-all">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'; ?>
