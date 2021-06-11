
@extends('layouts.app1')

@section('content')
    <div class="blog-grid pb-100px pt-100px main-blog-page single-blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xl-4 mb-50px">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/1.jpg"
                                    class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date height-shape" href="#"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> 24 Aug, 2021</a>
                                <a class="blog-mosion" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 1.5
                                    K</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link"
                                    href="blog-single-left-sidebar.html">There are many variations of
                                    passages of Lorem</a></h5>

                            <p>Lorem ipsum dolor, sit amet cons adipisicing elit. Cumque, quam aperiam alias modi sed
                                totam possimus illo.</p>

                            <a href="blog-single-left-sidebar.html" class="btn btn-primary blog-btn"> Read More<i class="fa fa-arrow-right ml-5px"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->


                <!-- End single blog -->
            </div>

            <!--  Pagination Area Start -->
                <div class="pro-pagination-style text-center" data-aos="fade-up" data-aos-delay="200">
               
            </div>
            <!--  Pagination Area End -->
        </div>
    </div>

    
        
@endsection