<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

    <h1><?= $listOwner; ?> - Game List</h1>
    <ul class="game-list">
        <?php foreach ($games as $game): ?>
            <li class="game-item">
                <strong>Title:</strong> <?= $game['title']; ?><br>
                <strong>Platform:</strong> <?= $game['platform']; ?><br>
                <strong>Release Year:</strong> <?= $game['release_year']; ?><br>
                <strong>Developer:</strong> <?= $game['developer']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <br>
    <h2>Game List in JSON</h2>

<?php require base_path('views/partials/footer.php') ?>
