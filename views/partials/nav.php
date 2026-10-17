<nav class="bg-gray-800">
    <div class="mx-auto flex max-w-4xl items-center gap-1 px-4 py-3">
        <a href="/" class="nav-link" <?= urlIs('/') ? 'aria-current="page"' : '' ?>>Games</a>
        <a href="/movies" class="nav-link" <?= urlIs('/movies') ? 'aria-current="page"' : '' ?>>Movies</a>
        <a href="/pokemon" class="nav-link" <?= urlIs('/pokemon') ? 'aria-current="page"' : '' ?>>Pokemon</a>

        <div class="ml-auto flex items-center gap-1">
            <?php if ($_SESSION['user'] ?? false): ?>
                <span class="px-3 text-sm text-gray-400">Hello, <?= htmlspecialchars($_SESSION['user']['name']) ?></span>
                <form method="POST" action="/logout">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="nav-link">Log out</button>
                </form>
            <?php else: ?>
                <a href="/login" class="nav-link" <?= urlIs('/login') ? 'aria-current="page"' : '' ?>>Log in</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
