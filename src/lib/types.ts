
export interface Event {
  title: string;
  date: string;
  day: string;
  time: string;
  category: string;
  price: string;
  city: string;
  location: string;
  description: string;
  image: string;
  link: string;
  regular_price?: string;
  early_bird?: string;
  slug?: string;
}

export interface Category {
  name: string;
  events: string;
  icon: string;
  color: string;
}

export interface City {
  name: string;
  events: number;
  image: string;
  link: string;
}

import { EventDetail } from './events';

export interface Organizer {
  name: string;
  logo: string;
  bio: string;
  socials: {
    facebook: string;
    instagram: string;
    twitter: string;
    website: string;
  };
  total_events: number;
  followers: string;
}

export interface TicketSelection {
  name: string;
  price: number;
  quantity: number;
}

export interface CartItem {
  event: EventDetail;
  selectedTickets: TicketSelection[];
}

export interface CartState {
  items: CartItem[];
  addItem: (item: CartItem) => void;
  removeItem: (eventSlug: string) => void;
  updateTicketQuantity: (eventSlug: string, ticketName: string, quantity: number) => void;
  clearCart: () => void;
}



