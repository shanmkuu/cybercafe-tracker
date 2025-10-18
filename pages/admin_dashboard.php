<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - CyberCafe Tracker</title>
  <link rel="stylesheet" href="../css/main.css" />
</head>
<body class="min-h-screen bg-background">

  <!-- Header -->
  <header class="bg-surface shadow-card border-b border-subtle relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <h1 class="text-xl font-semibold text-text-primary">CyberCafe Tracker — Admin Dashboard</h1>
        <button id="logoutBtn" class="btn-secondary px-4 py-2 rounded-lg text-sm font-medium">Logout</button>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <!-- Add New Customer Section -->
    <section class="mb-8 card p-6">
      <h2 class="text-lg font-semibold text-text-primary mb-4">Add New Customer</h2>
      <p class="text-sm text-secondary-500 mb-6">Register a new customer manually below.</p>

      <form id="addUserForm" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-text-primary mb-2">Username</label>
          <input type="text" name="username" required
            class="w-full px-4 py-2 border border-subtle rounded-lg bg-surface focus:ring-2 focus:ring-primary focus:border-primary">
        </div>

        <div>
          <label class="block text-sm font-medium text-text-primary mb-2">Email</label>
          <input type="email" name="email" required
            class="w-full px-4 py-2 border border-subtle rounded-lg bg-surface focus:ring-2 focus:ring-primary focus:border-primary">
        </div>

        <div>
          <label class="block text-sm font-medium text-text-primary mb-2">Password</label>
          <input type="password" name="password" required
            class="w-full px-4 py-2 border border-subtle rounded-lg bg-surface focus:ring-2 focus:ring-primary focus:border-primary">
        </div>

        <div class="sm:col-span-2">
          <button type="submit" id="createBtn"
            class="btn-primary px-4 py-2 rounded-lg font-medium text-white hover:shadow-lg transition-all duration-200">
            Create Customer
          </button>
        </div>
      </form>

      <div id="responseMessage" class="mt-4 text-sm font-medium"></div>
    </section>

    <!-- Registered Customers Table -->
    <section>
      <div class="card p-6">
        <h2 class="text-lg font-semibold text-text-primary mb-4">Registered Customers</h2>
        <p class="text-sm text-secondary-500 mb-4">View recently added customers.</p>

        <div class="overflow-x-auto">
          <table class="w-full">
            <thead class="bg-secondary-100">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">Username</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">Email</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">Role</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">Created</th>
              </tr>
            </thead>
            <tbody id="customerTableBody" class="bg-surface divide-y divide-subtle"></tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <script>
    // Fetch customers dynamically
    async function fetchCustomers() {
      const response = await fetch('../backend/get_users.php');
      const data = await response.json();
      const tableBody = document.getElementById('customerTableBody');
      tableBody.innerHTML = '';

      data.forEach(user => {
        tableBody.innerHTML += `
          <tr>
            <td class="px-6 py-4">${user.username}</td>
            <td class="px-6 py-4">${user.email}</td>
            <td class="px-6 py-4">${user.role}</td>
            <td class="px-6 py-4">${user.created_at}</td>
          </tr>`;
      });
    }

    // Handle Add User form submit
    document.getElementById('addUserForm').addEventListener('submit', async (e) => {
      e.preventDefault();
      const form = e.target;
      const formData = new FormData(form);

      const response = await fetch('../backend/add_user.php', {
        method: 'POST',
        body: formData
      });

      const result = await response.json();
      const msgDiv = document.getElementById('responseMessage');

      if (result.success) {
        msgDiv.textContent = '✅ ' + result.message;
        msgDiv.className = 'mt-4 text-sm font-medium text-success';
        form.reset();
        fetchCustomers();
      } else {
        msgDiv.textContent = '❌ ' + result.message;
        msgDiv.className = 'mt-4 text-sm font-medium text-error';
      }
    });

    // Initial fetch
    fetchCustomers();
  </script>
</body>
</html>
