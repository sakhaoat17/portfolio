<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
  <nav>
    <div class="logo">
      <img src="images/cover.png" class="logo">
    </div>
    <ul>
      <li><a href="#home">messages</a></li>
      <li><a href="#about">About me</a></li>
      <li><a href="index.php">portfolio</a></li>
      <li><a href="#"></a></li>
    </ul>
  </nav>
  <section id="home">
  <div class="table-container">
        <h2>Data Entries</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php include 'display_data.php'; ?>
        </table>
    </div>
  </section>
  <section id="about">
  <div class="table_content">
        <h2>About ME</h2>
        <table class="full-width">
            <tr>
                <th>Content</th>
                <th>Action</th>
            </tr>
            <?php include 'get_content.php'; ?>
        </table>
    </div>


  </section>
  

</body>
</html>