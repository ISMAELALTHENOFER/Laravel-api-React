<?php

use App\Http\Controllers\Api\ArticuloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ArticuloController::class)->group(function () {
    Route::get('/articulos', 'index');
    Route::post('/articulo', 'store');
    Route::get('/articulo/{id}', 'show');
    Route::put('/articulo/{id}', 'update');
    Route::delete('/articulo/{id}', 'destroy');
});
