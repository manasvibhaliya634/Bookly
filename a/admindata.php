<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookly_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get total users
function getTotalUsers($conn) {
    $sql = "SELECT COUNT(*) as total FROM users";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get total orders (assuming you have an orders table)
function getTotalOrders($conn) {
    $sql = "SELECT COUNT(*) as total FROM orders";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get total products (assuming you have a products table)
function getTotalProducts($conn) {
    $sql = "SELECT COUNT(*) as total FROM products";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get total revenue (assuming you have an orders table with a total_amount column)
function getTotalRevenue($conn) {
    $sql = "SELECT SUM(total_amount) as total FROM orders";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['total'];
}

// Function to get recent orders
function getRecentOrders($conn) {
    $sql = "SELECT o.id, u.full_name, p.name as product_name, o.total_amount, o.status 
            FROM orders o 
            JOIN users u ON o.user_id = u.id 
            JOIN products p ON o.product_id = p.id 
            ORDER BY o.created_at DESC 
            LIMIT 5";
    $result = $conn->query($sql);
    $orders = [];
    while ($row = $result->fetch_assoc()) {
        $orders[] = $row;
    }
    return $orders;
}

// Function to get recent users
function getRecentUsers($conn) {
    $sql = "SELECT id, full_name, email, 'Customer' as role FROM users ORDER BY created_at DESC LIMIT 5";
    $result = $conn->query($sql);
    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

// Get data for the admin panel
$totalUsers = getTotalUsers($conn);
$totalOrders = getTotalOrders($conn);
$totalProducts = getTotalProducts($conn);
$totalRevenue = getTotalRevenue($conn);
$recentOrders = getRecentOrders($conn);
$recentUsers = getRecentUsers($conn);

$conn->close();
?>