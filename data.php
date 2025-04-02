<?php include 'includes/header.php'; ?>

<form action="data.php" method="POST">
    <div class="container">
        
        <div class="package-info">
            <h3>Paket yang Dipilih</h3>
            <p><strong>Berangkat dari:</strong> Jakarta</p>
            <p><strong>Waktu Keberangkatan:</strong> 10 Mei 2025, 10:00 WIB</p>
            <p><strong>Hotel Tujuan:</strong></p>
            <ul>
                <li>Hotel A - Mekkah</li>
                <li>Hotel B - Madinah</li>
            </ul>
        </div>

        
        <div class="jamaah-form">
            <h3>Data Jamaah</h3>

        
            <div class="personal-info">
                <input type="text" name="nama" placeholder="Nama Jamaah" required>
                <input type="tel" name="telepon" placeholder="Nomor Telepon" required>
                <input type="email" name="email" placeholder="Email Jamaah" required>
            </div>

    
            <div class="address-info">
                <input type="text" name="alamat" placeholder="Alamat Jamaah" required>
            </div>

        
            <div class="room-selection">
                <h4>Varian Kamar</h4>
                <div class="room-option" id="double-room">
                    <p>DOUBLE</p>
                    <p>Rp42.000.000,-</p>
                </div>
                <div class="room-option" id="triple-room">
                    <p>TRIPEL</p>
                    <p>Rp48.000.000,-</p>
                </div>
                <div class="room-option" id="quad-room">
                    <p>QUAD</p>
                    <p>Rp57.000.000,-</p>
                </div>
            </div>

            <button type="submit">Tambah Jamaah <span class="icon">👤</span></button>
        </div>
    </div>
</form>

