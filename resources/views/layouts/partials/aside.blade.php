@if( isset( $links ) )
<div class="aside-nav w-80 border-r-2 h-full pt-3">
    <ul>
        @foreach( $links as $key => $value )
            <li class="text-custom-black font-normal py-4 text-sm px-2  {{  (strpos( Request::path(), $value['uri'] ) !== false)  ? "bg-white border-1" : ""  }}">
                <a href="{{ $value['route']  }}" class="flex flex-row px-1">
                    <span>{{  $value['name'] }}</span>
                    @if( strpos( Request::path(), strtolower($value['uri']) ) !== false )
                        <span class="ml-auto">
                        <i class="fa fa-chevron-right"></i>
                    </span>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endif
