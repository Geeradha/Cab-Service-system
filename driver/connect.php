<?php
    $servername = "localhost";
    $dbUsername = "root";
    $Password = "";
    $db = "cab_service";

    $conn = new mysqli($servername, $dbUsername, $Password,$db);
    
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
       
     ?>