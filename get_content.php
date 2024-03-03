<?php

$conn = mysqli_connect("localhost", "root", "", "portfolio");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>About Content</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>
<body>

<table>
    <tr>
        <th style='width: 80%;'>Content</th>
        <th>Action</th>
    </tr>

    <?php
    
    $sql = "SELECT id, content FROM about_content";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='width: 80%;'>" . $row["content"] . "</td>";
            echo "<td><a href='update.php?id=" . $row["id"] . "'>UPDATE</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No data found</td></tr>";
    }

    mysqli_close($conn);
    ?>

</table>

</body>
</html>