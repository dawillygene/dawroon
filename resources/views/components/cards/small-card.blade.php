@props(['title', 'quantity', 'rate'])

<div class="p-5 bg-white dark:bg-default-50 overflow-hidden">
  <div class="flex gap-4">
    <div class="grow">
      <h6 class="text-base font-medium text-default-600">{{ $title }}</h6>
      <h4 class="my-3 text-2xl font-semibold text-default-900">{{ $quantity }}</h4>
      <p class="text-sm font-medium text-primary">
        <i class="ti ti-trending-up text-base align-middle"></i> {{ $rate }}
      </p>
    </div>

    <div class="shrink h-14 w-14 inline-flex items-center justify-center bg-blue-500/20 text-blue-500 rounded-md">
      <i class="ti ti-shopping-bag text-3xl"></i>
    </div>
  </div>

</div>