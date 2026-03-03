
import React from 'react';
import { CalendarCheck, Users, Building2, ShieldCheck } from 'lucide-react';

const stats = [
  { icon: <CalendarCheck className="w-8 h-8" />, value: '5,000+', label: 'Events Hosted' },
  { icon: <Users className="w-8 h-8" />, value: '1.2M+', label: 'Happy Attendees' },
  { icon: <Building2 className="w-8 h-8" />, value: '50+', label: 'Cities Covered' },
  { icon: <ShieldCheck className="w-8 h-8" />, value: '100%', label: 'Secure Ticketing' },
];

const StatsSection: React.FC = () => {
  return (
    <section className="py-24 bg-secondary relative overflow-hidden">
      <div className="absolute inset-0 z-0 opacity-10" style={{ backgroundImage: 'radial-gradient(circle at 2px 2px, white 1px, transparent 0)', backgroundSize: '32px 32px' }}></div>
      <div className="container mx-auto px-6 max-w-[1280px] relative z-10 text-center">
        <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-4">By The Numbers</span>
        <h2 className="text-3xl md:text-5xl font-black text-white mb-16">Trusted by Thousands Across Australia</h2>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
          {stats.map((stat, index) => (
            <div key={index} className="flex flex-col items-center">
              <div className="w-16 h-16 rounded-[15px] bg-white/10 flex items-center justify-center text-primary mb-6">
                {stat.icon}
              </div>
              <h4 className="text-4xl md:text-5xl font-black text-white mb-2">{stat.value}</h4>
              <p className="text-white/60 font-medium uppercase tracking-wider text-sm">{stat.label}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default StatsSection;
