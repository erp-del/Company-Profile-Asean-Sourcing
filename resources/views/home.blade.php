@extends('layouts.app')

@section('content')
{{-- Hero --}}
<section id="hero" class="hero relative min-h-[85vh] overflow-hidden">
    <div class="hero-slider absolute inset-0">
        <div class="hero-slide active bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1589939705384-5185137a7f0f?w=1920&q=80');"></div>
        <div class="hero-slide bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1920&q=80');"></div>
        <div class="hero-slide bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1920&q=80');"></div>
    </div>
    <div class="hero-slide-overlay absolute inset-0 bg-gradient-to-t from-bg-dark via-navy/90 to-navy-dark/50"></div>
    <div class="absolute inset-0 mesh-hero opacity-95"></div>

    <div class="relative z-10 mx-auto flex min-h-[85vh] max-w-7xl flex-col justify-center px-4 pb-20 pt-10 sm:px-6 lg:px-8">
        <h1 class="font-display max-w-4xl text-4xl font-semibold leading-tight tracking-tight text-white sm:text-5xl lg:text-6xl">
            Welcome to <span class="text-gradient">Excellencial</span>
        </h1>
        <p class="mt-8 max-w-3xl text-lg font-medium leading-relaxed text-slate-200 sm:text-xl">
            We are the only <strong class="text-white">Western managed, Indonesia based</strong>, third party Quality Management company exclusively operating in Indonesia and focused on <strong class="text-white">consumer goods and retail</strong>.
        </p>
        <p class="mt-6 max-w-3xl text-base leading-relaxed text-slate-400 lg:text-lg">
            With our strong local expertise dedicated to independent inspection, audit and certification services, we are the trusted specialists in quality solutions in Indonesia for many of the world’s leading brands and companies.
        </p>
        <div class="cta-buttons mt-10 flex flex-wrap gap-4">
            <a href="#about" class="inline-flex items-center justify-center rounded border-2 border-brand bg-brand px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-white shadow-lg shadow-brand/20 transition hover:border-brand-hover hover:bg-brand-hover">Read more</a>
            <a href="#contact" class="inline-flex items-center justify-center rounded border-2 border-highlight bg-transparent px-8 py-3.5 text-sm font-bold uppercase tracking-wide text-highlight transition hover:bg-highlight hover:text-navy-dark">Book now</a>
        </div>
        <div class="slider-controls mt-14 flex gap-2">
            <span class="slider-dot active h-2 cursor-pointer rounded-full transition-all" data-slide="0" role="button" tabindex="0" aria-label="Slide 1"></span>
            <span class="slider-dot h-2 cursor-pointer rounded-full transition-all" data-slide="1" role="button" tabindex="0" aria-label="Slide 2"></span>
            <span class="slider-dot h-2 cursor-pointer rounded-full transition-all" data-slide="2" role="button" tabindex="0" aria-label="Slide 3"></span>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="border-y border-white/10 bg-navy/40">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 py-10 sm:grid-cols-2 lg:grid-cols-4 sm:px-6 lg:px-8">
        <div class="stat text-center lg:text-left">
            <h3 class="font-display text-4xl font-semibold text-white">15<span class="text-highlight">+</span></h3>
            <p class="mt-1 text-sm text-slate-400">Years supporting brands in Indonesia</p>
        </div>
        <div class="stat text-center lg:text-left">
            <h3 class="font-display text-4xl font-semibold text-white">100<span class="text-highlight">%</span></h3>
            <p class="mt-1 text-sm text-slate-400">Indonesia-only operations &amp; coverage</p>
        </div>
        <div class="stat text-center lg:text-left">
            <h3 class="font-display text-4xl font-semibold text-white">3rd</h3>
            <p class="mt-1 text-sm text-slate-400">Party independence—your specification, our report</p>
        </div>
        <div class="stat text-center lg:text-left">
            <h3 class="font-display text-4xl font-semibold text-white">QC</h3>
            <p class="mt-1 text-sm text-slate-400">Inspections, audits &amp; certification support</p>
        </div>
    </div>
</section>

{{-- About / Why Excellencial --}}
<section id="about" class="relative scroll-mt-24">
    <div class="absolute inset-0 grid-pattern opacity-30"></div>
    <div class="relative mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid items-center gap-14 lg:grid-cols-2">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-highlight">Why Excellencial?</p>
                <h2 class="font-display mt-3 text-3xl font-semibold text-white sm:text-4xl">Western-managed rigour, Indonesian execution</h2>
                <p class="mt-6 text-lg leading-relaxed text-slate-400">
                    We combine international reporting standards with deep factory knowledge across Java, Bali, and beyond. Whether you need pre-production clarity, inline control, or pre-shipment release—our teams work on site at your suppliers’ facilities.
                </p>
                <ul class="mt-8 space-y-4 text-slate-300">
                    <li class="flex gap-3"><span class="mt-1 text-highlight">✓</span> Independent inspectors and auditors—no factory affiliation</li>
                    <li class="flex gap-3"><span class="mt-1 text-highlight">✓</span> Structured programs: inspections, factory audits, corrective follow-up</li>
                    <li class="flex gap-3"><span class="mt-1 text-highlight">✓</span> Focus sectors: furniture, home décor, and wider consumer goods</li>
                </ul>
            </div>
            <div class="interactive-card glass relative aspect-[4/3] overflow-hidden rounded-2xl border-white/10">
                <div class="absolute inset-0 bg-cover bg-center transition duration-700 ease-out hover:scale-105" style="background-image: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=1200&q=80');"></div>
                <div class="absolute inset-0 bg-gradient-to-tr from-navy-dark/90 via-navy/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-sm font-medium text-white">Inspections · Audits · Certification support</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Audits & Inspections pillars (matches live site) --}}
<section id="services" class="scroll-mt-24 border-t border-white/10 bg-navy-dark/30">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <div class="grid gap-8 lg:grid-cols-2">
            <article class="interactive-card glass flex flex-col rounded-2xl border-white/10 p-8 lg:p-10">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-gold">Audits</p>
                <h2 class="font-display mt-4 text-2xl font-semibold text-white sm:text-3xl">Factory &amp; compliance audits</h2>
                <p class="mt-4 flex-1 text-slate-400">
                    Our independent auditors in Indonesia visit your supplier’s facilities to evaluate manufacturing capacities, systems, and social compliance—so you can qualify partners with evidence, not assumptions.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#audits-list" class="inline-flex rounded border border-brand bg-brand px-5 py-2.5 text-xs font-bold uppercase tracking-wide text-white transition hover:bg-brand-hover">Read more</a>
                    <a href="#contact" class="inline-flex rounded border-2 border-highlight px-5 py-2.5 text-xs font-bold uppercase tracking-wide text-highlight transition hover:bg-highlight hover:text-navy-dark">Book now</a>
                </div>
            </article>
            <article class="interactive-card glass flex flex-col rounded-2xl border-white/10 p-8 lg:p-10">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-gold">Inspections</p>
                <h2 class="font-display mt-4 text-2xl font-semibold text-white sm:text-3xl">On-site production inspections</h2>
                <p class="mt-4 flex-1 text-slate-400">
                    Our third-party inspectors carry out inspections on site at different stages of the production process—from materials to loading—aligned with your AQL and specification.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#inspections-list" class="inline-flex rounded border border-brand bg-brand px-5 py-2.5 text-xs font-bold uppercase tracking-wide text-white transition hover:bg-brand-hover">Read more</a>
                    <a href="#contact" class="inline-flex rounded border-2 border-highlight px-5 py-2.5 text-xs font-bold uppercase tracking-wide text-highlight transition hover:bg-highlight hover:text-navy-dark">Book now</a>
                </div>
            </article>
        </div>

        <div class="mt-16 grid gap-10 lg:grid-cols-2">
            <div id="inspections-list">
                <h3 class="font-display text-xl font-semibold text-white">Inspection services</h3>
                <p class="mt-2 text-sm text-slate-500">Tap to expand — same structure as excellencial.com</p>
                <div class="mt-6 space-y-2">
                    @foreach ([
                        ['Pre-production Inspection', 'Validate materials, workmanship intent, and readiness before bulk.'],
                        ['Initial Production Inspection', 'First-run verification against your approved sample and spec.'],
                        ['During Production Inspection', 'Inline checks while the line is running to catch drift early.'],
                        ['Pre-shipment Inspection', 'Statistical sampling and functional checks prior to release.'],
                        ['Container Loading Supervision', 'Witness loading, carton counts, and condition at dispatch.'],
                        ['Production Monitoring', 'Resident or periodic oversight for critical programs.'],
                        ['Defective Product Sorting', 'On-site segregation and rework supervision when needed.'],
                    ] as $row)
                        <details class="acc group rounded-xl border border-white/10 bg-navy/30 open:border-highlight/40 open:bg-navy/50">
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-4 py-4 text-left text-sm font-semibold text-white transition hover:text-highlight">
                                {{ $row[0] }}
                                <span class="acc-icon text-highlight transition-transform">▼</span>
                            </summary>
                            <div class="border-t border-white/5 px-4 pb-4 pt-0 text-sm text-slate-400">
                                {{ $row[1] }}
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
            <div id="audits-list">
                <h3 class="font-display text-xl font-semibold text-white">Audit programs</h3>
                <p class="mt-2 text-sm text-slate-500">Structured assessments and follow-up</p>
                <div class="mt-6 space-y-2">
                    @foreach ([
                        ['Simple Factory Audit', 'Focused capability snapshot for new or smaller suppliers.'],
                        ['Extensive Factory Audit', 'Deep dive across quality systems, capacity, and documentation.'],
                        ['Social Audit', 'Ethical and workplace criteria aligned to your checklist.'],
                        ['Corrective Action Audit', 'Verify closure of prior findings with evidence.'],
                        ['Follow Up Audit', 'Scheduled re-checks to sustain performance.'],
                    ] as $row)
                        <details class="acc group rounded-xl border border-white/10 bg-navy/30 open:border-highlight/40 open:bg-navy/50">
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-4 py-4 text-left text-sm font-semibold text-white transition hover:text-highlight">
                                {{ $row[0] }}
                                <span class="acc-icon text-highlight transition-transform">▼</span>
                            </summary>
                            <div class="border-t border-white/5 px-4 pb-4 pt-0 text-sm text-slate-400">
                                {{ $row[1] }}
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-14 border-t border-white/10 pt-12">
            <p class="text-xs font-semibold uppercase tracking-widest text-highlight">Also explore</p>
            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Raw material assessment', '/services/raw-material-assessment'],
                    ['In-process quality control', '/services/in-process-quality-control'],
                    ['Final product verification', '/services/final-product-verification'],
                    ['Shipping integrity checks', '/services/shipping-integrity-checks'],
                    ['Analytics & insights', '/services/analytics-insights'],
                    ['Compliance & certification', '/services/compliance-certification'],
                ] as $link)
                    <a href="{{ $link[1] }}" class="interactive-card group flex items-center justify-between rounded-xl border border-white/10 bg-navy/20 px-4 py-3 text-sm font-medium text-slate-300 hover:text-white">
                        {{ $link[0] }}
                        <span class="text-highlight transition group-hover:translate-x-0.5">→</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Industries --}}
<section id="industries" class="scroll-mt-24 border-t border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
        <h2 class="font-display text-center text-3xl font-semibold text-white sm:text-4xl">Covered industry</h2>
        <p class="section-subtitle mx-auto mt-4 max-w-2xl text-center text-lg text-slate-400">Specialist quality programs for furniture and home décor—extendable to wider consumer goods.</p>
        <div class="mt-14 grid gap-8 md:grid-cols-2">
            <a href="#contact" class="interactive-card group relative overflow-hidden rounded-2xl border border-white/10">
                <div class="h-56 bg-cover bg-center transition duration-500 group-hover:scale-105" style="background-image: url('https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=900&q=80');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-bg-dark via-navy-dark/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="font-display text-2xl font-semibold text-white">Furniture</h3>
                    <p class="mt-2 text-sm text-slate-300">Structural, finish, assembly, and packing discipline for indoor &amp; outdoor ranges.</p>
                    <span class="mt-4 inline-flex text-sm font-semibold text-highlight">Discuss your program →</span>
                </div>
            </a>
            <a href="#contact" class="interactive-card group relative overflow-hidden rounded-2xl border border-white/10">
                <div class="h-56 bg-cover bg-center transition duration-500 group-hover:scale-105" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?w=900&q=80');"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-bg-dark via-navy-dark/60 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8">
                    <h3 class="font-display text-2xl font-semibold text-white">Home decor</h3>
                    <p class="mt-2 text-sm text-slate-300">Aesthetic, safety, and packaging checks for décor and interior accessories.</p>
                    <span class="mt-4 inline-flex text-sm font-semibold text-highlight">Discuss your program →</span>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- Coverage --}}
<section id="coverage" class="scroll-mt-24 border-t border-white/10 bg-navy-dark/25">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <h2 class="font-display text-3xl font-semibold text-white sm:text-4xl">Main coverage areas</h2>
        <p class="section-subtitle mt-4 text-lg text-slate-400">Bali and Java offices—field teams across Indonesia’s manufacturing regions.</p>
        <div class="mt-12 grid gap-10 lg:grid-cols-2">
            <div class="coverage-map-wrapper interactive-card overflow-hidden rounded-2xl border border-white/10 shadow-2xl shadow-black/40">
                <iframe title="Indonesia coverage" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1007771.8091532615!2d110.21178!3d-7.797068000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1234567890" class="h-80 w-full min-h-[320px] lg:h-full" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="coverage-info space-y-4">
                <div class="coverage-card glass rounded-2xl border border-white/10 p-6">
                    <h3 class="font-display text-lg font-semibold text-highlight">Bali office</h3>
                    <p class="mt-2 text-sm text-slate-300">Jalan Raya Padonan No 26</p>
                    <p class="text-sm text-slate-400">Canggu 80361 · Bali – Indonesia</p>
                </div>
                <div class="coverage-card glass rounded-2xl border border-white/10 p-6">
                    <h3 class="font-display text-lg font-semibold text-highlight">Java office</h3>
                    <p class="mt-2 text-sm text-slate-300">Jalan Tarudan No. 69a, Tarudan, Bangunharjo</p>
                    <p class="text-sm text-slate-400">Bantul 55187 · Yogyakarta – Indonesia</p>
                </div>
                <div class="glass rounded-2xl border border-highlight/30 bg-brand/20 p-6">
                    <p class="text-sm font-semibold text-white">Contacts</p>
                    <p class="mt-2 text-lg font-semibold text-highlight"><a href="tel:+622745060353">+62 (0) 274 5060 353</a></p>
                    <p class="mt-1"><a class="text-slate-300 hover:text-highlight" href="mailto:info@excellencial.com">info@excellencial.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Team --}}
<section id="team" class="scroll-mt-24 border-t border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
        <h2 class="font-display text-3xl font-semibold text-white sm:text-4xl">Our team</h2>
        <p class="section-subtitle mt-4 text-lg text-slate-400">Western leadership with Indonesian inspection and audit specialists in the field.</p>
        <div class="team-grid mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['Budi Santoso', 'Chief Quality Officer', 'Program design & client governance', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop'],
                ['Siti Nurhaliza', 'Head of Operations', 'Inspector scheduling & reporting', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=500&fit=crop'],
                ['Ahmad Wijaya', 'Lead Auditor', 'Factory audits & CAPA follow-up', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=500&fit=crop'],
                ['Dewi Lestari', 'Client relations', 'Booking, scope alignment & updates', 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=500&fit=crop'],
            ] as $m)
                <div class="team-member interactive-card overflow-hidden rounded-2xl border border-white/10 bg-navy/40">
                    <div class="member-image aspect-[4/5] bg-cover bg-center transition duration-500 hover:scale-105" style="background-image: url('{{ $m[3] }}');"></div>
                    <div class="p-5">
                        <h3 class="font-display text-lg font-semibold text-white">{{ $m[0] }}</h3>
                        <p class="role text-xs font-semibold uppercase tracking-wider text-highlight">{{ $m[1] }}</p>
                        <p class="bio mt-2 text-sm text-slate-400">{{ $m[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Clients strip --}}
<section id="clients" class="scroll-mt-24 border-t border-white/10 bg-navy/30">
    <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8">
        <p class="text-center text-xs font-semibold uppercase tracking-widest text-slate-500">Trusted by leading brands &amp; importers</p>
        <div class="mt-8 overflow-hidden border-y border-white/5 py-6 [mask-image:linear-gradient(90deg,transparent,black_8%,black_92%,transparent)]">
            <div class="flex w-max animate-marquee gap-20 text-sm font-semibold uppercase tracking-widest text-slate-500">
                <span>Retail</span><span>Furniture</span><span>Home décor</span><span>E‑commerce</span><span>Hospitality supply</span><span>Wholesale</span><span>Retail</span><span>Furniture</span><span>Home décor</span><span>E‑commerce</span><span>Hospitality supply</span><span>Wholesale</span>
            </div>
        </div>
    </div>
</section>

{{-- Testimonials --}}
<section id="testimonials" class="scroll-mt-24 border-t border-white/10 bg-gradient-to-b from-navy-dark/50 to-bg-dark">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
        <h2 class="font-display text-center text-3xl font-semibold text-white sm:text-4xl">Client feedback</h2>
        <div class="testimonials-grid mt-12 grid gap-6 md:grid-cols-3">
            <figure class="testimonial-card interactive-card glass rounded-2xl border-white/10 p-8">
                <div class="stars text-gold" aria-hidden="true">★★★★★</div>
                <blockquote class="quote mt-4 text-sm leading-relaxed text-slate-300">“Clear reporting and fast escalation—we finally had visibility on the factory floor without flying our own team every week.”</blockquote>
                <figcaption class="mt-6">
                    <p class="author text-sm font-semibold text-white">Import manager</p>
                    <p class="company text-xs text-slate-500">EU retail brand</p>
                </figcaption>
            </figure>
            <figure class="testimonial-card interactive-card glass rounded-2xl border-white/10 p-8">
                <div class="stars text-gold" aria-hidden="true">★★★★★</div>
                <blockquote class="quote mt-4 text-sm leading-relaxed text-slate-300">“Audits are structured and comparable quarter to quarter—useful for our vendor scorecards.”</blockquote>
                <figcaption class="mt-6">
                    <p class="author text-sm font-semibold text-white">Quality lead</p>
                    <p class="company text-xs text-slate-500">US wholesaler</p>
                </figcaption>
            </figure>
            <figure class="testimonial-card interactive-card glass rounded-2xl border-white/10 p-8">
                <div class="stars text-gold" aria-hidden="true">★★★★★</div>
                <blockquote class="quote mt-4 text-sm leading-relaxed text-slate-300">“Loading supervision saved us a carton mismatch that would have been painful at destination.”</blockquote>
                <figcaption class="mt-6">
                    <p class="author text-sm font-semibold text-white">Supply chain director</p>
                    <p class="company text-xs text-slate-500">APAC operator</p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section id="faq" class="scroll-mt-24 border-t border-white/10">
    <div class="mx-auto max-w-3xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
        <h2 class="font-display text-center text-3xl font-semibold text-white">Frequently asked questions</h2>
        <div class="mt-10 space-y-2">
            @foreach ([
                ['How quickly can you attend a factory?', 'Typical lead times depend on location and scope. Share your address, SKU count, and inspection type—we confirm availability within one business day.'],
                ['Do you only work in Indonesia?', 'Yes. We operate exclusively in Indonesia so our teams, logistics, and reporting stay focused on local manufacturing realities.'],
                ['What standards do you follow for inspections?', 'We work to your specification and AQL sampling plans—aligned with common industry practice and your purchase order terms.'],
            ] as $faq)
                <details class="acc rounded-xl border border-white/10 bg-navy/30 open:border-highlight/40">
                    <summary class="cursor-pointer list-none px-5 py-4 text-left text-sm font-semibold text-white hover:text-highlight">{{ $faq[0] }}</summary>
                    <div class="border-t border-white/5 px-5 pb-4 text-sm text-slate-400">{{ $faq[1] }}</div>
                </details>
            @endforeach
        </div>
    </div>
</section>

{{-- Blog teaser --}}
<section id="blog" class="scroll-mt-24 border-t border-white/10 bg-navy-dark/20">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-24">
        <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-widest text-highlight">News &amp; resources</p>
                <h2 class="font-display mt-2 text-3xl font-semibold text-white sm:text-4xl">Blog</h2>
                <p class="section-subtitle mt-3 max-w-xl text-slate-400">Practical articles on inspections, audits, and importing from Indonesia—aligned with topics on excellencial.com.</p>
            </div>
            <a href="{{ route('articles.index') }}" class="inline-flex shrink-0 items-center justify-center rounded border border-brand bg-brand px-6 py-3 text-xs font-bold uppercase tracking-wide text-white transition hover:bg-brand-hover">View all articles</a>
        </div>
        <div class="blog-grid mt-12 grid gap-6 md:grid-cols-3">
            @foreach (collect(config('articles'))->sortByDesc('published_at')->take(3) as $a)
                <article class="blog-card interactive-card flex flex-col rounded-2xl border border-white/10 bg-navy-dark/40 p-6">
                    <p class="text-xs font-semibold uppercase tracking-wider text-highlight">{{ $a['category'] }}</p>
                    <h3 class="mt-3 font-display text-lg font-semibold text-white">{{ $a['title'] }}</h3>
                    <p class="date mt-2 text-xs text-slate-500">{{ \Illuminate\Support\Carbon::parse($a['published_at'])->format('F j, Y') }}</p>
                    <p class="excerpt mt-3 flex-1 text-sm text-slate-400">{{ $a['excerpt'] }}</p>
                    <a href="{{ route('articles.show', $a['slug']) }}" class="service-link mt-6 text-sm font-semibold text-highlight">Read more →</a>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="scroll-mt-24 border-t border-white/10 bg-navy-dark/40">
    <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8 lg:py-28">
        <h2 class="font-display text-3xl font-semibold text-white sm:text-4xl">Contact us</h2>
        <p class="section-subtitle mt-4 text-lg text-slate-400">Request a booking or ask a technical question—we typically respond within one business day.</p>
        <div class="contact-grid mt-12 grid gap-12 lg:grid-cols-2">
            <div class="contact-info space-y-4 text-slate-300">
                <p><strong class="text-white">PT. ABOVE AND BEYOND</strong></p>
                <p><strong class="text-white">Email:</strong> <a class="text-highlight hover:underline" href="mailto:info@excellencial.com">info@excellencial.com</a></p>
                <p><strong class="text-white">Phone:</strong> <a class="text-highlight hover:underline" href="tel:+622745060353">+62 (0) 274 5060 353</a></p>
                <p class="text-sm text-slate-500">Same-day urgency: call the Bali or Java office and reference your supplier location.</p>
            </div>
            <form class="contact-form space-y-4" id="contactForm">
                <div class="form-group">
                    <label class="sr-only" for="cname">Name</label>
                    <input id="cname" type="text" name="name" placeholder="Your name" required class="w-full rounded border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-highlight focus:outline-none focus:ring-2 focus:ring-highlight/25">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="cemail">Email</label>
                    <input id="cemail" type="email" name="email" placeholder="Work email" required class="w-full rounded border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-highlight focus:outline-none focus:ring-2 focus:ring-highlight/25">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="ccompany">Company</label>
                    <input id="ccompany" type="text" name="company" placeholder="Company" required class="w-full rounded border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-highlight focus:outline-none focus:ring-2 focus:ring-highlight/25">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="cmsg">Message</label>
                    <textarea id="cmsg" name="message" placeholder="Inspection type, factory address, target date…" rows="5" required class="w-full rounded border border-white/10 bg-white/5 px-4 py-3 text-sm text-white placeholder:text-slate-500 focus:border-highlight focus:outline-none focus:ring-2 focus:ring-highlight/25"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-full py-3.5 lg:w-auto lg:px-12">Send message</button>
                <p class="form-message hidden text-sm text-highlight" role="status"></p>
            </form>
        </div>
    </div>
</section>
@endsection
