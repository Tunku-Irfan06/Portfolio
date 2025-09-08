<?php
    include 'connect.php';
    include 'session_check.php';

    if(isset($_POST['add'])) {
    $qualification_name = $_POST['qualification_name'];
    $qualification_img = $_POST['qualification_img'];
    $qualification_link = $_POST['qualification_link'];
//    $result = $conn->query($sql);
    $sql = "INSERT INTO qualification (qualification_name, qualification_img, qualification_link) VALUES ('$qualification_name', '$qualification_img', '$qualification_link')";
    if ($conn->query($sql) === TRUE) {
    header("location:qualification_add.php?&message=Record Added successfully");
    } else {
    $error = $conn->error;
    header("location:qualification_add.php?&message=Error Adding record");
    }
    $conn->close();
    }
?>