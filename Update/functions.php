<?php
$connect = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $connect;
    // ambil data dari tiap elemen form
    $nama_buku = htmlspecialchars($data["nama_buku"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO buku
                VALUES 
                (NULL,'$nama_buku','$pengarang','$penerbit','$tahun','$gambar')
                ";
    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function hapus($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($connect);
}


function ubah($data)
{
    global $connect;
    // ambil data dari tiap elemen form
    $id = $data["id"];
    $nama_buku = htmlspecialchars($data["nama_buku"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE buku SET 
                nama_buku = '$nama_buku',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun = '$tahun',
                gambar = '$gambar'
                WHERE id = $id
                ";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}
