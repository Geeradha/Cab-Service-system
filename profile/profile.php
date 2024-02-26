<?php
require 'connect.php';

$FirstName = $_POST["FirstName"];
$LastName= $_POST["LastName"];  
$UserName= $_POST["UserName"];
$DOB= $_POST["DOB"];
$MobileNumber= $_POST["MobileNumber"];   
$Email= $_POST["Email"];
$Address= $_POST["Address"];


// Update the user's information in the database
$sql = "UPDATE registrations SET FirstName='$FirstName', LastName='$LastName', UserName='$UserName', DOB='$DOB', MobileNumber='$MobileNumber', Email='$Email', Address='$Address' WHERE id=1"; // Assuming the user's ID is 1 for this example

if ($conn->query($sql) === TRUE) {
    header("Location: ../home/Home1.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
