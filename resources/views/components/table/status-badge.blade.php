@props(['color'=>'default'])

@php
$textColors = [
    'default' => 'text-default-800',
    'dark' => 'text-default-900',
    'pending' => 'bg-amber-500/20 text-amber-500',
    'success' => 'bg-primary/10 text-primary-500',
    'error' => 'bg-red-500/10 text-red-500', 
];
@endphp

<span class="px-3 py-1 text-xs font-medium rounded-md {{ $textColors[$color]}}">
    {{ $slot }}
</span>

