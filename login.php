<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Hardcoded example credentials (In a real project, use a database!)
$valid_username = "admin";
$valid_password = "password123";

if ($username === $valid_username && $password === $valid_password) {
    // Success
    $_SESSION['username'] = $username;
    header("Location: dashboard.php"); // Redirect to dashboard after login
} else {
    // Failure
    echo "Invalid credentials. Please try again.";
}
?>
