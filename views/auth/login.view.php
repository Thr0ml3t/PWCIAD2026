<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="page max-w-sm">
    <h1 class="page-title text-center">Log in to your account</h1>

    <form method="POST" action="/login" class="card space-y-4" novalidate>
        <div>
            <div class="flex justify-between">
                <ul>
                    <?php if ($error): ?>
                        <li class="error"><?= $error ?></li>
                    <?php endif; ?>
                </ul>
            </div>
            <label for="email" class="label">Email</label>
            <input id="email" name="email" type="email" autocomplete="email" class="input"
                   value="<?= htmlspecialchars($email ?? '') ?>"
                   <?= isset($errors['email']) ? 'aria-invalid="true" aria-describedby="email-error"' : '' ?>>
            <?php if (isset($errors['email'])): ?>
                <p id="email-error" class="error"><?= $errors['email'] ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label for="password" class="label">Password</label>
            <input id="password" name="password" type="password" autocomplete="current-password" class="input"
                   <?= isset($errors['password']) ? 'aria-invalid="true" aria-describedby="password-error"' : '' ?>>
            <?php if (isset($errors['password'])): ?>
                <p id="password-error" class="error"><?= $errors['password'] ?></p>
            <?php endif; ?>
        </div>

        <button class="btn w-full">Log in</button>
    </form>
</main>

<?php require base_path('views/partials/footer.php') ?>
