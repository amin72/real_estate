@if ($paginator->hasPages())
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="mb-20 flex items-center justify-between">
    <div class="flex justify-between flex-1 sm:hidden px-4">
      @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-5 py-2 ml-3 font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
          بعدی
        </a>
      @else
        <span class="relative inline-flex items-center px-5 py-2 ml-3 font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
          بعدی
        </span>
      @endif

      @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-5 py-2 mr-3 font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
          قبلی
        </span>
      @else
        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-5 py-2 mr-3 font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
          قبلی
        </a>
      @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between mx-auto">
      <div class="mx-auto">
        <span class="relative z-0 inline-flex">
          {{-- Next Page Link --}}
          @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="font-bold px-5 py-3 text-white-400 cursor-pointer leading-5 relative inline-flex items-center bg-white rounded-l-md focus:z-10 focus:outline-none" aria-label="{{ __('pagination.next') }}">
              بعدی
            </a>
          @else
            <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
              <span class="font-bold px-5 py-3 text-primary leading-5 relative inline-flex items-center bg-white rounded-l-md focus:z-10 focus:outline-none cursor-default" aria-hidden="true">
                بعدی
              </span>
            </span>
          @endif
        
          {{-- Pagination Elements --}}
          @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
              <span aria-disabled="true">
                <span class="font-bold px-5 py-3 text-primary relative inline-flex items-center cursor-default leading-5">{{ $element }}</span>
              </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
              @foreach (array_reverse($element, true) as $page => $url)
                @if ($page == $paginator->currentPage())
                  <span aria-current="page">
                    <span class="text-white bg-primary rounded-full font-bold px-5 py-3 relative inline-flex items-center cursor-default leading-5">{{ $page }}</span>
                  </span>
                @else
                  <a href="{{ $url }}" class="font-bold px-5 py-3 text-primary cursor-pointer leading-5 relative inline-flex items-center bg-white focus:z-10 focus:outline-none" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                  </a>
                @endif
              @endforeach
            @endif
          @endforeach

          {{-- Previous Page Link --}}
          @if ($paginator->onFirstPage())
            <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
              <span class="font-bold px-5 py-3 text-primary leading-5 relative inline-flex items-center bg-white rounded-l-md focus:z-10 focus:outline-none cursor-default" aria-hidden="true">
                قبلی
              </span>
            </span>
          @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="font-bold px-5 py-3 text-primary cursor-pointer leading-5 relative inline-flex items-center bg-white قounded-l-md focus:z-10 focus:outline-none" aria-label="{{ __('pagination.previous') }}">
              قبلی
            </a>
          @endif
          
        </span>
      </div>
    </div>
  </nav>
@endif
