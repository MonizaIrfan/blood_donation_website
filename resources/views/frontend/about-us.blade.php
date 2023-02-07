@include('frontend.layouts.header')
<br><br><br><br><br><br>

        <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container">
                <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold " name="title"><span>{{ $page->title }}</span></h2>
                </div>
                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">

                  <div class="col-md-8 col-md-offset-2" >
                    <p>
                      <div name="description">{{ $page->description }}</div>
                         </p>
                  </div>

                </div>
                <!--End Featured Row-->
                       </div>
            <!--End Featured container-->
        </section>
        <!--End Featured section-->

        @include('frontend.layouts.footer')

