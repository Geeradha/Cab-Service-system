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
    <link rel="stylesheet" type="text/css" href="home.css">
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
<!DOCTYPE html>
<html>
<head>
    <title>Your Page Title</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>

<body>
<?php
require 'connect.php';



// Handle delete operation
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $sql = "DELETE FROM registrations WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Handle edit operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $ID = $_POST['ID'];
    $FirstName = $_POST["FirstName"];
    $LastName= $_POST["LastName"];  
    $UserName= $_POST["UserName"];
    $DOB= $_POST["DOB"];
    $MobileNumber= $_POST["MobileNumber"];   
    $Email= $_POST["Email"];
    $Address= $_POST["Address"];
    $Password= $_POST["Password"];   

    $sql = "UPDATE registrations SET FirstName='$FirstName',LastName='$LastName',UserName='$UserName', DOB='$DOB',MobileNumber='$MobileNumber',Email='$Email',Address='$Address',Password='$Password' WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    echo "Error fetching users: " . $conn->error;
    exit();
}

// Display users in a table with edit and delete links
echo "<h1>Customers</h1>
<table border='1'>
        <tr>
            <th>ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>UserName</th>
            <th>DOB</th>
            <th>MobileNumber</th>
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
            
        </tr>";
while ($row = $result->fetch_assoc()) {
    
    echo "<tr>
            <td>{$row['ID']}</td>
            <td>{$row['FirstName']}</td>
            <td>{$row['LastName']}</td>
            <td>{$row['UserName']}</td>
            <td>{$row['DOB']}</td>
            <td>{$row['MobileNumber']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Address']}</td>
            <td>{$row['Password']}</td>
            
            <td>
                <form method='post'>
                    <input type='hidden' name='ID' value='{$row['ID']}'>
                    <input type='text' name='FirstName' value='{$row['FirstName']}'>
                    <input type='text' name='LastName' value='{$row['LastName']}'>
                    <input type='text' name='UserName' value='{$row['UserName']}'>
                    <input type='text' name='DOB' value='{$row['DOB']}'>
                    <input type='text' name='MobileNumber' value='{$row['MobileNumber']}'>
                    <input type='text' name='Email' value='{$row['Email']}'>
                    <input type='text' name='Address' value='{$row['Address']}'>
                    <input type='text' name='Password' value='{$row['Password']}'>


                    <input type='submit' name='edit' value='Edit' class='button'>
                </form>
                <a href='admin.php?action=delete&ID={$row['ID']}' class='button' >Delete</a>
            </td>
          </tr>";
}
echo "</table>";


// Close database connection



//driver table
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $sql = "DELETE FROM applyfordriver WHERE ID=$ID";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Handle edit operation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $ID = $_POST['ID'];
    $name = $_POST["Name"];
    $phone = $_POST["Phone_number"];
    $brand= $_POST["Vehicle_brand"];  
    $model= $_POST["Vehicle_model"];
    $noplate= $_POST["No_Plate"];
    $year= $_POST["Year"];   
    $type= $_POST["service"];
    $location= $_POST["Location"];   

    $sql2 = "UPDATE applyfordriver SET Name='$name',Phone_number='$phone',Vehicle_brand='$brand', Vehicle_model='$model',No_Plate='$noplate',Year='$year',service='$type',Location='$location' WHERE ID=$ID";
    if ($conn->query($sql2) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql2 = "SELECT * FROM applyfordriver";
$result = $conn->query($sql2);

// Check for errors
if (!$result) {
    echo "Error fetching users: " . $conn->error;
    exit();
}

// Display users in a table with edit and delete links
echo "<h1>Drivers</h1>
<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone number</th>
            <th>Vehicle Brand</th>
            <th>Vehicle Model</th>
            <th>Number plate</th>
            <th>Year</th>
            <th>Service</th>
            <th>location</th>
            
        </tr>";
while ($row = $result->fetch_assoc()) {
    
    echo "<tr>
            <td>{$row['ID']}</td>
            <td>{$row['Name']}</td>
            <td>{$row['Phone_number']}</td>
            <td>{$row['Vehicle_brand']}</td>
            <td>{$row['Vehicle_model']}</td>
            <td>{$row['No_Plate']}</td>
            <td>{$row['Year']}</td>
            <td>{$row['service']}</td>
            <td>{$row['Location']}</td>
            
            <td>
                <form method='post'>
                    <input type='hidden' name='ID' value='{$row['ID']}'>
                    <input type='text' name='name' value='{$row['Name']}'>
                    <input type='text' name='phone' value='{$row['Phone_number']}'>
                    <input type='text' name='brand' value='{$row['Vehicle_brand']}'>
                    <input type='text' name='model' value='{$row['Vehicle_model']}'>
                    <input type='text' name='noplate' value='{$row['No_Plate']}'>
                    <input type='text' name='year' value='{$row['Year']}'>
                    <input type='text' name='type' value='{$row['service']}'>
                    <input type='text' name='location' value='{$row['Location']}'>


                    <input type='submit' name='edit' value='Edit' class='button'>
                </form>
                <a href='admin.php?action=delete&ID={$row['ID']}' class='button'>delete</a>
            </td>
          </tr>";
}
echo "</table>";


// Close database connection
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
