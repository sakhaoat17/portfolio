<?php

if (isset($_COOKIE['username'])) {
    
    $username = $_COOKIE['username'];
    echo "Username cookie value: $username";
    header("Location: admin.php");
    exit; 
}
else{
    header("Location: login.html");
}


$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'portfolio';


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    setcookie("username", $username, time() + (120), "/");

    
    header("Location: admin.php");
    exit; 
} else {
    
    echo "Invalid username or password.";
}

$conn->close();

