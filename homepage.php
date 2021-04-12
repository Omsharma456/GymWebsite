
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
        <link rel="stylesheet" href="homepage.css">
</head>

<body>
    
    <header class="header">

        <div class="left">
            <img src="https://static.thenounproject.com/png/355119-200.png" alt="icon">
            <div class="company">Himalayan Gym</div>
        </div>

        <div class="mid">
            <nav class="navbar">
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </div>

        <div class="right">
            <button class="btn"><a style="color: red" href="display.php">Admin login</a></button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h2>Join the best gym of Delhi now!</h2>
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="Name" id="Name" required placeholder="Enter Your name:">
            </div>

            <div class="form-group">
                <input type="number" name="Age" id="Age" required placeholder="Enter Your Age:">
            </div>

            <div class="form-group">
                <input type="text" name="Gender" id="Gender" required placeholder="Enter Your Gender:">
            </div>

            <div class="form-group">
                <input type="number" name="Contact" id="Contact" required placeholder="Enter Your Contact:">
            </div>

            <div class="form-group">
                <input type="text" name="Email" id="Email" required placeholder="Enter Your Email:">
            </div>

            <div class="form-group">
                <input type="text" name="Address" id="Address" required placeholder="Enter Your Address:">
            </div>

            <div>
                <h4>Choose Which type of GYM do you want to Join:</h4>
                <select class="select"  name="myselect">
                    <option value="Freeweights">Free weights (hand weights, dumbbells, and barbells</option>
                    <option value="Ellipticaltrainers">Elliptical trainers</option>
                    <option value="Stretching" selected> Stretching</option>
                    <option value="Low-impact aerobics">Low-impact aerobics</option>
                    <option value="Stair-climbing-machines">Stair-climbing machines</option>
                    <option value="Stationarycycling">Stationary cycling</option>
                    <option value="Yoga">Yoga</option>
                </select>
            </div>

            <div>
                <h4>Choose duration of GYM:</h4>
                <select class="select" name="duration">
                    <option value="3month">3 months</option>
                    <option value="6month">6 months</option>
                    <option value="1year">1 year</option>
                    <option value="2year">2 years</option>
                </select>
            </div>
            <div>
                <input type="file" name="photo">
            </div>

            <input type="reset" class="btn">
            <div class="form-group">
            <input type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>
    <?php
    include ('connection.php');
    include('insert.php');
    ?>

</body>

</html>