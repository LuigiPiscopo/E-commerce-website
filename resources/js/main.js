// // CAROSELLO
// // Animazione per il pulsante save
// document.getElementById('saveButton').addEventListener('click', function() {
//     this.classList.toggle('active');
//     const icon = this.querySelector('i');
//     icon.classList.toggle('far');
//     icon.classList.toggle('fas');
// });

// // Inizializzazione del carousel con effetti personalizzati
// document.addEventListener('DOMContentLoaded', function() {
//     const carousel = new bootstrap.Carousel(document.getElementById('articleCarousel'), {
//         interval: 5000,
//         ride: 'carousel',
//         wrap: true
//     });

//     // Aggiunge fade in/out alle immagini durante la transizione
//     const carouselItems = document.querySelectorAll('.carousel-item');
//     carouselItems.forEach(item => {
//         item.addEventListener('transitionend', function() {
//             if (this.classList.contains('active')) {
//                 this.style.opacity = 1;
//             }
//         });

//         item.addEventListener('transitionstart', function() {
//             if (!this.classList.contains('active')) {
//                 this.style.opacity = 0;
//             }
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('articleCarousel');
    if (!carousel) return;

    // Initialize Bootstrap carousel
    const bsCarousel = new bootstrap.Carousel(carousel, {
        interval: 5000,
        ride: 'carousel',
        wrap: true
    });

    // Image Loading & Transitions
    const handleImageLoad = (img) => {
        img.style.opacity = '0';
        img.addEventListener('load', () => {
            if (img.closest('.carousel-item').classList.contains('active')) {
                img.style.opacity = '1';
            }
        });
    };

    // Initialize all images
    carousel.querySelectorAll('.carousel-item img').forEach(handleImageLoad);

    // Handle slide transitions
    carousel.addEventListener('slide.bs.carousel', (event) => {
        const currentItem = event.relatedTarget;
        const img = currentItem.querySelector('img');

        // Pre-load next image
        if (!img.complete) {
            img.src = img.src;
        }

        // Reset all images
        carousel.querySelectorAll('.carousel-item img').forEach(img => {
            img.style.opacity = '0';
            img.style.transform = 'scale(0.95)';
        });
    });

    carousel.addEventListener('slid.bs.carousel', (event) => {
        const currentItem = event.relatedTarget;
        const img = currentItem.querySelector('img');

        // Show current image with animation
        setTimeout(() => {
            img.style.opacity = '1';
            img.style.transform = 'scale(1)';
        }, 50);
    });

    // Touch Gestures
    let touchStartX = 0;
    let touchEndX = 0;

    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    carousel.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    const handleSwipe = () => {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            bsCarousel.next();
        }
        if (touchEndX > touchStartX + swipeThreshold) {
            bsCarousel.prev();
        }
    };

    // Lazy Loading
    const lazyLoadImages = () => {
        const options = {
            root: null,
            rootMargin: '50px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
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
        }, options);

        carousel.querySelectorAll('img[data-src]').forEach(img => {
            observer.observe(img);
        });
    };

    lazyLoadImages();
});