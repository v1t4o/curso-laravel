<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LivroRicardoController;

Route::get('/livros',[LivroController::class,'index']);

Route::get('/livros/{isbn}',[LivroController::class,'show']);

Route::get('/livros-ricardo',[LivroRicardoController::class,'index']);

Route::get('/livros-ricardo/{isbn}',[LivroRicardoController::class,'show']);
