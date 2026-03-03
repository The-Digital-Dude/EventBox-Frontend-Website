
import React from 'react';
import { Compass, Ticket, Mail, Smile } from 'lucide-react';

const steps = [
  {
    icon: <Compass className="w-8 h-8" />,
    title: 'Explore Events',
    description: 'Browse our platform to find the events that match your interests.',
  },
  {
    icon: <Ticket className="w-8 h-8" />,
    title: 'Buy Ticket',
    description: 'Purchase tickets for the events you like with secure checkout.',
  },
  {
    icon: <Mail className="w-8 h-8" />,
    title: 'Get Ticket',
    description: 'Receive your purchased ticket via email or mobile instantly.',
  },
  {
    icon: <Smile className="w-8 h-8" />,
    title: 'Attend & Have Fun!',
    description: 'Go to the event, have an amazing time, and make great memories!',
  },
];

const HowItWorks: React.FC = () => {
  return (
    <section className="py-20 bg-white">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="text-center mb-16">
          <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">How It Works</span>
          <h2 className="text-3xl md:text-4xl font-black text-secondary leading-tight">Best Ticket Buying Experience</h2>
        </div>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 relative">
          <div className="hidden lg:block absolute top-[48px] left-[15%] right-[15%] h-[2px] bg-gradient-to-r from-transparent via-gray-200 to-transparent z-0"></div>
          {steps.map((step, index) => (
            <div key={index} className="relative z-10 flex flex-col items-center text-center group">
              <div className="w-24 h-24 mb-6 rounded-full bg-white border-4 border-white shadow-[0_10px_40px_-10px_rgba(0,0,0,0.1)] flex items-center justify-center text-primary group-hover:-translate-y-2 group-hover:shadow-[0_20px_40px_-10px_rgba(0,0,0,0.15)] transition-all duration-300 relative">
                <span className="absolute -top-2 -right-2 w-8 h-8 rounded-full bg-secondary text-white font-bold flex items-center justify-center border-[3px] border-white text-sm shadow-sm transition-colors group-hover:bg-primary">{index + 1}</span>
                {step.icon}
              </div>
              <h3 className="text-xl font-bold text-secondary mb-2 group-hover:text-primary transition-colors">{step.title}</h3>
              <p className="text-gray-500 text-sm leading-relaxed max-w-[220px]">{step.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default HowItWorks;
