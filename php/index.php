<?php
$curl = curl_init('https://pokeapi.co/api/v2/pokemon/pikachu');

curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FAILONERROR => true,
]);

$response = curl_exec($curl);

if ($response === false) {
    http_response_code(502);
    exit('No se pudo consultar la API: ' . htmlspecialchars(curl_error($curl)));
}

try {
    $pokemon = json_decode($response, true, flags: JSON_THROW_ON_ERROR);
} catch (JsonException) {
    http_response_code(502);
    exit('La API devolvió una respuesta inválida.');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokéAPI con PHP cURL</title>
</head>
<body>
    <h1>PokéAPI con PHP cURL</h1>
    <h2><?= htmlspecialchars($pokemon['name']) ?></h2>
    <img src="<?= htmlspecialchars($pokemon['sprites']['front_default']) ?>" alt="<?= htmlspecialchars($pokemon['name']) ?>">
    <p>Número: <?= (int) $pokemon['id'] ?></p>
    <p>Altura: <?= (int) $pokemon['height'] ?></p>
    <p>Peso: <?= (int) $pokemon['weight'] ?></p>
</body>
</html>
