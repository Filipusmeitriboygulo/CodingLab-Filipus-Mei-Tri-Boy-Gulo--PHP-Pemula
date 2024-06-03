<?php
// Pengulangan
// for
// while
// do.. while
// foreach : perulangan  khusus array


for ($i =  0; $i < 5; $i++) {
    echo "Hello World! <br>";
};

$i = 0;
while ($i < 5) {
    echo "Hello Dunia! <br>";
    $i++;
};

$a = 0;
do {
    echo "Hello Dunia Versi Do While! <br>";
    $a++;
} while ($a < 5)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: bisque;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($a = 1; $a <= 5; $a++) : ?>
            <?php if ($a % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                    <?php for ($b = 1; $b <= 5; $b++) : ?>
                        <td>
                            <?php echo "$a, $b" ?>
                        </td><?php endfor; ?>
                </tr><?php endfor; ?>
    </table>
</body>

</html>