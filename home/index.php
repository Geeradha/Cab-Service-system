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
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
    <div class="hero">
        
        <nav>
            <div class="icon">
			    <h2 class="logo"><a href="">FASTX</a></h2>
			</div>	
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="../Fleetpage/Fleetpage.php">Fleet</a></li>
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
    <div class="lambo">
        <img src="pics/lambo.png">
    </div>
    <div class="main">
        <div class="image1">
            <img src="pics/image1.png">
        </div>

        <h2 class="content1">OUR SERVICES</h2>

       <div class="content2"> FIND VEHICLES FOR YOUR LUXURY  PRIVATE
        TRANSPORTATION</div>

        <div class="content3">BOOK NEARBY TAXI WITH YOUR
        PHONE</div>

        <div class="content4">STAY ALERT ON JOURNEY IN YOUR
        MAP</div>

        <div class="content5"> HOURLY AND DAILY SERVICE</div>
        <div class="content6">LONG DISTANCE SERVICE</div>

       

    </div>

    <section class="main2" id="a">
        <div class="header1">
            <h1>LOOKING FOR A CAB ?</h1>
        
        <div class="buttons">
        <a href="..\booking\index_bookfornow.php" class="button">Book for Now</a>
        <a href="../booking/index_bookforlater.php" class="button">Book for later</a>
        </div>
    
        <div class="header2">
            <h1>WANT TO BE A DRIVER?</h1>
        </div>
        <div class="buttons">
            <a href="..\booking\index_wanttobedriver.php" class="button" type="button">Apply Now</a>
        </div>
        <div class="image">
            <img src="pics/image7.png" alt="Driver Image">
        </div>
</section>
    <div class="review">
        <div class="reviews_all">
          
            <div class="header_03">
              <h3>Share your own experience with us....</h3>
            </div>
  
          <div class="form_01">
            <form action="home2.php" method="POST">
                <div class="box">
                <label>User name:</label><br>
                <input type="text" id="username" name="username"><br></div>
                <br><br>
            
                <div class="box">
                <textarea  id="massege_box" rows="10" cols="40" name="reviews">
                </textarea></div>
                <br><br>
                
  
                <div class="box">
                <input type="submit" id="sub_mit" value="Submit" ></div>
                <br>
                <p>"Admin will post your reviews to this page soon!"</p>
  
              </form>
            </div>
              <br><br><br>
      </div>
    </div>
    <div class="social-media-icons">
        <p class="social-media">Stay connected! Follow us on social media.</p>
        <a href="#"><img src="pics/fb.png" alt="Facebook" class="icon"></a>
        <a href="#"><img src="pics/insta.png" alt="Instagram" class="icon"></a>
        <a href="#"><img src="pics/twitter.png" alt="Twitter" class="icon"></a>
        <a href="#"><img src="pics/linkedin.png" alt="LinkedIn" class="icon"></a>
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
                <li><a href="..\booking\index_wanttobedriver.php">Want to be a driver?</a></li>
                <li><a href="..\booking\index_bookfornow.php">Book cab now</a></li> 
                <li><a href="..\booking\index_bookforlater.php">Book cab for later</a></li>
            </ul>
        </div>
        <div class="bottom">
            <p>Â©2022. All Rights Reserved FASTX CAB SERVICES Company</p>
        </div>
    </div>
    