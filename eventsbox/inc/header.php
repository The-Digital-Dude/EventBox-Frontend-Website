<?php $is_transparent = isset($is_transparent_header) && $is_transparent_header; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' | EventsBox' : 'EventsBox | Find Australia\'s Best Events Here!'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Discover and book the best events in Australia. From music festivals to business workshops, EventsBox is your multi-vendor event ticketing partner.'; ?>">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6666',
                        secondary: '#22213F',
                    },
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>

        
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.6));
        }

        .transition-all-custom {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .event-card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        @keyframes slow-zoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        @keyframes fade-in-up {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
            opacity: 0;
        }
    </style>
</head>
<body class="bg-slate-50 text-secondary antialiased">

    <!-- Header -->
    <header id="main-header" data-transparent="<?= $is_transparent ? 'true' : 'false' ?>" class="fixed top-0 left-0 w-full z-50 transition-all-custom py-[20px] <?= $is_transparent ? '' : 'bg-white shadow-sm' ?>">
        <div class="container mx-auto px-6 flex items-center justify-between">
            <!-- Logo -->
            <a href="index.php" class="relative z-10">
                <img id="header-logo" src="<?= $is_transparent ? 'assets/img/logo-white.svg' : 'assets/img/logo-dark.svg' ?>" alt="EventsBox Logo" class="h-10 md:h-12 transition-all-custom">
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="index.php" class="nav-link <?= $is_transparent ? 'text-white' : 'text-secondary' ?> font-medium hover:text-primary transition-colors">Home</a>
                <a href="upcoming-events.php" class="nav-link <?= $is_transparent ? 'text-white' : 'text-secondary' ?> font-medium hover:text-primary transition-colors">Upcoming Events</a>
                <a href="past-events.php" class="nav-link <?= $is_transparent ? 'text-white' : 'text-secondary' ?> font-medium hover:text-primary transition-colors">Past Events</a>
                <a href="about-us.php" class="nav-link <?= $is_transparent ? 'text-white' : 'text-secondary' ?> font-medium hover:text-primary transition-colors">About Us</a>
                <a href="contact-us.php" class="nav-link <?= $is_transparent ? 'text-white' : 'text-secondary' ?> font-medium hover:text-primary transition-colors">Contact Us</a>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4">
                <a href="#" class="hidden md:flex items-center gap-2 <?= $is_transparent ? 'text-white' : 'text-secondary' ?> font-medium hover:text-primary transition-colors mr-4">
                    <i data-lucide="plus-circle" class="w-5 h-5"></i>
                    Organize Event
                </a>
                <a href="#" class="bg-primary text-white p-3 rounded-[10px] hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20">
                    <i data-lucide="user" class="w-6 h-6"></i>
                </a>
                <button id="mobile-menu-btn" class="md:hidden <?= $is_transparent ? 'text-white' : 'text-secondary' ?> p-2">
                    <i data-lucide="menu" class="w-8 h-8"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-white z-[60] flex flex-col pt-6 px-6 pb-6 transform translate-x-full transition-transform duration-300 md:hidden overflow-y-auto">
        <div class="flex items-center justify-between mb-8">
            <img src="assets/img/logo-dark.svg" alt="EventsBox Logo" class="h-10">
            <button id="close-mobile-menu" class="text-secondary p-2 -mr-2">
                <i data-lucide="x" class="w-8 h-8"></i>
            </button>
        </div>
        
        <div class="flex flex-col space-y-6">
            <a href="index.php" class="text-2xl font-black text-secondary hover:text-primary transition-colors">Home</a>
            <a href="upcoming-events.php" class="text-2xl font-black text-secondary hover:text-primary transition-colors">Upcoming Events</a>
            <a href="past-events.php" class="text-2xl font-black text-secondary hover:text-primary transition-colors">Past Events</a>
            <a href="about-us.php" class="text-2xl font-black text-secondary hover:text-primary transition-colors">About Us</a>
            <a href="contact-us.php" class="text-2xl font-black text-secondary hover:text-primary transition-colors">Contact Us</a>
        </div>
        
        <div class="mt-auto pt-10 border-t border-gray-100 flex flex-col gap-4">
            <a href="#" class="flex items-center justify-center gap-2 bg-slate-50 text-secondary py-4 rounded-xl font-bold hover:bg-slate-100 transition-colors">
                <i data-lucide="plus-circle" class="w-5 h-5"></i>
                Organize Event
            </a>
            <a href="#" class="bg-primary text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-secondary transition-all shadow-lg shadow-primary/20">
                <i data-lucide="user" class="w-5 h-5"></i>
                My Account
            </a>
        </div>
    </div>

    <?php if (!$is_transparent): ?>
        <!-- Spacer to prevent content from going under the fixed solid header -->
        <div class="h-[80px] md:h-[88px]"></div>
    <?php endif; ?>
