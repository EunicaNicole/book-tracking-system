<?php

include '../connection/dbconn.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = "
        UPDATE books
        SET quantity = quantity + 1,
            status = 'Available',
            time_borrowed = NULL
        WHERE id='$id'
    ";

    mysqli_query($conn, $sql);

    header("Location: ../index.php");
    exit();
}
