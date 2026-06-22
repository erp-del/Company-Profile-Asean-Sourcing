@extends('layouts.asean')

@section('title', 'Asean Sourcing Projects — Principal FF&E supply')

@section('meta_description', 'End-to-end procurement and trading for hospitality FF&E and OS&E. Single commercial contract: scope, production, QC, consolidation, delivery.')

@section('content')
    {{-- Hero — reference: asean-sourcing.com tone --}}
    <section class="relative min-h-[78vh] overflow-hidden bg-slate-900 text-white">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1920&q=80')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-asean-blue/95 via-asean-blue/75 to-asean-blue/40"></div>
        <div class="relative mx-auto flex min-h-[78vh] max-w-7xl flex-col justify-center px-4 py-24 sm:px-6 lg:px-8">
            <p class="text-xs font-bold uppercase tracking-[0.35em] text-white/70">Projects · Principal supply</p>
            <h1 class="font-asean-display mt-6 max-w-4xl text-4xl font-semibold leading-[1.08] sm:text-5xl lg:text-6xl">
                Wholesale supply &amp; hospitality FF&amp;E—under <span class="text-asean-sky">one commercial contract</span>
            </h1>
            <p class="mt-8 max-w-2xl text-lg text-black/90">
                We supply wholesalers, retailers, and finished FF&amp;E as a principal—owning procurement, production control, QC, consolidation, and delivery. Structure inspired by the positioning on <a href="https://asean-sourcing.com/" class="font-semibold text-white underline underline-offset-4 hover:text-asean-sky" target="_blank" rel="noopener noreferrer">asean-sourcing.com</a> (reference only).
            </p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('asean.projects.procurement') }}" class="rounded-full bg-white px-8 py-3.5 border-2 border-black text-sm font-bold uppercase tracking-wider text-black shadow-xl transition hover:bg-asean-sky">Procurement &amp; delivery</a>
                <a href="{{ route('asean.projects.hospitality') }}" class="rounded-full bg-white border-2 border-black/80 px-8 py-3.5 text-sm font-bold uppercase tracking-wider text-black transition hover:bg-white/10">Hospitality FF&amp;E</a>
                <a href="{{ route('asean.catalogue') }}" class="rounded-full border-2 border-asean-gold bg-asean-gold/20 px-8 py-3.5 text-sm font-bold uppercase tracking-wider text-asean-gold transition hover:bg-asean-gold hover:text-white">Product Catalogue</a>
            </div>
        </div>
    </section>

    {{-- Stats strip --}}
    <section class="border-b border-slate-200 bg-white py-12">
        <div class="mx-auto grid max-w-7xl gap-8 px-4 sm:grid-cols-4 sm:px-6 lg:px-8">
            @foreach ([['90%', 'On-time delivery'], ['98%', 'Quality compliance'], ['100%', 'Single-contract model'], ['79%', 'Repeat programs']] as $s)
                <div class="text-center">
                    <p class="font-asean-display text-4xl font-semibold text-asean-blue">{{ $s[0] }}</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-slate-500">{{ $s[1] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Execution pillars --}}
    <section class="bg-asean-sky/40 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-asean-display text-center text-3xl font-semibold text-slate-900 sm:text-4xl">Commercial execution</h2>
            <p class="mx-auto mt-4 max-w-2xl text-center text-slate-600">Six workstreams—mirroring how principal suppliers govern complex, multi-category scope.</p>
            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Scope alignment', 'Specifications, quantities, timelines, and commercial boundaries agreed up front.'],
                    ['Procurement management', 'Manufacturer identification against design, budget, and performance.'],
                    ['Production management', 'Coordination across categories without client-side supplier juggling.'],
                    ['Quality control', 'Structured in-line and pre-shipment gates tied to approved samples.'],
                    ['Consolidation & packing', 'Multi-supplier consolidation into one shipment plan.'],
                    ['Export & logistics', 'Documentation and freight coordination to handoff.'],
                ] as [$t, $d])
                    <div class="rounded-2xl border border-slate-200/80 bg-white p-8 shadow-sm transition hover:shadow-md">
                        <h3 class="font-asean-display text-xl font-semibold text-asean-blue">{{ $t }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $d }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 4 steps --}}
    <section class="py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-asean-display text-center text-3xl font-semibold text-slate-900">Four steps to start</h2>
            <ol class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['01', 'Scope alignment', 'Share scope, specs, and target dates.'],
                    ['02', 'Commercial offer', 'Single offer covering supply under agreed terms.'],
                    ['03', 'Controlled production', 'Manufacturing with structured QC.'],
                    ['04', 'Final delivery', 'Consolidation, export, delivery to schedule.'],
                ] as $step)
                    <li class="rounded-2xl border border-slate-200 bg-gradient-to-br from-white to-asean-sky/30 p-8">
                        <span class="font-asean-display text-3xl font-semibold text-asean-blue/70">{{ $step[0] }}</span>
                        <h3 class="font-asean-display mt-4 text-lg font-semibold text-slate-900">{{ $step[1] }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ $step[2] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Portfolio teaser (dummy names from reference site style) --}}
    <section class="border-t border-slate-200 bg-slate-50 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="font-asean-display text-center text-3xl font-semibold text-slate-900">Portfolio (illustrative)</h2>
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                @foreach ([
                    ['Savoy Seychelles Resort & Spa', 'Mahe · Hospitality'],
                    ['Pullman Sochi', '5-star FF&E program'],
                    ['Aston Inn Hotel', 'Regional rollout'],
                ] as [$n, $l])
                    <div class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <div class="h-44 bg-gradient-to-br from-asean-blue to-asean-blue-dark transition duration-500 group-hover:scale-105"></div>
                        <div class="p-6">
                            <p class="font-asean-display text-lg font-semibold text-slate-900">{{ $n }}</p>
                            <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-asean-blue">{{ $l }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="mt-8 text-center text-xs text-slate-500">Replace with your authoritative project list and imagery.</p>
        </div>
    </section>

    <section class="bg-asean-blue py-16 text-center text-black">
        <p class="font-asean-display text-2xl font-semibold">Ready for a single-contract program?</p>
        <a href="mailto:projects@aseansourcing.demo" class="mt-6 inline-block rounded-full border-2 border-white px-8 py-3 text-sm font-bold uppercase tracking-wider hover:bg-white hover:text-asean-blue">Contact projects desk</a>
        <p class="mt-4 text-xs text-black/60">Dummy email — configure in production.</p>
    </section>
@endsection
