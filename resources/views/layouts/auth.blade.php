<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Craftive') }}</title>

  <!-- Favicons -->
  <link rel="craftive logo" href="{{ asset('storage/images/Logo.png') }}" type="imagge/svg">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/0b736e1e36.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary-background font-sans text-gray-900 antialiased">
  <div class="mx-auto flex min-h-screen flex-wrap items-center justify-center">
    @yield('content')
  </div>
  @include('sweetalert::alert')

</body>

</html>
