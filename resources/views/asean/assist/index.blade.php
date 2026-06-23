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
    
    .text-readable { color: #1e293b; }
    .text-readable-light { color: #64748b; }

    /* ==========================================
       MODERN TEAM CARD ANIMATION 
       ========================================== */
    .team-section {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .team-section.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .department-header {
        opacity: 0;
        transform: translateX(-30px);
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .department-header.visible {
        opacity: 1;
        transform: translateX(0);
    }

    /* Base Card (Before Scroll) */
    .team-card {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s cubic-bezier(0.25, 0.8, 0.25, 1),
                    transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1),
                    box-shadow 0.4s ease, 
                    border-color 0.4s ease;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        /* GPU Acceleration untuk hover yang lebih smooth */
        will-change: transform, opacity, box-shadow; 
    }
    
    /* Active Card (After Scroll) */
    .team-card.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Smooth Hover Effect (Only applied AFTER it's visible) */
    .team-card.visible:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px -12px rgba(0, 29, 57, 0.15), 0 10px 25px -5px rgba(152, 94, 35, 0.2);
        border-color: rgba(152, 94, 35, 0.5);
    }

    /* Inner Card Elements Animation */
    .profile-image {
        transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    .profile-ring {
        transition: all 0.5s ease;
    }
    .team-card h4 {
        transition: all 0.3s ease;
    }
    
    .team-card.visible:hover .profile-image {
        transform: scale(1.08) rotate(3deg);
    }
    .team-card.visible:hover .profile-ring {
        transform: scale(1.15);
        opacity: 0.8;
        filter: blur(12px);
    }
    .team-card.visible:hover h4 {
        color: #985e23;
        transform: translateY(-2px);
    }

    @keyframes pulse-ring {
        0% { box-shadow: 0 0 0 0 rgba(152, 94, 35, 0.4); }
        70% { box-shadow: 0 0 0 15px rgba(152, 94, 35, 0); }
        100% { box-shadow: 0 0 0 0 rgba(152, 94, 35, 0); }
    }
    .team-card.visible:hover .profile-ring {
        animation: pulse-ring 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
</style>
@endpush

@section('content')
    <section class="relative overflow-hidden hero-gradient px-4 py-24 text-black sm:px-6 lg:px-8 lg:py-32">
        <div class="absolute inset-0 -z-20">
            <video class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
                <source src="{{ asset('media/gateway/bgvds.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-asean-navy/60"></div>
        </div>
        <div class="absolute inset-0 opacity-10 -z-10">
            <div class="absolute top-0 left-0 h-full w-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzR2LTRoLTR2NGgtNHY0aDR2NGg0di00aDR2LTRoLTR2LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
        </div>
        <div class="relative mx-auto max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-6">About · Asean Sourcing</p>
                    <h1 class="font-asean-display text-4xl sm:text-5xl lg:text-6xl font-semibold text-white leading-tight mb-6">
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
                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds1.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds2.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Factory Audits</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Evaluate manufacturing capacities, quality management systems, and environmental practices to ensure suppliers fulfil their obligations.
                        </p>
                        <a href="{{ route('asean.assist.factory') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds3.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Production Management</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            End-to-end coordination across categories and production lines without leaving you to manage suppliers directly.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds4.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Consolidation & Packing</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Multi-supplier goods consolidation under one shipment plan, ensuring efficient logistics and cost optimization.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds5.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Export & Logistics</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            Export documentation, shipping coordination, and delivery planning for seamless international logistics.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>

                <div class="service-card relative bg-white border border-slate-200 rounded-2xl p-8 transition-all duration-300 hover:border-asean-gold overflow-hidden">
                    <div class="absolute inset-0 rounded-2xl overflow-hidden -z-10">
                        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="metadata">
                            <source src="{{ asset('media/gateway/vds6.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-white/85"></div>
                    </div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 gold-gradient rounded-xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="font-asean-display text-2xl font-semibold text-readable mb-4">Single-Contract Delivery</h3>
                        <p class="text-readable-light leading-relaxed mb-6">
                            One contract, one supplier, one point of accountability for complete peace of mind and simplified management.
                        </p>
                        <a href="{{ route('asean.assist.quality') }}" class="text-asean-gold font-semibold hover:underline">Learn more →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Full Accountability</h3>
                    <p class="text-readable-light text-sm">As a principal supplier we own responsibility from order to delivery.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Under Single Contract</h3>
                    <p class="text-readable-light text-sm">Our pricing is all-inclusive and structured for commercial clarity.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Project-Ready Outputs</h3>
                    <p class="text-readable-light text-sm">We provide finished goods — not sourcing reports or distributor quotes.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 gold-gradient rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-readable text-lg mb-2">Scale and Consistency</h3>
                    <p class="text-readable-light text-sm">Multiple categories managed concurrently without quality compromise.</p>
                </div>
            </div>
        </div>
    </section>

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

    <section class="py-24 bg-gradient-to-b from-gray-50 to-white px-4 sm:px-6 lg:px-8 overflow-hidden">
        <div class="mx-auto max-w-7xl">
            <div class="team-section text-center mb-20">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">Our Team</p>
                <h2 class="font-asean-display text-4xl sm:text-5xl lg:text-6xl font-semibold text-readable mb-6">
                    Meet Our Team
                </h2>
                <p class="text-lg text-readable-light max-w-3xl mx-auto leading-relaxed">
                    Our dedicated professionals bring expertise across all aspects of procurement, quality assurance, and operational excellence.
                </p>
            </div>

            <div class="mb-24">
                <div class="department-header mb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-px flex-1 bg-gradient-to-r from-transparent to-asean-gold/30"></div>
                        <h3 class="font-asean-display text-2xl lg:text-3xl font-semibold text-asean-navy">Founder & CEO</h3>
                        <div class="h-px flex-1 bg-gradient-to-l from-transparent to-asean-gold/30"></div>
                    </div>
                    <p class="text-readable-light text-center max-w-4xl mx-auto leading-relaxed">
                        Emeric Beyeler is the Founder & CEO of Asean Sourcing, a Southeast Asia-based procurement company supplying FF&E and OS&E globally. Based in Indonesia, the French native specializes in building accountable supply chains and bridging European quality standards with Asian manufacturing execution.
                    </p>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('emeric')" style="transition-delay: 0ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-asean-gold to-amber-600 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/emeric.png') }}" alt="Emeric Beyeler" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Emeric Beyeler</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Founder & CEO</p>
                    </div>
                </div>
            </div>

            <div class="mb-24">
                <div class="department-header mb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-px flex-1 bg-gradient-to-r from-transparent to-asean-gold/30"></div>
                        <h3 class="font-asean-display text-2xl lg:text-3xl font-semibold text-asean-navy">Business Development</h3>
                        <div class="h-px flex-1 bg-gradient-to-l from-transparent to-asean-gold/30"></div>
                    </div>
                    <p class="text-readable-light text-center max-w-4xl mx-auto leading-relaxed">
                        Integrating marketing, sales, and merchandising, the Business Development team manages client acquisition, project development, and product alignment to support scalable growth.
                    </p>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('citra')" style="transition-delay: 0ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-blue-500 to-blue-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/citra.png') }}" alt="Citra" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Citra</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Business Development</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('milen')" style="transition-delay: 100ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-purple-500 to-purple-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/milen.png') }}" alt="Milen" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Milen</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Business Development</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('dimas')" style="transition-delay: 200ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-green-500 to-green-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/dimas.JPG') }}" alt="Dimas" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Dimas</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Business Development</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('tya')" style="transition-delay: 300ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-pink-500 to-pink-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/tya.JPG') }}" alt="Tya" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Tya</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Business Development</p>
                    </div>
                </div>
            </div>

            <div class="mb-24">
                <div class="department-header mb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-px flex-1 bg-gradient-to-r from-transparent to-asean-gold/30"></div>
                        <h3 class="font-asean-display text-2xl lg:text-3xl font-semibold text-asean-navy">HRGA, Accounting & IT</h3>
                        <div class="h-px flex-1 bg-gradient-to-l from-transparent to-asean-gold/30"></div>
                    </div>
                    <p class="text-readable-light text-center max-w-4xl mx-auto leading-relaxed">
                        This department oversees finance, human resources, and internal IT systems, ensuring compliance, operational efficiency, and stable business support.
                    </p>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('nadya')" style="transition-delay: 0ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-indigo-500 to-indigo-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/nadya.JPG') }}" alt="Nadya" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Nadya</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">HRGA, Accounting & IT</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('valen')" style="transition-delay: 100ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-teal-500 to-teal-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/valen.JPG') }}" alt="Valen" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Valen</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">HRGA, Accounting & IT</p>
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="department-header mb-8">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="h-px flex-1 bg-gradient-to-r from-transparent to-asean-gold/30"></div>
                        <h3 class="font-asean-display text-2xl lg:text-3xl font-semibold text-asean-navy">Operations</h3>
                        <div class="h-px flex-1 bg-gradient-to-l from-transparent to-asean-gold/30"></div>
                    </div>
                    <p class="text-readable-light text-center max-w-4xl mx-auto leading-relaxed">
                        The Operations Department ensures that every project moves from confirmation to delivery with control and discipline.
                    </p>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('irul')" style="transition-delay: 0ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-orange-500 to-orange-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/irul.png') }}" alt="Irul" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Irul</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('jody')" style="transition-delay: 100ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-red-500 to-red-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/dino.png') }}" alt="Jody" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Jody</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('agus')" style="transition-delay: 200ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-cyan-500 to-cyan-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/agus.jpeg') }}" alt="Agus" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Agus</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('antok')" style="transition-delay: 300ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-lime-500 to-lime-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/antok.jpeg') }}" alt="Antok" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Antok</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('novan')" style="transition-delay: 400ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-rose-500 to-rose-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/novan.JPG') }}" alt="Novan" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Novan</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('onyie')" style="transition-delay: 500ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-violet-500 to-violet-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/Onyie.png') }}" alt="Onyie" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Onyie</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('isti')" style="transition-delay: 600ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-amber-500 to-amber-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/isti.jpeg') }}" alt="Isti" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Isti</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                    <div class="team-card w-full sm:w-[280px] bg-white border border-slate-200 rounded-3xl p-6 cursor-pointer" onclick="openModal('etha')" style="transition-delay: 700ms;">
                        <div class="relative mb-5">
                            <div class="profile-ring absolute inset-0 rounded-full bg-gradient-to-br from-emerald-500 to-emerald-700 blur-lg opacity-30"></div>
                            <div class="profile-image relative w-28 h-28 mx-auto rounded-full overflow-hidden shadow-xl">
                                <img src="{{ asset('media/gateway/Etha.JPG') }}" alt="Etha" class="w-full h-full object-cover">
                            </div>
                        </div>
                        <h4 class="font-semibold text-readable text-lg text-center mb-2">Etha</h4>
                        <p class="text-asean-gold text-xs text-center font-semibold uppercase tracking-wider">Operations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="teamModal" class="fixed inset-0 z-[100] hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div class="absolute inset-0 bg-slate-900/75 backdrop-blur-sm" onclick="closeModal()"></div>
        
        <div id="modalInner" class="bg-white rounded-3xl shadow-2xl max-w-lg w-full p-10 relative z-10 transform scale-95 translate-y-8 opacity-0 transition-all duration-500 ease-out">
            <button onclick="closeModal()" class="absolute top-5 right-5 text-slate-400 hover:text-slate-600 transition-colors z-10 focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <div id="modalContent"></div>
        </div>
    </div>

    <section id="contact" class="py-20 bg-asean-gold-soft px-4 sm:px-6 lg:px-8">
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

    <script>
        // Intersection Observer for scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observerInstance) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        
                        // FIX HOVER DELAY LAG: Hapus inline transition-delay setelah animasi masuk selesai
                        if (entry.target.classList.contains('team-card')) {
                            // Ambil delay dari elemen untuk menentukan kapan animasi selesai
                            const delay = parseFloat(entry.target.style.transitionDelay) || 0;
                            setTimeout(() => {
                                entry.target.style.transitionDelay = '0ms';
                            }, delay + 600); // 600ms adalah durasi transition di CSS
                        }

                        // Berhenti me-ngamati elemen ini agar animasi tidak mengulang
                        observerInstance.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const teamSection = document.querySelector('.team-section');
            if (teamSection) observer.observe(teamSection);

            const departmentHeaders = document.querySelectorAll('.department-header');
            departmentHeaders.forEach(header => observer.observe(header));

            const teamCards = document.querySelectorAll('.team-card');
            teamCards.forEach(card => observer.observe(card));
        });

        const teamMembers = {
            emeric: {
                name: 'Emeric Beyeler',
                role: 'Founder & CEO',
                department: 'Founder & CEO',
                bio: 'Emeric Beyeler is the Founder & CEO of Asean Sourcing, a Southeast Asia–based procurement and trading company supplying finished FF&E and OS&E for hospitality, residential, and commercial projects worldwide. With a background in international export, sourcing, and commercial leadership, Emeric specializes in building accountable supply chains, managing production risk, and delivering under a single commercial contract. French by origin and based in Indonesia, he bridges European standards with Asian manufacturing execution.',
                color: 'from-asean-gold to-amber-600',
                image: '{{ asset("media/gateway/emeric.png") }}'
            },
            citra: {
                name: 'Citra',
                role: 'Business Development Manager',
                department: 'Business Development',
                bio: 'Citra is a key member of the Business Development team, specializing in client acquisition and relationship management. With expertise in marketing and sales integration, Citra helps drive scalable growth for Asean Sourcing by identifying new opportunities and building lasting partnerships with clients across the hospitality and commercial sectors.',
                color: 'from-blue-500 to-blue-700',
                image: '{{ asset("media/gateway/citra.png") }}'
            },
            milen: {
                name: 'Milen',
                role: 'Business Development Content Creator',
                department: 'Business Development',
                bio: 'Milen brings strong commercial acumen to the Business Development team, focusing on project development and product alignment. With a keen understanding of market trends and client needs, Milen ensures that Asean Sourcing delivers tailored solutions that meet the specific requirements of each project.',
                color: 'from-purple-500 to-purple-700',
                image: '{{ asset("media/gateway/milen.png") }}'
            },
            dimas: {
                name: 'Dimas',
                role: 'Business Development Admin',
                department: 'Business Development',
                bio: 'Dimas specializes in merchandising and sales strategy within the Business Development team. His expertise in product positioning and market analysis helps Asean Sourcing maintain competitive advantage while delivering exceptional value to clients in the procurement and sourcing space.',
                color: 'from-green-500 to-green-700',
                image: '{{ asset("media/gateway/dimas.JPG") }}'
            },
            tya: {
                name: 'Tya',
                role: 'Business Development Admin',
                department: 'Business Development',
                bio: 'Tya is a dynamic member of the Business Development team, focusing on client engagement and project coordination. With excellent communication skills and a deep understanding of the hospitality industry, Tya ensures smooth collaboration between clients and the Asean Sourcing team.',
                color: 'from-pink-500 to-pink-700',
                image: '{{ asset("media/gateway/tya.JPG") }}'
            },
            nadya: {
                name: 'Nadya',
                role: 'HRGA, Accounting & IT',
                department: 'HRGA',
                bio: 'Nadya oversees human resources and financial operations at Asean Sourcing. With expertise in HR management and accounting, she ensures compliance, operational efficiency, and stable business support across all departments. Her attention to detail helps maintain the company\'s strong organizational foundation.',
                color: 'from-indigo-500 to-indigo-700',
                image: '{{ asset("media/gateway/nadya.JPG") }}'
            },
            valen: {
                name: 'Valen',
                role: 'ERP & IT Specialist',
                department: 'HRGA, Accounting & IT',
                bio: 'Valen manages internal IT systems and supports financial operations within the HRGA, Accounting & IT department. His technical expertise ensures that Asean Sourcing maintains robust digital infrastructure and efficient processes to support the company\'s growing operations.',
                color: 'from-teal-500 to-teal-700',
                image: '{{ asset("media/gateway/valen.JPG") }}'
            },
            irul: {
                name: 'Irul',
                role: 'Operations Manager',
                department: 'Operations',
                bio: 'Irul is a seasoned operations professional who ensures projects move smoothly from confirmation to delivery. With extensive experience in logistics and supply chain management, Irul maintains control and discipline throughout the production and delivery process.',
                color: 'from-orange-500 to-orange-700',
                image: '{{ asset("media/gateway/irul.png") }}'
            },
            jody: {
                name: 'Jody',
                role: 'Operations PPIC',
                department: 'Operations',
                bio: 'Jody specializes in production coordination and quality control within the Operations Department. His hands-on approach ensures that every project meets the highest standards while adhering to strict timelines and delivery schedules.',
                color: 'from-red-500 to-red-700',
                image: '{{ asset("media/gateway/dino.png") }}'
            },
            agus: {
                name: 'Agus',
                role: 'Operations QC',
                department: 'Operations',
                bio: 'Agus brings operational excellence to the team, focusing on factory coordination and production monitoring. His expertise in managing supplier relationships ensures that Asean Sourcing maintains consistent quality across all manufacturing partners.',
                color: 'from-cyan-500 to-cyan-700',
                image: '{{ asset("media/gateway/agus.jpeg") }}'
            },
            antok: {
                name: 'Antok',
                role: 'Operations QC',
                department: 'Operations',
                bio: 'Antok is responsible for logistics coordination and shipment planning within the Operations Department. His meticulous attention to detail ensures that goods are consolidated, inspected, and delivered according to agreed schedules and specifications.',
                color: 'from-lime-500 to-lime-700',
                image: '{{ asset("media/gateway/antok.jpeg") }}'
            },
            novan: {
                name: 'Novan',
                role: 'Operations Supervisor',
                department: 'Operations',
                bio: 'Novan supports the Operations team with project tracking and documentation management. His organizational skills help maintain clear communication between all stakeholders and ensure that project milestones are met efficiently.',
                color: 'from-rose-500 to-rose-700',
                image: '{{ asset("media/gateway/novan.JPG") }}'
            },
            onyie: {
                name: 'Onyie',
                role: 'Operations Admin Leader',
                department: 'Operations',
                bio: 'Onyie focuses on quality assurance and inspection coordination within the Operations Department. With a keen eye for detail, Onyie ensures that all products meet the rigorous quality standards that Asean Sourcing is known for.',
                color: 'from-violet-500 to-violet-700',
                image: '{{ asset("media/gateway/Onyie.png") }}'
            },
            isti: {
                name: 'Isti',
                role: 'Operations Admin',
                department: 'Operations',
                bio: 'Isti manages supplier communications and production follow-ups in the Operations Department. Her proactive approach helps identify and resolve potential issues before they impact project timelines or quality.',
                color: 'from-amber-500 to-amber-700',
                image: '{{ asset("media/gateway/isti.jpeg") }}'
            },
            etha: {
                name: 'Etha',
                role: 'Operations Admin',
                department: 'Operations',
                bio: 'Etha supports the Operations team with administrative coordination and process improvement. Her efficiency-focused mindset helps streamline operations and ensure that the department maintains high productivity levels.',
                color: 'from-emerald-500 to-emerald-700',
                image: '{{ asset("media/gateway/Etha.JPG") }}'
            }
        };

        function openModal(memberId) {
            const member = teamMembers[memberId];
            if (!member) return;

            const modalContent = document.getElementById('modalContent');
            
            modalContent.innerHTML = `
                <div class="flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <div class="absolute inset-0 rounded-full bg-gradient-to-br ${member.color} blur-xl opacity-30"></div>
                        <div class="relative w-32 h-32 rounded-full overflow-hidden shadow-2xl">
                            <img src="${member.image}" alt="${member.name}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <h3 class="font-asean-display text-2xl font-semibold text-asean-navy mb-2">${member.name}</h3>
                    <p class="text-asean-gold font-semibold mb-4 text-lg">${member.role}</p>
                    <div class="bg-asean-gold-soft px-6 py-3 rounded-full mb-6">
                        <span class="text-sm font-semibold text-asean-gold uppercase tracking-wider">${member.department}</span>
                    </div>
                    <p class="text-readable-light leading-relaxed text-base">${member.bio}</p>
                </div>
            `;

            const modal = document.getElementById('teamModal');
            const inner = document.getElementById('modalInner');

            // 1. Munculkan elemen secara fisik (display: flex) tapi masih transparan (opacity: 0)
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';

            // 2. Trigger Reflow DOM secara paksa agar browser siap menganimasi
            void modal.offsetWidth;

            // 3. Tambahkan class visible (transisi CSS bekerja di sini)
            modal.classList.remove('opacity-0');
            modal.classList.add('opacity-100');
            
            inner.classList.remove('scale-95', 'translate-y-8', 'opacity-0');
            inner.classList.add('scale-100', 'translate-y-0', 'opacity-100');
        }

        function closeModal() {
            const modal = document.getElementById('teamModal');
            const inner = document.getElementById('modalInner');

            // 1. Hilangkan class visible untuk memulai animasi penutupan
            modal.classList.remove('opacity-100');
            modal.classList.add('opacity-0');
            
            inner.classList.remove('scale-100', 'translate-y-0', 'opacity-100');
            inner.classList.add('scale-95', 'translate-y-8', 'opacity-0');

            // 2. Tunggu animasi CSS selesai (300ms sesuai class Tailwind), lalu sembunyikan sepenuhnya
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            }, 300);
        }

        // Tutup modal jika tombol Escape ditekan
        document.addEventListener('keydown', function(e) {
            const modal = document.getElementById('teamModal');
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    </script>
@endsection