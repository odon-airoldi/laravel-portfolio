<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200"> 
        <h1>Tutti i progetti</h1>

            <ul>
            @foreach ( $projects as $project )

                <li><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></li>
                
            @endforeach
            </ul>

    </div>

</x-app-layout>