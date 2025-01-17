@props([
  'value', // The label text
  'for' => '', // The "for" attribute (used to associate the label with an input)
  'class' => 'block text-base/normal font-semibold text-default-800 mb-2', // Default classes
])

<label for="{{ $for }}" {{ $attributes->merge(['class' => $class]) }}>
    {{ $value ?? $slot }}
</label>