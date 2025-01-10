{{-- @props(['class' => ''])
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800 {{ $class }}">
    {{ $slot }}
</td> --}}

@props(['type' => 'body', 'class' => ''])

@php
    $defaultClasses = [
        'small' => 'text-sm text-default-500',
        'body' => 'text-sm font-medium text-default-800',
        'header' => 'text-xs font-medium text-default-600 uppercase',
    ];
@endphp

<td class="px-6 py-4 whitespace-nowrap {{ $defaultClasses[$type] }} {{ $class }}">
    {{ $slot }}
</td>