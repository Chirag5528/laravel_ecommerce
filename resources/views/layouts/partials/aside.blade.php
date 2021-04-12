@if( isset( $links ) )
<div class="aside_nav">
    <ul>
        @foreach( $links as $key => $value )
            <li class="aside_nav__items  {{  (strpos( Request::path(), $value['uri'] ) !== false)  ? "active" : ""  }}">
                <a href="{{ $value['route']  }}" class="aside_nav__items__links">
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
