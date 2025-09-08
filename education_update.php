<?php
//    include 'session_check.php';
    include 'connect.php';
    if(isset($_GET['ref'])) {
    $id = $_GET['ref'];
    $sql = "SELECT * FROM education where education_id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
    $education_name = $row['education_name'];
    $education_duration = $row['education_duration'];
    $education_img = $row['education_img'];
    $education_link = $row['education_link'];
    $education_desc = $row['education_desc'];
    $education_logo = $row['education_logo'];
     }
    } else {
    }
    $conn->close();
    }else{
    header("location:index.php");
    }
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
        <h2>Update Education</h2>
    
    
<!--
        <form action="activities_update_act.php?ref=<?php echo"$id"; ?>" method="post">
            <p>
                Description
                <textarea name="description" id="description" cols="150" rows="15"><?php echo "$description";?></textarea>
                Item ID
                <input name="id" type="text" id="id" value="<?php echo"$id";?>" readonly>
            </p>
            <input type="submit" value="UPDATE" name="update" id="id" class="submit">
        </form>
-->
        
        <form action="education_update_act.php?ref=<?php echo"$id"; ?>" method="post">
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="education_name" id="education_name" value="<?php echo"$education_name";?>">
            <br><br>
            Decription
            <br>
            <input name="education_desc" type="text" class="form-control" id="education_desc" value="<?php echo"$education_desc";?>">
            <br><br>
            Duration (eg. 2019 - 2024)
            <br>
            <input name="education_duration" type="text" class="form-control" id="education_duration" value="<?php echo"$education_duration";?>">
            <br><br>
            Image (16:9 aspect ratio):
            <input type="file" class="form-control" name="education_img" id="education_img" value="<?php echo"$education_img";?>">
            <br><br>
            Logo (.png file format):
            <input type="file" class="form-control" name="education_logo" id="education_logo" value="<?php echo"$education_logo";?>">
            <br><br>
            Link
            <br>
            <input name="education_link" type="text" class="form-control" id="education_link" value="<?php echo"$education_link";?>">
            <br><br>
            <input type="submit" class="submit" value="UPDATE" name="update" id="id">
        </form><br>
    </div>
    
    </header>
    </div>
</body>

</html>