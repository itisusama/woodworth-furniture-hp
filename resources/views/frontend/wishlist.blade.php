@extends('frontend.layout.master')
@section('website-content')
@include('frontend.components.banner',[
    'mainText' => 'Wish List',
])
  
  <!-- START:: Wish list -->
  <section class="container-fluid mt-3 mb-3">
    
    <div class="row px-3">
      <div class="col-md-6 border wishlist_products d-flex align-items-center py-3">
          
          <div class="cross mr-3">
            <a href="#"><i class="fa-solid fa-xmark"></i></a>
          </div>
          
          <div class="wish_product mr-3">
            <img src="{{asset('frontend/assets/images/product/product_1.png')}}" width="120px" height="120px" alt="wish_product">
          </div>
          
          <div class="wish_description">
            <h5>Product Name</h5>
            <h5>£200</h5>
            <p>December 5, 2023</p>
          </div>

      </div>
      <div class="col-md-6 border wish_btn pt-3">
          <p>In Stock</p>
          <button type="submit" value="submit" class="btn_3 mb-3">Buy Product</button>
      </div>
  </div>

</section>    
@endsection