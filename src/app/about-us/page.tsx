
import PageHeader from "../_components/PageHeader";
import MissionVisionSection from "../_components/MissionVisionSection";
import OurStorySection from "../_components/OurStorySection";
import StatsSection from "../_components/StatsSection";

export default function AboutUsPage() {
  return (
    <div>
      <PageHeader 
        title="About EventsBox"
        description="Your premier destination for all things event-related in Australia."
      />
      <MissionVisionSection />
      <OurStorySection />
      <StatsSection />
    </div>
  );
}
