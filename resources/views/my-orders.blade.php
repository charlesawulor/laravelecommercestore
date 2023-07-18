@extends('layouts.app1')

@section('content')
    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
            
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                   
                        <div class="tab-pane fade  show active" id="orders">
                            <h4>Your Order(s)</h4>

                            <div class="table_page table-responsive"> 
                         @foreach($orders as $order)
                        
                              <table>
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Status</th>
                                            <th>Quantity(s)</th>
                                             <th>Price</th>
										
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order->cart->items as $item)
                                        <tr>
                                <td>{{ $item['item'] ['product_name'] }}</td>  
                                <td><span class="success">Paid</span></td>   
											<td>{{$item ['qty']}} Unit(s)</td>
											 <td>${{$item ['price'] }}</td>           
                                        </tr>
                                    @endforeach
                                       </tbody>
									
									      <thead>
									     
                                         <tr>
                                        
                                            <th></th>
                                            <th></th>
                                            <th>Total Amount Paid</th>
                                            <th>${{ $order->cart->totalPrice}}</th>
                                        </tr>
                                       </thead>			
                                </table> <br><br>		
                     

                            @endforeach

                            </div>



                        </div>
                  
                       
                    </div>
                </div>
            </div>
        </div>
    </div>



    
@endsection
