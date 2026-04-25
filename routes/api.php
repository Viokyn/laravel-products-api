<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/produtos', [ProdutoController::class, 'store']);
    Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
    Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
});

//rotas publicas
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
