<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM client WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {

    session_start();
    $_SESSION['username'] = $username; 

    header('Location: welcome.html');
    exit();
} else {
 
    echo "Invalid username or password. Please try again.";
}

$conn->close();
?>
