<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = mysqli_connect("localhost", "root", "", "portfolio");

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $updatedContent = mysqli_real_escape_string($conn, $_POST['updated_content']);
    $id = $_POST['id'];

    
    $sql = "UPDATE about_content SET content='$updatedContent' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        
        header("location: admin.php");
        exit; 
    } else {
        echo "Error updating content: " . mysqli_error($conn);
    }

    
    mysqli_close($conn);
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $conn = mysqli_connect("localhost", "root", "", "portfolio");
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT content FROM about_content WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $content = $row['content'];
    } else {
        echo "No data found";
    }
    
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Content</title>
    <link rel="stylesheet" href="update-style.css">
</head>
<body>
    <h2>Update Content</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="updated_content">Updated Content:</label><br>
        <textarea id="updated_content" name="updated_content"  rows="4" cols="200"><?php echo $content; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
