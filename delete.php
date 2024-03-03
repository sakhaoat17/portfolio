<?php

$conn = mysqli_connect("localhost:3306", "root", "", "portfolio");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    
    $sql = "DELETE FROM messages WHERE id='$id'";

    
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php?deletion=success");
        exit(); 
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
    
    
    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>
