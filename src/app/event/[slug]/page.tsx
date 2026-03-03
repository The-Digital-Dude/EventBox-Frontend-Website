
'use client';

import React, { useMemo, useState } from 'react';
import { useParams } from 'next/navigation';
import EventHero from '../../_components/EventHero';
import EventDetails from '../../_components/EventDetails';
import BookingSidebar from '../../_components/BookingSidebar';
import ShareModal from '../../_components/ShareModal';
import MobileBookingBar from '../../_components/MobileBookingBar';
import { getEventBySlug } from '@/lib/events';
import { TicketSelection as TicketSelectionType } from '@/lib/types';

export default function EventPage() {
  const [isShareModalOpen, setIsShareModalOpen] = useState(false);
  const [selectedTickets, setSelectedTickets] = useState<TicketSelectionType[]>([]);
  const params = useParams();
  const slugParam = params?.slug;
  const slug = Array.isArray(slugParam) ? slugParam[0] : slugParam ?? '';
  const event = useMemo(() => getEventBySlug(slug), [slug]);
  const totalQuantity = useMemo(
    () => selectedTickets.reduce((sum, ticket) => sum + ticket.quantity, 0),
    [selectedTickets]
  );
  const totalPrice = useMemo(
    () => selectedTickets.reduce((sum, ticket) => sum + ticket.price * ticket.quantity, 0),
    [selectedTickets]
  );

  const handleQuantityChange = (ticketName: string, price: number, delta: number) => {
    setSelectedTickets((prev) => {
      const existing = prev.find((ticket) => ticket.name === ticketName);
      const currentQuantity = existing?.quantity ?? 0;
      const nextQuantity = Math.max(0, currentQuantity + delta);

      if (!existing && nextQuantity > 0) {
        return [...prev, { name: ticketName, price, quantity: nextQuantity }];
      }

      return prev
        .map((ticket) =>
          ticket.name === ticketName ? { ...ticket, quantity: nextQuantity } : ticket
        )
        .filter((ticket) => ticket.quantity > 0);
    });
  };

  return (
    <div className="bg-secondary">
      <EventHero event={event} onShareClick={() => setIsShareModalOpen(true)} />

      <section className="py-12 md:py-20 bg-[#F8FAFC] relative overflow-hidden">
        <div className="absolute top-0 right-[-10%] w-[50%] h-[50%] bg-primary/5 rounded-full blur-[120px]"></div>
        <div className="absolute bottom-0 left-[-10%] w-[50%] h-[50%] bg-blue-500/5 rounded-full blur-[120px]"></div>

        <div className="container mx-auto px-6 max-w-[1280px] relative z-10">
          <div className="flex flex-col lg:flex-row gap-16">
            <EventDetails event={event} />
            <BookingSidebar
              event={event}
              selectedTickets={selectedTickets}
              totalQuantity={totalQuantity}
              totalPrice={totalPrice}
              onQuantityChange={handleQuantityChange}
            />
          </div>
        </div>
      </section>

      <ShareModal isOpen={isShareModalOpen} onClose={() => setIsShareModalOpen(false)} />
      <MobileBookingBar
        event={event}
        selectedTickets={selectedTickets}
        totalQuantity={totalQuantity}
        totalPrice={totalPrice}
      />
    </div>
  );
}
