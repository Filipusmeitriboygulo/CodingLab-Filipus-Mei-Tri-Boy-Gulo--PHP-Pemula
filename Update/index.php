<?php
// Connect Database

require 'functions.php';

$buku = query("SELECT * FROM buku");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Selamat Datang di Halaman Admin</h1>
    <h2>Daftar Buku</h2>
    <a href="tambah.php">Tambah Data Buku</a>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($buku as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Are you sure you want to delete this data')">Hapus</a>
                </td>
                <td><?= $row["nama_buku"] ?></td>
                <td><?= $row["pengarang"] ?></td>
                <td><?= $row["penerbit"] ?></td>
                <td><?= $row["tahun"] ?></td>
                <td><img src="img/<?= $row["gambar"] ?> " width="50px" alt=""></td>
            </tr>
            <?php $i++  ?>
        <?php endforeach; ?>

    </table>
</body>

</html>