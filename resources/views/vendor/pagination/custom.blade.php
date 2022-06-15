@if ($paginator->hasPages())
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <div class="col-6 start">
                    <span class="page-link">
                        <div class="circle">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                    </span>
                </div>
            @else
                <div class="col-6 start">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <div class="circle">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <div class="col-6 end">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <div class="circle">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            @else
                <div class="col-6 end">
                <span class="page-link">
                        <div class="circle">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </span>
                </div>
            @endif
@endif
