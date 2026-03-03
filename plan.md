# Website Recreation Plan: EventsBox

This document outlines the plan to recreate the frontend of the EventsBox website using a modern, component-based architecture with Next.js, React, and TypeScript.

## 1. Project Overview

The goal is to build a fully operational frontend for the EventsBox website, based on the provided PHP and HTML files. The new implementation will be a modern, single-page application (SPA) with a focus on reusability, scalability, and maintainability. The backend will not be implemented at this stage; all data will be hardcoded, similar to the original PHP implementation.

## 2. Technology Stack

*   **Framework:** Next.js (with React)
*   **Language:** TypeScript
*   **Styling:** Tailwind CSS
*   **Icons:** Lucide Icons
*   **Carousel:** Swiper.js

This stack aligns with the current project's setup and the technologies used in the reference files.

## 3. Project Structure

The project will follow a standard Next.js `app` directory structure.

```
/src
|-- /app
|   |-- /_components
|   |   |-- /ui
|   |   |   |-- Button.tsx
|   |   |   |-- ... (other UI components)
|   |   |-- Header.tsx
|   |   |-- Footer.tsx
|   |   |-- EventCard.tsx
|   |   |-- CategoryCard.tsx
|   |   |-- CityCard.tsx
|   |   |-- ... (other components)
|   |-- /about-us
|   |   |-- page.tsx
|   |-- /contact-us
|   |   |-- page.tsx
|   |-- /past-events
|   |   |-- page.tsx
|   |-- /upcoming-events
|   |   |-- page.tsx
|   |-- /event
|   |   |-- /[slug]
|   |   |   |-- page.tsx
|   |-- /organizer-landing
|   |   |-- page.tsx
|   |-- layout.tsx
|   |-- page.tsx
|-- /lib
|   |-- data.ts
|   |-- types.ts
```

## 4. Pages to Be Created

Based on the `eventsbox` directory, the following pages will be created:

*   `/` (Home)
*   `/upcoming-events`
*   `/past-events`
*   `/about-us`
*   `/contact-us`
*   `/event/[slug]` (Single Event Page)
*   `/organizer-profile`
*   `/organizer-landing` (New Page)
*   `/cart`
*   `/checkout`

## 5. Component Breakdown

The following reusable components will be created:

*   **Layout:**
    *   `Header`: The main navigation bar, with logic for a transparent or solid background.
    *   `Footer`: The website's footer.
    *   `MobileMenu`: The slide-out menu for mobile devices.
*   **Homepage Sections:**
    *   `HeroSection`: The main hero section with the search bar.
    *   `EventCarousel`: The trending events carousel.
    *   `FeaturedCategories`: The grid of event categories.
    *   `UpcomingEvents`: The grid of upcoming events.
    *   `TopCities`: The grid of top cities.
    *   `HowItWorks`: The "How It Works" section.
    *   `MultiVendorCTA`: The call-to-action for organizers.
    *   `WhyChooseUs`: The "Why Choose Us" section.
*   **Shared Components:**
    *   `EventCard`: The card component for displaying event information.
    *   `CategoryCard`: The card for displaying event categories.
    *   `CityCard`: The card for displaying city information.
    *   `Button`: A general-purpose button component.
    *   `Icon`: A component to render Lucide icons.

## 6. Data Management

All data (events, categories, cities, etc.) will be defined in `src/lib/data.ts` using TypeScript types defined in `src/lib/types.ts`. This will ensure type safety and make it easy to replace with a real API in the future.

## 7. Development Steps

1.  **Setup & Basic Layout:**
    *   Create the basic page structure in the `app` directory.
    *   Implement the `Header` and `Footer` components.
    *   Set up Tailwind CSS with the custom theme colors from the original site.

2.  **Homepage Development:**
    *   Build each homepage section as a separate component.
    *   Create the `EventCard`, `CategoryCard`, and `CityCard` components.
    *   Implement the "Trending Now" carousel using Swiper.js.
    *   Populate the homepage with the hardcoded data.

3.  **Other Pages:**
    *   Create the `upcoming-events`, `past-events`, `about-us`, and `contact-us` pages.
    *   These pages will be simpler, reusing the `Header` and `Footer` and displaying basic information.

4.  **Single Event Page:**
    *   Create the dynamic `event/[slug]` page.
    *   This page will display detailed information about a single event.

5.  **Organizer Profile Page:**
    *   Create the `organizer-profile` page.
    *   This page will display the organizer's information and their events.

6.  **Cart and Checkout Pages:**
    *   Create the `cart` and `checkout` pages.
    *   These pages will handle ticket selection and payment processing.

7.  **New Page: Organizer Landing Page (`/organizer-landing`)**
    *   Create the `organizer-landing` page.
    *   This page will serve as a landing page for event organizers, detailing benefits and a call to action.

8.  **Interactivity and Logic Implementation**
    *   **Single Event Page:**
        *   Implement the "Share" button functionality to open the share modal.
        *   Connect the "Book Tickets Now" button to the cart page.
    *   **Cart Page:**
        *   Implement the ticket quantity selection logic.
        *   Implement the seating map modal with actual seat selection and state management.
        *   Implement the "Continue to Checkout" button, passing the cart data to the checkout page.
    *   **Checkout Page:**
        *   Implement the form validation.
        *   Implement the "Complete Payment" button (with a mock payment process).

9.  **Refinement & Interactivity:**
    *   Implement the mobile menu functionality.
    *   Add the header scroll effect.
    *   Ensure all links and buttons are functional.
    *   Polish the styling and animations to match the original site.
