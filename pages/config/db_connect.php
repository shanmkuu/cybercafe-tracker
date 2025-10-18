<?php
$servername = "localhost";
$username = "root";       // default for XAMPP
$password = "";           // leave empty unless you set one
$database = "cybercafe";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
