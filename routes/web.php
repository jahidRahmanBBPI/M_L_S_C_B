<?php

use App\Http\Controllers\ExampleController;
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