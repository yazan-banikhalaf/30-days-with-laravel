<x-layouts>
    <x-slot:title>Job</x-slot:title>
    <h2 class="text-lg font-bold">{{$job['title']}}</h2>

    <p>
        This job pays {{$job['salary']}} per year
    </p>
</x-layouts>