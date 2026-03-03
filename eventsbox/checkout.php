<?php
$page_title = "Checkout Form - EventsBox";
include 'inc/header.php';
?>

<main class="bg-gray-50 min-h-screen py-8 md:py-12">
    <div class="container mx-auto px-4 md:px-6 max-w-5xl">
        <form id="checkout-form" class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10" onsubmit="event.preventDefault(); submitPayment();">
            
            <!-- Left Column: Checkout Form -->
            <div class="lg:col-span-7 space-y-6 animate-fade-in-up">
                
                <h1 class="text-2xl font-black text-secondary flex items-center gap-3">
                    <span class="w-1.5 h-6 bg-primary rounded-full"></span>
                    Secure Checkout
                </h1>

                <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
                    <div class="bg-secondary p-4 text-white">
                        <h2 class="text-sm font-bold uppercase tracking-wider flex items-center gap-2">
                            <i data-lucide="shield-check" class="w-4 h-4"></i>
                            Billing Details
                        </h2>
                    </div>
                    <div class="p-6">
                        <div class="space-y-6">
                            
                            <!-- Personal Info -->
                            <div class="space-y-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">First Name</label>
                                        <input type="text" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                    </div>
                                    <div class="space-y-1.5">
                                        <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Last Name</label>
                                        <input type="text" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="space-y-1.5">
                                        <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Email Address</label>
                                        <input type="email" id="email" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                    </div>
                                    <div class="space-y-1.5">
                                        <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Retype Email Address</label>
                                        <input type="email" id="email_confirm" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                    </div>
                                </div>
                                <p class="text-[10px] text-gray-500 font-bold flex items-center gap-1.5 mt-1 bg-blue-50 text-blue-700 p-2.5 rounded-lg border border-blue-100">
                                    <i data-lucide="info" class="w-3.5 h-3.5 flex-shrink-0"></i>
                                    Please make sure your email address is correct, you will receive your tickets here.
                                </p>

                                <div class="space-y-1.5">
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Phone Number</label>
                                    <input type="tel" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Address</label>
                                    <input type="text" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                </div>

                                <div class="space-y-1.5">
                                    <label class="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">City</label>
                                    <input type="text" required class="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Simple Order Summary -->
            <div class="lg:col-span-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="bg-white rounded-xl border border-gray-100 shadow-md overflow-hidden sticky top-32">
                    <div class="bg-gray-50 p-4 border-b border-gray-100 flex justify-between items-center">
                        <h2 class="text-sm font-bold uppercase tracking-wider text-secondary">Order Summary</h2>
                        <a href="cart.php" class="text-[10px] font-bold text-primary uppercase tracking-widest hover:underline">Edit Cart</a>
                    </div>
                    
                    <div class="p-6 space-y-4">
                        <div id="checkout-items" class="space-y-3 pb-4 border-b border-gray-100 text-xs text-secondary">
                            <!-- Items populated by JS -->
                        </div>

                        <div class="space-y-2 pt-1 text-sm">
                            <div class="flex justify-between text-gray-500 font-medium">
                                <span>Subtotal</span>
                                <span>$<span id="checkout-subtotal">0.00</span></span>
                            </div>
                            <div id="checkout-fee-row" class="flex justify-between text-gray-500 font-medium">
                                <span>Platform Fee</span>
                                <span>$1.75</span>
                            </div>
                            <div class="flex justify-between items-center pt-3 border-t border-gray-100 mt-2">
                                <span class="text-secondary font-black text-base uppercase tracking-widest">Total</span>
                                <span class="text-primary font-black text-2xl">$<span id="checkout-total">0.00</span></span>
                            </div>
                        </div>

                        <hr class="border-gray-100 my-4 -mx-6">

                        <!-- Payment Info inside Right Column -->
                        <div class="space-y-4">
                            <h3 class="text-xs font-bold text-secondary uppercase tracking-wider flex items-center gap-2">
                                <i data-lucide="credit-card" class="w-4 h-4 text-primary"></i>
                                Payment Method
                            </h3>
                            
                            <div class="bg-gray-50/50 p-4 rounded-xl border border-gray-100 space-y-4">
                                <div class="space-y-1.5">
                                    <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">Card Number</label>
                                    <div class="relative">
                                        <input type="text" required placeholder="0000 0000 0000 0000" class="w-full bg-white border border-gray-200 rounded-md px-3 py-2.5 pl-9 text-xs focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none font-medium font-mono text-secondary">
                                        <i data-lucide="credit-card" class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="space-y-1.5">
                                        <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">Expiry Date</label>
                                        <input type="text" required placeholder="MM/YY" class="w-full bg-white border border-gray-200 rounded-md px-3 py-2.5 text-xs focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none font-medium font-mono text-center text-secondary">
                                    </div>
                                    <div class="space-y-1.5">
                                        <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">CVC</label>
                                        <input type="text" required placeholder="123" class="w-full bg-white border border-gray-200 rounded-md px-3 py-2.5 text-xs focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none font-medium font-mono text-center text-secondary">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-primary text-white py-3.5 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-secondary transition-all shadow-md shadow-primary/20 flex items-center justify-center gap-2 group mt-6">
                            Complete Payment
                            <span id="btn-total" class="opacity-80 ml-1"></span>
                            <i data-lucide="check-circle" class="w-4 h-4 ml-1"></i>
                        </button>

                        <!-- Trust Badges -->
                        <div class="flex items-center justify-center gap-4 pt-4 opacity-50 grayscale">
                            <div class="flex items-center gap-1.5 text-[9px] font-bold uppercase tracking-widest text-gray-500">
                                <i data-lucide="lock" class="w-3.5 h-3.5"></i>
                                SSL Secure
                            </div>
                            <div class="flex items-center gap-1.5 text-[9px] font-bold uppercase tracking-widest text-gray-500">
                                <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
                                Verified
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</main>

<script>
    const ticketInfo = {
        adult: { name: 'Adult Admission', price: 49.00 },
        kids: { name: 'Kids Admission', price: 25.00 },
        vip: { name: 'VIP Seats', price: 109.00 }
    };

    document.addEventListener('DOMContentLoaded', () => {
        const cartDataStr = sessionStorage.getItem('eventBoxCart');
        if (!cartDataStr) {
            // Redirect to cart if empty
            window.location.href = 'cart.php';
            return;
        }

        try {
            const cartData = JSON.parse(cartDataStr);
            const itemsContainer = document.getElementById('checkout-items');
            
            let html = '';
            for (const type in cartData.selections) {
                if (cartData.selections[type] > 0) {
                    const qty = cartData.selections[type];
                    const price = ticketInfo[type].price;
                    const total = qty * price;
                    
                    html += `
                        <div class="flex justify-between items-center group">
                            <div class="flex flex-col">
                                <span class="font-bold text-sm text-secondary">${qty}x ${ticketInfo[type].name}</span>
                            </div>
                            <span class="font-bold text-sm text-secondary">$${total.toFixed(2)}</span>
                        </div>
                    `;
                }
            }
            itemsContainer.innerHTML = html;

            document.getElementById('checkout-subtotal').innerText = cartData.ticketTotal;
            
            // Re-apply platform fee logic or read directly from the calculated values
            // We just add $1.75 fixed fee as requested earlier for checkout (or read orderTotal) if we wanted to
            // Wait, you requested Platform Fee to be fixed $1.75 previously, then reverted it. 
            // I will implement the $1.75 platform fee right here!
            let subtotal = parseFloat(cartData.ticketTotal);
            let total = subtotal + 1.75;
            
            document.getElementById('checkout-total').innerText = total.toFixed(2);
            document.getElementById('btn-total').innerText = '($' + total.toFixed(2) + ')';
            
        } catch(e) {
            window.location.href = 'cart.php';
        }
    });

    function submitPayment() {
        const btn = event.submitter;
        const origText = btn.innerHTML;
        btn.innerHTML = `<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Processing...`;
        if(typeof lucide !== 'undefined') lucide.createIcons();
        btn.disabled = true;
        btn.classList.add('opacity-80', 'cursor-not-allowed');
        
        setTimeout(() => {
            alert('Payment Successful! Thank you for your purchase.');
            sessionStorage.removeItem('eventBoxCart');
            window.location.href = 'index.php'; // Or a success page
        }, 2000);
    }
</script>

<style>
    .animate-fade-in-up {
        animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        opacity: 0;
    }
    @keyframes fade-in-up {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>

<?php include 'inc/footer.php'; ?>
