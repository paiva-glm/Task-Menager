<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarefas extends Model
{
    use HasFactory;

    public $timestamps = false;

    // Coloque aqui o nome exato das colunas do seu banco
    protected $fillable = [
        'nome_tarefa', 
        'descricao', 
        'local', 
        'data' 
    ];
}
