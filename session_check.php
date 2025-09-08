<?php
    include("connect.php");
    session_start();
     $current_user = $_SESSION['userName'];
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $userName = $_SESSION['userName'];
    $sql = "SELECT * FROM users where userName ='$userName ' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
     $current_user_id = $row['userName'];
     }
    } else {
     header("./?login_err=You must be Administrator");
    }
    $conn->close();
    } else {
     header("location:./?login_err=Please login first");
    }
?>