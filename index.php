<?php

require_once 'Controller.php';

$requestUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$controller = new Controller();

if ($requestUri === '' || $requestUri === 'posts' || $requestUri === 'index.php/posts' || $requestUri == 'index.php') {
    $controller->index();
} else {
    http_response_code(404);
    echo json_encode(['ERROR' => 'Not Found']);
}
