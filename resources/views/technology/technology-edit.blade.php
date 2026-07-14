<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Modifica tecnologia</h1>

        <form action="{{ route('technologies.update', compact('technology')) }}" method="POST">
            @csrf

            @method("PUT")
            <label>Name</label>
            <input type="text" id="name" name="name" class="text-gray-800" value="{{ $technology->name }}">
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800"
                value="{{ $technology->description }}">
            <button type="submit">Aggiorna tecnologia</button>
        </form>

        <a href="{{ route('technologies.index') }}">Torna a tutte le tecnologie</a>

    </div>

</x-app-layout>