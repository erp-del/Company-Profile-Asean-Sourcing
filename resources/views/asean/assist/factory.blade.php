@extends('layouts.asean')

@section('title', 'Assist — Factory network')

@section('content')
    <div class="border-b border-slate-200 bg-asean-sky/50">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <a href="{{ route('asean.assist') }}" class="text-xs font-semibold uppercase tracking-widest text-asean-blue hover:underline">← Assist home</a>
            <h1 class="font-asean-display mt-4 text-4xl font-semibold text-slate-900">Factory network</h1>
            <p class="mt-4 max-w-2xl text-slate-600">Dummy overview: map Java, Bali, and regional capacity—with onboarding scorecards and audit history snapshots.</p>
        </div>
    </div>
    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-4 sm:grid-cols-3">
            @foreach (['Java — wood & metal', 'Bali — décor & crafts', 'Regional — mixed programs'] as $region)
                <div class="rounded-xl border border-slate-200 bg-white p-6 text-sm font-medium text-slate-700 shadow-sm">
                    {{ $region }}
                </div>
            @endforeach
        </div>
    </section>
@endsection
