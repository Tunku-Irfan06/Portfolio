<?php
//    include 'session_check.php';
    include 'connect.php';
    if(isset($_GET['ref'])) {
    $id = $_GET['ref'];
    $sql = "SELECT * FROM about where id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
     while($row = $result->fetch_assoc()) {
     $description = $row['description'];
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
    <link rel="stylesheet" href="admin.css">
</head>

<header class="header">
    <a href="#" class="logo">Admin Page</a>

    <i class='bx bx-menu' id="menu-icon"></i> 

    <nav class="navbar">
        <a href="admin.php" class="active">About</a>
        <a href="activities_list.php">Activities</a>
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
        <h2>Update About</h2>
    
    
        <form action="about_update_act.php?ref=<?php echo"$id"; ?>" method="post">
            <p>
                Description
                <br>
                <textarea name="description" id="description" cols="150" rows="15"><?php echo "$description";?></textarea>
                <br><br>
                Item ID
                <br>
                <input name="id" type="text" id="id" value="<?php echo"$id";?>" readonly>
            </p>
            <input type="submit" value="UPDATE" name="update" id="id" class="submit">
        </form><br>
    </div>
    
    </header>
    </div>
</body>

</html>