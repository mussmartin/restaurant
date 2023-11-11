<?php

// Database configuration
define('DB_HOST', 'localhost'); 
define('DB_USER', 'username'); 
define('DB_PASS', 'password'); 
define('DB_NAME', 'restaurant_db'); 

// Establish database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check for database connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Base URL for the website
define('BASE_URL', 'http://localhost/restaurant/');

// Paths
define('INCLUDES_PATH', __DIR__ . '/includes/'); // Path to includes directory
define('TEMPLATES_PATH', __DIR__ . '/templates/'); // Path to templates directory

// Start the session
session_start();

// Include necessary files
require_once(INCLUDES_PATH . 'functions.php'); // Common functions
require_once(INCLUDES_PATH . 'db_functions.php'); // Database functions

// Include additional files as needed

?>
