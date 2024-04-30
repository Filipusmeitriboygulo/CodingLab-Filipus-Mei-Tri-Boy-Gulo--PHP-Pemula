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

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

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
    // global $connect;
    // mysqli_query($connect, "DELETE FROM buku WHERE id = $id");
    // return mysqli_affected_rows($connect);

    global $connect;
    $book = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM buku WHERE id=$id"));
    unlink('img/' . $book["gambar"]);
    $hapus = "DELETE FROM buku WHERE id=$id";
    mysqli_query($connect, $hapus);
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
    $gambarLama = htmlspecialchars($data["gambarLama"]);


    // k=cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


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

function cari($keyword)
{
    $query = "SELECT * FROM buku WHERE 
                nama_buku LIKE '%$keyword%' OR 
                pengarang LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                tahun LIKE '%$keyword'
            ";
    return query($query);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "<script> 
                alert ('Uplod gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek apakah gambar atau bukan
    $ekstensigambarValid = ['jpg', 'png', 'jpeg', 'gif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensigambarValid)) {
        echo "<script> 
                alert ('Yang Anda Upload bukan gambar');
            </script>";
        return false;
    }

    // cek ukuran gambar 
    if ($ukuranFile > 1500000) {
        echo "<script> 
                alert ('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}
