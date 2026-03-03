
'use client';

import React, { useState, useEffect } from 'react';
import { useRouter } from 'next/navigation';
import { Ticket } from 'lucide-react';
import type { EventDetail } from '@/lib/events';
import { useCart } from '@/lib/CartContext';
import { TicketSelection as TicketSelectionType } from '@/lib/types';

interface MobileBookingBarProps {
  event: EventDetail;
  selectedTickets: TicketSelectionType[];
  totalQuantity: number;
  totalPrice: number;
}

const MobileBookingBar: React.FC<MobileBookingBarProps> = ({
  event,
  selectedTickets,
  totalQuantity,
  totalPrice,
}) => {
  const [isVisible, setIsVisible] = useState(false);
  const { addItem } = useCart();
  const router = useRouter();

  useEffect(() => {
    const handleScroll = () => {
      const scrollY = window.scrollY;
      const showBar = scrollY > 800; // Adjust this value based on when you want the bar to appear
      setIsVisible(showBar);
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const handleGetTickets = () => {
    if (totalQuantity === 0) {
      return;
    }
    const cartItem = {
      event,
      selectedTickets,
    };
    addItem(cartItem);
    router.push('/cart');
  };

  return (
    <div className={`fixed bottom-0 left-0 right-0 bg-white/80 backdrop-blur-xl border-t border-gray-100 p-4 z-50 lg:hidden transform transition-transform duration-300 shadow-[0_-10px_30px_rgba(0,0,0,0.1)] ${isVisible ? 'translate-y-0' : 'translate-y-full'}`}>
      <div className="container mx-auto flex items-center justify-between gap-4">
        <div>
          <p className="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-none mb-1">
            {totalQuantity > 0 ? `${totalQuantity} ticket${totalQuantity > 1 ? 's' : ''} selected` : 'Starts from'}
          </p>
          <span className="text-xl font-black text-secondary">
            {totalQuantity > 0 ? `$${totalPrice.toFixed(2)}` : event.priceFrom}
          </span>
        </div>
        <button
          onClick={handleGetTickets}
          disabled={totalQuantity === 0}
          className="flex-1 bg-primary text-white py-4 rounded-[10px] font-black text-xs uppercase tracking-widest flex items-center justify-center gap-3 shadow-lg shadow-primary/20 disabled:opacity-60 disabled:cursor-not-allowed"
        >
          {totalQuantity === 0 ? 'Select Tickets' : 'Get Tickets'}
          <Ticket className="w-5 h-5" />
        </button>
      </div>
    </div>
  );
};

export default MobileBookingBar;
