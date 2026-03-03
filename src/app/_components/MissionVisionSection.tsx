
import React from 'react';
import { Target, Eye } from 'lucide-react';

const MissionVisionSection: React.FC = () => {
  return (
    <section className="py-20 bg-slate-50 relative overflow-hidden">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16">
          <div className="bg-white p-10 md:p-12 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all group relative overflow-hidden">
            <div className="absolute -right-20 -bottom-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl z-0"></div>
            <div className="relative z-10">
              <div className="w-16 h-16 rounded-full bg-primary/10 flex items-center justify-center text-primary mb-8 group-hover:bg-primary group-hover:text-white transition-all">
                <Target className="w-8 h-8" />
              </div>
              <h3 className="text-3xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">Our Mission</h3>
              <p className="text-gray-500 leading-relaxed text-lg">
                To revolutionize the event ticketing experience in Australia by providing a seamless, secure, and user-friendly platform that empowers both organizers to create extraordinary events and attendees to discover unforgettable experiences.
              </p>
            </div>
          </div>

          <div className="bg-white p-10 md:p-12 rounded-[20px] shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all group relative overflow-hidden">
            <div className="absolute -right-20 -bottom-20 w-64 h-64 bg-secondary/5 rounded-full blur-3xl z-0"></div>
            <div className="relative z-10">
              <div className="w-16 h-16 rounded-full bg-secondary/10 flex items-center justify-center text-secondary mb-8 group-hover:bg-secondary group-hover:text-white transition-all">
                <Eye className="w-8 h-8" />
              </div>
              <h3 className="text-3xl font-black text-secondary mb-4 group-hover:text-primary transition-colors">Our Vision</h3>
              <p className="text-gray-500 leading-relaxed text-lg">
                To become Australia&apos;s most trusted and vibrant community hub for live entertainment, connecting millions of people through shared passions and elevating the standard of event management nationwide.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default MissionVisionSection;
