
import React from 'react';
import { useRouter } from 'next/navigation';
import { Minus, Plus, Ticket } from 'lucide-react';
import type { EventDetail } from '@/lib/events';
import { useCart } from '@/lib/CartContext';
import { TicketSelection as TicketSelectionType } from '@/lib/types';

interface BookingSidebarProps {
  event: EventDetail;
  selectedTickets: TicketSelectionType[];
  totalQuantity: number;
  totalPrice: number;
  onQuantityChange: (ticketName: string, price: number, delta: number) => void;
}

const BookingSidebar: React.FC<BookingSidebarProps> = ({
  event,
  selectedTickets,
  totalQuantity,
  totalPrice,
  onQuantityChange,
}) => {
  const { addItem } = useCart();
  const router = useRouter();
  const getQuantity = (ticketName: string) =>
    selectedTickets.find((ticket) => ticket.name === ticketName)?.quantity ?? 0;

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
    <div className="w-full lg:w-1/3 relative">
      <div className="sticky top-10 space-y-8">
        <div className="relative group animate-fade-in-up" style={{ animationDelay: '0.4s' }}>
          <div className="absolute -inset-2 bg-gradient-to-br from-primary/10 to-blue-600/10 rounded-[10px] blur-2xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
          <div className="relative bg-white/70 backdrop-blur-xl rounded-[10px] border border-white/40 shadow-[0_20px_50px_rgba(0,0,0,0.05)] overflow-hidden">
            <div className="bg-orange-600 text-white py-3 px-6 text-center text-[10px] font-black uppercase tracking-[0.2em] flex items-center justify-center gap-2 animate-pulse">
              <span className="size-2 bg-white rounded-full animate-ping"></span>
              Selling Fast! 90% Booked
            </div>
            <div className="p-8">
              <h4 className="text-[10px] text-gray-400 font-bold uppercase tracking-widest mb-6">Available Tickets</h4>
              <div className="space-y-4 mb-8">
                {event.ticketTiers.map((tier) => (
                  <div key={tier.name} className="flex items-center justify-between pb-4 border-b border-gray-100/50">
                    <div>
                      <span className="font-bold text-secondary block">{tier.name}</span>
                      <span className="text-primary font-black text-sm">{tier.price}</span>
                    </div>
                    <div className="flex items-center gap-2">
                      <button
                        type="button"
                        onClick={() =>
                          onQuantityChange(
                            tier.name,
                            parseFloat(tier.price.replace(/[^\d.-]+/g, '')),
                            -1
                          )
                        }
                        className="size-7 flex items-center justify-center bg-white border border-gray-200 text-primary hover:bg-primary hover:text-white rounded transition-all"
                        aria-label={`Decrease ${tier.name} quantity`}
                      >
                        <Minus className="w-3.5 h-3.5" />
                      </button>
                      <span className="w-6 text-center font-bold text-secondary text-sm">{getQuantity(tier.name)}</span>
                      <button
                        type="button"
                        onClick={() =>
                          onQuantityChange(
                            tier.name,
                            parseFloat(tier.price.replace(/[^\d.-]+/g, '')),
                            1
                          )
                        }
                        className="size-7 flex items-center justify-center bg-white border border-gray-200 text-primary hover:bg-primary hover:text-white rounded transition-all"
                        aria-label={`Increase ${tier.name} quantity`}
                      >
                        <Plus className="w-3.5 h-3.5" />
                      </button>
                    </div>
                  </div>
                ))}
              </div>
              <div className="mb-4 p-3 rounded-[10px] bg-slate-50 border border-gray-100">
                <div className="flex items-center justify-between text-xs text-gray-500 font-semibold">
                  <span>Selected Tickets</span>
                  <span>{totalQuantity}</span>
                </div>
                <div className="flex items-center justify-between mt-2">
                  <span className="text-sm font-bold text-secondary">Estimated Total</span>
                  <span className="text-lg font-black text-primary">${totalPrice.toFixed(2)}</span>
                </div>
              </div>
              <button
                onClick={handleGetTickets}
                disabled={totalQuantity === 0}
                className="w-full bg-primary text-white py-4 rounded-[10px] font-black text-xs uppercase tracking-[0.2em] hover:bg-white hover:text-black transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3 group/btn disabled:opacity-60 disabled:cursor-not-allowed disabled:hover:bg-primary disabled:hover:text-white"
              >
                {totalQuantity === 0 ? 'Select Tickets First' : 'Get Tickets'}
                <Ticket className="w-5 h-5 group-hover/btn:rotate-12 transition-transform" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default BookingSidebar;
