
import React from 'react';
import CityCard from './CityCard';
import { topCities } from '@/lib/data';

const TopCities: React.FC = () => {
  return (
    <section className="py-20 bg-slate-100 overflow-hidden">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="text-center mb-12">
          <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Buy Tickets Now!</span>
          <h2 className="text-3xl md:text-4xl font-black text-secondary leading-tight">Explore Events By Top Cities</h2>
        </div>
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
          {topCities.map((city, index) => (
            <CityCard key={index} city={city} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default TopCities;
