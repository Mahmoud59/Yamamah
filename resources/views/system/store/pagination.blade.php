<ul class="pagination">
    <!-- Previous Page Link -->
    @if ($paginator->onFirstPage())
        <li class="paginate_button page-item previous disabled"><a class="page-link">{{ __("Previous") }}</a></li>
    @else
        <li class="paginate_button page-item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-link">{{ __("Previous") }}</a></li>
    @endif

    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li class="paginate_button page-item disabled"><a class="page-link">{{ $element }}</a></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="paginate_button page-item active"><a class="page-link">{{ $page }}</a></li>
                @else
                    <li class="paginate_button page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    <!-- Next Page Link -->
    @if ($paginator->hasMorePages())
        <li class="paginate_button page-item"><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-link">{{ __("Next") }}</a></li>
    @else
        <li class="paginate_button page-item disabled"><a class="page-link">{{ __("Next") }}</a></li>
    @endif
</ul>