
import EventsPageHeader from "../_components/EventsPageHeader";
import InteractivePastEventsExplorer from "../_components/InteractivePastEventsExplorer";
import { pastEvents } from "@/lib/data";

export default function PastEventsPage() {
  return (
    <div>
      <EventsPageHeader 
        title="Past Events"
        description="Take a look back at some of the incredible events we've hosted. See what you missed and get ready for the next one!"
      />
      <section className="py-20 bg-slate-50 min-h-screen">
        <div className="container mx-auto px-6 max-w-[1280px]">
          <InteractivePastEventsExplorer events={pastEvents} />
        </div>
      </section>
    </div>
  );
}
