<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $sql = "DELETE FROM education WHERE education_id='$id'";
    if ($conn->query($sql) === TRUE) {
    header("location:education_list.php? message=Item $id Deleted");
    } else {
    header("location:education_list.php? message=item $id Cannot be Deleted");
    }
    $conn->close();
?>