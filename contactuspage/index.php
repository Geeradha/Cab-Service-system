
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
    <link rel="stylesheet" href="contactus.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                <li><a href="index.php">Contact Us</a></li>
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

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                   
                    <a href="#" class="sub-menu-link">
                        <img src="pics/account.png">
                        <p>Profile</p>
                        <span>></span>
                    </a>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="pics/logout.png">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>

        </nav>
    </div>

    <div class="container">
        
        <div class="contact">

            CONTACT
        </div>
        <div class="card">
            <div class="subhead">
                PHONE
            </div>
            <div class="des">
                <div class="">+94-777777777</div>
            </div>
            <center>
            <hr>
            </center>
        </div>
        
        <div class="card">
            <div class="subhead">
                E-MAIL
            </div>
            <div class="des">
                <div class="">support@fastx.com</div>
            </div>
            <center>
            <hr>
            </center>
          
        </div>
        <div class="card">
            <div class="subhead">
                ADDRESS
            </div>
            <div class="des">
                <div class="">UNIVERSITY OF COLOMBO<br>SCHOOL OF COMPUTING</div> 
            </div>
            <center>
            <hr>
            </center>
            
        </div>
        <div class="map">
            <center>
            <iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=79.8596,6.9015,79.8596,6.9015&amp;layer=mapnik&amp;marker=6.9015,79.8596" style="border: 1px solid black"></iframe><br/>
            </center>

        </div>

        <div class="info">
            <div class="topic">YOU HAVE QUESTIONS?</div>
            <form class="frm" action="contactus.php" method="POST">
                    <!-- <label for="name">Your name</label> -->
                    <input type="text" id="name" name="name" placeholder="Your Name ..." >  
                    
                    <!-- <label for="email" >E-mail</label> -->
                    <input type="text" id="email" name="email" placeholder="E-mail..."> 
                    <!-- <label for="pno">Phone Number</label> -->
                    <input type="text" id="pno" name="pno"placeholder="Phone Number...">
                    <br>
        
                    <!-- <label for="message">Message</label><br> -->
                    <textarea rows="8" cols="100" name="message"placeholder="Message..."></textarea>
                    <div class="send">
              <button type="submit">SEND </button>
                </div>
                </form>
            
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
</body>
</html>