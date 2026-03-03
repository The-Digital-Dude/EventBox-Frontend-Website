<?php
$page_title = "Checkout - EventsBox";
include 'inc/header.php';
?>

<main class="bg-gray-50 min-h-screen py-8 md:py-12">
    <div class="container mx-auto px-4 md:px-6 max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10">
            
            <!-- Left Column: Event Details & Ticket Selection -->
            <div class="lg:col-span-7 space-y-6 animate-fade-in-up">
                <!-- Event Identity Card -->
                <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm flex flex-col sm:flex-row gap-5 items-start">
                    <div class="hidden sm:block w-24 md:w-28 lg:w-32 aspect-[3/4] rounded-lg overflow-hidden shadow-sm flex-shrink-0">
                        <img src="assets/img/gaurav-gupta.jpg" alt="Event Poster" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1">
                        <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary/10 text-primary text-[9px] font-bold uppercase tracking-wider mb-3">
                            <i data-lucide="calendar" class="w-3 h-3"></i>
                            May 15, 2026
                        </div>
                        <h1 class="text-lg md:text-2xl font-bold text-secondary mb-3 leading-tight">Standup Comedy by Gaurav Gupta Live in Perth</h1>
                        <div class="space-y-1.5 text-xs text-gray-500 font-medium">
                            <p class="flex items-center gap-2">
                                <i data-lucide="clock" class="w-3.5 h-3.5 text-primary"></i>
                                07:00 PM - 09:30 PM
                            </p>
                            <p class="flex items-center gap-2 leading-relaxed">
                                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-primary"></i>
                                Perth Convention and Exhibition Centre, Perth WA
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Ticket Selection Section -->
                <div>
                    <h2 class="text-lg font-bold text-secondary mb-4 flex items-center gap-2">
                        <span class="w-1 h-5 bg-primary rounded-full"></span>
                        Select Tickets
                    </h2>

                    <div class="space-y-3">
                        <!-- VIP Ticket Card -->
                        <div class="bg-white rounded-lg p-4 border border-gray-100 flex items-center justify-between group transition-all hover:border-primary/20 shadow-sm relative overflow-hidden">
                            
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-md bg-yellow-50 flex items-center justify-center text-yellow-600 group-hover:bg-yellow-100 transition-colors">
                                    <i data-lucide="armchair" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-0.5">
                                        <h3 class="font-bold text-secondary text-sm">VIP Seats</h3>
                                    </div>
                                    <p class="text-primary font-bold text-sm">$109.00</p>
                                </div>
                            </div>
                            
                            <div class="flex flex-col sm:flex-row items-center gap-2">
                                <button id="add-btn-vip" onclick="openSeatingMap()" class="bg-primary text-white px-4 py-2 rounded-md font-bold text-[10px] uppercase tracking-wider hover:bg-secondary transition-all shadow-sm flex items-center gap-1.5">
                                    <i data-lucide="layout-grid" class="w-3.5 h-3.5"></i>
                                    Select Seats
                                </button>
                                <div id="edit-vip" class="hidden flex items-center gap-2">
                                    <span id="vip-selected-summary" class="text-xs font-bold text-secondary bg-gray-50 px-2 py-1 rounded border border-gray-200"></span>
                                    <button onclick="openSeatingMap()" class="text-primary hover:text-secondary underline text-xs font-bold">Edit</button>
                                </div>
                            </div>
                        </div>

                        <!-- Adult Ticket Card -->
                        <div class="bg-white rounded-lg p-4 border border-gray-100 flex items-center justify-between group transition-all hover:border-primary/20 shadow-sm">
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-md bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-primary transition-colors">
                                    <i data-lucide="ticket" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-secondary text-sm">Adult Admission</h3>
                                    <p class="text-primary font-bold text-sm">$49.00</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div id="qty-container-adult" class="flex items-center bg-gray-50 rounded-md p-0.5 border border-gray-200">
                                    <button onclick="updateQty('adult', -1)" class="size-7 flex items-center justify-center bg-white shadow-sm text-primary hover:bg-primary hover:text-white rounded transition-all">
                                        <i data-lucide="minus" class="w-3.5 h-3.5"></i>
                                    </button>
                                    <span id="qty-adult" class="w-8 text-center font-bold text-secondary text-sm">0</span>
                                    <button onclick="updateQty('adult', 1)" class="size-7 flex items-center justify-center bg-white shadow-sm text-primary hover:bg-primary hover:text-white rounded transition-all">
                                        <i data-lucide="plus" class="w-3.5 h-3.5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kids Ticket Card -->
                        <div class="bg-white rounded-lg p-4 border border-gray-100 flex items-center justify-between group transition-all hover:border-primary/20 shadow-sm">
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-md bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-primary transition-colors">
                                    <i data-lucide="ticket" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-secondary text-sm">Kids Admission</h3>
                                    <p class="text-primary font-bold text-sm">$25.00</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-2">
                                <div id="qty-container-kids" class="flex items-center bg-gray-50 rounded-md p-0.5 border border-gray-200">
                                    <button onclick="updateQty('kids', -1)" class="size-7 flex items-center justify-center bg-white shadow-sm text-primary hover:bg-primary hover:text-white rounded transition-all">
                                        <i data-lucide="minus" class="w-3.5 h-3.5"></i>
                                    </button>
                                    <span id="qty-kids" class="w-8 text-center font-bold text-secondary text-sm">0</span>
                                    <button onclick="updateQty('kids', 1)" class="size-7 flex items-center justify-center bg-white shadow-sm text-primary hover:bg-primary hover:text-white rounded transition-all">
                                        <i data-lucide="plus" class="w-3.5 h-3.5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sticky Pricing Overview -->
            <div class="lg:col-span-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                <div class="bg-white rounded-xl border border-gray-100 shadow-md overflow-hidden sticky top-32">
                    <div class="bg-secondary p-4 text-white">
                        <h2 class="text-base font-bold uppercase tracking-wider">Order Summary</h2>
                    </div>
                    
                    <div class="p-6 space-y-5">
                        <!-- Summary Items -->
                        <div id="summary-items" class="space-y-3 pb-4 border-b border-gray-100 text-xs text-secondary">
                            <p id="empty-cart-msg" class="text-gray-400 italic">No tickets selected yet.</p>
                            <!-- Dynamic items will appear here -->
                        </div>

                        <!-- Coupon Input -->
                        <div class="relative">
                            <input type="text" placeholder="Coupon Code" class="w-full bg-gray-50 border border-gray-100 rounded-lg px-3 py-2.5 text-xs font-medium focus:ring-2 focus:ring-primary/20 focus:outline-none transition-all">
                            <button class="absolute right-1.5 top-1.5 bottom-1.5 bg-secondary text-white px-3 rounded-md text-[9px] font-bold uppercase tracking-wider hover:bg-primary transition-all">
                                Apply
                            </button>
                        </div>

                        <!-- Subtotal & Total -->
                        <div class="space-y-2 pt-1">
                            <div class="flex justify-between text-xs text-gray-500 font-bold">
                                <span>Subtotal</span>
                                <span>$<span id="subtotal">0.00</span></span>
                            </div>
                            <div class="flex justify-between items-center pt-3 border-t border-gray-100">
                                <span class="text-secondary font-bold text-sm">Order Total</span>
                                <span class="text-primary font-bold text-xl">$<span id="order-total">0.00</span></span>
                            </div>
                        </div>

                        <!-- Pay Button -->
                        <button onclick="goToCheckout()" class="w-full bg-primary text-white py-3.5 rounded-lg font-bold text-xs uppercase tracking-wider hover:bg-secondary transition-all shadow-md shadow-primary/20 flex items-center justify-center gap-2 group">
                            Continue To Checkout
                            <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </button>

                        <!-- Trust Badges -->
                        <div class="flex items-center justify-center gap-3 pt-2 opacity-50 grayscale hover:grayscale-0 transition-all">
                            <div class="flex items-center gap-1 text-[8px] font-bold uppercase tracking-widest text-gray-500">
                                <i data-lucide="lock" class="w-3 h-3"></i>
                                SSL Secure
                            </div>
                            <div class="flex items-center gap-1 text-[8px] font-bold uppercase tracking-widest text-gray-500">
                                <i data-lucide="shield-check" class="w-3 h-3"></i>
                                Verified
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Seating Map Modal -->
<div id="seatingModal" class="fixed inset-0 z-[100] hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-2 md:p-4 xl:p-8">
    <div class="bg-white w-full max-w-5xl rounded-2xl shadow-2xl flex flex-col max-h-[95vh] xl:max-h-[90vh] overflow-hidden relative">
        <div class="modal-header p-3 sm:p-4 border-b border-gray-100 flex justify-between items-center bg-white shrink-0 z-20 shadow-sm relative">
            <h3 class="font-black text-secondary text-base sm:text-lg">Select VIP Seats</h3>
            <button id="closeModal" class="modal-close bg-gray-100 hover:bg-gray-200 text-secondary w-8 h-8 rounded-full flex items-center justify-center transition-colors" type="button">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
        
        <div class="px-6 pt-0 pb-2 overflow-y-auto overflow-x-hidden flex-1 bg-gray-50 min-h-0 relative z-0">
                <div class="legend flex justify-center gap-2 sm:gap-4 flex-wrap mb-0 p-3 sm:p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                    <span class="legend-item flex items-center gap-1.5 sm:gap-2 text-[10px] sm:text-xs font-bold text-gray-600"><span class="w-3 h-3 rounded-[3px] bg-[#e5e7eb]"></span>Available</span>
                    <span class="legend-item flex items-center gap-1.5 sm:gap-2 text-[10px] sm:text-xs font-bold text-gray-600"><span class="w-3 h-3 rounded-[3px] bg-primary shadow-sm shadow-primary/20"></span>Your Cart</span>
                    <span class="legend-item flex items-center gap-1.5 sm:gap-2 text-[10px] sm:text-xs font-bold text-gray-600"><span class="w-3 h-3 rounded-[3px] bg-[#fcd34d]"></span>In Other's Cart</span>
                    <span class="legend-item flex items-center gap-1.5 sm:gap-2 text-[10px] sm:text-xs font-bold text-gray-600"><span class="w-3 h-3 rounded-[3px] bg-red-100 border border-red-200"></span>Booked</span>
                    <span class="legend-item flex items-center gap-1.5 sm:gap-2 text-[10px] sm:text-xs font-bold text-gray-600"><span class="w-3 h-3 rounded-[3px] bg-gray-300"></span>Disabled</span>
                </div>

                <div class="overflow-x-auto pb-2 relative custom-scrollbar">
                    <div class="w-max mx-auto bg-white p-4 md:p-8 rounded-2xl shadow-sm border border-gray-100">
                        <div class="stage bg-secondary text-white text-center py-3 mb-8 w-[60%] max-w-[300px] mx-auto rounded-b-2xl font-black tracking-[0.3em] text-sm shadow-lg shadow-secondary/20">STAGE</div>
                        
                        <div id="columnsView" class="columns flex gap-4 sm:gap-6 justify-center">
                            <!-- Left Block -->
                            <div class="section-block">
                                <div class="section-layout flex gap-2 sm:gap-4">
                                    <div class="section-rows flex flex-col gap-[8px] justify-between sticky left-0 z-10 bg-white pr-1 sm:pr-2">
                                        <div class="row-label text-xs font-bold text-gray-400 h-[18px] flex items-center">G</div>
                                        <div class="row-label text-xs font-bold text-gray-400 h-[18px] flex items-center">H</div>
                                        <div class="row-label text-xs font-bold text-gray-400 h-[18px] flex items-center">I</div>
                                        <div class="row-label text-xs font-bold text-gray-400 h-[18px] flex items-center">J</div>
                                        <div class="row-label text-xs font-bold text-gray-400 h-[18px] flex items-center">K</div>
                                        <div class="row-label text-xs font-bold text-gray-400 h-[18px] flex items-center">L</div>
                                    </div>
                                    <div class="section-columns flex gap-4">
                                        <!-- Block 1 -->
                                        <div class="column">
                                            <div class="rows flex flex-col gap-[8px]">
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(8, 18px);"><div class="seat" data-seat-id="VIP-G1">G1</div><div class="seat" data-seat-id="VIP-G2">G2</div><div class="seat" data-seat-id="VIP-G3">G3</div><div class="seat" data-seat-id="VIP-G4">G4</div><div class="seat" data-seat-id="VIP-G5">G5</div><div class="seat" data-seat-id="VIP-G6">G6</div><div class="seat" data-seat-id="VIP-G7">G7</div><div class="seat" data-seat-id="VIP-G8">G8</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(8, 18px);"><div class="seat" data-seat-id="VIP-H1">H1</div><div class="seat" data-seat-id="VIP-H2">H2</div><div class="seat" data-seat-id="VIP-H3">H3</div><div class="seat" data-seat-id="VIP-H4">H4</div><div class="seat" data-seat-id="VIP-H5">H5</div><div class="seat" data-seat-id="VIP-H6">H6</div><div class="seat" data-seat-id="VIP-H7">H7</div><div class="seat" data-seat-id="VIP-H8">H8</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(8, 18px);"><div class="seat" data-seat-id="VIP-I1">I1</div><div class="seat" data-seat-id="VIP-I2">I2</div><div class="seat" data-seat-id="VIP-I3">I3</div><div class="seat" data-seat-id="VIP-I4">I4</div><div class="seat" data-seat-id="VIP-I5">I5</div><div class="seat" data-seat-id="VIP-I6">I6</div><div class="seat" data-seat-id="VIP-I7">I7</div><div class="seat" data-seat-id="VIP-I8">I8</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(8, 18px);"><div class="seat" data-seat-id="VIP-J1">J1</div><div class="seat" data-seat-id="VIP-J2">J2</div><div class="seat" data-seat-id="VIP-J3">J3</div><div class="seat" data-seat-id="VIP-J4">J4</div><div class="seat" data-seat-id="VIP-J5">J5</div><div class="seat" data-seat-id="VIP-J6">J6</div><div class="seat" data-seat-id="VIP-J7">J7</div><div class="seat" data-seat-id="VIP-J8">J8</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(8, 18px);"><div class="seat" data-seat-id="VIP-K1">K1</div><div class="seat" data-seat-id="VIP-K2">K2</div><div class="seat" data-seat-id="VIP-K3">K3</div><div class="seat" data-seat-id="VIP-K4">K4</div><div class="seat" data-seat-id="VIP-K5">K5</div><div class="seat" data-seat-id="VIP-K6">K6</div><div class="seat" data-seat-id="VIP-K7">K7</div><div class="seat" data-seat-id="VIP-K8">K8</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(8, 18px);"><div class="seat" data-seat-id="VIP-L1">L1</div><div class="seat" data-seat-id="VIP-L2">L2</div><div class="seat" data-seat-id="VIP-L3">L3</div><div class="seat" data-seat-id="VIP-L4">L4</div><div class="seat" data-seat-id="VIP-L5">L5</div><div class="seat" data-seat-id="VIP-L6">L6</div><div class="seat" data-seat-id="VIP-L7">L7</div><div class="seat" data-seat-id="VIP-L8">L8</div></div></div>
                                            </div>
                                        </div>
                                        <!-- Block 2 -->
                                        <div class="column">
                                            <div class="rows flex flex-col gap-[8px]">
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(7, 18px);"><div class="seat" data-seat-id="VIP-G9">G9</div><div class="seat" data-seat-id="VIP-G10">G10</div><div class="seat" data-seat-id="VIP-G11">G11</div><div class="seat" data-seat-id="VIP-G12">G12</div><div class="seat" data-seat-id="VIP-G13">G13</div><div class="seat" data-seat-id="VIP-G14">G14</div><div class="seat" data-seat-id="VIP-G15">G15</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(7, 18px);"><div class="seat" data-seat-id="VIP-H9">H9</div><div class="seat" data-seat-id="VIP-H10">H10</div><div class="seat" data-seat-id="VIP-H11">H11</div><div class="seat" data-seat-id="VIP-H12">H12</div><div class="seat" data-seat-id="VIP-H13">H13</div><div class="seat" data-seat-id="VIP-H14">H14</div><div class="seat" data-seat-id="VIP-H15">H15</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(7, 18px);"><div class="seat" data-seat-id="VIP-I9">I9</div><div class="seat" data-seat-id="VIP-I10">I10</div><div class="seat" data-seat-id="VIP-I11">I11</div><div class="seat" data-seat-id="VIP-I12">I12</div><div class="seat" data-seat-id="VIP-I13">I13</div><div class="seat" data-seat-id="VIP-I14">I14</div><div class="seat" data-seat-id="VIP-I15">I15</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(7, 18px);"><div class="seat" data-seat-id="VIP-J9">J9</div><div class="seat" data-seat-id="VIP-J10">J10</div><div class="seat" data-seat-id="VIP-J11">J11</div><div class="seat" data-seat-id="VIP-J12">J12</div><div class="seat" data-seat-id="VIP-J13">J13</div><div class="seat" data-seat-id="VIP-J14">J14</div><div class="seat" data-seat-id="VIP-J15">J15</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(7, 18px);"><div class="seat" data-seat-id="VIP-K9">K9</div><div class="seat" data-seat-id="VIP-K10">K10</div><div class="seat" data-seat-id="VIP-K11">K11</div><div class="seat" data-seat-id="VIP-K12">K12</div><div class="seat" data-seat-id="VIP-K13">K13</div><div class="seat" data-seat-id="VIP-K14">K14</div><div class="seat" data-seat-id="VIP-K15">K15</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(7, 18px);"><div class="seat" data-seat-id="VIP-L9">L9</div><div class="seat" data-seat-id="VIP-L10">L10</div><div class="seat" data-seat-id="VIP-L11">L11</div><div class="seat" data-seat-id="VIP-L12">L12</div><div class="seat" data-seat-id="VIP-L13">L13</div><div class="seat" data-seat-id="VIP-L14">L14</div><div class="seat" data-seat-id="VIP-L15">L15</div></div></div>
                                            </div>
                                        </div>
                                        <!-- Block 3 -->
                                        <div class="column">
                                            <div class="rows flex flex-col gap-[8px]">
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(6, 18px);"><div class="seat" data-seat-id="VIP-G16">G16</div><div class="seat" data-seat-id="VIP-G17">G17</div><div class="seat" data-seat-id="VIP-G18">G18</div><div class="seat" data-seat-id="VIP-G19">G19</div><div class="seat" data-seat-id="VIP-G20">G20</div><div class="seat" data-seat-id="VIP-G21">G21</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(6, 18px);"><div class="seat" data-seat-id="VIP-H16">H16</div><div class="seat" data-seat-id="VIP-H17">H17</div><div class="seat" data-seat-id="VIP-H18">H18</div><div class="seat" data-seat-id="VIP-H19">H19</div><div class="seat" data-seat-id="VIP-H20">H20</div><div class="seat" data-seat-id="VIP-H21">H21</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(6, 18px);"><div class="seat" data-seat-id="VIP-I16">I16</div><div class="seat" data-seat-id="VIP-I17">I17</div><div class="seat" data-seat-id="VIP-I18">I18</div><div class="seat" data-seat-id="VIP-I19">I19</div><div class="seat" data-seat-id="VIP-I20">I20</div><div class="seat" data-seat-id="VIP-I21">I21</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(6, 18px);"><div class="seat" data-seat-id="VIP-J16">J16</div><div class="seat" data-seat-id="VIP-J17">J17</div><div class="seat" data-seat-id="VIP-J18">J18</div><div class="seat" data-seat-id="VIP-J19">J19</div><div class="seat" data-seat-id="VIP-J20">J20</div><div class="seat" data-seat-id="VIP-J21">J21</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(6, 18px);"><div class="seat" data-seat-id="VIP-K16">K16</div><div class="seat" data-seat-id="VIP-K17">K17</div><div class="seat" data-seat-id="VIP-K18">K18</div><div class="seat" data-seat-id="VIP-K19">K19</div><div class="seat" data-seat-id="VIP-K20">K20</div><div class="seat" data-seat-id="VIP-K21">K21</div></div></div>
                                                <div class="seat-row"><div class="seats-grid grid gap-[2px]" style="grid-template-columns: repeat(6, 18px);"><div class="seat" data-seat-id="VIP-L16">L16</div><div class="seat" data-seat-id="VIP-L17">L17</div><div class="seat" data-seat-id="VIP-L18">L18</div><div class="seat" data-seat-id="VIP-L19">L19</div><div class="seat" data-seat-id="VIP-L20">L20</div><div class="seat" data-seat-id="VIP-L21">L21</div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <p class="limit-note text-center text-red-500 font-bold text-xs mt-2">You are allowed to book a maximum of 20 ticket(s).</p>
            </div>
            
            <div class="checkout-bar bg-white border-t border-gray-200 p-3 sm:p-4 md:p-6 flex justify-between items-center shrink-0 shadow-[0_-10px_30px_rgba(0,0,0,0.05)] relative z-20">
                <span class="checkout-count font-bold text-gray-500 text-[10px] sm:text-xs md:text-base">Selected: <span id="selectedCount" class="text-secondary font-black text-sm sm:text-base md:text-xl ml-1 md:ml-2">0</span></span>
                <button class="checkout-button bg-primary text-white px-3 sm:px-6 md:px-8 py-2.5 sm:py-3 rounded-xl font-black text-[9px] sm:text-xs md:text-sm uppercase tracking-widest hover:bg-secondary transition-all shadow-lg shadow-primary/20 flex items-center gap-1.5 sm:gap-2 group" type="button">
                    <span class="hidden sm:inline">Continue Checkout</span>
                    <span class="inline sm:hidden">Checkout</span>
                    <span id="vipModalTotal" class="bg-black/20 px-1.5 sm:px-2 py-0.5 rounded-md ml-0.5 sm:ml-1">$0.00</span>
                    <i data-lucide="check-circle" class="w-3.5 h-3.5 sm:w-4 sm:h-4 group-hover:scale-110 transition-transform"></i>
                </button>
            </div>
    </div>
</div>

<script>
    const ticketInfo = {
        adult: { name: 'Adult Admission', price: 49.00 },
        kids: { name: 'Kids Admission', price: 25.00 },
        vip: { name: 'VIP Seats', price: 109.00 }
    };

    let selections = {
        adult: 0,
        kids: 0,
        vip: 0
    };

    let vipSelectedSeats = [];
    
    function openSeatingMap() {
        document.getElementById('seatingModal').classList.remove('hidden');
        if(window.lucide) {
            window.lucide.createIcons();
        }
    }
    
    function closeSeatingMap() {
        document.getElementById('seatingModal').classList.add('hidden');
    }

    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('seatingModal');
        const closeBtn = document.getElementById('closeModal');
        const continueBtn = document.querySelector('.checkout-button');
        const seats = document.querySelectorAll('.seat:not(.booked):not(.disabled):not(.unavailable)');
        const selectedCountEl = document.getElementById('selectedCount');

        if(closeBtn) closeBtn.addEventListener('click', closeSeatingMap);

        seats.forEach(seat => {
            // Apply some random booked states for demo purposes
            if(Math.random() < 0.15) {
                seat.classList.add('booked');
                seat.style.backgroundColor = '#fee2e2';
                seat.style.color = '#ef4444';
                seat.style.cursor = 'not-allowed';
            } else {
                seat.addEventListener('click', () => {
                    if (seat.classList.contains('booked')) return;
                    
                    const seatId = seat.getAttribute('data-seat-id');
                    if (seat.classList.contains('selected')) {
                        seat.classList.remove('selected');
                        seat.style.backgroundColor = '#e5e7eb';
                        seat.style.color = '#9ca3af';
                        vipSelectedSeats = vipSelectedSeats.filter(id => id !== seatId);
                    } else {
                        if (vipSelectedSeats.length < 20) {
                            seat.classList.add('selected');
                            seat.style.backgroundColor = '#FF6666';
                            seat.style.color = 'white';
                            vipSelectedSeats.push(seatId);
                        } else {
                            alert('You are allowed to book a maximum of 20 ticket(s).');
                        }
                    }
                    selectedCountEl.innerText = vipSelectedSeats.length;
                    document.getElementById('vipModalTotal').innerText = '$' + (vipSelectedSeats.length * ticketInfo.vip.price).toFixed(2);
                });
            }
        });

        if(continueBtn) {
            continueBtn.addEventListener('click', () => {
                closeSeatingMap();
                selections.vip = vipSelectedSeats.length;
                
                if (vipSelectedSeats.length > 0) {
                    document.getElementById('add-btn-vip').classList.add('hidden');
                    document.getElementById('edit-vip').classList.remove('hidden');
                    document.getElementById('edit-vip').classList.add('flex');
                    document.getElementById('vip-selected-summary').innerText = vipSelectedSeats.length + ' Seat(s)';
                } else {
                    document.getElementById('add-btn-vip').classList.remove('hidden');
                    document.getElementById('edit-vip').classList.add('hidden');
                    document.getElementById('edit-vip').classList.remove('flex');
                }
                updateUI();
            });
        }
    });



    function updateQty(type, delta) {
        let currentQty = selections[type];
        currentQty += delta;

        if (currentQty < 0) {
            currentQty = 0;
        }
        
        selections[type] = currentQty;
        document.getElementById(`qty-${type}`).innerText = currentQty;
        updateUI();
    }

    function updateUI() {
        const summaryContainer = document.getElementById('summary-items');
        const emptyMsg = document.getElementById('empty-cart-msg');
        let html = '';
        let total = 0;

        for (const type in selections) {
            if (selections[type] > 0) {
                const itemTotal = selections[type] * ticketInfo[type].price;
                total += itemTotal;
                html += `
                    <div class="flex justify-between items-center group animate-fade-in-up" style="animation-duration: 0.3s">
                        <div class="flex flex-col">
                            <span class="font-bold text-sm text-secondary">${selections[type]}x ${ticketInfo[type].name}</span>
                            <span class="text-[9px] text-gray-400 uppercase tracking-wider">$${ticketInfo[type].price.toFixed(2)} / ticket</span>
                        </div>
                        <span class="font-bold text-sm text-secondary">$${itemTotal.toFixed(2)}</span>
                    </div>
                `;
            }
        }

        // Use a separate div for items to avoid nuking the reference to emptyMsg
        let itemsContainer = document.getElementById('dynamic-items');
        if (!itemsContainer) {
            itemsContainer = document.createElement('div');
            itemsContainer.id = 'dynamic-items';
            itemsContainer.className = 'space-y-4';
            summaryContainer.appendChild(itemsContainer);
        }

        if (html === '') {
            emptyMsg.classList.remove('hidden');
            itemsContainer.innerHTML = '';
        } else {
            emptyMsg.classList.add('hidden');
            itemsContainer.innerHTML = html;
        }

        document.getElementById('subtotal').innerText = total.toFixed(2);
        document.getElementById('order-total').innerText = total.toFixed(2);
    }

    function goToCheckout() {
        let total = parseFloat(document.getElementById('order-total').innerText);
        if (total <= 0) {
            alert("Please select at least one ticket to continue.");
            return;
        }

        const cartData = {
            selections: selections,
            vipSelectedSeats: vipSelectedSeats,
            ticketTotal: document.getElementById('subtotal').innerText,
            orderTotal: document.getElementById('order-total').innerText
        };
        
        sessionStorage.setItem('eventBoxCart', JSON.stringify(cartData));
        window.location.href = 'checkout.php';
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
    .seat {
        width: 18px;
        height: 18px;
        background: #e5e7eb;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 8px;
        font-weight: bold;
        color: #9ca3af;
        cursor: pointer;
        transition: all 0.2s;
    }
    .seat:hover:not(.booked):not(.disabled):not(.unavailable) {
        background: #d1d5db;
        transform: scale(1.1);
    }
</style>

<?php include 'inc/footer.php'; ?>
