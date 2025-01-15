@props([
  'title' => 'Register', // Default title
  'description' => 'Welcome! Get started by creating an account by filling the following details', // Default description
])


<div class="max-w-xl mx-auto">
  <h4 class="text-default-900 text-2xl font-semibold mb-2">{{ $title }}</h4>
  <p class="text-default-600">{{ $description }}</p>
</div>