<?php
    include 'connect.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="activities_add.css">
</head>

<header class="header">
    <a href="#" class="logo">Admin Page</a>

    <i class='bx bx-menu' id="menu-icon"></i> 

    <nav class="navbar">
        <a href="activities_add.php">Add Activities</a>
        <a href="admin.php">About</a>
        <a href="activities_list.php" class="active">Activities</a>
        <a href="education_list.php">Education</a>
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
        <h2>Add Activity</h2>
        <form action="activities_add_act.php" method="post">
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="activities_name" id="activities_name" required="required">
            <br><br>
            Decription
            <br>
            <input name="activities_desc" type="text" class="form-control" id="activities_desc" required="required">
            <br><br>
            Video (9:16 aspect ratio)
            <br>
            <input type="file" class="form-control" name="activities_vid" id="activities_vid">
            <br><br>
            <input type="submit" class="submit" value="ADD NEW" name="add" id="add">
        </form>
        <br>
    </div>    
    </header>
    </div>
</body>

</html>