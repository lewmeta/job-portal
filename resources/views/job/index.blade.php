<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index')]" class="mb-4 " />

    <x-card class="mb-4 text-sm" x-data="">
        <form x-ref="filters" id="filtering-input" action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold text-sm">
                        Search
                    </div>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text"
                        form-ref="filters" />
                </div>
                <div>
                    <div class="mb-1 font-semibold text-sm">
                        Salary
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="Min "
                            form-ref="filters" />
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="Max"
                            form-ref="filters" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-group name="experience" :options="array_combine(
                        array_map('ucfirst', \App\Models\Job::$experience),
                        \App\Models\Job::$experience,
                    )" />

                </div>
                <div>
                    <div class="mb-1 font-semibold">Category</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" />
                </div>
            </div>
            <x-button class="w-full">Filter</x-button>
        </form>
    </x-card>
    @foreach ($jobs as $job)
        <x-job-card class="mb-2" :$job>
            <div class="mt-4">
                <x-link-button class="" :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
