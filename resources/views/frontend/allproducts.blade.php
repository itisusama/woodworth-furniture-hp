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
                    
                  <div class="row mt-3 mb-3">
                    <div class="col-lg-12">
                        <div class="top-bar-container bg-light px-4 py-2">
                            <div>
                                <p><span>10000 </span> Products Found</p>
                            </div>
                            <div class="sort-by">
                                <h5>Sort: </h5>
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
                    @include('frontend.components.productcards')
                    {{-- Items --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END: Products -->
    @include('frontend.components.newsletter')
@endsection