
import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { Navigation, MapPinned, CheckCircle2, ExternalLink } from 'lucide-react';
import type { EventDetail } from '@/lib/events';

interface EventDetailsProps {
  event: EventDetail;
}

const EventDetails: React.FC<EventDetailsProps> = ({ event }) => {
  return (
    <div className="w-full lg:w-2/3">
      <div className="mb-16">
        <h2 className="text-3xl font-black text-secondary mb-8 flex items-center gap-4">
          <span className="w-2 h-10 bg-primary rounded-full shadow-[0_0_15px_rgba(255,102,0,0.4)]"></span>
          About the Event
        </h2>
        <div className="bg-white rounded-[10px] p-6 md:p-10 shadow-sm border border-gray-100/50">
          <div className="text-gray-600 leading-relaxed space-y-6 text-lg">
            {event.description.map((paragraph, index) => (
              <p key={index}>{paragraph}</p>
            ))}
          </div>
        </div>
      </div>

      <div className="mb-16">
        <h2 className="text-3xl font-black text-secondary mb-8 flex items-center gap-4">
          <span className="w-2 h-10 bg-primary rounded-full shadow-[0_0_15px_rgba(255,102,0,0.4)]"></span>
          Venue Details
        </h2>
        <div className="bg-white rounded-[10px] overflow-hidden shadow-sm border border-gray-100/50">
          <div className="w-full h-64 bg-slate-100 relative group overflow-hidden">
            <div className="absolute inset-0 bg-black/5 opacity-0 group-hover:opacity-100 transition-opacity z-10 pointer-events-none"></div>
            <Image src={event.venue.image} layout="fill" objectFit="cover" alt="Venue" className="transition-transform duration-700 group-hover:scale-105" />
            <div className="absolute inset-0 flex items-center justify-center z-20">
              <Link href={event.venue.mapUrl} className="bg-white text-secondary px-6 py-3 rounded-full font-bold shadow-xl border border-gray-100 flex items-center gap-2 hover:bg-primary hover:text-white transition-all transform hover:-translate-y-1">
                <Navigation className="w-4 h-4" />
                Open in Maps
              </Link>
            </div>
          </div>
          <div className="p-6 md:p-10 flex flex-col md:flex-row items-center gap-10">
            <div className="flex-1 space-y-6">
              <div className="flex items-start md:items-center gap-4">
                <div className="size-12 rounded-[10px] bg-primary/10 flex items-center justify-center text-primary">
                  <MapPinned className="w-6 h-6" />
                </div>
                <div>
                  <p className="text-[10px] text-gray-400 font-bold uppercase tracking-widest">Address</p>
                  <p className="font-bold text-secondary text-lg">{event.venue.name}</p>
                  <p className="text-gray-500">{event.venue.address}</p>
                </div>
              </div>
            </div>
            <div className="w-px h-24 bg-gray-100 hidden md:block"></div>
            <div className="flex-shrink-0">
              {event.venue.accessible && (
                <span className="bg-green-100 text-green-700 px-4 py-2 rounded-full font-bold text-xs border border-green-200 uppercase tracking-widest">Accessible Venue</span>
              )}
            </div>
          </div>
        </div>
      </div>

      <div>
        <h2 className="text-3xl font-black text-secondary mb-8 flex items-center gap-4">
          <span className="w-2 h-10 bg-primary rounded-full shadow-[0_0_15px_rgba(255,102,0,0.4)]"></span>
          Organizer
        </h2>
        <div className="bg-white rounded-[10px] p-6 md:p-10 shadow-sm border border-gray-100/50 flex flex-col md:flex-row items-center gap-8">
          <div className="size-24 rounded-[10px] bg-slate-50 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden p-4 relative group">
            <Image src={event.organizer.logo} width={100} height={40} alt="Organizer Logo" className="w-full grayscale group-hover:grayscale-0 transition-all duration-500" />
          </div>
          <div className="text-center md:text-left flex-1">
            <div className="flex items-center justify-center md:justify-start gap-2 mb-2">
              <h4 className="font-black text-2xl text-secondary">{event.organizer.name}</h4>
              {event.organizer.verified && (
                <CheckCircle2 className="w-5 h-5 text-blue-500 fill-blue-500/10" />
              )}
            </div>
            <p className="text-gray-500 mb-6 max-w-md">{event.organizer.bio}</p>
            <div className="flex flex-wrap items-center justify-center md:justify-start gap-4">
              <Link href={event.organizer.profileUrl} className="bg-secondary text-white px-6 py-3 rounded-[10px] font-bold text-sm hover:bg-primary transition-all flex items-center gap-2">
                View Profile
                <ExternalLink className="w-4 h-4" />
              </Link>
              <Link href={event.organizer.contactUrl} className="border border-gray-100 text-secondary px-6 py-3 rounded-[10px] font-bold text-sm hover:bg-slate-50 transition-all flex items-center gap-2">
                Contact Organizer
              </Link>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default EventDetails;
