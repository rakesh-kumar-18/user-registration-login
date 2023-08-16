<?php
require_once 'includes/config.php';

// Connect to the database
$mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get data from the registration form
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
$address = $_POST['address'];
$phone = $_POST['phone'];

// Insert data into the users table
$query = "INSERT INTO users (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";

if ($mysqli->query($query) === true) {
    echo "Registration successful!";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();
?>