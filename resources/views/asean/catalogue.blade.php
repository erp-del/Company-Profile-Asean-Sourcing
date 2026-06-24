@extends('layouts.asean')

@section('title', 'Asean Sourcing Catalogue — Product Catalogue')

@section('meta_description', 'Browse our comprehensive product catalogue featuring hospitality FF&E, furniture, decor, and more. Quality assured products from trusted manufacturers.')

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
    
    .catalogue-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 29, 57, 0.15);
    }
    
    /* Modal transitions */
    #productModal {
        transition: opacity 0.3s ease;
        opacity: 0;
        pointer-events: none;
    }
    
    #productModal:not(.hidden) {
        opacity: 1;
        pointer-events: auto;
    }
    
    #productModal .relative {
        transition: transform 0.3s ease, opacity 0.3s ease;
        transform: scale(0.95);
        opacity: 0;
    }
    
    #productModal:not(.hidden) .relative {
        transform: scale(1);
        opacity: 1;
    }
    
    /* Thumbnail active state */
    .thumbnail-active {
        border-color: #985e23 !important;
    }
    
    /* Section transitions */
    .modal-section {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    
    .modal-section.visible {
        opacity: 1;
        transform: translateY(0);
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
   <section class="relative overflow-hidden px-4 py-24 text-black sm:px-6 lg:px-8 lg:py-32">
         <div class="absolute inset-0 -z-20">
            <video id="heroVideo" class="absolute inset-0 h-full w-full object-cover" autoplay muted loop playsinline preload="metadata">
                <source src="{{ asset('media/gateway/bgvds5.mp4') }}" type="video/mp4">
            </video>
        </div>
        <div class="relative mx-auto max-w-7xl">        
            <div class="text-center">
                <p class="text-sm font-bold uppercase tracking-[0.3em] text-asean-gold mb-6">Product Catalogue</p>
                <h1 class="font-asean-display text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight mb-6 text-asean-gold">
                    Explore Our Products
                </h1>
                <p class="text-lg text-white max-w-3xl mx-auto">
                    Browse our comprehensive catalogue of quality-assured products for hospitality, retail, and commercial spaces.
                </p>
            </div>
        </div>
    </section>

    <!-- Catalogue Grid Section -->
    <section class="py-20 bg-gray-100 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <!-- Filter Dropdown -->
            <h2 class="text-2xl font-bold text-asean-gold mb-8 text-center">Our Autumn Collection 2026</h2>
            <div class="mb-8 flex justify-end">
                <div class="relative" id="filterDropdown">
                    <button id="filterButton" class="flex items-center gap-2 px-6 py-3 bg-white rounded-full border border-slate-300 shadow-sm hover:border-asean-gold transition">
                        <span class="font-medium text-sm text-slate-500" id="selectedCategory">All Products</span>
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-slate-200 z-10">
                        <button class="category-btn w-full px-4 py-3 text-left text-sm hover:bg-asean-gold-10 transition text-asean-gold font-semibold" data-category="All Products">All Products</button>
                        <button class="category-btn w-full px-4 py-3 text-left text-sm hover:bg-asean-gold-10 transition text-slate-700" data-category="Furniture">Furniture</button>
                        <button class="category-btn w-full px-4 py-3 text-left text-sm hover:bg-asean-gold-10 transition text-slate-700" data-category="Lighting">Lighting</button>
                        <button class="category-btn w-full px-4 py-3 text-left text-sm hover:bg-asean-gold-10 transition text-slate-700" data-category="Home Decor">Home Decor</button>
                        <button class="category-btn w-full px-4 py-3 text-left text-sm hover:bg-asean-gold-10 transition text-slate-700" data-category="Textiles">Textiles</button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4" id="productGrid">
                <!-- Products will be rendered by JavaScript -->
            </div>

            <!-- Product Modal -->
            <div id="productModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4">
                <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" id="modalOverlay"></div>
                <div class="relative bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl">
                    <button id="closeModal" class="absolute top-4 right-4 z-20 w-9 h-9 flex items-center justify-center bg-white rounded-full shadow-lg hover:bg-gray-100 transition">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    
                    <div class="grid md:grid-cols-2">
                        <!-- Image Gallery -->
                        <div class="relative bg-gray-50">
                            <div class="aspect-[4/3] bg-slate-200 relative">
                                <img id="modalMainImage" src="" alt="" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center">
                                    <button id="prevImage" class="w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition">
                                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                        </svg>
                                    </button>
                                    <button id="nextImage" class="w-10 h-10 bg-white rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition">
                                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product Details -->
                        <div class="p-8 overflow-y-auto max-h-[90vh]">
                            <div class="modal-section">
                                <p class="text-xs font-semibold text-asean-gold uppercase tracking-[0.2em] mb-3" id="modalCategory"></p>
                                <h2 class="font-asean-display text-2xl font-semibold text-asean-navy mb-4 leading-tight" id="modalName"></h2>
                                <p class="text-slate-600 text-sm leading-relaxed mb-8" id="modalDescription"></p>
                            </div>
                            
                            <div class="modal-section border-t border-slate-100 pt-6 mb-6">
                                <h4 class="font-semibold text-asean-navy text-sm mb-3">Specifications</h4>
                                <p class="text-slate-600 text-sm leading-relaxed" id="modalSpecs"></p>
                            </div>
                            
                            <div class="modal-section grid grid-cols-2 gap-4 mb-8">
                                <div class="bg-slate-50 rounded-xl p-4 border border-slate-100">
                                    <p class="text-xs text-slate-500 mb-1 uppercase tracking-wide">ETA Production</p>
                                    <p class="font-semibold text-asean-gold" id="modalEtaProduction"></p>
                                </div>
                                <div class="bg-slate-50 rounded-xl p-4 border border-slate-100">
                                    <p class="text-xs text-slate-500 mb-1 uppercase tracking-wide">ETA Price Quote</p>
                                    <p class="font-semibold text-asean-gold" id="modalEtaPrice"></p>
                                </div>
                            </div>
                            
                            <div class="modal-section">
                                <button class="w-full gold-gradient px-8 py-4 rounded-full border-2 border-asean-gold text-asean-gold font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                    Detailed Info for This Product
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="gold-gradient px-8 py-4 rounded-full border-2 border-black text-black font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    Load More Products
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-20 bg-asean-gold-soft">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="font-asean-display text-4xl sm:text-5xl font-semibold text-readable mb-6">
                Need Custom Products?
            </h2>
            <p class="text-lg text-readable-light mb-8">
                Contact us to discuss custom manufacturing and product development for your specific requirements.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/contact" class="border-2 gold-gradient px-8 py-4 rounded-full text-black font-semibold shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    Get in Touch
                </a>
                <a href="{{ route('asean.projects') }}" class="border-2 border-asean-gold px-8 py-4 rounded-full text-black font-semibold hover:bg-asean-gold hover:text-white transition-all duration-300">
                    View Projects
                </a>
            </div>
        </div>
    </section>

    <script>
        // Product data
        const products = [
            { id: 1, name: 'Modern Sofa Collection', category: 'Furniture', description: 'Contemporary design with premium upholstery', image: 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1567016432779-094069958ea5?w=600&h=400&fit=crop'], specs: 'Dimensions: 220cm x 95cm x 85cm | Material: Premium Fabric | Frame: Solid Wood', etaProduction: '4-6 weeks', etaPrice: '2-3 days' },
            { id: 2, name: 'Pendant Light Series', category: 'Lighting', description: 'Elegant lighting for hospitality spaces', image: 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=600&h=400&fit=crop'], specs: 'Dimensions: 40cm diameter | Material: Brass & Glass | Voltage: 220V', etaProduction: '3-4 weeks', etaPrice: '1-2 days' },
            { id: 3, name: 'Ceramic Vase Collection', category: 'Home Decor', description: 'Handcrafted decorative pieces', image: 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=600&h=400&fit=crop'], specs: 'Dimensions: 25cm x 30cm | Material: Hand-painted Ceramic | Finish: Matte', etaProduction: '2-3 weeks', etaPrice: '1-2 days' },
            { id: 4, name: 'Premium Linen Set', category: 'Textiles', description: 'Luxurious bedding and towels', image: 'https://images.unsplash.com/photo-1592078615290-033ee584e267?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1592078615290-033ee584e267?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=600&h=400&fit=crop'], specs: 'Material: 100% Egyptian Cotton | Thread Count: 400 | Set Includes: Duvet, Sheets, Pillowcases', etaProduction: '3-4 weeks', etaPrice: '2-3 days' },
            { id: 5, name: 'Lounge Armchair', category: 'Furniture', description: 'Comfortable seating for lobbies', image: 'https://images.unsplash.com/photo-1567016432779-094069958ea5?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1567016432779-094069958ea5?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&h=400&fit=crop'], specs: 'Dimensions: 85cm x 90cm x 95cm | Material: Leather | Cushion: High-density Foam', etaProduction: '4-5 weeks', etaPrice: '2-3 days' },
            { id: 6, name: 'Table Lamp Collection', category: 'Lighting', description: 'Ambient lighting solutions', image: 'https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=600&h=400&fit=crop'], specs: 'Dimensions: 35cm x 35cm x 50cm | Material: Metal & Fabric | Bulb: E27 LED', etaProduction: '2-3 weeks', etaPrice: '1-2 days' },
            { id: 7, name: 'Wall Art Series', category: 'Home Decor', description: 'Contemporary art pieces', image: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1584622650111-993a426fbf0a?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?w=600&h=400&fit=crop'], specs: 'Dimensions: 120cm x 80cm | Material: Canvas & Wood Frame | Style: Abstract', etaProduction: '3-4 weeks', etaPrice: '2-3 days' },
            { id: 8, name: 'Window Treatment Set', category: 'Textiles', description: 'Custom curtains and drapes', image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=400&h=400&fit=crop', images: ['https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=600&h=400&fit=crop', 'https://images.unsplash.com/photo-1592078615290-033ee584e267?w=600&h=400&fit=crop'], specs: 'Material: Velvet & Silk | Custom Sizing Available | Lining: Blackout', etaProduction: '4-5 weeks', etaPrice: '3-4 days' },
        ];

        const urlParams = new URLSearchParams(window.location.search);
        const categoryParam = urlParams.get('category');
        let selectedCategory = categoryParam ? decodeURIComponent(categoryParam) : 'All Products';

        // Render products
        function renderProducts() {
            const grid = document.getElementById('productGrid');
            const filtered = selectedCategory === 'All Products' ? products : products.filter(p => p.category.toLowerCase() === selectedCategory.toLowerCase());
            
            grid.innerHTML = filtered.map(product => `
                <div class="catalogue-card bg-white rounded-xl overflow-hidden shadow-sm transition-all duration-300 cursor-pointer hover:shadow-lg" onclick="openModal(${product.id})">
                    <div class="aspect-square bg-slate-200">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <p class="text-[10px] font-semibold text-asean-gold uppercase tracking-wider mb-1">${product.category}</p>
                        <h3 class="font-asean-display text-sm font-semibold text-readable mb-1">${product.name}</h3>
                        <p class="text-readable-light text-xs mb-2 line-clamp-2">${product.description}</p>
                        <span class="text-asean-gold font-semibold text-xs">View Details →</span>
                    </div>
                </div>
            `).join('');
        }

        // Filter dropdown
        const filterButton = document.getElementById('filterButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        const selectedCategorySpan = document.getElementById('selectedCategory');
        const categoryBtns = document.querySelectorAll('.category-btn');

        // Set initial active state based on selectedCategory
        selectedCategorySpan.textContent = selectedCategory;
        categoryBtns.forEach(btn => {
            if (btn.dataset.category.toLowerCase() === selectedCategory.toLowerCase()) {
                btn.classList.add('text-asean-gold', 'font-semibold');
                btn.classList.remove('text-slate-700');
                // Sync case with the exact category name
                selectedCategory = btn.dataset.category;
                selectedCategorySpan.textContent = selectedCategory;
            } else {
                btn.classList.remove('text-asean-gold', 'font-semibold');
                btn.classList.add('text-slate-700');
            }
        });

        filterButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!document.getElementById('filterDropdown').contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        categoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                selectedCategory = btn.dataset.category;
                selectedCategorySpan.textContent = selectedCategory;
                
                categoryBtns.forEach(b => {
                    b.classList.remove('text-asean-gold', 'font-semibold');
                    b.classList.add('text-slate-700');
                });
                btn.classList.add('text-asean-gold', 'font-semibold');
                btn.classList.remove('text-slate-700');
                
                dropdownMenu.classList.add('hidden');
                renderProducts();
            });
        });

        // Modal functionality
        const modal = document.getElementById('productModal');
        const modalOverlay = document.getElementById('modalOverlay');
        const closeModal = document.getElementById('closeModal');
        const prevImageBtn = document.getElementById('prevImage');
        const nextImageBtn = document.getElementById('nextImage');
        let currentImageIndex = 0;
        let currentProduct = null;

        function openModal(productId) {
            currentProduct = products.find(p => p.id === productId);
            if (!currentProduct) return;

            currentImageIndex = 0;
            
            document.getElementById('modalMainImage').src = currentProduct.images[0];
            document.getElementById('modalMainImage').alt = currentProduct.name;
            document.getElementById('modalCategory').textContent = currentProduct.category;
            document.getElementById('modalName').textContent = currentProduct.name;
            document.getElementById('modalDescription').textContent = currentProduct.description;
            document.getElementById('modalSpecs').textContent = currentProduct.specs;
            document.getElementById('modalEtaProduction').textContent = currentProduct.etaProduction;
            document.getElementById('modalEtaPrice').textContent = currentProduct.etaPrice;

            modal.classList.remove('hidden');
            
            // Trigger section animations with staggered delay
            setTimeout(() => {
                const sections = document.querySelectorAll('.modal-section');
                sections.forEach((section, index) => {
                    setTimeout(() => {
                        section.classList.add('visible');
                    }, index * 100);
                });
            }, 100);
        }

        function changeImage(index) {
            if (!currentProduct) return;
            currentImageIndex = index;
            document.getElementById('modalMainImage').src = currentProduct.images[index];
        }

        prevImageBtn.addEventListener('click', () => {
            if (!currentProduct) return;
            currentImageIndex = (currentImageIndex - 1 + currentProduct.images.length) % currentProduct.images.length;
            changeImage(currentImageIndex);
        });

        nextImageBtn.addEventListener('click', () => {
            if (!currentProduct) return;
            currentImageIndex = (currentImageIndex + 1) % currentProduct.images.length;
            changeImage(currentImageIndex);
        });

        closeModal.addEventListener('click', () => {
            // Reset section animations
            const sections = document.querySelectorAll('.modal-section');
            sections.forEach(section => {
                section.classList.remove('visible');
            });
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 100);
        });

        modalOverlay.addEventListener('click', () => {
            closeModal.click();
        });

        // Close modal on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal.click();
            }
        });

        // Initial render
        renderProducts();
    </script>
@endsection
