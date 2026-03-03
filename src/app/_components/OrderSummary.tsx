
'use client';

import React, { useMemo } from 'react';
import Link from 'next/link';
import { ArrowRight, Lock, ShieldCheck } from 'lucide-react';
import { useCart } from '@/lib/CartContext';

const OrderSummary: React.FC = () => {
  const { items } = useCart();

  const { subtotal, total, selectedCount } = useMemo(() => {
    let sub = 0;
    let count = 0;
    items.forEach(item => {
      item.selectedTickets.forEach(ticket => {
        sub += ticket.price * ticket.quantity;
        count += ticket.quantity;
      });
    });
    return { subtotal: sub, total: sub, selectedCount: count }; // Assuming no taxes or fees for now
  }, [items]);

  return (
    <div className="bg-white rounded-xl border border-gray-100 shadow-md overflow-hidden sticky top-32">
      <div className="bg-secondary p-4 text-white">
        <h2 className="text-base font-bold uppercase tracking-wider">Order Summary</h2>
      </div>
      <div className="p-6 space-y-5">
        <div className="space-y-3 pb-4 border-b border-gray-100 text-xs text-secondary">
          {items.length === 0 ? (
            <p className="text-gray-400 italic">No tickets selected yet.</p>
          ) : (
            items.map(item => (
              <div key={item.event.slug}>
                {item.selectedTickets.map(ticket => (
                  <div key={ticket.name} className="flex justify-between">
                    <span>{ticket.quantity} x {ticket.name}</span>
                    <span>${(ticket.price * ticket.quantity).toFixed(2)}</span>
                  </div>
                ))}
              </div>
            ))
          )}
        </div>
        <div className="relative">
          <input type="text" placeholder="Coupon Code" className="w-full bg-gray-50 border border-gray-100 rounded-lg px-3 py-2.5 text-xs font-medium focus:ring-2 focus:ring-primary/20 focus:outline-none transition-all" />
          <button className="absolute right-1.5 top-1.5 bottom-1.5 bg-secondary text-white px-3 rounded-md text-[9px] font-bold uppercase tracking-wider hover:bg-primary transition-all">
            Apply
          </button>
        </div>
        <div className="space-y-2 pt-1">
          <div className="flex justify-between text-xs text-gray-500 font-bold">
            <span>Subtotal</span>
            <span>${subtotal.toFixed(2)}</span>
          </div>
          <div className="flex justify-between items-center pt-3 border-t border-gray-100">
            <span className="text-secondary font-bold text-sm">Order Total</span>
            <span className="text-primary font-bold text-xl">${total.toFixed(2)}</span>
          </div>
        </div>
        {selectedCount > 0 ? (
          <Link href="/checkout" className="w-full bg-primary text-white py-3.5 rounded-lg font-bold text-xs uppercase tracking-wider hover:bg-secondary transition-all shadow-md shadow-primary/20 flex items-center justify-center gap-2 group">
            Continue To Checkout
            <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
          </Link>
        ) : (
          <button
            type="button"
            disabled
            className="w-full bg-primary text-white py-3.5 rounded-lg font-bold text-xs uppercase tracking-wider shadow-md shadow-primary/20 opacity-60 cursor-not-allowed"
          >
            Select Tickets To Continue
          </button>
        )}
        <div className="flex items-center justify-center gap-3 pt-2 opacity-50 grayscale hover:grayscale-0 transition-all">
          <div className="flex items-center gap-1 text-[8px] font-bold uppercase tracking-widest text-gray-500">
            <Lock className="w-3 h-3" />
            SSL Secure
          </div>
          <div className="flex items-center gap-1 text-[8px] font-bold uppercase tracking-widest text-gray-500">
            <ShieldCheck className="w-3 h-3" />
            Verified
          </div>
        </div>
      </div>
    </div>
  );
};

export default OrderSummary;
