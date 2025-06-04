<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Guru</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite('resources/css/app.css')
    @stack('styles')
    <link rel="icon" href='images/favicon.svg' type="image/svg+xml"/>
</head>
<body class="mx-auto h-screen bg-stone-100    ">
{{--<x-header/>--}}
{{$slot}}
{{--<x-footer/>--}}
@stack('scripts')
{{--@livewireScripts--}}
@vite('resources/js/app.js')
{{--@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@11"])--}}
</body>
</html>
