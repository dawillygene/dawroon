@props([
    'type' => 'body',
    'class' => '', 
    'tag' => 'td', 
])

@php
    $defaultClasses = [
        'small' => 'text-sm text-default-500',
        'body' => 'text-sm font-medium text-default-800',
        'default' => 'text-default-900',
        'primary' => 'text-primary',
        'none' => '',
        'header' => 'text-xs font-medium text-default-600 uppercase',
        'custom-header' => 'text-base capitalize font-semibold text-default-900', // Custom header style
    ];

    $typeClasses = $defaultClasses[$type] ?? '';

    $classes = trim("px-6 py-3 whitespace-nowrap $typeClasses $class");
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $tag }}>