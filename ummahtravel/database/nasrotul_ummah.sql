
CREATE DATABASE IF NOT EXISTS nasrotul_ummah;
USE nasrotul_ummah;


CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS jamaah_umroh (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NULL,  
    email VARCHAR(255) NOT NULL,
    nama VARCHAR(255) NOT NULL,
    nomor_telepon VARCHAR(20) NOT NULL,
    tanggal_keberangkatan DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);


CREATE INDEX idx_jamaah_email ON jamaah_umroh(email);
CREATE INDEX idx_jamaah_tanggal ON jamaah_umroh(tanggal_keberangkatan);


CREATE TABLE IF NOT EXISTS kontak_pesan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_perusahaan VARCHAR(100) NOT NULL,
    nama_depan VARCHAR(50) NOT NULL,
    nama_belakang VARCHAR(50) NOT NULL,
    jabatan VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nomor_telepon VARCHAR(20) NOT NULL,
    pesan TEXT NOT NULL,
    tanggal_kirim TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE INDEX idx_kontak_email ON kontak_pesan(email);
