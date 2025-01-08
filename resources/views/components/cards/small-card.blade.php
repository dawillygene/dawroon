@props(['title', 'quantity', 'rate', 'color', 'icon'])

<div class="p-5 bg-white dark:bg-default-50 overflow-hidden">
    <div class="flex gap-4">

        <div class="grow">
            <x-cards.small-card-title>{{ $title }}</x-cards.small-card-title>
            <x-cards.small-card-quantity>{{ $quantity }}</x-cards.small-card-quantity>
            <x-cards.small-card-rate>{{ $rate }}</x-cards.small-card-rate>
        </div>

        <x-cards.small-card-icon color="{{ $color }}" icon="{{ $icon }}" />

    </div>
</div>
