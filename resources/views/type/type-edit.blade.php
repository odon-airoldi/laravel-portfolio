<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Modifica tipologia</h1>

        <form action="{{ route('types.update', compact('type')) }}" method="POST">
            @csrf

            @method("PUT")
            <label>Name</label>
            <input type="text" id="name" name="name" class="text-gray-800" value="{{ $type->name }}">
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800"
                value="{{ $type->description }}">
            <button type="submit">Aggiorna tipologia</button>
        </form>

        <a href="{{ route('types.index') }}">Torna a tutte le tipologie</a>

    </div>

</x-app-layout>