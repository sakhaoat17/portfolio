<?php

$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'portfolio';


$conn = new mysqli($hostname, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Message submitted successfully');</script>";

    header("Location: index.php?insertion=success");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
