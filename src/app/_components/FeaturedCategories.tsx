
import React from 'react';
import CategoryCard from './CategoryCard';
import { featuredCategories } from '@/lib/data';

const FeaturedCategories: React.FC = () => {
  return (
    <section className="py-16 bg-slate-50">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="text-center mb-12">
          <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-3">Featured Event Categories</span>
          <h2 className="text-3xl md:text-4xl font-black text-secondary leading-tight">Explore by Categories</h2>
        </div>
        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-6">
          {featuredCategories.map((category, index) => (
            <CategoryCard key={index} category={category} />
          ))}
        </div>
      </div>
    </section>
  );
};

export default FeaturedCategories;
