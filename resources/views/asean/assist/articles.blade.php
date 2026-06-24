@extends('layouts.asean')

@section('title', 'News & Insights — Asean Sourcing')

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
    
    .text-readable {
        color: #1e293b;
    }
    
    .text-readable-light {
        color: #64748b;
    }
    
    .article-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .article-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 25px 50px -12px rgba(0, 29, 57, 0.25);
    }
    
    .article-card:hover .article-image {
        transform: scale(1.08);
    }
    
    .article-image {
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .category-badge {
        transition: all 0.3s ease;
    }
    
    .article-card:hover .category-badge {
        background-color: #985e23;
        color: white;
    }
    
    .filter-btn {
        transition: all 0.3s ease;
    }
    
    .filter-btn.active {
        background-color: #985e23;
        color: white;
    }
    
    .filter-btn:hover:not(.active) {
        background-color: rgba(152, 94, 35, 0.1);
    }
    
    .search-input:focus {
        border-color: #985e23;
        box-shadow: 0 0 0 3px rgba(152, 94, 35, 0.1);
    }
    
    .fade-in {
        animation: fadeIn 0.6s ease-out forwards;
        opacity: 0;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .article-card:nth-child(1) { animation-delay: 0.1s; }
    .article-card:nth-child(2) { animation-delay: 0.2s; }
    .article-card:nth-child(3) { animation-delay: 0.3s; }
    .article-card:nth-child(4) { animation-delay: 0.4s; }
    .article-card:nth-child(5) { animation-delay: 0.5s; }
    .article-card:nth-child(6) { animation-delay: 0.6s; }
    .article-card:nth-child(7) { animation-delay: 0.7s; }
    .article-card:nth-child(8) { animation-delay: 0.8s; }
</style>
@endpush

@section('content')
    <!-- Hero Section -->
   <section class="relative overflow-hidden px-4 py-24 text-black sm:px-6 lg:px-8 lg:py-32">
         <div class="absolute inset-0 -z-20">
            <video id="heroVideo" class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
                <source src="{{ asset('media/gateway/bgvds5.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-asean-navy/60"></div>
        </div>
        <div class="absolute inset-0 opacity-10 -z-10">
            <div class="absolute top-0 left-0 h-full w-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzR2LTRoLTR2NGgtNHY0aDR2NGg0di00aDR2LTRoLTR2LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
</div>
        <div class="relative mx-auto max-w-7xl text-center">
            <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-4">News & Insights</p>
            <h1 class="font-asean-display text-4xl sm:text-5xl lg:text-6xl font-semibold text-asean-gold leading-tight mb-6">
                Asean Sourcing Articles
            </h1>
            <p class="text-lg text-white leading-relaxed max-w-3xl mx-auto mb-8">
                Explore our latest insights on quality assurance, supply chain management, and strategic sourcing. Stay informed with industry trends and best practices.
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" 
                           id="searchInput"
                           placeholder="Search articles..." 
                           class="search-input w-full px-6 py-4 rounded-full border-2 border-white/20 bg-white/10 text-black placeholder-white/60 focus:outline-none focus:bg-white/20 transition-all duration-300">
                    <svg class="absolute right-6 top-1/2 -translate-y-1/2 w-5 h-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="bg-white border-b border-gray-200 px-4 py-6 sm:px-6 lg:px-8 sticky top-0 z-40 bg-white/95 backdrop-blur-sm">
        <div class="mx-auto max-w-7xl">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex flex-wrap gap-2" id="filterContainer">
                    <button class="filter-btn active px-4 py-2 rounded-full text-sm font-semibold border-2 border-asean-gold/20 text-asean-navy" data-filter="all">
                        All Articles
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm font-semibold border-2 border-asean-gold/20 text-asean-navy" data-filter="Quality Assurance">
                        Quality Assurance
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm font-semibold border-2 border-asean-gold/20 text-asean-navy" data-filter="Factory Audits">
                        Factory Audits
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm font-semibold border-2 border-asean-gold/20 text-asean-navy" data-filter="Supply Chain">
                        Supply Chain
                    </button>
                    <button class="filter-btn px-4 py-2 rounded-full text-sm font-semibold border-2 border-asean-gold/20 text-asean-navy" data-filter="Sustainability">
                        Sustainability
                    </button>
                </div>
                <div class="text-sm text-readable-light">
                    <span id="articleCount">{{ count($articles) }}</span> articles
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="py-16 bg-gray-50 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="articlesGrid">
                @foreach ($articles as $article)
                    <article class="article-card group flex flex-col fade-in bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl border border-gray-100 h-full" 
                             data-category="{{ $article['category'] }}"
                             data-title="{{ strtolower($article['title']) }}">
                        <!-- Image -->
                        <div class="relative aspect-[4/3] overflow-hidden">
                            <img src="{{ $article['image'] }}" 
                                 alt="{{ $article['title'] }}" 
                                 class="article-image w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                            
                            <!-- Category Badge -->
                            @if($article['featured'] ?? false)
                                <div class="absolute top-4 left-4">
                                    <span class="category-badge bg-asean-gold text-white text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                        Featured
                                    </span>
                                </div>
                            @endif
                            
                            <!-- Category -->
                            <div class="absolute bottom-4 left-4 right-4">
                                <span class="category-badge bg-white/95 text-asean-navy text-xs font-bold uppercase tracking-wider px-3 py-1 rounded-full">
                                    {{ $article['category'] }}
                                </span>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6 flex flex-col flex-grow">
                            <!-- Meta -->
                            <div class="flex items-center gap-3 mb-4 text-xs font-medium text-readable-light">
                                <div class="flex items-center gap-1.5">
                                    <svg style="width: 16px; height: 16px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <time datetime="{{ $article['published_at'] }}">
                                        {{ \Illuminate\Support\Carbon::parse($article['published_at'])->format('F j, Y') }}
                                    </time>
                                </div>
                                <span class="text-gray-300">•</span>
                                <div class="flex items-center gap-1.5">
                                    <svg style="width: 16px; height: 16px; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>{{ $article['read_minutes'] }} min read</span>
                                </div>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="font-asean-display text-xl font-bold text-readable mb-3 line-clamp-2 leading-tight group-hover:text-asean-gold transition-colors duration-300">
                                {{ $article['title'] }}
                            </h3>
                            
                            <!-- Excerpt -->
                            <p class="text-readable-light text-sm leading-relaxed mb-6 line-clamp-3 flex-grow">
                                {{ $article['excerpt'] }}
                            </p>
                            
                            <!-- Read More Link -->
                            <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                                <a href="#" class="inline-flex items-center text-asean-navy hover:text-asean-gold font-semibold text-sm transition-colors duration-300 group/link">
                                    Read more
                                    <svg style="width: 16px; height: 16px;" class="ml-1.5 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            
            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-16">
                <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <h3 class="text-xl font-semibold text-readable mb-2">No articles found</h3>
                <p class="text-readable-light">Try adjusting your search or filter criteria</p>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-asean-gold-soft px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="font-asean-display text-3xl sm:text-4xl font-semibold text-black mb-4">
                Stay Updated
            </h2>
            <p class="text-black mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter for the latest insights on quality assurance, supply chain management, and strategic sourcing.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="flex-1 px-6 py-4 rounded-full border-2 border-black bg-white/10 text-black placeholder-black/60 focus:outline-none focus:border-asean-gold transition-all duration-300">
                <button class="gold-gradient px-8 py-4 rounded-full text-black font-semibold border-2 border-black hover:shadow-lg transition-all duration-300 hover:scale-105">
                    Subscribe
                </button>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const filterButtons = document.querySelectorAll('.filter-btn');
        const articles = document.querySelectorAll('.article-card');
        const noResults = document.getElementById('noResults');
        const articleCount = document.getElementById('articleCount');
        
        let currentFilter = 'all';
        let currentSearch = '';
        
        function filterArticles() {
            let visibleCount = 0;
            
            articles.forEach(article => {
                const category = article.dataset.category;
                const title = article.dataset.title;
                
                const matchesFilter = currentFilter === 'all' || category === currentFilter;
                const matchesSearch = currentSearch === '' || title.includes(currentSearch);
                
                if (matchesFilter && matchesSearch) {
                    article.style.display = 'block';
                    visibleCount++;
                } else {
                    article.style.display = 'none';
                }
            });
            
            // Update article count
            articleCount.textContent = visibleCount;
            
            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }
        
        // Search functionality
        searchInput.addEventListener('input', function(e) {
            currentSearch = e.target.value.toLowerCase();
            filterArticles();
        });
        
        // Filter button functionality
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                // Update current filter
                currentFilter = this.dataset.filter;
                
                // Filter articles
                filterArticles();
            });
        });
    });
</script>
@endpush
