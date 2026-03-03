
import React from 'react';
import Link from 'next/link';

const FinalCTA: React.FC = () => {
  return (
    <section className="py-24 bg-primary relative overflow-hidden">
      <div className="absolute top-0 left-0 w-64 h-64 bg-white/10 rounded-full blur-[50px] -translate-x-1/2 -translate-y-1/2"></div>
      <div className="absolute bottom-0 right-0 w-96 h-96 bg-black/10 rounded-full blur-[80px] translate-x-1/3 translate-y-1/3"></div>
      <div className="container mx-auto px-6 max-w-[1280px] text-center relative z-10">
        <h2 className="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">Ready to pack the house?</h2>
        <p className="text-xl text-white/90 mb-10 max-w-2xl mx-auto font-medium">Join thousands of successful Australian organizers selling tickets on EventsBox.</p>
        <div className="flex flex-col sm:flex-row gap-4 justify-center">
          <Link href="/organize-event" className="bg-white text-primary text-xl font-bold py-4 px-10 rounded-xl hover:bg-secondary hover:text-white transition-all shadow-[0_10px_30px_-10px_rgba(0,0,0,0.3)]">
            Create Organizer Account
          </Link>
          <Link href="/talk-to-sales" className="bg-transparent text-white border-2 border-white/30 text-xl font-bold py-4 px-10 rounded-xl hover:bg-white/10 transition-all">
            Talk to Sales
          </Link>
        </div>
      </div>
    </section>
  );
};

export default FinalCTA;
