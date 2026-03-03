
import React from 'react';
import { ShieldCheck, Info } from 'lucide-react';

const BillingDetailsForm: React.FC = () => {
  return (
    <div className="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
      <div className="bg-secondary p-4 text-white">
        <h2 className="text-sm font-bold uppercase tracking-wider flex items-center gap-2">
          <ShieldCheck className="w-4 h-4" />
          Billing Details
        </h2>
      </div>
      <div className="p-6">
        <div className="space-y-6">
          <div className="space-y-4">
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div className="space-y-1.5">
                <label htmlFor="first_name" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">First Name</label>
                <input id="first_name" name="first_name" autoComplete="given-name" type="text" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
              </div>
              <div className="space-y-1.5">
                <label htmlFor="last_name" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Last Name</label>
                <input id="last_name" name="last_name" autoComplete="family-name" type="text" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
              </div>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div className="space-y-1.5">
                <label htmlFor="email" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Email Address</label>
                <input id="email" name="email" autoComplete="email" type="email" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
              </div>
              <div className="space-y-1.5">
                <label htmlFor="confirm_email" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Retype Email Address</label>
                <input id="confirm_email" name="confirm_email" autoComplete="email" type="email" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
              </div>
            </div>
            <p className="text-[10px] text-gray-500 font-bold flex items-center gap-1.5 mt-1 bg-blue-50 text-blue-700 p-2.5 rounded-lg border border-blue-100">
              <Info className="w-3.5 h-3.5 flex-shrink-0" />
              Please make sure your email address is correct, you will receive your tickets here.
            </p>
            <div className="space-y-1.5">
              <label htmlFor="phone" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Phone Number</label>
              <input id="phone" name="phone" autoComplete="tel" inputMode="tel" type="tel" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
            </div>
            <div className="space-y-1.5">
              <label htmlFor="address" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">Address</label>
              <input id="address" name="address" autoComplete="street-address" type="text" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
            </div>
            <div className="space-y-1.5">
              <label htmlFor="city" className="block text-[11px] font-bold text-gray-500 uppercase tracking-widest">City</label>
              <input id="city" name="city" autoComplete="address-level2" type="text" required className="w-full bg-gray-50 border border-gray-200 rounded-lg px-4 py-3 text-sm focus:bg-white focus:ring-2 focus:ring-primary/20 focus:border-primary/50 transition-all outline-none text-secondary font-medium" />
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default BillingDetailsForm;
