
import React from 'react';
import { Briefcase, Users, CheckCircle2 } from 'lucide-react';

const organizerFeatures = [
  { title: 'Flexible Pricing', description: 'Commission per ticket or fixed price per event.' },
  { title: 'Seamless Payments', description: 'Vendors can easily integrate their own Stripe account.' },
  { title: 'Advanced Scanning App', description: 'Works flawlessly both with and without internet.' },
  { title: 'Detailed Analytics', description: 'Comprehensive dashboard delivering deep insights.' },
  { title: 'Seating Planner', description: 'Simple and easy seating plan management for any event.' },
];

const guestFeatures = [
  { title: 'Easy Checkout', description: 'Simple and intuitive ticket purchasing system.' },
  { title: 'Secure Payments', description: 'Top-tier encryption to ensure your data is always safe.' },
  { title: 'Unique QR Tickets', description: 'Conflict-free scanning with dedicated QR codes.' },
  { title: 'Mobile Apps', description: 'Available on both Android and iOS platforms.' },
  { title: 'Event Updates', description: 'Get real-time updates on the events you are interested in.' },
];

const WhyChooseUs: React.FC = () => {
  return (
    <section className="py-24 bg-slate-50 border-t border-gray-100">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="text-center mb-16">
          <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Features</span>
          <h2 className="text-3xl md:text-4xl font-black text-secondary leading-tight">Why Choose Us</h2>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-20">
          <div className="bg-white p-8 md:p-10 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
            <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center text-primary mb-8">
              <Briefcase className="w-8 h-8" />
            </div>
            <h3 className="text-2xl font-black text-secondary mb-8 pb-4 border-b border-gray-100">For Organizer</h3>
            <ul className="space-y-6">
              {organizerFeatures.map((feature, index) => (
                <li key={index} className="flex items-start gap-4">
                  <CheckCircle2 className="w-6 h-6 text-primary shrink-0 mt-0.5" />
                  <div>
                    <h4 className="font-bold text-secondary mb-1">{feature.title}</h4>
                    <p className="text-gray-500 text-sm">{feature.description}</p>
                  </div>
                </li>
              ))}
            </ul>
          </div>

          <div className="bg-white p-8 md:p-10 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-lg transition-shadow">
            <div className="w-16 h-16 bg-secondary/10 rounded-full flex items-center justify-center text-secondary mb-8">
              <Users className="w-8 h-8" />
            </div>
            <h3 className="text-2xl font-black text-secondary mb-8 pb-4 border-b border-gray-100">For Guest</h3>
            <ul className="space-y-6">
              {guestFeatures.map((feature, index) => (
                <li key={index} className="flex items-start gap-4">
                  <CheckCircle2 className="w-6 h-6 text-secondary shrink-0 mt-0.5" />
                  <div>
                    <h4 className="font-bold text-secondary mb-1">{feature.title}</h4>
                    <p className="text-gray-500 text-sm">{feature.description}</p>
                  </div>
                </li>
              ))}
            </ul>
          </div>
        </div>
      </div>
    </section>
  );
};

export default WhyChooseUs;
