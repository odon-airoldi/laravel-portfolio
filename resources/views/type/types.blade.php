<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">
        <h1>Tutte le tipologie</h1>

        <ul>
            @foreach ( $types as $type )

            <li><a href="{{ route('types.show', $type->id) }}">{{ $type->name }}</a></li>

            @endforeach
        </ul>
        <br>
        <br>
        <a href="{{ route('types.create') }}">Aggiungi tipologia</a>

    </div>

</x-app-layout>