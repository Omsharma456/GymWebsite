<?php
include('connection.php');
error_reporting(0);
if ($_POST['submit']) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Contact = $_POST['Contact'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $gymselect = $_POST['myselect'];
    $duration = $_POST['duration'];
    $filename = $_FILES['photo']['name'];
    $tempname = $_FILES['photo']['tmp_name'];
    $folder = "images/" . $filename;
    move_uploaded_file($tempname, $folder);
    date_default_timezone_set('Asia/Kolkata');
    $date = date('m/d/Y h:i:s a', time());
    if ($Name != "" && $Age != "" && $Gender != "" && $Contact != "" && $Email != "" && $Address != "" && $gymselect != "" && $duration != "" && $filename != "") {
        $querry = "Insert into information(image,Name,Age,Gender,Contact,Email,Address,gymtype,duration,time ) values ('$folder','$Name','$Age','$Gender','$Contact','$Email','$Address','$gymselect',
    '$duration','$date')";
        $data = mysqli_query($conn, $querry);
        if ($data) {
            echo "Your choice is Great! you successfully register GYM";
        } else {
            echo "Given email address is already registered in Database";
        }
    }
}
else{
    echo "All fields are required";
}
?>      