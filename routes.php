<?php

$router->get('/', 'controllers/main.php');
$router->get('/pokemon', 'controllers/pokemon.php');
$router->get('/movies', 'controllers/movies.php');
$router->get('/movie/search', 'controllers/movies_search_api.php');

$router->get('/login', 'controllers/auth/login.php');
