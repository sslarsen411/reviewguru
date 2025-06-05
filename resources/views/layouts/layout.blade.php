<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rave Review Guru</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css')
    @livewireStyles
    <link rel="icon" href='images/favicon.svg' type="image/svg+xml"/>
</head>
<body class="mx-auto">
{{--<x-header/>--}}
{{$slot}}
{{--<x-footer/>--}}
@stack('scripts')
{{--@livewireScripts--}}
@vite('resources/js/app.js')
@livewireScripts
{{--@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@11"])--}}
</body>
</html>
