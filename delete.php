<?php

include 'connection.php';

if (isset($_GET['delete'])) {
    $roll = $_GET['delete'];
    $sql_query = "delete from `student` where roll= $roll";
    $sql_result = mysqli_query($connection, $sql_query);

    if ($sql_result) {
        // echo "Data deleted";
        header('location: index.php');
    } else {
        die(mysqli_errno($connection));
    }
}
