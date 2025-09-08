<?php
    //include 'session_check.php';
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

<body>
    <div class="form-group">
 <label>ID : </label>
 <?php echo"$id";?><br>
 
 <label>Ranking : </label>
 <?php echo"$interest_ranking"; ?><br>
 
 <label>Name : </label>
 <?php echo"$interest_name"; ?><br>
 
 <label>Description : </label>
 <?php echo"$interest_desc"; ?><br>
 
 <label>Icon : </label><br>
 <img src="<?php echo $interest_icon;?>" alt="img"><br>
 
 <br>
    </div>

</body>

</html>