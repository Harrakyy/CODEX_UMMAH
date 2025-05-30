<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hubungi Kami</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Nasrotul Ummah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.html">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="tentangkami.html">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="daftarumroh.html">Daftar Umroh</a></li>
          <li class="nav-item"><a class="nav-link" href="umrohsaya.html">Umroh Saya</a></li>
          <li class="nav-item"><a class="nav-link active" href="hubungi-kami.html">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Hubungi Kami -->
  <section class="contact-section py-5 mt-5">
    <div class="container">
      <h2 class="text-center mb-5">Hubungi Kami</h2>
      <div class="row g-4">
        
        <!-- Formulir -->
        <div class="col-md-6">
          <div class="p-4 bg-light rounded shadow-sm h-85">
            <h5>Kirim Pesan Kepada Kami</h5>
            <form method="POST" action="{{ route('kontak.store') }}">
                @csrf
               <div class="mb-3">
                <label for="nama" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control" id="nama" required />
                <div class="invalid-feedback">Nama Perusahaan wajib diisi.</div>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Depan</label>
                <input type="text" class="form-control" id="nama" required />
                <div class="invalid-feedback">Nama Depan wajib diisi.</div>
              </div>
               <div class="mb-3">
                <label for="nama" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control" id="nama" required />
                <div class="invalid-feedback">Nama Belakang wajib diisi.</div>
              </div>
               <div class="mb-3">
                <label for="nama" class="form-label">Jabatan Anda</label>
                <input type="text" class="form-control" id="nama" required />
                <div class="invalid-feedback">Jabatan wajib diisi.</div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
                <div class="invalid-feedback">Email tidak valid.</div>
              </div>
               <div class="mb-3">
                <label for="nama" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nama" required />
                <div class="invalid-feedback">Nomor wajib diisi.</div>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="4" required></textarea>
                <div class="invalid-feedback">Pesan tidak boleh kosong.</div>
              </div>
              <button type="submit" class="btn btn-success w-100">Kirim</button>
            </form>
          </div>
        </div>

        <!-- Info Kontak -->
        <div class="col-md-6">
          <div class="p-4 bg-light rounded shadow-sm h-95">
            <h5>Informasi Kontak</h5>
            <p>Kami siap membantu Anda. Silakan hubungi kami melalui:</p>
            <p><strong>Alamat:</strong><br>Jl. RS Fatmawati Raya No 215, Cilandak, Jakarta Selatan</p>
            <p><strong>Email:</strong><br><a href="mailto:nasrotulummah@email.com">nasrotulummah@email.com</a></p>
            <p><strong>Telepon:</strong><br><a href="tel:081234567890">0812-3456-7890</a></p>
            <p><strong>Jam Operasional:</strong><br>Senin - Jumat (08.00 - 16.00)</p>
          </div>
        </div>

      </div>
    </div>
  </section>

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
  <script src="script3.js"></script>
</body>
</html>
