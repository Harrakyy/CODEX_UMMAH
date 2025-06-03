<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pemesanan | Nasrotul Ummah</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@400;500;600&family=Scheherazade:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style6.css') }}"> {{-- Reusing style6.css, adjust if needed --}}
</head>
<body>
  
   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top w-100 z-3">
    <div class="container">
      <a class="navbar-brand arabic-logo" href="/">Nasrotul Ummah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/daftar-umroh">Daftar Umroh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/umroh-saya">Umroh Saya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten Edit Form -->
  <section class="py-5 bg-light" style="margin-top: 70px;">
    <div class="container">
        <h2 class="mb-4">Edit Pemesanan Umroh</h2>

        <div class="card p-4 shadow-sm">
            <form action="{{ route('umroh-saya.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT') {{-- Use PUT method for updates --}}

                <div class="mb-3">
                  <label for="email" class="form-label">Email anda *</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" value="{{ old('email', $booking->email) }}" required>
                  @error('email')
                      <div class="text-danger small">{{ $message }}</div>
                  @enderror
                </div>

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="name" class="form-label">Nama anda *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama depan anda" value="{{ old('name', $booking->name) }}" required>
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="phone" class="form-label">Nomor telepon *</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor Telepon" value="{{ old('phone', $booking->phone) }}" required>
                    @error('phone')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="mb-3">
                  <label for="departure_date" class="form-label">Tanggal keberangkatan (dd/mm/yyyy)</label>
                  <input type="date" class="form-control" id="departure_date" name="departure_date" value="{{ old('departure_date', $booking->departure_date) }}">
                  @error('departure_date')
                      <div class="text-danger small">{{ $message }}</div>
                  @enderror
                </div>

                {{-- Status Field --}}
                <div class="mb-3">
                    <label for="status" class="form-label">Status Pemesanan</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="pending" {{ old('status', $booking->status) == 'pending' ? 'selected' : '' }}>Belum Selesai</option>
                        <option value="completed" {{ old('status', $booking->status) == 'completed' ? 'selected' : '' }}>Selesai</option>
                        <option value="cancelled" {{ old('status', $booking->status) == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                    </select>
                    @error('status')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Update Pesanan</button>
                <a href="{{ route('umroh-saya.index') }}" class="btn btn-secondary w-100 mt-2">Batal</a>
            </form>
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
        <h5 class="text-success">Kantor Bandung</h5>
        <p class="small">
          Jl. Jurang No.84, Pasteur, Kec. Sukajadi,<br>
          Kota Bandung
        </p>
      </div>

      <div class="col-md-3 mb-4">
        <h5 class="text-success">Kantor Padang</h5>
        <p class="small">
          Jl. Koto Tuo No.4, Balai Gadang,<br>
          Kec. Koto Tangah, Kota Padang
        </p>
      </n></li>

    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script6.js') }}"></script> {{-- Reusing script6.js, adjust if needed --}}
</body>
</html> 