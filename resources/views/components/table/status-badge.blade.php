@props(['color'=>'default'])

@php
$textColors = [
    'processing' => 'bg-blue-500/10 text-blue-500', // or any of the above suggestions
    'dark' => 'text-default-900',
    'pending' => 'bg-amber-500/20 text-amber-500',
    'completed' => 'bg-primary/10 text-primary-500',
    'cancelled' => 'bg-red-500/10 text-red-500',
];
@endphp

<span class="px-3 py-1 text-xs font-medium rounded-md {{ $textColors[$color]}}">
    {{ $slot }}
</span>

