@extends('layouts.app1')

@section('content')


     

@if(Session::has('cart'))

<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
  <div class="container">
      <div class="row align-items-center justify-content-center">
          <div class="col-12 text-center">
              <h2 class="breadcrumb-title">Cart</h2>
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
                                  <td class="product-name"><a href="#">{{$product['item']['product_name']}}</a></td>
                                  <td class="product-price-cart"><span class="amount">${{$product['price']}}</span></td>
                                  <td class="product-price-cart"><span class="amount">{{$product['qty']}}</span></td>
                                 
                                  <td class="product-remove">
                                      <a href="{{ route('product.reduceByOne', ['id'=>$product['item']['id']])}}">Remove One</a>

                                      <a href="{{ route('product.remove', ['id'=>$product['item']['id']])}}">Remove All</a>
                                  </td>
                              </tr>
                           
                        

                             @endforeach

                             
                           <tr>  
                               <td>
                                   
                                   </td>

                                   <td>
                                 
                                   </td>
                                   <td>
                                  
                                   </td>
                                   <td>
                                   <h4 class="grand-totall-title"> <b>Grand Total : </b></h4>
                                  </td>

                              <td>
                              <h4 class="grand-totall-title"><b> <span>${{$totalPrice}}</span> </b> </h4>
                             </td>
                              

                           </tr>
                         
                          </tbody>
                      </table>
                  </div>
              


                  </div>
              </form>
          
              <div class="row">
                
                  <div class="col-lg-4">
                          <div class="cart-shiping-update-wrapper">
                              <div class="cart-shiping-update">
                                  <a href="{{route('shoppage')}}">Continue Shopping</a>
                              </div>
                            
                          </div>
                      </div>


                  <div class="col-lg-8 col-md-12 mt-md-30px">
                      <div class="grand-totall">
                         <!--  <div class="title-wrap">
                              <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                          </div> -->
                        <!--   <h5>Total products <span>${{$totalPrice}}</span></h5>-->
                        <!-- <h4 class="grand-totall-title">Grand Total <span>${{$totalPrice}}</span></h4>-->
                          <a href="{{ route('checkout')}}">Proceed to Checkout</a>
                      </div>
                  </div>

              </div>

          </div>
      </div>
  </div>
</div>

@else
 <div style="background-color:white" class="grand-totall">
   <h2 style="text-align:center"> No Item In Cart</h2>
   <br>
   <br>
      <a style="width:20%; margin: auto" href="{{route('shoppage')}}">SHOP NOW</a>  
   </div>
   

@endif





    
@endsection