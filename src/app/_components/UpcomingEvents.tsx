
import React from 'react';
import Link from 'next/link';
import { ArrowRight } from 'lucide-react';
import EventCard from './EventCard';
import { upcomingEvents } from '@/lib/data';

const UpcomingEvents: React.FC = () => {
  return (
    <section className="py-20 bg-white">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="flex flex-col md:flex-row md:items-end justify-between mb-12">
          <div>
            <h2 className="text-3xl md:text-4xl font-bold mb-4">Upcoming Events</h2>
            <p className="text-gray-500 max-w-xl">Don&apos;t miss out on these trending events happening across Australia this month.</p>
          </div>
          <Link href="/upcoming-events" className="mt-4 md:mt-0 text-primary font-bold flex items-center gap-2 group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white rounded-sm">
            View All Events
            <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
          </Link>
        </div>

        <div className="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4">
          {upcomingEvents.map((event, index) => (
            <EventCard key={index} event={event} layout="vertical" />
          ))}
        </div>
      </div>
    </section>
  );
};

export default UpcomingEvents;
