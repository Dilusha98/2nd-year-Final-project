
<?php
use App\Http\Controllers\Frontend\CartController;
use App\Models\slider;

$total = CartController::cartitem();
$total1 = CartController::wishlist();
$logo = slider::where('type','=','logo')->get();
?>
<style>
    .box-builder-link:hover{
   color: rgb(255, 255, 255);
   background-color: rgb(3, 3, 3);
}
.box-builder-link{
    color: rgb(5, 5, 5);
    border:2px solid black
}
.login:hover{
    color: rgb(255, 255, 255) !important;
   background-color: rgb(3, 3, 3);
}
.login{
    background-color: rgb(255, 255, 255);
    padding: 0 25px ;
    color: rgb(0, 0, 0);
    line-height: 0 !important;
    margin: 5px;border:2px solid black;
    
}

</style>
<div class="layer">
            <div class="group " >
                <div id="shopify-section-header" class="shopify-section">
                    <div class="header">
                        <div class="bg-secondary">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="carousel carousel-fade slide" data-ride="carousel" id="header">
                                            <div class="carousel-inner">

                                                <div class="carousel-item active">
                                                    <div class="text-center  my-1">
                                                        Please allow 1-2 business days for orders to ship. | Free shipping with U.S. orders $100 &amp; over!
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
            </div>
        </div>

        <div class="layer sticky-top">
            <div class="group">
                <div class="navigation">
                    <div class="navbar navbar-light navbar-expand-lg bg-white p-0 m-0">
                        <div class="d-flex flex-column w-100">
                            <div class="d-flex justify-content-between flex-row w-100">
                                <div class="navbar-collapse collapse w-100">
                                    <ul class="navbar-nav mr-auto pr-3">

                                        <li class="nav-item">
                                            <a class="nav-link py-3 pl-0" href="/collections/gift-box-builder-gifts">

                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <a class="navbar-toggler border-0 p-3" data-easing="none" data-duration="none" data-distance="none" data-target="#stage" data-toggle="stage">
                                    <svg class="d-block" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" width="20" height="20">
                                        <polyline points="0,6.5 20,6.5"></polyline>
                                        <polyline points="0,13.5 20,13.5"></polyline>
                                    </svg>
                                </a>
                                <a class="navbar-brand py-1 m-0" href="/" style="width: 200px;">
                                @if($logo->isEmpty())
<p>Logo</p>
                                @else
<img src="{{asset('upload/frontend')}}/{{$logo[0]->image}}" alt="" width="100%">
@endif
                                </a>
                                <a class="navbar-toggler border-0 p-3" href="/cart">
                                    <svg class="d-block" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" width="20" height="20">
                                        <polygon points="0,8 20,8 10,18"></polygon>
                                        <polygon points="4,8 10,2 16,8"></polygon>
                                    </svg>
                                </a>

                                <div class="navbar-collapse collapse w-100">
                                    <ul class="navbar-nav ml-auto px-1">


                                        <li class="nav-item d-none d-lg-block" id="loadwish">

                                            <a class="iWishView nav-link py-lg-3" href="/apps/iwish">Wishlist: <span class="iWishCount">{{$total1}}</span></a>


                                        </li>
                                        <li class="nav-item d-none d-lg-block" id="bagkload">
                                            <a class="nav-link  bag" href="/cart" style="display: flex;padding-right: 3rem">
                                               <img src="{{asset('img/cart.png')}}" alt="" width="40">
                                                <span class="count" style="position: absolute;margin: -13px -9px;background-color: black;border-radius: 27px;padding: 0px 5px 1px 4px;color: white;font-size: 13px;font-weight: bold;">
                                                   
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item d-none d-lg-block px-lg-4 py-lg-2" style="margin-top: 6px;">
                                            <a class="py-1 px-2 box-builder-link btn" href="{{route('gift-box-build',[ 'box'])}}" >
                                                Build a Gift Box
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

        <div class="sticky-top" style="top: 50px;">
            <div class="layer">
                <div class="group">
                    <div id="shopify-section-navigation" class="shopify-section">

                        <div class="navigation">


                            <div class="navbar navbar-light navbar-expand-lg bg-white p-0">
                                <div class="d-flex flex-column w-100">
                                    <div class="navbar-collapse collapse w-100">

                                        <ul class="navbar-nav m-auto px-3">


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
                                            </li> -->
                                            <!-- <li class="nav-item">
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
                                        <div>

                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
