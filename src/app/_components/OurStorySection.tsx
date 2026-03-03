
import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import { ArrowRight } from 'lucide-react';

const OurStorySection: React.FC = () => {
  return (
    <section className="py-24 bg-white overflow-hidden relative">
      <div className="container mx-auto px-6 max-w-[1280px]">
        <div className="flex flex-col lg:flex-row gap-16 items-start">
          <div className="w-full lg:w-1/2 lg:pt-8 order-2 lg:order-1 relative z-10">
            <span className="text-primary font-bold uppercase tracking-[0.2em] text-[10px] md:text-sm block mb-4">Our Story</span>
            <h2 className="text-3xl md:text-4xl lg:text-5xl font-black text-secondary leading-tight mb-8">
              Events Box - Find or Create Event & Buy or Sell Tickets in Australia
            </h2>
            <div className="space-y-6 text-gray-500 leading-relaxed text-lg">
              <p>
                Welcome to Events Box, your premier destination for all things event-related in Australia. Our platform is designed to cater to both event enthusiasts and organizers alike. Discover a diverse range of events happening across the country, or take the lead by creating your own memorable experiences.
              </p>
              <p>
                With Events Box, you have the power to explore a multitude of events spanning various categories, ensuring there’s something for everyone. From cultural festivals to sports tournaments, conferences to concerts, we’ve got your event needs covered.
              </p>
              <p>
                Our user-friendly interface makes it a breeze to buy or sell tickets, connecting event-goers with organizers seamlessly. Whether you’re looking to secure your spot at an upcoming concert or looking to sell tickets for your community gathering, Events Box provides the perfect platform.
              </p>
            </div>
            <div className="mt-12">
              <Link href="/" className="bg-primary text-white px-8 py-4 rounded-[10px] font-bold hover:bg-opacity-90 hover:-translate-y-1 transition-all shadow-xl shadow-primary/20 inline-flex items-center gap-3">
                <span>Explore Events Now</span>
                <ArrowRight className="w-5 h-5" />
              </Link>
            </div>
          </div>

          <div className="w-full lg:w-1/2 relative order-1 lg:order-2">
            <div className="absolute -top-10 -right-10 w-64 h-64 bg-primary/10 rounded-full blur-3xl z-0"></div>
            <div className="absolute -bottom-10 -left-10 w-64 h-64 bg-secondary/10 rounded-full blur-3xl z-0"></div>
            <Image 
              src="/img/about-story.png" 
              alt="Events Box - Find or Create Event & Buy or Sell Tickets in Australia" 
              width={600}
              height={600}
              className="relative z-10 w-full rounded-[20px] shadow-2xl transform transition-transform duration-700 hover:scale-[1.02] sticky top-32"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default OurStorySection;
