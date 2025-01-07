<div class="flex items-center justify-between py-4 px-5">
    <h4 class="text-lg font-medium text-default-950 capitalize">{{ $title }}</h4>

    @if (!empty($options))
        <div class="relative">
            <select id="all-select-categories" data-hs-select='{
                "toggleTag": "<button type=\"button\"></button>",
                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
            }' class="hidden">
                @foreach ($options as $option)
                    <option>{{ $option }}</option>
                @endforeach
            </select>

            <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                <i class="ti ti-chevron-down shrink text-base/none"></i>
            </div>
        </div>
    @endif
</div>