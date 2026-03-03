
import React from 'react';

interface PageHeaderProps {
  title: string;
  description: string;
}

const PageHeader: React.FC<PageHeaderProps> = ({ title, description }) => {
  return (
    <div className="bg-secondary py-12">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <h1 className="text-3xl md:text-5xl font-black text-white">{title}</h1>
        <p className="text-white/70 mt-4 text-lg">{description}</p>
      </div>
    </div>
  );
};

export default PageHeader;
