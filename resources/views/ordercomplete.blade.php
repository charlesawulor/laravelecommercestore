

@extends('layouts.app1')

@section('content')
<div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="blog-posts">
                        <div class="single-blog-post blog-grid-post">
                            <div class="blog-image single-blog" data-aos="fade-up" data-aos-delay="200">
                                <img class="img-fluid h-auto" src="assets/images/blog-image/successfulshopping.jpg" alt="blog" />
                            </div>
                            <div class="blog-post-content-inner mt-30px" data-aos="fade-up" data-aos-delay="400">
                               <div class="blog-athor-date">
                                    
                                </div>
                                <h4 >Thank you for shopping with us. Your payment was successful.</h4>
								
                               
                            </div>
                            
                                
                 
                      <div style="background-color:white" class="grand-totall">
                          <a href="{{route('shoppage')}}">Continue Shopping</a>
                      </div>
                  
                     
                     
                        </div>
                        <!-- single blog post -->
                    </div>
			
                </div>
            </div>
        </div>
    
        
        
    </div>

@endsection