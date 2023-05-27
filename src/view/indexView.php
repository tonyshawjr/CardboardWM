<?php
ob_start(); // Start output buffering

session_start(); // Start a new session or resume an existing one

// Check if the 'request' key is set in the $_GET array before using it
$request = $_GET['request'] ?? '';

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // Not logged in
    if ($request != '/login' && $request != '/register') {
        // Redirect to login if the current page is not login or register
        header("location: /login");
        exit;
    }
} else {
    // Logged in
    if ($request == '/login' || $request == '/register') {
        // If the user is already logged in and is trying to access the login or register page, redirect to the home page
        header("location: /");
        exit;
    }
}

include_once __DIR__ . '/../header.php'; 
// Rest of the file...

include_once __DIR__ . '/../footer.php';

ob_end_flush(); // Flush the output buffer and stop buffering
