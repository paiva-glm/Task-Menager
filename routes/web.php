<?php

use App\Http\Controllers\Criar_tarefasController;
use App\Http\Controllers\Lista_tarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Criar_tarefasController::class, 'criacao_tarefas'])->name('hub_criar_tarefas');

Route::get('/lista', [Lista_tarefasController::class, 'listar_tarefas'])->name('listar.tarefas');
Route::post('/adicionar', [Criar_tarefasController::class, 'criar_tarefas'])->name('criar.tarefas');
