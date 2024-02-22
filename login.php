<?php
require 'connect.php';

function check_credentials($username, $password, $conn) {
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

  
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }

    // Close statement
    $stmt->close();
}

// Example usage
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Call check_credentials function
    check_credentials($username, $password, $conn);
}

// Close connection
$conn->close();
?>
