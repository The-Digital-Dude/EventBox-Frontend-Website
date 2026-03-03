
import React from 'react';
import { CalendarCheck, CalendarX } from 'lucide-react';
import InteractiveEventsExplorer from './InteractiveEventsExplorer';
import { upcomingEvents } from '@/lib/data';

const OrganizerUpcomingEvents: React.FC = () => {
  return (
    <div className="mb-16">
      <h2 className="text-2xl md:text-3xl font-bold mb-6 flex items-center gap-3">
        <CalendarCheck className="text-primary w-6 h-6" /> Upcoming Events
      </h2>
      {upcomingEvents.length === 0 ? (
        <div className="bg-white rounded-[15px] p-10 text-center border border-gray-100">
          <CalendarX className="w-12 h-12 text-gray-300 mx-auto mb-4" />
          <p className="text-gray-500 font-medium text-lg">No upcoming events scheduled at the moment.</p>
        </div>
      ) : (
        <InteractiveEventsExplorer events={upcomingEvents} />
      )}
    </div>
  );
};

export default OrganizerUpcomingEvents;
