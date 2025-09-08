<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $description = $_POST['description'];
    $sql = "SELECT * FROM about where id='$id'";
    $result = $conn->query($sql);
    $sql = "UPDATE about SET description='$description' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
     header("location:about_update.php?ref=$id &message=Record updated successfully");
    } else {
     $error = $conn->error;
     header("location:about_update.php?ref=$id Error updating record");
    }
    $conn->close();
?>
