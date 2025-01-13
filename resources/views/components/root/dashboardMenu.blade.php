<div class="flex w-full items-center justify-between print:hidden">
  <h4 class="text-lg font-semibold text-default-900">{{ $title }}</h4>

  <ol aria-label="Breadcrumb" class="hidden min-w-0 items-center gap-2 whitespace-nowrap md:flex">
      @foreach ($links as $index => $link)
          <li class="text-sm">
              @if ($index < count($links) - 1)
                  <a class="flex items-center gap-2 align-middle font-medium text-default-800 transition-all hover:text-primary" href="javascript:void(0)">
                      {{ $link }}
                      <i class="h-4 w-4" data-lucide="chevron-right"></i>
                  </a>
              @else
                  <span aria-current="page" class="truncate text-sm font-medium text-primary-600 hover:text-primary">
                      {{ $link }}
                  </span>
              @endif
          </li>
      @endforeach
  </ol>
</div>