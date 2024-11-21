<x-layout>
    @foreach ($jobs as $job)
        <div class="text-3xl bg-gradient-to-b h-full text-transparent bg-clip-text from-black to-blue-600 ">{{ $job->title }}</div>
    @endforeach
</x-layout>
