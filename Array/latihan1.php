<?php
// Pengulangan pada array
// for /foreach

$angka = [3, 5, 6, 8, 10, 92, 19];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>

    <style>
        .kotak {
            background-color: salmon;
            height: 50px;
            line-height: 50px;
            float: left;
            width: 50px;
            text-align: center;
            font-weight: bold;
            margin: 5px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- Menggunakan for -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- Menggunakan foreach -->
    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a ?> </div>
    <?php } ?>

    <div class="clear"></div>
    <!-- Menggunakan foreach dengan metode templating -->
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a ?> </div>
    <?php endforeach ?>
</body>

</html>