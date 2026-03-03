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
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Contact Us</h1>
            <p class="text-white/70 text-lg md:text-xl max-w-2xl mx-auto">
                Have questions or need assistance? Our team is here to help you with anything you need. Get in touch with EventsBox today.
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="py-24 bg-slate-50 relative -mt-6">
        <div class="container mx-auto px-6 max-w-[1280px]">
            <div class="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden relative z-10 flex flex-col lg:flex-row">
                
                <!-- Contact Info Panel (Left) -->
                <div class="w-full lg:w-1/3 bg-secondary p-10 md:p-14 text-white relative overflow-hidden">
                    <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
                    
                    <h3 class="text-3xl font-black mb-10 relative z-10">Get in touch</h3>
                    
                    <div class="space-y-10 relative z-10">
                        <div class="flex items-start gap-5 group">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Visit Us</h4>
                                <p class="text-white/70 leading-relaxed">Melbourne, Victoria,<br/>Australia</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5 group">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all shrink-0">
                                <i data-lucide="phone" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Call Us</h4>
                                <p class="text-white/70 leading-relaxed">(+61) 470119587<br/><span class="text-white/40 text-sm">Mon-Fri 9am to 6pm</span></p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5 group">
                            <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all shrink-0">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg mb-2">Email Us</h4>
                                <p class="text-white/70 leading-relaxed">hello@eventsbox.com.au</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16 flex gap-4 relative z-10">
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all">
                            <i data-lucide="twitter" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Form (Right) -->
                <div class="w-full lg:w-2/3 p-10 md:p-14 lg:p-16 relative">
                    <h3 class="text-3xl font-black text-secondary mb-2">Send us a Message</h3>
                    <p class="text-gray-500 mb-10">Fill out the form below and we will get back to you within 24 hours.</p>

                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="first_name" class="block text-sm font-bold text-secondary">First Name</label>
                                <input type="text" id="first_name" name="first_name" placeholder="John" class="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" required>
                            </div>
                            <div class="space-y-2">
                                <label for="last_name" class="block text-sm font-bold text-secondary">Last Name</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Doe" class="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="email" class="block text-sm font-bold text-secondary">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com" class="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" required>
                            </div>
                            <div class="space-y-2">
                                <label for="phone" class="block text-sm font-bold text-secondary">Phone Number (Optional)</label>
                                <input type="tel" id="phone" name="phone" placeholder="+61 123 456 789" class="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label for="message" class="block text-sm font-bold text-secondary">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Write your message here..." class="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium resize-y max-h-64" required></textarea>
                        </div>

                        <button type="submit" class="w-full sm:w-auto px-10 py-5 bg-primary text-white font-bold rounded-[10px] shadow-xl shadow-primary/20 hover:bg-opacity-90 hover:-translate-y-1 transition-all flex items-center justify-center gap-3 group">
                            <span>Send Message</span>
                            <i data-lucide="send" class="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>

            </div>
            
            <!-- Map Section -->
            <div class="mt-16 rounded-[20px] overflow-hidden shadow-sm border border-gray-100 h-[450px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6301.2276138238985!2d144.660126!3d-37.845926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad68fbd01a700f7%3A0x92048aa707a3d974!2sEventsBox!5e0!3m2!1sen!2sus!4v1772267808148!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'; ?>
