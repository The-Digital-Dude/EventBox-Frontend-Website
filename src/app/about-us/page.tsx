
import PageHeader from "../_components/PageHeader";
import MissionVisionSection from "../_components/MissionVisionSection";
import OurStorySection from "../_components/OurStorySection";
import StatsSection from "../_components/StatsSection";
import ScrollReveal from "../_components/ScrollReveal";

export default function AboutUsPage() {
  return (
    <div>
      <PageHeader 
        title="About EventsBox"
        description="Your premier destination for all things event-related in Australia."
      />
      <ScrollReveal direction="up" delay={80}>
        <MissionVisionSection />
      </ScrollReveal>
      <ScrollReveal direction="left" delay={110}>
        <OurStorySection />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={130}>
        <StatsSection />
      </ScrollReveal>
    </div>
  );
}
