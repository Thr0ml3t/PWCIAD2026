<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>

<main class="page">
    <h1 class="page-title">Movies</h1>
    <div class="mb-6 flex gap-2">
        <input type="text" id="searchInput" class="input" placeholder="Search for movies..." aria-label="Search for movies">
        <button id="searchButton" class="btn">Search</button>
    </div>
    <ul id="moviesList" class="space-y-3">
        <?php foreach ($movies as $movie): ?>
            <li class="card">
                <strong>Title:</strong> <?= $movie['title']; ?><br>
                <strong>Director:</strong> <?= $movie['director']; ?><br>
                <strong>Release Year:</strong> <?= $movie['year']; ?><br>
            </li>
        <?php endforeach; ?>
    </ul>

    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            const searchTerm = document.getElementById('searchInput').value;
            fetch(`/movie/search?term=${encodeURIComponent(searchTerm)}`)
                .then(response => response.json())
                .then(data => {
                    const moviesList = document.getElementById('moviesList');
                    moviesList.innerHTML = ''; // Clear the current list

                    if(data.length === 0) {
                        const li = document.createElement('li');
                        li.className = 'card';
                        li.textContent = 'No movies found.';
                        moviesList.appendChild(li);
                        return;
                    }

                    data.forEach(movie => {
                        const li = document.createElement('li');
                        li.className = 'card';
                        li.innerHTML = `<strong>Title:</strong> ${movie.title}<br>
                                        <strong>Director:</strong> ${movie.director}<br>
                                        <strong>Release Year:</strong> ${movie.year}<br>`;
                        moviesList.appendChild(li);
                    });
                })
                .catch(error => console.error('Error fetching movies:', error));
        });
    </script>
</main>

<?php require base_path('views/partials/footer.php') ?>