{{-- <div class="rounded-lg border border-default-20">
       {{ $slot }}
  </div> --}}

  {{-- @props(['style' => null])

  @if($style === null)
    <div class="rounded-lg border border-default-200">
      <div class="p-5">
        {{ $slot }}
      </div>
    </div>
  @elseif ($style === 'relative')
    <div class="rounded-lg border border-default-200">
      <div class="p-5 relative">
        {{ $slot }}
      </div>
    </div>
  @endif --}}



  @props(['style'=> null])

  @php
      if (!$style) {
       $class = 'p-5 '.$style;
      }else {
        $class = 'p-5';
      }
  @endphp

<div class="rounded-lg border border-default-200">
    <div class="{{ $class }}">
      {{ $slot }}
    </div>
  </div>
