<?php

require 'connect.php';

$name = $_POST["name"];
$email= $_POST["email"];  
$pno= $_POST["pno"];
$message= $_POST["message"];


$sql1 = "INSERT INTO contactus(name,email,pno,message) VALUES('$name','$email','$pno','$message')";



if($conn->query($sql1) === TRUE){
    header("Location: contactus2.php");
}
else{
    echo "Error:". $conn->error;
}

$conn->close();
?>
