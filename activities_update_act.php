<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $activities_name = $_POST['activities_name'];
    $activities_desc = $_POST['activities_desc'];
    $activities_vid = $_POST['activities_vid'];
    $sql = "SELECT * FROM activities where activities_id='$id'";
    $result = $conn->query($sql);
    $sql = "UPDATE activities SET activities_name='$activities_name', activities_desc='$activities_desc', activities_vid='$activities_vid' WHERE activities_id='$id'";
    if ($conn->query($sql) === TRUE) {
     header("location:activities_update.php?ref=$id &message=Record updated successfully");
    } else {
     $error = $conn->error;
     header("location:activities_update.php?ref=$id Error updating record");
    }
    $conn->close();
?>
