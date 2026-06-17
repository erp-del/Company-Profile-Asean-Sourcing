/**
 * Asean Sourcing gateway — portrait cards (keyboard + video polish).
 */
export function initAseanGateway() {
    const root = document.querySelector('[data-asean-gateway]');
    if (!root) {
        return;
    }

    const cards = [...root.querySelectorAll('a.gateway-card')];

    cards.forEach((card) => {
        const video = card.querySelector('video');
        if (!video) {
            return;
        }

        video.play().catch(() => {});

        const play = () => video.play().catch(() => {});
        card.addEventListener('mouseenter', play);
        card.addEventListener('focus', play);
    });

    document.addEventListener('keydown', (e) => {
        if (document.body.dataset.gatewayKeyboard !== '1') {
            return;
        }
        if (e.key === '1') {
            cards[0]?.focus();
        }
        if (e.key === '2') {
            cards[1]?.focus();
        }
        if (e.key === '3') {
            cards[3]?.focus();
        }
    });

    root.addEventListener('mouseenter', () => {
        document.body.dataset.gatewayKeyboard = '1';
    });

    // Initialize product slideshow
    initProductSlideshow(root);
}

/**
 * Initialize product image slideshow with smooth fade transitions
 */
function initProductSlideshow(root) {
    const slides = root.querySelectorAll('.slideshow-slide');
    if (slides.length === 0) return;

    let currentIndex = 0;
    const slideInterval = 5000; // 5 seconds

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // Auto-rotate slides every 5 seconds
    setInterval(nextSlide, slideInterval);
}