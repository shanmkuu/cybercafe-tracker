<?php
include 'db_connect.php'; // ensure it connects to your database

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'customer';

    if (!$username || !$email || !$password) {
        echo json_encode(['success' => false, 'message' => 'All fields are required']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $password, $role);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Customer added successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error adding customer: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>
