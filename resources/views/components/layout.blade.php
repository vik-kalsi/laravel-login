<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
</head>

<body class="my-4 grid justify-center bg-linear-to-r from- bg-purple-950 to-blue-900 text-white">
    
    <div class="mb-4">
        <ul class="border-2 flex py-2">
            <li class="px-2"><a class="hover:font-bold" href="/">Homepage</a></li>
            <li class="px-2"><a class="hover:font-bold" href="/login">Login</a></li>
            <li class="px-2"><a class="hover:font-bold" href="/register">Register</a></li>
        </ul>
    </div>

    <div class="border-2 p-4">
        {{ $slot }}
    </div>
    
</body>
</html>