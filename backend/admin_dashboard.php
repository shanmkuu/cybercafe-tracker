<?php
session_start();
include("../backend/db.php");

// Ensure only admins can access
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.html");
    exit();
}

// Fetch all users
$users = $conn->query("SELECT user_id, username, role, created_at FROM users");

// Fetch all active sessions
$sessions = $conn->query("SELECT s.session_id, u.username, s.pc_id, s.login_time, s.status 
                          FROM sessions s 
                          JOIN users u ON s.user_id=u.user_id 
                          ORDER BY s.login_time DESC");

// Fetch file logs
$filelogs = $conn->query("SELECT f.log_id, u.username, f.file_name, f.action, f.timestamp 
                          FROM filelogs f 
                          JOIN sessions s ON f.session_id = s.session_id
                          JOIN users u ON s.user_id = u.user_id
                          ORDER BY f.timestamp DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../css/main.css">
</head>
<body class="p-6 bg-gray-100">
  <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
  <p>Welcome, <?php echo $_SESSION['username']; ?> | <a href="../backend/logout.php">Logout</a></p>

  <h2 class="text-xl mt-6 mb-2">👥 Users</h2>
  <table border="1" cellpadding="5" class="mb-6">
    <tr><th>ID</th><th>Username</th><th>Role</th><th>Created At</th></tr>
    <?php while($row = $users->fetch_assoc()): ?>
      <tr>
        <td><?= $row['user_id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['role'] ?></td>
        <td><?= $row['created_at'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>

  <h2 class="text-xl mt-6 mb-2">💻 Active Sessions</h2>
  <table border="1" cellpadding="5" class="mb-6">
    <tr><th>Session ID</th><th>User</th><th>PC</th><th>Login Time</th><th>Status</th></tr>
    <?php while($row = $sessions->fetch_assoc()): ?>
      <tr>
        <td><?= $row['session_id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['pc_id'] ?></td>
        <td><?= $row['login_time'] ?></td>
        <td><?= $row['status'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>

  <h2 class="text-xl mt-6 mb-2">📂 File Logs</h2>
  <table border="1" cellpadding="5">
    <tr><th>Log ID</th><th>User</th><th>File</th><th>Action</th><th>Time</th></tr>
    <?php while($row = $filelogs->fetch_assoc()): ?>
      <tr>
        <td><?= $row['log_id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td><?= $row['file_name'] ?></td>
        <td><?= $row['action'] ?></td>
        <td><?= $row['timestamp'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
