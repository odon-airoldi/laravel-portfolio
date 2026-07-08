<x-app-layout>

    <div class="text-gray-800 dark:text-gray-200"> 
        <h1>Tutti i progetti</h1>

            @foreach ( $projects as $project )

                {{ $project->name }}<br>
                
            @endforeach

    </div>

</x-app-layout>