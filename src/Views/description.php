<div>
    <h1 class="text-center isplay-4"><?= $movie->original_title ?></h1>
     
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <img src="https://image.tmdb.org/t/p/original/<?= $movie->poster_path ?>"/>
                </div>
            </div>

            <div class="col-7">
                <div class="row">
                    <h2>Description:</h2>
                    <p><?= $movie->overview ?></p>
                </div>

                <div class="row">
                    <h2>Other facts:</h2>
                    <p>Released at: <?= $movie->release_date ?></p>
                    
                    <div>
                        <b>Genres</b>
                        <ul>
                            <?php
                                foreach ($movie->genres as $genre): ?>
                                <li><?= $genre['name'] ?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

