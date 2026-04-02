<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @yield('description')
    @yield('keywords')
    @yield('featured_image')
    <link rel="shortcut icon" href="{{ asset('images/logos/file_00000000a738720aa937501436d285b3.ico') }}"
        type="image/x-icon">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: {{ env('HEADING_COLOR') }};
        }
    </style>
</head>

<body class="antialiased font-sans">
    <livewire:front-end-navigation />
    <main class="px-4 mb-5">
        {{ $slot }}
    </main>
    <livewire:footer class="" />
</body>

</html>
