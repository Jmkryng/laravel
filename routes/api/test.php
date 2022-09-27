<?php

use App\Http\Controllers\Test\TestController;

Route::group([
    'prefix' => 'test'
], function ($route) {

    $route->get('/',                [TestController::class, 'index']);
    $route->post('/create',         [TestController::class, 'create']);
    $route->get('/archive',         [TestController::class, 'list']);
    $route->get('/{id}',            [TestController::class, 'show']);
    $route->put('/update/{id}',     [TestController::class, 'update']); 
    $route->delete('/archive/{id}', [TestController::class, 'archive']);
    $route->patch('/restore/{id}',  [TestController::class, 'restore']);
    $route->delete('/delete/{id}',  [TestController::class, 'delete']);
});