
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->


<!-- Mirrored from ebloodbank.rexbd.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Feb 2018 05:39:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>eBloodBank</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/img/icon.png')}}">

    <!--Chart Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/charts.css')}}">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap.css')}}">
    <!--Bootstrap Range Slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-slider.css')}}">
    <!--Slick Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/slick.css')}}">
    <!--Bootstrap Select Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/bootstrap-select.css')}}">
    <!--Input Select With Search Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/select2.css')}}">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/font-awesome.min.css')}}">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css')}}">
    <!--Main Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/styles.css')}}">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/responsive.css')}}">
    <!--Color Switcher Stylesheet-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/switcher-colors.css')}}">
    <!--Custom Color Stylesheet-->
    <!--
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-one.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-two.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-three.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-four.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-five.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-six.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-seven.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-eight.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-nine.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-ten.css">
    <link rel="stylesheet" type="text/css" href="http://ebloodbank.rexbd.net//assets/css/custom-colors/color-eleven.css">
    -->

    <!-- Modanizr JS -->
    <script src="{{ asset('frontend/assets/js/modernizr.custom.js')}}"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body class="layout-wide color-seven">
    <!--Start Preloader Eight-->
    <div class="site-preloader eight">
        <div class="spinner"></div>
    </div>
    <!--End Preloader Eight-->

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
        <header class="header style-one header-main header-static-one">
            <!--Start Header Top-->
            <div class="header-top">
                <!--Start Header Top container-->
                <div class="container">
                    <!--Start Header Top Row-->
                    <div class="row">
                        <div class="col-sm-5 col-xs-12">
                            <div class="topbar-contact-info">
                                <ul>

                                    <li>Welcome To Blood Management System</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-2 col-sm-offset-4 col-xs-12">
                            <div class="header-social-icon">
                                <ul>
                                                                        			<li><a target="_blank" href="https://www.facebook.com/help/192946630752330"><i class="fa fa-facebook"></i></a></li>
                                    		                                    			<li><a target="_blank" href="https://help.twitter.com/en/using-twitter/tweet-and-moment-url"><i class="fa fa-twitter"></i></a></li>
                                    		                                    			<li><a target="_blank" href="https://www.linkedin.com/in/moniza-irfan-3b93b5209/"><i class="fa fa-linkedin"></i></a></li>
                                    		                                    			<li><a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                    		                                </ul>

                            </div>
                        </div>
                    </div>
                    <!--End Header Top Row-->
                </div>
                <!--End Header Top container-->
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                  {{ session()->get('message') }}
                 </div>
                 @endif

            </div>
            <!--End Header Top-->

            <div class="clearfix"></div>
            <!--Start Main Menu-->
            <div class="mainmenu" data-spy="affix" data-offset-top="197">
                <!--Start Nav-->
                <nav class="navbar navbar-default">
                    <!--Start Main Menu container-->
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('index') }}"><img class="img-responsive" src="{{ asset('frontend/assets/img/logo.png')}}" alt="Logo"></a>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <!--Start Menu List-->
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('index') }}">Home</a></li>

                                <li><a href="{{ route('AboutUsindex') }}">About Us</a></li><li><a href="{{ route('WhyBecomeDonorindex') }}">Why Become Donor</a></li><li><a href="{{ route('contactindex') }}">contact</a></li><li><a href="{{ route('BecomeADonorindex') }}">Become A Donor</a></li>
                            </ul>
                                <!--End Menu List-->
                        </div>
                    </div>
                    <!--End Main Menu container-->
                </nav>
                <!--End Nav-->
            </div>
            <!--End Main Menu-->
        </header>
        <!--End Header-->
