@extends('frontend.layout.master')
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
            
            <tr class="item-row">
              <td> <img src="http://placehold.it/50x50"/></td>
              <td>
                <p> <strong>Item 1</strong></p>
                <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
              </td>
              <td class="text-right" title="Amount">3</td>
              <td class="text-right" title="Price">2.00</td>
              <td class="text-right" title="Total">6.00</td>
            </tr>
  
            <tr class="item-row">
              <td> <img src="http://placehold.it/50x50"/></td>
              <td>
                <p> <strong>Item 1</strong></p>
                <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
              </td>
              <td class="text-right" title="Amount">3</td>
              <td class="text-right" title="Price">2.00</td>
              <td class="text-right" title="Total">6.00</td>
            </tr>
  
            <tr class="item-row item-row-last">
              <td> <img src="http://placehold.it/50x50"/></td>
              <td>
                <p> <strong>Item 2</strong></p>
                <p>Amet et esse do nostrud id irure cupidatat labore nulla irure laboris</p>
              </td>
              <td class="text-right" title="Amount">3</td>
              <td class="text-right" title="Price">4.00</td>
              <td class="text-right" title="Total">12.00</td>
            </tr>
            <tr class="total-row info">
              <td class="text-right" colspan="4">Total</td>
              <td class="text-right">18.00</td>
            </tr>
          </table>
        </div>
      </section>
      <!-- END: Cart Section -->
      @include('frontend.components.newsletter')
@endsection