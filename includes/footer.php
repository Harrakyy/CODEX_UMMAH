<footer>
    <p>© 2025 Nasrotul Ummah</p>
</footer>

<script src="js/script.js"></script>
<script>
let slideIndex = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("active");
        dots[i].classList.remove("active");
        if (i === index) {
            slide.classList.add("active");
            dots[i].classList.add("active");
        }
    });
    slideIndex = index;
}

function nextSlide() {
    slideIndex = (slideIndex + 1) % slides.length;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex = (slideIndex - 1 + slides.length) % slides.length;
    showSlide(slideIndex);
}

function currentSlide(index) {
    showSlide(index);
}

showSlide(slideIndex);

setInterval(nextSlide, 5000);
</script>
</body>
</html>
