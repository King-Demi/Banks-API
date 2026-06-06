<?php

use Weave\Controllers\LaceUpController;
use Weave\Controllers\DocsDemoController;
use Weave\Controllers\BanksController;
use Weave\Controllers\BanksDBController;
use Weave\Controllers\BanksPostController;

$router = $router ?? null;
if (!$router) {
    throw new RuntimeException('Router instance is not injected into route file.');
}

// $router->sewGet('/', [LaceUpController::class, 'hello']);
// $router->get('/docs-demo', [DocsDemoController::class, 'index']);

$router->get('/banks', [BanksController::class, 'banks']);
$router->get('/banksDB', [BanksDBController::class, 'banksDB']);
$router->post('/banksPost', [BanksPostController::class, 'banksPost']);