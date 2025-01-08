<x-main-layout>

    <x-cards.grid-layout>
        <x-cards.panel>
            <x-cards.small-card title="order" quantity="14.8k" rate="50%" color="red" icon="ti-shopping-bag" />
        </x-cards.panel>
        <x-cards.panel>
            <x-cards.small-card title="Total product" quantity="14.8k" rate="50%" color="purple"
                icon="ti-shopping-bag" />
        </x-cards.panel>
        <x-cards.panel>
            <x-cards.small-card title="Total customer" quantity="14.8k" rate="50%" color="green"
                icon="ti-shopping-bag" />
        </x-cards.panel>
        <x-cards.panel>
            <x-cards.small-card title="Reviews" quantity="14.8k" rate="50%" color="blue" icon="ti-shopping-bag" />
        </x-cards.panel>
    </x-cards.grid-layout>



    <div class="grid xl:grid-cols-3 gap-6">

        <x-card class="p-5">
            <x-card.card-header title="Revenue" :dropdown="true" :options="['Today', 'Yesterday', 'Last 7 Days', 'Last 30 Days', 'This Month', 'Last Month']" />
            <x-card.card-body>
                <div class="bg-default-100 px-5 py-3 border-y border-dashed border-default-200">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center gap-2">
                                <i class="ti ti-chart-bar text-base text-primary"></i>
                                <p class="text-default-600 font-medium">Net Profit</p>
                            </div>
                            <h3 class="text-default-900 text-xl font-semibold mt-2">$41,512k</h3>
                        </div>
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center gap-2">
                                <i class="ti ti-playstation-circle text-base text-primary"></i>
                                <p class="text-default-600 font-medium">Net Profit</p>
                            </div>
                            <h3 class="text-default-900 text-xl font-semibold mt-2">$41,512k</h3>
                        </div>
                    </div>
                </div>
                <div class="px-5 pb-5">
                    <div id="revenue_report" class="apex-charts"></div>
                </div>
            </x-card.card-body>
        </x-card>


        <x-card.card>
            <x-card.card-header title="Total Sales" :dropdown="true" :options="['Action', 'Another Action', 'Something else here']" />

            <x-card.card-body>
                <div id="ana_device" class="apex-charts py-3.5"></div>
            </x-card.card-body>

            <x-table.table>
                <x-slot name="header">
                    <tr>
                        <x-table.table-cell
                            class="text-xs font-medium text-default-600 uppercase">Product</x-table.table-cell>
                        <x-table.table-cell
                            class="text-xs font-medium text-default-600 uppercase">Sales</x-table.table-cell>
                        <x-table.table-cell
                            class="text-xs font-medium text-default-600 uppercase">Change</x-table.table-cell>
                        <x-table.table-cell
                            class="text-xs font-medium text-default-600 uppercase">Profit</x-table.table-cell>
                    </tr>
                </x-slot>

                <x-slot name="body">
                    <x-table.table-row>
                        <x-table.table-cell class="text-sm font-medium text-default-900">Nuts &
                            Berries</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">1843</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">-3</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">-12</x-table.table-cell>
                    </x-table.table-row>

                    <x-table.table-row>
                        <x-table.table-cell class="text-sm font-medium text-default-900">Vegetables</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">2543</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">-5</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">-2</x-table.table-cell>
                    </x-table.table-row>

                    <x-table.table-row>
                        <x-table.table-cell class="text-sm font-medium text-default-900">Fruits</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">3654</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">-5</x-table.table-cell>
                        <x-table.table-cell class="text-sm text-default-500">-6</x-table.table-cell>
                    </x-table.table-row>
                </x-slot>
            </x-table.table>
        </x-card.card>
    </div>


    <x-cards.card-main-heading />
    <x-cards.grid-layout type="large">
        @for ($i = 0; $i < 6; $i++)
            <x-cards.panel style="relative">


                <x-cards.product-card productImage="1-2ca96552.png" heading="Banana" price="$14.99" discount="20.99"
                    rating="2.5">

                </x-cards.product-card>


            </x-cards.panel>
        @endfor
    </x-cards.grid-layout>



    <x-table.table-container>
        <x-table.table-header title="Recent Order" :options="['Today', 'Yesterday', 'Last 7 Days', 'Last 30 Days', 'This Month', 'Last Month']" />

        <x-table.table>
            <x-slot name="header">
                <tr>
                    <x-table.table-cell class="text-xs font-medium text-default-600 uppercase">Order
                        Number</x-table.table-cell>
                    <x-table.table-cell class="text-xs font-medium text-default-600 uppercase">Product
                        Name</x-table.table-cell>
                    <x-table.table-cell class="text-xs font-medium text-default-600 uppercase">Order
                        Date</x-table.table-cell>
                    <x-table.table-cell
                        class="text-xs font-medium text-default-600 uppercase">Price</x-table.table-cell>
                    <x-table.table-cell
                        class="text-center text-xs font-medium text-default-600 uppercase">Action</x-table.table-cell>
                </tr>
            </x-slot>

            <x-slot name="body">
                <x-table.table-row>
                    <x-table.table-cell class="text-sm font-medium text-default-800">#CT0023</x-table.table-cell>
                    <x-table.table-cell class="text-sm font-medium text-default-800">Nuts And
                        Berries</x-table.table-cell>
                    <x-table.table-cell class="text-sm text-default-800">28 Mar 2023</x-table.table-cell>
                    <x-table.table-cell class="text-sm text-default-800">$12.23</x-table.table-cell>
                    <x-table.table-cell class="text-center text-sm font-medium">
                        <x-table.status-badge color="bg-amber-500/20 text-amber-500">Pending</x-status-badge>
                    </x-table.table-cell>
                </x-table.table-row>
                <x-table.table-row>
                    <x-table.table-cell class="text-sm font-medium text-default-800">#CT0023</x-table.table-cell>
                    <x-table.table-cell class="text-sm font-medium text-default-800">Nuts And
                        Berries</x-table.table-cell>
                    <x-table.table-cell class="text-sm text-default-800">28 Mar 2023</x-table.table-cell>
                    <x-table.table-cell class="text-sm text-default-800">$12.23</x-table.table-cell>
                    <x-table.table-cell class="text-center text-sm font-medium">
                        <x-table.status-badge color="bg-primary/10 text-primary-500">success</x-status-badge>
                    </x-table.table-cell>
                </x-table.table-row>
                <x-table.table-row>
                    <x-table.table-cell class="text-sm font-medium text-default-800">#CT0023</x-table.table-cell>
                    <x-table.table-cell class="text-sm font-medium text-default-800">Nuts And
                        Berries</x-table.table-cell>
                    <x-table.table-cell class="text-sm text-default-800">28 Mar 2023</x-table.table-cell>
                    <x-table.table-cell class="text-sm text-default-800">$12.23</x-table.table-cell>
                    <x-table.table-cell class="text-center text-sm font-medium">
                        <x-table.status-badge color="bg-red-500/10 text-red-500">deleted</x-status-badge>
                    </x-table.table-cell>
                </x-table.table-row>
            </x-slot>
        </x-table.table>
    </x-table.table-container>

    
</x-main-layout>
