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
            <table class="min-w-full">
            
            <x-table.table>
            <thead class="border-b border-dashed border-default-200">
              <tr>
                <td class="px-6 py-3 w-10 font-medium text-default-900">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded focus:ring-0 text-primary bg-default-50 ring-transparent ring-offset-0">
                </td>
                <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Product</th>
                <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Type</th>
                <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Price</th>
                <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Quantity</th>
                <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Create By</th>
                <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Status</th>
                <th scope="col" class="px-3 py-3 text-center text-base capitalize font-semibold text-default-900 min-w-32">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-dashed divide-default-200">
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/1-2ca96552.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Banana</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Fruit</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$142</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">12</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                    Publish
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/2-423cfe2a.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Asparagus</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Nuts</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$12</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">14</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                    Pending
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/3-eb4bb056.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Grapes</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Fruit</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$105</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">15</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 text-red-600 font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                    Draft
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/4-84c13641.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Banana Chips</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Deep Fried</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$18</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">6</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                    Publish
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/5-6588f4cc.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">ProtinX</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Vitamin Powder</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$14</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">1</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                    Publish
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/6-fc45c68a.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Smocked Honey Spiced</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Nuts</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$18</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">2</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                    Pending
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/7-e9f364dd.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Avocado</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Fruit</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$90</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">12</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">
                    Pending
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/8-f4839df5.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Chicken Meat</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Meat</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$16</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">21</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                    Publish
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
              <tr>
                <td class="px-6 py-3">
                  <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                </td>
                <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                  <spam class="flex items-center gap-2">
                    <span class="h-10 w-10 inline-flex items-center justify-center rounded-full">
                      <img src="assets/9-c7fc9593.png" alt="" class="max-w-full h-full rounded-full">
                    </span>
                    <h6 class="text-sm font-semibold text-default-700">Watermelon</h6>
                  </spam>
                </td>
                <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">Fruit</td>
                <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$19</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">12</td>
                <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Admin</td>
                <td class="px-6 py-3 text-red-600 font-medium whitespace-nowrap">
                  <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                    Draft
                  </span>
                </td>
                <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
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
                </td>
              </tr>
            </tbody>
        {{-- </x-table.table> --}}
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