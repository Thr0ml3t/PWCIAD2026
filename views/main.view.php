<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="page">
    <h1 class="page-title"><?= $listOwner; ?> - Game List</h1>
    <ul class="space-y-3">
        <?php foreach ($games as $game): ?>
            <li class="card">
                <strong>Title:</strong> <?= $game['title']; ?><br>
                <strong>Platform:</strong> <?= $game['platform']; ?><br>
                <strong>Release Year:</strong> <?= $game['release_year']; ?><br>
                <strong>Developer:</strong> <?= $game['developer']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2 class="mt-8 text-lg font-semibold">Game List in JSON</h2>
</main>

<?php require base_path('views/partials/footer.php') ?>
