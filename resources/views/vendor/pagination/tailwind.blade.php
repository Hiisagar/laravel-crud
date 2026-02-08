@if ($paginator->hasPages())
    <div class="flex items-center justify-between px-4 py-3 sm:px-6">

        <!-- Left: Showing info -->
        <div class="text-sm text-gray-500">
            Showing
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            to
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
            of
            <span class="font-medium">{{ $paginator->total() }}</span>
            results
        </div>

        <!-- Right: Pagination links -->
        <div>
            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">

                {{-- Previous --}}
                @if ($paginator->onFirstPage())
                    <span class="px-3 py-2 rounded-l-md border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                        ‹
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="px-3 py-2 rounded-l-md border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                        ‹
                    </a>
                @endif

                {{-- Pages --}}
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span class="px-3 py-2 border border-gray-300 text-gray-400">
                            {{ $element }}
                        </span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="px-3 py-2 border border-blue-500 bg-blue-600 text-white">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}"
                                   class="px-3 py-2 border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}"
                       class="px-3 py-2 rounded-r-md border border-gray-300 bg-white text-gray-600 hover:bg-gray-50">
                        ›
                    </a>
                @else
                    <span class="px-3 py-2 rounded-r-md border border-gray-300 bg-gray-100 text-gray-400 cursor-not-allowed">
                        ›
                    </span>
                @endif

            </nav>
        </div>
    </div>
@endif
