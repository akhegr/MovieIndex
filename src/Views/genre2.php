<?php if($genre === null): ?>
  <div>
    <h1 class="text-center isplay-4">Genre overview</h1>
    <p>The requested genre was not found</p>
  </div>   
<?php else: ?>
  <div>
    <h1 class="text-center isplay-4">Genre overview - <?= $genre->name ?></h1>
    <p><b>Total amount of movies:</b> <?= $genre->movies->totalResults ?> movies</p>
    <table id="table" class="table table-striped center"></table>

    <nav>
        <ul class="pagination mt-3 justify-content-center">
            <li class="page-item">
                <button id="prevBtn" class="page-link" onclick="changePage(-1)" disabled>Previous</button>
            </li>
            <li class="page-item">
                <span id="pageIndicator" class="page-link">Page 1 of <?= $genre->movies->totalPages ?></span>
            </li>
            <li class="page-item">
                <button id="nextBtn" class="page-link" onclick="changePage(1)">Next</button>
            </li>
        </ul>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>

<script>
    let currentPage = 1;
    const totalPages = <?= $genre->movies->totalPages ?>;
    const apiUrl = 'api/genre?id=' + <?= $genre->id ?> + '&page=';

    function fetchData(page) {
        
        $.ajax({
            url: apiUrl + page, 
            dataType: 'json',
            success: function (res) {
                console.log(res);
                $('#table').bootstrapTable('load', res.results);

                // Update pagination buttons
                document.getElementById("pageIndicator").textContent = `Page ${page} of ${totalPages}`;
                document.getElementById("prevBtn").disabled = page === 1;
                document.getElementById("nextBtn").disabled = page === totalPages;
            }
        });
    }

    function changePage(direction) {
        if ((currentPage + direction > totalPages) || (currentPage + direction < 1)) return;
        currentPage += direction;
        fetchData(currentPage);
    }

    // Initialize Bootstrap Table
    $('#table').bootstrapTable({
        columns: [
            { 
                field: 'poster_path',
                title: 'Cover',
                formatter: function (value, row) {
                    return `<img src="https://image.tmdb.org/t/p/w92/${value}" class="center">`;
                }
            },
            {
                field: 'original_title',
                title: 'Title'
            },
            {
                field: 'id',
                title: '',
                formatter: function (value, row) {
                    return `<a href="/description?id=${value}" class="btn btn-secondary">Description</a>`;
                }
            }
        ]
    });

    // Load first page on startup
    fetchData(currentPage);
</script>
<?php endif; ?>