<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Mikael Oliveira')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mikael Oliveira Candido Cerqueira">
    <meta name="description" content="@yield('description', 'Seja bem vindo, aqui você vai poder conhecer um pouco sobre mim e ler alguns posts que escrevi.')">
    <meta name="keywords" content="@yield('keywords', 'Mikael Oliveira, blog, desenvolvimento, tecnologia, posts, Laravel, Livewire, faculdade')">

    <!-- Open Graph - Facebook e LinkedIn -->
    <meta property="og:title" content="@yield('og:title', 'Mikael Oliveira')">
    <meta property="og:description" content="@yield('og:description', 'Conheça mais sobre mim e leia meus posts sobre desenvolvimento e tecnologia.')">
    <meta property="og:image" content="@yield('og:image', asset('assets/images/cat.png'))">
    <meta property="og:url" content="@yield('og:url', 'mikaeloliveira.com.br')">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter:title', 'Mikael Oliveira')">
    <meta name="twitter:description" content="@yield('twitter:description', 'Conheça mais sobre mim e leia meus posts sobre desenvolvimento e tecnologia.')">
    <meta name="twitter:image" content="@yield('twitter:image', asset('assets/images/cat.png'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @yield('styles')
    </style>
</head>

<body>
    @yield('content')
    @yield('scripts')
</body>

</html>
