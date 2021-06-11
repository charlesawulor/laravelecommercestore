











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
                             
                             <button style="width:100%; height:50px; border-radius:1px solid #fb5d5d; background-color:#fb5d5d; color:white; font-weight: 700" type="submit" > PAY ${{$totalPrice}}</button>

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
                            
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>${{$totalPrice}}</li>
                                    </ul>
                                </div>
                            </div>
                       
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