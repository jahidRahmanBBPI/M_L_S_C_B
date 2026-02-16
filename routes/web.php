<?php


use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Mid_checController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/DemoAction/{num1}/{num2}', [ExampleController::class,'DemoAction']);

Route::get('/SessionPut/{email}', [ExampleController::class,'SessionPut']);
Route::get('/SessionPull', [ExampleController::class,'SessionPull']);
Route::get('/SessionGet', [ExampleController::class,'SessionGet']);
Route::get('/SessionForget', [ExampleController::class,'SessionForget']);
Route::get('/SessionFlush', [ExampleController::class,'SessionFlush']);

// middleware
Route::get('/hello', [Mid_checController::class,'mid'])->middleware([DemoMiddleware::class]);

Route::get('/hello1/{key}', [Mid_checController::class,'DemoAction1'])->middleware([DemoMiddleware::class]);
Route::get('/hello2', [Mid_checController::class,'DemoAction2']);

