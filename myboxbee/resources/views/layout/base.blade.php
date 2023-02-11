<!DOCTYPE html>
<html lang="en">
    <?php

use App\Models\slider;

$logo = slider::where('type','=','logo')->get();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@if($logo->isEmpty())
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
@else

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('upload/frontend')}}/{{$logo[0]->image }}">
    @endif

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/jquery.fontselect.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link rel="canonical" href="https://www.belleandblush.com/collections/gift-box-builder-gifts"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">
    <link type="text/css" href="{{ asset('css/layout.theme.css')}}?v=8396895843971986765" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/theme.css')}}?v=208273474052650987" rel="stylesheet">
    

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        .hed .owl-nav button {
            background: transparent !important;
            color: black;
        }

        .hed .owl-nav button:hover {
            background: transparent !important;
        }
    </style>

    <style>
        .layer {
            overflow-x: hidden;
        }

        @media(min-width : 992px) {
            .layer {
                overflow-x: visible;
            }
        }

        .group {
            transition: transform 300ms ease;
        }

        .stage-open .group {
            transform: translateX(250px);
        }

        .stage-shelf {
            transition: transform 300ms ease;
            -webkit-overflow-scrolling: touch;
            transform: translateX(-250px);
            position: fixed !important;
            z-index: 1030 !important;
            overflow-y: auto;
        }

        .stage-open+.stage-shelf {
            transform: translateX(0);
        }

        [data-toggle="stage"] polyline {
            transition: transform 300ms ease;
            transform-origin: 13.333px;
            transform: rotate(0deg);
        }

        .stage-open [data-toggle="stage"] polyline:first-of-type {
            transform: rotate(-45deg);
        }

        .stage-open [data-toggle="stage"] polyline:last-of-type {
            transform: rotate(45deg);
        }

        .navbar .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

</head>

<body class="home-page home-01 "  style="padding-right: 0 !important">


    <div class="stage" id="stage">
    @include('layout.navbar')
        <div class="layer">
            <div class="group ">
                <div class="main">

<main> {{$slot}}</main>


                </div>



                <div class="footer">

                    <div class="tagline">

                        <div id="shopify-section-tagline" class="shopify-section">

                            <div class="mb-5">

                                <div class="text-center text-dark py-3" style="background-color : #ead7ca;">

                                    <q>

                                        Experience a luxury boutique full of cosmetics, skincare, gifts, stationery &amp; jewelry.

                                    </q>

                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="subscribe">

                        <div class="mb-5">

                            <div class="container px-2 px-lg-4">

                                <div class="row no-gutters">

                                    <div class="col-lg-6 px-2 px-lg-4 m-auto">

                                        <div id="shopify-section-subscribe" class="shopify-section">

                                            <div class="subscribe">

                                                <form class="text-center" action="" method="post" id="subscribe">



                                                    <div class="form-group">

                                                        <input class="form-control text-center bg-transparent border-right-0 border-left-0 border-top-0 border-dark text-dark rounded-0 py-2 pl-0" placeholder="Enter your email" autocomplete="off" type="email" id="email" name="EMAIL">

                                                        <em class="form-text text-muted text-center my-2" id="message">



                                                            Get 10% off when you join! New arrivals, exclusive deals, and expert advice right to your inbox!



                                                        </em>

                                                    </div>

                                                    <button class="btn btn-primary px-5 py-2" type="submit">

                                                        Join

                                                    </button>

                                                </form>

                                                <script>
                                                    document

                                                        .getElementById('subscribe')

                                                        .addEventListener(

                                                            'submit',

                                                            function(event) {

                                                                event.preventDefault();

                                                                var message = document.getElementById('message');



                                                                var action = this.getAttribute('action').replace('post', 'post-json');

                                                                var email = this.EMAIL.value;

                                                                window.subscribe = function(response) {

                                                                    if (response.result == 'success') {

                                                                        message.innerHTML = 'Thank you';

                                                                    } else {

                                                                        message.innerHTML = 'Please try again';

                                                                    }

                                                                }

                                                                var script = document.createElement('script');

                                                                script.src = action + "&c=subscribe&EMAIL=" + email;

                                                                document.head.appendChild(script);



                                                            }

                                                        );
                                                </script>

                                            </div>


                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="navigation">

                        <div class="mb-5">

                            <div class="container px-2 px-lg-4">

                                <div class="row no-gutters">

                                    <div class="col-lg-8 m-auto">

                                        <div class="row no-gutters">



                                            <div class="col-lg-4 px-2 px-lg-4">

                                                <ul class="nav flex-column">



                                                    <!-- <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/pages/about-us">

                                                            About Us

                                                        </a>

                                                    </li> -->



                                                    <!-- <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/pages/location">

                                                            Location

                                                        </a>

                                                    </li> -->



                                                    <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/about">

                                                            About Us

                                                        </a>

                                                    </li>



                                                    <!-- <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/pages/careers">

                                                            Careers

                                                        </a>

                                                    </li> -->



                                                </ul>

                                            </div>



                                            <div class="col-lg-4 px-2 px-lg-4">

                                                <ul class="nav flex-column">



                                                    <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="" target="_blank">

                                                            Instagram

                                                        </a>

                                                    </li>



                                                    <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="" target="_blank">

                                                            Facebook

                                                        </a>

                                                    </li>



                                                    <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="" target="_blank">

                                                            Pinterest

                                                        </a>

                                                    </li>



                                                    <!-- <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/pages/events">

                                                            Events Calendar

                                                        </a>

                                                    </li> -->



                                                </ul>

                                            </div>



                                            <div class="col-lg-4 px-2 px-lg-4">

                                                <ul class="nav flex-column">



                                                    <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/pages/belle-blush-curbside-pickup">

                                                            Curbside Pickup &amp; Delivery Estimates

                                                        </a>

                                                    </li>



                                                    <li class="nav-item">

                                                        <a class="nav-link text-center py-0" href="/pages/returns-and-exchanges">

                                                            Returns &amp; Exchanges

                                                        </a>

                                                    </li>



                                                </ul>

                                            </div>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="legal">

                        <div class="my-2">

                            <div class="container px-2 px-lg-4">

                                <div class="row no-gutters">

                                    <div class="col px-2 px-lg-4">

                                        <div class="text-center text-muted">

                                            <small>

                                                © 2021 Belle &amp; Blush

                                                —

                                                <a class="text-muted" href="/pages/terms">

                                                    Terms

                                                </a>

                                                &amp;

                                                <a class="text-muted" href="/pages/privacy">

                                                    Privacy

                                                </a>

                                                —




                                            </small>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stage-shelf p-0">
        <div class="menu h-100">
            <div class="carousel slide h-100" id="menu">
                <div class="carousel-inner h-100">
                    <div class="carousel-item h-100 active">

                        <ul class="nav flex-column">



                            <li class="nav-item">
                                                <a class="nav-link text-uppercase py-3" href="/collections/gift-box-builder-gifts/box">
                                               Build a custom box
                                                </a>
                                            </li>



                                            <li class="nav-item dropdown position-static">
                                                <a class="nav-link text-uppercase py-3" href="/collection/ready-to-ship">
                                                    Ready to ship boxes
                                                </a>

                                            </li>



                                            <li class="nav-item dropdown">
                                                <a class="nav-link text-uppercase py-3" href="/collection/coperate">
                                                   Coparete gifting
                                                </a>
                                            </li>



                                            <!-- <li class="nav-item dropdown position-static">
                                                <a class="nav-link text-uppercase py-3" href="/collections/bath-body">
                                                    Custom gifts
                                                </a>

                                            </li> -->



                                            <!-- <li class="nav-item dropdown">
                                                <a class="nav-link text-uppercase py-3" href="/collections/hair">
                                                    Hair Care
                                                </a>
                                                <div class="dropdown-menu border-0 m-0">

                                                    <a class="dropdown-item bg-transparent" href="/collections/hair">
                                                        All Hair Care
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/root-touch-up">
                                                        Color Touch Up
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/conditioner">
                                                        Conditioner
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/dry-shampoo">
                                                        Dry Shampoo
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/hair-accessories">
                                                        Hair Accessories &amp; Tools
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/hair-scalp-treatments">
                                                        Hair &amp; Scalp Treatments
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/shampoo">
                                                        Shampoo
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/styling-products">
                                                        Styling Products
                                                    </a>

                                                    <a class="dropdown-item bg-transparent" href="/collections/travel-hair-products">
                                                        Travel Size
                                                    </a>

                                                </div>
                                            </li> -->






                                            <!-- <li class="nav-item">
                                                <a class="nav-link text-uppercase py-3" href="/pages/belle-blush-curbside-pickup">
                                                    Gift cards
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-uppercase py-3" href="/shop/all">
                                                  market  place
                                                </a>
                                            </li> -->






                                            <li class="nav-item ">
                                                <a class="nav-link text-uppercase py-3" href="/about">
                                                   About us
                                                </a>
                                            </li>
                                            @if(Route::has('login'))
                                            @auth
                                                    @if(Auth::user()->utype =='USR')
                                                    <li class="nav-item ">
                                                    <!-- <li class="nav-item nav-link py-lg-3"></li> -->
                                                        <div class="dropdown" style="background-color: rgb(255, 255, 255);padding: 0 25px;">
    
                                                                <a class=" d-block py-2" data-toggle="dropdown" href="#" style="color: rgb(5, 5, 5);">
    
                                                                {{Auth::user()->name}}
    
                                                                    <i class="fas fa-angle-down"></i>
    
                                                                </a>
    
    
                                                                <div class="dropdown-menu dropdown-menu-right">
    
                                                                    <a class="dropdown-item" style="padding: 5px;" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
    
                                                                    <form action="{{route('logout')}}" method="POST" id="logout">
                                                                        @csrf
                                                                    </form>
                                                                    <a class="dropdown-item" style="padding: 5px;" href="/myaccount" >My Account</a>
    
                                                                </div>
    
                                                            </div>
                                                            @else(Auth::user()->utype =='ADM')
                                                            <div class="dropdown" style="background-color: black;padding: 0 25px;">
    
                                                                    <a class=" d-block py-2" data-toggle="dropdown" href="#" style="color: white;">
    
                                                                    {{Auth::user()->name}}
    
                                                                        <i class="fas fa-angle-down"></i>
    
                                                                    </a>
    
                                                                    <div class="dropdown-menu dropdown-menu-right">
    
                                                                        <a class="dropdown-item" style="padding: 5px;" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit()">Logout</a>
    
                                                                        <form action="{{route('logout')}}" method="POST" id="logout">
                                                                            @csrf
                                                                        </form>
                                                                        <a class="dropdown-item" style="padding: 5px;" href="/admin">Dashboard</a>
    
    
                                                                    </div>
    
                                                                    </div>
                                                                    </li>
    
                                                    @endif
                                                @else
    
                                                    <li class="nav-item "><a href="{{route('login')}}" class="nav-link text-uppercase py-3 login"  >Login</a></li>
                                                    <li class="nav-item"><a href="{{route('register')}}" class="nav-link text-uppercase py-3 login" >Register</a></li>
    
                                     @endif
                             @endif
                        </ul>
                    </div>





                </div>
            </div>
        </div>
    </div>
            <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
            <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
            <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/js/jquery.flexslider.js')}}"></script>
            <script src="{{ asset('assets/js/chosen.jquery.min.js')}}"></script>
            <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
            <script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
            <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
            <script src="{{ asset('assets/js/functions.js')}}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
            <script src="{{ asset('js/jquery.fontselect.js') }}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
            <script type="text/javascript" src="{{ asset('js/layout.js') }}" defer="defer"></script>
             <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
             <script src="{{asset('js/cart.js')}}"></script>

            <script src="{{ asset('js/zoomsl.js') }}"></script>



  <script>

    



// Default dropdown action to show/hide dropdown content
$('.js-dropp-action0').click(function(e) {
  e.preventDefault();
  if($('.dropp-body0').hasClass('js-open')){
    
    $('.dropp-body0').removeClass('js-open');
    $('.js-dropp-action0').removeClass('js-open')
    $(this).parent().next('.dropp-body0').toggleClass('js-open');
  }
  else{
    $(this).parent().next('.dropp-body').toggleClass('js-open');
  }

    $(this).toggleClass('js-open');
  $('.dropp-body1').removeClass('js-open')
  $('.dropp-body2').removeClass('js-open')
  $('.js-dropp-action1').removeClass('js-open')
  $('.js-dropp-action2').removeClass('js-open')


 
});
$('.js-dropp-action1').click(function(e) {
  e.preventDefault();
  $(this).toggleClass('js-open');
  $('.dropp-body0').removeClass('js-open')
  $('.dropp-body2').removeClass('js-open')
  $('.js-dropp-action0').removeClass('js-open')
 
  $('.js-dropp-action2').removeClass('js-open')
  $(this).parent().next('.dropp-body').toggleClass('js-open');
});
$('.js-dropp-action2').click(function(e) {
  e.preventDefault();
  $(this).toggleClass('js-open');
  $('.dropp-body0').removeClass('js-open')
  $('.dropp-body1').removeClass('js-open')
  $('.js-dropp-action1').removeClass('js-open')
  $('.js-dropp-action0').removeClass('js-open')
  $(this).parent().next('.dropp-body').toggleClass('js-open');
});


// Using as fake input select dropdown
// $('label').click(function() {
//   $(this).addClass('js-open').siblings().removeClass('js-open');
//   $('.dropp-body,.js-dropp-action').removeClass('js-open');
// });
// get the value of checked input radio and display as dropp title



AOS.init();

  </script>

@include('layout.notify')

</body>

</html>
