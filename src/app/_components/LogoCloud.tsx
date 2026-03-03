
import React from 'react';

const logos = [
  'ComedyCentral',
  'TechSummit_AU',
  'Vivid_Events',
  'FoodFest',
  'LocalGigs',
];

const LogoCloud: React.FC = () => {
  return (
    <section className="py-10 bg-white border-b border-gray-100">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <p className="text-center text-sm font-bold text-gray-400 uppercase tracking-widest mb-6">Powering events for Australia&apos;s best creators</p>
        <div className="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-50 grayscale">
          {logos.map((logo, index) => (
            <h3 key={index} className="text-xl md:text-2xl font-black italic">{logo}</h3>
          ))}
        </div>
      </div>
    </section>
  );
};

export default LogoCloud;
