
<?php
    use App\Controllers\HomeController;
    use App\Controllers\ApiController;
    use App\Router;

    $router = new Router();

    $router->get('/404', HomeController::class, '404');
    $router->get('/', HomeController::class, 'index');
    $router->get('/index', HomeController::class, 'index');
    $router->get('/genre', HomeController::class, 'genre');
    $router->get('/genre2', HomeController::class, 'genre2');
    $router->get('/description', HomeController::class, 'description');
    $router->get('/api/genre', ApiController::class, 'genre');

    $router->dispatch();
?>