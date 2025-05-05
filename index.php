<?php include 'includes/header.php'; ?>

<section class="hero">
<button class="prev" onclick="prevSlide()">&#10094;</button>
    <div class="slider">
        <div class="slide active">
            <img src="jpg/mekkah.jpg" alt="Destinasi Mekkah">
        </div>
        <div class="slide">
            <img src="jpg/madinah.jpg" alt="Destinasi Madinah">
        </div>
        <div class="slide">
            <img src="jpg/kaabah.jpg" alt="Ka'bah">
        </div>
    </div>
    <button class="next" onclick="nextSlide()">&#10095;</button>
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

            setInterval(nextSlide, 5000);
            </script>

    <div class="dots-container">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>
</section>


<section class="news">
    <h2>Makkah/Madinah News</h2>
    <div class="news-container">
        <div class="news-box">
            <img src="jpg/mekkah.jpg" alt="Berita Makkah">
            <p>Berita terbaru dari Makkah...</p>
        </div>
        <div class="news-box">
            <img src="jpg/madinah.jpg" alt="Berita Madinah">
            <p>Berita terbaru dari Madinah...</p>
        </div>
    </div>
</section>

<section class="haji">
    <h2>Haji Plus dan Furoda</h2>
    <div class="haji-container">
        <div class="haji-box">
            <img src="jpg/haji.jpg" alt="Haji Plus">
            <p>Informasi terbaru tentang Haji Plus dan Furoda...</p>
        </div>
    </div>
</section>

<section class="paket">
    <h2>PAKET UMROH</h2>
    <div class="paket-list">
        <div class="paket-card">
            <img src="jpg/haji.jpg" alt="Paket Umroh A">
            <div class="paket-info">
                <p><strong>Rp 30.000.000</strong></p>
                <p>Keberangkatan: 10 Mei 2025</p>
                <div class="paket-title">UMROH AL-ULA</div>
            </div>
        </div>
        <div class="paket-card">
            <img src="jpg/haji.jpg" alt="Paket Umroh B">
            <div class="paket-info">
                <p><strong>Rp 35.000.000</strong></p>
                <p>Keberangkatan: 15 Juni 2025</p>
                <div class="paket-title">UMROH AL-ULA</div>
            </div>
        </div>
        <div class="paket-card">
            <img src="jpg/haji.jpg" alt="Paket Haji Plus">
            <div class="paket-info">
                <p><strong>Rp 50.000.000</strong></p>
                <p>Keberangkatan: 20 Juli 2025</p>
                <div class="paket-title">UMROH AL-ULA</div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
