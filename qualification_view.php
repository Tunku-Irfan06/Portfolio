<?php
    //include 'session_check.php';
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

<body>
    <div class="form-group">
 <label>ID : </label>
 <?php echo"$id";?><br>
 
 <label>Name : </label>
 <?php echo"$qualification_name"; ?><br>
  
 <label>Image : </label><br>
 <img src="<?php echo $qualification_img;?>" alt="img"><br>
 
 <label>Link : </label>
 <a href="<?php echo "$qualification_link";?>" target="_blank"><?php echo "$qualification_link";?></a> <br>
 
 <br>
    </div>

</body>

</html>