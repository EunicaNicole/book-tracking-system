<?php

include '../connection/dbconn.php';

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $quantity = (int) $_POST['quantity'];
    $status = "Available";

    $sql = "INSERT INTO books (title, genre, quantity, status) 
            VALUES ('$title','$genre','$quantity','$status')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}

?>