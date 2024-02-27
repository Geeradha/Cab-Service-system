<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

$username = $_SESSION['username'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fleets</title>
    <link rel="stylesheet" type="text/css" href="fleetstyle.css">
</head>

<body>
    <div class="hero">
        
        <nav>
            <div class="icon">
			    <h2 class="logo"><a href="">FASTX</a></h2>
			</div>	
            <ul>
                <li><a href="..\home\index.php">Home</a></li>
                <li><a href="..\Fleetpage\Fleetpage.php">Fleet</a></li>
                <li><a href="..\services\services.php">Services</a></li>
                <li><a href="..\contactuspage\index.php">Contact Us</a></li>
                <li><a href="..\home\index.php#a">Book Now</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">
                        <img src="pics/man.png" alt="User" class="user-picture"> 
                        <span class="dropdown-icon">&#9660;</span>
                    </a>
                    <div class="dropdown-content">
                    <div class="welcome">Welcome, <?php echo $username; ?></div>
                        <a href="../profile/index.php">Profile</a>
                        <a href="../login/logout.php">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>
    </div>

    <div class="container">
        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/nano.jpg" aly>
            </a>
            <br>
            <br>
            <div class="vehiclecontent"><h2>EXPO</h2>
            <p><br><h3>Nano Cab</h3><br>
            A small hatchback, air conditioned with capacity of 3
            passengers ideal for short distance trips.
            </p>
            </div>
            </div>
        </div>




        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/alto.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>BUDGET</h2>
            <p><br><h3>Suzuki Alto</h3><br>
            A small hatchback, air conditioned with capacity of 3
            passengers ideal for short distance trips.
            </p>
            </div>
            </div>
        </div>




        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/wagonr.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>CITY</h2>
            <p><br><h3>Suzuki WagonR</h3><br>
            A hatchback, air conditioned with capacity of 4
            passengers ideal for short distance trips with adequate luggage space.
            </p>
            </div>
            </div>
        </div>



        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/fit.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>SEMI</h2>
            <p><br><h3>Honda Fit</h3><br>
            A full size, air conditioned sedan with capacity of 4
            passengers ideal for long distance trips with plenty of luggage space.
            </p>
            </div>
            </div>
        </div>


        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/prius.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>CAR</h2>
            <p><br><h3>Toyota Prius</h3><br>
            A full size, air conditioned sedan with capacity of 4
            passengers ideal for long distance trips with plenty of luggage space.
            </p>
            </div>
            </div>
        </div>

        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/innova.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>Mini SUV</h2>
            <p><br><h3>Toyota Innova</h3><br>
                A full sized with all the comfort and safety features and optimum mileage you may expect for longer journeys. 
                This spacious SUV features 7 to 8-seater capacity.  
            </p>
            </div>
            </div>
        </div>

        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/hiace.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>9 SEATER</h2>
            <p><br><h3>Toyota Hiace</h3><br>
            A mini van, air conditioned sedan with capacity of 9
            passengers ideal for long distance trips with plenty of luggage space.
            </p>
            </div>
            </div>
        </div>

        
        <div class="card">
            <div class="imgbx">
            <a href="#">
            <img src="pics/hiacebig.jpg">
            </a>
            <br>
            <br>
            <div class="vehiclecontent">
            <h2>14 SEATER</h2>
            <p><br><h3>Toyota KDH</h3><br>
            A full sized commuter van, air conditioned sedan with capacity of 14
            passengers ideal for long distance trips with plenty of luggage space.
            </p>
            </div>
            </div>
        </div>






        
    </div>
    <div class="footer">
        <div class="footercontent">
            <h2>Contact Us</h2>
            <p>Email: support@fastx.com</p>
            <p>Phone: +94777777</p>
        </div>

        <div class="footercontent1">
        <ul>
                <li><a href="..\home\index.php">Home</a></li>
                <li><a href="..\booking\index_wanttobedriver.php">Want to be a driver?</a></li>
                <li><a href="..\booking\index_bookfornow.php">Book cab now</a></li> 
                <li><a href="..\booking\index_bookforlater.php">Book cab for later</a></li>
            </ul>
        </div>
        <div class="bottom">
            <p>Â©2022. All Rights Reserved FASTX CAB SERVICES Company</p>
        </div>
    </div>
    

    <script src="/Fleetpage/script.js">
        // Your JavaScript code goes here
        let subMenu = document.querySelector(".sub-menu-wrap");

        const toggleMenu = () => subMenu.classList.toggle("open-menu");
    </script>


</body>

</html>
