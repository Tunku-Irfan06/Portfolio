<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $qualification_name = $_POST['qualification_name'];
    $qualification_img = $_POST['qualification_img'];
    $qualification_link = $_POST['qualification_link'];
    $sql = "SELECT * FROM qualification where qualification_id='$id'";
    $result = $conn->query($sql);
    $sql = "UPDATE qualification SET qualification_name='$qualification_name', qualification_img='$qualification_img', qualification_link='$qualification_link' WHERE qualification_id='$id'";
    if ($conn->query($sql) === TRUE) {
     header("location:qualification_update.php?ref=$id &message=Record updated successfully");
    } else {
     $error = $conn->error;
     header("location:qualification_update.php?ref=$id Error updating record");
    }
    $conn->close();
?>
