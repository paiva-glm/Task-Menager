<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tarefasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tarefa = [
            'nome_tarefa' => 'lavar louca',
            'descricao' => 'lavar louca e talheres da pia',
            'local' => 'casa',
            'data' => '2026-07-15 13:30:00',
        ];

        DB::table('tarefas')->insert($tarefa);
    }
}
