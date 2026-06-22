<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Asean Sourcing')</title>
    <meta name="description" content="@yield('meta_description', 'Asean Sourcing — Assist, Retail (Excellencial), and Projects.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen bg-white font-asean text-slate-800 antialiased">
    <header class="sticky top-0 z-50 border-b border-slate-200/80 bg-white/90 backdrop-blur-md">
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
            <a href="{{ route('asean.home') }}" class="flex flex-col leading-tight">
                <span class="font-asean-display text-xl font-semibold tracking-tight text-asean-blue sm:text-2xl">Asean Sourcing</span>
                <span class="text-[10px] font-medium uppercase tracking-[0.2em] text-slate-500">Your vision, our expertise</span>
            </a>
            <nav class="hidden items-center gap-6 md:flex" aria-label="Division">
                <a href="{{ route('asean.assist') }}" class="text-sm font-medium text-slate-600 hover:text-asean-blue">Asean Sourcing Projects</a>
                <a href="{{ route('asean.retail') }}" class="text-sm font-medium text-slate-600 hover:text-asean-blue">Excellencial</a>
                <a href="{{ route('asean.projects') }}" class="text-sm font-medium text-slate-600 hover:text-asean-blue">Asean Sourcing Retail</a>
                <a href="{{ route('asean.home') }}" class="rounded-full border-2 border-black bg-asean-blue px-4 py-2 text-xs font-bold uppercase tracking-wider text-asean-gold shadow-sm hover:bg-asean-blue-dark">Gateway</a>
            </nav>
            <a href="{{ route('asean.home') }}" class="rounded-lg border border-slate-200 px-3 py-2 text-xs font-semibold text-asean-blue md:hidden">Menu</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="border-t border-slate-200 bg-slate-50 py-10">
        <div class="mx-auto max-w-7xl px-4 text-center text-sm text-slate-500 sm:px-6 lg:px-8">
            <p class="font-asean-display text-lg font-semibold text-asean-blue">Asean Sourcing</p>
            <p class="mt-2">Principal procurement &amp; trading · Indonesia &amp; regional manufacturing network</p>
            <p class="mt-6 text-xs">&copy; {{ date('Y') }} Asean Sourcing. Multi-site demo.</p>
        </div>
    </footer>
</body>
</html>
