<div>
    <label for="{{ $name }}" class="flex items-center">
        <input type="radio" name="{{ $name }}" value="" @checked(!request('experience'))>
        <span class="ml-2">All</span>
    </label>

    @foreach ($optionsWithLabels as $label => $option)
        <label for={{ $name }} class="flex items-center">
            <input type="radio" name="{{ $name }}" @checked($option === request($name)) value="{{ $option }}">
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach
</div>
