<?php if($movie === null): ?>
  <div>
    <h1 class="text-center isplay-4">Movie description</h1>
    <p>The requested movie was not found</p>
  </div>   
<?php else: ?>
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


    <script> 
        document.addEventListener("DOMContentLoaded", function () {
            //document.body.style.backgroundImage = "url('https://image.tmdb.org/t/p/original/<?= $movie->backdrop_path ?>')";

            const div = document.querySelector('.bodyContent');
    
            if (div) {
                // If the div exists, set the background image
                div.style.backgroundImage = "url('https://image.tmdb.org/t/p/w780/<?= $movie->backdrop_path ?>')";
            }
        });
    </script>
<?php endif; ?>