<?php
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
        "nama_buku" => "Ayo Belajar",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "6.jpg"
    ],
    [
        "nama_buku" => "Pemograman Kecerdasan Buatan",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "7.jpg"
    ],
    [
        "nama_buku" => "Pandanban Hukum Konsitusi",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "8.jpg"
    ],
    [
        "nama_buku" => "Disenting Opinion",
        "pengarang" => "Ilham",
        "penerbit" => "Erlangaa",
        "tahun" => "2010",
        "gambar" => "9.jpg"
    ],
    [
        "nama_buku" => "Stoic: Cara Hidup santuy",
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


        
        ul li  {
            list-style: none;
        }

        ul li a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1> Daftar Buku</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $book["nama_buku"]; ?>&pengarang=<?= $book["pengarang"]; ?>&penerbit=<?= $book["penerbit"]; ?>&tahun=<?= $book["tahun"]; ?>&gambar=<?= $book["gambar"] ?>"><?= $book["nama_buku"] ?></a>
            </li>
    </ul>
<?php endforeach; ?>
</body>

</html>