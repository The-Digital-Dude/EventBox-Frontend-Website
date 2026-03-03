
'use client';

import React, { useState, useMemo } from 'react';
import { X, CheckCircle } from 'lucide-react';
import { EventDetail } from '@/lib/events';
import { useCart } from '@/lib/CartContext';

interface SeatingMapModalProps {
  isOpen: boolean;
  onClose: () => void;
  event: EventDetail;
}

// Mock seating data
const generateSeats = () => {
  const rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
  const seatsPerRow = 12;
  const seats = [];
  for (const row of rows) {
    for (let i = 1; i <= seatsPerRow; i++) {
      const isBooked = Math.random() > 0.8;
      seats.push({ id: `${row}${i}`, row, number: i, status: isBooked ? 'booked' : 'available' });
    }
  }
  return seats;
};

const SeatingMapModal: React.FC<SeatingMapModalProps> = ({ isOpen, onClose, event }) => {
  const seats = useMemo(() => generateSeats(), []);
  const [selectedSeats, setSelectedSeats] = useState<string[]>([]);
  const { updateTicketQuantity } = useCart();

  const vipTier = useMemo(() => event.ticketTiers.find(t => t.name === 'Reserve 1'), [event]);
  const vipPrice = useMemo(() => {
    if (!vipTier) return 0;
    return parseFloat(vipTier.price.replace(/[^\d.-]+/g, ''));
  }, [vipTier]);

  if (!isOpen) return null;

  const handleSeatClick = (seatId: string) => {
    const seat = seats.find(s => s.id === seatId);
    if (seat?.status === 'booked') return;

    setSelectedSeats(prev => 
      prev.includes(seatId) ? prev.filter(id => id !== seatId) : [...prev, seatId]
    );
  };

  const handleCheckout = () => {
    if (vipTier) {
      updateTicketQuantity(event.slug, vipTier.name, selectedSeats.length);
    }
    onClose();
  };

  const total = selectedSeats.length * vipPrice;

  return (
    <div className="fixed inset-0 z-[100] bg-black/60 backdrop-blur-sm flex items-center justify-center p-2 md:p-4 xl:p-8">
      <div className="bg-white w-full max-w-5xl rounded-2xl shadow-2xl flex flex-col max-h-[95vh] xl:max-h-[90vh] overflow-hidden relative">
        <div className="modal-header p-3 sm:p-4 border-b border-gray-100 flex justify-between items-center bg-white shrink-0 z-20 shadow-sm relative">
          <h3 className="font-black text-secondary text-base sm:text-lg">Select VIP Seats for {event.title}</h3>
          <button onClick={onClose} className="modal-close bg-gray-100 hover:bg-gray-200 text-secondary w-8 h-8 rounded-full flex items-center justify-center transition-colors" type="button">
            <X className="w-5 h-5" />
          </button>
        </div>
        <div className="px-6 pt-6 pb-2 overflow-y-auto overflow-x-hidden flex-1 bg-gray-50 min-h-0 relative z-0">
          <div className="grid grid-cols-12 gap-2">
            {seats.map(seat => {
              const isSelected = selectedSeats.includes(seat.id);
              let seatClass = 'bg-gray-200 hover:bg-gray-300';
              if (seat.status === 'booked') {
                seatClass = 'bg-gray-400 cursor-not-allowed';
              } else if (isSelected) {
                seatClass = 'bg-primary text-white';
              }
              return (
                <button key={seat.id} onClick={() => handleSeatClick(seat.id)} className={`w-full h-10 rounded-md text-xs font-bold transition-colors ${seatClass}`}>
                  {seat.id}
                </button>
              );
            })}
          </div>
        </div>
        <div className="checkout-bar bg-white border-t border-gray-200 p-3 sm:p-4 md:p-6 flex justify-between items-center shrink-0 shadow-[0_-10px_30px_rgba(0,0,0,0.05)] relative z-20">
          <span className="checkout-count font-bold text-gray-500 text-[10px] sm:text-xs md:text-base">Selected: <span className="text-secondary font-black text-sm sm:text-base md:text-xl ml-1 md:ml-2">{selectedSeats.length}</span></span>
          <button onClick={handleCheckout} className="checkout-button bg-primary text-white px-3 sm:px-6 md:px-8 py-2.5 sm:py-3 rounded-xl font-black text-[9px] sm:text-xs md:text-sm uppercase tracking-widest hover:bg-secondary transition-all shadow-lg shadow-primary/20 flex items-center gap-1.5 sm:gap-2 group" type="button">
            <span className="hidden sm:inline">Continue Checkout</span>
            <span className="inline sm:hidden">Checkout</span>
            <span className="bg-black/20 px-1.5 sm:px-2 py-0.5 rounded-md ml-0.5 sm:ml-1">${total.toFixed(2)}</span>
            <CheckCircle className="w-3.5 h-3.5 sm:w-4 sm:h-4 group-hover:scale-110 transition-transform" />
          </button>
        </div>
      </div>
    </div>
  );
};

export default SeatingMapModal;
