<?php

// Cek Apakah Button telah ditekan atau belum 
if (isset($_POST["submit"])) {
    // Cek Username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
        // jika benar redirect ke halam admin
        header("Location:admin.php");
        exit();
    }
    // Jika salah berikan pesan Kesalahahan
    else {
        $error = true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>


<style>
    p {
        color: red;
        font-weight: 600;
        font-style: italic;
    }

    ul li {
        list-style: none;
        font-size: 25px;
        font-weight: bold;
    }

    ul li button {
        list-style: none;
        font-size: 25px;
        padding: 5px;
        box-sizing: border-box;
        background-color: blue;
        color: white;
        font-weight: bold;
    }
</style>

<body>

    <?php if ($error == true) : ?>
        <p>Username dan Password yang Anda isi salah</p>
    <?php endif; ?>
    <h1>Silahkan Login</h1>

    <ul>
        <form action="" method="post">

            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>

        </form>


    </ul>
</body>

</html>