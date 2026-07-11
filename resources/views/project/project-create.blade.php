<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Crea progetto</h1>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <label>Name</label>
            <input type="text" id="name" name="name" class="text-gray-800">
            <label>Client</label>
            <input type="text" id="client" name="client" class="text-gray-800">
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800">
            <label>Year</label>
            <input type="number" id="year" name="year" min="2000" max="2030" class="text-gray-800">
            <select id="type_id" name="type_id" class="text-gray-800">
                @foreach ($types as $type)
                <option value="{{ $type->id }}">
                    {{ $type->name }}
                </option>
                @endforeach
            </select>
            <button type="submit">Aggiungi progetto</button>
        </form>

        <a href="{{ route('projects.index') }}">Torna ai progetti</a>

    </div>

</x-app-layout>