<?php
session_start();
require_once 'includes/config.php';

// Connect to the database
$mysqli = new mysqli($config['host'], $config['username'], $config['password'], $config['database']);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get login data from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user data based on email
$query = "SELECT * FROM users WHERE email='$email'";
$result = $mysqli->query($query);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        // Successful login
        $_SESSION['user_id'] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}

$mysqli->close();
?>