<?php

function generateStar($rows) {

    $star = [];

    // Membangun pola atas
    for ($i = 1; $i <= $rows; $i++) {
        $line = "";
        for ($j = 1; $j <= $i; $j++) {
            $line .= "*";
        }
        $star[] = $line;
    }

}




?>