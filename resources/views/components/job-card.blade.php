<x-card class="mb-2">
    <div>
        <div class="mb-4 flex justify-between">
            <h2 class="text-lg font-medium">
                {{ $job->title }}
            </h2>
            <div class="text-slate-500">
                ${{ number_format($job->salary) }}
            </div>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex space-x-3">
                <div>Company name</div>
                <div>{{ $job->location }}</div>
            </div>
            <div class="flex items-center space-x-1 text-xs">
                <x-tag>{{ Str::ucfirst($job->experience )}}</x-tag>
                <x-tag>{{ $job->category }}</x-tag>
            </div>
        </div>
    </div>
    {{ $slot }}
</x-card>
