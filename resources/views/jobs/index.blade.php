<x-layouts>
    <x-slot:title>About page</x-slot:title>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{$job->employer->name}}
                </div>
                <div>
                    <strong>{{$job['title']}}: </strong>and pays: {{$job['salary']}} 
                </div>
            </a>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layouts>