<?php

function generatePattern($rows)
{
    $pattern = [];

    // Bagian atas pola
    for ($i = 1; $i <= $rows; $i++) {
        $pattern[] = str_repeat('*', $i);
    }

    // Bagian bawah pola
    for ($i = $rows - 1; $i >= 1; $i--) {
        $pattern[] = str_repeat('*', $i);
    }

    return $pattern;
}

function printPattern($pattern)
{
    foreach ($pattern as $row) {
        echo $row . "\n";
    }
}

// Contoh penggunaan
$pattern = generatePattern(4);

// Bagian bawah pola harus diprint terbalik
$pattern = array_reverse($pattern);

printPattern($pattern);
