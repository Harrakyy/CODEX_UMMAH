<?php
$host = "localhost"; 
$user = "root"; 
$password = ""; 
$database = "nasrotul_ummah"; 
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
