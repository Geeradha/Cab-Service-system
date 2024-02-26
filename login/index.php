<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loging</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
</head>
<body>

    <div class="hero">
        
        <nav>
            <div class="icon">
			    <h2 class="logo"><a href="">FASTX</a></h2>
			</div>	
            <ul>
                    <li><a href="permission.html">Home</a></li>
					<li><a href="permission.html">Fleet</a></li>
					<li><a href="permission.html">Services</a></li>
					<li><a href="permission.html">Contact Us</a></li>
					<li><a href="permission.html">Book Now</a></li>
                <li class="dropdown">
                    
                    <div class="dropdown-content">
                        <a href="#">Profile</a>
                        <a href="#">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>
    </div>
    
    
    

	<div class="container">
           

                <div class="form">
                    <h2>Login Here</h2>
                <form action="login.php" method="POST">
                    <input type="text" name="username" placeholder="user name" id="username">
                    <input type="password" name="password" placeholder="password" id="password">
                    <i class="fa-solid fa-eye" id="eye" style="margin-left: -30px; cursor: pointer; color: white;"></i>
                    <div class="fp">

                        <a href="#">Forget password? </a> 
                        
                    </div>
                    <input type="hidden" id="role" name="role">
                    <input type="submit" value="Login" class="btnn">
                </form>
                
                    <p class="link" style="color: white;">Don't have an account<br>
                    <a href="..\registration\Registration.html">Sign Up </a>  here</p>

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
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="password.js"></script>
</body>
</html>

