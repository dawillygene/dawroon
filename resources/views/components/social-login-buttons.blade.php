@props([
  'icons' => [
    'facebook' => 'ti ti-brand-facebook',
    'x' => 'ti ti-brand-x',
    'instagram' => 'ti ti-brand-instagram',
    'github' => 'ti ti-brand-github',
  ],
  'buttonClass' => 'h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary',
  'iconClass' => 'text-xl',
])


<div class="flex items-center justify-center gap-2">
  @foreach ($icons as $platform => $icon)
    <a href="javascript:void(0);" target="_blank" class="{{ $buttonClass }}">
      <i class="{{ $icon }} {{ $iconClass }}"></i>
    </a>
  @endforeach
</div>