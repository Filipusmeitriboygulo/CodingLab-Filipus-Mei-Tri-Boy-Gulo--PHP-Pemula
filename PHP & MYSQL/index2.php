<?php
// Connect Database
$connect = mysqli_connect("localhost", "root", "", "phpdasar");



// query data mahasiswa
$result = mysqli_query($connect, "SELECT * FROM buku");

// ambil data buku(fetch) dari objek result
// mysqli_fetch_row() (Mengembalikan array numeric)
// mysqli_fetch_assoc() (Mengembalikan array assosiative)
// mysqli_fetch_array() (Mengembalikan array assosiative dan numerik)
// mysqli_fetch_object() 


// while ($buku = mysqli_fetch_assoc($result)) {;
//     var_dump($buku);
// }

// cek 
// if (!$result) {
//     echo mysqli_error($connect);
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>


    <h1>Daftar Mahasiswa </h1>

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><?= $row["nama_buku"] ?></td>
                <td><?= $row["pengarang"] ?></td>
                <td><?= $row["penerbit"] ?></td>
                <td><?= $row["tahun"] ?></td>
                <td><img src="img/<?= $row["gambar"] ?> " width="50px" alt=""></td>
            </tr>
            <?php $i++  ?>
        <?php endwhile; ?>

    </table>
</body>

</html>