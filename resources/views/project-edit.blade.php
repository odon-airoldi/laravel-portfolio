<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Modifica progetto</h1>

        <form action="{{ route('projects.update', compact('project')) }}" method="POST">
            @csrf

            @method("PUT")
            <label>Name</label>
            <input type="text" id="name" name="name" class="text-gray-800" value="{{ $project->name }}">
            <label>Client</label>
            <input type="text" id="client" name="client" class="text-gray-800" value="{{ $project->client }}">
            <label>Description</label>
            <input type="text" id="description" name="description" class="text-gray-800"
                value="{{ $project->description }}">
            <label>Year</label>
            <input type="number" id="year" name="year" min="2000" max="2030" class="text-gray-800"
                value="{{ $project->year }}">
            <button type="submit">Aggiorna progetto</button>
        </form>

        <a href="{{ route('projects.index') }}">Torna ai progetti</a>

    </div>

</x-app-layout>