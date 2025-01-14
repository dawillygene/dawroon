<x-main-layout>
  <x-root.dashboardMenu title="Product List" :links="['GreenCart', 'Product', 'Product List']" />
    <x-cards.grid-layout>

        <x-cards.panel class=" bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between">
                <div>
                    <x-cards.small-card-title>All Products</x-cards.small-card-title>
                    <x-cards.small-card-quantity class="text-2xl mt-4">280K</x-cards.small-card-quantity>
                </div>
                <div>
                    <x-cards.small-card-icon height="18" width="18" color="blue" icon="ti-box"/>
                </div>
            </div>
        </x-cards.panel>

        <x-cards.panel class=" bg-white dark:bg-default-50 h-fit">
          <div class="flex items-center justify-between">
              <div>
                  <x-cards.small-card-title>New Products</x-cards.small-card-title>
                  <x-cards.small-card-quantity class="text-2xl mt-4">201K</x-cards.small-card-quantity>
              </div>
              <div>
                  <x-cards.small-card-icon height="18" width="18" color="green" icon="ti-discount-check-filled"/>
              </div>
          </div>
      </x-cards.panel>

      <x-cards.panel class=" bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between">
            <div>
                <x-cards.small-card-title>Upcoming Products</x-cards.small-card-title>
                <x-cards.small-card-quantity class="text-2xl mt-4">44K</x-cards.small-card-quantity>
            </div>
            <div>
                <x-cards.small-card-icon height="18" width="18" color="Yellow" icon="ti-hourglass"/>
            </div>
        </div>
    </x-cards.panel>

    <x-cards.panel class=" bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between">
          <div>
              <x-cards.small-card-title>Deleted Products</x-cards.small-card-title>
              <x-cards.small-card-quantity class="text-2xl mt-4">35K</x-cards.small-card-quantity>
          </div>
          <div>
              <x-cards.small-card-icon height="18" width="18" color="red" icon="ti-trash"/>
          </div>
      </div>
  </x-cards.panel>
    </x-cards.grid-layout>
</x-main-layout>