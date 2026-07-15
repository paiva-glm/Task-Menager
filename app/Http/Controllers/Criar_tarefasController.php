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

        return redirect()->route('listar.tarefas');
    }

    public function deletar_tarefa($id)
    {
        
        $tarefa = tarefas::findOrFail($id);
        
        $tarefa->delete();

        return redirect()->route('listar.tarefas')->with('sucesso', 'Tarefa excluída com sucesso!');
    }

    public function deletar_por_nome($nome_tarefa){
    // O método delete() direto após o where() apaga TODOS os registros com esse nome
    $registrosApagados = tarefas::where('nome_tarefa', $nome_tarefa)->delete();

    // Uma validação opcional: Se ele não apagou nada (registros = 0)
    if ($registrosApagados === 0) {
        return redirect()->route('listar.tarefas')->with('erro', 'Nenhuma tarefa encontrada com esse nome.');
    }

    
    return redirect()->route('listar.tarefas')->with('sucesso', $registrosApagados . ' tarefa(s) excluída(s)!');
    }

    public function editar_tarefa($id){

        $tarefa = tarefas::findOrFail($id);
        
        return view('editar_tarefa', compact('tarefa')); 
    }

    public function atualizar_tarefa(Request $request, $id){
        $dadosValidados = $request->validate([
            'nome_tarefa' => 'required|string|max:255',
            'descricao'   => 'nullable|string',
            'local'       => 'nullable|string|max:255',
            'data'        => 'nullable|date',
        ]);

        $tarefa = tarefas::findOrFail($id);

        $tarefa->update($dadosValidados);

        
        return redirect()->route('listar.tarefas')->with('sucesso', 'Tarefa atualizada com sucesso!');
    }

    public function alternar_status($id){
        
        $tarefa = tarefas::findOrFail($id);

        $tarefa->concluida = !$tarefa->concluida;

        $tarefa->save();

        return redirect()->back()->with('sucesso', 'Status da tarefa atualizado!');
    }
}
