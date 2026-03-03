<?php
$page_title = "Sell Tickets with EventsBox - For Organizers";
$is_transparent_header = true;
include 'inc/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="relative min-h-[90vh] flex items-center justify-center pt-[100px] overflow-hidden bg-[#22213F]">
        <!-- Background Image & Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="assets/img/organizer-hero.jpg" alt="Excited crowd at an event" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-r from-[#22213F] via-[#22213F]/90 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#22213F] via-transparent to-transparent"></div>
        </div>

        <div class="container mx-auto px-6 max-w-[1280px] relative z-10 grid md:grid-cols-2 gap-12 items-center">
            <div class="text-white max-w-2xl">
                <span class="inline-block py-1.5 px-4 rounded-full bg-primary/20 text-primary font-bold text-sm mb-6 border border-primary/30 backdrop-blur-sm">
                    🚀 The #1 Platform for Australian Organizers
                </span>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black leading-[1.1] mb-6 tracking-tight">
                    Sell More Tickets.<br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-orange-400">Keep More Revenue.</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed font-medium">
                    The easiest, most powerful ticketing platform built for event creators. From local comedy clubs to massive festivals, we give you the tools to sell out faster.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="bg-primary text-white text-lg font-bold py-4 px-8 rounded-xl hover:bg-white hover:text-secondary transition-all text-center shadow-[0_10px_30px_-10px_#ef4444] flex items-center justify-center gap-2 group">
                        Start Selling Today <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#features" class="bg-white/10 text-white border border-white/20 text-lg font-bold py-4 px-8 rounded-xl hover:bg-white/20 transition-all text-center backdrop-blur-sm">
                        Explore Features
                    </a>
                </div>
                <div class="mt-8 flex items-center gap-4 text-sm text-gray-400 font-medium">
                    <div class="flex -space-x-3">
                        <img src="assets/img/avatar-1.jpg" class="w-10 h-10 rounded-full border-2 border-[#22213F]" alt="Organizer">
                        <img src="assets/img/avatar-2.jpg" class="w-10 h-10 rounded-full border-2 border-[#22213F]" alt="Organizer">
                        <img src="assets/img/avatar-3.jpg" class="w-10 h-10 rounded-full border-2 border-[#22213F]" alt="Organizer">
                        <div class="w-10 h-10 rounded-full border-2 border-[#22213F] bg-gray-700 flex items-center justify-center text-xs text-white pb-0.5">5k+</div>
                    </div>
                    <p>Trusted by thousands of organizers across Australia.</p>
                </div>
            </div>
            
            <!-- Quick Signup Form / Lead Magnet -->
            <div class="hidden md:block relative">
                <div class="absolute inset-0 bg-primary/20 blur-[100px] rounded-full"></div>
                <div class="bg-white rounded-3xl p-8 shadow-2xl relative z-10 border border-gray-100 transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <h3 class="text-2xl font-black text-secondary mb-2">Create Your Organizer Account</h3>
                    <p class="text-gray-500 mb-6 font-medium">It takes less than 2 minutes to get started.</p>
                    
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-1">Company / Organization Name</label>
                            <input type="text" class="w-full bg-slate-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="e.g. Awesome Events Co.">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-1">Work Email</label>
                            <input type="email" class="w-full bg-slate-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="you@company.com">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-secondary mb-1">Phone Number</label>
                            <input type="tel" class="w-full bg-slate-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="+61 XXX XXX XXX">
                        </div>
                        <button type="button" class="w-full bg-secondary text-white font-bold py-4 rounded-xl hover:bg-primary transition-colors mt-2 text-lg">
                            Get Free Access Now
                        </button>
                    </form>
                    <p class="text-center text-xs text-gray-400 mt-4">No credit card required to sign up.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Cloud -->
    <section class="py-10 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <p class="text-center text-sm font-bold text-gray-400 uppercase tracking-widest mb-6">Powering events for Australia's best creators</p>
            <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale">
                <!-- Replace with actual client logos if available -->
                <h3 class="text-xl md:text-2xl font-black">ComedyCentral</h3>
                <h3 class="text-xl md:text-2xl font-black italic">TechSummit_AU</h3>
                <h3 class="text-xl md:text-2xl font-black uppercase">Vivid_Events</h3>
                <h3 class="text-xl md:text-2xl font-black">FoodFest</h3>
                <h3 class="text-xl md:text-2xl font-black italic">LocalGigs</h3>
            </div>
        </div>
    </section>

    <!-- Core Features Highlight -->
    <section id="features" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Why Choose EventsBox?</span>
                <h2 class="text-3xl md:text-5xl font-black text-secondary leading-tight mb-6">Everything you need to run successful events.</h2>
                <p class="text-xl text-gray-600 font-medium">We've built a comprehensive suite of tools designed specifically to make organizers' lives easier and more profitable.</p>
            </div>

            <!-- Feature Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="tag" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-3">Flexible Pricing</h3>
                    <p class="text-gray-600 leading-relaxed font-medium">Choose what works for your business model. Opt for a low commission per ticket sold, or pay a simple, predictable fixed price per event.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="credit-card" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-3">Seamless Payments</h3>
                    <p class="text-gray-600 leading-relaxed font-medium">Get paid faster. Vendors can easily integrate their own Stripe account to receive payouts directly, securely, and without delay.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="smartphone" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-3">Advanced Scanning App</h3>
                    <p class="text-gray-600 leading-relaxed font-medium">Speed up entry at the door. Our powerful scanning app works flawlessly on any smartphone, both entirely online and without internet access.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="bar-chart-2" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-3">Detailed Analytics</h3>
                    <p class="text-gray-600 leading-relaxed font-medium">Make data-driven decisions. Access a comprehensive dashboard delivering deep insights into your sales, attendee demographics, and traffic sources.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="layout-grid" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-3">Seating Planner</h3>
                    <p class="text-gray-600 leading-relaxed font-medium">Host seated events with ease. A simple, interactive seating plan management tool that lets attendees pick their exact seats during checkout.</p>
                </div>

                <!-- Feature 6 (Extra for completeness) -->
                <div class="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="megaphone" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-black text-secondary mb-3">Marketing Tools Integration</h3>
                    <p class="text-gray-600 leading-relaxed font-medium">Boost your reach. Built-in SEO tools, email marketing integrations, and social sharing capabilities to help you sell out every single time.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Deep Dive Content Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-black text-secondary leading-tight mb-6">
                        Designed for Organizers who care about the <span class="text-primary">User Experience</span>.
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
                        We know that a clunky checkout process loses sales. That's why we've obsessed over creating the smoothest, fastest ticket purchasing flow in the industry. Your attendees will love buying tickets from you.
                    </p>
                    
                    <ul class="space-y-6">
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-secondary mb-1">Mobile-Optimized Checkout</h4>
                                <p class="text-gray-500 font-medium">Over 70% of tickets are bought on mobile. Our checkout feels like a native app.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-secondary mb-1">Custom Event Pages</h4>
                                <p class="text-gray-500 font-medium">Make it yours. Complete control over branding, imagery, and information layout.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-secondary mb-1">Automated Reminders</h4>
                                <p class="text-gray-500 font-medium">Reduce no-shows with automated email and SMS reminders sent to your attendees.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Image/Visual -->
                <div class="lg:w-1/2 relative">
                    <div class="absolute inset-0 bg-primary/10 bg-[radial-gradient(#ef4444_1px,transparent_1px)] [background-size:20px_20px] rounded-3xl -z-10 translate-x-4 translate-y-4"></div>
                    <div class="bg-white rounded-3xl shadow-2xl p-2 relative overflow-hidden border border-gray-100">
                        <!-- Abstract Dashboard Representation -->
                        <div class="bg-slate-50 rounded-2xl p-6 h-[500px] flex flex-col">
                            <div class="flex items-center justify-between mb-8 border-b border-gray-200 pb-4">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                                </div>
                                <div class="w-32 h-4 bg-gray-200 rounded-full"></div>
                            </div>
                            
                            <div class="flex gap-6 mb-8">
                                <div class="flex-1 bg-white rounded-xl shadow-sm p-4 border border-gray-100">
                                    <div class="w-10 h-10 bg-primary/10 rounded-lg mb-3"></div>
                                    <div class="w-16 h-4 bg-gray-200 rounded mb-2"></div>
                                    <div class="w-24 h-6 bg-slate-800 rounded"></div>
                                </div>
                                <div class="flex-1 bg-white rounded-xl shadow-sm p-4 border border-gray-100">
                                    <div class="w-10 h-10 bg-green-100 rounded-lg mb-3"></div>
                                    <div class="w-16 h-4 bg-gray-200 rounded mb-2"></div>
                                    <div class="w-24 h-6 bg-slate-800 rounded"></div>
                                </div>
                            </div>
                            
                            <div class="flex-1 bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-end gap-4">
                                <!-- Mock Chart -->
                                <div class="w-full bg-slate-50 rounded-lg h-full relative overflow-hidden flex items-end px-4 gap-2 pb-4">
                                    <div class="w-1/6 bg-primary/40 h-[30%] rounded-t-sm"></div>
                                    <div class="w-1/6 bg-primary/60 h-[50%] rounded-t-sm"></div>
                                    <div class="w-1/6 bg-primary/80 h-[70%] rounded-t-sm"></div>
                                    <div class="w-1/6 bg-primary h-[90%] rounded-t-sm"></div>
                                    <div class="w-1/6 bg-primary border-t-4 border-yellow-400 h-[100%] rounded-t-sm shadow-[0_0_20px_rgba(239,68,68,0.5)]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Highlight -->
    <section class="py-24 bg-secondary text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        <div class="container mx-auto px-6 max-w-[1280px] relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-5xl font-black leading-tight mb-6">Simple, Transparent Pricing</h2>
                <p class="text-xl text-gray-400 font-medium">No hidden fees. No setup costs. We only make money when you make money.</p>
            </div>
            
            <div class="bg-white/5 border border-white/10 rounded-[30px] p-8 md:p-12 backdrop-blur-md max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-12">
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-2xl font-black mb-4">Flexible Options</h3>
                    <p class="text-gray-300 font-medium leading-relaxed mb-6">We understand every event is different. Choose to pass the booking fee to the buyer, absorb it yourself, or negotiate a fixed price per event for massive scaling.</p>
                    <ul class="space-y-3 font-medium text-gray-200">
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <i data-lucide="check-circle-2" class="text-primary w-5 h-5"></i> Free events are always FREE
                        </li>
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <i data-lucide="check-circle-2" class="text-primary w-5 h-5"></i> Connect your own Stripe account
                        </li>
                        <li class="flex items-center gap-3 justify-center md:justify-start">
                            <i data-lucide="check-circle-2" class="text-primary w-5 h-5"></i> Payouts processed instantly
                        </li>
                    </ul>
                </div>
                <div class="w-full md:w-auto bg-white text-secondary rounded-[20px] p-8 text-center shadow-2xl transform hover:scale-105 transition-transform">
                    <p class="font-bold text-gray-400 uppercase tracking-widest text-sm mb-2">Standard Rate</p>
                    <div class="text-5xl font-black text-secondary mb-2">2.5% <span class="text-xl text-primary">+ 50¢</span></div>
                    <p class="text-sm font-bold text-gray-500 mb-6">per paid ticket</p>
                    <button class="w-full bg-secondary text-white font-bold py-3 rounded-xl hover:bg-primary transition-colors">
                        Create Event Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 bg-primary relative overflow-hidden">
        <!-- Abstract Shapes -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-[50px] -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-black/10 rounded-full blur-[80px] translate-x-1/3 translate-y-1/3"></div>
        
        <div class="container mx-auto px-6 max-w-[1280px] text-center relative z-10">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">Ready to pack the house?</h2>
            <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto font-medium">Join thousands of successful Australian organizers selling tickets on EventsBox.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-white text-primary text-xl font-bold py-4 px-10 rounded-xl hover:bg-secondary hover:text-white transition-all shadow-[0_10px_30px_-10px_rgba(0,0,0,0.3)]">
                    Create Organizer Account
                </a>
                <a href="#" class="bg-transparent text-white border-2 border-white/30 text-xl font-bold py-4 px-10 rounded-xl hover:bg-white/10 transition-all">
                    Talk to Sales
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Initialize Lucide Icons for this file -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
  
  // Custom transparent header logic for just this page since header.php doesn't automatically hide bg on scroll
  document.addEventListener('DOMContentLoaded', () => {
        const header = document.querySelector('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.remove('bg-transparent', 'text-white');
                header.classList.add('bg-white', 'text-secondary', 'shadow-sm');
                // Target logo inside header
                const logoInfo = header.querySelector('img[src*="logo"]');
                if(logoInfo) {
                     logoInfo.src = "assets/img/logo-dark.svg";
                }
            } else {
                header.classList.add('bg-transparent', 'text-white');
                header.classList.remove('bg-white', 'text-secondary', 'shadow-sm');
                // Switch to white logo if you had one, using standard logo for now
            }
        });
    });
</script>

<?php include 'inc/footer.php'; ?>
