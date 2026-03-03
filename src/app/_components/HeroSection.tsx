'use client';

import React from 'react';
import Image from 'next/image';
import { Search, MapPin, Calendar, ChevronDown } from 'lucide-react';

const HeroSection: React.FC = () => {
  return (
    <section className="relative flex flex-col md:block h-screen min-h-[600px] md:h-[95vh] md:min-h-[650px] overflow-hidden bg-white">
      <div className="relative h-[60vh] md:h-full md:absolute md:inset-0 w-full flex items-center justify-center z-0 pt-[80px] md:pt-[250px]">
        <div className="absolute inset-0 z-0 overflow-hidden">
          <Image
            src="/img/hero-cover.jpg"
            alt="Hero Background"
            layout="fill"
            objectFit="cover"
            className="md:scale-105 md:animate-[slow-zoom_20s_ease-in-out_infinite_alternate]"
          />
          <div className="absolute inset-0 bg-[#00000040]"></div>
        </div>

        <div className="container mx-auto px-6 relative z-10 flex flex-col items-center text-center">
          <h1 className="text-[2.65rem] md:text-5xl lg:text-7xl font-black text-white mb-2 md:mb-10 leading-[1.1] tracking-tight animate-fade-in-up md:whitespace-nowrap px-2" style={{ animationDelay: '0.1s' }}>
            Find Australia&apos;s <br className="block md:hidden" />Best Events Here!
          </h1>
          <div className="h-1 w-12 bg-primary md:hidden animate-fade-in-up mt-2" style={{ animationDelay: '0.2s' }}></div>
        </div>
      </div>

      <div className="relative h-[40vh] md:h-auto md:absolute md:bottom-[20%] lg:bottom-[15%] md:left-0 w-full flex flex-col justify-center px-5 md:px-0 py-6 md:py-0 z-10 animate-fade-in-up" style={{ animationDelay: '0.3s' }}>
        <div className="container mx-auto px-0 md:px-6 flex justify-center w-full">
          <div className="w-full max-w-5xl bg-white md:bg-white md:p-2 md:rounded-[10px] md:shadow-2xl flex flex-col md:flex-row items-center gap-3 md:gap-0 border-none">
            <div className="w-full md:flex-1 flex items-center px-4 md:px-6 py-3 md:py-4 transition-colors cursor-text group border border-[#e5e7eb] rounded-[5px] md:border-none md:border-r md:border-gray-100 md:rounded-none">
              <Search className="hidden md:block w-5 md:w-6 h-5 md:h-6 text-gray-400 group-hover:text-primary transition-colors mr-3" />
              <input type="text" placeholder="Enter name ..." className="w-full focus:outline-none text-[#6b7280] placeholder:text-[#9ca3af] text-[15px] md:text-lg font-medium bg-transparent" />
            </div>

            <div className="w-full md:flex-1 flex items-center px-4 md:px-6 py-3 md:py-4 transition-colors group cursor-pointer border border-[#e5e7eb] rounded-[5px] md:border-none md:border-r md:border-gray-100 md:rounded-none relative">
              <MapPin className="hidden md:block w-5 md:w-6 h-5 md:h-6 text-gray-400 group-hover:text-primary transition-colors mr-3" />
              <select className="w-full focus:outline-none text-[#9ca3af] bg-transparent appearance-none text-[15px] md:text-lg font-medium cursor-pointer w-[calc(100%-20px)]">
                <option value="">All Cities</option>
                <option value="sydney">Sydney, NSW</option>
                <option value="melbourne">Melbourne, VIC</option>
                <option value="brisbane">Brisbane, QLD</option>
                <option value="perth">Perth, WA</option>
              </select>
              <ChevronDown className="w-4 h-4 text-gray-300 absolute right-4 md:hidden pointer-events-none" />
            </div>

            <div className="w-full md:flex-1 flex items-center px-4 md:px-6 py-3 md:py-4 transition-colors group cursor-pointer border border-[#e5e7eb] rounded-[5px] md:border-none md:rounded-none relative">
              <Calendar className="hidden md:block w-5 md:w-6 h-5 md:h-6 text-gray-400 group-hover:text-primary transition-colors mr-3" />
              <select className="w-full focus:outline-none text-[#9ca3af] bg-transparent appearance-none text-[15px] md:text-lg font-medium cursor-pointer w-[calc(100%-20px)]">
                <option value="">Select Category</option>
                <option value="today">Today</option>
                <option value="tomorrow">Tomorrow</option>
                <option value="weekend">This Weekend</option>
                <option value="month">This Month</option>
              </select>
              <ChevronDown className="w-4 h-4 text-gray-300 absolute right-4 md:hidden pointer-events-none" />
            </div>

            <button className="w-full md:w-auto bg-primary text-white px-8 md:px-10 py-[14px] md:py-4 md:m-1 rounded-[5px] md:rounded-[10px] text-base md:text-lg font-bold hover:bg-opacity-90 transition-all flex items-center justify-center gap-2 hover:shadow-[0_0_20px_rgba(255,102,102,0.4)] whitespace-nowrap mt-1 md:mt-0">
              Search
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
