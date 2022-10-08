<?php

use App\Http\Controllers\User\UserController;

Route::group([
    'prefix' => 'user'
], function ($route) {
    $route->post('/',           [UserController::class, 'login']);
    $route->post('/register',   [UserController::class, 'register']);
});

Route::group([
    'prefix'     => 'user',
    'middleware' => ['auth:sanctum'],
], function ($route) {
    $route->get('/logout',     [UserController::class, 'logout']);
    $route->patch('/update',   [UserController::class, 'update']);
});

