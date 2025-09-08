<?php
include("connect.php");
include 'session_check.php';

 session_start();
if(isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE userName = '$userName' AND password = '$password'");

    $rows = mysqli_num_rows($query);

    if ($rows == 1) {
        $row = mysqli_fetch_array($query);
        header("location: admin.php? Login Successfully");
    } else {
        header("location: index.html? Access Denied");
    }

    mysqli_close($conn);
}

?>