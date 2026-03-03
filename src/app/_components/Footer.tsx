'use client';

import React from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { Facebook, Instagram, Twitter, MapPin, Phone, Mail, Heart } from 'lucide-react';

const Footer: React.FC = () => {
  const quickLinks = [
    { href: '/upcoming-events', label: 'Upcoming Events' },
    { href: '/past-events', label: 'Past Events' },
    { href: '/about-us', label: 'About Us' },
  ];

  const supportLinks = [
    { href: '/contact-us', label: 'Contact Us' },
    { href: '/safety-guides', label: 'Safety Guides' },
    { href: '/refund-policy', label: 'Refund Policy' },
  ];

  const socialLinks = [
    { href: '#', icon: <Facebook className="w-5 h-5" />, label: 'Facebook' },
    { href: '#', icon: <Instagram className="w-5 h-5" />, label: 'Instagram' },
    { href: '#', icon: <Twitter className="w-5 h-5" />, label: 'Twitter' },
  ];

  return (
    <footer className="bg-secondary text-white border-t border-white/10 pt-20 pb-10">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
          <div className="lg:col-span-1">
            <Link href="/" className="block mb-8">
              <Image src="/img/logo-white.svg" alt="EventsBox Logo" width={140} height={40} className="h-10" />
            </Link>
            <p className="text-white mb-8 leading-relaxed">
              EventsBox is the leading event discovery and ticketing platform in Australia, connecting people with unforgettable experiences.
            </p>
            <div className="flex gap-4">
              {socialLinks.map((link, index) => (
                <a key={index} href={link.href} aria-label={link.label} className="size-10 rounded-full bg-white/5 flex items-center justify-center text-white hover:bg-primary hover:text-white transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/60 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary">
                  {link.icon}
                </a>
              ))}
            </div>
          </div>

          <div>
            <h4 className="font-bold text-lg mb-8 text-white">Quick Links</h4>
            <ul className="space-y-4">
              {quickLinks.map((link) => (
                <li key={link.href}>
                  <Link href={link.href} className="group flex items-center text-white hover:text-primary transition-colors font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/60 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary rounded-sm">
                    <span className="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                    <span>{link.label}</span>
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h4 className="font-bold text-lg mb-8 text-white">Support</h4>
            <ul className="space-y-4">
              {supportLinks.map((link) => (
                <li key={link.label}>
                  <Link href={link.href} className="group flex items-center text-white hover:text-primary transition-colors font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/60 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary rounded-sm">
                    <span className="w-0 h-[2px] bg-primary mr-0 opacity-0 group-hover:opacity-100 group-hover:w-3 group-hover:mr-3 transition-all duration-300"></span>
                    <span>{link.label}</span>
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          <div>
            <h4 className="font-bold text-lg mb-8 text-white">Contact Us</h4>
            <ul className="space-y-6">
              <li className="flex items-start gap-4 text-white">
                <MapPin className="w-5 h-5 text-primary shrink-0 mt-1" />
                <div className="leading-relaxed">Melbourne, Victoria,<br />Australia</div>
              </li>
              <li className="flex items-start gap-4 text-white">
                <Phone className="w-5 h-5 text-primary shrink-0 mt-1" />
                <div className="leading-relaxed">(+61) 470119587</div>
              </li>
              <li className="flex items-start gap-4 text-white">
                <Mail className="w-5 h-5 text-primary shrink-0 mt-1" />
                <div className="leading-relaxed">
                  <a href="mailto:hello@eventsbox.com.au" className="hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/60 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary rounded-sm">hello@eventsbox.com.au</a>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div className="border-t border-white/10 pt-10 flex flex-col md:flex-row items-center justify-between text-white text-sm gap-4">
          <p>&copy; {new Date().getFullYear()} EventsBox. Built with <Heart className="w-3 h-3 inline text-red-500" /> in Australia.</p>
          <div className="flex items-center gap-6">
            <Link href="/privacy-policy" className="hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/60 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary rounded-sm">Privacy Policy</Link>
            <Link href="/terms-of-service" className="hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/60 focus-visible:ring-offset-2 focus-visible:ring-offset-secondary rounded-sm">Terms of Service</Link>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
