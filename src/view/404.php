<?php
session_start(); // Start a new session or resume an existing one

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Not logged in
    if ($_GET['request'] != '/login') {
        // Redirect to login if the current page is not login
        header("location: /login");
        exit;
    }
} else {
    // Logged in
    if ($_GET['request'] == '/login') {
        // If the user is already logged in and is trying to access the login page, redirect to the home page
        header("location: /");
        exit;
    }
}

include_once 'header.php'; 
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="text-center">
        <h1 class="text-6xl font-bold text-gray-700 mb-4">Oops!</h1>
        <h2 class="text-4xl text-gray-500 mb-8">404 - Page Not Found</h2>
        <p class="text-gray-500">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        <a href="/" class="text-blue-500">Go to Homepage</a>
    </div>
include_once 'footer.php';