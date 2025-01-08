
@props(['productImage','heading','price', 'discount', 'rating'])

      <x-cards.product-card-icon/>

    <div class="text-center">
      <x-cards.product-card-image :$productImage/>
      <x-cards.product-card-heading>{{ $heading }}</x-cards.product-card-heading>
      <x-cards.product-card-price :$price :$discount/>
    </div>


    <x-cards.product-card-rating :$rating maxRating="5" />

















    




{{-- 
    <div class="flex items-center justify-center gap-2">
      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
      <button><i class="ti ti-star-filled text-lg text-yellow-400"></i></button>
      <button><i class="ti ti-star-half-filled text-lg text-yellow-400"></i></button>
    </div> --}}

