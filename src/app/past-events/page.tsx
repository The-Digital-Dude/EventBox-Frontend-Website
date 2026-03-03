
import EventsPageHeader from "../_components/EventsPageHeader";
import InteractivePastEventsExplorer from "../_components/InteractivePastEventsExplorer";
import ScrollReveal from "../_components/ScrollReveal";
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
          <ScrollReveal direction="up" delay={90}>
            <InteractivePastEventsExplorer events={pastEvents} />
          </ScrollReveal>
        </div>
      </section>
    </div>
  );
}
