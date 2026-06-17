@extends('layouts.app')

@section('title', $article['title'].' — Excellencial')

@push('meta')
    <meta name="description" content="{{ $article['excerpt'] }}">
    <meta property="og:title" content="{{ $article['title'] }}">
    <meta property="og:description" content="{{ $article['excerpt'] }}">
    <meta property="og:type" content="article">
@endpush

@section('content')
    <article>
        <header class="relative overflow-hidden border-b border-white/10">
            <div class="absolute inset-0 mesh-hero opacity-50"></div>
            <div class="relative mx-auto max-w-3xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
                <p class="text-xs font-semibold uppercase tracking-widest text-highlight">{{ $article['category'] }}</p>
                <h1 class="font-display mt-4 text-4xl font-semibold leading-tight text-white sm:text-5xl">{{ $article['title'] }}</h1>
                <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-slate-500">
                    <time datetime="{{ $article['published_at'] }}">{{ \Illuminate\Support\Carbon::parse($article['published_at'])->format('F j, Y') }}</time>
                    <span>{{ $article['read_minutes'] }} min read</span>
                    <span>{{ $article['author'] }}</span>
                </div>
            </div>
        </header>

        <div class="mx-auto max-w-3xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <div class="article-body max-w-none space-y-6 text-base leading-relaxed text-slate-300 [&_h2]:mt-10 [&_h2]:font-display [&_h2]:text-2xl [&_h2]:font-semibold [&_h2]:text-white [&_p]:mt-4 [&_ul]:mt-4 [&_ul]:list-disc [&_ul]:space-y-2 [&_ul]:pl-5 [&_li]:marker:text-highlight">
                {!! $article['body'] !!}
            </div>

            <div class="mt-14 border-t border-white/10 pt-10">
                <a href="{{ route('articles.index') }}" class="inline-flex items-center text-sm font-semibold text-highlight hover:text-white">← Back to articles</a>
            </div>
        </div>
    </article>
@endsection
