<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\quizController;
use App\Http\Controllers\CustomAuthController;

Route::get('/', [quizController::class, 'welcome']);
Route::get('/dashboard', [quizController::class, 'dashboard']);

Route::get('/perguntas/cadastrar', [quizController::class, 'cadastrar']);
Route::get('/perguntas/visualizar', [quizController::class, 'visualizar']);
Route::get('/perguntas/conteudo/{id}', [quizController::class, 'conteudo']);

Route::post('/register', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::middleware(['auth:sanctum', 'verified'])->get('/welcome', function () {
    return view('/welcome');
})->name('welcome');