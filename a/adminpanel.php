<?php
// Database connection for `bookly_db` (database for products, orders, etc.)
$servername = "localhost";
$username = "root";
$password = "";
$bookly_dbname = "bookly_db"; // Database for products, orders, etc.

// Connect to bookly_db
$conn = new mysqli($servername, $username, $password, $bookly_dbname);

// Check for connection errors for bookly_db
if ($conn->connect_error) {
    die("Connection to bookly_db failed: " . $conn->connect_error);
}

// Database connection for `usersdb` (user database)
$userdb_name = "usersdb"; // Ensure this is the correct database name
$user_conn = new mysqli($servername, $username, $password, $userdb_name);

// Check for connection errors for usersdb
if ($user_conn->connect_error) {
    die("Connection to usersdb failed: " . $user_conn->connect_error);
}

// Function to get total users from the `users` table in `usersdb`
function getTotalUsers($user_conn) {
    $sql = "SELECT COUNT(*) as total FROM users"; // Use the correct table name
    $result = $user_conn->query($sql);
    
    if (!$result) {
        die("Error in SQL query (getTotalUsers): " . $user_conn->error);
    }
    
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get total orders from `orders` table in `bookly_db`
function getTotalOrders($conn) {
    $sql = "SELECT COUNT(*) as total FROM orders"; // Ensure this table exists in bookly_db
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Error in SQL query (getTotalOrders): " . $conn->error);
    }
    
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get total products from `products` table in `bookly_db`
function getTotalProducts($conn) {
    $sql = "SELECT COUNT(*) as total FROM products"; // Ensure this table exists in bookly_db
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Error in SQL query (getTotalProducts): " . $conn->error);
    }
    
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get total revenue from `orders` table in `bookly_db`
function getTotalRevenue($conn) {
    $sql = "SELECT SUM(price) as total FROM products"; // Adjust based on your revenue calculation
    $result = $conn->query($sql);
    
    if (!$result) {
        die("Error in SQL query (getTotalRevenue): " . $conn->error);
    }
    
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Get data for the admin panel
$totalUsers = getTotalUsers($user_conn);
$totalOrders = getTotalOrders($conn);
$totalProducts = getTotalProducts($conn);
$totalRevenue = getTotalRevenue($conn);

// Close connections
$conn->close();
$user_conn->close();

// Display results (just an example)
echo "Total Users: $totalUsers<br>";
echo "Total Orders: $totalOrders<br>";
echo "Total Products: $totalProducts<br>";
echo "Total Revenue: $totalRevenue<br>";
?>
