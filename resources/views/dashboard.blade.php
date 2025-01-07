<x-main-layout>
    @php
        
    @endphp
  <x-cards.grid-layout>
   <x-cards.panel>
     <x-cards.small-card title="order" quantity="14.8k" rate="50%" />
   </x-cards.panel>
   <x-cards.panel>
     <x-cards.small-card title="Total product" quantity="14.8k" rate="50%" />
   </x-cards.panel>
   <x-cards.panel>
     <x-cards.small-card title="Total customer" quantity="14.8k" rate="50%" />
   </x-cards.panel>
   <x-cards.panel>
     <x-cards.small-card title="Reviews" quantity="14.8k" rate="50%" />
   </x-cards.panel>
 </x-cards.grid-layout>

   <x-cards.card-main-heading />


   <x-cards.grid-layout type="large">
       @for ($i = 0; $i < 6; $i++)
           <x-cards.panel style="relative">


               <x-cards.product-card>

               </x-cards.product-card>


           </x-cards.panel>
       @endfor
   </x-cards.grid-layout>



</x-main-layout>
