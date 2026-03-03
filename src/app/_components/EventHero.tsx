
'use client';

import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { useRouter } from 'next/navigation';
import { ChevronRight, Calendar, Clock, MapPin, Ticket, Share2 } from 'lucide-react';
import type { EventDetail } from '@/lib/events';
import { useCart } from '@/lib/CartContext';

interface EventHeroProps {
  event: EventDetail;
  onShareClick?: () => void;
}

const EventHero: React.FC<EventHeroProps> = ({ event, onShareClick }) => {
  const { addItem } = useCart();
  const router = useRouter();

  const handleBookTickets = () => {
    const cartItem = {
      event,
      selectedTickets: [],
    };
    addItem(cartItem);
    router.push('/cart');
  };

  return (
    <section className="relative bg-secondary min-h-[calc(100vh-80px)] lg:h-screen flex items-center pt-24 pb-12 lg:pt-20 overflow-hidden">
      <div className="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/20 rounded-full blur-[120px] animate-blob"></div>
      <div className="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-blue-600/10 rounded-full blur-[120px] animate-blob animation-delay-2000"></div>
      <div className="absolute top-[20%] right-[10%] w-[30%] h-[30%] bg-purple-600/10 rounded-full blur-[120px] animate-blob animation-delay-4000"></div>
      <div className="absolute inset-0 opacity-[0.03]" style={{ backgroundImage: 'radial-gradient(circle at 1px 1px, white 1px, transparent 0)', backgroundSize: '40px 40px' }}></div>

      <div className="container mx-auto px-6 max-w-[1280px] relative z-10">
        <div className="flex flex-col lg:flex-row gap-12 items-center justify-center">
          <div className="w-full lg:w-1/3 animate-fade-in-up">
            <div className="relative group max-w-[320px] mx-auto lg:ml-0">
              <div className="absolute -inset-4 bg-primary/30 rounded-[30px] blur-2xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <Image src={event.image} alt={event.title} width={320} height={480} className="w-full aspect-[2/3] object-cover rounded-[15px] shadow-2xl relative z-10 border border-white/10" />
              <div className="absolute top-4 left-4 z-20">
                <span className="bg-primary text-white px-3 py-1.5 rounded-full font-bold text-[10px] uppercase tracking-wider shadow-lg">{event.badge}</span>
              </div>
            </div>
          </div>

          <div className="w-full lg:w-7/12 text-white animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
            <nav className="flex items-center gap-2 text-gray-400 text-[10px] md:text-xs mb-4">
              <Link href="/" className="hover:text-primary transition-colors">Home</Link>
              <ChevronRight className="w-3 h-3" />
              <Link href="#" className="hover:text-primary transition-colors">{event.category}</Link>
              <ChevronRight className="w-3 h-3" />
              <span className="text-white">{event.breadcrumbTitle}</span>
            </nav>

            <h1 className="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-black mb-6 leading-tight">{event.title}</h1>
            
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
              <div className="flex items-center gap-3 bg-white/5 p-3 rounded-[10px] border border-white/10">
                <div className="size-10 rounded-[10px] bg-primary/20 flex items-center justify-center text-primary">
                  <Calendar className="w-5 h-5" />
                </div>
                <div>
                  <p className="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Date</p>
                  <p className="text-sm font-bold">{event.dateLabel}</p>
                </div>
              </div>
              <div className="flex items-center gap-3 bg-white/5 p-3 rounded-[10px] border border-white/10">
                <div className="size-10 rounded-[10px] bg-primary/20 flex items-center justify-center text-primary">
                  <Clock className="w-5 h-5" />
                </div>
                <div>
                  <p className="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Time</p>
                  <p className="text-sm font-bold">{event.timeLabel}</p>
                </div>
              </div>
              <div className="flex items-center gap-3 bg-white/5 p-3 rounded-[10px] border border-white/10 md:col-span-2">
                <div className="size-10 rounded-[10px] bg-primary/20 flex items-center justify-center text-primary">
                  <MapPin className="w-5 h-5" />
                </div>
                <div>
                  <p className="text-[9px] text-gray-400 font-bold uppercase tracking-wider">Location</p>
                  <p className="text-sm font-bold">{event.locationLabel}</p>
                </div>
              </div>
            </div>

            <div className="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
              <button onClick={handleBookTickets} className="w-full sm:w-auto bg-primary text-white px-8 py-4 rounded-[10px] font-black text-sm uppercase tracking-widest hover:bg-white hover:text-black transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3 group">
                Book Tickets Now
                <Ticket className="w-5 h-5 group-hover:rotate-12 transition-transform" />
              </button>
              <button
                id="share-event-btn"
                type="button"
                onClick={onShareClick}
                className="w-full sm:w-auto bg-white/10 backdrop-blur-md border border-white/20 text-white px-6 py-4 rounded-[10px] font-black text-sm uppercase tracking-widest hover:bg-white hover:text-black transition-all shadow-xl flex items-center justify-center gap-3 group"
              >
                <Share2 className="w-5 h-5 group-hover:scale-110 transition-transform" />
                Share
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default EventHero;
