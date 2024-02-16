<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$username = $_POST['username'];
$organization = $_POST['organization'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$password = $_POST['password'];


$check_username_query = "SELECT * FROM client WHERE username = '$username'";
$check_username_result = $conn->query($check_username_query);

if ($check_username_result->num_rows > 0) {
    echo "Username already exists";
} else {

    $check_password_query = "SELECT * FROM client WHERE password = '$password'";
    $check_password_result = $conn->query($check_password_query);

    if ($check_password_result->num_rows > 0) {
        echo "Password already exists";
    } else {

        $sql = "INSERT INTO client (name, username, organization, facebook, instagram, password) VALUES ('$name', '$username', '$organization', '$facebook', '$instagram', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration Successful";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

