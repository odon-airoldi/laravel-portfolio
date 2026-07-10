<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->client }}</p>
        <p>{{ $project->description}}</p>
        <p>{{ $project->year }}</p>
        <br>
        <a href="{{ route('projects.edit', $project)}}">Modifica progetto</a><br>


        <div class="delete">Elimina</div>
        <form class="permanently-delete hidden" action="{{ route('projects.destroy', $project)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Vuoi eliminare definitivamente? conferma</button><br>
        </form>

        <a href="{{ route('projects.index') }}">Torna ai progetti</a>

    </div>

    <script>
        document.querySelector('.delete').addEventListener('click', () => {
            document.querySelector('.permanently-delete').classList.remove('hidden')
            document.querySelector('.delete').classList.add('hidden')
        })
    </script>

</x-app-layout>