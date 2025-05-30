<x-layout>
    <x:slot:heading>
        Jobs Page
    </x-slot>
    <ul>
        @foreach($jobs as $job)
            <li><a href="/job/{{$job['id']}}" class="text-blue-500 hover:underline"><strong>{{ $job['title'] }} </strong>: pays {{ $job['salary'] }} per year</a></li>
        @endforeach
    </ul>
</x-layout>
