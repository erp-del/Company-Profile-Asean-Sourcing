@extends('layouts.asean-gateway')

@section('title', 'Asean Sourcing — Choose your path')

@section('content')
    @php
        $cards = [
            [
                'href' => route('asean.assist'),
                'video' => asset('media/gateway/A1.mp4'),
                'number' => '01 — Advisory',
                'title' => 'Asean Sourcing Projects',
                'subtitle' => 'Quality, audits & supply-side support',
                'sr' => 'Asean Sourcing Projects — open',
            ],
            [
                'href' => route('asean.retail'),
                'video' => asset('media/gateway/A2.mp4'),
                'number' => '02 — Excellencial',
                'title' => 'Excellencial',
                'subtitle' => 'Third-party QC partner in Indonesia',
                'sr' => 'Excellencial — open',
            ],
            [
                'href' => route('asean.projects'),
                'video' => asset('media/gateway/A3.mp4'),
                'number' => '03 — Delivery',
                'title' => 'Asean Sourcing Retail',
                'subtitle' => 'FF&E · Hospitality · Single-contract supply',
                'sr' => 'Asean Sourcing Retail — open',
            ],
        ];
    @endphp

    <div data-asean-gateway class="relative min-h-[100dvh]">

        {{-- Header --}}
        <header class="sticky top-0 z-50 flex items-center justify-between bg-black/95 px-4 py-5 backdrop-blur-sm sm:px-6 lg:px-10">        
        <div class="flex items-center">
                <img src="{{ asset('media/gateway/aseanlogo.png') }}" alt="Asean Logo" class="h-12 sm:h-14 w-auto">
            </div>

            <nav class="hidden items-center gap-5 text-[11px] font-semibold uppercase tracking-[0.18em] text-asean-orange sm:flex">
                <a href="{{ route('asean.assist') }}" class="transition hover:opacity-75">Asean Sourcing Projects</a>
                <span class="text-slate-300">·</span>
                <a href="{{ route('asean.retail') }}" class="transition hover:opacity-75">Excellencial</a>
                <span class="text-slate-300">·</span>
                <a href="{{ route('asean.projects') }}" class="transition hover:opacity-75">Asean Sourcing Retail</a>
            </nav>
        </header>

        {{-- Main: left hero + right cards --}}
        <div class="grid min-h-[calc(100dvh-5rem)] grid-cols-12 items-center gap-10 px-4 pb-12 lg:gap-12 lg:px-10">

            {{-- Left hero --}}
            <section class="col-span-12 flex items-center lg:col-span-4 xl:col-span-5">
                <div class="max-w-xl lg:max-w-lg">
                    <p class="text-xs font-semibold uppercase tracking-[0.22em] text-slate-500">
                    Premium Furniture · Wholesale Supply · Hospitality FF&E
                    </p>

                    <h1 class="mt-5 font-asean-display text-4xl font-semibold leading-[1.08] text-slate-900 sm:text-5xl lg:text-[3.25rem]">
                        A Legacy of Sourcing Excellence
                    </h1>

                    <p class="mt-5 max-w-md text-sm leading-relaxed text-slate-600">
                    Supplying wholesalers, retailers, and hospitality projects under a single commercial contract. We own the responsibility from production line to final delivery.
                    </p>

                    <div class="mt-8">
                        <a href="{{ route('asean.assist') }}"
                           class="gateway-cta inline-flex items-center rounded-full px-7 py-3 text-sm font-semibold text-white shadow-md transition hover:shadow-lg">
                            Explore
                        </a>
                    </div>

            </section>

            {{-- Right cards with horizontal roulette blocks --}}
            <section class="col-span-12 flex flex-col items-center justify-center lg:col-span-8 lg:justify-end xl:col-span-7 relative gap-6">
                {{-- Horizontal Roulette Image Blocks --}}
                <div class="gateway-roulette-container w-full max-w-[920px] overflow-hidden rounded-2xl">
                    <div class="gateway-roulette-wrapper flex transition-transform duration-700 ease-in-out">
                        <img src="{{ asset('media/gateway/f1.JPG') }}" alt="Product 1" class="gateway-roulette-slide w-1/5 flex-shrink-0 aspect-[4/3] object-cover">
                        <img src="{{ asset('media/gateway/f2.JPEG') }}" alt="Product 2" class="gateway-roulette-slide w-1/5 flex-shrink-0 aspect-[4/3] object-cover">
                        <img src="{{ asset('media/gateway/f3.JPEG') }}" alt="Product 3" class="gateway-roulette-slide w-1/5 flex-shrink-0 aspect-[4/3] object-cover">
                        <img src="{{ asset('media/gateway/f4.JPEG') }}" alt="Product 4" class="gateway-roulette-slide w-1/5 flex-shrink-0 aspect-[4/3] object-cover">
                        <img src="{{ asset('media/gateway/f5.JPEG') }}" alt="Product 5" class="gateway-roulette-slide w-1/5 flex-shrink-0 aspect-[4/3] object-cover">
                    </div>
                </div>

                {{-- Navigation Cards --}}
                <div class="grid w-full max-w-[920px] grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-5">
                    @foreach ($cards as $card)
                        <a href="{{ $card['href'] }}"
                           class="gateway-card group relative block w-full overflow-hidden rounded-2xl aspect-[3/4] max-h-[min(68vh,580px)] min-h-[300px] focus:outline-none focus-visible:ring-4 focus-visible:ring-asean-orange/40">

                            <video class="gateway-card-media absolute inset-0 h-full w-full object-cover"
                                   autoplay muted loop playsinline preload="metadata">
                                <source src="{{ $card['video'] }}" type="video/mp4">
                            </video>

                            <div class="gateway-card-overlay absolute inset-0" aria-hidden="true"></div>

                            <div class="absolute inset-x-4 bottom-4 z-20">
                                <div class="gateway-card-label w-full rounded-xl px-4 py-3.5 text-white">
                                    <div class="text-[10px] font-bold uppercase tracking-[0.2em] text-white/95">
                                        {{ $card['number'] }}
                                    </div>
                                    <div class="mt-1.5 font-asean-display text-base font-semibold leading-tight sm:text-lg">
                                        {{ $card['title'] }}
                                    </div>
                                    <div class="mt-1 text-[10px] font-medium uppercase tracking-wide text-white/90">
                                        {{ $card['subtitle'] }}
                                    </div>
                                </div>
                            </div>

                            <span class="sr-only">{{ $card['sr'] }}</span>
                        </a>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection