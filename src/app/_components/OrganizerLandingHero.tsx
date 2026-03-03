
import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { ArrowRight } from 'lucide-react';

const OrganizerLandingHero: React.FC = () => {
  return (
    <section className="relative min-h-[90vh] flex items-center justify-center pt-[100px] overflow-hidden bg-[#22213F]">
      <div className="absolute inset-0 z-0">
        <Image src="/img/organizer-hero.jpg" alt="Excited crowd at an event" layout="fill" objectFit="cover" className="opacity-30" />
        <div className="absolute inset-0 bg-gradient-to-r from-[#22213F] via-[#22213F]/90 to-transparent"></div>
        <div className="absolute inset-0 bg-gradient-to-t from-[#22213F] via-transparent to-transparent"></div>
      </div>
      <div className="container mx-auto px-6 max-w-[1280px] relative z-10 grid md:grid-cols-2 gap-12 items-center">
        <div className="text-white max-w-2xl">
          <span className="inline-block py-1.5 px-4 rounded-full bg-primary/20 text-primary font-bold text-sm mb-6 border border-primary/30 backdrop-blur-sm">
            🚀 The #1 Platform for Australian Organizers
          </span>
          <h1 className="text-4xl md:text-6xl lg:text-7xl font-black leading-[1.1] mb-6 tracking-tight">
            Sell More Tickets.<br /> <span className="text-transparent bg-clip-text bg-gradient-to-r from-primary to-orange-400">Keep More Revenue.</span>
          </h1>
          <p className="text-lg md:text-xl text-gray-300 mb-10 leading-relaxed font-medium">
            The easiest, most powerful ticketing platform built for event creators. From local comedy clubs to massive festivals, we give you the tools to sell out faster.
          </p>
          <div className="flex flex-col sm:flex-row gap-4">
            <Link href="#" className="bg-primary text-white text-lg font-bold py-4 px-8 rounded-xl hover:bg-white hover:text-secondary transition-all text-center shadow-[0_10px_30px_-10px_#ef4444] flex items-center justify-center gap-2 group">
              Start Selling Today <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </Link>
            <Link href="#features" className="bg-white/10 text-white border border-white/20 text-lg font-bold py-4 px-8 rounded-xl hover:bg-white/20 transition-all text-center backdrop-blur-sm">
              Explore Features
            </Link>
          </div>
          <div className="mt-8 flex items-center gap-4 text-sm text-gray-400 font-medium">
            <div className="flex -space-x-3">
              <Image src="/img/avatar-1.jpg" width={40} height={40} className="w-10 h-10 rounded-full border-2 border-[#22213F]" alt="Organizer" />
              <Image src="/img/avatar-2.jpg" width={40} height={40} className="w-10 h-10 rounded-full border-2 border-[#22213F]" alt="Organizer" />
              <Image src="/img/avatar-3.jpg" width={40} height={40} className="w-10 h-10 rounded-full border-2 border-[#22213F]" alt="Organizer" />
              <div className="w-10 h-10 rounded-full border-2 border-[#22213F] bg-gray-700 flex items-center justify-center text-xs text-white pb-0.5">5k+</div>
            </div>
            <p>Trusted by thousands of organizers across Australia.</p>
          </div>
        </div>
        <div className="hidden md:block relative">
          <div className="absolute inset-0 bg-primary/20 blur-[100px] rounded-full"></div>
          <div className="bg-white rounded-3xl p-8 shadow-2xl relative z-10 border border-gray-100 transform rotate-2 hover:rotate-0 transition-transform duration-500">
            <h3 className="text-2xl font-black text-secondary mb-2">Create Your Organizer Account</h3>
            <p className="text-gray-500 mb-6 font-medium">It takes less than 2 minutes to get started.</p>
            <form className="space-y-4">
              <div>
                <label className="block text-sm font-bold text-secondary mb-1">Company / Organization Name</label>
                <input type="text" className="w-full bg-slate-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="e.g. Awesome Events Co." />
              </div>
              <div>
                <label className="block text-sm font-bold text-secondary mb-1">Work Email</label>
                <input type="email" className="w-full bg-slate-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="you@company.com" />
              </div>
              <div>
                <label className="block text-sm font-bold text-secondary mb-1">Phone Number</label>
                <input type="tel" className="w-full bg-slate-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" placeholder="+61 XXX XXX XXX" />
              </div>
              <button type="button" className="w-full bg-secondary text-white font-bold py-4 rounded-xl hover:bg-primary transition-colors mt-2 text-lg">
                Get Free Access Now
              </button>
            </form>
            <p className="text-center text-xs text-gray-400 mt-4">No credit card required to sign up.</p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default OrganizerLandingHero;
