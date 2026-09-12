<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <ul></ul>
        <?php foreach ($movies as $movie): ?>
            <li>
                <strong>Title:</strong> <?= $movie['title']; ?><br>
                <strong>Director:</strong> <?= $movie['director']; ?><br>
                <strong>Release Year:</strong> <?= $movie['year']; ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>