<?php
// Asosiative Array

$books = [
    [
        "nama_buku" => "Representatif Filsafat",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "1.jpg"
    ],

    [
        "nama_buku" => "Ilmu Pengetahuan",
        "pengarang" => "Dhia",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "2.jpg"
    ],
    [
        "nama_buku" => "Merdeka",
        "pengarang" => "Syahrul",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "3.jpg"
    ],
    [
        "nama_buku" => "Duta Bahasa",
        "pengarang" => "Deka",
        "penerbit" => "Erlangaa",
        "tahun" => "2011",
        "gambar" => "4.jpg"
    ],
    [
        "nama_buku" => "Bisa Menjadi Orang",
        "pengarang" => "Firuu",
        "penerbit" => "Erlangaa",
        "tahun" => "2013",
        "gambar" => "5.jpg"
    ],
    [
        "nama_buku" => "Representatif Filsafat",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "6.jpg"
    ],
    [
        "nama_buku" => "Representatif Filsafat",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "7.jpg"
    ],
    [
        "nama_buku" => "Representatif Filsafat",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "8.jpg"
    ],
    [
        "nama_buku" => "Representatif Filsafat",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "9.jpg"
    ],
    [
        "nama_buku" => "Representatif Filsafat",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "10.jpg"
    ],

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
            font-size: 22px;
            /* display: flex;
            flex-wrap: wrap;
            flex-direction: column; */
        }
    </style>
</head>

<body>
    <h1> Daftar Buku</h1>

    <?php foreach ($books as $book) : ?>

        <ul>
            <li><img style="height: 200px; width:200px;" src="img/<?= $book["gambar"]; ?>" alt=""></li>
            <li>Nama Buku : <?= $book["nama_buku"] ?></li>
            <li>Pengarang : <?= $book["pengarang"] ?></li>
            <li>Penerbit : <?= $book["penerbit"] ?></li>
            <li>Tahun Terbit : <?= $book["tahun"] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>