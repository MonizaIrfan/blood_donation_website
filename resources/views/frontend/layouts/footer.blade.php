
<footer class="footer switcher-footer-three">
    <!--Start Footer Top-->
    <div class="footer-top">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-cont-details">
                        <h5 class="text-left text-upper">Short About us</h5>
                        <div class="border-line"></div>
                        <img class="img-responsive" src="images/logo/logo-footer.html" alt="">
                        <p class="text-left">Register to be a blood donor, give blood and save lives. Find out more about blood donation.</p>
                        <div class="footer-address">
                            <p class="text-left"><i class="fa fa-phone"></i> 03234066083</p>
                            <p class="text-left"><i class="fa fa-envelope"></i> Monizachughtai26@gmail.com
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-categories">
                        <h5 class="text-left text-upper">Menus</h5>
                        <div class="border-line"></div>
                        <div class="footer-categories-links">
                            <ul>
                                <li><a href="{{ route('index') }}"><i class="fa fa-arrow-circle-right"></i> Home</a></li>

                                <li><a href="{{ route('AboutUsindex') }}"><i class="fa fa-arrow-circle-right"></i>About Us</a></li><li><a href="{{ route('WhyBecomeDonorindex') }}"><i class="fa fa-arrow-circle-right"></i>Why Become Donor</a></li><li><a href="{{ route('contactindex') }}"><i class="fa fa-arrow-circle-right"></i>contact</a></li><li><a href="{{ route('BecomeADonorindex') }}"><i class="fa fa-arrow-circle-right"></i>Become A Donor</a></li>                                    </ul>
                        </div>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-categories">
                        <h5 class="text-left text-upper">New Doners</h5>
                        <div class="border-line"></div>
                        <div class="footer-categories-links">
                            <ul>
                             @foreach ( $latest as $latests)
                            <li><a><i class="fa fa-user"> {{  $latests->donar_name}}</i></a></li>

                             @endforeach


                                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Col-->
                <div class="col-md-3 col-sm-6">
                    <div class="footer-cont-details">
                        <h5 class="text-left text-upper">Want to Cancel the Registration?</h5>
                        <div class="border-line"></div>
                        <img class="img-responsive" src="images/logo/logo-footer.html" alt="">
                        <p class="text-left">If one time donation is done or you want to cancel the
                            Registration then contact us using contact us page we will cancel your Registration

                            </p>
                        <div class="footer-address">
                        </div>
                    </div>
                </div>
                <!--Start Col-->

                    </div>
                </div>
                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </div>
    <!--End Footer Top-->
    <!--Start Footer Bottom-->
    <div class="footer-bottom">
        <!--Start container-->
        <div class="container">
            <!--Start Row-->
            <div class="row">
                <!--Start Col-->

                <div class="col-sm-6 col-xs-12">
                    <div class="copy-right-text">
                        <p class="text-left">Copyright © 2023 - Moniza Irfan- All Rights Reserved</p>
                    </div>
                </div>
                <!--End Col-->

                <!--Start Col-->

                <!--End Col-->
            </div>
            <!--End Row-->
        </div>
        <!--End container-->
    </div>
    <!--End Footer Bottom-->

    <!--Start ClickToTop-->
    <div class="totop">
        <!--Start ClickToTop-->
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--End ClickToTop-->
</footer>
         <!--Main jQuery JS-->
         <script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
         <!--Conter JS-->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/waypoints.js')}}"></script>
         <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
         <!--Bootstrap JS-->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
         <!--Bootstrap Select JS-->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
         <!--Bootstrap Range Slide JS-->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap-slider.min.js')}}"></script>
         <!--Slick Crousel JS-->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/slick.js')}}"></script>
         <!--Form Select Option JS-->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/select2.min.js')}}"></script>
         <!-- Main JS -->
         <script type="text/javascript" src="{{ asset('frontend/assets/js/main.js')}}"></script>

         </body>


         <!-- Mirrored from ebloodbank.rexbd.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 05:40:21 GMT -->
         </html>
