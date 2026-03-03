
'use client';

import React, { useMemo, useEffect } from 'react';
import Link from 'next/link';
import { useCart } from '@/lib/CartContext';
import { useRouter } from 'next/navigation';

const CheckoutOrderSummary: React.FC = () => {
  const { items } = useCart();
  const router = useRouter();

  useEffect(() => {
    if (items.length === 0) {
      router.push('/cart');
    }
  }, [items, router]);

  const { subtotal, platformFee, total } = useMemo(() => {
    let sub = 0;
    items.forEach(item => {
      item.selectedTickets.forEach(ticket => {
        sub += ticket.price * ticket.quantity;
      });
    });
    const fee = sub > 0 ? 1.75 : 0; // Example platform fee
    return { subtotal: sub, platformFee: fee, total: sub + fee };
  }, [items]);

  if (items.length === 0) {
    return null; // or a loading indicator
  }

  return (
    <div className="bg-white rounded-xl border border-gray-100 shadow-md overflow-hidden sticky top-32">
      <div className="bg-gray-50 p-4 border-b border-gray-100 flex justify-between items-center">
        <h2 className="text-sm font-bold uppercase tracking-wider text-secondary">Order Summary</h2>
        <Link href="/cart" className="text-[10px] font-bold text-primary uppercase tracking-widest hover:underline">Edit Cart</Link>
      </div>
      <div className="p-6 space-y-4">
        <div className="space-y-3 pb-4 border-b border-gray-100 text-xs text-secondary">
          {items.map(item => (
            item.selectedTickets.map(ticket => (
              <div key={`${item.event.slug}-${ticket.name}`} className="flex justify-between items-center group">
                <div className="flex flex-col">
                  <span className="font-bold text-sm text-secondary">{ticket.quantity}x {ticket.name}</span>
                </div>
                <span className="font-bold text-sm text-secondary">${(ticket.price * ticket.quantity).toFixed(2)}</span>
              </div>
            ))
          ))}
        </div>
        <div className="space-y-2 pt-1 text-sm">
          <div className="flex justify-between text-gray-500 font-medium">
            <span>Subtotal</span>
            <span>${subtotal.toFixed(2)}</span>
          </div>
          <div className="flex justify-between text-gray-500 font-medium">
            <span>Platform Fee</span>
            <span>${platformFee.toFixed(2)}</span>
          </div>
          <div className="flex justify-between items-center pt-3 border-t border-gray-100 mt-2">
            <span className="text-secondary font-black text-base uppercase tracking-widest">Total</span>
            <span className="text-primary font-black text-2xl">${total.toFixed(2)}</span>
          </div>
        </div>
      </div>
    </div>
  );
};

export default CheckoutOrderSummary;
