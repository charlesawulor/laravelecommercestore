@extends('layouts.app1')

@section('content')


     

@if(Session::has('cart'))

<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
  <div class="container">
      <div class="row align-items-center justify-content-center">
          <div class="col-12 text-center">
              <h2 class="breadcrumb-title">Shop</h2>
              <!-- breadcrumb-list start -->
              <ul class="breadcrumb-list">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Cart</li>
              </ul>
              <!-- breadcrumb-list end -->
          </div>
      </div>
  </div>
</div>

<!-- breadcrumb-area end -->

<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
  <div class="container">
      <h3 class="cart-page-title">Your cart items</h3>
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <form action="#">
                  <div class="table-content table-responsive cart-table-content">
                      <table>
                          <thead>
                              <tr>
                                  <th>Image</th>
                                  <th>Product Name</th>
                                  <th>Until Price</th>
                                  <th>Qty</th>
                               
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach($products as $product)
                              <tr>
                                  <td class="product-thumbnail">
                                      <a href="#"><img class="img-responsive ml-15px"
                                              src="/laravelecommercestore/storage/app/public/{{$product['item']['image']}}" alt="" /></a>
                                  </td>
                                  <td class="product-name"><a href="#">{{$product['item']['title']}}</a></td>
                                  <td class="product-price-cart"><span class="amount">${{$product['price']}}</span></td>
                                  <td class="product-price-cart"><span class="amount">{{$product['qty']}}</span></td>
                                 
                                  <td class="product-remove">
                                      <a href="#"><i class="fa fa-pencil"></i></a>
                                      <a href="#"><i class="fa fa-times"></i></a>
                                  </td>
                              </tr>
                             @endforeach
                         
                          </tbody>
                      </table>
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="cart-shiping-update-wrapper">
                              <div class="cart-shiping-update">
                                  <a href="#">Continue Shopping</a>
                              </div>
                              <div class="cart-clear">
                                  <button>Update Shopping Cart</button>
                                  <a href="#">Clear Shopping Cart</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
              <div class="row">
                  <div class="col-lg-4 col-md-6 mb-lm-30px">
                      <div class="cart-tax">
                          <div class="title-wrap">
                              <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                          </div>
                          <div class="tax-wrapper">
                              <p>Enter your destination to get a shipping estimate.</p>
                              <div class="tax-select-wrapper">
                                  <div class="tax-select">
                                      <label>
                                          * Country
                                      </label>
                                      <select class="email s-email s-wid">
                                          <option>Bangladesh</option>
                                          <option>Albania</option>
                                          <option>Åland Islands</option>
                                          <option>Afghanistan</option>
                                          <option>Belgium</option>
                                      </select>
                                  </div>
                                  <div class="tax-select">
                                      <label>
                                          * Region / State
                                      </label>
                                      <select class="email s-email s-wid">
                                          <option>Bangladesh</option>
                                          <option>Albania</option>
                                          <option>Åland Islands</option>
                                          <option>Afghanistan</option>
                                          <option>Belgium</option>
                                      </select>
                                  </div>
                                  <div class="tax-select mb-25px">
                                      <label>
                                          * Zip/Postal Code
                                      </label>
                                      <input type="text" />
                                  </div>
                                  <button class="cart-btn-2" type="submit">Get A Quote</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-lm-30px">
                      <div class="discount-code-wrapper">
                          <div class="title-wrap">
                              <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                          </div>
                          <div class="discount-code">
                              <p>Enter your coupon code if you have one.</p>
                              <form>
                                  <input type="text" required="" name="name" />
                                  <button class="cart-btn-2" type="submit">Apply Coupon</button>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12 mt-md-30px">
                      <div class="grand-totall">
                          <div class="title-wrap">
                              <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                          </div>
                          <h5>Total products <span>${{$totalPrice}}</span></h5>
                         
                          <h4 class="grand-totall-title">Grand Total <span>${{$totalPrice}}</span></h4>
                          <a href="checkout.html">Proceed to Checkout</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@else
   <h2> No Item In Cart</h2>

@endif





    
@endsection