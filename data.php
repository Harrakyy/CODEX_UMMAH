<?php include 'includes/header.php'; ?>

<?php
$paket = [
    'judul' => 'UMROH REGULER + DUBAI',
    'tanggal_keberangkatan' => '20 Desember 2025',
    'berangkat_dari' => 'Jakarta',
    'hotel_madinah' => 'Anwar Al-Madinah',
    'hotel_makkah' => 'Al-Marwah Rayyhan'
];
?>
<link rel="stylesheet" href="css/persyaratan.css">

<form action="data.php" method="POST">
    <div class="container">
        <div class="package-info">
            <h3><?php echo $paket['judul']; ?> <br> <?php echo $paket['tanggal_keberangkatan']; ?></h3>
            <p>📍 <strong>Berangkat dari:</strong> <?php echo $paket['berangkat_dari']; ?></p>
            <p>⏰ <strong>Waktu Keberangkatan:</strong> <?php echo $paket['tanggal_keberangkatan']; ?></p>
            <p>🏨 <strong>Hotel Madinah:</strong> <?php echo $paket['hotel_madinah']; ?></p>
            <p>🏨 <strong>Hotel Makkah:</strong> <?php echo $paket['hotel_makkah']; ?></p>
        </div>

        <div class="jamaah-form">
            <h3>📝 Data Jamaah</h3>
            <div class="form-group">
                <label>👤 Nama Jamaah</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label>📞 Nomor Telepon Jamaah</label>
                <input type="tel" name="telepon" required>
            </div>
            
            <div class="form-group">
                <label>📧 Alamat Email Jamaah</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>🏠 Alamat Jamaah</label>
                <input type="text" name="alamat" required>
            </div>

            <h3>Varian Kamar</h3>
            <div class="room-options">
                <label class="room-option">
                    <input type="radio" name="kamar" value="DOUBLE" required>
                    <span>DOUBLE</span><br>Rp42.000.000,-
                </label>
                <label class="room-option">
                    <input type="radio" name="kamar" value="TRIPLE" required>
                    <span>TRIPLE</span><br>Rp48.000.000,-
                </label>
                <label class="room-option">
                    <input type="radio" name="kamar" value="QUAD" required>
                    <span>QUAD</span><br>Rp57.000.000,-
                </label>
            </div>

            <button type="submit" class="submit-btn">Tambah Jamaah <span class="icon">👤</span></button>
        </div>
    </div>
</form>
