<?php
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

// Fetch "About Me" content from the database
$sql = "SELECT content FROM about_content";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["content"] . "</p>";
    }
} else {
    echo "No content found";
}

// Close connection
$conn->close();
?>
