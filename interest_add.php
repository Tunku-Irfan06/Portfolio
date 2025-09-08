<?php
    include 'connect.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="interest_add.css">
</head>

<header class="header">
    <a href="#" class="logo">Admin Page</a>

    <i class='bx bx-menu' id="menu-icon"></i> 

    <nav class="navbar">
        <a href="interest_add.php">Add Interest</a>
        <a href="admin.php">About</a>
        <a href="activities_list.php">Activities</a>
        <a href="education_list.php">Education</a>
        <a href="qualification_list.php">Qualification</a>
        <a href="interest_list.php" class="active">Interest</a>
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
        <h2>Add Interest</h2>
        <form action="interest_add_act.php" method="post">
            <br><br>
            Ranking
            <br>
            <input type="number" class="form-control" id="interest_ranking" name="interest_ranking" min="1" max="100" required>
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="interest_name" id="interest_name" required="required">
            <br><br>
            Description
            <br>
            <input type="text" class="form-control" name="interest_desc" id="interest_desc">
            <br><br>
            Icon (you can customize it on <a href="https://boxicons.com/" target="_blank">boxicons.com</a> and download it in .png format)
            <br>
            <input type="file" class="form-control" name="interest_icon" id="interest_icon">
            <br><br>
            <input type="submit" class="submit" value="ADD NEW" name="add" id="add">
        </form>
        <br>
    </div>    
    </header>
    </div>
</body>

</html>