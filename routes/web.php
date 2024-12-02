<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\GameController;


use App\Models\Topic; // Asegúrate de importar el modelo Topic
use App\Models\Subtopic; // Asegúrate de importar el modelo Subtopic

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup.get');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login.get');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/topic/{id}/subtopics', [TopicController::class, 'subtopicsandmore'])->name('subtopics');

Route::get('topic/{id}/vocabulary', [TopicController::class, 'vocabulary'])->name('vocabulary');


// temas de contraseñas


Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');


// juegos


Route::get('/juego/adivinar', [GameController::class, 'adivinarPalabra'])->name('adivinar.get');
Route::post('/juego/verificar', [GameController::class, 'verificarRespuesta'])->name('adivinar.post');
Route::get('/resultado', [GameController::class, 'mostrarResultados'])->name('game.resultados');


Route::get('juego', [GameController::class, 'mostrarJuego'])->name('ahorcado.mostrar');
Route::post('juego/adivinar', [GameController::class, 'adivinarPalabraCompleta'])->name('ahorcado.adivinar-palabra');
Route::get('juego/reiniciar', [GameController::class, 'reiniciarJuegoAhorcado'])->name('reiniciar.ahorcado');