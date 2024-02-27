
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
    <link rel="stylesheet" type="text/css" href="driver_page.css">
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
                    <div class="welcome">Welcome, <?php echo $username; ?></div>
                        <a href="../profile/index.php">Profile</a>
                        <a href="../login/logout.php">Logout</a>
                        
                    </div>
                </li>
            </ul>

        </nav>
    </div>

<?php
require 'connect.php';

// Handle delete operation
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $ID = $_GET['id'];
    $sql = "DELETE FROM bookforlater WHERE id=$ID";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$sql = "SELECT * FROM bookforlater";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    echo "Error fetching users: " . $conn->error;
    exit();
}
// Display users in a table with edit and delete links
echo "<br><br><h1>Book For Later</h1><br><br>
<table border='1'>
        <tr>
            <th>ID </th>
            <th>Name</th>
            <th>phone Number</th>
            <th>Vehicle type</th>
            <th>Service</th>
            <th>Date</th>
            <th>Time</th>
            <th>city</th>
            
        </tr>";
while ($row = $result->fetch_assoc()) {
    
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['vehicletype']}</td>
            <td>{$row['type']}</td>
            <td>{$row['date']}</td>
            <td>{$row['time']}</td>
            <td>{$row['city']}</td>
            <td>
                
                <a href='driver_page.php?action=delete&id={$row['id']}' class='button' >Pick the booking</a>
            </td>
          </tr>";
}
echo "</table>";

$sql2 = "SELECT * FROM bookfornow";
$result = $conn->query($sql2);

// Check for errors
if (!$result) {
    echo "Error fetching users: " . $conn->error;
    exit();
}
// Display users in a table with edit and delete links
echo "<br><br><h1>Book For now</h1>
<table border='1'>
        <tr>
            <th>ID </th>
            <th>Name</th>
            <th>phone Number</th>
            <th>Vehicle type</th>
            <th>Service</th>
            <th>city</th>
            
        </tr>";
while ($row = $result->fetch_assoc()) {
    
    echo "<tr>
            <td>{$row['ID']}</td>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['vehicletype']}</td>
            <td>{$row['type']}</td>
            <td>{$row['city']}</td>
            <td>
                
                <a href='driver_page.php?action=delete&id={$row['id']}' class='button' >Pick the booking</a>
            </td>
          </tr>";
}
echo "</table>";
$conn->close();
?>
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
    </html>