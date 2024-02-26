
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
    <link rel="stylesheet" type="text/css" href="servicesstyle.css">
</head>

<body>
    <div class="hero">
        
        <nav>
            <div class="icon">
			    <h2 class="logo"><a href="">FASTX</a></h2>
			</div>	
            <ul>
                <li><a href="..\home\index.php#">Home</a></li>
                <li><a href="..\Fleetpage\Fleetpage.php">Fleet</a></li>
                <li><a href="services.php">Services</a></li>
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

    <div class="content">
        <div class="blockplusemptyspace">
            <div class="photo" id="1:25"></div>
            <div class="gradient" id="1:26"></div>
            <div class="captionbox" id="1:27">
                <div class="link-private-transportation-VZw" id="1:28">Private transportation</div>
                <div class="more" id="1:30">MORE</div>
            </div>
        </div>
     
        <div class="blockplusemptyspace">
            <div class="photo-a" id="1:25"></div>
            <div class="gradient" id="1:26"></div>
            <div class="captionbox" id="1:27">
                <div class="link-private-transportation-VZw" id="1:28">Hourly & Daily Services</div>
                <div class="more" id="1:30">MORE</div>
            </div>
        </div>
 
        <div class="blockplusemptyspace">
            <div class="photo-b" id="1:25"></div>
            <div class="gradient" id="1:26"></div>
            <div class="captionbox" id="1:27">
                <div class="link-private-transportation-VZw" id="1:28">Rental Services</div>
                <div class="more" id="1:30">MORE</div>
            </div>
        </div>
 
 
        <div class="blockplusemptyspace">
             <div class="photo-c" id="1:25"></div>
             <div class="gradient" id="1:26"></div>
            <div class="captionbox" id="1:27">
                <div class="link-private-transportation-VZw" id="1:28">Inter City Transportation</div>
                <div class="more" id="1:30">MORE</div>
            </div>
        </div>
 
        <div class="blockplusemptyspace">
             <div class="photo-d" id="1:25"></div>
             <div class="gradient" id="1:26"></div>
            <div class="captionbox" id="1:27">
                <div class="bigboxforboth" id="1.31">
                    <div class="link-private-transportation-VZw" id="1:28">Delivery Services</div>
                    <div class="more" id="1:30">MORE</div>
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
                    <li><a href="#">Home</a></li>
                    <li><a href="">Want to be a driver?</a></li>
                    <li><a href="">Book cab now</a></li> 
                    <li><a href="">Book cab for later</a></li>
                </ul>
            </div>
            <div class="bottom">
                <p>Â©2022. All Rights Reserved FASTX CAB SERVICES Company</p>
            </div>
        </div>
    


    
</body>
</html>
