
import React from 'react';
import EventCard from './EventCard';
import { upcomingEvents } from '@/lib/data';

const EventsGrid: React.FC = () => {
  return (
    <div className="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4">
      {upcomingEvents.map((event, index) => (
        <EventCard key={index} event={event} layout="vertical" />
      ))}
    </div>
  );
};

export default EventsGrid;
