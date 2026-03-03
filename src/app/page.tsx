
import HeroSection from "./_components/HeroSection";
import EventCarouselSection from "./_components/EventCarouselSection";
import FeaturedCategories from "./_components/FeaturedCategories";
import UpcomingEvents from "./_components/UpcomingEvents";
import TopCities from "./_components/TopCities";
import HowItWorks from "./_components/HowItWorks";
import MultiVendorCTA from "./_components/MultiVendorCTA";
import WhyChooseUs from "./_components/WhyChooseUs";
import ScrollReveal from "./_components/ScrollReveal";

export default function Home() {
  return (
    <div>
      <HeroSection />
      <ScrollReveal direction="up" delay={80}>
        <EventCarouselSection />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={100}>
        <FeaturedCategories />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={120}>
        <UpcomingEvents />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={140}>
        <TopCities />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={160}>
        <HowItWorks />
      </ScrollReveal>
      <ScrollReveal direction="zoom" delay={180}>
        <MultiVendorCTA />
      </ScrollReveal>
      <ScrollReveal direction="up" delay={200}>
        <WhyChooseUs />
      </ScrollReveal>
    </div>
  );
}
