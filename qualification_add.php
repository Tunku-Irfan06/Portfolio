<?php
    include 'connect.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="qualification_add.css">
</head>

<header class="header">
    <a href="#" class="logo">Admin Page</a>

    <i class='bx bx-menu' id="menu-icon"></i> 

    <nav class="navbar">
        <a href="qualification_add.php">Add Qualification</a>
        <a href="admin.php">About</a>
        <a href="activities_list.php">Activities</a>
        <a href="education_list.php">Education</a>
        <a href="qualification_list.php" class="active">Qualification</a>
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
        <h2>Add Qualification</h2>
        <form action="qualification_add_act.php" method="post">
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="qualification_name" id="qualification_name" required="required">
            <br><br>
            Image
            <br>
            <input type="file" class="form-control" name="qualification_img" id="qualification_img">
            <br><br>
            Link
            <br>
            <input name="qualification_link" type="text" class="form-control" id="qualification_link">
            <br><br>
            <input type="submit" class="submit" value="ADD NEW" name="add" id="add">
        </form>
        <br>
    </div>    
    </header>
    </div>
</body>

</html>