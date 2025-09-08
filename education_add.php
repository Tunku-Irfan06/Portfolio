<?php
    include 'connect.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="education_add.css">
</head>

<header class="header">
    <a href="#" class="logo">Admin Page</a>

    <i class='bx bx-menu' id="menu-icon"></i> 

    <nav class="navbar">
        <a href="education_add.php">Add Education</a>
        <a href="admin.php">About</a>
        <a href="activities_list.php">Activities</a>
        <a href="education_list.php" class="active">Education</a>
        <a href="qualification_list.php">Qualification</a>
        <a href="interest_list.php">Interest</a>
    </nav>
</header>

<body>
    <div class="container">
        <header id="hex-grid">
            <div class="light"></div>
            <div class="grid"></div>
    <script>
        const light = document.querySelector(".light");
const grid = document.querySelector("#hex-grid");

grid.addEventListener('mousemove', function (e) {
    light.style.left = `${e.clientX}px`;
    light.style.top = `${e.clientY}px`;
});
    </script>
    
    <div class="box">
        <div class="form"></div>
        <h2>Add Education</h2>
        <form action="education_add_act.php" method="post">
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="education_name" id="education_name" required="required">
            <br><br>
            Decription
            <br>
            <input name="education_desc" type="text" class="form-control" id="education_desc" required="required">
            <br><br>
            Duration (eg. 2019 - 2024)
            <br>
            <input name="education_duration" type="text" class="form-control" id="education_duration" required="required">
            <br><br>
            Image (16:9 aspect ratio):
            <input type="file" class="form-control" name="education_img" id="education_img">
            <br><br>
            Logo (.png file format):
            <input type="file" class="form-control" name="education_logo" id="education_logo">
            <br><br>
            Link
            <br>
            <input name="education_link" type="text" class="form-control" id="education_link" required="required">
            <br><br>
            <input type="submit" class="submit" value="ADD NEW" name="add" id="add">
        </form>
        <br>
    </div>    
    </header>
    </div>
</body>

</html>