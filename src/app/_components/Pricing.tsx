
import React from 'react';
import { CheckCircle2 } from 'lucide-react';

const Pricing: React.FC = () => {
  return (
    <section className="py-24 bg-secondary text-white relative overflow-hidden">
      <div className="absolute inset-0 opacity-10" style={{ backgroundImage: `url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fillRule="evenodd"%3E%3Cg fill="%23ffffff" fillOpacity="1"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')` }}></div>
      <div className="container mx-auto px-6 max-w-[1280px] relative z-10">
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="text-3xl md:text-5xl font-black leading-tight mb-6">Simple, Transparent Pricing</h2>
          <p className="text-xl text-gray-400 font-medium">No hidden fees. No setup costs. We only make money when you make money.</p>
        </div>
        <div className="bg-white/5 border border-white/10 rounded-[30px] p-8 md:p-12 backdrop-blur-md max-w-4xl mx-auto flex flex-col md:flex-row items-center gap-12">
          <div className="flex-1 text-center md:text-left">
            <h3 className="text-2xl font-black mb-4">Flexible Options</h3>
            <p className="text-gray-300 font-medium leading-relaxed mb-6">We understand every event is different. Choose to pass the booking fee to the buyer, absorb it yourself, or negotiate a fixed price per event for massive scaling.</p>
            <ul className="space-y-3 font-medium text-gray-200">
              <li className="flex items-center gap-3 justify-center md:justify-start">
                <CheckCircle2 className="text-primary w-5 h-5" /> Free events are always FREE
              </li>
              <li className="flex items-center gap-3 justify-center md:justify-start">
                <CheckCircle2 className="text-primary w-5 h-5" /> Connect your own Stripe account
              </li>
              <li className="flex items-center gap-3 justify-center md:justify-start">
                <CheckCircle2 className="text-primary w-5 h-5" /> Payouts processed instantly
              </li>
            </ul>
          </div>
          <div className="w-full md:w-auto bg-white text-secondary rounded-[20px] p-8 text-center shadow-2xl transform hover:scale-105 transition-transform">
            <p className="font-bold text-gray-400 uppercase tracking-widest text-sm mb-2">Standard Rate</p>
            <div className="text-5xl font-black text-secondary mb-2">2.5% <span className="text-xl text-primary">+ 50¢</span></div>
            <p className="text-sm font-bold text-gray-500 mb-6">per paid ticket</p>
            <button className="w-full bg-secondary text-white font-bold py-3 rounded-xl hover:bg-primary transition-colors">
              Create Event Now
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Pricing;
