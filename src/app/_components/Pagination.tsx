
import React from 'react';
import { ChevronRight } from 'lucide-react';

const Pagination: React.FC = () => {
  return (
    <div className="mt-12 flex justify-center gap-2">
      <span aria-disabled="true" className="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 opacity-50 cursor-not-allowed">1</span>
      <span aria-disabled="true" className="w-10 h-10 flex items-center justify-center rounded-[10px] bg-primary text-white shadow-md shadow-primary/20 font-bold opacity-50 cursor-not-allowed">2</span>
      <span aria-disabled="true" className="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-gray-500 opacity-50 cursor-not-allowed">3</span>
      <span className="w-10 h-10 flex items-center justify-center text-gray-400">...</span>
      <span aria-disabled="true" className="w-10 h-10 flex items-center justify-center rounded-[10px] bg-white border border-gray-200 text-secondary opacity-50 cursor-not-allowed">
        <ChevronRight className="w-5 h-5" />
      </span>
    </div>
  );
};

export default Pagination;
