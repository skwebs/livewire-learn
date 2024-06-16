<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    {{-- <script src="{{ asset('tailwindcss-3.4.3.min.js') }}"></script> --}}
</head>

<body class="bg-gray-100">
    {{ $slot }}
</body>

</html>
