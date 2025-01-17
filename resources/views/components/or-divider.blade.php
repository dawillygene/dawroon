@props([
  'text' => 'Or', // Default text
  'textClass' => 'text-default-600', // Default text classes
  'lineClass' => 'border-dashed border-default-400/80', // Default line classes
])

<div class="flex items-center my-4">
  <div class="flex-auto mt-px border-t {{ $lineClass }}"></div>
  <div class="mx-4 {{ $textClass }}">{{ $text }}</div>
  <div class="flex-auto mt-px border-t {{ $lineClass }}"></div>
</div>