<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/servicos', fn() => view('pages.servicos'))->name('servicos');
Route::get('/sobre', fn() => view('pages.sobre'))->name('sobre');
Route::get('/clientes', fn() => view('pages.clientes'))->name('clientes');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato/enviar', [ContatoController::class, 'enviar'])->name('contato.enviar');
