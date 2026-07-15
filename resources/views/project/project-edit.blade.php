<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">

        <h1>Modifica progetto</h1>

        <form action="{{ route('projects.update', compact('project')) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method("PUT")
            <div class="mb-4">
                <label>Name</label>
                <input type="text" id="name" name="name" class="text-gray-800" value="{{ $project->name }}">
            </div>
            <div class="mb-4">
                <label>Client</label>
                <input type="text" id="client" name="client" class="text-gray-800" value="{{ $project->client }}">
            </div>
            <div class="mb-4">
                <label>Description</label>
                <input type="text" id="description" name="description" class="text-gray-800"
                    value="{{ $project->description }}">
            </div>
            <div class="mb-4">
                <label>Year</label>
                <input type="number" id="year" name="year" min="2000" max="2030" class="text-gray-800"
                    value="{{ $project->year }}">
            </div>
            <div class="mb-4">
                <select id="type_id" name="type_id" class="text-gray-800">
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}" @if ($type->id == $project->type_id) selected @endif>
                        {{ $type->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <div class="flex">
                    @foreach ($technologies as $technology)
                    <div>
                        <input type="checkbox" id="tech-{{ $technology->id }}" name="technologies[]"
                            value="{{ $technology->id }}" @if ($project->technologies->contains($technology->id))
                        checked @endif
                        />
                        <label for="tech-{{ $technology->id }}">{{ $technology->name }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mb-4">
                <label>Immagine</label>
                <input type="file" id="image" name="image" />
                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" style="width:160px;" />
            </div>
            <div>
                <button type="submit">Aggiorna progetto</button>
            </div>
        </form>

        <a href="{{ route('projects.index') }}">Torna ai progetti</a>

    </div>

</x-app-layout>