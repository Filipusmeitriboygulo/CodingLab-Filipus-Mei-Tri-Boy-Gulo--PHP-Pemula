<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("Location : login.php");
}
// Connect Database

require 'functions.php';
// pagination
// konfigurasi

$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM buku"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData =  ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;



$buku = query("SELECT * FROM buku LIMIT $awalData, $jumlahDataPerHalaman");

if (isset($_POST["cari"])) {
    $buku = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        form {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <h1>Selamat Datang di Halaman Admin</h1>
    <a href="logout.php">Logout</a>
    <h2>Daftar Buku</h2>
    <a href="tambah.php">Tambah Data Buku</a>
    <br>


    <form action="" method="post">

        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <br>

    <!-- navigasi -->

    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>"> &laquo;</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i ?>" style="font-weight:bold; color:red"><?= $i ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>"> &raquo;</a>
    <?php endif; ?>


    <br>

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