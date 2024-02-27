<?php
session_start();

$servername = "localhost";
$dbUsername = "root";
$Password = "";
$db = "cab_service";

$conn = new mysqli($servername, $dbUsername, $Password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';

$sql = "SELECT * FROM registrations WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $FirstName = $row['FirstName'];
    $LastName = $row['LastName'];
    $UserName = $row['UserName'];
    $DOB = $row['DOB'];
    $MobileNumber = $row['MobileNumber'];
    $Email = $row['Email'];
    $Address = $row['Address'];
 
} else {
    echo "No user information found for username: $username and password: $password";
}

$conn->close();



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
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body><div class="hero">
        
    <nav>
        <div class="icon">
            <h2 class="logo"><a href="">FASTX</a></h2>
        </div>	
        <ul>
                <li><a href="../home/index.php">Home</a></li>
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
                    <a href="#">Profile</a>
                    <a href="../login/logout.php">Logout</a>
                </div>
            </li>
        </ul>

    </nav>
</div>
    <div class="container">
        <h1>User Profile</h1>
        <form action="profile.php" method="post">
            <label for="FirstName">First Name:</label>
            <input type="text" name="FirstName" value= "<?php echo isset($FirstName) ? $FirstName : ''; ?>"><br><br>
            
            <label for="LastName">Last Name:</label>
            <input type="text" name="LastName" value="<?php echo $LastName; ?>"><br><br>
            
            <label for="UserName">Username:</label>
            <input type="text" name="UserName" value="<?php echo $UserName; ?>"><br><br>
            
            <label for="DOB">Date of Birth:</label>
            <input type="date" name="DOB" value="<?php echo $DOB; ?>"><br><br>
            
            <label for="MobileNumber">Mobile Number:</label>
            <input type="text" name="MobileNumber" value="<?php echo $MobileNumber; ?>"><br><br>
            
            <label for="Email">Email:</label>
            <input type="email" name="Email" value="<?php echo $Email; ?>"><br><br>
            
            <label for="Address">Address:</label>
            <textarea name="Address"><?php echo $Address; ?></textarea><br><br>
            
            <input type="submit" value="Save Changes">
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