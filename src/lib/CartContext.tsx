'use client';

import React, { createContext, useContext, useReducer, ReactNode } from 'react';
import { CartState, CartItem } from './types';

const CartContext = createContext<CartState | undefined>(undefined);

type CartAction = 
  | { type: 'ADD_ITEM'; item: CartItem }
  | { type: 'REMOVE_ITEM'; eventSlug: string }
  | { type: 'UPDATE_TICKET_QUANTITY'; eventSlug: string; ticketName: string; quantity: number }
  | { type: 'CLEAR_CART' };

const initialState: CartItem[] = [];

const cartReducer = (state: CartItem[], action: CartAction): CartItem[] => {
  switch (action.type) {
    case 'ADD_ITEM':
      // Check if item already exists
      if (state.find(item => item.event.slug === action.item.event.slug)) {
        return state.map(item => 
          item.event.slug === action.item.event.slug 
            ? { ...item, selectedTickets: action.item.selectedTickets } 
            : item
        );
      }
      return [...state, action.item];
    case 'REMOVE_ITEM':
      return state.filter(item => item.event.slug !== action.eventSlug);
    case 'UPDATE_TICKET_QUANTITY':
        return state.map(item => {
            if (item.event.slug === action.eventSlug) {
                const updatedTickets = item.selectedTickets.map(ticket => {
                    if (ticket.name === action.ticketName) {
                        return { ...ticket, quantity: action.quantity };
                    }
                    return ticket;
                });
                // Check if the ticket already exists, if not, add it.
                if (!updatedTickets.some(ticket => ticket.name === action.ticketName)) {
                    const eventTicket = item.event.ticketTiers.find(t => t.name === action.ticketName);
                    if (eventTicket) {
                        const price = parseFloat(eventTicket.price.replace(/[^\d.-]+/g, ''));
                        updatedTickets.push({ name: action.ticketName, price, quantity: action.quantity });
                    }
                }
                return { ...item, selectedTickets: updatedTickets.filter(t => t.quantity > 0) };
            }
            return item;
        });
    case 'CLEAR_CART':
      return [];
    default:
      return state;
  }
};

export const CartProvider = ({ children }: { children: ReactNode }) => {
  const [items, dispatch] = useReducer(cartReducer, initialState);

  const addItem = (item: CartItem) => {
    dispatch({ type: 'ADD_ITEM', item });
  };

  const removeItem = (eventSlug: string) => {
    dispatch({ type: 'REMOVE_ITEM', eventSlug });
  };

  const updateTicketQuantity = (eventSlug: string, ticketName: string, quantity: number) => {
    dispatch({ type: 'UPDATE_TICKET_QUANTITY', eventSlug, ticketName, quantity });
  };

  const clearCart = () => {
    dispatch({ type: 'CLEAR_CART' });
  };

  const value = { items, addItem, removeItem, updateTicketQuantity, clearCart };

  return <CartContext.Provider value={value}>{children}</CartContext.Provider>;
};

export const useCart = () => {
  const context = useContext(CartContext);
  if (context === undefined) {
    throw new Error('useCart must be used within a CartProvider');
  }
  return context;
};
