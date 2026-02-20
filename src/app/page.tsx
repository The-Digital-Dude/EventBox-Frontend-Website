export default function Home() {
  const categories = [
    "Sport",
    "Festival",
    "Concert",
    "Comedy",
    "Charity Gala Dinner",
    "Dance",
  ];

  const upcomingEvents = [
    {
      month: "Feb",
      day: "Sat, 28 February 2026",
      time: "11:30 AM",
      city: "Sydney",
      title: "Holi Festival",
      price: "Free",
      tag: "Festival",
    },
    {
      month: "Mar",
      day: "Sun, 1 March 2026",
      time: "11:30 AM",
      city: "Melbourne",
      title: "Sport Carnival",
      price: "From $90",
      tag: "Sport",
    },
  ];

  const topCities = [
    "Sydney",
    "Melbourne",
    "Brisbane",
    "Adelaide",
    "Perth",
    "Hobart",
    "Canberra",
    "Gold Coast",
  ];

  const steps = [
    "Explore events",
    "Buy tickets for the event you like",
    "Get your ticket by email",
    "Attend the event and have fun",
  ];

  return (
    <main className="bg-white text-slate-900">
      <section className="relative overflow-hidden bg-[radial-gradient(circle_at_top,_#3f455f,_#101322_58%)] text-white">
        <div className="mx-auto max-w-6xl px-6 py-6">
          <div className="flex items-center justify-between">
            <h1 className="text-xl font-bold md:text-2xl">
              <span className="text-red-500">Events</span> Box
            </h1>
            <button className="rounded-full bg-red-600 px-5 py-2 text-sm font-semibold transition hover:bg-red-500">
              Submit An Event
            </button>
          </div>
          <nav className="mt-5 flex flex-wrap gap-x-8 gap-y-3 text-sm font-medium text-slate-200">
            {[
              "Home",
              "Buy Ticket",
              "About us",
              "How it Works",
              "Past Event",
              "Contact Us",
            ].map((item) => (
              <a key={item} href="#" className="transition hover:text-white">
                {item}
              </a>
            ))}
          </nav>

          <div className="grid gap-12 py-16 lg:grid-cols-[1.05fr_0.95fr]">
            <div>
              <p className="text-sm font-semibold uppercase tracking-[0.16em] text-red-300">
                Find or Create Event
              </p>
              <h2 className="mt-3 max-w-xl text-4xl font-bold leading-tight md:text-5xl">
                Find Australia&apos;s Best Events Here!
              </h2>
              <p className="mt-5 max-w-lg text-slate-300">
                Discover festivals, community events, concerts, sport days, and
                family experiences in one place.
              </p>
              <div className="mt-8 rounded-2xl bg-white/95 p-4 shadow-2xl backdrop-blur md:p-5">
                <div className="grid gap-3 md:grid-cols-3">
                  <select className="rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-700 outline-none">
                    <option>All Cities</option>
                    <option>Sydney</option>
                    <option>Melbourne</option>
                    <option>Brisbane</option>
                  </select>
                  <select className="rounded-xl border border-slate-200 px-4 py-3 text-sm text-slate-700 outline-none">
                    <option>Select Category</option>
                    <option>Festival</option>
                    <option>Sport</option>
                    <option>Concert</option>
                  </select>
                  <button className="rounded-xl bg-red-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-red-500">
                    Explore Events
                  </button>
                </div>
              </div>
            </div>

            <div className="relative rounded-3xl border border-white/20 bg-gradient-to-br from-red-500/90 via-red-500/70 to-orange-400/40 p-6 shadow-2xl">
              <p className="text-xs font-semibold uppercase tracking-[0.15em] text-red-100">
                Featured Event
              </p>
              <h3 className="mt-2 text-2xl font-bold">Holi Festival 2026</h3>
              <p className="mt-2 text-sm text-white/90">
                Sunday, 1 March 2026 | Melbourne
              </p>
              <div className="mt-6 space-y-3 rounded-2xl bg-[#101322]/80 p-5">
                <p className="text-sm text-slate-200">Tickets starting from</p>
                <p className="text-4xl font-extrabold text-white">$90</p>
                <button className="w-full rounded-xl bg-white py-3 text-sm font-bold text-[#101322] transition hover:bg-slate-100">
                  Buy Ticket
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="mx-auto max-w-6xl px-6 py-16">
        <div className="flex items-end justify-between">
          <div>
            <p className="text-sm font-semibold uppercase tracking-[0.16em] text-red-600">
              Featured Event Categories
            </p>
            <h3 className="mt-2 text-3xl font-bold text-slate-900">
              Explore by Categories
            </h3>
          </div>
        </div>
        <div className="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          {categories.map((item) => (
            <article
              key={item}
              className="rounded-2xl border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:border-red-300 hover:bg-white"
            >
              <p className="text-sm font-semibold uppercase tracking-wider text-red-600">
                Events
              </p>
              <h4 className="mt-3 text-2xl font-bold text-slate-900">{item}</h4>
              <p className="mt-2 text-sm text-slate-600">
                Explore {item.toLowerCase()} events near you.
              </p>
            </article>
          ))}
        </div>
      </section>

      <section className="bg-slate-50 py-16">
        <div className="mx-auto max-w-6xl px-6">
          <p className="text-sm font-semibold uppercase tracking-[0.16em] text-red-600">
            Upcoming Events
          </p>
          <h3 className="mt-2 text-3xl font-bold text-slate-900">
            Explore Events Here
          </h3>
          <div className="mt-8 grid gap-6 lg:grid-cols-2">
            {upcomingEvents.map((event) => (
              <article
                key={event.title}
                className="overflow-hidden rounded-2xl border border-slate-200 bg-white"
              >
                <div className="flex items-center justify-between border-b border-slate-200 bg-slate-100 px-6 py-4">
                  <div>
                    <p className="text-xs uppercase tracking-[0.18em] text-red-600">
                      {event.month}
                    </p>
                    <p className="mt-1 text-sm font-semibold text-slate-800">
                      {event.day}
                    </p>
                  </div>
                  <span className="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                    {event.tag}
                  </span>
                </div>
                <div className="space-y-2 px-6 py-5">
                  <h4 className="text-2xl font-bold text-slate-900">
                    {event.title}
                  </h4>
                  <p className="text-sm text-slate-600">
                    {event.time} | {event.city}
                  </p>
                  <p className="text-sm font-semibold text-slate-900">
                    {event.price}
                  </p>
                </div>
              </article>
            ))}
          </div>
        </div>
      </section>

      <section className="mx-auto max-w-6xl px-6 py-16">
        <div className="rounded-3xl bg-[#101322] px-6 py-10 text-white md:px-12">
          <p className="text-sm font-semibold uppercase tracking-[0.16em] text-red-300">
            Over 110K Tickets sold since launch
          </p>
          <h3 className="mt-2 text-3xl font-bold">How It Works</h3>
          <div className="mt-8 grid gap-4 md:grid-cols-2">
            {steps.map((step, idx) => (
              <div
                key={step}
                className="rounded-2xl border border-white/15 bg-white/5 p-4"
              >
                <p className="text-xs font-semibold text-red-300">
                  STEP {idx + 1}
                </p>
                <p className="mt-2 text-lg font-medium">{step}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="bg-slate-50 py-16">
        <div className="mx-auto max-w-6xl px-6">
          <div className="flex flex-wrap items-end justify-between gap-4">
            <h3 className="text-3xl font-bold text-slate-900">
              Explore Events By Top Cities!
            </h3>
            <button className="rounded-full bg-red-600 px-6 py-3 text-sm font-semibold text-white transition hover:bg-red-500">
              Buy Tickets Now
            </button>
          </div>
          <div className="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            {topCities.map((city) => (
              <article
                key={city}
                className="rounded-2xl border border-slate-200 bg-white p-5 transition hover:border-red-300 hover:shadow-md"
              >
                <p className="text-xs font-semibold uppercase tracking-[0.16em] text-red-600">
                  Events
                </p>
                <h4 className="mt-2 text-xl font-semibold text-slate-900">
                  {city}
                </h4>
              </article>
            ))}
          </div>
        </div>
      </section>

      <footer className="bg-[#0d1020]">
        <div className="mx-auto grid max-w-6xl gap-8 px-6 py-14 text-slate-300 md:grid-cols-3">
          <div>
            <h5 className="text-xl font-bold text-white">
              <span className="text-red-500">Events</span> Box
            </h5>
            <p className="mt-3 text-sm leading-relaxed">
              Find or create events and buy or sell tickets in Australia.
            </p>
          </div>
          <div>
            <h6 className="text-sm font-semibold uppercase tracking-[0.15em] text-red-300">
              Explore eventsbox
            </h6>
            <ul className="mt-3 space-y-2 text-sm">
              <li>About Us</li>
              <li>Explore Events</li>
              <li>How It Works</li>
              <li>Submit An Event</li>
            </ul>
          </div>
          <div>
            <h6 className="text-sm font-semibold uppercase tracking-[0.15em] text-red-300">
              Contact
            </h6>
            <ul className="mt-3 space-y-2 text-sm">
              <li>8 Babele Road, Tarneit, Victoria, Australia</li>
              <li>hello@eventsbox.com.au</li>
              <li>(+61) 470119587</li>
            </ul>
          </div>
        </div>
        <div className="border-t border-white/10 py-4 text-center text-xs text-slate-400">
          © 2026 eventsbox.com.au. All Rights Reserved.
        </div>
      </footer>
    </main>
  );
}
