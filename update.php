<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
</head>

<body>


<div class="container" style="margin: 10px auto">
    <h2>Edit your profile</h2>
    <form action="insert.php" method="post">
        <div class="form-group">
            <input type="text" name="Name" value="<?php echo $_GET['Name'];?>" id="Name" required placeholder="Enter Your name:">
        </div>

        <div class="form-group">
            <input type="text" name="Age" value="<?php echo $_GET['Age'];?>" id="Age" required placeholder="Enter Your Age:">
        </div>

        <div class="form-group">
            <input type="text" name="Gender" value="<?php echo $_GET['Gender'];?>" id="Gender" required placeholder="Enter Your Gender:">
        </div>

        <div class="form-group">
            <input type="text" name="Contact"value="<?php echo $_GET['Contact'];?>" id="Contact" required placeholder="Enter Your Contact:">
        </div>

        <div class="form-group">
            <input type="text" name="Email" value="<?php echo $_GET['Email'];?>" id="Email" required placeholder="Enter Your Email:">
        </div>

        <div class="form-group">
            <input type="text" name="Address" value="<?php echo $_GET['Address'];?>" id="Address" required placeholder="Enter Your Address:">
        </div>

        <div>
            <h4>Choose Which type of GYM do you want to Join:</h4>
            <select class="select"  name="myselect" >
                <option value="" selected><?php echo $_GET['gymtype'];?></option>
                <option value="Freeweights">Free weights (hand weights, dumbbells, and barbells</option>
                <option value="Ellipticaltrainers">Elliptical trainers</option>
                <option value="Stretching" > Stretching</option>
                <option value="Low-impact aerobics">Low-impact aerobics</option>
                <option value="Stair-climbing-machines">Stair-climbing machines</option>
                <option value="Stationarycycling">Stationary cycling</option>
                <option value="Yoga">Yoga</option>
            </select>
        </div>

        <div>
            <h4>Choose duration of GYM:</h4>
            <select class="select" name="duration">
                <option value="" selected><?php echo $_GET['duration'];?></option>
                <option value="6month">3 month</option>
                <option value="6month">6 months</option>
                <option value="1year">1 year</option>
                <option value="2year">2 years</option>
            </select>
        </div>

        <input type="reset" class="btn">
        <div class="form-group">
            <input type="submit" name="submit">
        </div>
    </form>
</div>
<?php
include ('connection.php');
error_reporting(0);
if($_GET['submit']) {
    echo $_GET['Name'];
    $Name = $_GET['Name'];
    $Age = $_GET['Age'];
    $Gender = $_GET['Gender'];
    $Contact = $_GET['Contact'];
    $Email = $_GET['Email'];
    $Address = $_GET['Address'];
    $gymtype = $_GET['gymtype'];
    $duration = $_GET['duration'];
    $id = $_GET['id'];
    $query = "Update information set Name='$Name',Age='$Age',Gender='$Gender', Contact='$Contact', 
        Email='$Email',Address='$Address',gymtype='$gymtype',duration='$duration' where id='$id'";
        $data = mysqli_query($conn, $query);
    if ($data) {
        echo "Your choice is Great! you successfully register GYM";
    } else {
        echo "There is no change";
    }
}
?>
</body>
</html>
