<?php
require__DIR__.'/../src/bootstrap.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
    case '' :
        require__DIR__.'/../src/Controllers/HomeController.php';
        break;
    default:
        http_response_code(404);
        require__DIR__.'/../src/Views/404.php';
        break;
}
