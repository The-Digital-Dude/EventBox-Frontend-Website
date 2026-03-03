    <!-- Footer -->
    <footer class="bg-[#22213F] text-white border-t border-white/10 pt-20 pb-10">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div class="lg:col-span-1">
                    <a href="index.php" class="block mb-8">
                        <img src="assets/img/logo-white.svg" alt="EventsBox Logo" class="h-10">
                    </a>
                    <p class="text-white mb-8 leading-relaxed">
                        EventsBox is the leading event discovery and ticketing platform in Australia, connecting people with unforgettable experiences.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="size-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="size-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="size-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-8 text-white">Quick Links</h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="upcoming-events.php" class="group flex items-center text-white hover:text-primary transition-colors font-medium">
                                <span class="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                                <span>Upcoming Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="past-events.php" class="group flex items-center text-white hover:text-primary transition-colors font-medium">
                                <span class="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                                <span>Past Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="about-us.php" class="group flex items-center text-white hover:text-primary transition-colors font-medium">
                                <span class="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                                <span>About Us</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-8 text-white">Support</h4>
                    <ul class="space-y-4">
                        <li>
                            <a href="contact-us.php" class="group flex items-center text-white hover:text-primary transition-colors font-medium">
                                <span class="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                                <span>Contact Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center text-white hover:text-primary transition-colors font-medium">
                                <span class="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                                <span>Safety Guides</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center text-white hover:text-primary transition-colors font-medium">
                                <span class="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                                <span>Refund Policy</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-lg mb-8 text-white">Contact Us</h4>
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4 text-white">
                            <i data-lucide="map-pin" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                            <div class="leading-relaxed">
                                Melbourne, Victoria,<br/>Australia
                            </div>
                        </li>
                        <li class="flex items-start gap-4 text-white">
                            <i data-lucide="phone" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                            <div class="leading-relaxed">
                                (+61) 470119587
                            </div>
                        </li>
                        <li class="flex items-start gap-4 text-white">
                            <i data-lucide="mail" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                            <div class="leading-relaxed">
                                <a href="mailto:hello@eventsbox.com.au" class="hover:text-primary transition-colors">hello@eventsbox.com.au</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-white/10 pt-10 flex flex-col md:flex-row items-center justify-between text-white text-sm gap-4">
                <p>&copy; <?= date('Y') ?> EventsBox. Built with <i data-lucide="heart" class="w-3 h-3 inline text-red-500"></i> in Australia.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Lucide implementation
        lucide.createIcons();

        if (typeof Swiper !== 'undefined') {
            // Swiper Initialization
            const swiper = new Swiper('.event-carousel', {
                slidesPerView: 1,
                spaceBetween: 16,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                navigation: {
                    nextEl: '.swiper-next-btn',
                    prevEl: '.swiper-prev-btn',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    }
                }
            });
        }

        // Header Scroll Effect
        const header = document.getElementById('main-header');
        const logo = document.getElementById('header-logo');
        const navLinks = document.querySelectorAll('.nav-link');
        const organizeBtn = header ? header.querySelector('a.flex') : null;
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMobileMenuBtn = document.getElementById('close-mobile-menu');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-x-full');
                document.body.classList.add('overflow-hidden');
            });
        }

        if (closeMobileMenuBtn && mobileMenu) {
            closeMobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.add('translate-x-full');
                document.body.classList.remove('overflow-hidden');
            });
        }

        if (header) {
            const isTransparent = header.getAttribute('data-transparent') === 'true';

            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('bg-white', 'shadow-sm');
                    
                    if (isTransparent) {
                        logo.src = 'assets/img/logo-dark.svg';
                        
                        navLinks.forEach(link => {
                            link.classList.remove('text-white');
                            link.classList.add('text-secondary');
                        });
                        if (organizeBtn) {
                            organizeBtn.classList.remove('text-white');
                            organizeBtn.classList.add('text-secondary');
                        }
                        if (mobileMenuBtn) {
                            mobileMenuBtn.classList.remove('text-white');
                            mobileMenuBtn.classList.add('text-secondary');
                        }
                    }
                } else {
                    if (isTransparent) {
                        header.classList.remove('bg-white', 'shadow-sm');
                        logo.src = 'assets/img/logo-white.svg';
                        
                        navLinks.forEach(link => {
                            link.classList.add('text-white');
                            link.classList.remove('text-secondary');
                        });
                        if (organizeBtn) {
                            organizeBtn.classList.add('text-white');
                            organizeBtn.classList.remove('text-secondary');
                        }
                        if (mobileMenuBtn) {
                            mobileMenuBtn.classList.add('text-white');
                            mobileMenuBtn.classList.remove('text-secondary');
                        }
                    }
                }
            });
        }
    </script>
</body>
</html>
