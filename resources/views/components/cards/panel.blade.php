  @props(['style'=> null])

  @php
      if (!$style) {
       $class = 'p-5 '.$style;
      }else {
        $class = 'p-5';
      }
  @endphp

<div  {{ $attributes->merge(["class"=>"rounded-lg border border-default-200"]) }}>
    <div class="{{ $class }}">
      {{ $slot }}
    </div>
  </div>
