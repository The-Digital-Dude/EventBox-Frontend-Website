
import React from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { Smartphone, LayoutDashboard, Zap, ArrowRight } from 'lucide-react';

const features = [
  { icon: <Smartphone className="w-4 h-4 text-primary" />, label: 'Ticket Scanning App' },
  { icon: <LayoutDashboard className="w-4 h-4 text-primary" />, label: 'High-end Organizer Portal' },
  { icon: <Zap className="w-4 h-4 text-primary" />, label: 'Flexible Plans' },
];

const MultiVendorCTA: React.FC = () => {
  return (
    <section className="py-24 relative overflow-hidden">
      <div className="absolute inset-0">
        <Image 
          src="/img/organize-event-bg.jpg" 
          alt="Organize Event"
          layout="fill"
          objectFit="cover"
        />
        <div className="absolute inset-0 bg-secondary/80"></div>
      </div>

      <div className="container mx-auto px-6 max-w-[1280px] relative z-10">
        <div className="max-w-3xl mx-auto text-center">
          <span className="inline-block py-1.5 px-4 rounded-full bg-white/10 border border-white/20 text-white font-bold text-xs uppercase tracking-widest mb-6">For Organizers</span>
          <h2 className="text-3xl md:text-5xl font-black text-white mb-6 leading-[1.2]">
            Want to organize your own successful event?
          </h2>
          <p className="text-white/70 text-base md:text-xl mb-8 leading-relaxed">
            Join Australia&apos;s fastest-growing event platform. Sell tickets effortlessly, manage attendees actively, and grow your brand.
          </p>
          <div className="flex flex-wrap items-center justify-center gap-4 md:gap-6 text-white text-xs md:text-sm font-medium mb-10">
            {features.map((feature, index) => (
              <div key={index} className="flex items-center gap-2 bg-white/5 backdrop-blur-md px-4 py-2 rounded-full border border-white/10">
                {feature.icon}
                <span>{feature.label}</span>
              </div>
            ))}
          </div>

          <div className="flex justify-center">
            <Link href="#" className="group relative px-8 md:px-10 py-4 md:py-5 bg-primary text-white font-bold rounded-full overflow-hidden transition-all hover:scale-105 flex items-center gap-3 shadow-xl shadow-primary/20">
              <span className="relative z-10 text-base md:text-lg">Start Selling Tickets</span>
              <ArrowRight className="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" />
            </Link>
          </div>
        </div>
      </div>
    </section>
  );
};

export default MultiVendorCTA;
