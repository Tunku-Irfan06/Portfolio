<?php
    include 'connect.php';
    include 'session_check.php';

    if(isset($_POST['add'])) {
    $education_name = $_POST['education_name'];
    $education_duration = $_POST['education_duration'];
    $education_img = $_POST['education_img'];
    $education_link = $_POST['education_link'];
    $education_desc = $_POST['education_desc'];
    $education_logo = $_POST['education_logo'];
//    $result = $conn->query($sql);
    $sql = "INSERT INTO education (education_name, education_duration, education_img, education_link, education_desc, education_logo) VALUES ('$education_name', '$education_duration', '$education_img', '$education_link', '$education_desc', '$education_logo')";
    if ($conn->query($sql) === TRUE) {
    header("location:education_add.php?&message=Record Added successfully");
    } else {
    $error = $conn->error;
    header("location:education_add.php?&message=Error Adding record");
    }
    $conn->close();
    }
?>