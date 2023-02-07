@include('frontend.layouts.header')
<br><br><br><br><br><br>

        <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container">
                <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold " name="title"><span>Search Results</span></h2>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                  {{ session()->get('message') }}
                 </div>
                 @endif
                <!--End Section Title-->

               <!--Start Featured section-->

                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">

                          @foreach ($search as $donar_registration )


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

        </div>
        </section>
        <!--End Featured section-->

        @include('frontend.layouts.footer')

