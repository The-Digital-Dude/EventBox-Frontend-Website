
import ContactHeader from "../_components/ContactHeader";
import ContactFormSection from "../_components/ContactFormSection";
import MapSection from "../_components/MapSection";
import ScrollReveal from "../_components/ScrollReveal";

export default function ContactUsPage() {
  return (
    <div>
      <ContactHeader />
      <ScrollReveal direction="up" delay={80}>
        <ContactFormSection />
      </ScrollReveal>
      <ScrollReveal direction="zoom" delay={120}>
        <MapSection />
      </ScrollReveal>
    </div>
  );
}
