@extends('layouts.asean')

@section('title', 'Asean Sourcing Assist — Quality Assurance & Supply-Side Support')

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
    
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 29, 57, 0.15);
    }
    
    .stat-number {
        background: linear-gradient(135deg, #985e23, #b8762d);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    /* Improve readability */
    .text-readable {
        color: #1e293b;
    }
    
    .text-readable-light {
        color: #64748b;
    }
</style>
@endpush

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden hero-gradient px-4 py-24 text-black sm:px-6 lg:px-8 lg:py-32">
        <!-- Background Video -->
        <div class="absolute inset-0 -z-20">
            <video class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
                <source src="{{ asset('media/gateway/bgvds.mp4') }}" type="video/mp4">
            </video>
            <!-- Video Overlay for text readability -->
            <div class="absolute inset-0 bg-asean-navy/60"></div>
        </div>
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-10 -z-10">
            <div class="absolute top-0 left-0 h-full w-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzR2LTRoLTR2NGgtNHY0aDR2NGg0di00aDR2LTRoLTR2LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-6">About · Asean Sourcing</p>
                    <h1 class="font-asean-display text-4xl sm:text-5xl lg:text-6xl font-semibold text-white     leading-tight mb-6">
                        End-to-End Quality Assurance & Supply-Side Support
                    </h1>
                    <p class="text-lg text-white/85 leading-relaxed mb-8">
                        Structured quality programs, factory audits, and technical coordination—aligned with how your retail or project team works. We provide on-shore eyes when you cannot be in the factory.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#services" class="border-2 gold-gradient px-8 py-4 rounded-full text-asean-gold font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            Explore Services
                        </a>
                        <a href="#contact" class="border-2 border-asean-gold/30 px-8 py-4 rounded-full text-asean-gold font-semibold hover:bg-white/10 transition-all duration-300">
                            Get Started
                        </a>
                    </div>
                </div>
                <div class="relative hidden lg:block">
                    <div class="bg-asean-gold-soft rounded-2xl p-8 backdrop-blur-sm">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div class="text-4xl font-bold text-asean-navy mb-2">500+</div>
                                <div class="text-sm text-slate-600">Factories Verified</div>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div class="text-4xl font-bold text-asean-navy mb-2">98%</div>
                                <div class="text-sm text-slate-600">Quality Compliance</div>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div class="text-4xl font-bold text-asean-navy mb-2">15+</div>
                                <div class="text-sm text-slate-600">Years Experience</div>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-lg">
                                <div class="text-4xl font-bold text-asean-navy mb-2">24/7</div>
                                <div class="text-sm text-slate-600">Support Available</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Breakdown Section -->
    <section id="services" class="py-20 bg-gray-100 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Our Services</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                    End-to-End Quality Assurance
                </h2>
                <p class="text-lg text-readable-light max-w-3xl mx-auto">
                    We manage quality control, factory audits, and technical coordination as a principal supplier, ensuring consistency, control, and delivery certainty.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 - Quality Programs with Background Video -->
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <!-- Background Video -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds1.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Quality Programs</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Structured three-stage quality control process ensuring production compliance and inspection at every critical stage.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <!-- Service 2 - Factory Audits with Background Video -->
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <!-- Background Video -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds2.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Factory Audits</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Evaluate manufacturing capacities, quality management systems, and environmental practices to ensure suppliers fulfil their obligations.
                        </p>
                        <a href="{{ route('asean.assist.factory') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <!-- Service 3 - Production Management with Background Video -->
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <!-- Background Video -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds3.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Production Management</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            End-to-end coordination across categories and production lines without leaving you to manage suppliers directly.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <!-- Service 4 - Consolidation & Packing with Background Video -->
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <!-- Background Video -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds4.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Consolidation & Packing</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Multi-supplier goods consolidation under one shipment plan, ensuring efficient logistics and cost optimization.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <!-- Background Video -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds5.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Export & Logistics</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Export documentation, shipping coordination, and delivery planning for seamless international logistics.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <!-- Background Video -->
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds6.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Single-Contract Delivery</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            One contract, one supplier, one point of accountability for complete peace of mind and simplified management.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-asean-gold-soft px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Why Clients Choose Us</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                    Our Clients Work With Us Because We Take Ownership
                </h2>
                <p class="text-lg text-readable-light max-w-3xl mx-auto">
                    As a principal supplier, we contract, manage, and deliver quality assurance under one commercial structure, providing clarity on cost, quality, and timelines from day one.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-asean-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Full Accountability</h3>
                    <p class="text-readable-light text-sm">As a principal supplier we own responsibility from order to delivery.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-asean-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Under Single Contract</h3>
                    <p class="text-readable-light text-sm">Our pricing is all-inclusive and structured for commercial clarity.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-asean-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Project-Ready Outputs</h3>
                    <p class="text-readable-light text-sm">We provide finished goods — not sourcing reports or distributor quotes.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-asean-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Scale and Consistency</h3>
                    <p class="text-readable-light text-sm">Multiple categories managed concurrently without quality compromise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4 Steps Section -->
    <section class="py-20 bg-gray-100 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Our Process</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                    4 Easy Steps to Start Your Project
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="relative">
                    <div class="text-6xl font-bold text-asean-gold/20 mb-4">01</div>
                    <h3 class="font-semibold text-readable text-xl mb-3">Scope Alignment</h3>
                    <p class="text-readable-light">Share your project scope, quantities, specifications, and target timelines.</p>
                </div>

                <div class="relative">
                    <div class="text-6xl font-bold text-asean-gold/20 mb-4">02</div>
                    <h3 class="font-semibold text-readable text-xl mb-3">Commercial Offer</h3>
                    <p class="text-readable-light">We issue a single commercial offer covering quality assurance under agreed terms.</p>
                </div>

                <div class="relative">
                    <div class="text-6xl font-bold text-asean-gold/20 mb-4">03</div>
                    <h3 class="font-semibold text-readable text-xl mb-3">Controlled Production</h3>
                    <p class="text-readable-light">Manufacturing is managed with structured quality control throughout the production cycle.</p>
                </div>

                <div class="relative">
                    <div class="text-6xl font-bold text-asean-gold/20 mb-4">04</div>
                    <h3 class="font-semibold text-readable text-xl mb-3">Final Delivery</h3>
                    <p class="text-readable-light">Finished goods are consolidated, inspected, and delivered according to the agreed schedule.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
<section class="py-20 bg-asean-gold-soft px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Our Impact</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-black mb-6">
                    Our Service Is Outcome-Driven
                </h2>
                <p class="text-lg text-black/85 max-w-3xl mx-auto">
                    Our clients engage Asean Sourcing Assist for delivered results—finished products that meet agreed specifications, timelines, and commercial terms.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold stat-number mb-2">90%</div>
                    <div class="text-black font-semibold text-lg">On-Time Delivery</div>
                </div>

                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold stat-number mb-2">98%</div>
                    <div class="text-black font-semibold text-lg">Quality Compliance</div>
                </div>

                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold stat-number mb-2">100%</div>
                    <div class="text-black font-semibold text-lg">Single Contract Execution</div>
                </div>

                <div class="text-center">
                    <div class="text-5xl md:text-6xl font-bold stat-number mb-2">79%</div>
                    <div class="text-black font-semibold text-lg">Repeat Projects</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-20 bg-white px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Our Portfolio</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                    Completed Projects
                </h2>
                <p class="text-lg text-readable-light max-w-3xl mx-auto">
                    Explore our successful quality assurance projects across various industries and regions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-[4/3] bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=450&fit=crop" alt="Hotel Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-asean-navy/90 via-asean-navy/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <p class="text-sm text-asean-gold font-semibold mb-2">Hospitality</p>
                        <h3 class="font-asean-display text-xl font-semibold mb-2">Luxury Resort Quality Assurance</h3>
                        <p class="text-sm text-white/80">Complete QC program for 5-star resort in Bali</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-[4/3] bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=450&fit=crop" alt="Furniture Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-asean-navy/90 via-asean-navy/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <p class="text-sm text-asean-gold font-semibold mb-2">Furniture</p>
                        <h3 class="font-asean-display text-xl font-semibold mb-2">Wholesale Furniture QC</h3>
                        <p class="text-sm text-white/80">Quality control for European furniture retailer</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                    <div class="aspect-[4/3] bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=600&h=450&fit=crop" alt="Decor Project" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-asean-navy/90 via-asean-navy/50 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <p class="text-sm text-asean-gold font-semibold mb-2">Home Decor</p>
                        <h3 class="font-asean-display text-xl font-semibold mb-2">Decor Accessories Audit</h3>
                        <p class="text-sm text-white/80">Factory audits for home decor manufacturer</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('asean.projects') }}" class="inline-flex items-center text-asean-gold font-semibold hover:underline">
                    View All Projects
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Recent Articles Section -->
    <section class="py-20 bg-asean-gold-soft px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="text-center mb-16">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Insights</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                    Recent Articles
                </h2>
                <p class="text-lg text-readable-light max-w-3xl mx-auto">
                    Stay updated with the latest trends, insights, and best practices in quality assurance and supply chain management.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-[16/9] bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=600&h=400&fit=crop" alt="Quality Control" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold text-asean-gold uppercase tracking-wider">Quality Assurance</span>
                            <span class="text-xs text-slate-400">•</span>
                            <span class="text-xs text-slate-500">June 5, 2026</span>
                        </div>
                        <h3 class="font-asean-display text-xl font-semibold text-readable mb-3">
                            Luxury Hospitality Trends: Why Strategic Procurement and Sustainable Sourcing Matter More Than Ever
                        </h3>
                        <p class="text-readable-light text-sm leading-relaxed mb-4">
                            Sustainable sourcing is becoming a core hospitality strategy. The luxury hospitality industry is evolving...
                        </p>
                        <a href="#" class="text-asean-gold font-semibold text-sm hover:underline">Read more →</a>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-[16/9] bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=400&fit=crop" alt="FF&E Intelligence" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold text-asean-gold uppercase tracking-wider">FF&E Market</span>
                            <span class="text-xs text-slate-400">•</span>
                            <span class="text-xs text-slate-500">January 7, 2026</span>
                        </div>
                        <h3 class="font-asean-display text-xl font-semibold text-readable mb-3">
                            FF&E Market Intelligence: Hospitality Procurement & Design Strategy
                        </h3>
                        <p class="text-readable-light text-sm leading-relaxed mb-4">
                            The size and growth of hospitality FF&E procurement market continues to expand with new opportunities...
                        </p>
                        <a href="#" class="text-asean-gold font-semibold text-sm hover:underline">Read more →</a>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-[16/9] bg-slate-200">
                        <img src="https://images.unsplash.com/photo-1565636188898-e321b0cda36c?w=600&h=400&fit=crop" alt="Rattan Decor" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xs font-semibold text-asean-gold uppercase tracking-wider">Decoration</span>
                            <span class="text-xs text-slate-400">•</span>
                            <span class="text-xs text-slate-500">April 14, 2022</span>
                        </div>
                        <h3 class="font-asean-display text-xl font-semibold text-readable mb-3">
                            5 Ideas to Decorate Your Spaces With Rattan
                        </h3>
                        <p class="text-readable-light text-sm leading-relaxed mb-4">
                            Rattan is one of the on-trend furniture and décor materials for indoor living. Derived from vine-like...
                        </p>
                        <a href="#" class="text-asean-gold font-semibold text-sm hover:underline">Read more →</a>
                    </div>
                </article>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('asean.assist.articles') }}" class="inline-flex items-center text-asean-gold font-semibold hover:underline">
                    View All Articles
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-20 bg-white px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                Ready to Partner With Us?
            </h2>
            <p class="text-lg text-readable-light mb-8">
                Let's discuss how our quality assurance programs can strengthen your supply chain and protect your brand.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('asean.assist.quality') }}" class="border-2 gold-gradient px-8 py-4 rounded-full text-asean-gold font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    Explore Quality Programs
                </a>
                <a href="/contact" class="border-2 border-asean-gold px-8 py-4 rounded-full text-asean-gold font-semibold hover:bg-asean-gold hover:text-white transition-all duration-300">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>
@endsection
