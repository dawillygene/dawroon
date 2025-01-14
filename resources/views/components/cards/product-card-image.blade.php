{{-- 
@props(['productImage'])
<img src="{{ asset('storage/images/'.$productImage) }}" alt="" class="flex mx-auto my-4"> --}}

@props([
    'productImage', 
    'class' => 'flex mx-auto my-4',
    'alt' => '',
    'storagePath' => true,
])

@php
    // Determine the image source
    $imageSrc = $storagePath ? asset('storage/images/' . $productImage) : asset($productImage);
@endphp

<img src="{{ $imageSrc }}" alt="{{ $alt }}" class="{{ $class }}">