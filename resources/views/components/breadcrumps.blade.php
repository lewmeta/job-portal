<nav {{ $attributes->class([''])}}>
    <ul class="flex space-x-4 text-sm text-white/90">
        <li>
            <a href="/">Home</a>
        </li>

        @foreach ($links as $label => $link)
            <li>→</li>
            <li>
                <a href="{{ $link }}">
                    {{ $label }}
                </a>
            </li>
        @endforeach

    </ul>
</nav>
