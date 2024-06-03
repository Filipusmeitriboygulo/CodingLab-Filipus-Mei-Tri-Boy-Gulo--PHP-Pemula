<?php

require 'functions.php';

if (isset($_POST["submit"])) {


    // cek apakah data berhasil databerhasil ditambahkan atau tidak

    if (tambah($_POST) > 0) {
        echo "
        <script> 
            alert ('Data Berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script> 
            alert ('Data Gagal ditambahkan');
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
    <title>Tambah Data Buku</title>

    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Buku</h1>

    <form action="" method="post">


        <ul>
            <li>
                <label for="nama_buku">Nama Buku :</label>
                <input type="text" name="nama_buku" id="nama_buku" required>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" required>
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>
    <a href="index.php">Kembali</a>

</body>

</html>