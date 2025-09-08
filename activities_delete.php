<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $sql = "DELETE FROM activities WHERE activities_id='$id'";
    if ($conn->query($sql) === TRUE) {
    header("location:activities_list.php? message=Item $id Deleted");
    } else {
    header("location:activities_list.php? message=item $id Cannot be Deleted");
    }
    $conn->close();
?>