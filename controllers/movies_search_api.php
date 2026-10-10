<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$terms = $_GET['term'] ?? '';

$query = "SELECT * FROM movies where
        year like :term or title like :term";

$moviesResult = $db->query($query, [
    ':term' => "%$terms%",
])->get();

header('Content-Type: application/json');

echo json_encode($moviesResult);
