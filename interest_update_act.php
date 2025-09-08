<?php
    include 'connect.php';
    include 'session_check.php';

    $id = $_GET['ref'];
    $interest_ranking = $_POST['interest_ranking'];
    $interest_name = $_POST['interest_name'];
    $interest_desc = $_POST['interest_desc'];
    $interest_icon = $_POST['interest_icon'];
    $sql = "SELECT * FROM interest where interest_id='$id'";
    $result = $conn->query($sql);
    $sql = "UPDATE interest SET interest_ranking='$interest_ranking', interest_name='$interest_name', interest_desc='$interest_desc', interest_icon='$interest_icon' WHERE interest_id='$id'";
    if ($conn->query($sql) === TRUE) {
     header("location:interest_update.php?ref=$id &message=Record updated successfully");
    } else {
     $error = $conn->error;
     header("location:interest_update.php?ref=$id Error updating record");
    }
    $conn->close();
?>
