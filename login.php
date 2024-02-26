<?php
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
    // Redirect to admin.html
    header("Location: admin.html");
    exit; // Make sure to exit after the redirect to prevent further execution
} else {
    // No user found with the provided credentials
    echo "Invalid username or password.";
}


$conn->close();
?>
