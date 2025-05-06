<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return 'Bienvenid@ al examen de recuperación de laravel ;)';
});

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/ordersWith', [OrderController::class, 'indexComplete']);
Route::get('/transportWith', [OrderController::class, 'getAllTransportWithOrder']);
Route::post('/create',[OrderController::class, 'create']);
Route::get('/order/{id}',[OrderController::class, 'get']);