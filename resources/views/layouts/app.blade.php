<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Excellencial — Your quality control partner in Indonesia')</title>
    <meta name="description" content="@yield('meta_description', 'Western-managed, Indonesia-based third party quality management: inspections, audits, and certification for consumer goods and retail.')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,600;0,9..144,700;1,9..144,400&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    @stack('meta')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-bg-dark font-sans text-slate-100">
    <div class="pointer-events-none fixed left-0 right-0 top-0 z-[60] h-0.5 bg-white/10" aria-hidden="true">
        <div id="scroll-progress" class="h-full w-full origin-left scale-x-0 bg-highlight transition-transform duration-150 ease-out will-change-transform"></div>
    </div>

    <header class="navbar fixed top-0 z-50 w-full border-b border-white/10 bg-[rgba(0,31,63,0.95)] backdrop-blur-md transition-colors duration-300">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="{{ route('excellencial.home') }}" class="group flex flex-col gap-0.5">
                <span class="font-display text-xl font-light tracking-wide text-highlight sm:text-2xl">Excellencial</span>
                <span class="text-[10px] font-medium uppercase tracking-[0.25em] text-slate-400">Quality control partner · Indonesia</span>
            </a>

            <nav class="flex items-center gap-4 lg:gap-6" aria-label="Primary">
                <ul class="nav-links flex items-center gap-0 lg:gap-1">
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ url('/excellencial#about') }}">About</a></li>
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ url('/excellencial#services') }}">Services</a></li>
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ url('/excellencial#industries') }}">Industries</a></li>
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ url('/excellencial#coverage') }}">Coverage</a></li>
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ route('articles.index') }}">Blog</a></li>
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ url('/excellencial#faq') }}">FAQ</a></li>
                    <li><a class="rounded-lg px-3 py-2 text-xs font-semibold uppercase tracking-wide text-slate-200 transition hover:text-white lg:text-[11px]" href="{{ url('/excellencial#contact') }}">Contact</a></li>
                </ul>
                <a href="{{ url('/excellencial#contact') }}" class="nav-cta hidden rounded border-2 border-highlight px-4 py-2 text-xs font-bold uppercase tracking-wide text-highlight transition hover:bg-highlight hover:text-navy-dark lg:inline-flex">Book now</a>
                <button type="button" class="hamburger flex h-10 w-10 flex-col items-center justify-center gap-1.5 rounded border border-white/10 bg-white/5 lg:hidden" aria-expanded="false" aria-label="Open menu" data-mobile-toggle>
                    <span class="h-0.5 w-5 rounded-full bg-white transition-transform"></span>
                    <span class="h-0.5 w-5 rounded-full bg-white transition-opacity"></span>
                    <span class="h-0.5 w-5 rounded-full bg-white transition-transform"></span>
                </button>
            </nav>
        </div>
    </header>

    <main class="pt-[72px]">
        @yield('content')
    </main>

    <button type="button" id="back-to-top" class="fixed bottom-8 right-4 z-50 flex h-12 w-12 items-center justify-center rounded-full border border-white/15 bg-navy/90 text-highlight shadow-xl backdrop-blur transition-all duration-300 hover:border-highlight hover:bg-highlight hover:text-navy-dark focus:outline-none focus-visible:ring-2 focus-visible:ring-highlight md:right-8" aria-label="Back to top">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/></svg>
    </button>

    <footer class="border-t border-white/10 bg-navy-dark">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
            <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div class="lg:col-span-2">
                    <p class="font-display text-2xl font-light tracking-wide text-highlight">Excellencial</p>
                    <p class="mt-3 max-w-md text-sm leading-relaxed text-slate-400">
                        The only Western managed, Indonesia based, third party quality management company exclusively operating in Indonesia—focused on consumer goods and retail. Independent inspection, audit, and certification services.
                    </p>
                    <p class="mt-4 text-xs font-semibold uppercase tracking-wider text-slate-500">PT. ABOVE AND BEYOND</p>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-highlight">Explore</p>
                    <ul class="mt-4 space-y-2 text-sm text-slate-400">
                        <li><a class="transition hover:text-highlight" href="{{ url('/excellencial#about') }}">Why Excellencial</a></li>
                        <li><a class="transition hover:text-highlight" href="{{ url('/excellencial#services') }}">Inspections &amp; audits</a></li>
                        <li><a class="transition hover:text-highlight" href="{{ route('articles.index') }}">Blog</a></li>
                        <li><a class="transition hover:text-highlight" href="{{ url('/excellencial#contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-highlight">Offices</p>
                    <ul class="mt-4 space-y-3 text-sm text-slate-400">
                        <li><span class="text-slate-200">Bali</span> — Jalan Raya Padonan No 26, Canggu 80361</li>
                        <li><span class="text-slate-200">Java</span> — Jalan Tarudan No. 69a, Tarudan, Bangunharjo, Bantul 55187, Yogyakarta</li>
                        <li class="pt-2 text-highlight"><a href="tel:+622745060353">+62 (0) 274 5060 353</a></li>
                        <li><a class="text-highlight hover:underline" href="mailto:info@excellencial.com">info@excellencial.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 flex flex-col gap-2 border-t border-white/10 pt-8 text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between">
                <p>&copy; {{ date('Y') }} Excellencial. All rights reserved.</p>
                <p class="text-slate-600"><a href="{{ route('asean.home') }}" class="hover:text-highlight">Asean Sourcing gateway</a> · Laravel {{ app()->version() }}</p>
            </div>
        </div>
    </footer>
</body>
</html>
