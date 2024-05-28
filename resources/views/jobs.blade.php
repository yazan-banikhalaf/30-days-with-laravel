<x-layouts>
    <x-slot:title>About page</x-slot:title>
    @foreach ($jobs as $job)
    <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
    <li><strong>{{$job['title']}}: </strong>and pays: {{$job['salary']}} </li>
    </a>
    @endforeach
</x-layouts>