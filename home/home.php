<?php

require 'connect.php';

$username = $_POST["username"];
$Message= $_POST["reviews"];  

$sql1 = "INSERT INTO reviews(username,Message) VALUES('$username','$Message')";


if($conn->query($sql1) === TRUE){
    header("Location: ../home/Home.html");
    exit;
}
else{
    echo "Error:". $conn->error;
}

$conn->close();
?>
