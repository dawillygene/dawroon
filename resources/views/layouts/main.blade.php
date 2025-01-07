<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'dawroon') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
            @include('layouts.navigation')

  <div class="min-h-screen flex flex-col lg:ps-64 w-full">
  <x-root.header />
   <div class="space-y-6 p-6">
   <x-root.dashboardMenu />

  {{ $slot }}

    </div>
  <x-root.footer />
  </div>
        @include('sweetalert::alert')
    </body>
</html>
