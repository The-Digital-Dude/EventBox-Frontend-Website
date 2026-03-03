'use client';

import React, { useEffect, useRef, useState } from 'react';

type RevealDirection = 'up' | 'down' | 'left' | 'right' | 'zoom';

interface ScrollRevealProps {
  children: React.ReactNode;
  className?: string;
  direction?: RevealDirection;
  delay?: number;
  duration?: number;
  once?: boolean;
  threshold?: number;
}

const getInitialTransform = (direction: RevealDirection) => {
  switch (direction) {
    case 'left':
      return 'translateX(28px)';
    case 'right':
      return 'translateX(-28px)';
    case 'down':
      return 'translateY(-28px)';
    case 'zoom':
      return 'scale(0.96)';
    case 'up':
    default:
      return 'translateY(28px)';
  }
};

const ScrollReveal: React.FC<ScrollRevealProps> = ({
  children,
  className = '',
  direction = 'up',
  delay = 0,
  duration = 650,
  once = true,
  threshold = 0.12,
}) => {
  const containerRef = useRef<HTMLDivElement | null>(null);
  const [isVisible, setIsVisible] = useState(false);
  const [reduceMotion, setReduceMotion] = useState(false);

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

    const element = containerRef.current;
    if (!element) {
      return;
    }

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            setIsVisible(true);
            if (once) {
              observer.unobserve(entry.target);
            }
          } else if (!once) {
            setIsVisible(false);
          }
        });
      },
      { threshold }
    );

    observer.observe(element);
    return () => observer.disconnect();
  }, [once, reduceMotion, threshold]);

  const shouldShow = reduceMotion || isVisible;

  return (
    <div
      ref={containerRef}
      className={className}
      style={{
        opacity: shouldShow ? 1 : 0,
        transform: shouldShow ? 'translate3d(0, 0, 0) scale(1)' : getInitialTransform(direction),
        transitionProperty: 'opacity, transform',
        transitionDuration: `${duration}ms`,
        transitionTimingFunction: 'cubic-bezier(0.22, 1, 0.36, 1)',
        transitionDelay: `${delay}ms`,
        willChange: 'transform, opacity',
      }}
    >
      {children}
    </div>
  );
};

export default ScrollReveal;
