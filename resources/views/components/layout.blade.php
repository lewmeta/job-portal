<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Laravel Job</title>

</head>

<body 
class="mx-auto w-full max-w-2xl bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 px-5 pt-10 md:p-0"
>
{{ auth()->user()->name ?? "Guest"}}

    {{ $slot }}
</body>

</html>
