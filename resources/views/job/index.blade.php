<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index')]" class="mb-4 container" />

    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold text-sm">
                        Search
                    </div>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text" />
                </div>
                <div>
                    <div class="mb-1 font-semibold text-sm">
                        Salary
                    </div>
                    <div class="flex items-center space-x-2">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="Min " />
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="Max" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <label for="experience" class="flex items-center">
                        <input type="radio" name="experience" value="" @checked(!request('experience'))>
                        <span class="ml-2">All</span>
                    </label>
                    <label for="experience" class="flex items-center">
                        <input type="radio" name="experience" @checked('entry' === request('experience')) value="entry">
                        <span class="ml-2">Entry</span>
                    </label>
                    <label for="experience" class="flex items-center">
                        <input type="radio" name="experience" value="senior" @checked('senior' === request('experience'))>
                        <span class="ml-2">Senior</span>
                    </label>
                    <label for="experience" class="flex items-center">
                        <input type="radio" name="experience" value="intermidiate" @checked('intermidiate' === request('experience'))>
                        <span class="ml-2">Intermidiate</span>
                    </label>

                </div>
                <div>4</div>
            </div>
            <button class="w-full">Filter</button>
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
