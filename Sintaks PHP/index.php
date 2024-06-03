<?php

// Standar Output
// echo, print
// print_r (Akan lebih banyak Digunakan untuk array)
// var_dump (Akan lrbih banyak digunakan disaat debugging)


echo "Filipus Mei Tri Boy Gulo" ."<br>" ;

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable dan tipe data
// Varibel
// Tidak boleh diawlai dengan angka, tapi boleh mengandung


// Operator
// aritmatika
// + - * / %


$a = 20;
$b = 10;
echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";

// Penggabungan string /concatenation 
// .

$nama_depan = "Filipus Mei tri Boy ";
$nama_belakang = "Gulo";
echo $nama_depan . " " . $nama_belakang . "<br>";

// Asignment
// =, +=, -=, *=, /=, %=, .=

// Perbandingan
// <, >, <=, >=, ==, !=

var_dump( 1 < 5);
echo "<br>";
var_dump(1 > 5);
echo "<br>";
var_dump(1 == "5");
echo "<br>";


// identitas (digunakan untuk mengecek tipe datanya juga)
// ===, !==
var_dump(1 === "1");
echo "<br>";
// Logika
// &&, ||, !
$x = 10;
$y =20;

$w= 30;
$z = 20;

var_dump($x < 20 && $x % 2 ==0);
echo "<br>";
var_dump($w < 20 && $w % 2 == 0);
echo "<br>";
var_dump($w < 20 || $w % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Perkenalkan nama saya <?php echo $nama ?> </h1>
    <h2>Contoh Penggunaan <?php echo "PHP didalam HTML" ?></h2>
    <?php echo "<h3> Contoh Penggunaan HTML didalam PHP </h3>" ?>
</body>

</html>