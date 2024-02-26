<?php
$servername = "localhost";
$dbUsername = "root";
$Password = "";
$db = "cab_service";

$conn = new mysqli($servername, $dbUsername, $Password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); // Start the session

function check_credentials($username, $password, $role, $conn) {
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = strtolower($row['role']);

        if ($_SESSION['role'] == 'admin') {
            header("Location: ../admin/admin.php");
            exit;
        } else if($_SESSION['role'] == 'driver'){
            header("Location: ../driver/driver_page.php");
            exit;
        }
        else{
            header("Location: ../home/index.phpp");
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            exit;
        }

    } else {
        
        header("Location: login_failed.html");
        exit;
    }
    $stmt->close();
}

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    check_credentials($username, $password, $role, $conn);
}

$conn->close();
?>
