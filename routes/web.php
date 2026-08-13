<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

/*-------------------------------------------------------------------------
---                          EXERCÍCIO 01                               ---
-------------------------------------------------------------------------*/

Route::get('/exer1', [ExerciciosController::class, 'abrirFormExer1']);

Route::post('/exer1resp', [ExerciciosController::class, 'respostaExer1']);

/*-------------------------------------------------------------------------
---                          EXERCÍCIO 02                               ---
-------------------------------------------------------------------------*/

Route::get('/exer2', [ExerciciosController::class, 'abrirFormExer2']);

Route::post('/exer2resp', [ExerciciosController::class, 'respostaExer2']);