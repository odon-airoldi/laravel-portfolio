<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Crea stack</h1>

        <form action="{{ route('types.store') }}" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" id="name" name="name" class="text-gray-800">
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800">
            <button type="submit">Aggiungi stack</button>
        </form>

        <a href="{{ route('types.index') }}">Torna a tutti gli stack</a>

    </div>

</x-app-layout>