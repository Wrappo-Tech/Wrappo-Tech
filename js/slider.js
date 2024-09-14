const slides = document.querySelectorAll('.slide');
const navDots = document.querySelectorAll('.nav-dot');
let currentSlide = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active', 'previous');
        navDots[i].classList.remove('active');
        
        if (i === index) {
            slide.classList.add('active');
            navDots[i].classList.add('active');
        } else if (i === currentSlide) {
            slide.classList.add('previous');
        }
    });

    currentSlide = index;
}

navDots.forEach((dot, index) => {
    dot.addEventListener('click', () => showSlide(index));
});

setInterval(() => {
    const nextSlide = (currentSlide + 1) % slides.length;
    showSlide(nextSlide);
}, 3000);
