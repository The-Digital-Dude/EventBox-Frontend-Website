
import React from 'react';
import { Search, ChevronDown } from 'lucide-react';

const FilterBar: React.FC = () => {
  return (
    <div className="bg-white p-4 md:p-6 rounded-[15px] shadow-sm border border-gray-100 mb-8 lg:mb-12 flex flex-col md:flex-row gap-4 items-center justify-between z-10 relative">
      <div className="w-full md:w-1/2 relative">
        <Search className="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" />
        <input type="text" placeholder="Search events by name or city..." className="w-full pl-12 pr-4 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" />
      </div>
      <div className="w-full md:w-auto flex flex-col sm:flex-row gap-4">
        <div className="relative min-w-[160px]">
          <select className="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer">
            <option value="">All Categories</option>
            <option value="music">Music & Concerts</option>
            <option value="comedy">Comedy Shows</option>
            <option value="festival">Festivals</option>
            <option value="sports">Sports</option>
          </select>
          <ChevronDown className="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none" />
        </div>
        <div className="relative min-w-[160px]">
          <select className="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer">
            <option value="">Any Time</option>
            <option value="today">Today</option>
            <option value="tomorrow">Tomorrow</option>
            <option value="this-week">This Week</option>
            <option value="this-month">This Month</option>
          </select>
          <ChevronDown className="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none" />
        </div>
      </div>
    </div>
  );
};

export default FilterBar;
