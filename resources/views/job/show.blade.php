<x-layout>
    <x-breadcrumps :links="['Jobs' => route('jobs.index'), $job->title => '#']" class="mb-4 container" />
    <x-job-card :$job>
        <p class="mb-4 text-sm text-slate-500">
            {!! nl2br(e($job->description)) !!}
        </p>
    </x-job-card>
    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium capitalize">More {{ $job->employer->company_name }} Jobs </h2>

        <div class="text-sm text-slate-500">
            @foreach ($job->employer->jobs as $otherJobs)
                <div class="mb-4 flex justify-between">
                    <div>
                        <div class="text-slate-700">
                            <a href="{{ route('jobs.show', $otherJobs)}}">
                                {{$otherJobs->title}}
                            </a>
                        </div>
                        <div class="text-sm text-slate-400">
                            {{ $otherJobs->created_at->diffForHumans()}}
                        </div>
                    </div>
                    <div aria-colspan="text-xs">
                        ${{ number_format($otherJobs->salary)}}
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>
