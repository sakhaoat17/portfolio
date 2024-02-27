<?php
// Connect to your database
$conn = mysqli_connect("localhost:3306", "root", "", "portfolio");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if ID parameter is set and not empty
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Escape the ID to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // SQL to delete record
    $sql = "DELETE FROM messages WHERE id='$id'";

    // Execute the deletion query
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php?deletion=success");
        exit(); // Terminate script after redirection
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
    
    // Close the connection
    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>
