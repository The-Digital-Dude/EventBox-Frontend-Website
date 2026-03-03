'use client';

import React, { useEffect, useMemo, useRef, useState } from 'react';
import { CalendarCheck, Users, Building2, ShieldCheck } from 'lucide-react';

interface StatItem {
  icon: React.ReactNode;
  target: number;
  prefix?: string;
  suffix?: string;
  label: string;
}

const stats: StatItem[] = [
  { icon: <CalendarCheck className="w-8 h-8" />, target: 5000, suffix: '+', label: 'Events Hosted' },
  { icon: <Users className="w-8 h-8" />, target: 1.2, suffix: 'M+', label: 'Happy Attendees' },
  { icon: <Building2 className="w-8 h-8" />, target: 50, suffix: '+', label: 'Cities Covered' },
  { icon: <ShieldCheck className="w-8 h-8" />, target: 100, suffix: '%', label: 'Secure Ticketing' },
];

const formatStatValue = (value: number, stat: StatItem) => {
  if (stat.suffix === 'M+') {
    return `${value.toFixed(1)}${stat.suffix}`;
  }
  if (value >= 1000) {
    return `${Math.round(value).toLocaleString()}${stat.suffix ?? ''}`;
  }
  return `${Math.round(value)}${stat.suffix ?? ''}`;
};

const StatsSection: React.FC = () => {
  const [hasEntered, setHasEntered] = useState(false);
  const [reduceMotion, setReduceMotion] = useState(false);
  const [progress, setProgress] = useState(0);
  const sectionRef = useRef<HTMLElement | null>(null);

  useEffect(() => {
    const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    const updateReduceMotion = () => setReduceMotion(mediaQuery.matches);
    updateReduceMotion();
    mediaQuery.addEventListener('change', updateReduceMotion);
    return () => mediaQuery.removeEventListener('change', updateReduceMotion);
  }, []);

  useEffect(() => {
    if (reduceMotion) {
      return;
    }

    const element = sectionRef.current;
    if (!element) {
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            setHasEntered(true);
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.2 }
    );

    observer.observe(element);
    return () => observer.disconnect();
  }, [reduceMotion]);

  useEffect(() => {
    if (reduceMotion || !hasEntered) {
      return;
    }

    const duration = 1300;
    const start = performance.now();
    let frameId = 0;

    const tick = (now: number) => {
      const elapsed = now - start;
      const next = Math.min(elapsed / duration, 1);
      setProgress(next);
      if (next < 1) {
        frameId = window.requestAnimationFrame(tick);
      }
    };

    frameId = window.requestAnimationFrame(tick);
    return () => window.cancelAnimationFrame(frameId);
  }, [hasEntered, reduceMotion]);

  const visibleProgress = useMemo(() => {
    if (reduceMotion) {
      return 1;
    }
    return progress;
  }, [progress, reduceMotion]);

  return (
    <section ref={sectionRef} className="py-24 bg-secondary relative overflow-hidden">
      <div className="absolute inset-0 z-0 opacity-10" style={{ backgroundImage: 'radial-gradient(circle at 2px 2px, white 1px, transparent 0)', backgroundSize: '32px 32px' }}></div>
      <div className="container mx-auto px-6 max-w-[1280px] relative z-10 text-center">
        <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-4">By The Numbers</span>
        <h2 className="text-3xl md:text-5xl font-black text-white mb-16">Trusted by Thousands Across Australia</h2>
        <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
          {stats.map((stat, index) => {
            const value = stat.target * visibleProgress;
            return (
              <div
                key={stat.label}
                className="flex flex-col items-center animate-list-reveal"
                style={{ animationDelay: `${Math.min(index * 90, 300)}ms` }}
              >
                <div className="w-16 h-16 rounded-[15px] bg-white/10 flex items-center justify-center text-primary mb-6">
                  {stat.icon}
                </div>
                <h4 className="text-4xl md:text-5xl font-black text-white mb-2">
                  {formatStatValue(value, stat)}
                </h4>
                <p className="text-white/60 font-medium uppercase tracking-wider text-sm">{stat.label}</p>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default StatsSection;
