<?php

require_once "core/db.php";
require_once "models/movie.php";

$db = new Database();
$conn = $db->connect();

$movie = new Movie();

$result = $conn->query("SELECT * FROM movies");

$moviesResult = $result->fetchAll(PDO::FETCH_ASSOC);

foreach ($moviesResult as $movieData) {
    $movies[] = $movie->fromArray($movieData);
}
