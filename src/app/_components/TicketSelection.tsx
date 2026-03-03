
'use client';

import React, { useState } from 'react';
import { Armchair, Ticket, Plus, Minus, LayoutGrid } from 'lucide-react';
import SeatingMapModal from './SeatingMapModal';
import { useCart } from '@/lib/CartContext';
import { EventDetail } from '@/lib/events';
import { TicketSelection as TicketSelectionType } from '@/lib/types';

interface TicketSelectionProps {
  event: EventDetail;
  selectedTickets: TicketSelectionType[];
}

const TicketSelection: React.FC<TicketSelectionProps> = ({ event, selectedTickets }) => {
  const [isSeatingModalOpen, setIsSeatingModalOpen] = useState(false);
  const { updateTicketQuantity } = useCart();

  const getQuantity = (ticketName: string) => {
    const ticket = selectedTickets.find(t => t.name === ticketName);
    return ticket ? ticket.quantity : 0;
  };

  const handleQuantityChange = (ticketName: string, price: number, delta: number) => {
    const currentQuantity = getQuantity(ticketName);
    const newQuantity = Math.max(0, currentQuantity + delta);
    updateTicketQuantity(event.slug, ticketName, newQuantity);
  };

  return (
    <div>
      <h2 className="text-lg font-bold text-secondary mb-4 flex items-center gap-2">
        <span className="w-1 h-5 bg-primary rounded-full"></span>
        Select Tickets
      </h2>

      <div className="space-y-3">
        {event.ticketTiers.map(ticket => {
          const price = parseFloat(ticket.price.replace(/[^\d.-]+/g, ''));
          const isVip = ticket.name === 'Reserve 1';

          return (
            <div key={ticket.name} className="bg-white rounded-lg p-4 border border-gray-100 flex items-center justify-between group transition-all hover:border-primary/20 shadow-sm">
              <div className="flex items-center gap-3">
                <div className="size-10 rounded-md bg-gray-50 flex items-center justify-center text-gray-400 group-hover:text-primary transition-colors">
                  {isVip ? <Armchair className="w-5 h-5" /> : <Ticket className="w-5 h-5" />}
                </div>
                <div>
                  <h3 className="font-bold text-secondary text-sm">{ticket.name}</h3>
                  <p className="text-primary font-bold text-sm">${price.toFixed(2)}</p>
                </div>
              </div>

              {isVip ? (
                <button onClick={() => setIsSeatingModalOpen(true)} className="bg-primary text-white px-4 py-2 rounded-md font-bold text-[10px] uppercase tracking-wider hover:bg-secondary transition-all shadow-sm flex items-center gap-1.5">
                  <LayoutGrid className="w-3.5 h-3.5" />
                  Select Seats
                </button>
              ) : (
                <div className="flex items-center gap-2">
                  <div className="flex items-center bg-gray-50 rounded-md p-0.5 border border-gray-200">
                    <button onClick={() => handleQuantityChange(ticket.name, price, -1)} className="size-7 flex items-center justify-center bg-white shadow-sm text-primary hover:bg-primary hover:text-white rounded transition-all">
                      <Minus className="w-3.5 h-3.5" />
                    </button>
                    <span className="w-8 text-center font-bold text-secondary text-sm">{getQuantity(ticket.name)}</span>
                    <button onClick={() => handleQuantityChange(ticket.name, price, 1)} className="size-7 flex items-center justify-center bg-white shadow-sm text-primary hover:bg-primary hover:text-white rounded transition-all">
                      <Plus className="w-3.5 h-3.5" />
                    </button>
                  </div>
                </div>
              )}
            </div>
          );
        })}
      </div>
      <SeatingMapModal isOpen={isSeatingModalOpen} onClose={() => setIsSeatingModalOpen(false)} event={event} />
    </div>
  );
};

export default TicketSelection;
