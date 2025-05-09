<?php
require __DIR__ . '/../src/bootstrap.php';

// Simple router
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
    case '':
        require __DIR__ . '/../src/Controllers/HomeController.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../src/Views/404.php';
        break;
}