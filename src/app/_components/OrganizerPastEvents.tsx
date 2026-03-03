
import React from 'react';
import { History } from 'lucide-react';
import InteractivePastEventsExplorer from './InteractivePastEventsExplorer';
import { pastEvents } from '@/lib/data';

const OrganizerPastEvents: React.FC = () => {
  return (
    <div>
      <h2 className="text-2xl md:text-3xl font-bold mb-6 flex items-center gap-3">
        <History className="text-gray-400 w-6 h-6" /> Past Events
      </h2>
      {pastEvents.length === 0 ? (
        <div className="bg-white rounded-[15px] p-10 text-center border border-gray-100">
          <p className="text-gray-500 font-medium">No past events recorded yet.</p>
        </div>
      ) : (
        <InteractivePastEventsExplorer events={pastEvents} />
      )}
    </div>
  );
};

export default OrganizerPastEvents;
