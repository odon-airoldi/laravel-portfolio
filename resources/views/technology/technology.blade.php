<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">
        <h1>Nome: {{ $technology->name }}</h1>
        <p>Descrizione: {{ $technology->description}}</p>
        <br>

        <a href="{{ route('technologies.edit', $technology)}}">Modifica tecnologia</a><br>

        <div class="delete">Elimina</div>
        <form class="permanently-delete hidden" action="{{ route('technologies.destroy', $technology)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Vuoi eliminare definitivamente? conferma</button><br>
        </form>

        <a href="{{ route('technologies.index') }}">Torna a tutte le tecnologie</a>

    </div>

    <script>
        document.querySelector('.delete').addEventListener('click', () => {
            document.querySelector('.permanently-delete').classList.remove('hidden')
            document.querySelector('.delete').classList.add('hidden')
        })
    </script>

</x-app-layout>