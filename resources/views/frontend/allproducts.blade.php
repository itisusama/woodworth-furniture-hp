@extends('frontend.layout.master')
@section('website-content')
@section('custom-css')
<link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
@endsection
@include('frontend.components.banner',[
    'mainText' => 'all products'
])
     <!-- START: Products -->
     <section class="cat_product_area">
        <div class="container mobile_margin">
            <div class="row">
                <div class="col-lg-12">
                    
                  <div class="row mb-3">
                    <div class="col-lg-12">
                        <div class="top-bar-container bg-light px-4 py-2">
                            <div>
                                <p><span>10000 </span> Products Found</p>
                            </div>
                            <div class="sort-by">
                                <h5 class="mt-2">Sort: </h5>
                                <select class="wide">
                                    <option data-display="Select">name</option>
                                    <option class="list" value="1">price</option>
                                    <option class="list" value="2">product</option>
                                </select>
                            </div>
    
                            <div class="single_product_menu d-flex">
                                <div class="input-group">
                                    <input style="color: black;" type="text" class="form-control" placeholder="search" aria-describedby="inputGroupPrepend">
                                    <div class="input-group-prepend product-search-button">
                                        <span class="input-group-text product-search-button" id="inputGroupPrepend"><i class="fa-solid fa-magnifying-glass"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    {{-- Items --}}
                    <div class="row align-items-center">
                        @for ($i = 1; $i <= 8; $i++)
                        @include('frontend.components.productcards', [
                            "columnSize" => "col-lg-3",
                            "productImage" => "frontend/assets/images/product/product_" . $i . ".png"
                        ])
                        @endfor
                    @include('frontend.components.pagination')
                    </div>
                    {{-- Items --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END: Products -->
    @include('frontend.components.newsletter')
@endsection
@section('custom-js')
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
@endsection