
import HeroSection from "./_components/HeroSection";
import EventCarouselSection from "./_components/EventCarouselSection";
import FeaturedCategories from "./_components/FeaturedCategories";
import UpcomingEvents from "./_components/UpcomingEvents";
import TopCities from "./_components/TopCities";
import HowItWorks from "./_components/HowItWorks";
import MultiVendorCTA from "./_components/MultiVendorCTA";
import WhyChooseUs from "./_components/WhyChooseUs";

export default function Home() {
  return (
    <div>
      <HeroSection />
                <EventCarouselSection />
            <FeaturedCategories />
            <UpcomingEvents />
            <TopCities />
            <HowItWorks />
            <MultiVendorCTA />
      <WhyChooseUs />
    </div>
  );
}
