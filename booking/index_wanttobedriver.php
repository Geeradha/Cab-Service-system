<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wanttobeadriver</title>
    <link rel="stylesheet" type="text/css" href="bookforlater.css">
</head>

<body>
    <div class="hero">
        
        <nav>
            <div class="icon">
			    <h2 class="logo"><a href="">FASTX</a></h2>
			</div>	
            <ul>
                <li><a href="..\home\index.php">Home</a></li>
                <li><a href="../Fleetpage/Fleetpage.php">Fleet</a></li>
                <li><a href="..\services\services.php">Services</a></li>
                <li><a href="..\contactuspage\index.php">Contact Us</a></li>
                <li><a href="#">Book Now</a></li>
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
        <h2>Join With Our Driver Community</h2>
        <form action="wanttobedriver.php" method="POST">
            <div class="formquestions">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>            
            </div>

            <div class="formquestions">
                <label for="phone">Phone number:</label>
                <input type="number" id="phone" name="phone" required>            
            </div>

            <div class="formquestions">
                <label for="brand">Vehicle Brand:</label>
                <input type="text" id="brand" name="brand" required>            
            </div>

            <div class="formquestions">
                <label for="model">Vehicle Model:</label>
                <input type="text" id="model" name="model" required>            
            </div>

            <div class="formquestions">
                <label for="noplate">Number Plate:</label>
                <input type="text" id="noplate" name="noplate" required>            
            </div>

            <div class="formquestions">
                <label for="year">Manufactured year:</label>
                <input type="text" id="year" name="year" required>            
            </div>

            <div class="formquestions">
                <label for="type">Service:</label>
                <select id="type" name="type" required>
                    <option value="" disabled selected>Select Service you want to provide</option>
                    <option value="Transporting Passengers">Transporting Passengers</option>
                    <option value="Delivery of goods">Delivery of goods</option>
                </select>
            </div>

            <div class="formquestions" style="display: flex;">
                <label for="where">Where you want to ride:</label>
                <div>
                    <input type="radio" id="city" name="location" value="Inside Colombo" required>
                    <label for="city" style="padding-left: 13px;">Inside Colombo</label>
                </div>
                <div>
                    <input type="radio" id="out" name="location" value="Outside Colombo" required>
                    <label for="out" style="padding-left: 15px;">Outside Colombo</label>
                </div>
            </div>
            <button type="submit" class="button">Apply Now</button>
        </form>
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


