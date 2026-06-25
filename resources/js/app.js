import './bootstrap';
import { initAseanGateway } from './gateway';

// ===== GATEWAY ROULETTE SLIDER =====
class GatewayRouletteSlider {
    constructor() {
        this.container = document.querySelector('.gateway-roulette-container');
        this.wrapper = document.querySelector('.gateway-roulette-wrapper');
        this.currentIndex = 0;
        this.autoPlayInterval = null;

        if (this.container && this.wrapper) {
            this.init();
        }
    }

    init() {
        this.images = this.wrapper.querySelectorAll('.gateway-roulette-slide');
        if (this.images.length === 0) return;

        this.startAutoPlay();
    }

    next() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
        this.updatePosition();
    }

    updatePosition() {
        const offset = this.currentIndex * 20; // 20% per slide (5 images = 100%)
        this.wrapper.style.transform = `translateX(-${offset}%)`;
    }

    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => this.next(), 3000);
    }

    stopAutoPlay() {
        clearInterval(this.autoPlayInterval);
    }
}

// ===== PARALLAX SCROLLING =====
class ParallaxScroll {
    constructor() {
        this.parallaxSections = document.querySelectorAll('.parallax-section');
        this.parallaxElements = document.querySelectorAll('.parallax-element');
        this.parallaxCards = document.querySelectorAll('.parallax-card');
        this.ticking = false;

        if (this.parallaxSections.length > 0 || this.parallaxElements.length > 0) {
            this.init();
        }
    }

    init() {
        window.addEventListener('scroll', () => this.onScroll(), { passive: true });
        this.updateParallax();
    }

    onScroll() {
        if (!this.ticking) {
            window.requestAnimationFrame(() => {
                this.updateParallax();
                this.ticking = false;
            });
            this.ticking = true;
        }
    }

    updateParallax() {
        const scrollY = window.pageYOffset;

        // Parallax backgrounds
        this.parallaxSections.forEach(section => {
            const bg = section.querySelector('.parallax-bg');
            if (bg) {
                const rect = section.getBoundingClientRect();
                const speed = 0.5;
                const yPos = -(rect.top * speed);
                bg.style.transform = `translateY(${yPos}px)`;
            }
        });

        // Parallax elements with different speeds
        this.parallaxElements.forEach((element, index) => {
            const rect = element.getBoundingClientRect();
            const speed = 0.3 + (index % 3) * 0.1; // Different speeds for variety
            const yPos = -(rect.top * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });

        // Parallax cards on scroll
        this.parallaxCards.forEach((card, index) => {
            const rect = card.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            if (rect.top < windowHeight && rect.bottom > 0) {
                const speed = 0.15;
                const yPos = (windowHeight - rect.top) * speed;
                card.style.transform = `translateY(${yPos}px)`;
            }
        });
    }
}

// ===== IMAGE SLIDER FUNCTIONALITY =====
class HeroSlider {
    constructor() {
        this.slides = document.querySelectorAll('.hero-slide');
        this.dots = document.querySelectorAll('.slider-dot');
        this.currentSlide = 0;
        this.autoPlayInterval = null;
        this.isTransitioning = false;
        
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

        // Add touch swipe support
        this.addTouchSupport();
    }

    addTouchSupport() {
        const hero = document.querySelector('.hero');
        if (!hero) return;

        let touchStartX = 0;
        let touchEndX = 0;

        hero.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        hero.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe(touchStartX, touchEndX);
        }, { passive: true });
    }

    handleSwipe(startX, endX) {
        const diff = startX - endX;
        const threshold = 50;

        if (diff > threshold) {
            // Swipe left - next slide
            this.nextSlide();
        } else if (diff < -threshold) {
            // Swipe right - previous slide
            this.prevSlide();
        }
    }

    goToSlide(n) {
        if (this.isTransitioning) return;
        this.isTransitioning = true;

        // Remove active class from all slides and dots
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        this.currentSlide = ((n % this.slides.length) + this.slides.length) % this.slides.length;
        this.slides[this.currentSlide].classList.add('active');
        this.dots[this.currentSlide].classList.add('active');

        setTimeout(() => {
            this.isTransitioning = false;
        }, 700);
    }

    nextSlide() {
        this.goToSlide(this.currentSlide + 1);
    }

    prevSlide() {
        this.goToSlide(this.currentSlide - 1);
    }

    startAutoPlay() {
        this.autoPlayInterval = setInterval(() => this.nextSlide(), 6000);
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
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        this.observer = new IntersectionObserver(
            (entries) => this.handleIntersection(entries),
            this.observerOptions
        );

        this.init();
    }

    init() {
        // New reveal classes
        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
        revealElements.forEach((el) => {
            this.observer.observe(el);
        });

        // Legacy elements for backward compatibility
        const legacyElements = document.querySelectorAll(
            'section h2, .section-subtitle, .service-card, .team-member, .portfolio-item, ' +
            '.testimonial-card, .blog-card, .stat, .placeholder-image, .info-item, .contact-form, .industry-card'
        );

        legacyElements.forEach((el) => {
            if (!el.classList.contains('reveal') && 
                !el.classList.contains('reveal-left') && 
                !el.classList.contains('reveal-right') && 
                !el.classList.contains('reveal-scale')) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(12px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                this.observer.observe(el);
            }
        });
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Handle new reveal classes
                if (entry.target.classList.contains('reveal') ||
                    entry.target.classList.contains('reveal-left') ||
                    entry.target.classList.contains('reveal-right') ||
                    entry.target.classList.contains('reveal-scale')) {
                    entry.target.classList.add('active');
                } else {
                    // Handle legacy inline styles
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
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
        this.navLinks = document.querySelectorAll('.nav-links a[href*="#"]');
        this.init();
    }

    init() {
        this.navLinks.forEach(link => {
            link.addEventListener('click', (e) => this.handleLinkClick(e));
        });

        window.addEventListener('scroll', () => this.updateActiveLink());
    }

    handleLinkClick(e) {
        const href = e.currentTarget.getAttribute('href') || '';
        const hashIndex = href.indexOf('#');
        if (hashIndex === -1) {
            return;
        }
        const hash = href.slice(hashIndex);
        const path = href.slice(0, hashIndex) || '/';
        const currentPath = window.location.pathname.replace(/\/$/, '') || '/';
        const targetPath = path.replace(/\/$/, '') || '/';

        if (hash.length <= 1 || targetPath !== currentPath) {
            return;
        }

        e.preventDefault();
        const target = document.querySelector(hash);
        if (target) {
            const offsetTop = target.getBoundingClientRect().top + window.scrollY - 80;
            window.scrollTo({ top: offsetTop, behavior: 'smooth' });
        }
    }

    updateActiveLink() {
        const sections = document.querySelectorAll('section[id]');

        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.offsetHeight;
            const scrollPosition = window.scrollY;

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                this.navLinks.forEach(link => link.classList.remove('active'));

                const activeLink = document.querySelector(
                    `.nav-links a[href$="#${section.id}"], .nav-links a[href*="#${section.id}"]`
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
        this.stats = document.querySelectorAll('.stat-number');
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
                const finalValue = entry.target.textContent.trim();
                const numericValue = parseInt(finalValue.replace(/[^\d]/g, ''), 10);

                if (!isNaN(numericValue)) {
                    this.animateCounter(entry.target, 0, numericValue, finalValue);
                }
            }
        });
    }

    animateCounter(element, start, end, originalText) {
        const duration = 2000;
        const range = end - start;
        const startTime = Date.now();

        const updateCounter = () => {
            const now = Date.now();
            const elapsed = now - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Easing function for smoother animation
            const easeOutQuart = 1 - Math.pow(1 - progress, 4);
            const current = start + range * easeOutQuart;
            const floored = Math.floor(current);
            const suffix = originalText.includes('%') ? '%' : originalText.includes('+') ? '+' : '';
            element.textContent = floored + suffix;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = originalText;
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
            const observer = new PerformanceObserver(() => {
                /* reserved for Core Web Vitals reporting */
            });

            observer.observe({ entryTypes: ['measure', 'navigation'] });
        }
    }
}

// ===== KEYBOARD ACCESSIBILITY =====
class ScrollProgress {
    constructor() {
        this.el = document.getElementById('scroll-progress');
        if (!this.el) {
            return;
        }

        this.onScroll = () => {
            const doc = document.documentElement;
            const maxScroll = doc.scrollHeight - doc.clientHeight;
            const p = maxScroll > 0 ? doc.scrollTop / maxScroll : 0;
            this.el.style.transform = `scaleX(${Math.min(1, Math.max(0, p))})`;
        };

        window.addEventListener('scroll', this.onScroll, { passive: true });
        this.onScroll();
    }
}

class BackToTop {
    constructor() {
        this.btn = document.getElementById('back-to-top');
        if (!this.btn) {
            return;
        }

        window.addEventListener(
            'scroll',
            throttle(() => {
                if (window.scrollY > 400) {
                    this.btn.classList.add('visible');
                } else {
                    this.btn.classList.remove('visible');
                }
            }, 100),
            { passive: true }
        );

        this.btn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
}

/** At most one open accordion per inspections / audits column */
class AccordionExclusive {
    constructor() {
        document.querySelectorAll('#inspections-list details.acc, #audits-list details.acc').forEach((el) => {
            el.addEventListener('toggle', () => {
                if (!el.open) {
                    return;
                }
                const parent = el.closest('#inspections-list, #audits-list');
                if (!parent) {
                    return;
                }
                parent.querySelectorAll('details.acc').forEach((other) => {
                    if (other !== el) {
                        other.removeAttribute('open');
                    }
                });
            });
        });
    }
}

// ===== SMOOTH ACCORDION =====
class SmoothAccordion {
    constructor() {
        this.accordions = document.querySelectorAll('details.acc');
        this.init();
    }

    init() {
        this.accordions.forEach(acc => {
            const summary = acc.querySelector('summary');
            const content = acc.querySelector('.acc-content');
            
            if (!summary || !content) return;

            // Prevent default behavior for smooth animation
            summary.addEventListener('click', (e) => {
                e.preventDefault();
                const isOpen = acc.hasAttribute('open');
                
                if (isOpen) {
                    this.closeAccordion(acc, content);
                } else {
                    this.openAccordion(acc, content);
                }
            });
        });
    }

    openAccordion(acc, content) {
        acc.setAttribute('open', '');
        // Force reflow
        content.offsetHeight;
        
        // Get the actual height
        const height = content.scrollHeight;
        
        // Animate
        content.style.maxHeight = '0px';
        content.style.opacity = '0';
        
        requestAnimationFrame(() => {
            content.style.maxHeight = height + 'px';
            content.style.opacity = '1';
        });
        
        // Remove max-height after animation
        setTimeout(() => {
            content.style.maxHeight = '1000px';
        }, 500);
    }

    closeAccordion(acc, content) {
        content.style.maxHeight = content.scrollHeight + 'px';
        
        requestAnimationFrame(() => {
            content.style.maxHeight = '0px';
            content.style.opacity = '0';
        });
        
        setTimeout(() => {
            acc.removeAttribute('open');
        }, 500);
    }
}

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
    new GatewayRouletteSlider();
    new ParallaxScroll();
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
    new ScrollProgress();
    new BackToTop();
    new AccordionExclusive();
    new SmoothAccordion();
    initAseanGateway();
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

