
import React from 'react';
import { MapPin, Phone, Mail, Facebook, Twitter, Instagram, Linkedin, Send } from 'lucide-react';

const contactInfo = [
  { icon: <MapPin className="w-5 h-5" />, title: 'Visit Us', lines: ['Melbourne, Victoria,', 'Australia'] },
  { icon: <Phone className="w-5 h-5" />, title: 'Call Us', lines: ['(+61) 470119587', 'Mon-Fri 9am to 6pm'] },
  { icon: <Mail className="w-5 h-5" />, title: 'Email Us', lines: ['hello@eventsbox.com.au'] },
];

const socialLinks = [
  { icon: <Facebook className="w-4 h-4" />, href: '#' },
  { icon: <Twitter className="w-4 h-4" />, href: '#' },
  { icon: <Instagram className="w-4 h-4" />, href: '#' },
  { icon: <Linkedin className="w-4 h-4" />, href: '#' },
];

const ContactFormSection: React.FC = () => {
  return (
    <section className="py-24 bg-slate-50 relative -mt-6">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="bg-white rounded-[20px] shadow-sm border border-gray-100 overflow-hidden relative z-10 flex flex-col lg:flex-row">
          <div className="w-full lg:w-1/3 bg-secondary p-10 md:p-14 text-white relative overflow-hidden">
            <div className="absolute -bottom-24 -right-24 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
            <h3 className="text-3xl font-black mb-10 relative z-10">Get in touch</h3>
            <div className="space-y-10 relative z-10">
              {contactInfo.map((item, index) => (
                <div key={index} className="flex items-start gap-5 group">
                  <div className="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all shrink-0">
                    {item.icon}
                  </div>
                  <div>
                    <h4 className="font-bold text-lg mb-2">{item.title}</h4>
                    {item.lines.map((line, i) => (
                      <p key={i} className={`leading-relaxed ${i > 0 ? 'text-white/40 text-sm' : 'text-white/70'}`}>{line}</p>
                    ))}
                  </div>
                </div>
              ))}
            </div>
            <div className="mt-16 flex gap-4 relative z-10">
              {socialLinks.map((link, index) => (
                <a key={index} href={link.href} className="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-primary transition-all">
                  {link.icon}
                </a>
              ))}
            </div>
          </div>

          <div className="w-full lg:w-2/3 p-10 md:p-14 lg:p-16 relative">
            <h3 className="text-3xl font-black text-secondary mb-2">Send us a Message</h3>
            <p className="text-gray-500 mb-10">Fill out the form below and we will get back to you within 24 hours.</p>
            <form action="#" method="POST" className="space-y-6">
              <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div className="space-y-2">
                  <label htmlFor="first_name" className="block text-sm font-bold text-secondary">First Name</label>
                  <input type="text" id="first_name" name="first_name" placeholder="John" className="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" required />
                </div>
                <div className="space-y-2">
                  <label htmlFor="last_name" className="block text-sm font-bold text-secondary">Last Name</label>
                  <input type="text" id="last_name" name="last_name" placeholder="Doe" className="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" required />
                </div>
              </div>
              <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div className="space-y-2">
                  <label htmlFor="email" className="block text-sm font-bold text-secondary">Email Address</label>
                  <input type="email" id="email" name="email" placeholder="john@example.com" className="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" required />
                </div>
                <div className="space-y-2">
                  <label htmlFor="phone" className="block text-sm font-bold text-secondary">Phone Number (Optional)</label>
                  <input type="tel" id="phone" name="phone" placeholder="+61 123 456 789" className="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium" />
                </div>
              </div>
              <div className="space-y-2">
                <label htmlFor="message" className="block text-sm font-bold text-secondary">Message</label>
                <textarea id="message" name="message" rows={5} placeholder="Write your message here..." className="w-full px-5 py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium resize-y max-h-64" required></textarea>
              </div>
              <button type="submit" className="w-full sm:w-auto px-10 py-5 bg-primary text-white font-bold rounded-[10px] shadow-xl shadow-primary/20 hover:bg-opacity-90 hover:-translate-y-1 transition-all flex items-center justify-center gap-3 group">
                <span>Send Message</span>
                <Send className="w-5 h-5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" />
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactFormSection;
