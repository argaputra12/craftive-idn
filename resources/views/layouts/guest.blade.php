<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Craftive') }}</title>

  <!-- Icon -->
  <link rel="icon" href="{{ asset('storage/images/Logo.png') }}" type="image/png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/0b736e1e36.js" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-sans text-gray-900 antialiased">
  @include('components.navbar')
  <div class="mx-auto flex flex-wrap items-center justify-between">
    {{ $slot }}
  </div>

</body>

</html>

