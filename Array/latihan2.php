<?php

$mahasiswa = [
    ["Filipus Mei Tri Boy Gulo", "2021573010022", "Teknik Informatika", "filipusmeitriboygulo@gmail.com"],
    ["Muhammad Rival", "2021573010054", "Teknik Informatika", "rivalgopel@gmail.com"],
    ["Musaed Hasanuddin", "2021573010001", "Teknik Informatika", "saedganteng@gmail.com"],
    ["Rizki Ananda", "2021573010022", "Teknik Informatika", "filipusmeitriboygulo@gmail.com"],
    ["Syahli Kurniawan", "2021573010054", "Teknik Informatika", "rivalgopel@gmail.com"],
    ["Rifki Yudha", "2021573010001", "Teknik Informatika", "saedganteng@gmail.com"],
    ["Rifki Waghyu Aulia", "2021573010001", "Teknik Informatika", "saedganteng@gmail.com"]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

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
    }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa Berprestasi</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>

            <li>Nama : <?= $mhs[0] ?></li>
            <li>NIM : <?= $mhs[1] ?></li>
            <li>Prodi : <?= $mhs[2] ?></li>
            <li>Email : <?= $mhs[3] ?></li>

        </ul>
    <?php endforeach; ?>
</body>

</html>