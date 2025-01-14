@props([
    'variant' => 'default',
    'theadClass' => '', 
])

@php

    $tableClasses = [
        'default' => 'min-w-full divide-y divide-default-200',
        'min' => 'min-w-full',
        'large' => 'min-w-full divide-y divide-dashed divide-default-200',
    ][$variant];

    $tbodyClasses = [
        'default' => 'divide-y divide-default-200',
        'min' => '',
        'large' => 'divide-y divide-dashed divide-default-200',
    ][$variant];

    
    $theadClasses = [
        'default' => 'bg-default-100',
        'min' => 'border-b border-dashed border-default-200',
        'large' => 'bg-default-100 border-b border-dashed border-default-200',
    ][$variant];

   
    $theadClasses = trim("$theadClasses $theadClass");
@endphp

<table class="{{ $tableClasses }}">
    <thead class="{{ $theadClasses }}">
        {{ $header }}
    </thead>
    <tbody class="{{ $tbodyClasses }}">
        {{ $body }}
    </tbody>
</table>