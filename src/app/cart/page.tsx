
'use client';

import React from 'react';
import CartEventCard from '../_components/CartEventCard';
import TicketSelection from '../_components/TicketSelection';
import OrderSummary from '../_components/OrderSummary';
import { useCart } from '@/lib/CartContext';

export default function CartPage() {
  const { items } = useCart();

  if (items.length === 0) {
    return (
      <div className="bg-gray-50 min-h-screen py-8 md:py-12">
        <div className="container mx-auto px-4 md:px-6 max-w-5xl text-center">
          <h1 className="text-2xl font-bold mb-4">Your cart is empty</h1>
          <p>Looks like you haven&apos;t added any events to your cart yet.</p>
        </div>
      </div>
    );
  }

  return (
    <div className="bg-gray-50 min-h-screen py-8 md:py-12">
      <div className="container mx-auto px-4 md:px-6 max-w-5xl">
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10">
          <div className="lg:col-span-7 space-y-6 animate-fade-in-up">
            {items.map(item => (
              <React.Fragment key={item.event.slug}>
                <CartEventCard event={item.event} />
                <TicketSelection event={item.event} selectedTickets={item.selectedTickets} />
              </React.Fragment>
            ))}
          </div>
          <div className="lg:col-span-5 animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
            <OrderSummary />
          </div>
        </div>
      </div>
    </div>
  );
}
