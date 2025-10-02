# cybercafe-tracker
🖥️ CyberCafe Tracker

A web-based session tracking system designed for cyber cafés to monitor user sessions, detect tampering, and improve data security. This project integrates with tools like Deep Freeze to ensure workstation integrity while maintaining tamper-proof session logs.

🚀 Features

Login System: Customers and admins log in with unique credentials.

Session Tracking: Records login and logout times.

Admin Dashboard: View active sessions and tampering alerts.

File Activity Logs: Track file creation, modification, or deletion.

Integration with Deep Freeze: Ensures café machines reset to a clean state after reboot.

Tailwind CSS: Modern, responsive, mobile-first design.

📂 Project Structure
cybercafe-tracker/
├── index.html                 # Landing page (redirect to login)
├── pages/
│   ├── login.html             # Login page
│   └── dashboard.html         # Admin dashboard
├── css/
│   ├── tailwind.css           # Tailwind source
│   └── main.css               # Compiled CSS
├── js/
│   └── script.js              # Custom JavaScript
├── php/
│   └── connect.php            # Backend PHP connection 
├── assets/
│   └── logo.png               # Logos, images
├── package.json               # NPM dependencies
├── tailwind.config.js         # Tailwind config
├── .gitignore                 # Git ignored files
└── README.md                  # Project description

⚙️ Installation & Setup
Prerequisites

Node.js
 (v12 or higher)

npm
 or yarn

A local server environment (XAMPP/WAMP) if using PHP + MySQL

Steps

Clone the repository:

git clone https://github.com/shanmkuu/cybercafe-tracker.git
cd cybercafe-tracker


Install dependencies:

npm install


Build CSS using Tailwind:

npm run build:css


or watch for changes:

npm run dev


Open index.html in your browser to preview.

📊 Tech Stack

Frontend: HTML5, Tailwind CSS, JavaScript

Backend (optional): PHP/MySQL

Security: Deep Freeze integration (system-level protection)

Version Control: Git/GitHub

🎯 Project Purpose

This project is part of an academic case study on document tampering in cyber cafés. It provides a prototype solution to:

Track user activity.

Detect and log tampering attempts.

Restore machines to a safe state after each session.

🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you’d like to change.


