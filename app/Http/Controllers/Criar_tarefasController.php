<?php

namespace App\Http\Controllers;

use App\Models\tarefas;
use Illuminate\Http\Request;


class Criar_tarefasController extends Controller
{

    public function criacao_tarefas(){
        return view('test');
    }
    public function criar_tarefas(Request $request){

        $tabelacriada = $request->validate([
            'nome_tarefa' => 'required|string|max:255',
            'descricao'   => 'nullable|string',
            'local'       => 'nullable|string|max:255',
            'data'        => 'nullable|date',
            ]);
        tarefas::create($tabelacriada);

        return redirect(route('listar.tarefas'));
    }
}
