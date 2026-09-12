<?php
    
$router = [
    "/" => "main",
    "/pokemon" => "pokemon",
    "/movies" => "movies"
];

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($path, $router)) {
    $controller = $router[$path];
    require_once "controllers/{$controller}.php";
    require_once "views/{$controller}.php";
} else {
    http_response_code(404);
    echo "404 Not Found";
}