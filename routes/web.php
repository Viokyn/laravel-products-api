<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ola', function () {
    return response()->json([
        'mensagem' => 'Olá, Laravel!',
        'autor' => 'Filippe'
    ]);
});
