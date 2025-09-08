<?php
//    include 'session_check.php';
    include 'connect.php';
    if(isset($_GET['ref'])) {
    $id = $_GET['ref'];
    $sql = "SELECT * FROM activities where activities_id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
    $activities_name = $row['activities_name'];
    $activities_desc = $row['activities_desc'];
    $activities_vid = $row['activities_vid'];
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
        <h2>Update Activity</h2>
    
    
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
        
        <form action="activities_update_act.php?ref=<?php echo"$id"; ?>" method="post">
            <br><br>
            Name<br>
            <input type="text" class="form-control" name="activities_name" id="activities_name" value="<?php echo"$activities_name";?>" required>
            <br><br>
            Decription
            <br>
            <input name="activities_desc" type="text" class="form-control" id="activities_desc" value="<?php echo"$activities_desc";?>">
            <br><br>
            Video (9:16 aspect ratio)
            <br>
            <input type="file" class="form-control" name="activities_vid" id="activities_vid" value="$activities_vid">
            <br><br>
            ID
            <br>
            <input name="activities_id" type="text" id="activities_id" value="<?php echo"$id";?>" readonly>
            <br><br>
            <input type="submit" class="submit" value="UPDATE" name="update" id="id">
        </form><br>
    </div>
    
    </header>
    </div>
</body>

</html>