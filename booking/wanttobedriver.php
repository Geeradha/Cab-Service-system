<?php

require 'connect.php';

session_start();


if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $noplate = $_POST["noplate"];
    $year = $_POST["year"];
    $type = $_POST["type"];
    $location = $_POST["location"];

    $sql1 = "INSERT INTO applyfordriver(Name, Phone_number, Vehicle_brand, Vehicle_model, No_Plate, Year, service, Location) VALUES('$name', '$phone', '$brand', '$model', '$noplate', '$year', '$type', '$location')";

    if($conn->query($sql1) === TRUE){
        
        $update_sql = "UPDATE login SET role='driver' WHERE username='$username' and password ='$password'";
        if($conn->query($update_sql) === TRUE) {
            header header("Location: ../home/index.php");;
        } else {
            echo "Error updating role:". $conn->error;
        }
    } else {
        echo "Error:". $conn->error;
    }
} else {
    echo "Username not set in session.";
}

$conn->close();
?>
