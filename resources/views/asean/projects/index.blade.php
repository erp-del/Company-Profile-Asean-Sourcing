@extends('layouts.asean')

@section('title', 'Asean Sourcing Projects — B2B Retail & Product Sourcing')

@section('meta_description', 'Direct wholesale sourcing, custom OEM manufacturing, and consolidated delivery for global retail brands. Furniture, lighting, home decor, and textiles under a single commercial contract.')

@push('styles')
<style>
    .asean-navy { background-color: #001d39; }
    .asean-gold { background-color: #985e23; }
    .text-asean-navy { color: #001d39 !important; }
    .text-asean-gold { color: #985e23 !important; }
    .border-asean-gold { border-color: #985e23; }
    .bg-asean-gold-soft { background-color: rgba(152, 94, 35, 0.1); }
    
    .hero-gradient {
        background: linear-gradient(135deg, #001d39 0%, #002a52 50%, #001d39 100%);
    }
    
    .gold-gradient {
        background: linear-gradient(135deg, #985e23 0%, #b8762d 100%);
    }
    
    .category-card {
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .category-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 29, 57, 0.12);
    }
</style>
@endpush

@section('content')
    {{-- Hero Section --}}
    <section class="relative min-h-[78vh] overflow-hidden bg-slate-900 text-white">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=1920&q=80')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#001d39]/95 via-[#001d39]/80 to-[#001d39]/50"></div>
        <div class="relative mx-auto flex min-h-[78vh] max-w-7xl flex-col justify-center px-4 py-24 sm:px-6 lg:px-8">
            <p class="text-xs font-bold uppercase tracking-[0.35em] text-asean-gold">Asean Sourcing · B2B Retail &amp; Wholesale</p>
            <h1 class="font-asean-display mt-6 max-w-4xl text-4xl font-semibold leading-[1.1] sm:text-5xl lg:text-6xl text-white">
                Direct sourcing &amp; custom production—under <span class="text-asean-gold">one commercial contract</span>
            </h1>
            <p class="mt-8 max-w-2xl text-lg text-white/85 leading-relaxed font-asean">
                We supply wholesale distributors, retail brands, and e-commerce stores as a principal partner—owning the design development, factory procurement, production monitoring, quality control, and logistics consolidation.
            </p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('asean.catalogue') }}" class="gold-gradient rounded-full px-8 py-4 text-sm font-bold uppercase tracking-wider text-white shadow-xl hover:shadow-2xl transition duration-300 hover:scale-105">
                    Browse Product Catalogue
                </a>
                <a href="#categories" class="rounded-full bg-transparent border-2 border-white/80 px-8 py-3.5 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-asean-gold hover:text-slate-900">
                    View Collections
                </a>
            </div>
        </div>
    </section>

    {{-- Stats strip --}}
    <section class="border-b border-slate-200 bg-white py-12">
        <div class="mx-auto grid grid-cols-2 gap-8 px-4 sm:grid-cols-4 sm:px-6 lg:px-8">
            @foreach ([['90%', 'Container Consolidation'], ['98%', 'Quality Compliance'], ['100%', 'Single-Contract Risk'], ['84%', 'Repeat B2B Programs']] as $s)
                <div class="text-center">
                    <p class="font-asean-display text-4xl font-semibold text-slate-900">{{ $s[0] }}</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-slate-500">{{ $s[1] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Catalogue & Product Showcase --}}
    <section id="categories" class="py-20 bg-slate-50 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-asean-gold mb-3">Our Collections</p>
                <h2 class="font-asean-display text-3xl font-semibold text-slate-900 sm:text-4xl">Explore Product Categories</h2>
                <p class="mx-auto mt-4 max-w-2xl text-slate-600 font-asean">
                    Discover handcrafted, quality-assured products sourced and manufactured directly from our Indonesian and Southeast Asian factory network.
                </p>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    [
                        'Furniture', 
                        'Teak, hand-woven rattan, outdoor dining, and custom contemporary upholstery.', 
                        'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=450&fit=crop',
                        'Furniture'
                    ],
                    [
                        'Lighting', 
                        'Bespoke pendant lamps, hand-forged brass details, and organic fiber woven fixtures.', 
                        'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=600&h=450&fit=crop',
                        'Lighting'
                    ],
                    [
                        'Home Decor', 
                        'Hand-painted ceramics, carved stone bowls, minimalist tabletop accessories, and art objects.', 
                        'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=600&h=450&fit=crop',
                        'Home Decor'
                    ],
                    [
                        'Textiles', 
                        'Premium Egyptian cotton beddings, hand-loomed cushions, throws, and linen collections.', 
                        'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=600&h=450&fit=crop',
                        'Textiles'
                    ]
                ] as [$title, $description, $imgUrl, $categorySlug])
                    <div class="category-card group flex flex-col overflow-hidden rounded-2xl border border-slate-200/80 bg-white shadow-sm cursor-pointer" onclick="window.location.href='{{ route('asean.catalogue', ['category' => $categorySlug]) }}'">
                        <div class="relative overflow-hidden aspect-[4/3] bg-slate-100">
                            <img src="{{ $imgUrl }}" alt="{{ $title }} Collection" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/10 transition-opacity duration-300 group-hover:opacity-0"></div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <h3 class="font-asean-display text-xl font-semibold text-slate-900">{{ $title }}</h3>
                            <p class="mt-2 text-sm text-slate-600 leading-relaxed flex-grow">{{ $description }}</p>
                            <div class="mt-4 flex items-center text-xs font-bold uppercase tracking-wider text-asean-gold group-hover:text-[#b8762d]">
                                Explore {{ $title }} Collection <span class="ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5">→</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-16 text-center">
                <a href="{{ route('asean.catalogue') }}" class="inline-flex items-center gap-2 rounded-full border-2 border-slate-900 bg-white px-8 py-3.5 text-sm font-bold uppercase tracking-wider text-slate-900 transition hover:bg-asean-gold hover:text-white">
                    View Entire Catalogue
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Retail Sourcing Capabilities --}}
    <section id="capabilities" class="bg-asean-gold-soft">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-asean-gold mb-3">Our Core Assets</p>
                <h2 class="font-asean-display text-3xl font-semibold text-slate-900 sm:text-4xl">Retail Sourcing &amp; Execution</h2>
                <p class="mx-auto mt-4 max-w-2xl text-slate-600 font-asean">
                    Six specialized workstreams designed to protect retail buyers from supply-chain risks, poor quality, and logistical friction.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Direct Factory Sourcing', 'Access direct factory-level manufacturing prices with complete transparency and a fixed agency commission structure.'],
                    ['Custom OEM / ODM Development', 'Translate sketches, reference photos, or detailed CAD designs into retail-ready collections with complete sampling cycles.'],
                    ['Supplier Verification & Audits', 'Every factory in our network is audited for production capacity, financial stability, ethical labor practices, and quality standards.'],
                    ['Strict Quality Control Gates', 'In-line inspections during manufacturing and comprehensive pre-shipment checks tied to your approved benchmark samples.'],
                    ['Packaging & Barcoding', 'Custom product labeling, retail-specific barcodes, custom boxes, and warning sticker compliance applied at the source.'],
                    ['Consolidation & Freight', 'Consolidate items from multiple specialized factories into single containers, reducing customs costs and simplifying logistics.'],
                ] as [$title, $desc])
                    <div class="rounded-2xl border border-slate-200/80 bg-slate-50/50 p-8 shadow-sm transition hover:shadow-md hover:bg-white duration-300">
                        <h3 class="font-asean-display text-lg font-semibold text-[#001d39]">{{ $title }}</h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 font-asean">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- The Sourcing Process --}}
    <section class="py-20 bg-slate-50 px-4 sm:px-6 lg:px-8 border-t border-slate-200">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-asean-gold mb-3">Workflow</p>
                <h2 class="font-asean-display text-3xl font-semibold text-slate-900">Four Steps to Start Sourcing</h2>
            </div>
            
            <ol class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['01', 'Inquiry & Scope', 'Share your product designs, material specifications, quantities, and target retail price points.'],
                    ['02', 'Sampling & Quotation', 'We source suitable factories, provide transparent quotes, and deliver prototype samples for your feedback.'],
                    ['03', 'Supervised Production', 'Once samples are signed off, production starts under direct supervision with regular quality checks.'],
                    ['04', 'Consolidation & Handoff', 'Products are consolidated, packaged, barcode-labeled, and loaded into containers for global export.']
                ] as $step)
                    <li class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
                        <span class="font-asean-display text-3xl font-semibold text-asean-gold/80">{{ $step[0] }}</span>
                        <h3 class="font-asean-display mt-4 text-lg font-semibold text-slate-900">{{ $step[1] }}</h3>
                        <p class="mt-2 text-sm text-slate-600 leading-relaxed font-asean">{{ $step[2] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- Portfolio Teaser --}}
    <section class="border-t border-slate-200 bg-white py-20 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-xs font-bold uppercase tracking-[0.25em] text-asean-gold mb-3">Case Studies</p>
                <h2 class="font-asean-display text-3xl font-semibold text-slate-900">Featured Sourcing Projects</h2>
                <p class="mx-auto mt-4 max-w-2xl text-slate-600 font-asean">
                    An illustrative look at how we execute multi-category production programs for retail chains and hospitality brands.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                @foreach ([
                    [
                        'Scandinavian Rattan Collection', 
                        'Nordic Living Importers', 
                        'Custom outdoor dining sets and lounge chairs sourced and consolidated for a leading retail chain.',
                        'https://images.unsplash.com/photo-1592078615290-033ee584e267?w=600&h=400&fit=crop'
                    ],
                    [
                        'Artisanal Ceramics Rollout', 
                        'Pacific Coast Homeware', 
                        'Direct-factory terracotta pots and glazed kitchenware shipped in consolidated volumes to 45 US store outlets.',
                        'https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c?w=600&h=400&fit=crop'
                    ],
                    [
                        'Boutique Eco-Resort FF&E', 
                        'Villa Alila, Lombok', 
                        'Complete room packs, handmade decor, lighting, and soft goods consolidated under a single export contract.',
                        'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=400&fit=crop'
                    ]
                ] as [$title, $client, $description, $imgUrl])
                    <div class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm flex flex-col">
                        <div class="overflow-hidden aspect-[16/10] bg-slate-100 relative">
                            <img src="{{ $imgUrl }}" alt="{{ $title }}" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6 flex-grow flex flex-col justify-between">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-wider text-asean-gold mb-1">{{ $client }}</p>
                                <h3 class="font-asean-display text-lg font-semibold text-slate-900 leading-snug">{{ $title }}</h3>
                                <p class="mt-2 text-sm text-slate-600 leading-relaxed font-asean">{{ $description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-12 flex flex-wrap justify-center gap-4">
                <a href="{{ route('asean.projects.procurement') }}" class="rounded-full bg-white border border-slate-300 px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-slate-600 transition hover:bg-slate-50 hover:text-slate-950">
                    Procurement SOPs
                </a>
                <a href="{{ route('asean.projects.hospitality') }}" class="rounded-full bg-white border border-slate-300 px-6 py-2.5 text-xs font-bold uppercase tracking-wider text-slate-600 transition hover:bg-slate-50 hover:text-slate-950">
                    Hospitality FF&amp;E Info
                </a>
            </div>
        </div>
    </section>

    {{-- Contact CTA --}}
    <section class="bg-[#001d39] py-20 text-center text-white px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <h2 class="font-asean-display text-3xl font-semibold sm:text-4xl text-asean-gold">Ready to develop your retail collection?</h2>
            <p class="mt-4 text-black">
                Contact our sourcing desk today to discuss custom manufacturing, product designs, or to request specific quotes.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="mailto:projects@aseansourcing.demo" class="gold-gradient inline-block rounded-full px-8 py-4 text-sm font-bold uppercase tracking-wider text-white shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    Contact Sourcing Desk
                </a>
                <a href="{{ route('asean.catalogue') }}" class="inline-block rounded-full border-2 border-black bg-transparent px-8 py-3.5 text-sm font-bold uppercase tracking-wider text-black hover:bg-white/10 hover:border-white transition">
                    Browse Catalogue
                </a>
            </div>
        </div>
    </section>
@endsection
