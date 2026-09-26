<?php

require_once "core/db.php";
require_once "models/movie.php";

$db = new Database();
$conn = $db->connect();

$movie = new Movie();

$terms = $_GET['term'];

$query = "SELECT * FROM movies where 
        year like :term or title like :term";

$preparedStatement = $conn->prepare($query,[]);

$result = $preparedStatement->execute([
    ':term' => "%$terms%",
]);

if($result === false) {
    echo json_encode(['error' => 'Query execution failed']);
    exit;
}

$moviesResult = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($moviesResult);