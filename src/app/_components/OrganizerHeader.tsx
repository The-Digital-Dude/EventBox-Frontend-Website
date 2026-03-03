
import React from 'react';
import Image from 'next/image';
import { Mail, Facebook, Instagram, Twitter, Globe } from 'lucide-react';
import { organizer } from '@/lib/data';

const OrganizerHeader: React.FC = () => {
  return (
    <div className="bg-white rounded-[15px] p-6 text-center border border-gray-100 shadow-sm mb-12">
      <div className="relative w-32 h-32 mx-auto mb-6">
        <div className="w-full h-full rounded-full border-4 border-white shadow-lg overflow-hidden bg-slate-100 flex items-center justify-center p-4">
          <Image src={organizer.logo} alt={organizer.name} width={128} height={128} className="w-full h-auto object-contain" />
        </div>
      </div>
      <h1 className="text-3xl md:text-4xl font-black text-secondary mb-3">{organizer.name}</h1>
      <p className="text-gray-600 max-w-2xl mx-auto mb-6 leading-relaxed">{organizer.bio}</p>
      <div className="flex flex-wrap items-center justify-center gap-6 md:gap-10 mb-8">
        <div className="text-center">
          <span className="block text-2xl font-black text-secondary">{organizer.total_events}</span>
          <span className="text-xs font-bold text-gray-400 uppercase tracking-widest">Total Events</span>
        </div>
        <div className="hidden md:block w-px h-10 bg-gray-200"></div>
        <div className="flex gap-3">
          <button className="bg-white text-secondary font-bold py-2 px-6 rounded-full border border-gray-200 hover:border-primary hover:text-primary transition-colors flex items-center gap-2">
            <Mail className="w-4 h-4" /> Contact
          </button>
        </div>
      </div>
      <div className="flex items-center justify-center gap-4">
        {organizer.socials.facebook && (
          <a href={organizer.socials.facebook} className="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
            <Facebook className="w-5 h-5" />
          </a>
        )}
        {organizer.socials.instagram && (
          <a href={organizer.socials.instagram} className="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
            <Instagram className="w-5 h-5" />
          </a>
        )}
        {organizer.socials.twitter && (
          <a href={organizer.socials.twitter} className="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
            <Twitter className="w-5 h-5" />
          </a>
        )}
        {organizer.socials.website && (
          <a href={organizer.socials.website} className="w-10 h-10 rounded-full bg-slate-50 text-gray-400 hover:text-primary hover:bg-primary/10 flex items-center justify-center transition-colors">
            <Globe className="w-5 h-5" />
          </a>
        )}
      </div>
    </div>
  );
};

export default OrganizerHeader;
