<?php

use App\Http\Controllers\JiriController;

/** @var Core\Router $router */
$router->get('/', [JiriController::class, 'index']);

$router->get('/jiris', [JiriController::class, 'index']);

$router->get('/jiri', [JiriController::class, 'show']);

$router->get('/jiri/create', [JiriController::class, 'create']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri', [JiriController::class, 'update'])->csrf();

$router->get('/users/register', [\App\Http\controllers\RegisterUserController::class, 'register']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/users/login', [\App\Http\controllers\AuthenticatedSessionController::class, 'login']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/users/', [\App\Http\controllers\AuthenticatedSessionController::class, 'getDataOfCurrentUser']);


$router->delete('/jiri', [JiriController::class, 'destroy'])->csrf();


