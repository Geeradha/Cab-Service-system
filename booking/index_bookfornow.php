

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bookfornow</title>
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
                <li><a href="..\home\index.php#a">Book Now</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">
                        <img src="pics/man.png" alt="User" class="user-picture"> 
                        <span class="dropdown-icon">&#9660;</span>
                    </a>
                    <div class="dropdown-content">
                        <a href="../profile/index.php">Profile</a>
                        <a href="../login/logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <h2>Request a cab for now</h2>
        <form action="bookfornow.php" method="POST">
            <div class="formquestions">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>            
            </div>

            <div class="formquestions">
                <label for="phone">Phone number:</label>
                <input type="number" id="phone" name="phone" required>            
            </div>


            <div class="formquestions">
                <label for="vehicletype">Vehicle Type:</label>
                <select id="vehicletype" name="vehicletype" required>
                    <option value="" disabled selected>Select Vehicle Type</option>
                    <option value="EXPO (Nano cab)">EXPO (Nano cab)</option>
                    <option value="BUDGET (Suzuki Alto)">BUDGET (Suzuki Alto)</option>
                    <option value="CITY (Suzuki WagonR)">CITY (Suzuki WagonR)</option>
                    <option value="SEMI (Honda Fit)">SEMI (Honda Fit)</option>
                    <option value="CAR (Toyota Prius)">CAR (Toyota Prius)</option>
                    <option value="Mini SUV (Toyota Innova)">Mini SUV (Toyota Innova)</option>
                    <option value="9 SEATER (Toyota Hiace)">9 SEATER (Toyota Hiace)</option>
                    <option value="14 SEATER (Toyota KDH)">14 SEATER (Toyota KDH)</option>
                </select>
            </div>
            <div class="formquestions">
                <label for="type">Service:</label>
                <select id="type" name="type" required>
                    <option value="" disabled selected>Select Service Type</option>
                    <option value="For own transportation">For own transportation</option>
                    <option value="For a friend">For a friend</option>
                    <option value="Delivery of goods<">Delivery of goods</option>
                </select>
            </div>

            <div class="formquestions" style="display: flex;">
                <label for="where">Where to go:</label>
                <div>
                    <input type="radio" id="city" name="location" value="Inside Colombo" required>
                    <label for="city" style="padding-left: 13px;">Inside Colombo</label>
                </div>
                <div>
                    <input type="radio" id="out" name="location" value="Outside Colombo" required>
                    <label for="out" style="padding-left: 15px;">Outside Colombo</label>
                </div>
            </div>
            <button type="submit" class="button">Book Now</button>
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


