<?php

require 'connect.php';

$FirstName = $_POST["FirstName"];
$LastName= $_POST["LastName"];  
$UserName= $_POST["UserName"];
$DOB= $_POST["DOB"];
$MobileNumber= $_POST["MobileNumber"];   
$Email= $_POST["Email"];
$Address= $_POST["Address"];
$Password= $_POST["Password"];   
$role = "user"; // Default role for the user

$sql1 = "INSERT INTO Registrations(FirstName,LastName,UserName,DOB,MobileNumber,Email,Address,Password) VALUES('$FirstName','$LastName','$UserName','$DOB','$MobileNumber','$Email','$Address','$Password')";

$sql2 = "INSERT INTO login(username,password,role) VALUES('$UserName','$Password','$role')";

if($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE){
    header("Location: ../login/index.php");
    exit;
}
else{
    echo "Error:". $conn->error;
}

$conn->close();
?>
