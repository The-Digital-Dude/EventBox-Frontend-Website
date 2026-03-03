
import React from 'react';

interface EventsPageHeaderProps {
  title: string;
  description: string;
}

const EventsPageHeader: React.FC<EventsPageHeaderProps> = ({ title, description }) => {
  return (
    <div className="bg-secondary relative py-20 overflow-hidden">
      <div className="absolute inset-0">
        <div className="absolute inset-0 bg-secondary/90 z-10"></div>
        <div className="absolute -right-40 -top-40 w-[500px] h-[500px] bg-primary/20 rounded-full blur-[100px] z-0"></div>
        <div className="absolute -left-40 -bottom-40 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[100px] z-0"></div>
      </div>
      <div className="container mx-auto px-6 max-w-[1280px] relative z-20 text-center">
        <h1 className="text-4xl md:text-6xl font-black text-white mb-6">{title}</h1>
        <p className="text-white/70 text-lg md:text-xl max-w-2xl mx-auto">
          {description}
        </p>
      </div>
    </div>
  );
};

export default EventsPageHeader;
