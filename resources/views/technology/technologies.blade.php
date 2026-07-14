<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200">
        <h1>Tutte le tecnologie</h1>

        <ul>
            @foreach ( $technologies as $technology )

            <li><a href="{{ route('technologies.show', $technology->id) }}">{{ $technology->name }}</a></li>

            @endforeach
        </ul>
        <br>
        <br>
        <a href="{{ route('technologies.create') }}">Aggiungi tecnologia</a>

    </div>

</x-app-layout>