<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lista_tarefasController extends Controller
{
    public function listar_tarefas(){
        $tarefas = DB::table('tarefas')->get();
        return $tarefas;
    }
}
