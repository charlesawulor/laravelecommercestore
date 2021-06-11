











@extends('layouts.app1')

@section('content')


<div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Checkout</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->


    <!-- checkout area start -->
    <div class="checkout-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">

                        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}" > {{ Session::get('error')}} </div>
                        
      <form action="{{route('checkout')}}" method="post" id="checkout-form">
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Full Name</label>
                                    <input type="text" id="name" name="name" />
                                </div>
                            </div>
                            
                           
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label> Address</label>
                                    <input class="billing-address" placeholder="House number and street name"
                                        type="text" id="address" name="address" />
                                    
                                </div>
                            </div>
                           
                  

                        
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Card Holder Name</label>
                                    <input type="text" id="card-name" />
                                </div>
                            </div>
                           <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Credit Card Number</label>
                                    <input type="text" id="card-number" />
                                </div>
                            </div>
                           <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Expiration Month</label>
                                    <input type="text"  id="card-expiry-month" />
                                </div>
                            </div>
                           <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Expiration Year</label>
                                    <input type="text"  id="card-expiry-Year" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-4">
                                    <label>Card CVC</label>
                                    <input type="text"  id="card-cvc" />
                                </div>
                            </div>
                          {{csrf_field()}}
                             
                             <button type="submit" class="btn btn-success" > Buy Now</button>

                        </form>

                        </div>

                    </div>
                </div>



                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                    @foreach($products as $product)
                                        <li><span class="order-middle-left"> {{$product['item']['product_name']}} </span> <span
                                                class="order-price">${{$product['price']}}</span></li>
                                    @endforeach  
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>${{$totalPrice}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                        href="#my-account-1" class="collapsed"
                                                        aria-expanded="true">Direct bank transfer</a>
                                                </h4>
                                            </div>
                                            <div id="my-account-1" class="panel-collapse collapse show"
                                                data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                        href="#my-account-2" aria-expanded="false"
                                                        class="collapsed">Check payments</a></h4>
                                            </div>
                                            <div id="my-account-2" class="panel-collapse collapse"
                                                data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                        href="#my-account-3">Cash on delivery</a></h4>
                                            </div>
                                            <div id="my-account-3" class="panel-collapse collapse"
                                                data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <a class="btn-hover" href="#">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('src/js/checkout.js')}}"></script>

@endsection