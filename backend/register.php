<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $conn->real_escape_string($_POST["username"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = $_POST["role"] ?? "customer";

    $sql = "INSERT INTO users (username, password_hash, role) 
            VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql)) {
        echo "User registered successfully. <a href='../pages/login.html'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
