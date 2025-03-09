<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "ummah_travel";

$mysqli = mysqli_connect($host, $user, $pass, $dbname);

if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
