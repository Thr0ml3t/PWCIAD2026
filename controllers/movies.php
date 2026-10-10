<?php

use Models\Movie;

$movies = (new Movie())->all();

view('movies.view.php', ['movies' => $movies]);
