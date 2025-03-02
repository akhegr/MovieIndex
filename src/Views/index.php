<h1>Genre overview</h1>
<div class="container">
    <div class="row">
        <?php foreach($genres as $genre) : ?>
            <div class="col-4">
                <p><h3><?= $genre->name ?></h3>
                <br>Click <a href="/genre?genreId=<?= $genre->id ?>">here</a> to enter genre
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
                            $limitedMovieList = array_slice($genre->movies->results, 0, 5);
                            foreach ($limitedMovieList as $movie) : ?>
                                <tr>
                                    <td><img src="https://image.tmdb.org/t/p/w92/<?= $movie->poster_path ?>" width/></td>
                                    <td><?= $movie->original_title ?></td>
                                    <td><a href="/description?movieId=<?= $movie->id ?>" class="btn btn-light">Description</a></td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach; ?>
    </div>
</div>