// Mobile Menu Toggle
document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});

// Swiper Initialization
const swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: { 
        delay: 5000, 
        disableOnInteraction: false 
    },
    pagination: { 
        el: ".swiper-pagination", 
        clickable: true 
    },
    navigation: { 
        nextEl: ".swiper-button-next", 
        prevEl: ".swiper-button-prev" 
    },
});

function animateOnScroll() {
    const elements = document.querySelectorAll('.animate');

    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        // Trigger animasi saat elemen masuk layar
        if (elementPosition < windowHeight - 100) {
            if (!element.classList.contains('visible')) {
                element.classList.add('visible');
            }
        }
    });
}

// Panggil fungsi saat halaman pertama kali dimuat dan saat di-scroll
document.addEventListener('DOMContentLoaded', animateOnScroll);
window.addEventListener('scroll', animateOnScroll);