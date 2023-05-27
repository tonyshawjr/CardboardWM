<?php
// Autoload classes
require_once __DIR__ . '/vendor/autoload.php';

// Start a new session or resume an existing one
session_start();

// Use request_uri to capture the path requested by user
$request = $_SERVER['REQUEST_URI'];

// Use switch case to require the correct view based on the request
switch ($request) {
    case '/':
        require __DIR__ . '/src/view/indexView.php';
        break;

    case '/login':
        require __DIR__ . '/src/view/loginView.php';
        break;

    case '/register':
        require __DIR__ . '/src/view/registerView.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/src/view/404.php';
        break;
}
