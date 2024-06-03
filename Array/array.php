<?php
// Array
// Variabel memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antaa key dan value
// key-nya adalah index

// inisialiasi array
$hari = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", " Sunday"];


// Menampilkan array
// var_dump() /print_r()
// var dump menampilkajn keselrurhan sampai dengan tipe data elemen 
var_dump($hari);
echo "<br>";
// print_r menampilkan hanya elemen array tanpa itipe ata si elemen
print_r($hari);
echo "<br>";
echo $hari[3];


// menambbhakan elemen baru pada array
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
// 
