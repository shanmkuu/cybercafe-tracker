<?php
session_start();
$error = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CyberCafe Tracker - Secure Login</title>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="icon" type="image/x-icon" href="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
</head>
<body class="min-h-screen bg-background flex items-center justify-center p-4">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25px 25px, #2563EB 2px, transparent 0), radial-gradient(circle at 75px 75px, #0EA5E9 2px, transparent 0); background-size: 100px 100px;"></div>
    </div>
    <div class="relative w-full max-w-md">
        <div class="flex justify-center mb-6">
            <div class="flex items-center space-x-2 bg-success-100 text-success px-3 py-1 rounded-full text-sm font-medium">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                </svg>
                <span>SSL Secured</span>
            </div>
        </div>
        <div class="card p-8 shadow-modal">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                        </svg>
                    </div>
                </div>
                <h1 class="text-2xl font-semibold text-text-primary mb-2">CyberCafe Tracker</h1>
                <p class="text-secondary-500">Secure access to your session management</p>
            </div>
            <form class="space-y-6" method="POST" action="../backend/login.php">
                <div>
                    <label for="username" class="block text-sm font-medium text-text-primary mb-2">
                        Username
                    </label>
                    <div class="relative">
                        <input type="text" id="username" name="username" required class="w-full px-4 py-3 border border-subtle rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 bg-surface" placeholder="Enter your username" />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="w-5 h-5 text-secondary-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-text-primary mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <input type="password" id="password" name="password" required class="w-full px-4 py-3 border border-subtle rounded-lg focus:ring-2 focus:ring-primary focus:border-primary transition-all duration-200 bg-surface pr-12" placeholder="Enter your password" />
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center" tabindex="-1">
                            <svg id="eyeIcon" class="w-5 h-5 text-secondary-400 hover:text-secondary-600 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <?php if ($error): ?>
                    <div class="p-3 bg-error-100 border border-error text-error rounded-lg text-sm"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <button type="submit" class="w-full btn-primary py-3 px-4 rounded-lg font-medium text-white transition-all duration-200 hover:shadow-lg disabled:opacity-50 disabled:cursor-not-allowed">
                    <span>Sign In</span>
                </button>
            </form>
        </div>
        <div class="flex justify-center items-center space-x-6 mt-6 text-sm text-secondary-500">
            <div class="flex items-center space-x-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span>Secure</span>
            </div>
            <div class="flex items-center space-x-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                <span>Trusted</span>
            </div>
            <div class="flex items-center space-x-1">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span>Verified</span>
            </div>
        </div>
        <div class="text-center mt-8 text-xs text-secondary-400">
            © 2025 CyberCafe Tracker. All Rights Reserved.
        </div>
    </div>
    <script>
        // Password visibility toggle
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if (type === 'text') {
                eyeIcon.innerHTML = `
                    <path d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"/>
                    <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"/>
                `;
            } else {
                eyeIcon.innerHTML = `
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                `;
            }
        });
    </script>
</body>
</html>
