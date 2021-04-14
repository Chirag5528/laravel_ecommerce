@extends('layouts.app')
@section('title','Products')
@section('matter')
    <div class="page_matter">
        <!-- congrats -->
        <div class="page_matter__header">
            <div class="page_title">
                <h1 class="heading">Products</h1>
            </div>
            <div class="page_action">
                <div class="page_action__exportButton"></div>
                <div class="page_action__createButton">
                    <a href="{{ route('products.create')  }}" class="primary__button">Add Product</a>
                </div>
            </div>
        </div>
        <!-- end congrats -->
        {{--        table --}}
            <div class="page_matter__body">
                @include('products.partials.table')
            </div>
        {{--      end table  --}}
    </div>
@endsection
