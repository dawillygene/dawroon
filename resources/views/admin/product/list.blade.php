<x-main-layout>
  <x-root.dashboardMenu title="Product List" :links="['Eazylinky', 'Product', 'Product List']" />
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


    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex flex-wrap items-center justify-between py-4 px-5">
          <div class="relative lg:flex hidden">
            <input type="search" class="ps-12 pe-4 py-2.5 block w-64 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary" placeholder="Search...">
            <span class="absolute start-4 top-2.5">
              <i class="ti ti-search text-lg/none"></i>
            </span>
          </div>
          <a href="admin-product-add.html" class="relative overflow-hidden py-2.5 pe-6 ps-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-sm text-center bg-primary-600 text-white rounded-full hover:bg-primary-700">
            <span class="absolute top-1/2 -translate-y-1/2 start-0 h-full w-10 rounded-full inline-flex items-center justify-center bg-white/20 text-white me-3"><i class="ti ti-circle-plus text-xl"></i></span>
            Add Product
          </a>
        </div>
        
        <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
            
          <x-table.table  variant="min" theadClass="min">
          <x-slot name="header">
            <x-table.table-row>
              <td class="px-6 py-3 w-10 font-medium text-default-900">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded focus:ring-0 text-primary bg-default-50 ring-transparent ring-offset-0">
              </td>
              
              <x-table.table-cell tag="th" type="custom-header" class="text-start min-w-32">Product </x-table.table-cell>
              <x-table.table-cell tag="th" type="custom-header" class="text-start min-w-32">Type </x-table.table-cell>
              <x-table.table-cell tag="th" type="custom-header" class="text-start min-w-40">Price </x-table.table-cell>
              <x-table.table-cell tag="th" type="custom-header" class="text-start min-w-40">Quantity </x-table.table-cell> 
              <x-table.table-cell tag="th" type="custom-header" class="text-start min-w-32">Create By </x-table.table-cell> 
              <x-table.table-cell tag="th" type="custom-header" class="text-start min-w-32">Status </x-table.table-cell> 
              <x-table.table-cell tag="th" type="custom-header" class="text-center min-w-32">Action </x-table.table-cell>  
            </x-table.table-row>
          </x-slot>
          <x-slot name="body">

            <x-table.table-row>
              <td class="px-6 py-3">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
              </td>

              <x-table.table-cell tag="td" type="default" class="font-semibold">
                <spam class="flex items-center gap-2">
                  <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                    <x-cards.product-card-image productImage="1-2ca96552.png" class="max-w-full h-full rounded-full" />
                  </span>
                  <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                </spam>
              </x-table.table-cell>
             
              <x-table.table-cell tag="td" type="default" class="font-medium">Fruit</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-semibold">$142</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">12</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">Admin</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-medium">
                <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                  Publish
                </span>
              </x-table.table-cell>

              <x-table.table-cell tag="td" type="none" class="text-center text-sm font-medium">
                <div class="flex items-center justify-center gap-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-eye text-lg"></i>
                  </button>
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-edit-circle text-base"></i>
                  </button>
                  <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-trash text-lg"></i>
                  </button>
                </div>
              </x-table.table-cell>
            </x-table.table-row>

            <x-table.table-row>
              <td class="px-6 py-3">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
              </td>

              <x-table.table-cell tag="td" type="default" class="font-semibold">
                <spam class="flex items-center gap-2">
                  <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                    <x-cards.product-card-image productImage="1-2ca96552.png" class="max-w-full h-full rounded-full" />
                  </span>
                  <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                </spam>
              </x-table.table-cell>
             
              <x-table.table-cell tag="td" type="default" class="font-medium">Fruit</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-semibold">$142</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">12</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">Admin</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-medium">
                <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                  Pending
                </span>
              </x-table.table-cell>

              <x-table.table-cell tag="td" type="none" class="text-center text-sm font-medium">
                <div class="flex items-center justify-center gap-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-eye text-lg"></i>
                  </button>
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-edit-circle text-base"></i>
                  </button>
                  <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-trash text-lg"></i>
                  </button>
                </div>
              </x-table.table-cell>
            </x-table.table-row>

            <x-table.table-row>
              <td class="px-6 py-3">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
              </td>

              <x-table.table-cell tag="td" type="default" class="font-semibold">
                <spam class="flex items-center gap-2">
                  <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                    <x-cards.product-card-image productImage="1-2ca96552.png" class="max-w-full h-full rounded-full" />
                  </span>
                  <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                </spam>
              </x-table.table-cell>
             
              <x-table.table-cell tag="td" type="default" class="font-medium">Fruit</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-semibold">$142</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">12</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">Admin</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-medium">
                <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                  Pending
                </span>
              </x-table.table-cell>

              <x-table.table-cell tag="td" type="none" class="text-center text-sm font-medium">
                <div class="flex items-center justify-center gap-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-eye text-lg"></i>
                  </button>
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-edit-circle text-base"></i>
                  </button>
                  <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-trash text-lg"></i>
                  </button>
                </div>
              </x-table.table-cell>
            </x-table.table-row>

            <x-table.table-row>
              <td class="px-6 py-3">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
              </td>

              <x-table.table-cell tag="td" type="default" class="font-semibold">
                <spam class="flex items-center gap-2">
                  <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                    <x-cards.product-card-image productImage="1-2ca96552.png" class="max-w-full h-full rounded-full" />
                  </span>
                  <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                </spam>
              </x-table.table-cell>
             
              <x-table.table-cell tag="td" type="default" class="font-medium">Fruit</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-semibold">$142</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">12</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">Admin</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-medium">
                <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                  Pending
                </span>
              </x-table.table-cell>

              <x-table.table-cell tag="td" type="none" class="text-center text-sm font-medium">
                <div class="flex items-center justify-center gap-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-eye text-lg"></i>
                  </button>
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-edit-circle text-base"></i>
                  </button>
                  <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-trash text-lg"></i>
                  </button>
                </div>
              </x-table.table-cell>
            </x-table.table-row>

            <x-table.table-row>
              <td class="px-6 py-3">
                <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
              </td>

              <x-table.table-cell tag="td" type="default" class="font-semibold">
                <spam class="flex items-center gap-2">
                  <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                    <x-cards.product-card-image productImage="1-2ca96552.png" class="max-w-full h-full rounded-full" />
                  </span>
                  <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                </spam>
              </x-table.table-cell>
             
              <x-table.table-cell tag="td" type="default" class="font-medium">Fruit</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-semibold">$142</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">12</x-table.table-cell>
              <x-table.table-cell tag="td" type="none" class="text-default-600 font-medium">Admin</x-table.table-cell>
              <x-table.table-cell tag="td" type="primary" class="font-medium">
                <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                  Pending
                </span>
              </x-table.table-cell>

              <x-table.table-cell tag="td" type="none" class="text-center text-sm font-medium">
                <div class="flex items-center justify-center gap-2">
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-eye text-lg"></i>
                  </button>
                  <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-edit-circle text-base"></i>
                  </button>
                  <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                    <i class="ti ti-trash text-lg"></i>
                  </button>
                </div>
              </x-table.table-cell>
            </x-table.table-row>
          </x-slot>
          </x-table.table>  
        </div>

        <div class="flex items-center justify-between py-3 px-6 border-t border-dashed border-default-200">
          <h6 class="text-default-600">Showing 1 to 5 of 12</h6>
          <nav class="flex items-center gap-1">
            <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
              <i class="ti ti-chevron-left text-base"></i>
            </a>
            <a class="inline-flex items-center justify-center h-8 w-8 border rounded-md transition-all duration-200 bg-primary text-white border-primary" href="#" aria-current="page">1</a>
            <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">2</a>
            <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">...</a>
            <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">12</a>
            <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
              <i class="ti ti-chevron-right text-base"></i>
            </a>
          </nav>
        </div>
      </div>
</x-main-layout>