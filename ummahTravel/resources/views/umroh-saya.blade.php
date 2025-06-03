<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Umroh Saya | Nasrotul Ummah</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Poppins:wght@400;500;600&family=Scheherazade:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style6.css') }}">
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

  <!-- Konten -->
  <section class="py-5 bg-light" style="margin-top: 70px;">
    <div class="container">

        {{-- Section for Ongoing Bookings --}}
        <h2 class="mb-4">Pemesanan Umroh Belum Selesai</h2>

        @if($ongoingBookings->isEmpty())
            <p>Anda belum memiliki pemesanan Umroh yang belum selesai.</p>
        @else
            <div class="row g-4">
                @foreach ($ongoingBookings as $booking)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted">{{ $booking->name }}</h6>
                                <p class="card-text small">{{ $booking->email }}</p>
                                <p class="card-text small">Telepon: {{ $booking->phone }}</p>
                                <h6 class="card-title">Umroh keberangkatan tanggal {{ \Carbon\Carbon::parse($booking->departure_date)->format('d-m-Y') }}</h6>
                                <div class="mt-3">
                                    {{-- Tombol Update --}}
                                    <a href="{{ route('umroh-saya.edit', $booking->id) }}" class="btn btn-primary btn-sm">Update</a>

                                    {{-- Form untuk Delete --}}
                                    <form action="{{ route('umroh-saya.destroy', $booking->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Add some space between sections --}}
        <hr class="my-5">

        {{-- Section for Completed Bookings --}}
        <h2 class="mb-4">Pemesanan Umroh Selesai</h2>

        @if($completedBookings->isEmpty())
            <p>Anda belum memiliki pemesanan Umroh yang sudah selesai.</p>
        @else
            <div class="row g-4">
                @foreach ($completedBookings as $booking)
                    <div class="col-md-6">
                         <div class="card">
                            <div class="card-body">
                                {{-- You might want to display different information or options for completed bookings --}}
                                <h6 class="card-subtitle mb-2 text-muted">{{ $booking->name }} (Selesai)</h6>
                                <p class="card-text small">{{ $booking->email }}</p>
                                <p class="card-text small">Telepon: {{ $booking->phone }}</p>
                                <h6 class="card-title">Umroh keberangkatan tanggal {{ \Carbon\Carbon::parse($booking->departure_date)->format('d-m-Y') }}</h6>
                                {{-- Maybe add an option to view details or review --}}
                                {{-- <a href="#" class="btn btn-info btn-sm">Lihat Detail</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

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
      </div>

    </div>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script6.js') }}"></script>
</body>
</html> 