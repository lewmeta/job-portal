<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Laravel Job</title>

</head>

<body class="mx-auto w-full max-w-2xl bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 px-5 pt-10 md:p-0">
    <nav class="mb-8 flex justify-between text-lg font-medium">
        <ul class="flex space-x-2">
            <li>
                <a href="{{ route('jobs.index') }}">
                    Home
                </a>
            </li>

        </ul>
        <ul class="flex space-x-2">
            @auth
                <li>
                    <span class="bg-gradient-to-r from-blue-700 via-blue-900 to-blue-600 bg-clip-text text-transparent">
                        {{ auth()->user()->name ?? 'Anonymous' }}
                    </span>
                </li>
                <li>
                    <form action="{{route('auth.destroy')}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Logout</button>
                    </form>
                </li>
            @else
                <div>
                    <a href="{{ route('auth.create') }}">
                        sign the fuck in.
                    </a>
                </div>
            @endauth
        </ul>
    </nav>

    {{ $slot }}
</body>

</html>
