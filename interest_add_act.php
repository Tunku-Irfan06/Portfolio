<?php
    include 'connect.php';
    include 'session_check.php';

    if(isset($_POST['add'])) {
    $interest_ranking = $_POST['interest_ranking'];
    $interest_name = $_POST['interest_name'];
    $interest_desc = $_POST['interest_desc'];
    $interest_icon = $_POST['interest_icon'];
//    $result = $conn->query($sql);
    $sql = "INSERT INTO interest (interest_ranking, interest_name, interest_desc, interest_icon) VALUES ('$interest_ranking', '$interest_name', '$interest_desc', '$interest_icon')";
    if ($conn->query($sql) === TRUE) {
    header("location:interest_add.php?&message=Record Added successfully");
    } else {
    $error = $conn->error;
    header("location:interest_add.php?&message=Error Adding record");
    }
    $conn->close();
    }
?>