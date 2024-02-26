<?php

require 'connect.php';

$name = $_POST["name"];
$phone= $_POST["phone"];  
$vehicletype= $_POST["vehicletype"];
$type= $_POST["type"];  
$location= $_POST["location"];

$sql1 = "INSERT INTO bookfornow(name,phone,vehicletype,type,city) VALUES('$name','$phone','$vehicletype','$type','$location')";



if($conn->query($sql1) === TRUE){
    header("Location: Registration.html");
}
else{
    echo "Error:". $conn->error;
}

$conn->close();
?>
