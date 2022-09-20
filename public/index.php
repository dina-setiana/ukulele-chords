<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Application;
use App\Controllers\AuthController;
use App\Controllers\SongListController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SongListController::class, 'index']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->run();
