<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Crea tipologia</h1>

        <form action="{{ route('types.store') }}" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" id="name" name="name" class="text-gray-800">
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800">
            <button type="submit">Aggiungi tipologia</button>
        </form>

        <a href="{{ route('types.index') }}">Torna a tutte le tipologie</a>

    </div>

</x-app-layout>