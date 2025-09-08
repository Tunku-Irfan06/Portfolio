<?php
    include 'connect.php';
    // include 'session_check.php';

?>


<!DOCTYPE html>
<html lang="en">
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
<!--    <h2>Admin Page</h2>-->
    <div class="box">
        <div class="form"></div>
        <h2>Interest</h2>
    </div>
    
    <table width="720" height="55" border="1" cellspacing="1" id="example1">
        <thead>
            <th bgcolor="#CCCCCC">No.</th>
            <th bgcolor="#CCCCCC">ID</th>
            <th bgcolor="#CCCCCC">Ranking</th>
            <th bgcolor="#CCCCCC">Name</th>
            <th bgcolor="#CCCCCC">Description</th>
            <th bgcolor="#CCCCCC">Icon</th>
            <th bgcolor="#CCCCCC">Action</th>
        </thead>
        <tbody>
            <?php
                $sql="SELECT * FROM interest";
                $result = mysqli_query($conn,$sql);
                $count = 0;
                if(
                mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_assoc($result)){
                $count++;
                $id=$row['interest_id'];
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $row['interest_id']; ?></td>
                <td><?php echo $row['interest_ranking']; ?></td>
                <td><?php echo $row['interest_name']; ?></td>
                <td><?php echo $row['interest_desc']; ?></td>
                <td><?php echo $row['interest_icon']; ?></td>
                <td>
                    <?php
                        echo ' <a href="interest_view.php?ref='.$row["interest_id"].'" data-id="'.$id.'">Details</a>';
                        echo ' <a href="interest_update.php?ref='.$row["interest_id"].'" data-id="'.$id.'">Edit</a>';
                        echo ' <a href="interest_delete.php?ref='.$row["interest_id"].'" data-id="'.$id.'" onclick="return confirm(\'Are you sure you want to delete this record?\')">Delete</a>';
                        }}
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    
</header>
</div>
</body>
</html>