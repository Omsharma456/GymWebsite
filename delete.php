<?php
    include ('connection.php');
//    error_reporting(0);
    $id=$_GET['id'];
    $Name=$_GET['Name'];
    $query="Delete from information where id='$id'";
    $data=mysqli_query($conn,$query);
if ($data) {
    echo "<script>alert('Record deleted')</script>";
    echo "Having id:".$id."     Successfully deleted";
    ?>
    <META http-equiv="refresh"  content="0; URL=http://localhost/website/GymWebsite/display.php">
    <?php
}
else{
    echo "<script>alert('Record not deleted')</script>";
}

?>