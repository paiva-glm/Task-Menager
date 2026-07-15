<x-h>
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('atualizar.tarefa', $tarefa->id) }}" method="POST">
        @csrf
        
        @method('PUT') 

        <label for="nome_tarefa">Nome da tarefa</label>
        <input type="text" id="nome_tarefa" name="nome_tarefa" value="{{ $tarefa->nome_tarefa }}">
        
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" value="{{ $tarefa->descricao }}">

        <button type="submit">Salvar Alterações</button>
    </form>
</x-h>