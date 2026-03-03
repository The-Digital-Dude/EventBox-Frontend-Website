
import EventsPageHeader from "../_components/EventsPageHeader";
import InteractiveEventsExplorer from "../_components/InteractiveEventsExplorer";
import { upcomingEvents } from "@/lib/data";

export default function UpcomingEventsPage() {
  return (
    <div>
      <EventsPageHeader 
        title="Upcoming Events"
        description="Discover the best upcoming events happening near you. Secure your tickets today and make unforgettable memories!"
      />
      <section className="py-20 bg-slate-50 min-h-screen">
        <div className="container mx-auto px-6 max-w-[1280px]">
          <InteractiveEventsExplorer events={upcomingEvents} />
        </div>
      </section>
    </div>
  );
}
