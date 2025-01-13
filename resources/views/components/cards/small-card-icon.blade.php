
@props(['height'=>14,'width'=> 14,'color' => 'blue', 'icon' => 'ti-shopping-bag'])

@php

    $bgColor = match ($color) {
        'blue' => 'bg-blue-500/20',
        'red' => 'bg-red-500/20',
        'green' => 'bg-green-500/20',
        'yellow' => 'bg-yellow-500/20',
        'purple' => 'bg-purple-500/20',
        default => 'bg-blue-500/20',
    };

    $textColor = match ($color) {
        'blue' => 'text-blue-500',
        'red' => 'text-red-500',
        'green' => 'text-green-500',
        'yellow' => 'text-yellow-500',
        'purple' => 'text-purple-500',
        default => 'text-blue-500',
    };
@endphp

<div class="shrink h-{{ $height }} w-{{ $width }} inline-flex items-center justify-center {{ $bgColor }} {{ $textColor }} rounded-md">
    <i class="ti {{ $icon }} text-3xl"></i>
</div>