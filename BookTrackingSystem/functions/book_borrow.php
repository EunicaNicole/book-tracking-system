<?php

include '../connection/dbconn.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $check = mysqli_query($conn, "SELECT * FROM books WHERE id='$id'");
    $book = mysqli_fetch_assoc($check);

    if ($book['quantity'] > 0) {
        $newQty = $book['quantity'] - 1;
        $status = ($newQty == 0) ? "Borrowed" : "Available";

        $sql = "
            UPDATE books
            SET quantity='$newQty',
                status='$status',
                time_borrowed=CURRENT_TIME
            WHERE id='$id'
        ";

        mysqli_query($conn, $sql);
    }

    header("Location: ../index.php");
    exit();
}
