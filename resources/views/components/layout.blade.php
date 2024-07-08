<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Website resmi Program Studi Teknik Informatika Universitas Halu Oleo">
    <meta name="keywords" content="Teknik Informatika, Universitas Halu Oleo, UHO, Kendari, Sulawesi Tenggara">
    <meta name="author" content="Teknik Informatika UHO">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="yandex" content="index, follow">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/uho.png') }}">
    <meta name="application-name" content="Teknik Informatika UHO">
    <meta name="apple-mobile-web-app-title" content="Teknik Informatika UHO">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Teknik Informatika UHO">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="{{ asset('assets/uho.png') }}" type="image/x-icon">

    <title>Teknik Informatika</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>

<body class="antialiased font-inter">
    <main class="min-h-screen flex flex-col">
        <x-header />
        <section class="flex-1">
            {{ $slot }}
        </section>
        <x-footer />
    </main>
</body>

</html>
