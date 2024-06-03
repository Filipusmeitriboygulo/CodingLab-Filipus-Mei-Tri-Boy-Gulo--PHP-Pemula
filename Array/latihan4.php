<?php

function tampil($row) {
    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <=$i; $j++) {
            echo $j;
        }
        echo "<br />";
    }
    for ($i = $row - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br />";
    }
}


// Pola Kedua

function cetak($row) {
    // membuat baris barutiap perulangan
    for ($i = 1; $i <= $row; $i++) {
        // membuat spasi di awal
        for ($j = $row; $j >= $i + 1; $j--) {
            echo "_";
        }
        // buat bintang kelipatan 2
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = $row -1; $i >= 1; $i--) {
        // membuat spasi di awal
        for ($j = $i; $j <= $row - 1; $j++) {
            echo "_";
        }
        // buat bintang kelipatan 2
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}


$array = [tampil(4),cetak(4)];
foreach ($array as $arr) {
    echo $arr;
}


?>