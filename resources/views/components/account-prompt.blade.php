@props([
  'message' => 'Already have an account?', // Default message
  'linkText' => 'Login', // Default link text
  'linkRoute' => route('login'), // Default link route
  'messageClass' => 'text-default-600 font-medium', // Default message classes
  'linkClass' => 'text-primary ms-1', // Default link classes
])


<p class="shrink text-center mt-5 {{ $messageClass }}">
  {{ $message }}<a href="{{ $linkRoute }}" class="{{ $linkClass }}"><b>{{ $linkText }}</b></a>
</p>