@extends('layouts.app')
@section('title','Add Product')
@section('matter')
    <div class="page_matter">
        <!-- congrats -->
        <div class="page_matter__header">
            <div class="page_title">
                <h1 class="text-4xl font-normal">Edit {{ $product->name }}</h1>
            </div>
            <div class="page_action">
                <div class="page_action__exportButton"></div>
                <div class="page_action__createButton">
                    <a
                        href="{{ route('products.index')  }}"
                        class="primary__button">
                        <span>
                            <i class="fa fa-chevron-left"></i>
                            Go Back
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="page_matter__body">
            <div class="w-full mx-auto py-8">
                <div class="shadow-md">
{{--    Name Tab                   --}}
                    <div class="tab w-full relative overflow-hidden border mt-2">
                        <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
                        <label class="block p-5 leading-normal cursor-pointer bg-gray-100" for="tab-single-one">General</label>
                        <div class="tab-content overflow-hidden border-l-2 border-indigo-500 leading-normal">
                            <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                        </div>
                    </div>
{{--    Name Tab                   --}}
                    <div class="tab w-full relative overflow-hidden border mt-2">
                        <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
                        <label class="block p-5 leading-normal cursor-pointer bg-gray-100" for="tab-single-two">Label Two</label>
                        <div class="tab-content overflow-hidden border-l-2 border-indigo-500 leading-normal">
                            <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                        </div>
                    </div>
{{--    Name Tab                   --}}
                    <div class="tab w-full relative overflow-hidden border mt-2">
                        <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
                        <label class="block p-5 leading-normal cursor-pointer bg-gray-100" for="tab-single-three">Label Three</label>
                        <div class="tab-content overflow-hidden border-l-2 border-indigo-500 leading-normal">
                            <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end congrats -->
    </div>
@endsection
@push('js')
    <script>
        /* Optional Javascript to close the radio button version by clicking it again */
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                    setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
                }
            };
        }
    </script>
@endpush
