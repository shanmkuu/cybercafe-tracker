<?php
session_start();
include("db.php");

// Check if user is logged in and has an active session
if (!isset($_SESSION['user_id']) || !isset($_SESSION['session_id'])) {
    echo "No active session found. Please log in again.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $session_id = intval($_SESSION['session_id']);  // from login.php
    $file_name  = $conn->real_escape_string($_POST['file_name']);
    $action     = $conn->real_escape_string($_POST['action']);

    // Generate a simple hash (you could use real file hashing later)
    $file_hash = md5($file_name . time());

    $sql = "INSERT INTO filelogs (session_id, file_name, action, file_hash, timestamp) 
            VALUES ('$session_id', '$file_name', '$action', '$file_hash', NOW())";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to customer dashboard
        header("Location: ../pages/customer_file_management.php");
        exit();
    } else {
        echo "Error logging file action: " . $conn->error;
    }
}
?>
