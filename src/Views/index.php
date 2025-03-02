<h1>Genre overview</h1>
<div class="container">
<div class="row">
    <?php for ($i = 0; $i < 5; $i++) : ?>
        <div class="col-4">
            <?= $genre = $genres[$i]; ?>
            <p><h3><?= $genre->name ?></h3>
            <b>Click <a href="/genre?genreId=<?= $genre->id ?>">here</a> to enter genre
            <br><b>Total amount of movies:</b> <?= $genre->movies->totalResults ?> movies</p>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col" width="20%">Cover</th>
                    <th scope="col" width="70%">Title</th>
                    <th scope="col" width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($genre->movies->results as $movie) : ?>
                            <tr>
                                <td><img src="https://image.tmdb.org/t/p/w92/<?= $movie->poster_path ?>" width/></td>
                                <td><?= $movie->original_title ?></td>
                                <td><a href="/description?movieId=<?= $movie->id ?>">Enter</a></td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endfor; ?>
</div>
</div>