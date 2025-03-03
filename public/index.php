<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MovieIndex</title>
        <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/site.css" />

        <!-- Free icon by Phoenix Dungeon on IconScout -->
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">MovieIndex</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                        <ul class="navbar-nav flex-grow-1">
                            <li b-class="nav-item">
                                <a class="nav-link text-dark" href="/">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <main role="main" class="pb-3">
				<?php
					require '../vendor/autoload.php';
					$router = require '../src/Routes/index.php';
				?>
			</main>
        </div>

        <footer class="border-top footer text-muted">
            <div class="container">
                &copy; <?= date('Y') ?> - MovieIndex
            </div>
        </footer>
        <script src="/lib/jquery/dist/jquery.min.js"></script>
        <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/js/site.js"></script>
    </body>
</html>