<?php
$connect = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>