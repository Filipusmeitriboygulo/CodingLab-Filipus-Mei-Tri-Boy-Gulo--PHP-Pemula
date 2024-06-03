<?php

$siswa = [
    ["Nama" => "Filipus Mei Tri Boy Gulo", "NISN" => "2021573010022", "Jurusan" => "IPA", "Email" => "filipusmeitriboygulo@gmail.com"],
    ["Nama" => "Muhammad Rival", "NISN" => "2021573010054", "Jurusan" => "IPA", "Email" => "rivalgopel@gmail.com"],
    ["Nama" => "Musaed Hasanuddin", "NISN" => "2021573010001", "Jurusan" => "IPA", "Email" => "saedganteng@gmail.com"],
    ["Nama" => "Rizki Ananda", "NISN" => "2021573010022", "Jurusan" => "IPA", "Email" => "filipusmeitriboygulo@gmail.com"],
    ["Nama" => "Syahli Kurniawan", "NISN" => "2021573010054", "Jurusan" => "IPA", "Email" => "rivalgopel@gmail.com"],
    ["Nama" => "Rifki Yudha", "NISN" => "2021573010001", "Jurusan" => "IPA", "Email" => "saedganteng@gmail.com"],
    ["Nama" => "Rifki Waghyu Aulia", "NISN" => "2021573010001", "Jurusan" => "IPA", "Email" => "saedganteng@gmail.com"]
];




function cariSiswa($siswa, $nama)
{
    foreach ($siswa as $s) {
        if ($s["Nama"] == $nama) {
            return $s;
        }
    }
    return "Siswa tidak ditemukan";
}

$hasil = cariSiswa($siswa, "Muhammad Rival");
print_r($hasil);
?>