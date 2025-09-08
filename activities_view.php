<?php
    //include 'session_check.php';
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

<body>
    <div class="form-group">
 <label>ID : </label>
 <?php echo"$id";?><br>
 
 <label>Name : </label>
 <?php echo"$activities_name"; ?><br>

 <label>Decription : </label>
 <?php echo "$activities_desc";?> <br>

 <label>Video : </label><br>
        <video src="<?php echo $activities_vid;?>" controls muted loop></video><br><br>
 <br>
    </div>

</body>

</html>