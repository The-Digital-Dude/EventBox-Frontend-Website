'use client';

import React, { useMemo, useState } from 'react';
import { ChevronDown, Search, SlidersHorizontal, X } from 'lucide-react';
import EventCard from './EventCard';
import { Event } from '@/lib/types';

interface InteractiveEventsExplorerProps {
  events: Event[];
}

const parseEventDate = (date: string): Date | null => {
  const parsed = new Date(date);
  if (Number.isNaN(parsed.getTime())) {
    return null;
  }
  return parsed;
};

const getTimeBoundary = (range: string): Date | null => {
  const now = new Date();
  const boundary = new Date(now);

  if (range === 'this-week') {
    boundary.setDate(now.getDate() + 7);
    return boundary;
  }
  if (range === 'this-month') {
    boundary.setMonth(now.getMonth() + 1);
    return boundary;
  }
  if (range === 'next-3-months') {
    boundary.setMonth(now.getMonth() + 3);
    return boundary;
  }
  return null;
};

const InteractiveEventsExplorer: React.FC<InteractiveEventsExplorerProps> = ({ events }) => {
  const [searchQuery, setSearchQuery] = useState('');
  const [selectedCategory, setSelectedCategory] = useState('');
  const [selectedCity, setSelectedCity] = useState('');
  const [selectedTimeRange, setSelectedTimeRange] = useState('any');
  const [sortBy, setSortBy] = useState('soonest');

  const categories = useMemo(
    () => Array.from(new Set(events.map((event) => event.category))).sort(),
    [events]
  );
  const cities = useMemo(
    () => Array.from(new Set(events.map((event) => event.city))).sort(),
    [events]
  );

  const filteredEvents = useMemo(() => {
    const normalizedQuery = searchQuery.trim().toLowerCase();
    const timeBoundary = getTimeBoundary(selectedTimeRange);
    const now = new Date();

    const filtered = events.filter((event) => {
      const searchableText = `${event.title} ${event.city} ${event.location} ${event.category}`.toLowerCase();
      const matchesSearch = normalizedQuery.length === 0 || searchableText.includes(normalizedQuery);
      const matchesCategory = selectedCategory === '' || event.category === selectedCategory;
      const matchesCity = selectedCity === '' || event.city === selectedCity;

      const eventDate = parseEventDate(event.date);
      const matchesTimeRange =
        selectedTimeRange === 'any' ||
        (eventDate !== null &&
          eventDate >= now &&
          timeBoundary !== null &&
          eventDate <= timeBoundary);

      return matchesSearch && matchesCategory && matchesCity && matchesTimeRange;
    });

    filtered.sort((a, b) => {
      if (sortBy === 'title-az') {
        return a.title.localeCompare(b.title);
      }
      if (sortBy === 'title-za') {
        return b.title.localeCompare(a.title);
      }

      const dateA = parseEventDate(a.date)?.getTime() ?? 0;
      const dateB = parseEventDate(b.date)?.getTime() ?? 0;
      return sortBy === 'latest' ? dateB - dateA : dateA - dateB;
    });

    return filtered;
  }, [events, searchQuery, selectedCategory, selectedCity, selectedTimeRange, sortBy]);

  const activeFilters = [
    selectedCategory ? `Category: ${selectedCategory}` : null,
    selectedCity ? `City: ${selectedCity}` : null,
    selectedTimeRange !== 'any'
      ? `Time: ${
          selectedTimeRange === 'this-week'
            ? 'This Week'
            : selectedTimeRange === 'this-month'
            ? 'This Month'
            : 'Next 3 Months'
        }`
      : null,
  ].filter(Boolean) as string[];

  const animationKey = useMemo(
    () => `${searchQuery}|${selectedCategory}|${selectedCity}|${selectedTimeRange}|${sortBy}`,
    [searchQuery, selectedCategory, selectedCity, selectedTimeRange, sortBy]
  );

  const clearFilters = () => {
    setSearchQuery('');
    setSelectedCategory('');
    setSelectedCity('');
    setSelectedTimeRange('any');
    setSortBy('soonest');
  };

  return (
    <>
      <div className="bg-white p-4 md:p-6 rounded-[15px] shadow-sm border border-gray-100 mb-6 lg:mb-8 z-10 relative">
        <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-4">
          <div className="md:col-span-2 relative">
            <Search className="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5" />
            <input
              type="text"
              value={searchQuery}
              onChange={(event) => setSearchQuery(event.target.value)}
              placeholder="Search events by title, city, location..."
              className="w-full pl-12 pr-4 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium"
            />
          </div>

          <div className="relative">
            <select
              value={selectedCategory}
              onChange={(event) => setSelectedCategory(event.target.value)}
              className="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer"
            >
              <option value="">All Categories</option>
              {categories.map((category) => (
                <option key={category} value={category}>
                  {category}
                </option>
              ))}
            </select>
            <ChevronDown className="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none" />
          </div>

          <div className="relative">
            <select
              value={selectedCity}
              onChange={(event) => setSelectedCity(event.target.value)}
              className="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer"
            >
              <option value="">All Cities</option>
              {cities.map((city) => (
                <option key={city} value={city}>
                  {city}
                </option>
              ))}
            </select>
            <ChevronDown className="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none" />
          </div>

          <div className="relative">
            <select
              value={selectedTimeRange}
              onChange={(event) => setSelectedTimeRange(event.target.value)}
              className="w-full appearance-none pl-4 pr-10 py-3 md:py-4 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary font-medium cursor-pointer"
            >
              <option value="any">Any Time</option>
              <option value="this-week">This Week</option>
              <option value="this-month">This Month</option>
              <option value="next-3-months">Next 3 Months</option>
            </select>
            <ChevronDown className="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5 pointer-events-none" />
          </div>
        </div>

        <div className="mt-4 pt-4 border-t border-gray-100 flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
          <div className="flex flex-wrap gap-2 items-center">
            <span className="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-gray-500">
              <SlidersHorizontal className="w-4 h-4" />
              Active Filters
            </span>
            {activeFilters.length === 0 && (
              <span className="text-sm text-gray-400">None</span>
            )}
            {activeFilters.map((filter) => (
              <span
                key={filter}
                className="inline-flex items-center rounded-full bg-primary/10 text-primary px-3 py-1 text-xs font-bold animate-chip-pop"
              >
                {filter}
              </span>
            ))}
          </div>

          <div className="flex items-center gap-3">
            <label htmlFor="sort-by" className="text-sm text-gray-500 font-medium">
              Sort
            </label>
            <div className="relative">
              <select
                id="sort-by"
                value={sortBy}
                onChange={(event) => setSortBy(event.target.value)}
                className="appearance-none pl-3 pr-9 py-2 rounded-[10px] bg-slate-50 border border-gray-200 focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-secondary text-sm font-medium cursor-pointer"
              >
                <option value="soonest">Soonest</option>
                <option value="latest">Latest</option>
                <option value="title-az">Title A-Z</option>
                <option value="title-za">Title Z-A</option>
              </select>
              <ChevronDown className="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 w-4 h-4 pointer-events-none" />
            </div>
            <button
              type="button"
              onClick={clearFilters}
              className="inline-flex items-center gap-1.5 text-sm font-bold text-secondary hover:text-primary transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white rounded-sm px-1"
            >
              <X className="w-4 h-4" />
              Reset
            </button>
          </div>
        </div>
      </div>

      <div key={`summary-${animationKey}`} className="mb-6 text-sm text-gray-500 animate-list-reveal">
        Showing <span className="font-bold text-secondary">{filteredEvents.length}</span> of{' '}
        <span className="font-bold text-secondary">{events.length}</span> events
      </div>

      {filteredEvents.length > 0 ? (
        <div key={`grid-${animationKey}`} className="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-4">
          {filteredEvents.map((event, index) => (
            <div
              key={event.slug ?? event.title}
              className="animate-list-reveal"
              style={{ animationDelay: `${Math.min(index * 55, 420)}ms` }}
            >
              <EventCard event={event} layout="vertical" />
            </div>
          ))}
        </div>
      ) : (
        <div key={`empty-${animationKey}`} className="rounded-[15px] border border-dashed border-gray-300 bg-white p-8 md:p-12 text-center animate-list-reveal">
          <h3 className="text-xl md:text-2xl font-bold text-secondary mb-2">No events match these filters</h3>
          <p className="text-gray-500 mb-6">Try a different keyword, city, category, or time range.</p>
          <button
            type="button"
            onClick={clearFilters}
            className="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-[10px] font-bold hover:bg-opacity-90 transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/50 focus-visible:ring-offset-2 focus-visible:ring-offset-white"
          >
            Clear filters and show all events
          </button>
        </div>
      )}
    </>
  );
};

export default InteractiveEventsExplorer;
