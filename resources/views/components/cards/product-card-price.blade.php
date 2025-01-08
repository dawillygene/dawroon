@props(['price','discount'=> null])
<h4 class="font-medium text-base text-primary mb-2">{{ $price }} 
    <span class="text-default-600 text-sm line-through">{{ $discount }}</span> 
</h4>
