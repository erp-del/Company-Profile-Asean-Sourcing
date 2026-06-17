// ===== IMAGE SLIDER FUNCTIONALITY =====
class HeroSlider {
    constructor() {
        this.slides = document.querySelectorAll('.hero-slide');
        this.dots = document.querySelectorAll('.slider-dot');
        this.currentSlide = 0;
        this.autoPlayInterval = null;
        
        if (this.slides.length > 0) {
            this.init();
        }
    }

    init() {
        // Click handlers for dots
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });

        // Auto-play slides
        this.startAutoPlay();

        // Pause on hover
        document.querySelector('.hero')?.addEventListener('mouseenter', () => this.stopAutoPlay());
        document.querySelector('.hero')?.addEventListener('mouseleave', () => this.startAutoPlay());
    }

    goToSlide(n) {
        // Remove active class from all slides and dots
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        this.currentSlide = n % this.slides.length;
        this.slides[this.currentSlide].classList.add('active');
        this.dots[this.currentSlide].classList.add('active');
    }

    nextSlide() {
        this.goToSlide(this.currentSlide + 1);
    }

    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => this.nextSlide(), 5000);
    }

    stopAutoPlay() {
        clearInterval(this.autoPlayInterval);
    }
}

// ===== MOBILE MENU TOGGLE =====
class MobileMenu {
    constructor() {
        this.hamburger = document.querySelector('.hamburger');
        this.navLinks = document.querySelector('.nav-links');
        this.navItems = document.querySelectorAll('.nav-links li');
        
        if (this.hamburger) {
            this.init();
        }
    }

    init() {
        this.hamburger.addEventListener('click', () => this.toggleMenu());
        
        // Close menu when a link is clicked
        this.navItems.forEach(item => {
            item.addEventListener('click', () => this.closeMenu());
        });

        // Close menu on outside click
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar')) {
                this.closeMenu();
            }
        });
    }

    toggleMenu() {
        this.hamburger.classList.toggle('active');
        this.navLinks.classList.toggle('active');
    }

    closeMenu() {
        this.hamburger.classList.remove('active');
        this.navLinks.classList.remove('active');
    }
}

// ===== SCROLL-TRIGGERED ANIMATIONS =====
class ScrollAnimations {
    constructor() {
        this.observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        this.observer = new IntersectionObserver(
            (entries) => this.handleIntersection(entries),
            this.observerOptions
        );

        this.init();
    }

    init() {
        // Observe all animated elements
        const animatedElements = document.querySelectorAll(
            'section h2, .section-subtitle, .service-card, .team-member, .portfolio-item, ' +
            '.testimonial-card, .blog-card, .stat, .placeholder-image, .info-item, .contact-form'
        );

        animatedElements.forEach((el, index) => {
            el.style.animationDelay = `${index * 0.1}s`;
            this.observer.observe(el);
        });
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                this.observer.unobserve(entry.target);
            }
        });
    }
}

// ===== NAVBAR SCROLL EFFECT =====
class NavbarScroll {
    constructor() {
        this.navbar = document.querySelector('.navbar');
        this.lastScrollTop = 0;
        this.init();
    }

    init() {
        window.addEventListener('scroll', () => this.handleScroll(), false);
    }

    handleScroll() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
            this.navbar.classList.add('scrolled');
        } else {
            this.navbar.classList.remove('scrolled');
        }

        this.lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }
}

// ===== SMOOTH SCROLL & ACTIVE LINK HIGHLIGHTING =====
class SmoothScroll {
    constructor() {
        this.navLinks = document.querySelectorAll('.nav-links a[href^="#"]');
        this.init();
    }

    init() {
        this.navLinks.forEach(link => {
            link.addEventListener('click', (e) => this.handleLinkClick(e));
        });

        // Update active link on scroll
        window.addEventListener('scroll', () => this.updateActiveLink());
    }

    handleLinkClick(e) {
        const href = e.currentTarget.getAttribute('href');
        
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    }

    updateActiveLink() {
        const sections = document.querySelectorAll('section[id]');
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            const sectionHeight = section.offsetHeight;
            const scrollPosition = window.scrollY;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                this.navLinks.forEach(link => link.classList.remove('active'));
                
                const activeLink = document.querySelector(
                    `.nav-links a[href="#${section.id}"]`
                );
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }
}

// ===== FORM HANDLING =====
class FormHandler {
    constructor() {
        this.form = document.querySelector('.contact-form');
        if (this.form) {
            this.init();
        }
    }

    init() {
        this.form.addEventListener('submit', (e) => this.handleSubmit(e));
    }

    handleSubmit(e) {
        e.preventDefault();
        
        const formData = new FormData(this.form);
        const data = Object.fromEntries(formData);

        // Simple validation
        if (!this.validateForm(data)) {
            console.error('Form validation failed');
            return;
        }

        // Show success message
        this.showMessage('Message sent successfully! We\'ll get back to you soon.', 'success');
        
        // Reset form
        this.form.reset();
    }

    validateForm(data) {
        return data.name && data.email && data.company && data.message;
    }

    showMessage(message, type) {
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type}`;
        alertDiv.textContent = message;
        alertDiv.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: ${type === 'success' ? '#d4af37' : '#ff6b6b'};
            color: ${type === 'success' ? '#001f3f' : 'white'};
            padding: 1rem 2rem;
            border-radius: 4px;
            z-index: 9999;
            animation: slideInRight 0.3s ease-out;
        `;

        document.body.appendChild(alertDiv);

        setTimeout(() => {
            alertDiv.style.animation = 'slideOutRight 0.3s ease-out forwards';
            setTimeout(() => alertDiv.remove(), 300);
        }, 3000);
    }
}

// ===== PARALLAX EFFECT =====
class ParallaxEffect {
    constructor() {
        this.hero = document.querySelector('.hero');
        if (this.hero) {
            this.init();
        }
    }

    init() {
        window.addEventListener('scroll', () => this.handleScroll());
    }

    handleScroll() {
        const scrollTop = window.pageYOffset;
        const heroBeforeElement = this.hero.querySelector('::before');
        
        if (scrollTop < window.innerHeight) {
            this.hero.style.backgroundPosition = `center ${scrollTop * 0.5}px`;
        }
    }
}

// ===== COUNTER ANIMATION =====
class CounterAnimation {
    constructor() {
        this.stats = document.querySelectorAll('.stat h3');
        this.observerOptions = {
            threshold: 0.5
        };

        this.observer = new IntersectionObserver(
            (entries) => this.handleIntersection(entries),
            this.observerOptions
        );

        this.init();
    }

    init() {
        this.stats.forEach(stat => {
            this.observer.observe(stat);
        });
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.animated) {
                entry.target.animated = true;
                const finalValue = entry.target.textContent;
                const numericValue = parseInt(finalValue);
                
                if (!isNaN(numericValue)) {
                    this.animateCounter(entry.target, 0, numericValue);
                }
            }
        });
    }

    animateCounter(element, start, end) {
        const duration = 2000; // 2 seconds
        const range = end - start;
        const increment = end > 999 ? 100 : end > 99 ? 10 : 1;
        let current = start;
        const startTime = Date.now();

        const updateCounter = () => {
            const now = Date.now();
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);

            current = start + (range * progress);
            
            element.textContent = Math.floor(current) + (end.toString().includes('+') ? '+' : '');

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = end;
            }
        };

        updateCounter();
    }
}

// ===== TOUCH SUPPORT & SWIPE =====
class TouchSupport {
    constructor() {
        this.touchStartX = 0;
        this.touchEndX = 0;
        this.init();
    }

    init() {
        document.addEventListener('touchstart', (e) => this.handleTouchStart(e), false);
        document.addEventListener('touchend', (e) => this.handleTouchEnd(e), false);
    }

    handleTouchStart(e) {
        this.touchStartX = e.changedTouches[0].screenX;
    }

    handleTouchEnd(e) {
        this.touchEndX = e.changedTouches[0].screenX;
        this.handleSwipe();
    }

    handleSwipe() {
        const diff = this.touchStartX - this.touchEndX;

        // Swipe left/right handling can be added here
        if (Math.abs(diff) > 50) {
            // User swiped
        }
    }
}

// ===== LAZY LOADING IMAGES =====
class LazyLoadImages {
    constructor() {
        this.init();
    }

    init() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                        }
                        observer.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }
}

// ===== PERFORMANCE MONITORING =====
class PerformanceMonitor {
    constructor() {
        this.init();
    }

    init() {
        if ('PerformanceObserver' in window) {
            // Monitor Core Web Vitals
            const observer = new PerformanceObserver((list) => {
                list.getEntries().forEach((entry) => {
                    // Can log metrics to server
                    console.log(`${entry.name}: ${entry.value}ms`);
                });
            });

            observer.observe({ entryTypes: ['measure', 'navigation'] });
        }
    }
}

// ===== KEYBOARD ACCESSIBILITY =====
class KeyboardAccessibility {
    constructor() {
        this.init();
    }

    init() {
        // Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            // ESC key to close mobile menu
            if (e.key === 'Escape') {
                const mobileMenu = document.querySelector('.hamburger');
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    mobileMenu.click();
                }
            }

            // Tab key focus management
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-focus');
            }
        });

        document.addEventListener('mousedown', () => {
            document.body.classList.remove('keyboard-focus');
        });
    }
}

// ===== INITIALIZE ALL ON DOM READY =====
document.addEventListener('DOMContentLoaded', () => {
    console.log('🚀 Initializing Excellencial Website...');

    new HeroSlider();
    new MobileMenu();
    new ScrollAnimations();
    new NavbarScroll();
    new SmoothScroll();
    new FormHandler();
    new ParallaxEffect();
    new CounterAnimation();
    new TouchSupport();
    new LazyLoadImages();
    new PerformanceMonitor();
    new KeyboardAccessibility();

    console.log('✅ Website fully initialized');
});

// ===== UTILITY FUNCTIONS =====

// Smooth scroll to element
function smoothScrollToElement(selector) {
    const element = document.querySelector(selector);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Debounce function for optimization
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Throttle function for performance
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Check if element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Export for module usage
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        smoothScrollToElement,
        debounce,
        throttle,
        isInViewport
    };
}
