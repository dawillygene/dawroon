@props(['homeRoute' => route('home')])

<a href="{{ $homeRoute }}" class="block mb-10">
  <img class="h-10 block dark:hidden" src="{{ asset('storage/images/logo-dark-1caee452.png') }}" alt="Logo Dark">
  <img class="h-10 hidden dark:block" src="{{ asset('storage/images/logo-50f51c55.png') }}" alt="Logo Light">
</a>