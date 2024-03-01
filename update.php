<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database
    $conn = mysqli_connect("localhost", "root", "", "portfolio");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the updated content and sanitize it
    $updatedContent = mysqli_real_escape_string($conn, $_POST['updated_content']);
    $id = $_POST['id'];

    // Perform the update query
    $sql = "UPDATE about_content SET content='$updatedContent' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        // Redirect to admin.php after successful update
        header("location: admin.php");
        exit; // Exit after redirection
    } else {
        echo "Error updating content: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}

// Fetch the content to be updated
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "portfolio");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Fetch the content based on the provided id
    $sql = "SELECT content FROM about_content WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $content = $row['content'];
    } else {
        echo "No data found";
    }
    // Close connection
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
