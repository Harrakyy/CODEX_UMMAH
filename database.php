<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM library ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ummah Travel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        .header {
            background-color: #4c104c;
            color: white;
            text-align: center;
            padding: 15px;
        }
        .navigation {
            background-color: #4c104c;
            padding: 10px;
            display: flex;
            justify-content: center;
        }
        .navigation a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }
        .news-section {
            text-align: center;
            margin: 20px;
        }
        .table {
            background: white;
        }
        .footer {
            background-color: #4c104c;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>UMMAH TRAVEL</h1>
    </div>
    <div class="navigation">
        <a href="#">Beranda</a>
        <a href="#">Paket</a>
        <a href="#">Berita</a>
        <a href="#">Tentang Kami</a>
        <a href="#">Kontak</a>
    </div>

    <div class="news-section">
        <h2>Daftar Buku Perjalanan</h2>
        <div class="container">
            <button type="button" class="btn btn-primary" onclick="location.href='add.php'">Tambah Buku</button><br /><br />

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Penerbit</th>
                        <th>Jumlah</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($book = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        $no++;
                        echo "<td><img src='picture/" . $book['picture'] . "' width='100'></td>";
                        echo "<td>" . $book['name'] . "</td>";
                        echo "<td>" . $book['category'] . "</td>";
                        echo "<td>" . $book['publisher'] . "</td>";
                        echo "<td>" . $book['count'] . "</td>";
                        echo "<td>
                            <a href='edit.php?id=$book[id]' class='btn btn-warning btn-sm'>Edit</a> 
                            <a href='delete.php?id=$book[id]' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Delete</a>
                        </td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Ummah Travel</p>
    </div>
</body>
</html>
