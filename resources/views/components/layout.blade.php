<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>Laravel Job</title>

</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 w-full pt-10">
    {{ $slot }}
</body>

</html>
