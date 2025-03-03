
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