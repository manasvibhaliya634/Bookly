<?php
session_start();
if (!isset($_SESSION['username'])) { // Change this line
    header("Location: login.php");
    exit();
}

// Database connection file
include('../db.php'); 
$username = $_SESSION['username']; // Change to get username from session

// Fetch user data (including name, username, and email)
$stmt = $conn->prepare("SELECT name, username, email FROM usersdb WHERE username = ?"); // Use username for selection
$stmt->bind_param('s', $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

if (!$user) {
    die("User not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .profile-container h2 {
            margin-bottom: 1rem;
        }

        .profile-info {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .profile-info p {
            margin: 0.5rem 0;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .button-container a {
            padding: 0.8rem 1rem;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }

        .logout-button {
            background-color: #dc3545; /* Red */
        }

        .home-button {
            background-color: #28a745; /* Green */
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .home-button:hover {
            background-color: #218838; /* Darker green */
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2> <!-- Displaying name -->
        <div class="profile-info">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p> <!-- Displaying username -->
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p> <!-- Displaying email -->
        </div>
        <div class="button-container">
            <a href="logout.php" class="logout-button">Logout</a>
            <a href="home.php" class="home-button">HOME</a> <!-- Home button -->
        </div>
    </div>
</body>
</html>
