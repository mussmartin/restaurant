<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>
</head>

<body>
    <h1>Welcome to Restaurant Management System</h1>

    <?php
    // Include the PHP file for database connection
    include("connect.php");

    // Create database connection
  $db = mysqli_connect($servername, $username, $password, $dbname); // connecting 

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";

    // Close the database connection
    $conn->close();
    ?>
</body>

</html>
