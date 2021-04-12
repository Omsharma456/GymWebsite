<style>
    td{
        padding: 10px;
        margin: 5px auto;
        justify-content: center;
    }
</style>
<?php
    include('connection.php');
    error_reporting(0);

    $query="select * from information";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
echo "Total number of Records Are: ".$total;
if ($total != 0) {
    ?>
     <table>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Email Id:</th>
            <th>Address</th>
            <th>Gym type</th>
            <th>Registered Time</th>
            <th>Duration</th>
            <th colspan="2">Operation</th>
        </tr>
<?php

    while ($result=mysqli_fetch_assoc($data)){

    echo "<tr>
       <td>$result[id]</td>
       <td><a href='$result[image]'><img src='$result[image]' width='80px' height='80px'> </a></td>
       <td>$result[Name]</td> 
       <td>$result[Age]</td> 
       <td>$result[Gender]</td> 
       <td>$result[Contact]</td> 
       <td>$result[Email]</td>
       <td>$result[Address]</td> 
       <td>$result[gymtype]</td>
       <td>$result[Time]</td>
       <td>$result[duration]</td>
       <td ><a href='update.php?id=$result[id] & Name=$result[Name] & Age=$result[Age] & Gender=$result[Gender] & Contact=$result[Contact] & Email=$result[Email] & Address=$result[Address] & gymtype=$result[gymtype] & time=$result[Time] & duration=$result[duration]'>Edit</a></td>
       <td><a href='delete.php?id=$result[id]& Name=$result[Name] ' onclick='checkdelete()'>Delete</a></td>
       </tr>";
    }
}

?>
         <script>
             function checkdelete() {
                 confirm("Are you sure you want to delete this data");
             }
         </script>
