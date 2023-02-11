<title>Home</title>
<style>
    .baner1 {
        background-image: url('assets/images/BoxFox-638_1800x.webp');
        height: 55vh;
        overflow: hidden;
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .btn1 {
        background-color: #FDF0E2;
    }

    .section1 {
        padding-bottom: 50px;
        padding-top: 50px;
    }

    .section1 a {
        color: #000;
    }

    .sub1 {
        position: relative;
        text-align: center;
        display: inline-block;
        letter-spacing: 2px;
        line-height: 20px;
        background: #000;
        font-size: 10px;
        padding: 0 20px;
        z-index: 300;
        color: #fff;
        opacity: 1;
        top: -10px;
        margin: 0;
        right: 0;
        left: 0;
        text-transform: uppercase;
    }

    .gift .col-md-4 p {
        line-height: 1.65;
        font-size: 14px;
        color: black;
        padding: 10px;
    }

    .gift .col-md-4 h3 {
        font-size: 1.69231em;
        color: black;
    }

    .section2 .gift {
        padding-bottom: 50px;
        padding-top: 50px;
    }

    .logobr {
        padding: 20px;
    }

    .logobr .col-md-2 img {
        max-width: 80px;
        display: block;
        margin: auto;
        width: 100%;
    }

    .logobr .col-md-2 {
        padding: 20px;
    }


    #owl-demo .item {
        margin: 3px;
    }

    #owl-demo .item img {
        display: block;
        width: 100%;
        height: auto;
    }

    .product-style-2 {
        border: 0;
        padding: 0;
    }

    .function-link {
        position: absolute;
        text-align: center;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 125px !important;
        font-size: 40px !important;
    }

    figure {
        height: 280px;
    }

    section .btn {
        background-color: white;
        font-size: 10px;
        letter-spacing: 2px;
        color: black;
        font-weight: bold;
        padding: 14px 20px;
        margin-top: 10px;

    }
    .build:hover{
        background-color: rgba(255, 255, 255, 0.192);
        border: 2px solid #fdf0e2;
        border-radius:20px; 
    }
    .build{
        background-color: #fdf0e2;
    }
</style>


<section>
    <div style="background-color:#FDF0E2 ;">
        <div class="container" style="text-align: end;">
            <p style="margin: 9px 0;font-weight: bold;"><i> Your go o for gifting - any reason,any season </i></p>

        </div>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <section style="
        padding: 15px 0;
        text-align: center;
        width: 350px;
        position: absolute;
        bottom: 15px;
        left: 0;
        right: 0%;
        z-index: 1;
        justify-content: center;
        display: flex;
        margin: auto;" class="build">
            <div>
                <a href="/collections/gift-box-builder-gifts/box" style="letter-spacing: 7px;;text-align: center;font-size: 20px;">Build a Gift Box</a>
                </div>
            </section>
        <div class="carousel-inner" style="height: 500px;">
        @if($slider->isEmpty())
        <div class="carousel-item active">
                <div style="width: auto;height: 600px;background-position-y: center;background-size: cover;background-image: url({{asset('assets/images/slider1.jpg')}}">
                </div>


            </div>
            @else
            @foreach($slider as $slide)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div style="width: auto;height: 600px;background-position-y: center;background-size: cover;background-image: url({{asset('upload/frontend')}}/{{$slide->image}});">
                    <!-- <div style="color: white;padding: 174px 30px;max-width: 620px;margin: auto;">

                        <h1>BOXFOX Does Bridal</h1>

                        <p style="font-size: 1.53846em;">From engagement gifts o bridesmaid asks, and shower gifts to newlywed care packages - we've gott it all!</p>

                        <a href="" class="btn btn1" style="background-color: #FDF0E2;">SOMETHING NEW , SOMETHING BLUE</a>
                    </div> -->
                </div>

            </div>
             @endforeach
             @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- <div style="background-color:#FDF0E2 ;">
    <div class="container" style="text-align: end;">
        <p style="margin: 9px 0;font-weight: bold;"><i> Your go o for gifting - any reason,any season </i></p>
    </div>
    </div>

    <div  style="color: white;padding: 30px;
max-width: 620px;
position: absolute;
bottom: 0;
left: 0;">
        <h1>BOXFOX Does Bridal</h1>

        <p style="font-size: 1.53846em;">From engagement gifts o bridesmaid asks, and shower gifts to newlywed care packages - we've gott it all!</p>

        <a href="" class="btn btn1" style="background-color: #FDF0E2;">SOMETHING NEW , SOMETHING BLUE</a>
    </div> -->
</section>


<section style="background-color:#FDF0E2 ;" class="section1" data-aos="fade-up">

    <div class="container">
        <div class="row d-fle" style="display: flex;justify-content: center;">
            <div>
                <h4 style="font-size: 30px;
font-weight: bold;
color: black;
">Your go-to for</h4>
            </div>
            <div style="width: 100px;">
                <img src="{{asset('assets/images/gifting.webp')}}" alt="" srcset="">
            </div>
        </div>
        <div style="text-align: center;font-size: 16px;font-weight: 500;color: black;">
            <p>We make it effortless & elevated. No post office lines & no kitsch. We promise.</p>
        </div>
    </div>
</section>
<section class="section2"  data-aos="fade-down">
    <div class="container" style="text-align: center;">
        <h4 class="sub1">HOW IT WORKS</h4>

        <div class="row gift" style="justify-content: center;">

            <div class="col-md-4">
                <div style="width: 100px;margin: auto"><img src="{{asset('assets/images/gif.png')}}" alt="" srcset=""></div>
                <h3>Need a gift? </h3>
                <p> Any reason, any season. We're here to help keep things thoughtful.</p>
            </div>
            <div class="col-md-4">
                <div style="width: 100px;margin: auto"><img src="{{asset('assets/images/gif.png')}}" alt="" srcset=""></div>
                <h3>Need a gift? </h3>
                <p>We curate the best products so you can create the most personal gifts.</p>
            </div>
            <div class="col-md-4">
                <div style="width: 100px;margin: auto"><img src="{{asset('assets/images/gif.png')}}" alt="" srcset=""></div>
                <h3>Need a gift? </h3>
                <p>We take your masterpiece, pack it to perfection, and send it straight to their doorstep (or office). They love it — and you!</p>
            </div>

        </div>

    </div>

</section>
<section>
    <div class="container" style="text-align: center;">
        <h4 class="sub1" style="top: 9px;">BOX OF THE WEEK</h4>
    </div>

    <div class="row" style="background-color:#FDF0E2 ;margin-top: -1px;" >
        <div class="col-md-6" style="padding: 70px;text-align: left;color: #000;"data-aos="fade-right" >
            <h6 style="font-size: 13px;font-weight: bold;">Cheers! </ph6>
                <h3><i><b>the</b> </i> AL FRESCO </h3>
                <p style="font-size: 13px;line-height: 22px;margin-top: 20px;">Raise a glass to the brand new BOXFOX x Haus collaboration - the AL FRESCO. Set the scene and the table with an elevated assortment of goods that will last long into the night. Inspired by long and hot summer nights spent imbibing with friends, this gift box was curated in collaboration with our friends at Haus. </p>
                <a href="" class="btn"> SHOP NOW</a>
        </div>

        <div class="col-md-6" data-aos="fade-left">
            @if($middle1->isEmpty())
            <img src="{{asset('assets/images/slider2.jpg')}}" alt="" srcset="">
            @else
            <img src="{{asset('upload/frontend/')}}/{{$middle1[0]->image}}" alt="">
            @endif
        </div>

    </div>


</section>

<section>
    <div style="text-align: center;">
        <h4 class="sub1">BOXFOX Concierge</h4>
    </div>

    <div class="row" style="background-color:#FDF0E2 ;margin-top: -22px;" data-aos="fade-right">
        <div class="col-md-6">
        @if($middle1->isEmpty())
            <img src="{{asset('assets/images/slider3.jpg')}}" alt="" srcset="">
            @else
            <img src="{{asset('upload/frontend/')}}/{{$middle2[0]->image}}" alt="">
            @endif

        </div>
        <div class="col-md-6" style="padding: 70px;text-align: left;color: #000;" data-aos="fade-right" >
            <h6 style="font-size: 13px;font-weight: bold;">Direct Mail That Delivers </ph6>
                <h3>Custom Corporate Gifting </h3>
                <p style="font-size: 13px;line-height: 22px;margin-top: 20px;">Kick off 2021 on the right foot. BOXFOX Concierge brings the BOXFOX aesthetic and human touch to scale, offering personal gifting solutions for companies large and small. We promise to be your go-to for gifting: with a dedicated sales manager and all-star production team, we make it all happen, on-brand, and on-time. </p>
                <a href="" class="btn"> GET STARTED TODAY</a>
        </div>

    </div>
</section>

<section>
    <div style="text-align: center;">
        <h4 class="sub1">TREAT YOURSELF</h4>
    </div>

    <div class="row" style="background-color:#FDF0E2 ;margin-top: -20px;">

        <div class="col-md-6" style="padding: 70px;text-align: left;color: #000;" data-aos="fade-left">
            <h6 style="font-size: 13px;font-weight: bold;">Gifts for Them <i><b>AND</b></i> Shop for You </ph6>
                <h3> <i><b>the</b></i> Marketplace </h3>
                <p style="font-size: 13px;line-height: 22px;margin-top: 20px;">For years, we've been your go-to for gifting. Now you can shop for yourself too. Pick from the best brands all in one place. Ship their gifts to them and your treats to you, all in one checkout. </p>
                <a href="" class="btn"> SHOP NOW</a>
        </div>

        <div class="col-md-6" data-aos="fade-right">
        @if($middle1->isEmpty())
            <img src="{{asset('assets/images/slider4.jpg')}}" alt="" srcset="">
            @else
            <img src="{{asset('upload/frontend/')}}/{{$middle3[0]->image}}" alt="">
            @endif

        </div>
    </div>
</section>

<section data-aos="flip-up">
    <div style="text-align: center;">
        <h4 class="sub1">AS SEEN IN</h4>
    </div>

    <div class="row logobr" style="margin-top: -20px;" >
    @if($partner->isEmpty())
    <div class="col-md-2">
    <img src="{{asset('assets/images/l1.webp')}}" alt="" srcset="">
        </div>
        <div class="col-md-2">
    <img src="{{asset('assets/images/l2.webp')}}" alt="" srcset="">
        </div>
        <div class="col-md-2">
    <img src="{{asset('assets/images/l3.webp')}}" alt="" srcset="">
        </div>
        <div class="col-md-2">
    <img src="{{asset('assets/images/l4.webp')}}" alt="" srcset="">
        </div>
        <div class="col-md-2">
    <img src="{{asset('assets/images/l5.webp')}}" alt="" srcset="">
        </div>
    @else
    @foreach($partner as $part)
        <div class="col-md-2">
            <img src="{{asset('upload/frontend')}}/{{$part->image}}" alt="">
        </div>
@endforeach
@endif

    </div>
</section>

<section>
    <div style="text-align: center;" class="container">
        <h4 class="sub1">Featured Collections</h4>


        <div class="row section1" style="text-align: start;display: block;margin:0 20px;padding-top: 20px">
        @if($fetuers->isEmpty())
        <div class="col-md-3">
        <img src="{{asset('assets/images/slider4.jpg')}}" alt="" srcset="">
                    <h5>Text</h5>
                    <div>
                        <p>Description</p>
                    </div>
                </div>
        @else
        @foreach($fetuers as $f)

                <div class="col-md-3">
                    <img src="{{asset('upload/frontend')}}/{{$f->image}}" alt="">
                    <h5>{{$f->title}}</h5>
                    <div>
                        <p>{{$f->discription}}</p>
                    </div>
                </div>

            @endforeach
            @endif
            <!-- <a href="">
                <div class="col-md-3">
                    <img src="{{asset('assets/images/p.webp')}}" alt="">
                    <h5>Precurated Boxes</h5>
                    <div>
                        <p>Let us do the work: shop our selection of boxes for all of life's occasions. </p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="col-md-3">
                    <img src="{{asset('assets/images/p1.jpg')}}" alt="">
                    <h5>Build a BOXFOX</h5>
                    <div>
                        <p>Check out our fabulous selection of items and build your very own personalized box. </p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="col-md-3">
                    <img src="{{asset('assets/images/p2.webp')}}" alt="">
                    <h5>the Marketplace</h5>
                    <div>
                        <p>For years, we've been your go-to for gifting. Now you can shop for yourself too. </p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="col-md-3">
                    <img src="{{asset('assets/images/p3.jpg')}}" alt="">
                    <h5>Corporate Gifting</h5>
                    <div>
                        <p>We'll work with your company to create a branded gift perfect for the occasion. </p>
                    </div>
                </div>
            </a> -->

        </div>
    </div>
</section>


<!-- <section>
    <div style="text-align: center;">
        <h4 class="sub1">FOLLOW ALONG ON Instagram</h4>




        <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: -48px;">
            <div class="wrap-show-advance-info-box style-1 box-in-site">


                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider1.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link" style="background-color: #000;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider2.jpg')}}" alt=""></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider3.jpg')}}" alt=""></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider5.jpg')}}" alt=""></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider6.jpg')}}" alt=""></figure>
                            </a>
                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider7.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider8.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider9.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider10.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider11.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="">
                                <figure><img src="{{asset('assets/images/slider12.jpg')}}" alt=""></figure>
                            </a>

                            <div class="wrap-btn">
                                <a href="#" class="function-link"><i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>


    </div>
</section> -->
