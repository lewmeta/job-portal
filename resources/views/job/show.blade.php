<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index'), $job->title => '#']" class="mb-4 container" />
    <x-job-card :$job>
        <p class="mb-4 text-sm text-slate-500">
            {!! nl2br(e($job->description)) !!}
        </p>
    </x-job-card>
</x-layout>
