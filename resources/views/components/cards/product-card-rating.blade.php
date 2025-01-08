
@props(['rating' => 0, 'maxRating' => 5])

@php
    // Ensure the rating is within the valid range
    $rating = min(max($rating, 0), $maxRating);

    // Calculate the number of full stars, half stars, and empty stars
    $fullStars = floor($rating);
    $hasHalfStar = $rating - $fullStars >= 0.5;
    $emptyStars = $maxRating - $fullStars - ($hasHalfStar ? 1 : 0);
@endphp

<div class="flex items-center justify-center gap-2">
    {{-- Full Stars --}}
    @for ($i = 0; $i < $fullStars; $i++)
        <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
    @endfor

    {{-- Half Star --}}
    @if ($hasHalfStar)
        <button><i class="ti ti-star-half-filled text-lg text-yellow-400"></i></button>
    @endif

    {{-- Empty Stars --}}
    @for ($i = 0; $i < $emptyStars; $i++)
        <button><i class="ti ti-star text-lg text-yellow-400"></i></button>
    @endfor
</div>