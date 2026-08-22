<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        .game-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
        $games = [
            [
                "title" => "Deadlock",
                "genre" => "Action",
                "platform" => "PC",
                "release_year" => 2022,
                "developer" => "XYZ Studios"
            ],
            [
                "title" => "Bloons Tower Defense 6",
                "genre" => "Strategy",
                "platform" => "PC, Mobile",
                "release_year" => 2018,
                "developer" => "Ninja Kiwi"
            ],
            [
                "title" => "The Binding of Isaac: Rebirth",
                "genre" => "Roguelike",
                "platform" => "PC, Console",
                "release_year" => 2014,
                "developer" => "Edmund McMillen"
            ],
            [
                "title" => "Hollow Knight",
                "genre" => "Metroidvania",
                "platform" => "PC, Console",
                "release_year" => 2017,
                "developer" => "Team Cherry"
            ],
            [
                "title" => "Guilty Gear Strive",
                "genre" => "Fighting",
                "platform" => "PC, Console",
                "release_year" => 2021,
                "developer" => "Arc System Works"
            ],
            [
                "title" => "Black Myth: Wukong",
                "genre" => "Action RPG",
                "platform" => "PC, Console",
                "release_year" => 2023,
                "developer" => "Game Science"
            ]
        ];

        $listOwner = "Fausto Islas";
    ?>
    <h1><?= $listOwner; ?> - Game List</h1>
    <ul>
        <?php foreach ($games as $game): ?>
            <li class="game-item">
                <strong>Title:</strong> <?= $game['title']; ?><br>
                <strong>Genre:</strong> <?= $game['genre']; ?><br>
                <strong>Platform:</strong> <?= $game['platform']; ?><br>
                <strong>Release Year:</strong> <?= $game['release_year']; ?><br>
                <strong>Developer:</strong> <?= $game['developer']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <br>
    <h2>Game List in JSON Format</h2>
</body>
</body>
</html>