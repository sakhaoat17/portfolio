<?php
$hostname = 'localhost:3306';
$username = 'root';
$password = '';
$database = 'portfolio';


$conn = new mysqli($hostname, $username, $password, $database);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT content FROM about_content";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["content"] . "</p>";
    }
} else {
    echo "No content found";
}


$conn->close();
?>
