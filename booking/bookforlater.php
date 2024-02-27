<?php

require 'connect.php';

$name = $_POST["name"];
$phone= $_POST["phone"];  
$vehicletype= $_POST["vehicletype"];
$type= $_POST["type"];
$date= $_POST["date"];   
$time= $_POST["time"];
$location= $_POST["location"];

$sql1 = "INSERT INTO bookforlater(name,phone,vehicletype,type,date,time,city) VALUES('$name','$phone','$vehicletype','$type','$date','$time','$location')";



if($conn->query($sql1) === TRUE){
    header("Location: ../home/index.php");
}
else{
    echo "Error:". $conn->error;
}

$conn->close();
?>
