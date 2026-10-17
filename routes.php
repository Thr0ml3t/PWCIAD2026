<?php

$router->get('/', 'controllers/main.php');
$router->get('/pokemon', 'controllers/pokemon.php')->only('auth');
$router->get('/movies', 'controllers/movies.php')->only('auth');

// Ruta API para buscar películas (Buscar como proteger api)
$router->get('/movie/search', 'controllers/movies_search_api.php');

$router->get('/login', 'controllers/auth/login.php');
$router->post('/login', 'controllers/auth/login.php');
