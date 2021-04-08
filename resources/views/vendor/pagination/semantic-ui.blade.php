@if ($paginator->hasPages())
    <div class="ui pagination menu my-6" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <a class="item icon mr-2 item disabled rounded border-2 text-sm border-gray-500 text-gray-500 py-2 px-4 font-semibold" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <i class="fa fa-chevron-left icon"></i>
        </a>
    @else
        <a class="item icon mr-2 item rounded border-2 text-sm border-gray-500 text-gray-500 py-2 px-4 font-semibold" href="javascript:void(0)" data-link="{{ $paginator->previousPageUrl() }}" onclick="paginate.callLinks(this)"  rel="prev" aria-label="@lang('pagination.previous')">
            <i class="fa fa-chevron-left icon"></i>
        </a>
    @endif
    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
    {{-- "Three Dots" Separator --}}
        @if (is_string($element))
         <a class="icon item disabled" aria-disabled="true">{{ $element }}</a>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="item mx-2 active bg-blue-600 text-white rounded text-sm border-2 border-blue-600 py-2 px-4 font-semibold" href="javascript:void(0)" data-link="{{ $url  }}" aria-current="page">{{ $page }}</a>
                @else
                    <a class="item mx-2 rounded border-2 text-sm border-gray-500 text-gray-500 py-2 px-4 font-semibold" href="javascript:void(0)" data-link="{{ $url  }}" onclick="paginate.callLinks(this)">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <a class="item icon ml-2 item rounded border-2 text-sm border-gray-500 text-gray-500 py-2 px-4 font-semibold" href="javascript:void(0)" data-link="{{ $paginator->nextPageUrl() }}" onclick="paginate.callLinks(this)" rel="next" aria-label="@lang('pagination.next')">
            <i class="fa fa-chevron-right icon"></i>
        </a>
    @else
        <a class="item icon ml-2 item disabled rounded border-2 text-sm border-gray-500 text-gray-500 py-2 px-4 font-semibold" aria-disabled="true" aria-label="@lang('pagination.next')">
            <i class="fa fa-chevron-right icon"></i>
        </a>
    @endif
</div>
@endif
@push('js')
    <script>
        const paginate = (function(){
            const log = (x) => {
                console.log(x)
            }
            return {
                callLinks:( elem ) => {
                    const link= elem.getAttribute('data-link')
                    axios.get(link)
                        .then(res => console.log(res.data))
                        .catch(err => console.log(err));

                }
            }
        })()
    </script>

@endpush

