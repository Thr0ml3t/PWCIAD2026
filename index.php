<?php
    
$router = [
    "/" => [
        "controller" => "main",
        "view" => "main"
    ],
    "/pokemon" => [
        "controller" => "pokemon",
        "view" => "pokemon"
    ],
    "/movies" => [
        "controller" => "movies",
        "view" => "movies"
    ],
    "/movie/search" => [
        "controller" => "movies_search_api",
        "view" => ""
    ]
];

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($path, $router)) {
    $route = $router[$path];
    require_once "controllers/{$route['controller']}.php";
    if(!empty($route['view'])) {
        require_once "views/{$route['view']}.php";
    }
} else {
    http_response_code(404);
    echo "404 Not Found";
}