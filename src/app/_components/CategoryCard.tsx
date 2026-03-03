
import React from 'react';
import Link from 'next/link';
import { Disc, Sparkles, Music, User, Utensils, Star } from 'lucide-react';
import { Category } from '@/lib/types';

interface CategoryCardProps {
  category: Category;
}

const iconMap: { [key: string]: React.ElementType } = {
  disc: Disc,
  sparkles: Sparkles,
  music: Music,
  user: User,
  utensils: Utensils,
  star: Star,
};

const CategoryCard: React.FC<CategoryCardProps> = ({ category }) => {
  const Icon = iconMap[category.icon];
  const slug = category.name.toLowerCase().replace(/ & /g, '-').replace(/ /g, '-');

  return (
    <Link href={`/category/${slug}`} className="group relative bg-white p-6 rounded-[10px] border border-gray-100 transition-all-custom flex flex-col items-center text-center hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 hover:border-primary/20">
      <div className={`size-16 md:size-20 rounded-[10px] ${category.color} text-white flex items-center justify-center mb-5 rotate-3 group-hover:rotate-0 transition-transform shadow-lg shadow-black/5`}>
        {Icon && <Icon className="w-8 h-8 md:w-10 md:h-10" />}
      </div>
      <h3 className="font-bold text-secondary text-base md:text-lg mb-1 group-hover:text-primary transition-colors">{category.name}</h3>
      <p className="text-[10px] md:text-xs font-bold text-gray-400 uppercase tracking-widest">{category.events}</p>
      <div className="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-[10px]"></div>
    </Link>
  );
};

export default CategoryCard;
