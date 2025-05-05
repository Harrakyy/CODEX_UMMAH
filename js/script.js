let slides = document.querySelectorAll('.slide');
let dots = document.querySelectorAll('.dot');
let index = 0;


function showSlide(i) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    slides[i].classList.add('active');
    dots[i].classList.add('active');
    index = i;
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
}

function currentSlide(i) {
    showSlide(i);
}

setInterval(nextSlide, 3000);

showSlide(0);