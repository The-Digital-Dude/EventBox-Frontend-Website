
import OrganizerLandingHero from "../_components/OrganizerLandingHero";
import LogoCloud from "../_components/LogoCloud";
import CoreFeatures from "../_components/CoreFeatures";
import DeepDive from "../_components/DeepDive";
import Pricing from "../_components/Pricing";
import FinalCTA from "../_components/FinalCTA";
import ScrollReveal from "../_components/ScrollReveal";

export default function OrganizerLandingPage() {
  return (
    <div>
      <OrganizerLandingHero />
      <ScrollReveal direction="up" delay={70}>
        <LogoCloud />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={100}>
        <CoreFeatures />
      </ScrollReveal>
      <ScrollReveal direction="left" delay={120}>
        <DeepDive />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={140}>
        <Pricing />
      </ScrollReveal>
      <ScrollReveal direction="zoom" delay={160}>
        <FinalCTA />
      </ScrollReveal>
    </div>
  );
}
