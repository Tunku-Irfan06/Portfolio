<?php
    //include 'session_check.php';
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

<body>
    <div class="form-group">
 <label>ID : </label>
 <?php echo"$id";?><br>
 
 <label>Name : </label>
 <?php echo"$education_name"; ?><br>
 
 <label>Duration : </label>
 <?php echo "$education_duration";?> <br>
 
 <label>Image : </label><br>
 <img src="<?php echo $education_img;?>" alt="img"><br>
 
 <label>Link : </label>
 <a href="<?php echo "$education_link";?>" target="_blank"><?php echo "$education_link";?></a> <br>
 
 <label>Decription : </label>
 <?php echo "$education_desc";?> <br>
 
 <label>Logo : </label><br>
 <img src="<?php echo $education_logo;?>" alt="img"><br><br>

 <br>
    </div>

</body>

</html>