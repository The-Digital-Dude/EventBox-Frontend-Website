<?php
$page_title = "Standup Comedy by Gaurav Gupta Live in Perth - 2026";
$page_description = "Experience the legendary 'Aarzoo-e-Gaurav' live as Gaurav Gupta brings his hilarious stand-up comedy to Perth in 2026. Book your tickets exclusively on EventsBox.";
$is_transparent_header = true;
include 'inc/header.php';
?>

<main>
    <!-- Event Hero Section -->
    <section class="relative bg-secondary min-h-[calc(100vh-80px)] lg:h-screen flex items-center pt-24 pb-12 lg:pt-20 overflow-hidden">
        <!-- Background Decoration (Blurred Color Blobs) -->
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/20 rounded-full blur-[120px] animate-blob"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px] animate-blob animation-delay-2000"></div>
        <div class="absolute top-[20%] right-[10%] w-[30%] h-[30%] bg-purple-600/10 rounded-full blur-[120px] animate-blob animation-delay-4000"></div>
        
        <!-- Background Grid/Pattern -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 40px 40px;"></div>

        <div class="container mx-auto px-6 max-w-[1280px] relative z-10">
            <div class="flex flex-col lg:flex-row gap-12 items-center justify-center">
                <!-- Event Image -->
                <div class="w-full lg:w-1/3 animate-fade-in-up">
                    <div class="relative group max-w-[320px] mx-auto lg:ml-0">
                        <div class="absolute -inset-4 bg-primary/30 rounded-[30px] blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <img src="assets/img/gaurav-gupta.jpg" alt="Gaurav Gupta Live" class="w-full aspect-[2/3] object-cover rounded-[15px] shadow-2xl relative z-10 border border-white/10">
                        <div class="absolute top-4 left-4 z-20">
                            <span class="bg-primary text-white px-3 py-1.5 rounded-full font-bold text-[10px] uppercase tracking-wider shadow-lg">Comedy Solo</span>
                        </div>
                    </div>
                </div>

                <!-- Event Title & Quick Info -->
                <div class="w-full lg:w-7/12 text-white animate-fade-in-up" style="animation-delay: 0.2s;">
                    <nav class="flex items-center gap-2 text-gray-400 text-[10px] md:text-xs mb-4">
                        <a href="index.php" class="hover:text-primary transition-colors">Home</a>
                        <i data-lucide="chevron-right" class="w-3 h-3"></i>
                        <a href="#" class="hover:text-primary transition-colors">Comedy</a>
                        <i data-lucide="chevron-right" class="w-3 h-3"></i>
                        <span class="text-white">Gaurav Gupta Live</span>
                    </nav>

                    <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-6 leading-tight">Standup Comedy by Gaurav Gupta Live in Perth</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center gap-3 bg-white/5 p-3 rounded-[10px] border border-white/10">
                            <div class="size-10 rounded-[10px] bg-primary/20 flex items-center justify-center text-primary">
                                <i data-lucide="calendar" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Date</p>
                                <p class="text-sm font-bold">Saturday, May 15, 2026</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-white/5 p-3 rounded-[10px] border border-white/10">
                            <div class="size-10 rounded-[10px] bg-primary/20 flex items-center justify-center text-primary">
                                <i data-lucide="clock" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Time</p>
                                <p class="text-sm font-bold">7:00 PM - 9:30 PM</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-white/5 p-3 rounded-[10px] border border-white/10 md:col-span-2">
                            <div class="size-10 rounded-[10px] bg-primary/20 flex items-center justify-center text-primary">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Location</p>
                                <p class="text-sm font-bold">Perth Convention and Exhibition Centre, Perth WA</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="cart.php" class="w-full sm:w-auto bg-primary text-white px-8 py-4 rounded-[10px] font-black text-sm uppercase tracking-widest hover:bg-white hover:text-black transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3 group">
                            Book Tickets Now
                            <i data-lucide="ticket" class="w-5 h-5 group-hover:rotate-12 transition-transform"></i>
                        </a>
                        <button id="share-event-btn" class="w-full sm:w-auto bg-white/10 backdrop-blur-md border border-white/20 text-white px-6 py-4 rounded-[10px] font-black text-sm uppercase tracking-widest hover:bg-white hover:text-black transition-all shadow-xl flex items-center justify-center gap-3 group">
                            <i data-lucide="share-2" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
                            Share
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Share Modal -->
    <div id="share-modal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="share-modal-backdrop"></div>
        
        <!-- Modal Content -->
        <div class="relative w-full max-w-md bg-white rounded-[20px] shadow-2xl overflow-hidden animate-fade-in-up">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <h3 class="text-xl font-black text-secondary">Share Event</h3>
                <button id="close-share-modal" class="text-gray-400 hover:text-secondary transition-colors">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>
            
            <div class="p-6">
                <p class="text-gray-500 text-sm mb-6 font-medium">Share this amazing event with your friends and family!</p>
                
                <div class="grid grid-cols-3 gap-4 mb-8">
                    <!-- Facebook -->
                    <button class="share-option flex flex-col items-center gap-2 group" data-platform="facebook">
                        <div class="size-14 rounded-full bg-[#1877F2]/10 flex items-center justify-center text-[#1877F2] group-hover:bg-[#1877F2] group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="facebook" class="w-6 h-6"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase text-gray-500 tracking-wider">Facebook</span>
                    </button>
                    
                    <!-- Messenger -->
                    <button class="share-option flex flex-col items-center gap-2 group" data-platform="messenger">
                        <div class="size-14 rounded-full bg-[#00B2FF]/10 flex items-center justify-center text-[#00B2FF] group-hover:bg-[#00B2FF] group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="message-circle" class="w-6 h-6"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase text-gray-500 tracking-wider">Messenger</span>
                    </button>
                    
                    <!-- WhatsApp -->
                    <button class="share-option flex flex-col items-center gap-2 group" data-platform="whatsapp">
                        <div class="size-14 rounded-full bg-[#25D366]/10 flex items-center justify-center text-[#25D366] group-hover:bg-[#25D366] group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="phone" class="w-6 h-6"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase text-gray-500 tracking-wider">WhatsApp</span>
                    </button>
                    
                    <!-- X (Twitter) -->
                    <button class="share-option flex flex-col items-center gap-2 group" data-platform="x">
                        <div class="size-14 rounded-full bg-black/10 flex items-center justify-center text-black group-hover:bg-black group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="twitter" class="w-6 h-6"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase text-gray-500 tracking-wider">X</span>
                    </button>
                    
                    <!-- LinkedIn -->
                    <button class="share-option flex flex-col items-center gap-2 group" data-platform="linkedin">
                        <div class="size-14 rounded-full bg-[#0A66C2]/10 flex items-center justify-center text-[#0A66C2] group-hover:bg-[#0A66C2] group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="linkedin" class="w-6 h-6"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase text-gray-500 tracking-wider">LinkedIn</span>
                    </button>
                    
                    <!-- Email -->
                    <button class="share-option flex flex-col items-center gap-2 group" data-platform="email">
                        <div class="size-14 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 group-hover:bg-secondary group-hover:text-white transition-all shadow-inner">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <span class="text-[10px] font-black uppercase text-gray-500 tracking-wider">Email</span>
                    </button>
                </div>
                
                <!-- Copy Link -->
                <div class="bg-slate-50 border border-gray-100 rounded-[10px] p-2 flex items-center gap-2">
                    <input type="text" id="share-url" readonly value="https://eventsbox.com.au/gaurav-gupta-perth-2026" class="bg-transparent border-none focus:ring-0 text-gray-600 text-xs font-medium flex-1 px-2">
                    <button id="copy-link-btn" class="bg-secondary text-white px-4 py-2 rounded-[8px] font-black text-[10px] uppercase tracking-wider hover:bg-primary transition-all flex items-center gap-2">
                        <i data-lucide="copy" class="w-3 h-3"></i>
                        Copy Link
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Content & Sidebar -->
    <section class="py-12 md:py-20 bg-[#F8FAFC] relative overflow-hidden">
        <!-- Background Mesh Gradients -->
        <div class="absolute top-0 right-[-10%] w-[50%] h-[50%] bg-primary/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 left-[-10%] w-[50%] h-[50%] bg-blue-500/5 rounded-full blur-[120px]"></div>

        <div class="container mx-auto px-6 max-w-[1280px] relative z-10">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Description Side -->
                <div class="w-full lg:w-2/3">
                    <div class="mb-16">
                        <h2 class="text-3xl font-black text-secondary mb-8 flex items-center gap-4">
                            <span class="w-2 h-10 bg-primary rounded-full shadow-[0_0_15px_rgba(255,102,0,0.4)]"></span>
                            About the Event
                        </h2>
                        <div class="bg-white rounded-[10px] p-6 md:p-10 shadow-sm border border-gray-100/50">
                            <div class="text-gray-600 leading-relaxed space-y-6 text-lg">
                                <p>Perth, get ready to witness the king of observational comedy! <span class="text-secondary font-bold">Gaurav Gupta</span>, the man who finds humor in everyday Indian middle-class life, is bringing his highly anticipated world tour to Western Australia.</p>
                                <p>Known for his sharp wit and impeccable timing, Gaurav has captured millions of hearts through his viral videos and Netflix special. In this new show, he explores marriage, parenting, and the hilarious contradictions of living as an expat while keeping Indian values alive.</p>

                            </div>
                        </div>
                    </div>

                    <div class="mb-16">
                        <h2 class="text-3xl font-black text-secondary mb-8 flex items-center gap-4">
                            <span class="w-2 h-10 bg-primary rounded-full shadow-[0_0_15px_rgba(255,102,0,0.4)]"></span>
                            Venue Details
                        </h2>
                        <div class="bg-white rounded-[10px] overflow-hidden shadow-sm border border-gray-100/50">
                            <div class="w-full h-64 bg-slate-100 relative group overflow-hidden">
                                <div class="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none"></div>
                                <img src="assets/img/venue-placeholder.jpg" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 flex items-center justify-center z-20">
                                    <a href="#" class="bg-white text-secondary px-6 py-3 rounded-full font-bold shadow-xl border border-gray-100 flex items-center gap-2 hover:bg-primary hover:text-white transition-all transform hover:-translate-y-1">
                                        <i data-lucide="navigation" class="w-4 h-4"></i>
                                        Open in Maps
                                    </a>
                                </div>
                            </div>
                            <div class="p-6 md:p-10 flex flex-col md:flex-row items-center gap-10">
                                <div class="flex-1 space-y-6">
                                    <div class="flex items-start md:items-center gap-4">
                                        <div class="size-12 rounded-[10px] bg-primary/10 flex items-center justify-center text-primary">
                                            <i data-lucide="map-pinned" class="w-6 h-6"></i>
                                        </div>
                                        <div>
                                            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Address</p>
                                            <p class="font-bold text-secondary text-lg">Perth Convention and Exhibition Centre</p>
                                            <p class="text-gray-500">21 Mounts Bay Rd, Perth WA 6000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-px h-24 bg-gray-100 hidden md:block"></div>
                                <div class="flex-shrink-0">
                                    <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-bold text-xs border border-green-200 uppercase tracking-widest">Accessible Venue</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <h2 class="text-3xl font-black text-secondary mb-8 flex items-center gap-4">
                            <span class="w-2 h-10 bg-primary rounded-full shadow-[0_0_15px_rgba(255,102,0,0.4)]"></span>
                            Organizer
                        </h2>
                        <div class="bg-white rounded-[10px] p-6 md:p-10 shadow-sm border border-gray-100/50 flex flex-col md:flex-row items-center gap-8">
                            <div class="size-24 rounded-[10px] bg-slate-50 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden p-4 relative group">
                                <img src="assets/img/logo-dark.svg" class="w-full grayscale group-hover:grayscale-0 transition-all duration-500">
                            </div>
                            <div class="text-center md:text-left flex-1">
                                <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                                    <h4 class="font-black text-2xl text-secondary">EventsBox Promotions</h4>
                                    <i data-lucide="check-circle-2" class="w-5 h-5 text-blue-500 fill-blue-500/10"></i>
                                </div>
                                <p class="text-gray-500 mb-6 max-w-md">Premium events across Australia and New Zealand. Delivering unforgettable experiences since 2015.</p>
                                <div class="flex flex-wrap items-center justify-center md:justify-start gap-4">
                                    <a href="#" class="bg-secondary text-white px-6 py-3 rounded-[10px] font-bold text-sm hover:bg-primary transition-all flex items-center gap-2">
                                        View Profile
                                        <i data-lucide="external-link" class="w-4 h-4"></i>
                                    </a>
                                    <a href="#" class="border border-gray-100 text-secondary px-6 py-3 rounded-[10px] font-bold text-sm hover:bg-slate-50 transition-all flex items-center gap-2">
                                        Contact Organizer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Sidebar -->
                <div class="w-full lg:w-1/3 relative">
                    <div class="sticky top-10 space-y-8">
                        <!-- Ticket Card -->
                        <div class="relative group animate-fade-in-up" style="animation-delay: 0.4s;">
                            <!-- Glow Background -->
                            <div class="absolute -inset-2 bg-gradient-to-br from-primary/10 to-blue-600/10 rounded-[10px] blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
                            
                            <div class="relative bg-white/70 backdrop-blur-xl rounded-[10px] border border-white/40 shadow-[0_20px_50px_rgba(0,0,0,0.05)] overflow-hidden">
                                <!-- Status Header -->
                                <div class="bg-orange-600 text-white py-3 px-6 text-center text-[10px] font-black uppercase tracking-[0.2em] flex items-center justify-center gap-2 animate-pulse">
                                    <span class="size-2 bg-white rounded-full animate-ping"></span>
                                    Selling Fast! 90% Booked
                                </div>

                                <div class="p-8">
                                    <h4 class="text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-6">Available Tickets</h4>
                                    
                                    <div class="space-y-4 mb-8">
                                        <!-- Reserve 1 -->
                                        <div class="flex items-center justify-between pb-4 border-b border-gray-100/50">
                                            <span class="font-bold text-secondary">Reserve 1</span>
                                            <span class="text-primary font-black">$109.00</span>
                                        </div>
                                        <!-- Reserve 2 -->
                                        <div class="flex items-center justify-between pb-4 border-b border-gray-100/50">
                                            <span class="font-bold text-secondary">Reserve 2</span>
                                            <span class="text-primary font-black">$89.00</span>
                                        </div>
                                        <!-- Reserve 3 -->
                                        <div class="flex items-center justify-between pb-4 border-b border-gray-100/50">
                                            <span class="font-bold text-secondary">Reserve 3</span>
                                            <span class="text-primary font-black">$75.00</span>
                                        </div>
                                        <!-- Reserve 4 -->
                                        <div class="flex items-center justify-between pb-4 border-b border-gray-100/50">
                                            <span class="font-bold text-secondary">Reserve 4</span>
                                            <span class="text-primary font-black">$49.00</span>
                                        </div>
                                    </div>

                                    <a href="cart.php" class="w-full bg-primary text-white py-4 rounded-[10px] font-black text-xs uppercase tracking-[0.2em] hover:bg-white hover:text-black transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3 group/btn">
                                        Get Tickets
                                        <i data-lucide="ticket" class="w-5 h-5 group-hover:rotate-12 transition-transform"></i>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Mobile Floating Booking Bar -->
<div class="fixed bottom-0 left-0 right-0 bg-white/80 backdrop-blur-xl border-t border-gray-100 p-4 z-50 lg:hidden transform translate-y-0 transition-transform duration-300 shadow-[0_-10px_30px_rgba(0,0,0,0.1)]">
    <div class="container mx-auto flex items-center justify-between gap-4">
        <div>
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-none mb-1">Starts from</p>
            <span class="text-xl font-black text-secondary">$49.00</span>
        </div>
        <a href="cart.php" class="flex-1 bg-primary text-white py-4 rounded-[10px] font-black text-xs uppercase tracking-widest flex items-center justify-center gap-3 shadow-lg shadow-primary/20">
            Get Tickets
            <i data-lucide="ticket" class="w-5 h-5"></i>
        </a>
    </div>
</div>

<style>
    @keyframes float-sidebar {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    .sticky-float {
        animation: float-sidebar 4s ease-in-out infinite;
    }
    @keyframes blob-animation {
        0%, 100% { transform: translate(0px, 0px) scale(1); }
        33% { transform: translate(30px, -50px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    @keyframes shimmer {
        100% { transform: translateX(100%); }
    }
    .animate-shimmer {
        animation: shimmer 2s infinite;
    }
    .animate-blob {
        animation: blob-animation 7s infinite;
    }
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    .animation-delay-4000 {
        animation-delay: 4s;
    }
    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
        opacity: 0;
    }
    /* Share Modal Animation */
    @keyframes fade-in-up {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>

<script>
    // Share Modal Logic
    const shareBtn = document.getElementById('share-event-btn');
    const shareModal = document.getElementById('share-modal');
    const closeShareModal = document.getElementById('close-share-modal');
    const shareModalBackdrop = document.getElementById('share-modal-backdrop');
    const copyLinkBtn = document.getElementById('copy-link-btn');
    const shareUrlInput = document.getElementById('share-url');
    const shareOptions = document.querySelectorAll('.share-option');

    const eventUrl = window.location.href;
    const eventText = 'Check out Standup Comedy by Gaurav Gupta Live in Perth 2026 on EventsBox!';
    
    // Set current URL in input
    shareUrlInput.value = eventUrl;

    const openModal = () => {
        shareModal.classList.remove('hidden');
        shareModal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    };

    const closeModal = () => {
        shareModal.classList.add('hidden');
        shareModal.classList.remove('flex');
        document.body.style.overflow = 'auto';
    };

    shareBtn?.addEventListener('click', openModal);
    closeShareModal?.addEventListener('click', closeModal);
    shareModalBackdrop?.addEventListener('click', closeModal);

    // Copy Link
    copyLinkBtn?.addEventListener('click', () => {
        shareUrlInput.select();
        document.execCommand('copy');
        
        const originalText = copyLinkBtn.innerHTML;
        copyLinkBtn.innerHTML = '<i data-lucide="check" class="w-3 h-3"></i> Copied!';
        lucide.createIcons();
        
        setTimeout(() => {
            copyLinkBtn.innerHTML = originalText;
            lucide.createIcons();
        }, 2000);
    });

    // Share Options
    shareOptions.forEach(option => {
        option.addEventListener('click', () => {
            const platform = option.getAttribute('data-platform');
            let url = '';
            
            switch(platform) {
                case 'facebook':
                    url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(eventUrl)}`;
                    break;
                case 'messenger':
                    // Messenger sharing is tricky on desktop without App ID, but we can try the direct share link
                    url = `fb-messenger://share/?link=${encodeURIComponent(eventUrl)}`;
                    // Fallback for desktop if it doesn't open
                    if (!url.startsWith('fb-messenger')) {
                         url = `https://www.facebook.com/dialog/send?link=${encodeURIComponent(eventUrl)}&app_id=217702742150205&redirect_uri=${encodeURIComponent(eventUrl)}`;
                    }
                    break;
                case 'whatsapp':
                    url = `https://api.whatsapp.com/send?text=${encodeURIComponent(eventText + ' ' + eventUrl)}`;
                    break;
                case 'x':
                    url = `https://twitter.com/intent/tweet?url=${encodeURIComponent(eventUrl)}&text=${encodeURIComponent(eventText)}`;
                    break;
                case 'linkedin':
                    url = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(eventUrl)}`;
                    break;
                case 'email':
                    url = `mailto:?subject=${encodeURIComponent(eventText)}&body=${encodeURIComponent('Check it out here: ' + eventUrl)}`;
                    break;
            }
            
            if (url) {
                window.open(url, '_blank', 'width=600,height=400');
            }
        });
    });
</script>

<?php include 'inc/footer.php'; ?>
