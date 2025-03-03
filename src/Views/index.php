<div>
    <h1 class="text-center isplay-4">Genre overview</h1>
    <div class="container">
        <div class="row">
            <?php foreach($genres as $genre) : ?>
                <div class="col-4">
                    <p><h3><?= $genre->name ?>&nbsp;&nbsp;<a href="/genre?id=<?= $genre->id ?>" class="btn btn-info">Enter the genre</a></h3>
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
                                        <td><a href="/description?id=<?= $movie->id ?>" class="btn btn-secondary">Description</a></td>
                                    </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>