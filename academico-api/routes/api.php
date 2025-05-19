<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/saludos', function () {
    return response()->json([
        'saludo' => 'Hola desde la API de Academico'
    ]);
})->name('saludos');
