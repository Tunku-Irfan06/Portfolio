<?php
    include 'connect.php';
    include 'session_check.php';

    if(isset($_POST['add'])) {
    $activities_name = $_POST['activities_name'];
    $activities_desc = $_POST['activities_desc'];
    $activities_vid = $_POST['activities_vid'];
//    $result = $conn->query($sql);
    $sql = "INSERT INTO activities (activities_name, activities_desc, activities_vid) VALUES ('$activities_name', '$activities_desc', '$activities_vid')";
    if ($conn->query($sql) === TRUE) {
    header("location:activities_add.php?&message=Record Added successfully");
    } else {
    $error = $conn->error;
    header("location:activities_add.php?&message=Error Adding record");
    }
    $conn->close();
    }
?>