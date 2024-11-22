<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index')]" class="mb-4 container" />

    <x-card class="mb-4 text-sm">
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold text-sm">
                    Search
                </div>
                <x-text-input name="search" value="" placeholder="Search for any text" />
            </div>
            <div>
                <div class="mb-1 font-semibold text-sm">
                    Salary
                </div>
                <div class="flex items-center space-x-2">
                    <x-text-input name="min_salary" value="" placeholder="Min " />
                    <x-text-input name="max_salary" value="" placeholder="Max" />
                </div>
            </div>
            <div>3</div>
            <div>4</div>
        </div>
    </x-card>
    @foreach ($jobs as $job)
        <x-job-card class="mb-2" :$job>
            <x-link-button class="" :href="route('jobs.show', $job)">
                Show
            </x-link-button>
        </x-job-card>
    @endforeach
</x-layout>