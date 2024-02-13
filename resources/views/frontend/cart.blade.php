@extends('frontend.layout.master')
@section('custom-css')
  <style>
    .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 19px;
    font-weight: 700;
    line-height:10px;
    padding: 0 2px;
    min-width: 35px;
    text-align: center;
    }
    .qty .plus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 25px;
        height: 25px;
        font: 19px;
        text-align: center;
        border-radius: 50%;
        }
    .qty .minus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 25px;
        height: 25px;
        font: 19px;
        text-align: center;
        border-radius: 50%;
        background-clip: padding-box;
    }
    /*Prevent text selection*/
    input{  
        border: 0;
        width: 2%;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    input:disabled{
        background-color:white;
    }
  </style>
@endsection
@section('website-content')
@include('frontend.components.banner',[
  'mainText' => 'cart',
])
  
      <!-- START: Cart Section -->
      <section class="cart-section mb-5 mt-5">
        <div class="container">
          <h1>Shopping</h1>
          <table class="table table-xs">
            <tr>
              <th></th>
              <th>Description</th>
              <th class="text-right">Amount</th>
              <th class="text-right">Price</th>
              <th class="text-right">Total</th>
            </tr>
            
          @foreach(range(1, 5) as $index)
              <tr class="item-row">
                  <td> <img src="http://placehold.it/50x50"/></td>
                  <td>
                      <p> <strong>Item {{ $index }}</strong></p>
                      <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
                  </td>
                  <td class="text-right" title="Amount">
                      <div class="qty">
                        <span class="minus bg-dark" onclick="decreaseQuantity({{ $index }})">-</span>
                        <input type="number" class="count" name="qty" id="quantity{{ $index }}" value="1">
                        <span class="plus bg-dark" onclick="increaseQuantity({{ $index }})">+</span>
                      </div>
                  </td>
                  <td class="text-right" title="Price">2.00</td>
                  <td class="text-right" title="Total">6.00</td>
              </tr>
          @endforeach
  
            <tr class="total-row info">
              <td class="text-right" colspan="4">Total</td>
              <td class="text-right">18.00</td>
            </tr>
          </table>
        </div>
        <div class="container">
          <a href="{{route('checkout')}}" class="btn_3 mt-3"><small>Proceed to Checkout</small></a>
        </div>
      </section>
      <!-- END: Cart Section -->
      @include('frontend.components.newsletter')
@endsection
@section('custom-js')
  <script>
    function decreaseQuantity(index) {
      var quantityInput = document.getElementById('quantity' + index);
      var currentQuantity = parseInt(quantityInput.value);
      if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
      }
    }

    function increaseQuantity(index) {
      var quantityInput = document.getElementById('quantity' + index);
      var currentQuantity = parseInt(quantityInput.value);
      quantityInput.value = currentQuantity + 1;
    }
  </script>
@endsection