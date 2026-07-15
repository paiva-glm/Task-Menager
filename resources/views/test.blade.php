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

    <form action="{{ route('criar.tarefas') }}" method="POST">
        @csrf
        <label for="nome_tarefa">nome da tarefa</label>
        <input type="text" id="nome_tarefa" name="nome_tarefa" placeholder="nome da tarefa">
        
        <button type="submit">criar</button>
    </form>
</x-h>