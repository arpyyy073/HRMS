<?php
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($request) {
  case '/login':
    require __DIR__ . '/templates/auth/login.php';
    break;

  case '/dashboard':
    require __DIR__ . '/templates/dashboard/dashboard.php';
    break;

  case '/employee':
    require __DIR__ . '/templates/employee/employee.php';
    break;



  case '/':
  case '/index.php':
    header("Location: /login");
    exit;

  default:
    http_response_code(404);
    require __DIR__ . '/templates/errors/404.html';
    break;
}
