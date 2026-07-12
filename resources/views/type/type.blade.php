<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">
        <h1>Nome: {{ $type->name }}</h1>
        <p>Descrizione: {{ $type->description}}</p>
        <br>

        <a href="{{ route('types.edit', $type)}}">Modifica stack</a><br>
        {{--
        <div class="delete">Elimina</div>
        <form class="permanently-delete hidden" action="{{ route('projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Vuoi eliminare definitivamente? conferma</button><br>
        </form>
        --}}

        <a href="{{ route('types.index') }}">Torna a tutti gli stack</a>

    </div>

    <script>
        document.querySelector('.delete').addEventListener('click', () => {
            document.querySelector('.permanently-delete').classList.remove('hidden')
            document.querySelector('.delete').classList.add('hidden')
        })
    </script>

</x-app-layout>