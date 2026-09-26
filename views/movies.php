<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <input type="text" id="searchInput" placeholder="Search for movies...">
    <button id="searchButton">Search</button>
    <ul id="moviesList">
        <?php foreach ($movies as $movie): ?>
            <li>
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
                        li.textContent = 'No movies found.';
                        moviesList.appendChild(li);
                        return;
                    }

                    data.forEach(movie => {
                        const li = document.createElement('li');
                        li.innerHTML = `<strong>Title:</strong> ${movie.title}<br>
                                        <strong>Director:</strong> ${movie.director}<br>
                                        <strong>Release Year:</strong> ${movie.year}<br>`;
                        moviesList.appendChild(li);
                    });
                })
                .catch(error => console.error('Error fetching movies:', error));
        });
    </script>
</body>
</html>