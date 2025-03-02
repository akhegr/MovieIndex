
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MovieIndex</title>
        <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/site.css" />
    </head>
    <body>
        <header b-bddmc6yalx>
            <nav b-bddmc6yalx class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
                <div b-bddmc6yalx class="container-fluid">
                    <a class="navbar-brand" href="/">MovieIndex</a>
                    <button b-bddmc6yalx class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span b-bddmc6yalx class="navbar-toggler-icon"></span>
                    </button>
                    <div b-bddmc6yalx class="navbar-collapse collapse d-sm-inline-flex justify-content-between">
                        <ul b-bddmc6yalx class="navbar-nav flex-grow-1">
                            <li b-bddmc6yalx class="nav-item">
                                <a class="nav-link text-dark" href="/">Home</a>
                            </li>
                            <li b-bddmc6yalx class="nav-item">
                                <a class="nav-link text-dark" href="/description?movieId=550">Description</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div b-bddmc6yalx class="container">
            <main b-bddmc6yalx role="main" class="pb-3">
                <?php

                use App\Controllers\HomeController;
                use App\Router;

                $router = new Router();

                $router->get('/404', HomeController::class, '404');
                $router->get('/', HomeController::class, 'index');
                $router->get('/index', HomeController::class, 'index');
                $router->get('/genre', HomeController::class, 'genre');
                $router->get('/description', HomeController::class, 'description');

                $router->dispatch();

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
        <script src="/js/site.js?v=hRQyftXiu1lLX2P9Ly9xa4gHJgLeR1uGN5qegUobtGo"></script>
    </body>
</html>