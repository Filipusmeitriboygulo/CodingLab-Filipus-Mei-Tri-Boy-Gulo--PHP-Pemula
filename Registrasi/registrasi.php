<?php 

require 'functions.php';

if (isset ($_POST["register"])) {

    if (register ($_POST) >0) {

        echo "<script> 
            alert('Register Berhasil');
        </script>";
    }
    else {
        echo mysqli_error($connect);
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>


<style>
    label { 
        display: block;
        margin-bottom: 10px;
        margin-top: 5px;
    }

    ul li {
        list-style: none;
    }

    ul li button {
        margin-top: 10px;
        background-color: bisque;
    }
</style>
<body>


    <h1> Halaman Registrasi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Confrim Password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="suvmit" name="register">Sign Up</button>
            </li>
        </ul>





    </form>
</body>

</html>