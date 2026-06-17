@extends('layouts.asean')

@section('title', 'Assist — Quality programs')

@section('content')
    <div class="border-b border-slate-200 bg-asean-sky/50">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <a href="{{ route('asean.assist') }}" class="text-xs font-semibold uppercase tracking-wider text-asean-blue hover:underline">← Assist home</a>
            <h1 class="font-asean-display mt-4 text-4xl font-semibold text-slate-900">Quality programs</h1>
            <p class="mt-4 max-w-2xl text-slate-600">Placeholder page: define SOP libraries, AQL defaults by category, and digital report distribution. Wire forms or CMS when ready.</p>
        </div>
    </div>
    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                <h2 class="font-asean-display text-xl font-semibold">Included (dummy)</h2>
                <ul class="mt-4 list-inside list-disc space-y-2 text-sm text-slate-600">
                    <li>Milestone inspection matrix</li>
                    <li>Defect taxonomy by product group</li>
                    <li>CAPA tracking template</li>
                </ul>
            </div>
            <div class="rounded-2xl border border-dashed border-asean-blue/30 bg-asean-sky/30 p-8">
                <h2 class="font-asean-display text-xl font-semibold text-asean-blue">Next</h2>
                <p class="mt-3 text-sm text-slate-600">Connect to booking APIs, share calendars, or embed your live stack.</p>
            </div>
        </div>
    </section>
@endsection
