<?php

use App\Http\Controllers\Lista_tarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('h');
});

Route::get('/lista', [Lista_tarefasController::class, 'listar_tarefas'])->name('listar_tarefas');
