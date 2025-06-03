<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang kami | Nasrotul Ummah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100 z-3">
        <div class="container">
            <a class="navbar-brand" href="/">Nasrotul Ummah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/tentang-kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="/daftar-umroh">Daftar Umroh</a></li>
                    <li class="nav-item"><a class="nav-link" href="/umroh-saya">Umroh Saya</a></li>
                    <li class="nav-item"><a class="nav-link" href="/hubungi-kami">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <header class="jumbotron d-flex align-items-center justify-content-center text-white text-center">
        <div class="overlay"></div>
        <div class="content position-relative">
            <h1 class="display-4 fw-bold">Tentang Nasrotul Ummah</h1>
            <p class="lead">Nasrotul Ummah adalah biro perjalanan haji dan umrah yang sesuai sunnah</p>
        </div>
    </header>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <h5 class="text-success">Sosial Media</h5>
                    <p class="small">Jangan lewatkan informasi lainnya di sosial media rabbanihtour</p>
                    <ul class="list-unstyled small">
                        <li>@ummahTravel</li>
                        <li>@ummahTravel.pdg</li>
                        <li>@ummahTravel.bdg</li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="text-success">Kantor Jakarta</h5>
                    <p class="small">
                        Jl. RS. Fatmawati Raya No.215, RT.5/RW.3, Cilandak Barat,<br>
                        Kec. Cilandak, Kota Jakarta Selatan
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="text-success">Kantor Padang</h5>
                    <p class="small">
                        Jl. Koto Tuo No.4, Balai Gadang,<br>
                        Kec. Koto Tangah, Kota Padang
                    </p>
                </div>

                <div class="col-md-3 mb-4">
                    <h5 class="text-success">Kantor Bandung</h5>
                    <p class="small">
                        Jl. Jurang No.84, Pasteur, Kec. Sukajadi,<br>
                        Kota Bandung
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script2.js') }}"></script>
</body>
</html> 