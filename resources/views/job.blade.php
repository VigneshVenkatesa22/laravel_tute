<x-layout>
    <x:slot:heading>
    Job
</x:slot>
<h2 class="text-4xl font-semibold text-gray-800 mb-4">
    {{ $job['title'] }}
</h2>

<p>This jobs pay ${{$job['salary']}} per year</p>

</x-layout>