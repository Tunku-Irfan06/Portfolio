<?php
//    include 'session_check.php';
    include 'connect.php';
    if(isset($_GET['ref'])) {
    $id = $_GET['ref'];
    $sql = "SELECT * FROM qualification where qualification_id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
    $qualification_name = $row['qualification_name'];
    $qualification_img = $row['qualification_img'];
    $qualification_link = $row['qualification_link'];
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
        <h2>Update Qualification</h2>
    
    
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
        
        <form action="qualification_update_act.php?ref=<?php echo"$id"; ?>" method="post">
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="qualification_name" id="qualification_name" value="<?php echo"$qualification_name";?>">
            <br><br>
            Image (16:9 aspect ratio):
            <input type="file" class="form-control" name="qualification_img" id="qualification_img" value="<?php echo"$qualification_img";?>">
            <br><br>
            Link
            <br>
            <input name="qualification_link" type="text" class="form-control" id="qualification_link" value="<?php echo"$qualification_link";?>">
            <br><br>
            <input type="submit" class="submit" value="UPDATE" name="update" id="id">
        </form><br>
    </div>
    
    </header>
    </div>
</body>

</html>