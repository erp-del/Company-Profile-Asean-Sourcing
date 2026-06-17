@extends('layouts.app')

@section('title', 'Articles — Excellencial')

@push('meta')
    <meta name="description" content="Inspection, audit, and quality articles from Excellencial—your Indonesia quality control partner.">
@endpush

@section('content')
    <section class="relative overflow-hidden border-b border-white/10">
        <div class="absolute inset-0 mesh-hero opacity-60"></div>
        <div class="relative mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
            <p class="text-xs font-semibold uppercase tracking-widest text-highlight">Insights</p>
            <h1 class="font-display mt-3 max-w-3xl text-4xl font-semibold text-white sm:text-5xl">Blog</h1>
            <p class="mt-6 max-w-2xl text-lg text-slate-400">
                News and practical notes on inspections, audits, and importing from Indonesia—aligned with topics we publish on excellencial.com.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
        <div class="grid gap-8 lg:grid-cols-2">
            @foreach ($articles as $article)
                <article class="group flex flex-col rounded-2xl border border-white/10 bg-navy-dark/40 p-8 transition hover:border-highlight/30">
                    <div class="flex flex-wrap items-center gap-3 text-xs text-slate-500">
                        <span class="rounded-full border border-highlight/20 bg-highlight/10 px-3 py-1 font-semibold uppercase tracking-wider text-highlight">{{ $article['category'] }}</span>
                        <time datetime="{{ $article['published_at'] }}">{{ \Illuminate\Support\Carbon::parse($article['published_at'])->format('F j, Y') }}</time>
                        <span>{{ $article['read_minutes'] }} min read</span>
                    </div>
                    <h2 class="font-display mt-4 text-2xl font-semibold text-white group-hover:text-highlight">
                        <a href="{{ route('articles.show', $article['slug']) }}">{{ $article['title'] }}</a>
                    </h2>
                    <p class="mt-3 flex-1 text-slate-400">{{ $article['excerpt'] }}</p>
                    <a href="{{ route('articles.show', $article['slug']) }}" class="mt-6 inline-flex text-sm font-semibold text-highlight">Read full article →</a>
                </article>
            @endforeach
        </div>
    </section>
@endsection
