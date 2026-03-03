'use client';

import React, { useState, useEffect, useRef } from 'react';
import Link from 'next/link';
import Image from 'next/image';
import { usePathname } from 'next/navigation';
import { Menu, X, PlusCircle, User } from 'lucide-react';

const Header: React.FC = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);
  const mobileMenuRef = useRef<HTMLDivElement>(null);
  const menuButtonRef = useRef<HTMLButtonElement>(null);
  const pathname = usePathname();
  const isTransparent = pathname === '/';

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  useEffect(() => {
    if (isMenuOpen) {
      document.body.classList.add('overflow-hidden');
      const focusableElements = mobileMenuRef.current?.querySelectorAll<HTMLElement>(
        'a[href], button:not([disabled]), textarea, input, select'
      );
      const firstElement = focusableElements?.[0];
      const lastElement = focusableElements?.[focusableElements.length - 1];

      const handleKeyDown = (event: KeyboardEvent) => {
        if (event.key === 'Escape') {
          setIsMenuOpen(false);
          menuButtonRef.current?.focus();
          return;
        }

        if (event.key === 'Tab' && firstElement && lastElement) {
          if (event.shiftKey && document.activeElement === firstElement) {
            event.preventDefault();
            lastElement.focus();
          } else if (!event.shiftKey && document.activeElement === lastElement) {
            event.preventDefault();
            firstElement.focus();
          }
        }
      };

      document.addEventListener('keydown', handleKeyDown);
      firstElement?.focus();

      return () => {
        document.removeEventListener('keydown', handleKeyDown);
        document.body.classList.remove('overflow-hidden');
      };
    }
    document.body.classList.remove('overflow-hidden');
  }, [isMenuOpen]);

  const navLinks = [
    { href: '/', label: 'Home' },
    { href: '/upcoming-events', label: 'Upcoming Events' },
    { href: '/past-events', label: 'Past Events' },
    { href: '/about-us', label: 'About Us' },
    { href: '/contact-us', label: 'Contact Us' },
  ];

  const headerClasses = `fixed top-0 left-0 w-full z-50 transition-all-custom py-5 ${
    isTransparent && !isScrolled ? '' : 'bg-white shadow-sm'
  }`;
  const linkColor = isTransparent && !isScrolled ? 'text-white' : 'text-secondary';

  return (
    <>
      <header id="main-header" className={headerClasses}>
        <div className="container mx-auto px-6 max-w-[1280px] flex items-center justify-between">
          <Link href="/" className="relative z-10">
            <Image
              id="header-logo"
              src={isTransparent && !isScrolled ? '/img/logo-white.svg' : '/img/logo-dark.svg'}
              alt="EventsBox Logo"
              width={160}
              height={48}
              className="transition-all-custom h-10 md:h-12"
            />
          </Link>

          <nav className="hidden md:flex items-center space-x-8">
            {navLinks.map((link) => (
              <Link
                key={link.href}
                href={link.href}
                aria-current={pathname === link.href ? 'page' : undefined}
                className={`nav-link font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white rounded-sm ${
                  pathname === link.href ? 'text-primary' : `${linkColor} hover:text-primary`
                }`}
              >
                {link.label}
              </Link>
            ))}
          </nav>

          <div className="flex items-center gap-4">
            <Link href="/organize-event" className={`hidden md:flex items-center gap-2 ${linkColor} font-medium hover:text-primary transition-colors mr-4 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white rounded-md`}>
              <PlusCircle className="w-5 h-5" />
              Organize Event
            </Link>
            <Link href="/my-account" aria-label="My account" className="bg-primary text-white p-3 rounded-[10px] hover:bg-opacity-90 transition-all shadow-lg shadow-primary/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
              <User className="w-6 h-6" />
            </Link>
            <button
              ref={menuButtonRef}
              id="mobile-menu-btn"
              aria-label="Open mobile menu"
              aria-expanded={isMenuOpen}
              aria-controls="mobile-menu"
              className={`md:hidden ${linkColor} p-2 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white`}
              onClick={() => setIsMenuOpen(true)}
            >
              <Menu className="w-8 h-8" />
            </button>
          </div>
        </div>
      </header>

      {/* Mobile Menu */}
      <div
        ref={mobileMenuRef}
        id="mobile-menu"
        role="dialog"
        aria-modal="true"
        aria-hidden={!isMenuOpen}
        aria-labelledby="mobile-menu-title"
        className={`fixed inset-0 bg-white z-[60] flex flex-col pt-6 px-6 pb-6 transform ${isMenuOpen ? 'translate-x-0 pointer-events-auto' : 'translate-x-full pointer-events-none'} transition-transform duration-300 md:hidden overflow-y-auto`}
      >
        <div className="flex items-center justify-between mb-8">
          <h2 id="mobile-menu-title" className="sr-only">Mobile Menu</h2>
          <Image src="/img/logo-dark.svg" alt="EventsBox Logo" width={140} height={40} className="h-10" />
          <button
            id="close-mobile-menu"
            aria-label="Close mobile menu"
            className="text-secondary p-2 -mr-2 rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white"
            onClick={() => setIsMenuOpen(false)}
          >
            <X className="w-8 h-8" />
          </button>
        </div>

        <nav className="flex flex-col space-y-6">
          {navLinks.map((link) => (
            <Link
              key={link.href}
              href={link.href}
              aria-current={pathname === link.href ? 'page' : undefined}
              className={`text-2xl font-black transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white rounded-md ${
                pathname === link.href ? 'text-primary' : 'text-secondary hover:text-primary'
              }`}
              onClick={() => setIsMenuOpen(false)}
            >
              {link.label}
            </Link>
          ))}
        </nav>

        <div className="mt-auto pt-10 border-t border-gray-100 flex flex-col gap-4">
          <Link href="/organize-event" className="flex items-center justify-center gap-2 bg-slate-50 text-secondary py-4 rounded-xl font-bold hover:bg-slate-100 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
            <PlusCircle className="w-5 h-5" />
            Organize Event
          </Link>
          <Link href="/my-account" className="bg-primary text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 hover:bg-secondary transition-all shadow-lg shadow-primary/20 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white">
            <User className="w-5 h-5" />
            My Account
          </Link>
        </div>
      </div>
      {!isTransparent && <div className="h-[88px]"></div>}
    </>
  );
};

export default Header;
