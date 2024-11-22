<div>
    <label for="{{ $name }}" class="flex items-center">
        <input type="radio" name="{{ $name }}" value="" @checked(!request('experience'))>
        <span class="ml-2">All</span>
    </label>

    @foreach ($options as $option)
        <label for={{$name}} class="flex items-center">
            <input type="radio" name="{{ $name}}" @checked($option === request($name)) value="{{ $option }}">
            <span class="ml-2">{{ Str::ucfirst($option)}}</span>
        </label>
    @endforeach
</div>
