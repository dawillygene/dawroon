<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <title>GreenCart - Tailwind CSS Grocery Landing Page Template</title>
  <!-- Theme favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon-712e565d.ico') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {{-- <meta content="" name="description" /> --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="coderthemes" name="author" />

  <!-- Load CSS and JS using Vite -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <section class="sm:p-10 p-6 flex items-center lg:justify-start justify-center relative bg-no-repeat bg-cover min-h-screen" style="background-image: url('{{ asset('storage/images/banner-11-84d6d521.jpg') }}');">        <div class="max-w-lg w-full xl:me-auto rounded-xl bg-white/80 backdrop-blur-2xl sm:p-10 p-6 h-full flex flex-col dark:bg-default-50/60 border-t-4 border-primary">
         
          <x-application-logo/>

          <div class="my-auto">



            {{ $slot }}

      
            <x-or-divider/>
            <x-continue-with-heading/>
      
            <x-social-login-buttons/>

          </div>


      </section>
      
      <!-- Light Dark theme -->
      <x-theme-toggle />
</body>
</html>