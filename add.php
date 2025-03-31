<?php
include_once("connector.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $publisher = $_POST['publisher'];
    $count = $_POST['count'];
    $picture = $_FILES['picture']['name'];

    move_uploaded_file($_FILES['picture']['tmp_name'], "picture/".$picture);

    $query = "INSERT INTO library (name, category, publisher, count, picture) VALUES ('$name', '$category', '$publisher', '$count', '$picture')";

    if (mysqli_query($mysqli, $query)) {
        echo "<script>alert('Buku berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Buku Baru</h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Buku:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kategori:</label>
                <input type="text" name="category" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Penerbit:</label>
                <input type="text" name="publisher" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jumlah:</label>
                <input type="number" name="count" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Gambar:</label>
                <input type="file" name="picture" class="form-control-file" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
