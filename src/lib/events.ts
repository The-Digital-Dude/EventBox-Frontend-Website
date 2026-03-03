export interface TicketTier {
  name: string;
  price: string;
}

export interface EventDetail {
  slug: string;
  title: string;
  category: string;
  breadcrumbTitle: string;
  badge: string;
  dateLabel: string;
  timeLabel: string;
  locationLabel: string;
  image: string;
  description: string[];
  venue: {
    name: string;
    address: string;
    mapUrl: string;
    accessible: boolean;
    image: string;
  };
  organizer: {
    name: string;
    bio: string;
    logo: string;
    verified: boolean;
    profileUrl: string;
    contactUrl: string;
  };
  ticketTiers: TicketTier[];
  priceFrom: string;
}

const eventsBySlug: Record<string, EventDetail> = {
  'gaurav-gupta-perth-2026': {
    slug: 'gaurav-gupta-perth-2026',
    title: 'Standup Comedy by Gaurav Gupta Live in Perth',
    category: 'Comedy',
    breadcrumbTitle: 'Gaurav Gupta Live',
    badge: 'Comedy Solo',
    dateLabel: 'Saturday, May 15, 2026',
    timeLabel: '7:00 PM - 9:30 PM',
    locationLabel: 'Perth Convention and Exhibition Centre, Perth WA',
    image: '/img/gaurav-gupta.jpg',
    description: [
      'Perth, get ready to witness the king of observational comedy! Gaurav Gupta, the man who finds humor in everyday Indian middle-class life, is bringing his highly anticipated world tour to Western Australia.',
      'Known for his sharp wit and impeccable timing, Gaurav has captured millions of hearts through his viral videos and Netflix special. In this new show, he explores marriage, parenting, and the hilarious contradictions of living as an expat while keeping Indian values alive.',
    ],
    venue: {
      name: 'Perth Convention and Exhibition Centre',
      address: '21 Mounts Bay Rd, Perth WA 6000',
      mapUrl: '#',
      accessible: true,
      image: '/img/venue-placeholder.jpg',
    },
    organizer: {
      name: 'EventsBox Promotions',
      bio: 'Premium events across Australia and New Zealand. Delivering unforgettable experiences since 2015.',
      logo: '/img/logo-dark.svg',
      verified: true,
      profileUrl: '#',
      contactUrl: '#',
    },
    ticketTiers: [
      { name: 'Reserve 1', price: '$109.00' },
      { name: 'Reserve 2', price: '$89.00' },
      { name: 'Reserve 3', price: '$75.00' },
      { name: 'Reserve 4', price: '$49.00' },
    ],
    priceFrom: '$49.00',
  },
};

const defaultEvent: EventDetail = eventsBySlug['gaurav-gupta-perth-2026'];

export function getEventBySlug(slug: string): EventDetail {
  return eventsBySlug[slug] ?? defaultEvent;
}
