<x-layouts>
    <x-slot:title>Job</x-slot:title>
    
    <h2 class="text-lg font-bold">{{$job->title}}</h2>

    <p>
        This job pays {{$job->salary}} per year
    </p>

    @can('edit', $job)
    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
    @endcan
    
</x-layouts>