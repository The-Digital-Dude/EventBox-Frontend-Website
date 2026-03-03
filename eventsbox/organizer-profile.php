<?php
$page_title = "Organizer Profile";
$is_transparent_header = false;
include 'inc/header.php';

// Mock Organizer Data
$organizer = [
    'name' => 'Premier Tickets Events',
    'logo' => 'assets/img/logo-dark.svg', // Placeholder
    'bio' => 'Premier Tickets is an Australian ticketing portal offering a seamless experience for organizers and attendees alike. We host massive events spanning comedy, festivals, and music across major Australian cities.',
    'socials' => [
        'facebook' => 'https://facebook.com',
        'instagram' => 'https://instagram.com',
        'twitter' => 'https://twitter.com',
        'website' => 'https://premiertickets.com.au'
    ],
    'total_events' => 42,
    'followers' => '12.5k'
];

// Mock Upcoming Events
$upcoming_events = [
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
    ]
];

// Mock Past Events
$past_events = [
    [
        'title' => 'Brisbane Comedy Festival 2025',
        'date' => 'APR 15, 2025',
        'day' => 'WED',
        'time' => '7:00 PM',
        'category' => 'Comedy',
        'price' => '$45.00',
        'city' => 'Brisbane',
        'location' => 'Brisbane Powerhouse',
        'image' => 'assets/img/baithak3-1.jpg',
        'link' => 'single-event.php'
    ],
    [
        'title' => 'Vivid Sydney 2025 - Light, Music & Ideas',
        'date' => 'MAY 22, 2025',
        'day' => 'FRI',
        'time' => '6:00 PM',
        'category' => 'Festival',
        'price' => 'Free',
        'city' => 'Sydney',
        'location' => 'Circular Quay',
        'image' => 'assets/img/hero-cover.jpg',
        'link' => 'single-event.php'
    ]
];
?>

<main class="bg-slate-50 min-h-screen py-10 md:py-16">
    <div class="container mx-auto px-6 max-w-[1280px]">
        
        <!-- Organizer Profile Header Section -->
        <div class="bg-white rounded-[15px] p-6 text-center border border-gray-100 shadow-sm mb-12">
            <div class="relative w-32 h-32 mx-auto mb-6">
                <!-- Cover Image equivalent could go here, but focusing on logo -->
                <div class="w-full h-full rounded-full border-4 border-white shadow-lg overflow-hidden bg-slate-100 flex items-center justify-center p-4">
                    <img src="<?= $organizer['logo'] ?>" alt="<?= $organizer['name'] ?>" class="w-full h-auto object-contain">
                </div>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-black text-secondary mb-3"><?= $organizer['name'] ?></h1>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6 leading-relaxed"><?= $organizer['bio'] ?></p>
            
            <div class="flex flex-wrap items-center justify-center gap-6 md:gap-10 mb-8">
                <div class="text-center">
                    <span class="block text-2xl font-black text-secondary"><?= $organizer['total_events'] ?></span>
                    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Total Events</span>
                </div>
                <div class="hidden md:block w-px h-10 bg-gray-200"></div>
                <!-- Action Buttons: Contact -->
                <div class="flex gap-3">
                    <button class="bg-white text-secondary font-bold py-2 px-6 rounded-full border border-gray-200 hover:border-primary hover:text-primary transition-colors flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4"></i> Contact
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-center gap-4">
                <?php if(!empty($organizer['socials']['facebook'])): ?>
                <a href="<?= $organizer['socials']['facebook'] ?>" class="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
                    <i data-lucide="facebook" class="w-5 h-5"></i>
                </a>
                <?php endif; ?>
                <?php if(!empty($organizer['socials']['instagram'])): ?>
                <a href="<?= $organizer['socials']['instagram'] ?>" class="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
                    <i data-lucide="instagram" class="w-5 h-5"></i>
                </a>
                <?php endif; ?>
                <?php if(!empty($organizer['socials']['twitter'])): ?>
                <a href="<?= $organizer['socials']['twitter'] ?>" class="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
                    <i data-lucide="twitter" class="w-5 h-5"></i>
                </a>
                <?php endif; ?>
                <?php if(!empty($organizer['socials']['website'])): ?>
                <a href="<?= $organizer['socials']['website'] ?>" class="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
                    <i data-lucide="globe" class="w-5 h-5"></i>
                </a>
                <?php endif; ?>
            </div>
        </div>

        <!-- Upcoming Events Section -->
        <div class="mb-16">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 flex items-center gap-3">
                <i data-lucide="calendar-check" class="text-primary w-6 h-6"></i> Upcoming Events
            </h2>
            
            <?php if(empty($upcoming_events)): ?>
                <div class="bg-white rounded-[15px] p-10 text-center border border-gray-100">
                    <i data-lucide="calendar-x" class="w-12 h-12 text-gray-300 mx-auto mb-4"></i>
                    <p class="text-gray-500 font-medium text-lg">No upcoming events scheduled at the moment.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4">
                    <?php foreach ($upcoming_events as $event): ?>
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
            <?php endif; ?>
        </div>

        <!-- Past Events Section -->
        <div>
            <h2 class="text-2xl md:text-3xl font-bold mb-6 flex items-center gap-3">
                <i data-lucide="history" class="text-gray-400 w-6 h-6"></i> Past Events
            </h2>
            
            <?php if(empty($past_events)): ?>
                 <div class="bg-white rounded-[15px] p-10 text-center border border-gray-100">
                    <p class="text-gray-500 font-medium">No past events recorded yet.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4 opacity-75 hover:opacity-100 transition-opacity duration-300">
                    <?php foreach ($past_events as $event): ?>
                    <div class="group bg-white rounded-[10px] border border-gray-100 p-3 md:p-5 overflow-hidden transition-all-custom flex flex-col items-center hover:shadow-xl hover:shadow-primary/5 grayscale-[50%] hover:grayscale-0">
                        <a href="<?= $event['link'] ?>" class="relative block overflow-hidden aspect-[2/3] w-full rounded-[10px] mb-4 shadow-sm group-hover:shadow-md transition-shadow">
                            <img src="<?= $event['image'] ?>" alt="<?= $event['title'] ?>" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/50"></div>
                            
                            <!-- 'Ended' Badge -->
                            <div class="absolute inset-0 flex items-center justify-center z-10 pointer-events-none">
                                <span class="bg-secondary text-white font-bold py-1.5 px-4 rounded-full text-xs uppercase tracking-widest bg-opacity-90 backdrop-blur-sm border border-white/20 shadow-xl">Event Ended</span>
                            </div>
                        </a>
                        
                        <div class="flex flex-col items-center text-center w-full px-1">
                            <a href="<?= $event['link'] ?>" class="w-full">
                                <h3 class="text-[11px] md:text-sm font-bold mb-1 md:mb-1.5 text-gray-500 group-hover:text-primary transition-colors line-clamp-2 min-h-[1.5rem] md:min-h-[2.5rem] leading-tight px-1">
                                    <?= $event['title'] ?>
                                </h3>
                            </a>
                            
                            <p class="text-[9px] md:text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-4 md:mb-5">
                                <?= $event['day'] ?> <?= date('jS M', strtotime($event['date'])) ?> @ <?= $event['time'] ?>
                            </p>

                            <a href="<?= $event['link'] ?>" class="bg-gray-200 text-gray-500 px-4 md:px-6 py-2 md:py-3 rounded-[10px] flex items-center justify-center gap-2 group/btn hover:bg-gray-300 transition-all text-[9px] md:text-[10px] font-extrabold uppercase tracking-widest w-full max-w-[170px]">
                                View Details
                                <i data-lucide="arrow-right-circle" class="w-3.5 h-3.5 md:w-4 h-4"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php include 'inc/footer.php'; ?>
