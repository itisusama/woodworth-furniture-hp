@extends('frontend.layout.master')
@section('website-content')
@section('custom-css')
<link rel="stylesheet" href="{{asset('frontend/assets/css/price_rangs.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
@endsection
@include('frontend.components.banner', [
    'mainText' => 'category'
])
    <!-- START: Products -->
    <section class="cat_product_area">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-3 px-4">
                    <div class="left_sidebar_area bg-light">
                        <aside class="category-box left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Browse Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="btn-group dropend">
                                        <button style="color: black;" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                          <small>Category Name</small>
                                        </button>
                                        <ul class="dropdown-menu p-2" style="background-color: white;">
                                          <li><a href="#">Sub Category 1</a></li>
                                          <li><a href="#">Sub Category 2</a></li>
                                          <li><a href="#">Sub Category 3</a></li>
                                          <hr>
                                          <li><a href="allproducts.html">See All</a></li>
                                        </ul>
                                      </div>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Color Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                        <!-- PRICE RANGE -->
                        <section class="mb-5 left_widgets p_filter_widgets p-2">
                            <div>
                                <h3>Price Filter</h3>
                            </div>
                            <div>
                                <input type="text" class="js-range-slider my_range" name="my_range" value="" />
                            </div>
                        </section>
                        <!-- PRICE RANGE -->
                    </div>
                </div>
                <div class="col-lg-9">
                    
                    <div class="row">
                        <div class="col-lg-12 mb-2">
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
                    @include('frontend.components.productcards', ["columnSize" => "col-lg-4"])
                    {{-- Items --}}
                </div>
            </div>
        </div>
    </section>
    <!-- END: Products -->

    <!-- START:: Best Seller Product Slider -->
    <section class="product_list best_seller">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-12">
                  <div class="section_tittle text-center">
                      <h2>New Arrivals</h2>
                  </div>
              </div>
          </div>
          <div class="row align-items-center justify-content-between">
            {{-- Best Seller --}}
            @include('frontend.components.bestseller')
            {{-- Best Seller --}}
        </div>
      </div>
  </section>
  <!-- END:: Best Seller Product Slider -->
  @include('frontend.components.newsletter')
@endsection
@section('custom-js')
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/price_rangs.js')}}"></script>
@endsection