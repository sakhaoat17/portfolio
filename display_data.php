<?php

$conn = mysqli_connect("localhost:3306", "root", "", "portfolio");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
    echo "<td style='width: 25%;'>" . $row["name"] . "</td>";
    echo "<td style='width: 25%;'>" . $row["email"] . "</td>";
    echo "<td style='width: 25%;'>" . $row["message"] . "</td>";
    echo "<td style='width: 25%;'><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No data found</td></tr>";
}

mysqli_close($conn);
?>
