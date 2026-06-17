@extends('layouts.asean')

@section('title', 'Projects — Procurement & delivery')

@section('content')
    <div class="bg-slate-900 py-16 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <a href="{{ route('asean.projects') }}" class="text-xs font-bold uppercase tracking-widest text-white/60 hover:text-white">← Projects home</a>
            <h1 class="font-asean-display mt-6 text-4xl font-semibold sm:text-5xl">Procurement &amp; single-contract delivery</h1>
            <p class="mt-6 max-w-2xl text-white/85">
                Dummy sub-page: expand SOPs for PO consolidation, milestone billing, and export document packages. Mirrors the “end-to-end commercial delivery” narrative from the reference brand.
            </p>
        </div>
    </div>
    <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="prose prose-slate max-w-none">
            <h2 class="font-asean-display text-2xl font-semibold text-asean-blue">What to add here</h2>
            <p class="text-slate-600">Line cards, payment milestones, Incoterms, warranty posture, and sample-to-bulk matrices—each as subsections or downloadable PDFs.</p>
        </div>
    </section>
@endsection
