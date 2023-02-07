<!--- include header --->
@include('frontend.layouts.header')

        <!--Start Search Directory Section-->
        <section class="directory-search-form-slider business">
            <!--Start Slider Carousel-->
            <div id="directory-slider-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">


                    <!--Start Slide Item-->
                    <div class="item active" style="background: url('frontend/assets/img/slider/1.jpg');">
                        <div class="directory-slider-overlay"></div>
                        <div class="slider-content">
                        </div>
                        <div class="item" style="background: url('frontend/assets/img/slider/2.jpg');">
                            <div class="directory-slider-overlay"></div>
                        </div>

                        <div class="item" style="background: url('frontend/assets/img/slider/3.jpg');">
                            <div class="directory-slider-overlay"></div>
                        </div>
                    </div>
                    <!--End Slide Item-->


                </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				    </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                 </div>
            <!--End Slider Carousel-->

            <!--Start Search Filter-->
            <div class="container" >
            <div class="row">
                <form  role="search" name="form" action="{{ route('search_donor') }}" method="GET">
                    <div class="col-lg-12">
                        <div class="search-filter" >
                            <div class="col-lg-4" >
                                <select id="blood_group" name="blood_group" class="form-control keyword" style="width:100%; "
                                required="";>
                                    <option value="">Select Blood Group</option>
                                     @foreach ($bloodgroup as $bloodgroups)
                                    <option value="{{ $bloodgroups->bg_name }}">{{ $bloodgroups->bg_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--End Blood Group Options-->

                            <!--Start Search Location Options-->
                            <div class="col-lg-4">
                            <select id="city" name="location" class="form-control keyword" style="width:100%;" required="">
                                    <option value="">Select City</option>
                                    @foreach ( $city as $cities)
                                    <option   value="{{$cities->city_name}}">{{$cities->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--End Search Location Options-->

                            <!--Start Search Button-->
                            <div class="col-lg-4">
                            <div class="search-btn"  style="width:100%;">
                                <button type="submit"  >Search</button>
                            </div>
                            </div>
                            <div id="valid_msg" style="color:red  !important;margin-left: 15px;"></div>
                            <!--End Search Button-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <section>
        <!--End Search Directory Section-->

        <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container">
                <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold"><span>Donors</span></h2>

                </div>
                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">

                          @foreach ($donar_registrations as $donar_registration )


                    <!--Start Featured Item Col-->
                    <div class="col-md-4 col-sm-6">
                        <!--Start Featured Item-->
                        <div class="feat-item">
                            <div class="feat-item-img">
                                <img class="img-responsive" src="images/{{$donar_registration->image}}" alt={{$donar_registration->image}}>
                            </div>
                            <div class="feat-item-cont">
                                <h4 class="text-bold">{{$donar_registration->donar_name }}</h4>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Blood Group:</strong> {{$donar_registration->blood_group }}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Age:</strong> {{$donar_registration->age}}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Gender:</strong> {{$donar_registration->gender}}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Mobile:</strong> {{$donar_registration->mobile}}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> City:</strong> {{$donar_registration->location }}</p>
                            </div>
                        </div>
                        <!--End Featured Item-->
                    </div>
                    <!--End Featured Item Col-->

                    @endforeach

                </div>
                <!--End Featured Row-->
            </div>
            <!--End Featured container-->
            <!--for pagination-->
            <center>
            <div class="d-felx justify-content-center">

                {{ $donar_registrations->links() }}

            </div>
            </center>
        </section>

        <!--End Featured section-->

        <!--Start Counter Section-->
        <section class="counter two">
            <div class="counter-bg-ovelay"></div>
            <!--Start container-->
            <div class="container">
                <div class="row">


                    <!--Start Item-->
                    <div class="col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-users text-center"></i>
                            <h1 class="text-center extra integers">{{$total_donor}}</h1>
                            <h4 class="text-center">Total Donors</h4>
                        </div>
                    </div>
                    <!--End Item-->


                    <!--Start Item-->
                    <div class="col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-users text-center"></i>
                            <h1 class="text-center extra integers">{{$total_donor}}</h1>
                            <h4 class="text-center">Available Donors</h4>
                        </div>
                    </div>
                    <!--End Item-->


                    <!--Start Item-->
                    <div class="col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-medkit text-center"></i>
                            <h1 class="text-center extra integers">8</h1>
                            <h4 class="text-center">Blood Groups</h4>
                        </div>
                    </div>
                    <!--End Item-->

                </div>
            </div>
            <!--Start container-->
        </section>
        <!--End Counter Section-->

        <!--Start Testimonial Section-->
        <section class="doctor testimonial three">
            <!--Start container-->
            <div class="container">
                <!--Start Section Title-->
                <div class="section-title two">
                    <h2 class="text-center text-bold">Testimonial</h2>
                </div>
                <!--End Section Title-->

                <!--Start Testimonial Item Row-->
                <div class="row">


                    <!--Start Testimonial Item Col-->
                    <div class="col-md-6">
                        <!--Start Testimonial Item-->
                        <div class="testi-item-three">
                            <div class="testi-item-left float-left">
                                <img class="img-responsive" src="{{ asset('frontend/assets/img/1504983857.html')}}" alt="">
                            </div>
                            <div class="testi-item-right float-right">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veritatis, suscipit beatae sunt assumenda ipsum earum recusandae fuga, omnis nam laborum, accusamus inventore cupiditate libero fugit at. Enim, impedit, perspiciatis.</blockquote>
                            </div>
                        </div>
                        <!--End Testimonial Item-->
                    </div>
                    <!--End Testimonial Item Col-->


                    <!--Start Testimonial Item Col-->
                    <div class="col-md-6">
                        <!--Start Testimonial Item-->
                        <div class="testi-item-three">
                            <div class="testi-item-left float-left">
                                <img class="img-responsive" src="{{ asset('frontend/assets/img/1504983807.html') }}" alt="">
                            </div>
                            <div class="testi-item-right float-right">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veritatis, suscipit beatae sunt assumenda ipsum earum recusandae fuga, omnis nam laborum, accusamus inventore cupiditate libero fugit at. Enim, impedit, perspiciatis.</blockquote>
                            </div>
                        </div>
                        <!--End Testimonial Item-->
                    </div>
                    <!--End Testimonial Item Col-->


                </div>
                <!--End Testimonial Item Row-->
            </div>
            <!--End container-->
        </section>
        <!--End Testimonial Section-->



       <!-- Include Footer-->
@include('frontend.layouts.footer')
        <!-- End Footer-->
    </div>
