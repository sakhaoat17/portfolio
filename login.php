<?php
// Check if the cookie named "username" is set
if (isset($_COOKIE['username'])) {
    // Cookie exists, redirect to admin.php
    $username = $_COOKIE['username'];
    echo "Username cookie value: $username";
    header("Location: admin.php");
    exit; // Make sure to exit after the redirect to prevent further execution
}
else{
    header("Location: login.html");
}

// Database connection parameters
$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'portfolio';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to retrieve user with the provided username and password
$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, login successful
    // Set a cookie to remember the user's login state
    setcookie("username", $username, time() + (120), "/"); // Cookie set to expire in 30 days

    // Redirect to admin.php
    header("Location: admin.php");
    exit; // Make sure to exit after the redirect to prevent further execution
} else {
    // No user found with the provided credentials
    echo "Invalid username or password.";
}

$conn->close();

