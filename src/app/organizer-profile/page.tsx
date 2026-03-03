
import OrganizerHeader from "../_components/OrganizerHeader";
import OrganizerUpcomingEvents from "../_components/OrganizerUpcomingEvents";
import OrganizerPastEvents from "../_components/OrganizerPastEvents";

export default function OrganizerProfilePage() {
  return (
    <div className="bg-slate-50 min-h-screen py-10 md:py-16">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <OrganizerHeader />
        <OrganizerUpcomingEvents />
        <OrganizerPastEvents />
      </div>
    </div>
  );
}
