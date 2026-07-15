<?php

use App\Http\Controllers\Criar_tarefasController;
use App\Http\Controllers\Lista_tarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Criar_tarefasController::class, 'criacao_tarefas'])->name('hub_criar_tarefas');

Route::get('/lista', [Lista_tarefasController::class, 'listar_tarefas'])->name('listar.tarefas');
Route::post('/adicionar', [Criar_tarefasController::class, 'criar_tarefas'])->name('criar.tarefas');
Route::get('/deletar/nome/{nome_tarefa}', [Criar_tarefasController::class, 'deletar_por_nome'])->name('deletar.tarefa.nome');
Route::get('/deletar/{id}', [Criar_tarefasController::class, 'deletar_tarefa'])->name('deletar.tarefa');
Route::put('/atualizar/{id}', [Criar_tarefasController::class, 'atualizar_tarefa'])->name('atualizar.tarefa');
Route::get('/editar/{id}', [Criar_tarefasController::class, 'editar_tarefa'])->name('editar.tarefa');
