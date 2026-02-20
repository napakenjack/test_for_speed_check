<?php get_header(); ?>

<!-- HERO: Construction Company (simplified) -->
<section id="home" class="relative text-white bg-gray-900 bg-cover bg-center"
  style="background-image: url('https://images.unsplash.com/photo-1599707254554-027aeb4deacd?q=80&w=1600&auto=format&fit=crop');">

  <!-- Single overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 pt-28 pb-20 sm:px-6 lg:px-8">
    <div class="grid items-center gap-10 md:grid-cols-2">
      <!-- Left: copy -->
      <div>
        <span
          class="inline-flex items-center rounded-full bg-amber-500/20 px-3 py-1 text-xs font-semibold text-amber-300 ring-1 ring-amber-400/30">
          Licensed • Bonded • Insured
        </span>
        <h1 class="mt-5 text-4xl font-extrabold leading-tight sm:text-5xl lg:text-6xl">
          We Build <span class="text-amber-400">Strong</span> Foundations
        </h1>
        <p class="mt-5 max-w-xl text-lg text-gray-200">
          From commercial complexes to custom homes, our crews deliver on time, on budget, and to spec—every time.
        </p>

        <!-- CTA row -->
        <div class="mt-8 flex flex-col gap-4 sm:flex-row">
          <a href="#quote"
            class="inline-flex items-center justify-center rounded-lg bg-amber-500 px-6 py-3 font-semibold text-gray-900 shadow hover:bg-amber-400 transition">
            Get a Free Quote
          </a>
          <a href="tel:+15551234567"
            class="inline-flex items-center justify-center rounded-lg border border-white/40 px-6 py-3 font-semibold text-white hover:bg-white/10 transition">
            Call (555) 123-4567
          </a>
        </div>

        <!-- Trust row -->
        <div class="mt-8 flex flex-wrap items-center gap-x-8 gap-y-3 text-sm text-white">
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2l7 4v6c0 5-3.8 9.7-7 10-3.2-.3-7-5-7-10V6l7-4z" />
            </svg>
            15+ Years Experience
          </div>
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
              <path d="M9 12l2 2 4-4 2 2-6 6-4-4 2-2z" />
            </svg>
            OSHA-Certified Crews
          </div>
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor">
              <path d="M4 6h16v2H4V6zm0 5h16v2H4v-2zm0 5h10v2H4v-2z" />
            </svg>
            Design • Build • Renovate
          </div>
        </div>
      </div>

      <!-- Right: highlight card -->
      <div class="md:justify-self-end">
        <div class="rounded-2xl bg-white/10 p-6 backdrop-blur ring-1 ring-white/20">
          <div class="grid grid-cols-3 gap-4 text-center justify-items-center">
            <div>
              <div class="text-3xl font-extrabold text-amber-400">450+</div>
              <div class="mt-1 text-sm text-gray-200">Projects</div>
            </div>
            <div>
              <div class="text-3xl font-extrabold text-amber-400">98%</div>
              <div class="mt-1 text-sm text-gray-200">On-Time</div>
            </div>
            <div>
              <div class="text-3xl font-extrabold text-amber-400">A+</div>
              <div class="mt-1 text-sm text-gray-2 00">Safety Score</div>
            </div>
          </div>

          <div class="mt-6 rounded-xl bg-black/30 p-4">
            <p class="text-sm text-gray-200">
              “Professional, reliable, and the craftsmanship is top tier. They delivered our warehouse ahead of
              schedule.”
            </p>
            <p class="mt-2 text-sm font-semibold text-white">— Operations Director, Acme Logistics</p>
          </div>

          <a href="#portfolio"
            class="mt-6 inline-flex w-full items-center justify-center rounded-lg bg-white px-5 py-3 font-semibold text-gray-900 shadow hover:bg-gray-100 transition">
            View Recent Projects
          </a>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- SERVICES SECTION -->
<section id="services" class="bg-white dark:bg-gray-900">
  <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <!-- Section Header -->
    <div class="mb-16 text-center">
      <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
        Our Core Services
      </h2>
      <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">
        From groundbreaking to grand opening, we provide a full spectrum of construction solutions
        with craftsmanship and precision.
      </p>
    </div>

    <!-- Service Cards -->
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Service 1 -->
      <div class="group rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm hover:shadow-lg transition dark:border-gray-700 dark:bg-gray-800">
        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300">
          <!-- Icon: Building -->
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 21h18M9 8h6m-3-5l9 4v14H3V7l9-4z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Commercial Construction</h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300">
          Full-service contracting for offices, retail, and industrial facilities—built to last and on budget.
        </p>
      </div>

      <!-- Service 2 -->
      <div class="group rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm hover:shadow-lg transition dark:border-gray-700 dark:bg-gray-800">
        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300">
          <!-- Icon: Home -->
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 9.5L12 3l9 6.5V21a1 1 0 01-1 1h-6v-7H10v7H4a1 1 0 01-1-1V9.5z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Residential Builds</h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300">
          Custom homes and multi-family developments tailored to your lifestyle and budget.
        </p>
      </div>

      <!-- Service 3 -->
      <div class="group rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm hover:shadow-lg transition dark:border-gray-700 dark:bg-gray-800">
        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300">
          <!-- Icon: Tools -->
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.232 5.232l3.536 3.536M9 13l-3.536-3.536M14.828 14.828a4 4 0 01-5.656-5.656l5.656 5.656zM2 20h20" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Renovations & Remodeling</h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300">
          Transform outdated spaces with modern upgrades and structural improvements.
        </p>
      </div>

      <!-- Service 4 -->
      <div class="group rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm hover:shadow-lg transition dark:border-gray-700 dark:bg-gray-800">
        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300">
          <!-- Icon: Road -->
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 2v4m0 12v4m0-8h.01M3 12h18M5 4h14l-1 16H6L5 4z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Infrastructure Projects</h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300">
          Roads, bridges, and public works executed with safety and precision.
        </p>
      </div>

      <!-- Service 5 -->
      <div class="group rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm hover:shadow-lg transition dark:border-gray-700 dark:bg-gray-800">
        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300">
          <!-- Icon: Plan -->
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 4h16v4H4V4zm0 6h16v10H4V10zm8 0v10" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Design & Planning</h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300">
          In-house architects and engineers ensure seamless design-build coordination.
        </p>
      </div>

      <!-- Service 6 -->
      <div class="group rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm hover:shadow-lg transition dark:border-gray-700 dark:bg-gray-800">
        <div class="mb-6 flex h-16 w-16 items-center justify-center rounded-full bg-amber-100 text-amber-600 dark:bg-amber-900 dark:text-amber-300">
          <!-- Icon: Safety -->
          <svg class="h-8 w-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Safety Management</h3>
        <p class="mt-3 text-gray-600 dark:text-gray-300">
          Rigorous safety programs protect our crews, clients, and communities.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- PROJECTS / PORTFOLIO SECTION -->
<section id="projects" class="scroll-mt-16 bg-gray-50 dark:bg-gray-900">
  <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-12 flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-end">
      <div>
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
          Featured Projects
        </h2>
        <p class="mt-3 max-w-2xl text-lg text-gray-600 dark:text-gray-300">
          A snapshot of our recent commercial, residential, and infrastructure builds.
        </p>
      </div>
      <a href="#all-projects"
         class="inline-flex items-center rounded-lg bg-amber-500 px-5 py-3 font-semibold text-gray-900 shadow hover:bg-amber-400 transition">
        View All Projects
      </a>
    </div>

    <!-- Project Grid -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:shadow-md dark:bg-gray-800 dark:ring-gray-700">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1494412651409-8963ce7935a7?q=80&w=1200&auto=format&fit=crop"
               alt="Steel framework for logistics center"
               class="h-56 w-full object-cover transition group-hover:scale-105">
          <span class="absolute left-4 top-4 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white">
            Commercial
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Acme Logistics Hub</h3>
          <p class="mt-2 line-clamp-3 text-gray-600 dark:text-gray-300">
            120,000 sq ft distribution center with tilt-up panels and energy-efficient MEP.
          </p>
          <div class="mt-4 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <span>Dallas, TX</span>
            <a href="#project-acme" class="font-semibold text-amber-600 hover:text-amber-500">View Project</a>
          </div>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:shadow-md dark:bg-gray-800 dark:ring-gray-700">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200&auto=format&fit=crop"
               alt="Modern multi-family residential building"
               class="h-56 w-full object-cover transition group-hover:scale-105">
          <span class="absolute left-4 top-4 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white">
            Residential
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Riverside Apartments</h3>
          <p class="mt-2 line-clamp-3 text-gray-600 dark:text-gray-300">
            84-unit multi-family build with amenity deck, underground parking, and LEED features.
          </p>
          <div class="mt-4 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <span>Portland, OR</span>
            <a href="#project-riverside" class="font-semibold text-amber-600 hover:text-amber-500">View Project</a>
          </div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:shadow-md dark:bg-gray-800 dark:ring-gray-700">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1691149210746-c6bbb40f4bf6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
               alt="Highway overpass and bridge works"
               class="h-56 w-full object-cover transition group-hover:scale-105">
          <span class="absolute left-4 top-4 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white">
            Infrastructure
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">I-95 Overpass Renewal</h3>
          <p class="mt-2 line-clamp-3 text-gray-600 dark:text-gray-300">
            Multi-phase bridge rehabilitation, seismic upgrades, and traffic management.
          </p>
          <div class="mt-4 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <span>Philadelphia, PA</span>
            <a href="#project-i95" class="font-semibold text-amber-600 hover:text-amber-500">View Project</a>
          </div>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:shadow-md dark:bg-gray-800 dark:ring-gray-700">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1698889670684-0f4a7aa7cba8?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
               alt="Interior renovation with framing and drywall"
               class="h-56 w-full object-cover transition group-hover:scale-105">
          <span class="absolute left-4 top-4 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white">
            Renovation
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Harbor Offices Fit-Out</h3>
          <p class="mt-2 line-clamp-3 text-gray-600 dark:text-gray-300">
            Class-A tenant improvements—open ceilings, acoustic treatments, and glass partitions.
          </p>
          <div class="mt-4 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <span>Seattle, WA</span>
            <a href="#project-harbor" class="font-semibold text-amber-600 hover:text-amber-500">View Project</a>
          </div>
        </div>
      </article>

      <!-- Card 5 -->
      <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:shadow-md dark:bg-gray-800 dark:ring-gray-700">
        <div class="relative">
          <img src="https://plus.unsplash.com/premium_photo-1683136809051-73451a58e7b9?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
               alt="Concrete pour at dawn"
               class="h-56 w-full object-cover transition group-hover:scale-105">
          <span class="absolute left-4 top-4 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white">
            Industrial
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Northgate Manufacturing</h3>
          <p class="mt-2 line-clamp-3 text-gray-600 dark:text-gray-300">
            Heavy-duty slab, crane bays, and robust utilities for 24/7 operations.
          </p>
          <div class="mt-4 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <span>Houston, TX</span>
            <a href="#project-northgate" class="font-semibold text-amber-600 hover:text-amber-500">View Project</a>
          </div>
        </div>
      </article>

      <!-- Card 6 -->
      <article class="group overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200 transition hover:shadow-md dark:bg-gray-800 dark:ring-gray-700">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1579943690842-0de6c26d44a2?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
               alt="Custom hillside residence"
               class="h-56 w-full object-cover transition group-hover:scale-105">
          <span class="absolute left-4 top-4 rounded-full bg-black/70 px-3 py-1 text-xs font-semibold text-white">
            Custom Home
          </span>
        </div>
        <div class="p-6">
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Sierra Vista Residence</h3>
          <p class="mt-2 line-clamp-3 text-gray-600 dark:text-gray-300">
            Architectural home with cantilevered decks and high-performance envelope.
          </p>
          <div class="mt-4 flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
            <span>Reno, NV</span>
            <a href="#project-sierra" class="font-semibold text-amber-600 hover:text-amber-500">View Project</a>
          </div>
        </div>
      </article>
    </div>

    <!-- Bottom CTA -->
    <div class="mt-12 text-center">
      <a href="#quote"
         class="inline-flex items-center rounded-lg border border-gray-300 px-6 py-3 font-semibold text-gray-800 hover:bg-gray-100 transition dark:border-gray-700 dark:text-gray-100 dark:hover:bg-gray-800">
        Need a similar project? Get a free quote
      </a>
    </div>
  </div>
</section>


<!-- PROCESS / HOW WE WORK -->
<section id="process" class="scroll-mt-16 bg-white dark:bg-gray-900">
  <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-14 text-center">
      <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
        Our Proven Process
      </h2>
      <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600 dark:text-gray-300">
        From first call to final walkthrough—transparent, safe, and on schedule.
      </p>
    </div>

    <!-- Timeline -->
    <ol class="relative mx-auto grid gap-10 sm:gap-12 lg:gap-14 lg:max-w-5xl">
      <!-- connector line (desktop) -->
      <span class="pointer-events-none absolute left-4 top-0 hidden h-full w-px bg-gray-200 dark:bg-gray-700 sm:block"></span>

      <!-- Step -->
      <li class="grid items-start gap-4 sm:grid-cols-[2rem,1fr]">
        <!-- Dot -->
        <div class="hidden sm:flex items-center justify-center">
          <span class="relative z-10 inline-flex h-8 w-8 items-center justify-center rounded-full bg-amber-500 text-gray-900 ring-8 ring-white dark:ring-gray-900">
            1
          </span>
        </div>
        <!-- Card -->
        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <!-- Icon: phone -->
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h1l3 5-2 2a16 16 0 007 7l2-2 5 3v1a2 2 0 01-2 2h-1C8.82 21 3 15.18 3 8V7a2 2 0 012-2z"/></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Discovery & Quote</h3>
          </div>
          <p class="mt-3 text-gray-600 dark:text-gray-300">
            We assess scope, timeline, and budget, then provide a detailed, itemized proposal.
          </p>
        </div>
      </li>

      <li class="grid items-start gap-4 sm:grid-cols-[2rem,1fr]">
        <div class="hidden sm:flex items-center justify-center">
          <span class="relative z-10 inline-flex h-8 w-8 items-center justify-center rounded-full bg-amber-500 text-gray-900 ring-8 ring-white dark:ring-gray-900">2</span>
        </div>
        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <!-- Icon: blueprint -->
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h10M4 17h7M14 7v10M20 7v10"/></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Design & Permitting</h3>
          </div>
          <p class="mt-3 text-gray-600 dark:text-gray-300">
            Our architects/engineers finalize drawings and handle permits and code compliance.
          </p>
        </div>
      </li>

      <li class="grid items-start gap-4 sm:grid-cols-[2rem,1fr]">
        <div class="hidden sm:flex items-center justify-center">
          <span class="relative z-10 inline-flex h-8 w-8 items-center justify-center rounded-full bg-amber-500 text-gray-900 ring-8 ring-white dark:ring-gray-900">3</span>
        </div>
        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <!-- Icon: helmet -->
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 13a8 8 0 0116 0v2H4v-2zm0 2h16v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z"/></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Pre-Construction</h3>
          </div>
          <p class="mt-3 text-gray-600 dark:text-gray-300">
            Scheduling, procurement, and site safety plans to set the project up for success.
          </p>
        </div>
      </li>

      <li class="grid items-start gap-4 sm:grid-cols-[2rem,1fr]">
        <div class="hidden sm:flex items-center justify-center">
          <span class="relative z-10 inline-flex h-8 w-8 items-center justify-center rounded-full bg-amber-500 text-gray-900 ring-8 ring-white dark:ring-gray-900">4</span>
        </div>
        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <!-- Icon: crane -->
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 20h18M6 20v-6h4l3-6h5M6 8h5M6 12h3"/></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Construction</h3>
          </div>
          <p class="mt-3 text-gray-600 dark:text-gray-300">
            Experienced crews execute to spec with daily QA/QC and transparent progress updates.
          </p>
        </div>
      </li>

      <li class="grid items-start gap-4 sm:grid-cols-[2rem,1fr]">
        <div class="hidden sm:flex items-center justify-center">
          <span class="relative z-10 inline-flex h-8 w-8 items-center justify-center rounded-full bg-amber-500 text-gray-900 ring-8 ring-white dark:ring-gray-900">5</span>
        </div>
        <div class="rounded-2xl border border-gray-200 bg-gray-50 p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <!-- Icon: check -->
              <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Closeout & Warranty</h3>
          </div>
          <p class="mt-3 text-gray-600 dark:text-gray-300">
            Final inspection, punch list completion, O&M docs, and a workmanship warranty.
          </p>
        </div>
      </li>
    </ol>

    <!-- CTA -->
    <div class="mt-14 text-center">
      <a href="#quote" class="inline-flex items-center rounded-lg bg-amber-500 px-6 py-3 font-semibold text-gray-900 shadow hover:bg-amber-400 transition">
        Ready to start? Request a site visit
      </a>
    </div>
  </div>
</section>


<!-- TESTIMONIALS + ACCREDITATIONS (Decent / Minimal) -->
<section id="testimonials" class="scroll-mt-16 bg-white dark:bg-gray-900">
  <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-12 text-center">
      <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
        Trusted by Owners & Developers
      </h2>
      <p class="mt-3 text-lg text-gray-600 dark:text-gray-300">
        Quiet craftsmanship, rigorous safety, and projects delivered without drama.
      </p>
    </div>

    <!-- Testimonial Cards -->
    <div class="grid gap-8 md:grid-cols-2">
      <!-- Card 1 -->
      <figure class="rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <blockquote class="text-gray-700 dark:text-gray-300">
          “Scheduling was tight and the site conditions were complex. The team
          kept communication clear and handed over exactly to spec—on time.”
        </blockquote>
        <figcaption class="mt-6 flex items-center gap-4">
          <img class="h-10 w-10 rounded-full object-cover"
               src="https://images.unsplash.com/photo-1544006659-f0b21884ce1d?q=80&w=200&auto=format&fit=crop"
               alt="Client portrait">
          <div>
            <div class="text-sm font-semibold text-gray-900 dark:text-white">Elena Vasquez</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Project Director, Harbor Offices</div>
          </div>
        </figcaption>
      </figure>

      <!-- Card 2 -->
      <figure class="rounded-2xl border border-gray-200 bg-gray-50 p-8 shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <blockquote class="text-gray-700 dark:text-gray-300">
          “Professional crew, immaculate site, and consistent updates. We’re expanding
          the facility next year and will be using them again.”
        </blockquote>
        <figcaption class="mt-6 flex items-center gap-4">
          <img class="h-10 w-10 rounded-full object-cover"
               src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?q=80&w=200&auto=format&fit=crop"
               alt="Client portrait">
          <div>
            <div class="text-sm font-semibold text-gray-900 dark:text-white">Marcus Chen</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Operations Lead, Northgate Manufacturing</div>
          </div>
        </figcaption>
      </figure>
    </div>

    <!-- Metrics row (subtle) -->
    <div class="mt-12 grid gap-6 text-center sm:grid-cols-3">
      <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
        <div class="text-3xl font-extrabold text-gray-900 dark:text-white">98%</div>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-400">On-time delivery</div>
      </div>
      <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
        <div class="text-3xl font-extrabold text-gray-900 dark:text-white">A+</div>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-400">Safety score</div>
      </div>
      <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
        <div class="text-3xl font-extrabold text-gray-900 dark:text-white">450+</div>
        <div class="mt-1 text-sm text-gray-500 dark:text-gray-400">Completed projects</div>
      </div>
    </div>

    <!-- Accreditation / Logo strip (muted) -->
    <div class="mt-14">
      <div class="flex items-center justify-center gap-6 text-xs text-gray-500 dark:text-gray-400">
        <span class="inline-flex items-center gap-2">
          <span class="h-2 w-2 rounded-full bg-amber-500"></span> Licensed GC
        </span>
        <span class="inline-flex items-center gap-2">
          <span class="h-2 w-2 rounded-full bg-amber-500"></span> Bonded & Insured
        </span>
        <span class="inline-flex items-center gap-2">
          <span class="h-2 w-2 rounded-full bg-amber-500"></span> OSHA-Certified Crews
        </span>
        <span class="inline-flex items-center gap-2">
          <span class="h-2 w-2 rounded-full bg-amber-500"></span> LEED-Capable
        </span>
      </div>

      <div class="mt-6 grid items-center justify-items-center gap-6 sm:grid-cols-4 bg-white rounded-full">
        <!-- Replace with real partner/association logos -->
        <img class="h-14" src="https://1000logos.net/wp-content/uploads/2021/12/Sumitomo-logo-768x432.png" alt="AGC">
        <img class="h-14" src="https://1000logos.net/wp-content/uploads/2016/11/Caterpillar-Logo-768x480.png" alt="LEED">
        <img class="h-14" src="https://1000logos.net/wp-content/uploads/2020/07/Arcelormittal-Logo-768x480.png" alt="NFPA">
        <img class="h-14" src="https://1000logos.net/wp-content/uploads/2024/02/Aisin-Logo-768x432.png" alt="ISO 9001">
      </div>
    </div>
  </div>
</section>


<!-- SAFETY & QUALITY (Decent / Minimal) -->
<section id="safety" class="scroll-mt-16 bg-gray-50 dark:bg-gray-900">
  <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="grid gap-12 lg:grid-cols-2">
      <!-- Copy -->
      <div>
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
          Safety & Quality, Without Compromise
        </h2>
        <p class="mt-4 max-w-2xl text-lg text-gray-600 dark:text-gray-300">
          Our job sites run on clear procedures and measurable standards. Every crew member is trained,
          every phase is documented, and every milestone is verified.
        </p>

        <!-- Bulleted assurances -->
        <ul class="mt-8 space-y-3">
          <li class="flex items-start gap-3">
            <span
              class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              </svg>
            </span>
            <span class="text-gray-700 dark:text-gray-300">OSHA-compliant safety plans and daily tailgate talks</span>
          </li>
          <li class="flex items-start gap-3">
            <span
              class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              </svg>
            </span>
            <span class="text-gray-700 dark:text-gray-300">Site-specific JHAs and equipment inspections</span>
          </li>
          <li class="flex items-start gap-3">
            <span
              class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              </svg>
            </span>
            <span class="text-gray-700 dark:text-gray-300">QA/QC checkpoints at each milestone and closeout</span>
          </li>
          <li class="flex items-start gap-3">
            <span
              class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-100 text-amber-700 dark:bg-amber-900 dark:text-amber-300">
              <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              </svg>
            </span>
            <span class="text-gray-700 dark:text-gray-300">Documented change control and transparent reporting</span>
          </li>
        </ul>

        <!-- Actions -->
        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
          <a href="#quote"
            class="inline-flex items-center rounded-lg bg-amber-500 px-5 py-3 font-semibold text-gray-900 hover:bg-amber-400 transition">
            Request a Site Visit
          </a>
          <a href="#download-safety"
            class="inline-flex items-center rounded-lg border border-gray-300 px-5 py-3 font-semibold text-gray-700 hover:bg-gray-100 transition dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800">
            Download Safety Program (PDF)
          </a>
        </div>
      </div>

      <!-- Subtle policy card -->
      <div class="lg:pl-8">
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">On-Site Standards</h3>
          <dl class="mt-4 space-y-3 text-sm">
            <div class="flex items-center justify-between">
              <dt class="text-gray-600 dark:text-gray-400">PPE Compliance</dt>
              <dd class="font-semibold text-gray-900 dark:text-gray-100">100%</dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-gray-600 dark:text-gray-400">Daily Safety Audits</dt>
              <dd class="font-semibold text-gray-900 dark:text-gray-100">Yes</dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-gray-600 dark:text-gray-400">Subcontractor Vetting</dt>
              <dd class="font-semibold text-gray-900 dark:text-gray-100">Required</dd>
            </div>
            <div class="flex items-center justify-between">
              <dt class="text-gray-600 dark:text-gray-400">Warranty</dt>
              <dd class="font-semibold text-gray-900 dark:text-gray-100">Up to 2 years</dd>
            </div>
          </dl>

          <div class="mt-6 rounded-xl bg-gray-50 p-4 text-sm text-gray-700 dark:bg-gray-900 dark:text-gray-300">
            Our Safety Officer conducts weekly reviews and coordinates with your facilities team to ensure zero-incident
            goals.
          </div>

          <a href="mailto:safety@yourcompany.com"
            class="mt-6 inline-flex items-center text-sm font-semibold text-amber-600 hover:text-amber-500">
            Contact Safety Officer →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ABOUT / COMPANY OVERVIEW — REFINED -->
<section id="about" class="scroll-mt-16 bg-gray-50">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <!-- Copy -->
      <div class="space-y-6">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          About Our Company
        </h2>
        <p class="max-w-2xl text-gray-700">
          Since 2010 we’ve delivered commercial, residential, and infrastructure projects with disciplined schedules,
          transparent communication, and durable results.
        </p>

        <!-- Quiet highlights -->
        <ul class="grid gap-3 sm:grid-cols-2">
          <li class="flex items-center gap-2 text-gray-700">
            <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
            Licensed • Bonded • Insured
          </li>
          <li class="flex items-center gap-2 text-gray-700">
            <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
            OSHA-certified crews
          </li>
          <li class="flex items-center gap-2 text-gray-700">
            <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
            Cost control & clear reporting
          </li>
          <li class="flex items-center gap-2 text-gray-700">
            <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
            Schedule discipline
          </li>
        </ul>

        <!-- Small CTA -->
        <div class="pt-2">
          <a href="#projects"
            class="inline-flex items-center rounded-lg border border-gray-300 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">
            View Recent Projects
          </a>
        </div>
      </div>

      <!-- Image (kept tidy with aspect + subtle ring) -->
      <div class="relative">
        <img
          src="https://plus.unsplash.com/premium_photo-1681691757922-6d8b206abedc?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Crew at a construction site"
          class="aspect-[4/3] w-full rounded-2xl object-cover shadow-sm ring-1 ring-gray-200" />
        <div
          class="absolute -bottom-4 left-4 rounded-xl bg-white px-4 py-3 text-sm text-gray-700 shadow-sm ring-1 ring-gray-200">
          15+ yrs • 450+ projects • EMR 0.72
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FAQ (Decent / Minimal) -->
<section id="faq" class="scroll-mt-16 bg-gray-900">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mb-10">
      <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">Frequently Asked Questions</h2>
      <p class="mt-3 max-w-2xl text-white">
        Short answers to common questions about timelines, permits, and warranties.
      </p>
    </div>

    <!-- FAQ (Decent / Minimal) -->
    <section id="faq" class="scroll-mt-16 bg-gray-50">
      <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-10">
          <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Frequently Asked Questions</h2>
          <p class="mt-3 max-w-2xl text-gray-600">
            Short answers to common questions about timelines, permits, and warranties.
          </p>
        </div>

        <!-- FAQ Grid -->
        <div class="grid gap-4 md:grid-cols-2">
          <!-- Item -->
          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              How long does a typical project take?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              Schedules vary by scope; small renovations can be 4–8 weeks, while new builds range from 4–12 months.
              We issue a detailed schedule during pre-con.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              Do you handle permits and inspections?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              Yes. Our team coordinates drawings, permit submittals, and all required inspections with the AHJ.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              Are you licensed, bonded, and insured?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              Absolutely—GC license, bonding, and full coverage insurance are standard. Certificates available on
              request.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              Do you provide fixed-price bids?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              We offer lump-sum (fixed price) and GMP contracts. Each proposal includes clear inclusions/exclusions.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              What areas do you serve?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              Regional coverage with travel for select projects. We can confirm during discovery.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              What warranties do you provide?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              Standard workmanship warranty up to 24 months; manufacturer warranties per spec.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              How do you manage safety on site?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              OSHA-compliant plans, site-specific JHAs, daily talks, and weekly audits by our Safety Officer.
            </div>
          </details>

          <details class="group rounded-xl bg-white p-5 ring-1 ring-gray-200">
            <summary
              class="flex cursor-pointer select-none items-center justify-between text-base font-medium text-gray-900">
              Can you work while our facility stays open?
              <span
                class="ml-3 inline-flex h-7 w-7 items-center justify-center rounded-full ring-1 ring-gray-300 text-gray-600 transition group-open:rotate-45">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 5v14M5 12h14" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </summary>
            <div class="mt-3 text-gray-700">
              Yes—phased work, after-hours shifts, barriers, and dust control keep operations running safely.
            </div>
          </details>
        </div>

        <!-- Quiet CTA -->
        <div class="mt-10">
          <a href="#contact"
            class="inline-flex items-center rounded-lg border border-gray-300 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-100 transition">
            Still have questions? Contact us
          </a>
        </div>
      </div>
    </section>



    <!-- CONTACT — Decent / Minimal -->
    <section id="contact" class="scroll-mt-16 bg-gray-50">
      <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-10">
          <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Contact Us</h2>
          <p class="mt-3 max-w-2xl text-gray-600">Tell us about your project. A project manager will follow up shortly.
          </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-3">
          <!-- Form -->
          <div class="lg:col-span-2">
            <form action="#" method="post" class="rounded-2xl bg-white p-6 ring-1 ring-gray-200">
              <div class="grid gap-5 sm:grid-cols-2">
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700">Full name</label>
                  <input id="name" name="name" type="text" required
                    class="mt-2 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-amber-500 focus:ring-amber-500" />
                </div>
                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                  <input id="email" name="email" type="email" required
                    class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-amber-500 focus:ring-amber-500" />
                </div>
              </div>

              <div class="mt-5 grid gap-5 sm:grid-cols-2">
                <div>
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                  <input id="phone" name="phone" type="tel"
                    class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-amber-500 focus:ring-amber-500" />
                </div>
                <div>
                  <label for="location" class="block text-sm font-medium text-gray-700">Project location</label>
                  <input id="location" name="location" type="text"
                    class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-amber-500 focus:ring-amber-500" />
                </div>
              </div>

              <div class="mt-5 grid gap-5 sm:grid-cols-2">
                <div>
                  <label for="type" class="block text-sm font-medium text-gray-700">Project type</label>
                  <select id="type" name="type"
                    class="mt-2 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 focus:border-amber-500 focus:ring-amber-500">
                    <option>Commercial</option>
                    <option>Residential</option>
                    <option>Industrial</option>
                    <option>Infrastructure</option>
                    <option>Renovation</option>
                  </select>
                </div>
                <div>
                  <label for="budget" class="block text-sm font-medium text-gray-700">Estimated budget</label>
                  <select id="budget" name="budget"
                    class="mt-2 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 text-gray-900 focus:border-amber-500 focus:ring-amber-500">
                    <option>Undisclosed</option>
                    <option>$50k–$250k</option>
                    <option>$250k–$1M</option>
                    <option>$1M–$5M</option>
                    <option>$5M+</option>
                  </select>
                </div>
              </div>

              <div class="mt-5">
                <label for="message" class="block text-sm font-medium text-gray-700">Scope / notes</label>
                <textarea id="message" name="message" rows="5" required
                  class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-amber-500 focus:ring-amber-500"></textarea>
              </div>

              <!-- Honeypot -->
              <div class="hidden" aria-hidden="true">
                <label for="company">Company</label>
                <input id="company" name="company" type="text" tabindex="-1" autocomplete="off" />
              </div>

              <div class="mt-5 flex items-start gap-3">
                <input id="consent" name="consent" type="checkbox" required
                  class="mt-1 h-4 w-4 rounded border-gray-300 text-amber-600 focus:ring-amber-500">
                <label for="consent" class="text-sm text-gray-600">I agree to be contacted about my inquiry.</label>
              </div>

              <div class="mt-6">
                <button type="submit"
                  class="inline-flex w-full items-center justify-center rounded-lg bg-amber-500 px-5 py-3 font-semibold text-gray-900 hover:bg-amber-400 transition sm:w-auto">
                  Send request
                </button>
                <p id="form-status"
                  class="mt-3 hidden rounded-md bg-green-50 px-3 py-2 text-sm text-green-700 ring-1 ring-green-200">
                  Thanks! We’ll be in touch shortly.
                </p>
              </div>
            </form>
          </div>

          <!-- Info -->
          <aside class="rounded-2xl bg-white p-6 ring-1 ring-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Direct Contacts</h3>
            <ul class="mt-4 space-y-3 text-gray-700">
              <li>
                <div class="text-sm text-gray-500">Estimating</div>
                <a href="mailto:estimating@yourcompany.com"
                  class="font-medium text-gray-900 hover:underline">estimating@yourcompany.com</a>
              </li>
              <li>
                <div class="text-sm text-gray-500">Phone</div>
                <a href="tel:+15551234567" class="font-medium text-gray-900 hover:underline">(555) 123-4567</a>
              </li>
              <li>
                <div class="text-sm text-gray-500">Office</div>
                <div class="font-medium text-gray-900">1200 Mason Ave, Suite 200, Springfield</div>
              </li>
              <li>
                <div class="text-sm text-gray-500">Hours</div>
                <div class="font-medium text-gray-900">Mon–Fri, 8:00–17:00</div>
              </li>
            </ul>

            <div class="mt-6 rounded-xl bg-gray-50 p-4 text-sm text-gray-700 ring-1 ring-gray-200">
              Prefer a site visit? We can meet on-site to review access, utilities, and staging.
            </div>

            <!-- Optional tiny map image (kept subtle) -->
            <a href="https://maps.google.com" target="_blank" rel="noopener"
              class="mt-6 block overflow-hidden rounded-xl ring-1 ring-gray-200">
              <img src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?q=80&w=1200&auto=format&fit=crop"
                alt="Map preview" class="aspect-[4/3] w-full object-cover">
            </a>
          </aside>
        </div>
      </div>
    </section>




    <?php get_footer(); ?>