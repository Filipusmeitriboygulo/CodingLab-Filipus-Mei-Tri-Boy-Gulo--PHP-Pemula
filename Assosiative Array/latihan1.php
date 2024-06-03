<?php

$numbers = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [10, 11, 12],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            background-color: aqua;
            height: 50px;
            line-height: 50px;
            width: 50px;
            text-align: center;
            margin: 3px;
            font-weight: bold;
            transition: 1s;

            float: left;
        }

        .kotak:hover {
            transform: rotate(180deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>

</head>

<body>
    <?php foreach ($numbers as $number) : ?>
        <?php foreach ($number as $n) : ?>
            <div class="kotak"><?= $n; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>