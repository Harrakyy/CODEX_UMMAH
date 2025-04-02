let slides = document.querySelectorAll('.slide');
let index = 0;

function nextSlide() {
    slides.forEach(slide => slide.classList.remove('active'));
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

setInterval(nextSlide, 3000);
