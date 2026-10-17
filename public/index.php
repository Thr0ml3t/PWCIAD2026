<?php

const BASE_PATH = __DIR__ . '/../';

session_start();

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    // Core\Database -> Core/Database.php
    require base_path(str_replace('\\', '/', $class) . '.php');
});

require base_path('bootstrap.php');

$router = new \Core\Router();
require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// HTML forms only send GET/POST; a hidden "_method" field fakes PUT/PATCH/DELETE
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
