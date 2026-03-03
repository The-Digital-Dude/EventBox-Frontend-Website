
import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { MapPin, CalendarDays, ArrowRight, ArrowRightCircle } from 'lucide-react';
import { Event } from '@/lib/types';

interface EventCardProps {
  event: Event;
  layout?: 'horizontal' | 'vertical';
}

const EventCard: React.FC<EventCardProps> = ({ event, layout = 'vertical' }) => {
  if (layout === 'horizontal') {
    return (
      <Link href={event.link} className="group bg-slate-50 rounded-[10px] overflow-hidden border border-gray-100 transition-all-custom flex flex-col md:flex-row items-stretch shadow-sm hover:shadow-md h-full mx-1">
        <div className="w-full md:w-56 shrink-0 overflow-hidden relative aspect-[16/9] md:aspect-[2/3]">
          <Image 
            src={event.image}
            alt={event.title} 
            layout="fill"
            objectFit="cover"
            className="transition-transform duration-700 group-hover:scale-110"
          />
        </div>
        <div className="flex-1 p-4 md:p-6 flex flex-col justify-between">
          <div>
            <div className="flex items-center justify-between mb-3">
              <span className="text-xs md:text-sm font-bold text-primary uppercase tracking-wider">{event.date}</span>
              <span className="bg-white text-xs font-bold text-gray-700 uppercase px-2.5 py-1 rounded border border-gray-100">{event.category}</span>
            </div>
            <h3 className="text-lg md:text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors leading-tight line-clamp-2">
              {event.title}
            </h3>
            <p className="text-sm text-gray-600 mb-5 line-clamp-2 leading-relaxed">
              {event.description}
            </p>
            <div className="space-y-2">
              <div className="flex items-center gap-2.5 text-gray-700 text-xs">
                <MapPin className="w-4 h-4 text-primary" />
                <span className="font-bold">{event.city}</span>
              </div>
              <div className="flex items-center gap-2.5 text-gray-600 text-xs">
                <CalendarDays className="w-4 h-4 text-gray-400" />
                <span className="font-semibold">{event.day} • {event.time}</span>
              </div>
            </div>
          </div>
          <div className="flex items-center justify-between mt-4">
            <span className="text-lg font-black text-secondary">{event.price}</span>
            <div className="bg-primary text-white p-2 rounded-[10px] hover:scale-110 transition-all shadow-md shadow-primary/20">
              <ArrowRight className="w-4 h-4" />
            </div>
          </div>
        </div>
      </Link>
    );
  }

  return (
    <Link href={event.link} className="group bg-white rounded-[10px] border border-gray-100 p-3 md:p-5 overflow-hidden transition-all-custom flex flex-col items-center hover:shadow-xl hover:shadow-primary/5 hover:border-primary/20">
      <div className="relative block overflow-hidden aspect-[2/3] w-full rounded-[10px] mb-4 shadow-sm group-hover:shadow-md transition-shadow">
        <Image 
          src={event.image} 
          alt={event.title} 
          layout="fill"
          objectFit="cover"
          className="transition-transform duration-700 group-hover:scale-110"
        />
      </div>
      <div className="flex flex-col items-center text-center w-full px-1">
        <h3 className="text-sm md:text-base font-bold mb-1 md:mb-1.5 text-secondary group-hover:text-primary transition-colors line-clamp-2 min-h-[1.5rem] md:min-h-[2.5rem] leading-tight px-1">
          {event.title}
        </h3>
        <p className="text-xs text-gray-500 font-bold uppercase tracking-wider mb-4 md:mb-5">
          {event.day} {new Date(event.date).toLocaleDateString('en-US', { day: 'numeric', month: 'short' })} @ {event.time}
        </p>
        <div className="bg-secondary text-white px-4 md:px-6 py-2 md:py-3 rounded-[10px] flex items-center justify-center gap-2 group/btn hover:bg-primary transition-all text-xs font-extrabold uppercase tracking-widest w-full max-w-[170px] shadow-lg shadow-black/10">
          Book Tickets
          <ArrowRightCircle className="w-3.5 h-3.5 md:w-4 h-4 group-hover/btn:translate-x-0.5 transition-transform" />
        </div>
      </div>
    </Link>
  );
};

export default EventCard;
