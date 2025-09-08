<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $education_name = $_POST['education_name'];
    $education_duration = $_POST['education_duration'];
    $education_img = $_POST['education_img'];
    $education_link = $_POST['education_link'];
    $education_desc = $_POST['education_desc'];
    $education_logo = $_POST['education_logo'];
    $sql = "SELECT * FROM education where education_id='$id'";
    $result = $conn->query($sql);
    $sql = "UPDATE education SET education_name='$education_name', education_duration='$education_duration', education_img='$education_img', education_link='$education_link', education_desc='$education_desc', education_logo='$education_logo' WHERE education_id='$id'";
    if ($conn->query($sql) === TRUE) {
     header("location:education_update.php?ref=$id &message=Record updated successfully");
    } else {
     $error = $conn->error;
     header("location:education_update.php?ref=$id Error updating record");
    }
    $conn->close();
?>
