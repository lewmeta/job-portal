<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index'),]" class="mb-4 container" />
    @foreach ($jobs as $job)
        <x-job-card class="mb-2" :$job>
            <div>
            </div>
            <x-link-button class="" :href="route('jobs.show', $job)">
                Show
            </x-link-button>
        </x-job-card>
    @endforeach
</x-layout>
