<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - CyberCafe Tracker</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="icon" type="image/x-icon" href="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fcybercafe1027back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.8"></script>
</head>
<body class="min-h-screen bg-background">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5 pointer-events-none">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25px 25px, #2563EB 2px, transparent 0), radial-gradient(circle at 75px 75px, #0EA5E9 2px, transparent 0); background-size: 100px 100px;"></div>
    </div>

    <!-- Header -->
    <header class="bg-surface shadow-card border-b border-subtle relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo and Title -->
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-semibold text-text-primary">CyberCafe Tracker</h1>
                        <p class="text-sm text-secondary-500">Administrator Dashboard</p>
                    </div>
                </div>

                <!-- User Info and Actions -->
                <div class="flex items-center space-x-4">
                    <!-- Current Time -->
                    <div class="hidden sm:flex items-center space-x-2 text-sm text-secondary-500">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        <span id="currentTime">--:--:--</span>
                    </div>

                    <!-- Admin Profile -->
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="hidden sm:block">
                            <p class="text-sm font-medium text-text-primary" id="adminUsername">Administrator</p>
                            <p class="text-xs text-secondary-500">Admin Access</p>
                        </div>
                    </div>

                    <!-- Logout Button -->
                    <button id="logoutBtn" class="btn-secondary px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:shadow-md">
                        <svg class="w-4 h-4 mr-2 inline" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"/>
                        </svg>
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 relative z-10">
        <!-- Summary Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Active Sessions Card -->
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-secondary-500">Active Sessions</p>
                        <p class="text-3xl font-semibold text-text-primary" id="activeSessions">5</p>
                        <p class="text-sm text-success mt-1">
                            <span class="inline-flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L10 4.414 4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                </svg>
                                +2 from yesterday
                            </span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Daily Logins Card -->
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-secondary-500">Daily Logins</p>
                        <p class="text-3xl font-semibold text-text-primary" id="dailyLogins">23</p>
                        <p class="text-sm text-primary mt-1">
                            <span class="inline-flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Normal activity
                            </span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Security Alerts Card -->
            <div class="card p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-secondary-500">Security Alerts</p>
                        <p class="text-3xl font-semibold text-text-primary" id="securityAlerts">2</p>
                        <p class="text-sm text-warning mt-1">
                            <span class="inline-flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                Requires attention
                            </span>
                        </p>
                    </div>
                    <div class="w-12 h-12 bg-warning-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-warning" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Sessions Section -->
        <section class="mb-8">
            <div class="card">
                <!-- Section Header -->
                <div class="p-6 border-b border-subtle">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
                        <div>
                            <h2 class="text-lg font-semibold text-text-primary">Active Sessions</h2>
                            <p class="text-sm text-secondary-500">Monitor and manage current user sessions</p>
                        </div>
                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3">
                            <!-- Search -->
                            <div class="relative">
                                <input type="text" id="sessionSearch" placeholder="Search sessions..." class="w-full sm:w-64 px-4 py-2 pl-10 border border-subtle rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-surface" />
                                <svg class="absolute left-3 top-2.5 w-4 h-4 text-secondary-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <!-- Export Button -->
                            <div class="relative">
                                <button id="exportBtn" class="btn-primary px-4 py-2 rounded-lg text-sm font-medium flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    Export
                                </button>
                                <!-- Export Dropdown -->
                                <div id="exportDropdown" class="hidden absolute right-0 mt-2 w-48 bg-surface rounded-lg shadow-modal border border-subtle z-20">
                                    <div class="py-1">
                                        <button class="export-option w-full text-left px-4 py-2 text-sm text-text-primary hover:bg-secondary-100" data-format="csv">
                                            Export as CSV
                                        </button>
                                        <button class="export-option w-full text-left px-4 py-2 text-sm text-text-primary hover:bg-secondary-100" data-format="pdf">
                                            Export as PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sessions Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-secondary-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider cursor-pointer hover:bg-secondary-200" data-sort="username">
                                    <div class="flex items-center space-x-1">
                                        <span>Username</span>
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider cursor-pointer hover:bg-secondary-200" data-sort="loginTime">
                                    <div class="flex items-center space-x-1">
                                        <span>Login Time</span>
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider cursor-pointer hover:bg-secondary-200" data-sort="duration">
                                    <div class="flex items-center space-x-1">
                                        <span>Duration</span>
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M5 12a1 1 0 102 0V6.414l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L5 6.414V12zM15 8a1 1 0 10-2 0v5.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L15 13.586V8z"/>
                                        </svg>
                                    </div>
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Current Activity
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody id="sessionsTableBody" class="bg-surface divide-y divide-subtle">
                            <!-- Sessions will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Tampering Logs Section -->
        <section>
            <div class="card">
                <!-- Section Header -->
                <div class="p-6 border-b border-subtle">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-4 sm:space-y-0">
                        <div>
                            <h2 class="text-lg font-semibold text-text-primary">Security & Tampering Logs</h2>
                            <p class="text-sm text-secondary-500">Monitor security events and potential threats</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <!-- Filter -->
                            <select id="logFilter" class="px-3 py-2 border border-subtle rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-surface text-sm">
                                <option value="all">All Events</option>
                                <option value="warning">Warnings</option>
                                <option value="error">Critical</option>
                                <option value="info">Information</option>
                            </select>
                            <!-- Refresh Button -->
                            <button id="refreshLogs" class="btn-secondary px-3 py-2 rounded-lg text-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Logs Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-secondary-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Timestamp
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Event Type
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Affected User
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Description
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-secondary-600 uppercase tracking-wider">
                                    Severity
                                </th>
                            </tr>
                        </thead>
                        <tbody id="logsTableBody" class="bg-surface divide-y divide-subtle">
                            <!-- Logs will be populated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <!-- Confirmation Modal -->
    <div id="confirmModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="modal p-6 max-w-md w-full mx-4">
            <div class="flex items-center space-x-3 mb-4">
                <div class="w-10 h-10 bg-warning-100 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-warning" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-text-primary" id="modalTitle">Confirm Action</h3>
            </div>
            <p class="text-secondary-600 mb-6" id="modalMessage">Are you sure you want to perform this action?</p>
            <div class="flex justify-end space-x-3">
                <button id="modalCancel" class="btn-secondary px-4 py-2 rounded-lg text-sm font-medium">
                    Cancel
                </button>
                <button id="modalConfirm" class="btn-primary px-4 py-2 rounded-lg text-sm font-medium">
                    Confirm
                </button>
            </div>
        </div>
    </div>

    <script>
        // Mock data for sessions and logs
        const mockSessions = [
            {
                id: 1,
                username: 'john_doe',
                loginTime: '2025-09-27T14:30:00',
                activity: 'File Management',
                status: 'active'
            },
            {
                id: 2,
                username: 'sarah_wilson',
                loginTime: '2025-09-27T15:15:00',
                activity: 'Document Editing',
                status: 'active'
            },
            {
                id: 3,
                username: 'mike_johnson',
                loginTime: '2025-09-27T16:00:00',
                activity: 'Web Browsing',
                status: 'active'
            },
            {
                id: 4,
                username: 'emma_davis',
                loginTime: '2025-09-27T16:45:00',
                activity: 'Email Client',
                status: 'idle'
            },
            {
                id: 5,
                username: 'alex_brown',
                loginTime: '2025-09-27T17:20:00',
                activity: 'Gaming',
                status: 'active'
            }
        ];

        const mockLogs = [
            {
                id: 1,
                timestamp: '2025-09-27T18:25:00',
                type: 'Failed Login',
                user: 'unknown_user',
                description: 'Multiple failed login attempts detected',
                severity: 'warning'
            },
            {
                id: 2,
                timestamp: '2025-09-27T17:45:00',
                type: 'Unauthorized Access',
                user: 'guest_user',
                description: 'Attempt to access restricted files',
                severity: 'error'
            },
            {
                id: 3,
                timestamp: '2025-09-27T16:30:00',
                type: 'Session Timeout',
                user: 'inactive_user',
                description: 'Session terminated due to inactivity',
                severity: 'info'
            },
            {
                id: 4,
                timestamp: '2025-09-27T15:20:00',
                type: 'File Modification',
                user: 'system_admin',
                description: 'System configuration file modified',
                severity: 'info'
            }
        ];

        // DOM elements
        const currentTimeElement = document.getElementById('currentTime');
        const adminUsernameElement = document.getElementById('adminUsername');
        const sessionsTableBody = document.getElementById('sessionsTableBody');
        const logsTableBody = document.getElementById('logsTableBody');
        const sessionSearch = document.getElementById('sessionSearch');
        const logFilter = document.getElementById('logFilter');
        const exportBtn = document.getElementById('exportBtn');
        const exportDropdown = document.getElementById('exportDropdown');
        const logoutBtn = document.getElementById('logoutBtn');
        const confirmModal = document.getElementById('confirmModal');
        const modalTitle = document.getElementById('modalTitle');
        const modalMessage = document.getElementById('modalMessage');
        const modalCancel = document.getElementById('modalCancel');
        const modalConfirm = document.getElementById('modalConfirm');

        // Initialize dashboard
        function initializeDashboard() {
            // Check authentication
            const currentUser = localStorage.getItem('currentUser');
            if (!currentUser) {
                window.location.href = 'login.html';
                return;
            }

            const user = JSON.parse(currentUser);
            if (user.role !== 'admin') {
                window.location.href = 'login.html';
                return;
            }

            adminUsernameElement.textContent = user.username;
            updateCurrentTime();
            renderSessions();
            renderLogs();
            
            // Update time every second
            setInterval(updateCurrentTime, 1000);
            
            // Update session durations every minute
            setInterval(renderSessions, 60000);
        }

        // Update current time
        function updateCurrentTime() {
            const now = new Date();
            currentTimeElement.textContent = now.toLocaleTimeString();
        }

        // Calculate session duration
        function calculateDuration(loginTime) {
            const now = new Date();
            const login = new Date(loginTime);
            const diff = now - login;
            
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            
            return `${hours}h ${minutes}m`;
        }

        // Render sessions table
        function renderSessions(filteredSessions = mockSessions) {
            sessionsTableBody.innerHTML = '';
            
            filteredSessions.forEach(session => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-secondary-50 transition-colors';
                
                const statusClass = session.status === 'active' ? 'status-success' : 'status-warning';
                const statusText = session.status === 'active' ? 'Active' : 'Idle';
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-text-primary">${session.username}</div>
                                <div class="text-sm text-secondary-500">User ID: ${session.id}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-text-primary font-data">${new Date(session.loginTime).toLocaleString()}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-text-primary font-data">${calculateDuration(session.loginTime)}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-text-primary">${session.activity}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="status-indicator ${statusClass}">${statusText}</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex items-center space-x-2">
                            <button 
                                class="text-primary hover:text-primary-700 transition-colors"
                                onclick="viewSessionDetails(${session.id})"
                                title="View Details"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                            <button 
                                class="text-error hover:text-red-700 transition-colors"
                                onclick="terminateSession(${session.id}, '${session.username}')"
                                title="Terminate Session"
                            >
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                `;
                
                sessionsTableBody.appendChild(row);
            });
        }

        // Render logs table
        function renderLogs(filteredLogs = mockLogs) {
            logsTableBody.innerHTML = '';
            
            filteredLogs.forEach(log => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-secondary-50 transition-colors';
                
                let severityClass = 'status-indicator ';
                switch(log.severity) {
                    case 'error':
                        severityClass += 'status-error';
                        break;
                    case 'warning':
                        severityClass += 'status-warning';
                        break;
                    default:
                        severityClass += 'bg-secondary-100 text-secondary-600';
                }
                
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-text-primary font-data">${new Date(log.timestamp).toLocaleString()}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-text-primary">${log.type}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-text-primary">${log.user}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-secondary-600">${log.description}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="${severityClass}">${log.severity.charAt(0).toUpperCase() + log.severity.slice(1)}</span>
                    </td>
                `;
                
                logsTableBody.appendChild(row);
            });
        }

        // Search sessions
        sessionSearch.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const filtered = mockSessions.filter(session => 
                session.username.toLowerCase().includes(searchTerm) ||
                session.activity.toLowerCase().includes(searchTerm)
            );
            renderSessions(filtered);
        });

        // Filter logs
        logFilter.addEventListener('change', function() {
            const filterValue = this.value;
            const filtered = filterValue === 'all' 
                ? mockLogs 
                : mockLogs.filter(log => log.severity === filterValue);
            renderLogs(filtered);
        });

        // Export functionality
        exportBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            exportDropdown.classList.toggle('hidden');
        });

        // Close export dropdown when clicking outside
        document.addEventListener('click', function() {
            exportDropdown.classList.add('hidden');
        });

        // Export options
        document.querySelectorAll('.export-option').forEach(option => {
            option.addEventListener('click', function() {
                const format = this.dataset.format;
                exportData(format);
                exportDropdown.classList.add('hidden');
            });
        });

        // Export data function
        function exportData(format) {
            if (format === 'csv') {
                exportToCSV();
            } else if (format === 'pdf') {
                exportToPDF();
            }
        }

        function exportToCSV() {
            const headers = ['Username', 'Login Time', 'Duration', 'Activity', 'Status'];
            const csvContent = [
                headers.join(','),
                ...mockSessions.map(session => [
                    session.username,
                    new Date(session.loginTime).toLocaleString(),
                    calculateDuration(session.loginTime),
                    session.activity,
                    session.status
                ].join(','))
            ].join('\n');

            const blob = new Blob([csvContent], { type: 'text/csv' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `cybercafe-sessions-${new Date().toISOString().split('T')[0]}.csv`;
            a.click();
            window.URL.revokeObjectURL(url);
        }

        function exportToPDF() {
            // Simulate PDF export
            alert('PDF export functionality would be implemented with a library like jsPDF');
        }

        // Session actions
        function viewSessionDetails(sessionId) {
            const session = mockSessions.find(s => s.id === sessionId);
            if (session) {
                alert(`Session Details:\nUser: ${session.username}\nLogin: ${new Date(session.loginTime).toLocaleString()}\nActivity: ${session.activity}\nStatus: ${session.status}`);
            }
        }

        function terminateSession(sessionId, username) {
            showConfirmModal(
                'Terminate Session',
                `Are you sure you want to terminate the session for user "${username}"? This action cannot be undone.`,
                () => {
                    // Remove session from mock data
                    const index = mockSessions.findIndex(s => s.id === sessionId);
                    if (index > -1) {
                        mockSessions.splice(index, 1);
                        renderSessions();
                        
                        // Update active sessions count
                        document.getElementById('activeSessions').textContent = mockSessions.length;
                        
                        // Add to logs
                        mockLogs.unshift({
                            id: mockLogs.length + 1,
                            timestamp: new Date().toISOString(),
                            type: 'Session Terminated',
                            user: username,
                            description: 'Session terminated by administrator',
                            severity: 'info'
                        });
                        renderLogs();
                    }
                }
            );
        }

        // Modal functions
        function showConfirmModal(title, message, onConfirm) {
            modalTitle.textContent = title;
            modalMessage.textContent = message;
            confirmModal.classList.remove('hidden');
            
            modalConfirm.onclick = () => {
                onConfirm();
                hideConfirmModal();
            };
        }

        function hideConfirmModal() {
            confirmModal.classList.add('hidden');
        }

        modalCancel.addEventListener('click', hideConfirmModal);

        // Refresh logs
        document.getElementById('refreshLogs').addEventListener('click', function() {
            // Simulate refresh with loading state
            this.disabled = true;
            this.innerHTML = '<svg class="w-4 h-4 animate-spin" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/></svg>';
            
            setTimeout(() => {
                renderLogs();
                this.disabled = false;
                this.innerHTML = '<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"/></svg>';
            }, 1000);
        });

        // Table sorting
        document.querySelectorAll('[data-sort]').forEach(header => {
            header.addEventListener('click', function() {
                const sortBy = this.dataset.sort;
                // Implement sorting logic here
                console.log('Sorting by:', sortBy);
            });
        });

        // Logout functionality
        logoutBtn.addEventListener('click', function() {
            showConfirmModal(
                'Confirm Logout',
                'Are you sure you want to logout? You will be redirected to the login page.',
                () => {
                    localStorage.removeItem('currentUser');
                    window.location.href = 'login.html';
                }
            );
        });

        // Initialize dashboard when page loads
        window.addEventListener('load', initializeDashboard);
    </script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>
</html>