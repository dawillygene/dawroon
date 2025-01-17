@props([
  'buttonClass' => 'fixed end-0 top-1/4 z-50', // Default button classes
  'iconContainerClass' => 'relative inline-flex h-10 w-10 items-center justify-center gap-2 overflow-hidden rounded-s-xl bg-primary align-middle font-medium text-white transition-all hover:bg-primary-600', // Default icon container classes
  'sunIconClass' => 'ti ti-sun text-xl after:absolute after:inset-0', // Default sun icon classes
  'moonIconClass' => 'ti ti-moon text-xl after:absolute after:inset-0', // Default moon icon classes
])

<button class="{{ $buttonClass }}">
  <span class="{{ $iconContainerClass }}">
    <i class="{{ $sunIconClass }}" id="dark-theme"></i>
    <i class="{{ $moonIconClass }}" id="light-theme"></i>
  </span>
</button>