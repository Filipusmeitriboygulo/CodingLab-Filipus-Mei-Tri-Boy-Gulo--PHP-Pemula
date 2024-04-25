<?php
if (
    !isset($_GET["nama"])
    || !isset($_GET["pengarang"])
    || !isset($_GET["penerbit"])
    || !isset($_GET["tahun"])
    || !isset($_GET["gambar"])
) {
    // redirect
    header("Location:latihan1.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<style>
    h1 {
        font-size: 40px;
        font-variant: small-caps;

    }

    ul li {
        list-style: none;
        font-weight: 500;
        font-style: italic;
        font-variant: small-caps;
        font-size: 18px;
    }
</style>


<body>
    <h1>Detail Buku</h1>

    <ul>
        <li><img style="height: 200px; width:200px;" src="img/<?= $_GET["gambar"] ?> " alt=""></li>
        <li>Nama Buku :<?= $_GET["nama"] ?> </li>
        <li>Pengarang :<?= $_GET["pengarang"] ?> </li>
        <li>Penerbit :<?= $_GET["penerbit"] ?> </li>
        <li>Tahun Terbit :<?= $_GET["tahun"] ?> </li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Buku</a>
</body>

</html>