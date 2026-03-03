
import React from 'react';
import { Tag, CreditCard, Smartphone, BarChart2, LayoutGrid, Megaphone } from 'lucide-react';

const features = [
  { icon: <Tag className="w-7 h-7" />, title: 'Flexible Pricing', description: 'Choose what works for your business model. Opt for a low commission per ticket sold, or pay a simple, predictable fixed price per event.' },
  { icon: <CreditCard className="w-7 h-7" />, title: 'Seamless Payments', description: 'Get paid faster. Vendors can easily integrate their own Stripe account to receive payouts directly, securely, and without delay.' },
  { icon: <Smartphone className="w-7 h-7" />, title: 'Advanced Scanning App', description: 'Speed up entry at the door. Our powerful scanning app works flawlessly on any smartphone, both entirely online and without internet access.' },
  { icon: <BarChart2 className="w-7 h-7" />, title: 'Detailed Analytics', description: 'Make data-driven decisions. Access a comprehensive dashboard delivering deep insights into your sales, attendee demographics, and traffic sources.' },
  { icon: <LayoutGrid className="w-7 h-7" />, title: 'Seating Planner', description: 'Host seated events with ease. A simple, interactive seating plan management tool that lets attendees pick their exact seats during checkout.' },
  { icon: <Megaphone className="w-7 h-7" />, title: 'Marketing Tools Integration', description: 'Boost your reach. Built-in SEO tools, email marketing integrations, and social sharing capabilities to help you sell out every single time.' },
];

const CoreFeatures: React.FC = () => {
  return (
    <section id="features" className="py-24 bg-slate-50">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Why Choose EventsBox?</span>
          <h2 className="text-3xl md:text-5xl font-black text-secondary leading-tight mb-6">Everything you need to run successful events.</h2>
          <p className="text-xl text-gray-600 font-medium">We&apos;ve built a comprehensive suite of tools designed specifically to make organizers&apos; lives easier and more profitable.</p>
        </div>
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {features.map((feature, index) => (
            <div key={index} className="bg-white p-8 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:border-primary/20 transition-all group">
              <div className="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                {feature.icon}
              </div>
              <h3 className="text-xl font-black text-secondary mb-3">{feature.title}</h3>
              <p className="text-gray-600 leading-relaxed font-medium">{feature.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default CoreFeatures;
