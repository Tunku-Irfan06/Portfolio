<?php
//    include 'session_check.php';
    include 'connect.php';
    if(isset($_GET['ref'])) {
    $id = $_GET['ref'];
    $sql = "SELECT * FROM interest where interest_id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
    $interest_ranking = $row['interest_ranking'];
    $interest_name = $row['interest_name'];
    $interest_desc = $row['interest_desc'];
    $interest_icon = $row['interest_icon'];
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
        <h2>Update Interest</h2>
    
    
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
        
        <form action="interest_update_act.php?ref=<?php echo"$id"; ?>" method="post">
            <br><br>
            Ranking
            <br>
            <input type="number" class="form-control" name="interest_ranking" id="interest_ranking" value="<?php echo"$interest_ranking";?>">
            <br><br>
            Name
            <br>
            <input type="text" class="form-control" name="interest_name" id="interest_name" value="<?php echo"$interest_name";?>">
            <br><br>
            Description
            <br>
            <input type="text" class="form-control" name="interest_desc" id="interest_desc" value="<?php echo"$interest_desc";?>">
            <br><br>
            Icon (you can customize it on <a href="https://boxicons.com/" target="_blank">boxicons.com</a> and download it in .png format)
            <br>
            <input type="file" class="form-control" name="interest_icon" id="interest_icon" value="<?php echo"$interest_icon";?>">
            <br><br>
            <input type="submit" class="submit" value="UPDATE" name="update" id="id">
        </form><br>
    </div>
    
    </header>
    </div>
</body>

</html>