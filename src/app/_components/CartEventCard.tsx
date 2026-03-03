
import React from 'react';
import Image from 'next/image';
import { Calendar, Clock, MapPin } from 'lucide-react';
import { EventDetail } from '@/lib/events';

interface CartEventCardProps {
  event: EventDetail;
}

const CartEventCard: React.FC<CartEventCardProps> = ({ event }) => {
  return (
    <div className="bg-white rounded-xl p-5 border border-gray-100 shadow-sm flex flex-col sm:flex-row gap-5 items-start">
      <div className="hidden sm:block w-24 md:w-28 lg:w-32 aspect-[3/4] rounded-lg overflow-hidden shadow-sm flex-shrink-0">
        <Image src={event.image} alt={event.title} width={128} height={170} className="w-full h-full object-cover" />
      </div>
      <div className="flex-1">
        <div className="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary/10 text-primary text-[9px] font-bold uppercase tracking-wider mb-3">
          <Calendar className="w-3 h-3" />
          {event.dateLabel}
        </div>
        <h1 className="text-lg md:text-2xl font-bold text-secondary mb-3 leading-tight">{event.title}</h1>
        <div className="space-y-1.5 text-xs text-gray-500 font-medium">
          <p className="flex items-center gap-2">
            <Clock className="w-3.5 h-3.5 text-primary" />
            {event.timeLabel}
          </p>
          <p className="flex items-center gap-2 leading-relaxed">
            <MapPin className="w-3.5 h-3.5 text-primary" />
            {event.locationLabel}
          </p>
        </div>
      </div>
    </div>
  );
};

export default CartEventCard;
