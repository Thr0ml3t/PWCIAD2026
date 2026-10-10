<?php

use Models\Movie;

$movies = (new Movie())->search($_GET['term'] ?? '');

header('Content-Type: application/json');

echo json_encode($movies);
