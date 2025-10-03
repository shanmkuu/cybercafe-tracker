<?php
session_start();
include("../backend/db.php");

// Ensure only customers can access
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'customer') {
    header("Location: login.html");
    exit();
}

// Get current user's session logs
$user_id = $_SESSION['user_id'];
$filelogs = $conn->query("SELECT file_name, action, timestamp 
                          FROM filelogs f
                          JOIN sessions s ON f.session_id = s.session_id
                          WHERE s.user_id = $user_id
                          ORDER BY timestamp DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My File Management</title>
  <link rel="stylesheet" href="../css/main.css">
</head>
<body class="p-6 bg-gray-100">
  <h1 class="text-2xl font-bold mb-4">My Files</h1>
  <p>Welcome, <?php echo $_SESSION['username']; ?> | <a href="../backend/logout.php">Logout</a></p>

  <form action="../backend/file_log.php" method="POST" class="mb-6">
    <input type="text" name="file_name" placeholder="File name" required>
    <select name="action" required>
      <option value="create">Create</option>
      <option value="modify">Modify</option>
      <option value="delete">Delete</option>
      <option value="open">Open</option>
    </select>
    <button type="submit">Log Action</button>
  </form>

  <h2 class="text-xl mb-2">📜 My File Logs</h2>
  <table border="1" cellpadding="5">
    <tr><th>File</th><th>Action</th><th>Time</th></tr>
    <?php while($row = $filelogs->fetch_assoc()): ?>
      <tr>
        <td><?= $row['file_name'] ?></td>
        <td><?= $row['action'] ?></td>
        <td><?= $row['timestamp'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
