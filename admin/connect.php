<?php

// Database configuration for both admin & front end 
$servername = "localhost"; // Database host (usually 'localhost')
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "restaurant_db"; // Database name

// Create database connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 

// Check for database connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Base URL for the website
define('BASE_URL', 'http://localhost/restaurant/');

// Other configuration settings
define('SITE_NAME', 'restaurant'); // Your restaurant's name
define('ADMIN_EMAIL', 'admin@example.com'); // Admin email address

// Define other constants or configuration settings as needed

?>
