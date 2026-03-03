
import OrganizerHeader from "../_components/OrganizerHeader";
import OrganizerUpcomingEvents from "../_components/OrganizerUpcomingEvents";
import OrganizerPastEvents from "../_components/OrganizerPastEvents";
import ScrollReveal from "../_components/ScrollReveal";

export default function OrganizerProfilePage() {
  return (
    <div className="bg-slate-50 min-h-screen py-10 md:py-16">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <ScrollReveal direction="up" delay={60}>
          <OrganizerHeader />
        </ScrollReveal>
        <ScrollReveal direction="up" delay={100}>
          <OrganizerUpcomingEvents />
        </ScrollReveal>
        <ScrollReveal direction="up" delay={140}>
          <OrganizerPastEvents />
        </ScrollReveal>
      </div>
    </div>
  );
}
