<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nasrotul Ummah | Daftar Umroh</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@400;500;600&family=Scheherazade:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100 z-3">
    <div class="container">
      <a class="navbar-brand arabic-logo" href="/">Nasrotul Ummah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="/tentang-kami">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link active" href="/daftar-umroh">Daftar Umroh</a></li>
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
      <h1 class="display-4 fw-bold">Umroh Sekarang Bersama</h1>
      <h1 class="display-4 fw-bold">Nasrotul Ummah</h1>
      <p class="lead">Memberikan pelayanan Terbaik demi keamanan & kenyamanan ibadah sesuai dengan sunnah</p>
    </div>
  </header>

<!-- Form Umroh -->
<section class="py-5 bg-light">
  <div class="container">
    <h4 class="mb-4">Program Umroh 2025</h4>
    <p>Tanggal keberangkatan terdekat <a class="text-success">program umroh</a> Nasrotul Ummah.</p>
    
    <div class="card p-4 shadow-sm">
      <h5 class="mb-4">Form Jamaah Umroh</h5>
      <form action="{{ route('umroh-saya.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email anda *</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="name" class="form-label">Nama anda *</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama depan anda" required>
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Nomor telepon *</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="departure_date" class="form-label">Tanggal keberangkatan (dd/mm/yyyy)</label>
          <input type="date" class="form-control" id="departure_date" name="departure_date">
        </div>
        <button type="submit" class="btn btn-success w-100">Pesan</button>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-3">
        <h6  class="text-success">Sosial Media</h6>
         <p class="small">Jangan lewatkan informasi lainnya di sosial media rabbanihtour</p>
        <small>@ummahTravel<br>@ummahTravel.pdg<br>@ummahTravel.bdg</small>
      </div>
      <div class="col-md-3 mb-3">
        <h6  class="text-success">Kantor Jakarta</h6>
        <small>Jl. RS Fatmawati Raya No.215, RT.5/RW.3, Cilandak Barat, Kota Jakarta Selatan</small>
      </div>
      <div class="col-md-3 mb-3">
        <h6  class="text-success">Kantor Bandung</h6>
        <small>Jl. Juang No.84B, Kec. Sukajadi, Kota Bandung</small>
      </div>
      <div class="col-md-3 mb-3">
        <h6  class="text-success">Kantor Padang</h6>
        <small>Jl. Koto Tuo No.4, Balai Gadang, Kec. Koto Tangah, Kota Padang</small>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script4.js') }}"></script>
</body>
</html> 