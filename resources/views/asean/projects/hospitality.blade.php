@extends('layouts.asean')

@section('title', 'Projects — Hospitality FF&E')

@section('content')
    <div class="relative overflow-hidden bg-asean-blue py-20 text-white">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1600&q=80')] bg-cover bg-center opacity-30"></div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <a href="{{ route('asean.projects') }}" class="text-xs font-bold uppercase tracking-widest text-white/70 hover:text-white">← Projects home</a>
            <h1 class="font-asean-display mt-6 text-4xl font-semibold sm:text-5xl">Hospitality FF&amp;E &amp; OS&amp;E</h1>
            <p class="mt-6 max-w-2xl text-lg text-white/90">
                Placeholder hub for room packs, public areas, OS&amp;E lists, and installation-ready sequencing—patterned after hospitality programs described on <a href="https://asean-sourcing.com/" class="underline underline-offset-4 hover:text-asean-sky" target="_blank" rel="noopener noreferrer">asean-sourcing.com</a>.
            </p>
        </div>
    </div>
    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                <h2 class="font-asean-display text-xl font-semibold text-slate-900">Dummy modules</h2>
                <ul class="mt-4 space-y-2 text-sm text-slate-600">
                    <li>Guest room loose furniture matrix</li>
                    <li>FF&amp;E vs OS&amp;E line delineation</li>
                    <li>Mock-up and bulk alignment</li>
                </ul>
            </div>
            <div class="rounded-2xl border border-dashed border-asean-blue/40 bg-asean-sky/40 p-8">
                <p class="text-sm text-slate-700">Hook this route to CMS collections or Notion embeds when your team is ready.</p>
            </div>
        </div>
    </section>
@endsection
