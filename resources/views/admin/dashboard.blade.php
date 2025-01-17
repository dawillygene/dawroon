<x-main-layout>
    <x-root.dashboardMenu title="Dashboard" :links="['Eazylinky', 'Admin', 'Dashboard']" />

    <x-cards.grid-layout>
        <x-cards.panel>
            <x-cards.small-card title="Order" quantity="{{ number_format($statistics['totalOrders']) }}" rate="50%"
                color="blue" icon="ti-shopping-bag" />
        </x-cards.panel>
        <x-cards.panel>
            <x-cards.small-card title="Total product" quantity="{{ number_format($statistics['totalProducts']) }}"
                rate="50%" color="green" icon="ti-cheese" />
        </x-cards.panel>
        <x-cards.panel>
            <x-cards.small-card title="Total customer" quantity="{{ number_format($statistics['totalUsers']) }}"
                rate="50%" color="yellow" icon="ti-users" />
        </x-cards.panel>
        <x-cards.panel>
            <x-cards.small-card title="Reviews" quantity="{{ number_format($statistics['totalRevenue']) }}"
                rate="50%" color="purple" icon="ti-star" />
        </x-cards.panel>
    </x-cards.grid-layout>


    <div class="grid xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2">
            <x-card>
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                    <h5 class="grow text-lg font-medium text-default-900">Revenue</h5>
                    <div class="relative">
                        <select id="all-select-categories"
                            data-hs-select='{
                                    "toggleTag": "<button type=\"button\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                                    "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                                    "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                    }'
                            class="hidden">
                            <option>Today</option>
                            <option>Yesterday</option>
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>This Month</option>
                            <option>Last Month</option>
                        </select>

                        <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                            <i class="ti ti-chevron-down shrink text-base/none"></i>
                        </div>
                    </div>
                </div>

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
            </x-card>
        </div>

        <x-card.card>
            <x-card.card-header title="Total Sales" :dropdown="true" :options="['Action', 'Another Action', 'Something else here']" />

            <x-card.card-body>
                <div id="ana_device" class="apex-charts py-3.5"></div>
            </x-card.card-body>


            <div class="border-t border-dashed border-default-200">
                <div class="ovrflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <x-table.table>
                                <x-slot name="header">
                                    <tr>
                                        <x-table.table-cell type="header">Product</x-table.table-cell>
                                        <x-table.table-cell type="header">Sales</x-table.table-cell>
                                        <x-table.table-cell type="header">Change</x-table.table-cell>
                                        <x-table.table-cell type="header">Profit</x-table.table-cell>
                                    </tr>
                                </x-slot>

                                <x-slot name="body">
                                    <x-table.table-row>
                                        <x-table.table-cell type="body">Nuts &
                                            Berries</x-table.table-cell>
                                        <x-table.table-cell type="small">1843</x-table.table-cell>
                                        <x-table.table-cell type="small">-3</x-table.table-cell>
                                        <x-table.table-cell type="small">-12</x-table.table-cell>
                                    </x-table.table-row>

                                    <x-table.table-row>
                                        <x-table.table-cell type="body">Vegetables</x-table.table-cell>
                                        <x-table.table-cell type="small">2543</x-table.table-cell>
                                        <x-table.table-cell type="small">-5</x-table.table-cell>
                                        <x-table.table-cell type="small">-2</x-table.table-cell>
                                    </x-table.table-row>

                                    <x-table.table-row>
                                        <x-table.table-cell type="body">Fruits</x-table.table-cell>
                                        <x-table.table-cell type="small">3654</x-table.table-cell>
                                        <x-table.table-cell type="small">-5</x-table.table-cell>
                                        <x-table.table-cell type="small">-6</x-table.table-cell>
                                    </x-table.table-row>
                                </x-slot>

                            </x-table.table>
                        </div>
                    </div>
                </div>
            </div>
        </x-card.card>
    </div>









    <x-cards.card-main-heading />
    <x-cards.grid-layout type="large">
        @foreach ($topSellingProducts as $topSellingProduct)
            <x-cards.panel style="relative">


                <x-cards.product-card productImage="1-2ca96552.png" heading="{{ $topSellingProduct['name'] }}"
                    price="{{ $topSellingProduct['discount_price'] }}" discount="{{ $topSellingProduct['price'] }}"
                    rating="{{ $topSellingProduct['average_rating'] }}">

                </x-cards.product-card>


            </x-cards.panel>
        @endforeach
    </x-cards.grid-layout>



    <x-table.table-container>
        <x-table.table-header title="Recent Order" :options="['Today', 'Yesterday', 'Last 7 Days', 'Last 30 Days', 'This Month', 'Last Month']" />
        <div class="border-t border-dashed border-default-200">
            <div class="ovrflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <x-table.table>
                            <x-slot name="header">
                                <tr>
                                    <x-table.table-cell type="header">Order Number</x-table.table-cell>
                                    <x-table.table-cell type="header">Product Name</x-table.table-cell>
                                    <x-table.table-cell type="header">Order Date</x-table.table-cell>
                                    <x-table.table-cell type="header">Price</x-table.table-cell>
                                    <x-table.table-cell type="header" class="text-center">Action</x-table.table-cell>
                                </tr>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($recentOrders as $order )

                                <x-table.table-row>
                                    <x-table.table-cell>{{ $order->order_id }}</x-table.table-cell>
                                    <x-table.table-cell> User: {{ $order->id }}</x-table.table-cell>
                                    <x-table.table-cell>{{ \Carbon\Carbon::parse($order->order_date)->format('Y-m-d') }}</x-table.table-cell>
                                    <x-table.table-cell>{{ $order->total_price }}</x-table.table-cell>
                                    <x-table.table-cell class="text-center">
                                        <x-table.status-badge color="pending">{{ $order->status }}</x-status-badge>
                                    </x-table.table-cell>
                                </x-table.table-row>    

                                @endforeach
                                
                                <x-table.table-row>
                                    <x-table.table-cell>#CT0023</x-table.table-cell>
                                    <x-table.table-cell>Nuts And Berries</x-table.table-cell>
                                    <x-table.table-cell>28 Mar 2023</x-table.table-cell>
                                    <x-table.table-cell>$12.23</x-table.table-cell>
                                    <x-table.table-cell class="text-center">
                                        <x-table.status-badge color="success">success</x-status-badge>
                                    </x-table.table-cell>
                                </x-table.table-row>
                                <x-table.table-row>
                                    <x-table.table-cell>#CT0023</x-table.table-cell>
                                    <x-table.table-cell>Nuts And Berries</x-table.table-cell>
                                    <x-table.table-cell>28 Mar 2023</x-table.table-cell>
                                    <x-table.table-cell>$12.23</x-table.table-cell>
                                    <x-table.table-cell class="text-center">
                                        <x-table.status-badge color="error">deleted</x-status-badge>
                                    </x-table.table-cell>
                                </x-table.table-row>
                                
                            </x-slot>
                        </x-table.table>
                    </div>
                </div>
            </div>
        </div>
    </x-table.table-container>
</x-main-layout>
