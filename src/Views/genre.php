<?php if($genre === null): ?>
  <div>
    <h1 class="text-center isplay-4">Genre overview</h1>
    <p>The requested genre was not found</p>
  </div>   
<?php else: ?>
  <div>
    <h1 class="text-center isplay-4">Genre overview - <?= $genre->name ?></h1>
    <p><b>Total amount of movies:</b> <?= $genre->movies->totalResults ?> movies</p>
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
                    <td><a href="/description?id=<?= $movie->id ?>" class="btn btn-secondary">Description</a></td>
                </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>