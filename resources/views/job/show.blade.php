<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index'), $job->title => '#']" class="mb-4 container" />
    <x-job-card :$job />
</x-layout>
