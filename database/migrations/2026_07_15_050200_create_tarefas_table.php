<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_tarefa', 255);
            $table->text('descricao')->nullable();
            $table->string('local', 255)->nullable();
            $table->dateTime('data')->nullable();
            $table->boolean('concluida')->default(false);
            $table->dateTime('created_att')->useCurrent();
            $table->dateTime('update_att')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
