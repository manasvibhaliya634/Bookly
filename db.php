<?php
$host = 'localhost';
$dbname = 'bookly_db'; // Your database name
$username = 'root'; // Default MySQL username
$password = ''; // Leave it empty if you haven't set a password for MySQL

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
