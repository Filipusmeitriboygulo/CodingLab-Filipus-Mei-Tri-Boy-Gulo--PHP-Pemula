<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location : login.php");
}
require 'functions.php';
// ambil data URL
$id = $_GET["id"];

// query data buku berdasarkan id
$book = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    // cek apakah data berhasil databerhasil ditambahkan atau tidak

    if (ubah($_POST) > 0) {
        echo "
        <script> 
            alert ('Data Berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script> 
            alert ('Data Gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>

    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Edit Data Buku</h1>

    <form action="" method="post" enctype="multipart/form-data">


        <ul>
            <input type="hidden" name="id" value="<?= $book["id"] ?>">
            <input type="hidden" name="gambarLama" value="<?= $book["gambar"] ?>">
            <li>
                <label for="nama_buku">Nama Buku :</label>
                <input type="text" name="nama_buku" id="nama_buku" required value="<?= $book["nama_buku"] ?>">
            </li>
            <li>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" required value="<?= $book["pengarang"] ?>">
            </li>
            <li>
                <label for=" penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $book["penerbit"] ?>">
            </li>
            <li>
                <label for=" tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required value="<?= $book["tahun"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label> <br>
                <img src="img/<?= $book["gambar"] ?>" alt="" width="40px"> <br>
                <input type="file" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type=" submit" name="submit">Edit Data!</button>
            </li>
        </ul>

    </form>
    <a href="index.php">Kembali</a>

</body>

</html>