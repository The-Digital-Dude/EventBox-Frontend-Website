
import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { CheckCircle } from 'lucide-react';
import { Event } from '@/lib/types';

interface PastEventCardProps {
  event: Event;
}

const PastEventCard: React.FC<PastEventCardProps> = ({ event }) => {
  return (
    <div className="group bg-white rounded-[10px] border border-gray-100 p-3 md:p-5 overflow-hidden flex flex-col items-center shadow-sm relative grayscale-[50%] hover:grayscale-0 transition-all">
      <div className="absolute inset-0 bg-black/5 z-10 pointer-events-none group-hover:bg-transparent transition-all"></div>
      <Link href={event.link} className="relative block overflow-hidden aspect-[2/3] w-full rounded-[10px] mb-4 shadow-sm group-hover:shadow-md transition-shadow">
        <Image 
          src={event.image} 
          alt={event.title} 
          layout="fill"
          objectFit="cover"
          className="transition-transform duration-700"
        />
      </Link>
      <div className="flex flex-col items-center text-center w-full px-1">
        <Link href={event.link} className="w-full">
          <h3 className="text-[11px] md:text-sm font-bold mb-1 md:mb-1.5 text-gray-500 line-clamp-2 min-h-[1.5rem] md:min-h-[2.5rem] leading-tight px-1">
            {event.title}
          </h3>
        </Link>
        <p className="text-[9px] md:text-[10px] text-gray-400 font-bold uppercase tracking-wider mb-4 md:mb-5">
          {event.day} {new Date(event.date).toLocaleDateString('en-US', { day: 'numeric', month: 'short' })} @ {event.time}
        </p>
        <div className="text-gray-400 px-4 md:px-6 py-2 md:py-3 rounded-[10px] flex items-center justify-center gap-2 border border-gray-200 bg-gray-50 text-[9px] md:text-[10px] font-extrabold uppercase tracking-widest w-full max-w-[170px]">
          <CheckCircle className="w-3.5 h-3.5 md:w-4 h-4" />
          Ended
        </div>
      </div>
    </div>
  );
};

export default PastEventCard;
