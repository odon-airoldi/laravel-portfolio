<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Crea tecnologia</h1>

        <form action="{{ route('technologies.store') }}" method="POST">
            @csrf
            <div>
                <label>Name</label>
                <input type="text" id="name" name="name" class="text-gray-800">
            </div>
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800">
            <button type="submit">Aggiungi tecnologia</button>
        </form>

        <a href="{{ route('technologies.index') }}">Torna a tutte le tecnologie</a>

    </div>

</x-app-layout>