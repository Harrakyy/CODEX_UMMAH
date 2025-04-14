
CREATE DATABASE IF NOT EXISTS nasrotul_ummah;
USE nasrotul_ummah;


CREATE TABLE jamaah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    alamat TEXT NOT NULL,
    kamar ENUM('DOUBLE', 'TRIPLE', 'QUAD') NOT NULL,
    harga DECIMAL(15,2) NOT NULL,
    tanggal_keberangkatan DATE NOT NULL,
    waktu_keberangkatan TIME NOT NULL,
    berangkat_dari VARCHAR(255) NOT NULL
);


CREATE TABLE slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    title VARCHAR(255)
);


CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    description TEXT
);

CREATE TABLE haji (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    description TEXT
);


CREATE TABLE paket_umroh (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image VARCHAR(255),
    title VARCHAR(255),
    price INT,
    departure DATE
);

