<?php

use Core\App;
use Core\Database;
use Models\Movie;

$db = App::resolve(Database::class);

$movie = new Movie();

$moviesResult = $db->query("SELECT * FROM movies")->get();

$movies = [];
foreach ($moviesResult as $movieData) {
    $movies[] = $movie->fromArray($movieData);
}

view('movies.view.php', ['movies' => $movies]);
