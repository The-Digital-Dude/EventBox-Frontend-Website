<?php include 'inc/header.php'; ?>

    <!-- Page Header (Optional, for visual separation) -->
    <div class="bg-secondary py-12">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <h1 class="text-3xl md:text-5xl font-black text-white">About EventsBox</h1>
            <p class="text-white/70 mt-4 text-lg">Your premier destination for all things event-related in Australia.</p>
        </div>
    </div>

    <!-- Mission & Vision Section -->
    <section class="py-20 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16">
                <!-- Our Mission -->
                <div class="bg-white p-10 md:p-12 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all group relative overflow-hidden">
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl z-0"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-8 group-hover:bg-primary group-hover:text-white transition-all">
                            <i data-lucide="target" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-3xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">Our Mission</h3>
                        <p class="text-gray-500 leading-relaxed text-lg">
                            To revolutionize the event ticketing experience in Australia by providing a seamless, secure, and user-friendly platform that empowers both organizers to create extraordinary events and attendees to discover unforgettable experiences.
                        </p>
                    </div>
                </div>

                <!-- Our Vision -->
                <div class="bg-white p-10 md:p-12 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all group relative overflow-hidden">
                    <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-secondary/5 rounded-full blur-3xl z-0"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-full bg-secondary/10 flex items-center justify-center text-secondary mb-8 group-hover:bg-secondary group-hover:text-white transition-all">
                            <i data-lucide="eye" class="w-8 h-8"></i>
                        </div>
                        <h3 class="text-3xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">Our Vision</h3>
                        <p class="text-gray-500 leading-relaxed text-lg">
                            To become Australia's most trusted and vibrant community hub for live entertainment, connecting millions of people through shared passions and elevating the standard of event management nationwide.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Content -->
    <section class="py-24 bg-white overflow-hidden relative">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="flex flex-col lg:flex-row gap-16 items-start">
                <!-- Content Column -->
                <div class="w-full lg:w-1/2 lg:pt-8 order-2 lg:order-1 relative z-10">
                    <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-4">Our Story</span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-black text-secondary leading-tight mb-8">
                        Events Box - Find or Create Event & Buy or Sell Tickets in Australia
                    </h2>
                    
                    <div class="space-y-6 text-gray-500 leading-relaxed text-lg">
                        <p>
                            Welcome to Events Box, your premier destination for all things event-related in Australia. Our platform is designed to cater to both event enthusiasts and organizers alike. Discover a diverse range of events happening across the country, or take the lead by creating your own memorable experiences.
                        </p>
                        <p>
                            With Events Box, you have the power to explore a multitude of events spanning various categories, ensuring there’s something for everyone. From cultural festivals to sports tournaments, conferences to concerts, we’ve got your event needs covered.
                        </p>
                        <p>
                            Our user-friendly interface makes it a breeze to buy or sell tickets, connecting event-goers with organizers seamlessly. Whether you’re looking to secure your spot at an upcoming concert or looking to sell tickets for your community gathering, Events Box provides the perfect platform.
                        </p>
                    </div>
                    
                    <div class="mt-12">
                         <a href="index.php" class="bg-primary text-white px-8 py-4 rounded-[10px] font-bold hover:bg-opacity-90 hover:-translate-y-1 transition-all shadow-xl shadow-primary/20 inline-flex items-center gap-3">
                            <span>Explore Events Now</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                         </a>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="w-full lg:w-1/2 relative order-1 lg:order-2">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl z-0"></div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-secondary/10 rounded-full blur-3xl z-0"></div>
                    <img src="assets/img/about-story.png" alt="Events Box - Find or Create Event & Buy or Sell Tickets in Australia" class="relative z-10 w-full rounded-[20px] shadow-2xl transform transition-transform duration-700 hover:scale-[1.02] sticky top-32">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us / Stats Section -->
    <section class="py-24 bg-secondary relative overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;"></div>
        <div class="container mx-auto px-6 max-w-[1280px] relative z-10 text-center">
            <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-4">By The Numbers</span>
            <h2 class="text-3xl md:text-5xl font-black text-white mb-16">Trusted by Thousands Across Australia</h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-[15px] bg-white/10 flex items-center justify-center text-primary mb-6">
                        <i data-lucide="calendar-check" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-4xl md:text-5xl font-black text-white mb-2">5,000+</h4>
                    <p class="text-white/60 font-medium uppercase tracking-wider text-sm">Events Hosted</p>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-[15px] bg-white/10 flex items-center justify-center text-primary mb-6">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-4xl md:text-5xl font-black text-white mb-2">1.2M+</h4>
                    <p class="text-white/60 font-medium uppercase tracking-wider text-sm">Happy Attendees</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-[15px] bg-white/10 flex items-center justify-center text-primary mb-6">
                        <i data-lucide="building-2" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-4xl md:text-5xl font-black text-white mb-2">50+</h4>
                    <p class="text-white/60 font-medium uppercase tracking-wider text-sm">Cities Covered</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-[15px] bg-white/10 flex items-center justify-center text-primary mb-6">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-4xl md:text-5xl font-black text-white mb-2">100%</h4>
                    <p class="text-white/60 font-medium uppercase tracking-wider text-sm">Secure Ticketing</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'; ?>
