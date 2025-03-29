@if ($paginator->hasPages())
    <div class="product-pagination">
        <div class="theme-paggination-block">
            <nav>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() ?? '#!' }}" aria-label="Previous">
                            <span>
                                <i class="ri-arrow-left-s-line"></i>
                            </span>
                            <span class="sr-only">{{ __('general.Previous') }}</span>
                        </a>
                    </li>

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    <li class="page-item {{ $paginator->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() ?? '#!' }}" aria-label="Next">
                            <span>
                                <i class="ri-arrow-right-s-line"></i>
                            </span>
                            <span class="sr-only">{{ __('general.Next') }}</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endif
