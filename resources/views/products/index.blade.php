@extends('layouts.app')
@section('title','Products')
@section('matter')
    <div class="bg-white w-full p-6">
        <!-- congrats -->
        <div class="grid grid-cols-3 flex-row mt-10">
            <div class="pageTitle col-span-2">
                <h1 class="text-4xl font-normal">Products</h1>
            </div>
            <div class="col-span-1 grid grid-cols-2 items-baseline">
                <div class="exportButton col-span-1"></div>
                <div class="createButton col-span-1">
                    <a href="{{ route('products.create')  }}" class="primary__button">Add Product</a>
                </div>
            </div>
        </div>
        <!-- end congrats -->
        {{--        table --}}
            @include('products.partials.table')
        {{--      end table  --}}
    </div>
@endsection
