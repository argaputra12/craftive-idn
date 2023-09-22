<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

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

<body class="font-sans antialiased">
  <div class="flex min-h-screen flex-col bg-white">
    @include('components.navbar')

    <!-- Page Heading -->
    @if (isset($header))
      <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          {{ $header }}
        </div>
      </header>
    @endif

    <!-- Page Content -->
    <main class="flex-grow">
      {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="w-full bg-gray-900">
      <div class="mx-auto max-w-screen-xl px-4 sm:px-6">
        <div class="py-12 md:flex md:items-center md:justify-between">
          <div class="flex justify-center space-x-6 text-white md:order-2">
            <a href="#" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">Facebook</span>
              <i class="fa-brands fa-facebook-f fa-lg"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">Twitter</span>
              <i class="fa-brands fa-twitter fa-lg"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">Instagram</span>
              <i class="fa-brands fa-instagram fa-lg"></i>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-300">
              <span class="sr-only">Whatsapp</span>
              <i class="fa-brands fa-whatsapp fa-lg"></i>
            </a>

          </div>

          <div class="mt-8 md:order-1 md:mt-0">
            <p class="text-center text-base text-gray-400">
              &copy; 2023 Craftive.id
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>
