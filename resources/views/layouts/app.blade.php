<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

  {{-- Favicon  --}}
  <link rel="apple-touch-icon" sizes="180x180" href="https://laravel.com//img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com//img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com//img/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="https://laravel.com//img/favicon/safari-pinned-tab.svg" color="#ff2d20">
  <link rel="shortcut icon" href="https://laravel.com//img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ff2d20">

  @livewireStyles
  {{-- Scripts  --}}
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased dark:bg-gray-900">
  <x-toast-message />

  @include('layouts.navigation')

  @include('layouts.sidebar')

  <div class="p-4 sm:ml-64 mt-14">
    <div>
      {{-- Page Breadcrumb --}}
      @if (isset($breadcrumb))
        {{ $breadcrumb }}
      @endif

      {{ $slot }}
    </div>
  </div>

  @livewireScriptConfig
</body>

</html>
