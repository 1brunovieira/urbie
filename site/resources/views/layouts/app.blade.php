<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Urbie') — Sistema de Administração de Condomínios</title>
    <meta name="description" content="@yield('description', 'Urbie é o sistema completo para gestão de condomínios. Financeiro, moradores, assembleias, RH e muito mais em uma única plataforma.')">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="bg-white" x-data>

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    @stack('scripts')
</body>
</html>
