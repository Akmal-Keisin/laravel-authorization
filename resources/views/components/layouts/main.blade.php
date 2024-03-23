<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')

    <title>{{ config('app.name') }}</title>
</head>

<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <x-layouts.sidebar/>

        <!-- Main Content -->
        <div class="w-10/12">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
