
import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { City } from '@/lib/types';

interface CityCardProps {
  city: City;
}

const CityCard: React.FC<CityCardProps> = ({ city }) => {
  return (
    <Link href={city.link} className="group block relative overflow-hidden rounded-[15px] aspect-square shadow-sm hover:shadow-2xl hover:shadow-primary/20 transition-all duration-300 transform hover:-translate-y-1 bg-black">
      <Image 
        src={city.image} 
        alt={city.name} 
        layout="fill"
        objectFit="cover"
        className="transition-transform duration-700 group-hover:scale-110 opacity-70 group-hover:opacity-100"
      />
      <div className="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
      <div className="absolute bottom-0 left-0 w-full p-4 md:p-6 flex flex-col items-start justify-end">
        <h3 className="text-white font-black text-xl md:text-2xl mb-2 group-hover:text-primary transition-colors">{city.name}</h3>
        <p className="text-white font-bold text-[10px] uppercase tracking-widest bg-white/20 backdrop-blur-md px-3 py-1 rounded-full border border-white/10">{city.events} Events</p>
      </div>
    </Link>
  );
};

export default CityCard;
