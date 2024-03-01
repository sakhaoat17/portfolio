<?php
// Connect to your database
$conn = mysqli_connect("localhost", "root", "", "portfolio");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$sql = "SELECT id, content FROM about_content";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["content"] . "</td>";
        echo "<td><a href='update.php?id=" . $row["id"] . "'>UPDATE</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No data found</td></tr>";
}

mysqli_close($conn);
?>