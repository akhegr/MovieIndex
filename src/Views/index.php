<div>
    <h1 class="text-center isplay-4">Genre overview</h1>
    <div class="container">
        <div class="row">
            <?php foreach($genres as $genre) : ?>
                <div class="col-4">
                    <div class="card" style="width: 25rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $genre->name ?>&nbsp;&nbsp;<a href="/genre?id=<?= $genre->id ?>" class="btn btn-info">Enter the genre</a></h5>
                            <b>Total amount of movies:</b> <?= $genre->movies->totalResults ?> movies</p>
                            <table class="table table-striped">
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
                                                <td class="center"><img src="https://image.tmdb.org/t/p/w92/<?= $movie->poster_path ?>" width/></td>
                                                <td class="center"><?= $movie->original_title ?></td>
                                                <td class="center"><a href="/description?id=<?= $movie->id ?>" class="btn btn-secondary">Description</a></td>
                                            </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>