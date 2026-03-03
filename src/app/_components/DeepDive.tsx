
import React from 'react';
import { Check } from 'lucide-react';

const deepDiveFeatures = [
  { title: 'Mobile-Optimized Checkout', description: 'Over 70% of tickets are bought on mobile. Our checkout feels like a native app.' },
  { title: 'Custom Event Pages', description: 'Make it yours. Complete control over branding, imagery, and information layout.' },
  { title: 'Automated Reminders', description: 'Reduce no-shows with automated email and SMS reminders sent to your attendees.' },
];

const DeepDive: React.FC = () => {
  return (
    <section className="py-24 bg-white overflow-hidden">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="flex flex-col lg:flex-row items-center gap-16">
          <div className="lg:w-1/2">
            <h2 className="text-3xl md:text-4xl font-black text-secondary leading-tight mb-6">
              Designed for Organizers who care about the <span className="text-primary">User Experience</span>.
            </h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed font-medium">
              We know that a clunky checkout process loses sales. That&apos;s why we&apos;ve obsessed over creating the smoothest, fastest ticket purchasing flow in the industry. Your attendees will love buying tickets from you.
            </p>
            <ul className="space-y-6">
              {deepDiveFeatures.map((feature, index) => (
                <li key={index} className="flex items-start gap-4">
                  <div className="w-10 h-10 rounded-full bg-green-100 text-green-600 flex items-center justify-center flex-shrink-0 mt-1">
                    <Check className="w-5 h-5" />
                  </div>
                  <div>
                    <h4 className="text-xl font-bold text-secondary mb-1">{feature.title}</h4>
                    <p className="text-gray-500 font-medium">{feature.description}</p>
                  </div>
                </li>
              ))}
            </ul>
          </div>
          <div className="lg:w-1/2 relative">
            {/* Visual representation of a dashboard */}
          </div>
        </div>
      </div>
    </section>
  );
};

export default DeepDive;
