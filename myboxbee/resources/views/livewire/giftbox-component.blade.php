<title>Build Gift Box</title>

<script src="{{asset('assets/js/htmlcanves.js')}}"></script>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
<!-- ======= Icons used for dropdown (you can use your own) ======== -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<div class="collection">

    <div class="pt-5">

        <div id="shopify-section-builder" class="shopify-section">

            <div class="builder">
                <style>
                    .layer {
                        overflow-x: visible;
                    }

                    .middle {
                        transition: .5s ease;
                        opacity: 0;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        -ms-transform: translate(-50%, -50%);
                        text-align: center;
                        background-color: red;
                    }


                    .builder form label .image img {
                        border: 2px solid transparent;
                    }

                    .builder .image1:hover img {
                        border: 2px solid black;
                        opacity: 0.3;

                    }

                    .widget.filter-widget .vertical-list li a:hover::after,
                    .widget.filter-widget .vertical-list li a.active::after {
                        opacity: 1;
                        filter: alpha(opacity=100);
                    }



                    .builder .image1:hover .mb-3 {
                        background-color: black;
                    }

                    .builder .image1:hover .middle {

                        opacity: 1;

                    }

                    .text1 {
                        background-color: #010101;
                        color: white;
                        font-size: 16px;
                        padding: 16px 32px;
                    }

                    .builder form :checked+label .image img {
                        border: 5px solid black;

                    }

                    .builder .product .hover {
                        display: none;
                    }

                    .builder .product:hover .hover {
                        display: block;
                    }

                    .builder .gift[data-remove] {
                        cursor: pointer;
                    }

                    .modal input,
                    .modal textarea {
                        border: 1px solid #666 !important;
                        padding: 4px !important;
                    }

                    .modal input:focus,
                    .modal textarea:focus {
                        outline: 1px solid black;
                    }

                    /* .drop{
                        width : 300px;
  background: #d9d9d9;
  margin : 40px auto;
                    } */



                    .li {
                        border-bottom: 1px solid rgb(0, 0, 0);
                        padding: 0px 19px;


                    }

                    .li a {
                        width: 100%;
                        display: inline-block;
                    }

                </style>
                <div class="carousel carousel-fade slide" id="builder">
                    <div class="carousel-inner" style="overflow : visible">

                        <!-- first step -->
                        <div class="carousel-item ">
                            <div class="container mb-4 px-lg-4 navigation">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full">
                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-black rounded-full">
                                                    <p class="text-black text-lg">1</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-bold font-serif">
                                                Box
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">2</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Gifts
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">3</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Card
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">4</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Sticker
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">5</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Gift voucher
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">5</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Review
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="box">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                1. Choose your box
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">
                                                            <p>
                                                            </p>
                                                            <p>PLEASE NOTE: If you're shipping multiple gift boxes to
                                                                one location you'll only need to create one order, but
                                                                to ship gift boxes to multiple locations you'll need to
                                                                create separate orders for each shipment.</p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="pb-3 mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="pb-3 mb-3">
                                            <form action="/cart/add" method="post" >
                                                <div class="container px-2">
                                                    <!-- //loop itam card box -->
                                                    <div class="row no-gutters">




                                                        @foreach ($box as $b)
                                                            <div class="col-6 px-2 px-lg-4" onclick="boxview({{$b}})">
                                                                <input class="d-none" type="radio" name="id"
                                                                    value="{{ $b->id }}"
                                                                    id="{{ $b->id }}">
                                                                <label for="{{ $b->id }}" style="width:100%">
                                                                    <div class="product">
                                                                        <div class="m-0">
                                                                            <div class="image1 image">
                                                                                <div class="mb-3">
                                                                                    <img class="w-100"
                                                                                        src="{{ asset('upload') }}/{{ $b->image }} "
                                                                                        alt="BELLE &amp; BLUSH GIFT BAR | Pampas Grass">
                                                                                </div>
                                                                                <div class="middle">
                                                                                    <div class="text1">SELECT
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vendor">
                                                                                <div class="text-center">
                                                                                    <h6 class="m-0">
                                                                                        {{ $b->name }}
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="title">
                                                                                <div class="text-center">
                                                                                    <p class="mb-4">
                                                                                        {{ $b->title }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <!-- end loop card box -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer fixed-bottom position-sticky border-bottom border-dark collapse"
                                        id="footer">
                                        <div class="bg-secondary">
                                            <div class="container-fluid p-0">
                                                <div class="row no-gutters">
                                                    <div class="col-auto ml-auto p-2">
                                                        <a class="btn btn-primary border-0 px-6" data-slide-to="1"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            Next →
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- second step -->
                        <div class="carousel-item">
                            <div class="container mb-4 px-lg-4">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full">
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="0"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="0">
                                                    Box
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-black rounded-full">
                                                    <p class="text-black text-lg">2</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-bold font-serif">
                                                Gifts
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">3</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Card
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">4</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Sticker
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">5</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Gift voucher
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">6</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Review
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="gifts">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                2. Add your gifts
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">
                                                            <p>
                                                                Make it memorable! Select from the items below to create
                                                                your unique gift assortment. Everything you choose will
                                                                be shipped together in box you’ve selected. Once
                                                                complete, simply head to the next step to select a card
                                                                and include a note.<br><br> Not sure where to start?
                                                            </p>
                                                            <p><span style="text-decoration: underline;"><strong><a
                                                                            href="https://www.belleandblush.com/pages/custom-gift-box-ideas">
                                                                            Click here to view some custom gift box
                                                                            inspiration!</a></strong></span></p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div id="preview" style="font-size: 15px;font-weight: 700;">
                                                        <!--
                                                        <div class="row no-gutters">
                                                            <div class="col-md-2 px-2 px-lg-4">
                                                                <div class="btn btn-block btn-primary">Custom box total : $5.00</div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="refine">

                                        <style>
                                            .refine .dropdown-menu {

                                                max-height: 20rem;

                                                overflow-y: auto;

                                            }

                                        </style>


                                    </div>




                                    <style>
                                        .icon {
                                            display: block;
                                            position: relative;
                                            width: 1.5em;
                                            height: 1.5em;
                                            margin: 10px 8px;
                                        }

                                        .icon:before,
                                        .icon:after {
                                            content: "";
                                            position: absolute;
                                        }

                                        .dropp {
                                            width: 100%;
                                            box-shadow: 0 1px 3px #0a0a0a;
                                        }

                                        .dropp-header {
                                            background: #242424;
                                            color: #fff;
                                            border-bottom: 2px solid #dd4040;
                                            -webkit-box-align: stretch;
                                            -moz-box-align: stretch;
                                            box-align: stretch;
                                            -webkit-align-items: stretch;
                                            -moz-align-items: stretch;
                                            -ms-align-items: stretch;
                                            -o-align-items: stretch;
                                            align-items: stretch;
                                            -ms-flex-align: stretch;
                                            display: -webkit-box;
                                            display: -moz-box;
                                            display: box;
                                            display: -webkit-flex;
                                            display: -moz-flex;
                                            display: -ms-flexbox;
                                            display: flex;
                                            -webkit-box-orient: horizontal;
                                            -moz-box-orient: horizontal;
                                            box-orient: horizontal;
                                            -webkit-box-direction: normal;
                                            -moz-box-direction: normal;
                                            box-direction: normal;
                                            -webkit-flex-direction: row;
                                            -moz-flex-direction: row;
                                            flex-direction: row;
                                            -ms-flex-direction: row;
                                            -webkit-box-pack: start;
                                            -moz-box-pack: start;
                                            box-pack: start;
                                            -webkit-justify-content: flex-start;
                                            -moz-justify-content: flex-start;
                                            -ms-justify-content: flex-start;
                                            -o-justify-content: flex-start;
                                            justify-content: flex-start;
                                            -ms-flex-pack: start;
                                        }

                                        .dropp-header__title {
                                            display: block;
                                            padding: 0.1em 0.5em;
                                            -webkit-box-flex: 8;
                                            -moz-box-flex: 8;
                                            box-flex: 8;
                                            -webkit-flex: 8;
                                            -moz-flex: 8;
                                            -ms-flex: 8;
                                            flex: 8;
                                            display: inline-block;
                                            max-width: 100%;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            white-space: nowrap;
                                            word-wrap: normal;
                                        }

                                        .dropp-header__btn {
                                            display: flex;
                                            background: #ffffff;
                                            color: #fff;
                                            /* padding: 0.8em 0.5em; */
                                            -webkit-box-flex: 1;
                                            -moz-box-flex: 1;
                                            box-flex: 1;
                                            -webkit-flex: 1;
                                            -moz-flex: 1;
                                            -ms-flex: 1;
                                            flex: 1;
                                            -webkit-transition: all 0.3s ease-in-out;
                                            -moz-transition: all 0.3s ease-in-out;
                                            transition: all 0.3s ease-in-out;
                                        }

                                        .dropp-header__btn .icon {
                                            -webkit-transform: rotate(-90deg);
                                            -moz-transform: rotate(-90deg);
                                            -ms-transform: rotate(-90deg);
                                            -o-transform: rotate(-90deg);
                                            transform: rotate(-90deg);
                                        }

                                        .dropp-header__btn .icon:before,
                                        .dropp-header__btn .icon:after {
                                            top: 30%;
                                            left: 25%;
                                            width: 50%;
                                            height: 15%;
                                            background: #444444;
                                            -webkit-transform: rotate(-45deg);
                                            -moz-transform: rotate(-45deg);
                                            -ms-transform: rotate(-45deg);
                                            -o-transform: rotate(-45deg);
                                            transform: rotate(-45deg);
                                        }

                                        .dropp-header__btn .icon:after {
                                            top: 55%;
                                            -webkit-transform: rotate(45deg);
                                            -moz-transform: rotate(45deg);
                                            -ms-transform: rotate(45deg);
                                            -o-transform: rotate(45deg);
                                            transform: rotate(45deg);
                                        }


                                        .dropp-header__btn.js-open .icon {
                                            -webkit-transform: rotate(90deg);
                                            -moz-transform: rotate(90deg);
                                            -ms-transform: rotate(90deg);
                                            -o-transform: rotate(90deg);
                                            transform: rotate(90deg);
                                        }

                                        .dropp-header__btn.js-open .icon:before,
                                        .dropp-header__btn.js-open .icon:after {
                                            background: rgb(7, 7, 7);
                                        }

                                        .dropp-header__btn:focus {
                                            outline: none;
                                        }

                                        .dropp-body {
                                            overflow: auto;
                                            width: 100%;
                                            max-height: 0;
                                            background: #292929;
                                            color: #fff;
                                            -webkit-transition: all 0.3s ease-in-out;
                                            -moz-transition: all 0.3s ease-in-out;
                                            transition: all 0.3s ease-in-out;
                                        }

                                        .dropp-body.js-open {
                                            max-height: 20em;
                                        }

                                        .dropp-body label {
                                            display: block;
                                            font-size: 0.875em;
                                            color: #fff;
                                            text-decoration: none;
                                            padding: 1em 0.5em;
                                            font-weight: 400;
                                            box-shadow: 0 -1px 0 #171717, inset 0 1px 0 #313131;
                                            cursor: pointer;
                                        }

                                        .dropp-body label:first-child {
                                            box-shadow: none;
                                        }

                                      

                                        .dropp-body label>input {
                                            display: none;
                                        }

                                        @media (max-width:991px) {
                                            .conrnt {
                                                height: auto;
                                            }
                                        }

                                    </style>
                                    
                                    <div class="products">
                                        <div class="pb-5">
                                            <div class="container px-2 ">

                                                <div class="row no-gutters">

                                                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 p-5 conrnt">

                                                        <div class="widget mercado-widget filter-widget brand-widget">
                                                            <div class="widget-content ">
                                                            <nav class="sidebar card py-2 mb-4">
                                                                <ul class="nav flex-column" id="nav_accordion">
                                                                    @foreach ($category as $cat)
                                                                    <li class="nav-item has-submenu">
                                                                        <a class="nav-link dropp-header__btn js-dropp-action" style="display: flex;padding: 0" href="#"><span
                                                                            class="dropp-header__title js-value text-uppercase">{{ $cat->cname }}</span> <i class="icon"></i></a>
                                                                        <ul class="submenu collapse ">
                                                                            <li class="li "><a
                                                                                href="/collections/gift-box-builder-gifts/box">All</a>
                                                                        </li>
                                                                        @foreach ($sub as $s)
                                                                            @if ($s->category_id == $cat->id)
                                                                                <li class="li"><a
                                                                                        href="/collections/gift-box-builder-gifts/{{ $s->sname }}">{{ $s->sname }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                        </ul>
                                                                    </li>
                                                                    @endforeach
                                                                    <li class="nav-item has-submenu">
                                                                        <a class="nav-link dropp-header__btn js-dropp-action" style="display: flex;padding: 0" href="#"><span
                                                                            class="dropp-header__title js-value text-uppercase">Brand</span> <i class="icon"></i></a>
                                                                        <ul class="submenu collapse ">
                                                                            <li class="li"><a
                                                                                href="/collections/gift-box-builder-gifts/box">All</a>
                                                                        </li>
                                                                        @foreach ($brand as $br)
                                                                        <li class="li"><a
                                                                                href="/collections/gift-box-builder-gifts/{{ $br->bname }}">{{ $br->bname }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                        </ul>
                                                                    </li>

                                                                    <li class="nav-item has-submenu">
                                                                        <a class="nav-link dropp-header__btn js-dropp-action" style="display: flex;padding: 0" href="#"><span
                                                                            class="dropp-header__title js-value text-uppercase">Color</span> <i class="icon"></i></a>
                                                                        <ul class="submenu collapse ">
                                                                            <li class="li "><a
                                                                                href="/collections/gift-box-builder-gifts/colors">All</a>
                                                                        </li>
                                                                        @foreach ($color as $col)
                                                                            <li class="li"><a
                                                                                    href="/collections/gift-box-builder-gifts/{{ $col->color }}">{{ $col->color }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                        </ul>
                                                                    </li>
                                                                </ul>

                                                              
                                                                </nav>
                                                            @if ($url == 'box')
                                                                <!--<span class="px-2 py-1 bg-gray-100 mr-2 text-xs"><a href="/collections/gift-box-builder-gifts/box" class="inline-flex items-center" title="Remove tag pink">All &nbsp;<span class="text-lg leading-tight">×</span></a></span>-->
                                                            @else
                                                                <!--<span class="px-2 py-1 bg-gray-100 mr-2 text-xs"><a href="/collections/gift-box-builder-gifts/box" class="inline-flex items-center" title="Remove tag pink">All &nbsp;<span class="text-lg leading-tight">×</span></a></span>-->
                                                            @endif
                                                            
                                                         
<script>
    document.addEventListener("DOMContentLoaded", function(){

document.querySelectorAll('.sidebar .nav-link').forEach(function(element){

    element.addEventListener('click', function (e) {

        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	

        if(nextEl) {
            e.preventDefault();	
            let mycollapse = new bootstrap.Collapse(nextEl);
console.log('sb',mycollapse._element.previousElementSibling.classList);
              if(nextEl.classList.contains('show')){
                console.log('nnew one');
                  mycollapse.hide();
                  
                
              } else {
                console.log(parentEl.firstElementChild.classList);
                  mycollapse.show();
                  // find other submenus with class=show
                  var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                  // if it exists, then close all of them
                  if(parentEl.firstElementChild.classList[3] =='js-open'){
                   $('.js-dropp-action').removeClass('js-open') 
                  }
                  else{
                   
                    parentEl.firstElementChild.classList.add('js-open')
                  }
                 
                if(opened_submenu){
                    console.log('nnew');
                    if(parentEl.firstElementChild.classList[3] =='js-open'){
                   $('.js-dropp-action').removeClass('js-open') 
                   parentEl.firstElementChild.classList.add('js-open')
                  }
                  else{
                   
                    parentEl.firstElementChild.classList.add('js-open')
                  }
                    new bootstrap.Collapse(opened_submenu);
                }

              }
          }

    });
})

}); 
 
</script>
                                                   
                                                            </div>
                                                            <div
                                                                class="widget mercado-widget filter-widget brand-widget">

                                                                <h2 class="widget-title">Sort</h2>
                                                                <div class="widget-content">
                                                                    <ul class="list-style vertical-list list-limited"
                                                                        data-show="6">

                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=price-ascending' }}">

                                                                                Price: Low to High

                                                                            </a></li>
                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=price-descending' }} ">

                                                                                Price: High to Low

                                                                            </a></li>

                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=title-ascending' }}">

                                                                                A-Z

                                                                            </a></li>
                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=title-descending' }}">

                                                                                Z-A

                                                                            </a></li>
                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=created-ascending' }}">

                                                                                Oldest to Newest

                                                                            </a></li>
                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=created-descending' }}">

                                                                                Newest to Oldest
                                                                            </a></li>
                                                                        <li><a class="dropdown-item "
                                                                                href="{{ URL::current() . '?sort=best-selling' }}">

                                                                                Best Selling

                                                                            </a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <style>
                                                            .img-zoom-container {
                                                                position: relative;
                                                            }

                                                            .img-zoom-lens {
                                                                position: absolute;
                                                                border: 1px solid #d4d4d4;
                                                                /*set the size of the lens:*/
                                                                width: 40px;
                                                                height: 40px;
                                                            }

                                                            .img-zoom-result {
                                                                border: 1px solid #d4d4d4;
                                                                /*set the size of the result div:*/
                                                                width: 300px;
                                                                height: 300px;
                                                            }

                                                        </style>
                                                    </div>
                                                    <div class="row col-md-9">

                                                        @foreach ($products as $product)
                                                            <div class="col-6 col-lg-4 px-2 px-lg-4">
                                                                <div class="product">
                                                                    <div class="m-0">
                                                                        <a data-toggle="modal"
                                                                            href="#{{ $product->id }}"
                                                                            id="{{ $product->id }}model" class="product">
                                                                            <div class="image curev">
                                                                                <div class="mb-2">
                                                                                    <div class="card">
                                                                                        <div class="card-img">
                                                                                            <div
                                                                                                class="bg-light">
                                                                                                <div
                                                                                                    class="embed-responsive embed-responsive-1by1">
                                                                                                    <div
                                                                                                        class="embed-responsive-item">
                                                                                                        <img class="w-100"
                                                                                                            src="{{ asset('upload') }}/{{ $product->pimage }}"
                                                                                                            alt="{{ $product->name }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hover">
                                                                                            <div
                                                                                                class="card-img-overlay py-2 px-0">
                                                                                                <div
                                                                                                    class="d-flex flex-column justify-content-end h-100">
                                                                                                    <button
                                                                                                        class="btn btn-block btn-outline-primary">
                                                                                                        Add to box
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="caption">
                                                                                <div class="pb-4">
                                                                                    <div class="vendor">
                                                                                        <div class="text-center">
                                                                                            <h6 class="m-0">
                                                                                                {{ $product->name }}
                                                                                            </h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="title">
                                                                                        <div class="text-center">
                                                                                            {{ $product->short_description }}
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="price">
                                                                                        <div class="text-center">
                                                                                            @if ($product->discount == '0')
                                                                                                LKR
                                                                                                {{ $product->regular_price }}
                                                                                            @else
                                                                                                <div>
                                                                                                    <p
                                                                                                        style="-webkit-text-decoration-line: line-through; text-decoration-line: line-through; ">
                                                                                                        LKR
                                                                                                        {{ $product->regular_price }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        style="color: red">
                                                                                                        LKR
                                                                                                        {{ $product->discountprice }}
                                                                                                    </p>

                                                                                                </div>
                                                                                            @endif




                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="pagination" style="margin: 112px 0">

                                        <div class="container">

                                            <div class="row">

                                                <div class="col">

                                                    <div class="text-center mb-5">

                                                        <!-- <span class="page current">1</span> <span class="page"><a href="/collections/gift-box-builder-gifts?page=2" title="">2</a></span> <span class="page"><a href="/collections/gift-box-builder-gifts?page=3" title="">3</a></span> <span class="deco">…</span> <span class="page"><a href="/collections/gift-box-builder-gifts?page=44" title="">44</a></span> <span class="next"><a href="/collections/gift-box-builder-gifts?page=2" title="">Next »</a></span> -->

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="footer fixed-bottom position-sticky border-bottom border-dark">
                                        <div class="bg-secondary">
                                            <div class="container-fluid p-0">
                                                <div class="row no-gutters">
                                                    <div class="col-auto mr-auto p-2">
                                                        <a class="btn btn-outline-primary px-6" data-slide-to="0"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            ← Back
                                                        </a>
                                                    </div>
                                                    <div class="col-auto ml-auto p-2">
                                                        <a id="link-gifts-next"
                                                            class="btn btn-primary border-0 px-6  disabled"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            Next →
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- 3 step -->
                        <div class="carousel-item">
                            <div class="container mb-4 px-lg-4">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full">
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="0"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="0">
                                                    Box
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="1"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="1">
                                                    Gifts
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-black rounded-full">
                                                    <p class="text-black text-lg">3</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-bold font-serif">
                                                Card
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">4</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Sticker
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">5</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Gift voucher
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">6</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Review
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card border-0">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                3. Include a personal note (Optional )
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">
                                                            <p>
                                                                It’s all in the details. Select from our catalog of
                                                                luxurious designs to find the perfect card for any
                                                                occasion. We’ll print your message with care to keep
                                                                your gifts personal. If you choose not to include a
                                                                card, we can still add a To: and From: tag. Just leave
                                                                us a note letting us know you want one.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="pb-3 mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                        <div class="m-auto d-flex justify-content-center">
                                                            <div class="dropdown">

                                                                <a class="text-muted d-block py-2"
                                                                    data-toggle="dropdown" href="#"
                                                                    style="font-size:20px">

                                                                    Filter Your Card

                                                                    <i class="fas fa-angle-down"></i>

                                                                </a>


                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a style="font-size: 15px;"
                                                                        class="dropdown-item p-3"
                                                                        href="/collections/gift-box-builder-gifts/box">All</a>
                                                                    @foreach ($cardcategory as $catcerycard)
                                                                        <a style="font-size: 15px;"
                                                                            class="dropdown-item p-3"
                                                                            href="/collections/gift-box-builder-gifts/card?filter={{ $catcerycard->id }}">{{ $catcerycard->category }}</a>
                                                                    @endforeach

                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="pb-5">
                                            <form action="/cart/add" method="post" name="card">
                                                <div class="container px-2">
                                                    <div class="row no-gutters">
                                                        <div class="row col-md-12">
                                                            @foreach ($card as $car)
                                                                <div class="col-4 px-2 px-lg-4 m-auto" style=""
                                                                    onclick="cardview({{ $car }})">
                                                                    <input class="d-none" type="radio"
                                                                        name="id" value="{{ $car->id }}"
                                                                        id="card{{ $car->id }}">
                                                                    <label for="card{{ $car->id }}">
                                                                        <div class="product">
                                                                            <div class="m-0">
                                                                                <div class="image image1 col-md-12">
                                                                                    <div class="mb-3">
                                                                                        <img class="w-100"
                                                                                            src="{{ asset('upload') }}/{{ $car->image }}"
                                                                                            alt="{{ $car->name }}">
                                                                                    </div>
                                                                                    <div class="middle">
                                                                                        <div class="text1">
                                                                                            SELECT</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="caption">
                                                                                    <div class="pb-3 mb-3">
                                                                                        <div class="vendor">
                                                                                            <div
                                                                                                class="text-center">
                                                                                                <h6
                                                                                                    class="m-0">
                                                                                                    {{ $car->name }}
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="title">
                                                                                            <div
                                                                                                class="text-center">
                                                                                                {{ $car->title }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="price">
                                                                                            <div
                                                                                                class="text-center">

                                                                                                LKR {{ $car->price }}


                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer fixed-bottom position-sticky border-bottom border-dark">
                                        <div class="bg-secondary">
                                            <div class="container-fluid p-0">
                                                <div class="row no-gutters">
                                                    <div class="col-auto mr-auto p-2">
                                                        <a class="btn btn-outline-primary px-6 " data-slide-to="1"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            ← Back
                                                        </a>
                                                    </div>
                                                    <div class="col-auto ml-auto p-2">
                                                        <a id="link-cards-next" class="btn btn-primary border-0 px-6 "
                                                            data-slide-to="3" href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            Skip →
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- 4 step -->
                        <div class="carousel-item">
                            <div class="container mb-4 px-lg-4">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full font-serif">
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="0"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="0">
                                                    Box
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="1"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="1">
                                                    Gifts
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="2"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="2">
                                                    Card
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-black rounded-full">
                                                    <p class="text-black text-lg">4</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-bold font-serif">
                                                Sticker
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">5</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Gift voucher
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">6</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Review
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="sticker">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                4. Add a free sticker?
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">
                                                            <p>
                                                                The perfect, personal finishing touch - and in this
                                                                case, it’s a free sticker in chic gold foil for extra
                                                                decoration. Pick one, and we’ll add as the final step in
                                                                the gift wrapping process.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="pb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="pb-5">
                                            <form action="/cart/add" method="post" name="sticker">
                                                <div class="container px-2">
                                                    <div class="row no-gutters col-md-12">


                                                        @foreach ($sticker as $stick)
                                                            <div class="col-6 col-lg-3 px-2 px-lg-4 m-auto"
                                                                onclick="stickerview({{ $stick }})">
                                                                <input class="d-none" type="radio" name="id"
                                                                    value="{{ $stick->id }}"
                                                                    id="sticker{{ $stick->id }}">
                                                                <label for="sticker{{ $stick->id }}">
                                                                    <div class="product">
                                                                        <div class="pb-3 mb-3">
                                                                            <div class="image1 image col-md-12">
                                                                                <div class="mb-3">
                                                                                    <img class="w-100"
                                                                                        src="{{ asset('upload') }}/{{ $stick->image }}"
                                                                                        alt="{{ $stick->name }}">
                                                                                </div>
                                                                                <div class="middle">
                                                                                    <div class="text1">SELECT
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vendor">
                                                                                <div class="text-center">
                                                                                    <h6 class="m-0">
                                                                                        {{ $stick->name }}
                                                                                    </h6>
                                                                                </div>
                                                                            </div>
                                                                            <div class="title">
                                                                                <div class="text-center">
                                                                                    {{ $stick->title }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        @endforeach



                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer fixed-bottom position-sticky border-bottom border-dark">
                                        <div class="bg-secondary">
                                            <div class="container-fluid p-0">
                                                <div class="row no-gutters">
                                                    <div class="col-auto mr-auto p-2">
                                                        <a class="btn btn-outline-primary px-6 " data-slide-to="2"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            ← Back
                                                        </a>
                                                    </div>
                                                    <div class="col-auto ml-auto p-2">
                                                        <a id="link-stickers-next"
                                                            class="btn btn-primary border-0 px-6 "
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;"
                                                            data-slide-to="4" href="#builder">
                                                            Skip →
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- 5 step -->
                        <div class="carousel-item">
                            <div class="container mb-4 px-lg-4">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full">
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="0"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="0">
                                                    Box
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="1"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="1">
                                                    Gifts
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="2"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="2">
                                                    Card
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="3"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="3">
                                                    Sticker
                                                </a>
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">5</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-bold font-serif">
                                                Gift voucher
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-gray-500 rounded-full">
                                                    <p class="text-gray-500 text-sm">6</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-serif">
                                                Review
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="card border-0">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                5. Add your Gift voucher (Optional )
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="pb-3 mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="pb-5">
                                            <form action="/cart/add" method="post" name="voucher">
                                                <div class="container px-2">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-12 row">
                                                            @foreach ($voucher as $vo)
                                                                <div class="col-4 px-2 px-lg-4 m-auto" style=""
                                                                    onclick="voucherview({{ $vo }})">
                                                                    <input class="d-none" type="radio"
                                                                        name="id" value="{{ $vo->id }}"
                                                                        id="voucher{{ $vo->id }}">
                                                                    <label for="voucher{{ $vo->id }}">
                                                                        <div class="product">
                                                                            <div class="m-0">
                                                                                <div class="image image1 col-12">
                                                                                    <div class="mb-3">
                                                                                        <img class="w-100"
                                                                                            src="{{ asset('upload') }}/{{ $vo->image }}"
                                                                                            alt="{{ $vo->name }}">
                                                                                    </div>
                                                                                    <div class="middle">
                                                                                        <div class="text1">
                                                                                            SELECT</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="caption">
                                                                                    <div class="pb-3 mb-3">
                                                                                        <div class="vendor">
                                                                                            <div
                                                                                                class="text-center">
                                                                                                <h6
                                                                                                    class="m-0">
                                                                                                    {{ $vo->name }}
                                                                                                </h6>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="title">
                                                                                            <div
                                                                                                class="text-center">
                                                                                                {{ $vo->title }}
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="footer fixed-bottom position-sticky border-bottom border-dark">
                                        <div class="bg-secondary">
                                            <div class="container-fluid p-0">
                                                <div class="row no-gutters">
                                                    <div class="col-auto mr-auto p-2">
                                                        <a class="btn btn-outline-primary px-6 " data-slide-to="3"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            ← Back
                                                        </a>
                                                    </div>
                                                    <div class="col-auto ml-auto p-2">
                                                        <a id="link-voucher-next"
                                                            class="btn btn-primary border-0 px-6 " data-slide-to="5"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            Skip →
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- 5 step -->
                        <div class="carousel-item">
                            <div class="container mb-4 px-lg-4">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full font-serif">
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="0"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="0">
                                                    Box
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="1"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="1">
                                                    Gifts
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="2"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="2">
                                                    Card
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="3"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="3">
                                                    Sticker
                                                </a>
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="4"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="4">
                                                    Gift voucher
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <span
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-white border-2 border-black rounded-full">
                                                    <p class="text-black text-lg">6</p>
                                                </span>
                                            </div>
                                            <div
                                                class="relative mt-2 flex justify-center w-full text-black text-sm lg:text-base font-bold font-serif">
                                                Review
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="review">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                5. Review your box
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">
                                                            <p>
                                                                Review your box below. Please allow 1-2 business days
                                                                for processing
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview" style="margin-bottom: 400px;">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div id="preview-review" style="font-size: 15px;font-weight: 700;">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer fixed-bottom position-sticky border-bottom border-dark">
                                        <div class="bg-secondary">
                                            <div class="container-fluid p-0">
                                                <div class="row no-gutters">
                                                    <div class="col-auto mr-auto p-2">
                                                        <a class="btn btn-outline-primary px-6 " data-slide-to="4"
                                                            href="#builder"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;font-size: 20px;">
                                                            ← Back
                                                        </a>
                                                    </div>
                                                    {{-- @if ($user == '')
                                                    <div class="col-auto ml-auto p-2">
                                                        <a class="btn btn-primary border-0 px-6 " href="/login" id="complete" style="padding-top: 19px;height: 50px;font-size: 20px;font-size: 20px;">
                                                           Login
                                                        </a>
                                                    </div>
                                                    @else --}}
                                                    <div class="col-auto ml-auto p-2">
                                                        <a class="btn btn-primary border-0 px-6 " data-slide-to="6"
                                                            href="#builder" id="complete"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;font-size: 20px;">
                                                            Finish →
                                                        </a>
                                                    </div>
                                                    {{-- @endif --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end -->

                        <!-- 6 step -->
                        <div class="carousel-item">
                            <div class="container mb-4 px-lg-4">
                                <nav class="builder-steps">
                                    <ul class="flex items-center w-full">
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder">
                                                    Box
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder">
                                                    Gifts
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder">
                                                    Card
                                                </a>
                                            </div>
                                        </li>

                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder">
                                                    Sticker
                                                </a>
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder" data-slide-to="4"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder" data-slide-to="4">
                                                    Gift voucher
                                                </a>
                                            </div>
                                        </li>
                                        <li class="w-full">
                                            <!-- Completed step -->
                                            <div class="relative flex justify-center w-full">
                                                <div class="absolute inset-0 flex items-center">
                                                    <div class="h-0.5 w-full bg-gray-200"></div>
                                                </div>
                                                <a href="#builder"
                                                    class="relative w-7 h-7 lg:w-9 lg:h-9 flex items-center justify-center bg-brand-pink rounded-full focus:outline-none transition ease-in-out duration-150">
                                                    <svg class="w-4 h-4 text-black" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div
                                                class="relative flex justify-center w-full mt-2 text-gray-500 text-sm lg:text-base font-serif">
                                                <a href="#builder">
                                                    Review
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="summary">
                                <div class="m-0">
                                    <div class="header">
                                        <div class="container px-2">
                                            <div class="row no-gutters">
                                                <div class="col-lg-6 px-2 px-lg-4">
                                                    <div class="subtitle">
                                                        <div class="mb-3">
                                                            <em>
                                                                Gift Box Builder
                                                            </em>
                                                        </div>
                                                    </div>
                                                    <div class="title">
                                                        <div class="mb-3">
                                                            <h1>
                                                                Your gift box is ready!
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <div class="pb-3">
                                                            <p>
                                                                Below is a summary of your selection. View your cart and
                                                                checkout, or keep shopping. We can deliver your box to
                                                                you, or directly to the lucky recipient. Simply enter
                                                                shipping address during checkout. </p>
                                                            <p> PLEASE NOTE: If you are shipping multiple boxes to
                                                                multiple locations, you will need to create a separate
                                                                order for each gift box. We will not include an itemized
                                                                reciept with your order if it's being shipped directly
                                                                to your recipient. </p>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="pb-3 mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container px-2">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <div class="summary">
                                                    <div id="summary">
                                                        <div class="mb-5">
                                                            <div class="pb-3">
                                                                <div class="row no-gutters">
                                                                    <div class="col-lg-6 px-2 px-lg-4">
                                                                        <div class="mb-3">
                                                                            <div
                                                                                class="embed-responsive embed-responsive-1by1">
                                                                                <div class="embed-responsive-item"><img
                                                                                        class="w-100"
                                                                                        src="//cdn.shopify.com/s/files/1/0780/6461/products/BlackConfetti.jpg?v=1605554434">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 px-lg-3">
                                                                        <div class="row no-gutters">
                                                                            <div class="col px-2">
                                                                                <div class="mb-3">
                                                                                    <h3 class="display-3">Box
                                                                                        Contents : </h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <div class="row no-gutters">
                                                                                <div class="col">
                                                                                    <div class="row no-gutters">
                                                                                        <div class="col-auto px-2">1
                                                                                        </div>
                                                                                        <div class="col px-2">
                                                                                            BELLE &amp; BLUSH GIFT BAR |
                                                                                            Black Confetti</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-auto px-2">$5.00</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row no-gutters">
                                                            <div class="col px-2 px-lg-4">
                                                                <div class="py-2"
                                                                    style="text-align: right; font-weight: bold;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .act::before {
                                            content: none;
                                        }

                                        .act::after {
                                            content: none;
                                        }

                                    </style>
                                    <div class="footer">
                                        <div class="mb-5">
                                            <div class="container px-2">
                                                <div class="row justify-content-between no-gutters act">
                                                    <div class="col-auto px-2 px-lg-4">
                                                        <a class="btn btn-primary  "
                                                            href="/collections/gift-box-builder-gifts/box"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            Keep shopping
                                                        </a>
                                                    </div>
                                                    <div class="col-auto px-2 px-lg-4">
                                                        <a class="btn btn-primary  " href="/cart"
                                                            style="padding-top: 19px;height: 50px;font-size: 20px;">
                                                            View cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ens -->
                    </div>
                </div>
            </div>
            <div class="modal fade" data-backdrop="static" id="card">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content bg-transparent border-0">
                        <div class="modal-body">
                            <a href="#builder" data-dismiss="modal" id="cardpre" style="font-size: 1.5rem;">×</a>
                            <form action="/cart/add" name="message" method="post">
                                <div class="container px-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="title">
                                                        <div class="mb-5">
                                                            <h1>
                                                                Write your card message
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-black-50 display-4" for="to">
                                                            To
                                                        </label>
                                                        <input class="form-control bg-transparent border-0 px-0"
                                                            type="text" name="to" id="to">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-black-50 display-4" for="from">
                                                            From
                                                        </label>
                                                        <input class="form-control bg-transparent border-0 px-0"
                                                            type="text" name="from" id="from">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-black-50 display-4" for="message">
                                                            Card Message ( 350 characters max, please )
                                                        </label>
                                                        <textarea class="form-control bg-transparent border-0 px-0" name="message" rows="8" maxlength="350"
                                                            id="message"></textarea>

                                                    </div>
                                                    <style>
                                                        .font-select {
                                                            width: 100%;
                                                        }

                                                    </style>
                                                    <div class="form-group">
                                                        <label class="text-black-50 display-4 col-md-12" for="message">
                                                            Font
                                                        </label>
                                                        <input id="font1" type="text"
                                                            class="form-control bg-transparent border-0 px-0 col-md-12">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col px-2 px-lg-4">
                                                    <div class="rule">
                                                        <div class="mb-3">


                                                            <hr class="border-bottom border-dark border-top m-0">
                                                            <hr class="border-bottom border-white border-top m-0">
                                                            <hr class="border-dark m-0">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6 m-auto"
                                            style="font-size: 22px;background-size: contain;background-repeat: no-repeat"
                                            id="cardprev">
                                            <div class=" no-gutters" style="margin: 123px 25px">
                                                <div class="resizeme" style="text-align: center;font-size: 19px">
                                                    <svg width="100%" height="100%" viewBox="0 0 500 600"
                                                        preserveAspectRatio="xMinYMin meet">
                                                        <foreignObject width="100%" height="100%"
                                                            xmlns="http://www.w3.org/1999/xhtml">
                                                            <div xmlns="http://www.w3.org/1999/xhtml">
                                                                <div class="col px-2 px-lg-4">
                                                                    <div class="">
                                                                        <div class="previewto prev" style="text-align: center;padding:0px 13px">
                                                                        </div>
                                                                       
                                                                    </div>
                                                                  

                                                                    <div class="" style="margin: 50px 0">

                                                                        <div class=" previewmessage prev">

                                                                        </div>
                                                                    </div>
                                                                    <div class="">

                                                                        <div class=" previewfrom prev" style="text-align: center;padding:0px 13px">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </foreignObject>

                                                    </svg>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn"
                                    style="background-color: green;color: white;font-size: 15px;padding: 10px;"
                                    onclick="savemessage(1)">NEXT</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <style>
                .pick-card-modal {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: 0;
                    padding: 20px;
                    width: 100%;
                    height: 100%;
                    justify-content: center;
                    align-items: center;
                    background-color: rgba(0, 0, 0, .4);
                    overflow: auto;
                    z-index: 9999;
                }

                .pick-card-modal .pick-card-wrapper {
                    margin: auto;
                    padding: 20px;
                    max-width: 1180px;
                    text-align: center;
                    background-color: #fff;
                    border-radius: 10px;
                }

                #card-options .card-wrapper {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: nowrap;
                    justify-content: flex-start;
                    align-items: flex-start;
                    align-content: flex-start;
                }

                #card-options .card-options .card-options-list {
                    display: block;
                    margin: -10px;
                    padding: 0;
                    font-size: 0;
                    list-style: none;
                    text-align: left;
                }

                #card-options .card-options .card-options-list li {
                    display: inline-block;
                    margin: 0;
                    padding: 10px;
                    width: 25%;
                    font-size: 14px;
                    text-align: center;
                    vertical-align: top;
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                }

                #card-options .card-options a {
                    display: block;
                    margin: 0 auto;
                    text-decoration: none;
                }

                #card-options .card-options .card-image .selected-icon {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    font-size: 36px;
                    color: #36c069;
                    opacity: 0;
                    -webkit-transform: scale(0) translate(-50%, -50%);
                    -moz-transform: scale(0) translate(-50%, -50%);
                    transform: scale(0) translate(-50%, -50%);
                    -webkit-transition: all .25s ease;
                    -moz-transition: all .25s ease;
                    -ms-transition: all .25s ease;
                    -o-transition: all .25s ease;
                    transition: all .25s ease;
                    pointer-events: none;
                    z-index: 301;
                    background: #fff;
                    border-radius: 50%;
                }

                #card-options .card-options .card-title {
                    margin-top: 10px;
                    font-weight: 700;
                }

                .activeimg {
                    display: block;
                }

                .show1 {
                    display: flex !important;
                }

            </style>


            @foreach ($products as $pro)
                <div class="modal fade" id="{{ $pro->id }}modeltask">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <a href="#builder" data-dismiss="modal" id="{{ $pro->id }}dismiss"
                                        style="font-size: 1.5rem;">×</a>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="images">
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="d-none d-lg-block col-lg-2">
                                                            <div class="py-lg-5">
                                                                <ul class="nav flex-column">

                                                                    <?php

                                                                $image = $pro->images;
                                                                $depimageb = explode('|', $image);
                                                                for ($i = 0; $i < count($depimageb); $i++) {
                                                                    $img = $depimageb[$i]
                                                                ?>


                                                                    <li class="nav-item">
                                                                        <a class="nav-link {{ $pro->id }}<?php echo $i; ?>"
                                                                            data-slide-to="<?php echo $i; ?>"
                                                                            href="#{{ $pro->id }}<?php echo $i; ?>">
                                                                            <img class="w-100"
                                                                                src="{{ asset('upload') }}/<?php echo $img; ?>">
                                                                        </a>
                                                                    </li>

                                                                    <script>
                                                                        $('.{{ $pro->id }}<?php echo $i; ?>').click(function() {
                                                                            if (!$(this).hasClass("activeimg")) {
                                                                                $(".activeimg").removeClass("activeimg");
                                                                                $(this).addClass("activeimg");
                                                                                if ($(this).hasClass('activeimg')) {
                                                                                    $('.{{ $pro->id }}<?php echo $i; ?>img').addClass('activeimg')
                                                                                }
                                                                            } else {
                                                                                return false; //this prevents flicker
                                                                            }
                                                                        })
                                                                        $('.{{ $pro->id }}').click(function() {
                                                                            if (!$(this).hasClass("activeimg")) {
                                                                                $(".activeimg").removeClass("activeimg");
                                                                                $(this).addClass("activeimg");
                                                                                if ($(this).hasClass('activeimg')) {
                                                                                    $('.{{ $pro->id }}img').addClass('activeimg')
                                                                                }
                                                                            } else {
                                                                                return false;
                                                                            }

                                                                        })
                                                                    </script>
                                                                    

                                                                    <?php } ?>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10">
                                                            <div class="carousel slide" data-interval="0"
                                                                id="{{ $pro->id }}0">
                                                                <ol class="carousel-indicators d-lg-none mb-0">
                                                                    <li data-slide-to="<?php echo $i; ?>"
                                                                        data-target="#{{ $pro->id }}"></li>
                                                                    <?php
                                                                for ($i = 0; $i < count($depimageb); $i++) {
                                                                    $img = $depimageb[$i]
                                                                ?>
                                                                    <li data-slide-to="<?php echo $i; ?>"
                                                                        data-target="#{{ $pro->id }}<?php echo $i; ?>">
                                                                    </li>
                                                                    <?php } ?>
                                                                </ol>
                                                                <div class="carousel-inner">

                                                                    <?php
                                                                if($depimageb == '' || $depimageb==null){
                                                                    ?>
                                                                    <div class="carousel-item {{ $pro->id }}img"
                                                                        id="{{ $pro->id }}">
                                                                        <img class="imgproduc"
                                                                            src="{{ asset('upload') }}/{{ $pro->images }}">
                                                                    </div>
                                                                    <?php }
                                                               else{
                                                                for ($i = 0; $i < count($depimageb); $i++) {
                                                                    $img = $depimageb[$i]
                                                                ?>
                                                                
                                                                    <div class="carousel-item {{ $pro->id }}<?php echo $i; ?>img"
                                                                        id="{{ $pro->id }}<?php echo $i; ?>">
                                                                        <img class="imgproduc"
                                                                            src="{{ asset('upload') }}/<?php echo $img; ?>">
                                                                    </div>
                                                                    <?php } }?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="title">
                                                <div class="m-0">
                                                    <h1 class="m-0">
                                                        <div class="text-capitalize mb-3">
                                                            {{ $pro->name }}
                                                        </div>

                                                    </h1>
                                                </div>
                                            </div>
                                            <form action="/cart/add" method="post" name="{{ $pro->id }}"
                                                id="{{ $pro->id }}form">


                                                <input class="d-none" type="radio" name="id"
                                                    value="{{ $pro->id }}" id="{{ $pro->id }}" checked="">
                                                <div class="variant">
                                                    <div class="price">
                                                        <div class="m-0">
                                                            @if ($pro->discount == '0')
                                                                <p style="font-weight: bold;font-size: 21px;">
                                                                    LKR {{ $pro->regular_price }}
                                                                </p>
                                                            @else
                                                                <div>
                                                                    <p
                                                                        style="-webkit-text-decoration-line: line-through; text-decoration-line: line-through;font-weight: bold;font-size: 21px; ">
                                                                        LKR {{ $pro->regular_price }}</p>
                                                                    <p
                                                                        style="color: red;font-weight: bold;font-size: 21px;">
                                                                        LKR {{ $pro->discountprice }}</p>

                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="rule">
                                                        <div class="mb-3">
                                                            <hr class="border-bottom border-dark border-top m-0">
                                                        </div>
                                                    </div>

                                                    <div class="button">
                                                        <div class="mb-2">
                                                            @if ($pro->quantity == '0' || $pro->stock_status == 'outofstock')
                                                                <div class="btn btn-block  py-2 px-4"
                                                                    style="color: rgb(247, 25, 25);border: 1px solid red">
                                                                    Outofstock</div>
                                                            @else
                                                                <button
                                                                    class="btn btn-block btn-primary rounded-0 border-0 py-2 px-4"
                                                                    type="submit">

                                                                    Add to box

                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <div class="promotion">
                                                <div class="text-center mb-2">
                                                    <svg class="d-inline-block mr-2" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 15.38 10" fill="#888" height="10">
                                                        <path
                                                            d="M15.23,4.94v0h0l-.3-1.53h0l-.15-.78a1.37,1.37,0,0,0-1.3-1.06H10.38A1.21,1.21,0,0,0,10,1.6V1.15A1.16,1.16,0,0,0,8.85,0H1.15A1.16,1.16,0,0,0,0,1.15V7.31A1.16,1.16,0,0,0,1.15,8.46H2.31a1.54,1.54,0,1,0,3.07,0H9.3a1.15,1.15,0,0,0,1.08.77H11a1.53,1.53,0,0,0,2.66,0h.59a1.15,1.15,0,0,0,1.15-1.15V6.54a10.7,10.7,0,0,0-.15-1.6Zm-.85-.32H12.31V3.85h1.91ZM3.85,9.23a.77.77,0,0,1,0-1.54.77.77,0,0,1,0,1.54ZM5.18,7.69a1.54,1.54,0,0,0-2.67,0H1.15a.38.38,0,0,1-.38-.38V1.15A.38.38,0,0,1,1.15.77h7.7a.38.38,0,0,1,.38.38V7.69Zm7.13,1.54a.77.77,0,1,1,0-1.54.77.77,0,0,1,0,1.54Zm1.92-.77h-.38a1.54,1.54,0,1,0-3.08,0h-.39A.38.38,0,0,1,10,8.08V2.69a.38.38,0,0,1,.38-.38h3.08a.59.59,0,0,1,.54.44l.07.33H11.92a.38.38,0,0,0-.38.38V5a.39.39,0,0,0,.38.39h2.6c0,.24.06.51.08.76h-.37a.39.39,0,0,0-.38.39.38.38,0,0,0,.38.38h.39V8.08A.39.39,0,0,1,14.23,8.46Z">
                                                        </path>
                                                    </svg>
                                                    <em style="font-size : 10px; font-weight : 400;">
                                                        Free US shipping on orders over $100
                                                    </em>
                                                </div>
                                            </div>
                                            <div class="rule">
                                                <div class="mb-3">
                                                    <hr class="border-dark m-0">
                                                </div>
                                            </div>
                                            <div class="">

                                                <style>
                                                    .description h5:before {

                                                        content: '- ';

                                                    }

                                                    .description .collapsed h5:before {

                                                        content: '+ ';

                                                    }

                                                </style>
                                                <div id="barefoot-dreams-cozychic-lamb-buddie-description">
                                                    <?php
                                                $heading = $pro->heading;
                                                $des = $pro->description;
                                                $depheading = explode('|', $heading);
                                                $depdes = explode('|', $des);

                                                if ($heading == null) {
                                                    echo $heading;
                                                } else {
                                                    for ($i = 0; $i < count($depheading); $i++) {
                                                ?>
                                                    <a class="" data-toggle="collapse"
                                                        href="#<?php echo $depheading[$i]; ?>view">

                                                        <h5><?php echo $depheading[$i]; ?></h5>


                                                    </a>
                                                    <div class="collapse show"
                                                        data-parent="#barefoot-dreams-cozychic-lamb-buddie-description"
                                                        id="<?php echo $depheading[$i]; ?>view">
                                                        <p><?php echo $depdes[$i]; ?></p>
                                                    </div>

                                                    <?php  }
                                                } ?>

                                                    <!-- <a class="" data-toggle="collapse" href="#barefoot-dreams-cozychic-lamb-buddie-details">

                                                    <h5>Details</h5>


                                                </a>
                                                <div class="collapse show" data-parent="#barefoot-dreams-cozychic-lamb-buddie-description" id="barefoot-dreams-cozychic-lamb-buddie-details">
                                                    <p>Made from CozyChic fabrication, this cuddly lamb is the perfect companion for your growing little one to cozy up with for years to come!</p>
                                                </div> -->


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    document
                        .getElementById('{{ $pro->id }}form')
                        .addEventListener(
                            'submit',
                            function(event) {

                                event.preventDefault();
                                // console.log(event, this);
                                //state.gifts.push( event.target.id.value );

                                // console.log(data.gifts[event.target.id.value]);
                                if (state.gifts.length >= 5) {
                                    $('.modl4').removeClass('vi')
                                    $('.modl4').addClass('boxfox-modal')
                                    $('.modl4').addClass('visible')
                                } else {

                                    if (state.gifts.length == 0) {

                                        state.gifts.push(data.gifts[event.target.id.value]);
                                        store(state);
                                        render(state);
                                        addGiftsToCart();
                                        if (data.gifts[event.target.id.value].discount == '0') {
                                            loadtotal(data.gifts[event.target.id.value].price);
                                        } else {
                                            loadtotal(data.gifts[event.target.id.value].discountprice);
                                        }

                                    } else {
                                        // let obj =  state.gifts.find(o => o.id === 7);
                                        let a = Object.values(state.gifts).find((obj) => {
                                            return obj.id == data.gifts[event.target.id.value].id
                                        });
                                        if (!a) {

                                            state.gifts.push(data.gifts[event.target.id.value]);
                                            store(state);
                                            render(state);
                                            addGiftsToCart();
                                            if (data.gifts[event.target.id.value].discount == '0') {
                                                loadtotal(data.gifts[event.target.id.value].price);
                                            } else {
                                                loadtotal(data.gifts[event.target.id.value].discountprice);
                                            }


                                        } else {
                                            $('.modl3').removeClass('vi')
                                            $('.modl3').addClass('boxfox-modal')
                                            $('.modl3').addClass('visible');
                                            sessionStorage.setItem('tegetid', event.target.id.value);
                                        }
                                    }
                                }

                                $('#{{ $pro->id }}modeltask').removeClass('show');
                                $('.modal-backdrop').removeClass('modal-backdrop');
                                $('#link-gifts-next').removeClass("show");
                            }
                        );
                </script>

                <script>
                    document
                        .getElementById('{{ $pro->id }}model')
                        .addEventListener(
                            'click',
                            function(event) {

                                $('.activeimg').removeClass('activeimg');
                                $('.{{ $pro->id }}0img').addClass('activeimg');
                                $('#{{ $pro->id }}modeltask').addClass('show');
                                $('.imgproduc').addClass('big_img');
                                $('.big_img').imagezoomsl({
                        zoomrange: [3, 3]
                    })

                            }
                        );
            
                    document.getElementById('{{ $pro->id }}dismiss')
                        .addEventListener(
                            'click',
                            function(event) {

                                $('.modal-backdrop').removeClass('modal-backdrop');
                                $('#{{ $pro->id }}modeltask').removeClass('show');
                                $('.big_img').removeClass()

                            } 
                        );

                    $('.cansel').click(function() {
                        $('#voucher').modal('hide');

                    })
                </script>
            @endforeach
            <div class="modl1 vi">
                <div class="modal-dialog alert">
                    <div class="modal-dialog-header">You can type 350 characters. </div>
                    <div class="modal-dialog-content">Chracters Limited</div>
                    <div class="modal-dialog-actions">
                        <button class="btn btn-dark okwarnbing" type="button"
                            style="cursor: pointer;pointer-events: all;">
                            Okay
                        </button>
                    </div>
                </div>
            </div>

            <div class="modl2 vi">
                <div class="modal-dialog alert">
                    <div class="modal-dialog-header">Your Box Create Successfuly. </div>

                    <div class="modal-dialog-actions">
                        <button class="btn btn-dark done" type="button" style="cursor: pointer;pointer-events: all;">
                            Okay
                        </button>
                    </div>
                </div>
            </div>

            <div class="modl3 vi">
                <div class="modal-dialog alert">
                    <div class="modal-dialog-header">Already added this Iteam.If you want to add new confirm </div>

                    <div class="modal-dialog-actions">
                        <button class="btn btn-dark itemdone" type="button"
                            style="cursor: pointer;pointer-events: all;">
                            Okay
                        </button>
                    </div>
                </div>
            </div>
            <div class="modl4 vi">
                <div class="modal-dialog alert">
                    <div class="modal-dialog-header">You have to selected 5 Items </div>

                    <div class="modal-dialog-actions">
                        <button class="btn btn-dark limited" type="button"
                            style="cursor: pointer;pointer-events: all;">
                            Okay
                        </button>
                    </div>
                </div>
            </div>

            {{-- card modal --}}
            <div class="modal fade" id="modelcard">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <a href="#builder" data-dismiss="modal" id="dismiss" style="font-size: 1.5rem;">×</a>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="images">
                                            <div class="mb-5">
                                                <div class="row">
                                                    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                      
                                                        <div class="carousel-inner" style="height: 500px;">
                                                        <div class="carousel-item active">
                                                            <div class="col-lg-10">


                                                                <div>
                                                                    <img id="card_img" class="xzoom-gallery">
                                                                </div>
        
        
                                                            </div>
                                                            </div>
                                                    
                                                            <div class="carousel-item {{ 2 ? 'active' : '' }}">
                                                                <div class="col-lg-10">


                                                                    <div>
                                                                        <img id="card_img1" class="xzoom-gallery">
                                                                    </div>
            
            
                                                                </div>
                                                
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div> --}}
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                          <div class="carousel-item active">
                                                            <div class="col-lg-12">
                                                                <div>
                                                            <img class="d-block" id="card_img" alt="First slide">
                                                          </div>
                                                            </div></div>
                                                          <div class="carousel-item">
                                                            <div class="col-lg-12">
                                                                <div>
                                                            <img class="d-block" id="card_img1" alt="First slide">
                                                          </div>
                                                            </div>
                                                          </div>

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
                                                    {{-- <div class="col-lg-10">


                                                        <div>
                                                            <img id="card_img" class="xzoom-gallery">
                                                        </div>


                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 m-auto">
                                        <div class="title">
                                            <div class="m-0">
                                                <h1 class="m-0">
                                                    <div class="text-capitalize mb-3" id="heding">
                                                        sdsdsd
                                                    </div>

                                                </h1>
                                            </div>
                                        </div>
                                        <form action="/cart/add" method="post" id="form">


                                            <input class="d-none" type="radio" name="id" checked="">
                                            <div class="variant">
                                                <div class="price">
                                                    <div class="m-0">
                                                        <p style="font-weight: bold;font-size: 21px;" id="price">
                                                            LKR 10

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="rule">
                                                    <div class="mb-3">
                                                        <hr class="border-bottom border-dark border-top m-0">
                                                    </div>
                                                </div>
                                                <input type="hidden" id="id" name="id">
                                                <div class="button">

                                                    <div class="mb-2">
                                                        <button class="btn btn-block  rounded-0 border-0 py-2 px-4"
                                                            id="cardsmesage" type="button"
                                                            style="background-color: white;color: black;border: 1px dotted black !important">

                                                            Write Your Message

                                                        </button>
                                                    </div>
                                                    <div style="text-align: center" class="mb-2">
                                                        <h6>OR</h6>
                                                    </div>
                                                    <div class="mb-2">
                                                        <button class="btn btn-block  rounded-0 border-0 py-2 px-4"
                                                        onclick="savemessage(2)"
                                                            type="button"
                                                            style="background-color: white;color: black;border: 1px dotted black !important">

                                                            Order My Card blank

                                                        </button>
                                                    </div>

                                                </div>
                                            </div>

                                        </form>
                                        <div class="promotion">
                                            <div class="text-center mb-2">
                                                <svg class="d-inline-block mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 15.38 10" fill="#888" height="10">
                                                    <path
                                                        d="M15.23,4.94v0h0l-.3-1.53h0l-.15-.78a1.37,1.37,0,0,0-1.3-1.06H10.38A1.21,1.21,0,0,0,10,1.6V1.15A1.16,1.16,0,0,0,8.85,0H1.15A1.16,1.16,0,0,0,0,1.15V7.31A1.16,1.16,0,0,0,1.15,8.46H2.31a1.54,1.54,0,1,0,3.07,0H9.3a1.15,1.15,0,0,0,1.08.77H11a1.53,1.53,0,0,0,2.66,0h.59a1.15,1.15,0,0,0,1.15-1.15V6.54a10.7,10.7,0,0,0-.15-1.6Zm-.85-.32H12.31V3.85h1.91ZM3.85,9.23a.77.77,0,0,1,0-1.54.77.77,0,0,1,0,1.54ZM5.18,7.69a1.54,1.54,0,0,0-2.67,0H1.15a.38.38,0,0,1-.38-.38V1.15A.38.38,0,0,1,1.15.77h7.7a.38.38,0,0,1,.38.38V7.69Zm7.13,1.54a.77.77,0,1,1,0-1.54.77.77,0,0,1,0,1.54Zm1.92-.77h-.38a1.54,1.54,0,1,0-3.08,0h-.39A.38.38,0,0,1,10,8.08V2.69a.38.38,0,0,1,.38-.38h3.08a.59.59,0,0,1,.54.44l.07.33H11.92a.38.38,0,0,0-.38.38V5a.39.39,0,0,0,.38.39h2.6c0,.24.06.51.08.76h-.37a.39.39,0,0,0-.38.39.38.38,0,0,0,.38.38h.39V8.08A.39.39,0,0,1,14.23,8.46Z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="rule">
                                            <div class="mb-3">
                                                <hr class="border-dark m-0">
                                            </div>
                                        </div>
                                        <div class="descriptioncard">

                                            <style>
                                                .description h5:before {

                                                    content: '- ';

                                                }

                                                .description .collapsed h5:before {

                                                    content: '+ ';

                                                }

                                            </style>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- box modal --}}
            <div class="modal fade" id="modelbox">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <a href="#builder" data-dismiss="modal" id="dismiss1" style="font-size: 1.5rem;">×</a>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="images">
                                            <div class="mb-5">
                                                <div class="row">

                                                    <div class="col-lg-10">


                                                        <div>
                                                            <img id="box_img" class="xzoom-gallery">
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 m-auto">
                                        <div class="title">
                                            <div class="m-0">
                                                <h1 class="m-0">
                                                    <div class="text-capitalize mb-3" id="hedingbox">
                                                        sdsdsd
                                                    </div>

                                                </h1>
                                            </div>
                                        </div>
                                        <form action="/cart/add" method="post" id="form" name="box">


                                            <input class="d-none" type="radio" name="id" checked="">
                                            <div class="variant">
                                                <div class="price">
                                                    <div class="m-0">
                                                        <p style="font-weight: bold;font-size: 21px;" id="pricebox">
                                                            LKR 10

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="rule">
                                                    <div class="mb-3">
                                                        <hr class="border-bottom border-dark border-top m-0">
                                                    </div>
                                                </div>
                                                <input type="hidden" id="idbox" name="id">
                                                <div class="button">

                                                    <div class="mb-2">
                                                        <button class="btn btn-block  rounded-0 border-0 py-2 px-4"
                                                         type="button"
                                                            style="background-color: rgb(0, 0, 0);color: rgb(255, 255, 255);border: 1px dotted black !important" id="addbox">

                                                           Add Box

                                                        </button>
                                                    </div>

                                                </div>
                                            </div>

                                        </form>
                                        <div class="promotion">
                                            <div class="text-center mb-2">
                                                <svg class="d-inline-block mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 15.38 10" fill="#888" height="10">
                                                    <path
                                                        d="M15.23,4.94v0h0l-.3-1.53h0l-.15-.78a1.37,1.37,0,0,0-1.3-1.06H10.38A1.21,1.21,0,0,0,10,1.6V1.15A1.16,1.16,0,0,0,8.85,0H1.15A1.16,1.16,0,0,0,0,1.15V7.31A1.16,1.16,0,0,0,1.15,8.46H2.31a1.54,1.54,0,1,0,3.07,0H9.3a1.15,1.15,0,0,0,1.08.77H11a1.53,1.53,0,0,0,2.66,0h.59a1.15,1.15,0,0,0,1.15-1.15V6.54a10.7,10.7,0,0,0-.15-1.6Zm-.85-.32H12.31V3.85h1.91ZM3.85,9.23a.77.77,0,0,1,0-1.54.77.77,0,0,1,0,1.54ZM5.18,7.69a1.54,1.54,0,0,0-2.67,0H1.15a.38.38,0,0,1-.38-.38V1.15A.38.38,0,0,1,1.15.77h7.7a.38.38,0,0,1,.38.38V7.69Zm7.13,1.54a.77.77,0,1,1,0-1.54.77.77,0,0,1,0,1.54Zm1.92-.77h-.38a1.54,1.54,0,1,0-3.08,0h-.39A.38.38,0,0,1,10,8.08V2.69a.38.38,0,0,1,.38-.38h3.08a.59.59,0,0,1,.54.44l.07.33H11.92a.38.38,0,0,0-.38.38V5a.39.39,0,0,0,.38.39h2.6c0,.24.06.51.08.76h-.37a.39.39,0,0,0-.38.39.38.38,0,0,0,.38.38h.39V8.08A.39.39,0,0,1,14.23,8.46Z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="rule">
                                            <div class="mb-3">
                                                <hr class="border-dark m-0">
                                            </div>
                                        </div>
                                        <div class="descriptionbox">

                                            <style>
                                                .description h5:before {

                                                    content: '- ';

                                                }

                                                .description .collapsed h5:before {

                                                    content: '+ ';

                                                }

                                            </style>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- sticker --}}
            <div class="modal fade" id="modelsticker">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <a href="#builder" data-dismiss="modal" id="dismiss2" style="font-size: 1.5rem;">×</a>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="images">
                                            <div class="mb-5">
                                                <div class="row">

                                                    <div class="col-lg-10">


                                                        <div>
                                                            <img id="sticker_img" class="xzoom-gallery">
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 m-auto">
                                        <div class="title">
                                            <div class="m-0">
                                                <h1 class="m-0">
                                                    <div class="text-capitalize mb-3" id="hedingsticker">
                                                        sdsdsd
                                                    </div>

                                                </h1>
                                            </div>
                                        </div>
                                        <form action="/cart/add" method="post" id="form">


                                            <input class="d-none" type="radio" name="id" checked="">
                                            <div class="variant">
                                                <div class="price">
                                                    <div class="m-0">
                                                        <p style="font-weight: bold;font-size: 21px;" id="pricesticker">
                                                            $10

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="rule">
                                                    <div class="mb-3">
                                                        <hr class="border-bottom border-dark border-top m-0">
                                                    </div>
                                                </div>
                                                <input type="hidden" id="idsrticker" name="idsrticker">
                                                <div class="button">
                                                    <div class="mb-2">
                                                        <button
                                                            class="btn btn-block btn-primary rounded-0 border-0 py-2 px-4"
                                                            id="stickersubmit" type="button">

                                                            Add to box

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <div class="promotion">
                                            <div class="text-center mb-2">
                                                <svg class="d-inline-block mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 15.38 10" fill="#888" height="10">
                                                    <path
                                                        d="M15.23,4.94v0h0l-.3-1.53h0l-.15-.78a1.37,1.37,0,0,0-1.3-1.06H10.38A1.21,1.21,0,0,0,10,1.6V1.15A1.16,1.16,0,0,0,8.85,0H1.15A1.16,1.16,0,0,0,0,1.15V7.31A1.16,1.16,0,0,0,1.15,8.46H2.31a1.54,1.54,0,1,0,3.07,0H9.3a1.15,1.15,0,0,0,1.08.77H11a1.53,1.53,0,0,0,2.66,0h.59a1.15,1.15,0,0,0,1.15-1.15V6.54a10.7,10.7,0,0,0-.15-1.6Zm-.85-.32H12.31V3.85h1.91ZM3.85,9.23a.77.77,0,0,1,0-1.54.77.77,0,0,1,0,1.54ZM5.18,7.69a1.54,1.54,0,0,0-2.67,0H1.15a.38.38,0,0,1-.38-.38V1.15A.38.38,0,0,1,1.15.77h7.7a.38.38,0,0,1,.38.38V7.69Zm7.13,1.54a.77.77,0,1,1,0-1.54.77.77,0,0,1,0,1.54Zm1.92-.77h-.38a1.54,1.54,0,1,0-3.08,0h-.39A.38.38,0,0,1,10,8.08V2.69a.38.38,0,0,1,.38-.38h3.08a.59.59,0,0,1,.54.44l.07.33H11.92a.38.38,0,0,0-.38.38V5a.39.39,0,0,0,.38.39h2.6c0,.24.06.51.08.76h-.37a.39.39,0,0,0-.38.39.38.38,0,0,0,.38.38h.39V8.08A.39.39,0,0,1,14.23,8.46Z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="rule">
                                            <div class="mb-3">
                                                <hr class="border-dark m-0">
                                            </div>
                                        </div>
                                        <div class="descriptionsticker">

                                            <style>
                                                .description h5:before {

                                                    content: '- ';

                                                }

                                                .description .collapsed h5:before {

                                                    content: '+ ';

                                                }

                                            </style>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- voucher --}}
            <div class="modal fade" id="modelvoucher">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <a href="#builder" data-dismiss="modal" id="dismiss3" style="font-size: 1.5rem;">×</a>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="images">
                                            <div class="mb-5">
                                                <div class="row">

                                                    <div class="col-lg-10">


                                                        <div>
                                                            <img id="voucher_img" class="xzoom-gallery">
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 m-auto">
                                        <div class="title">
                                            <div class="m-0">
                                                <h1 class="m-0">
                                                    <div class="text-capitalize mb-3" id="hedingvoucher">
                                                        sdsdsd
                                                    </div>

                                                </h1>
                                            </div>
                                        </div>
                                        <form action="/cart/add" method="post" id="form">


                                            <input class="d-none" type="radio" name="id" checked="">
                                            <div class="variant">
                                                <div class="price">
                                                    <div class="m-0">
                                                        <h4>Choose yor Voucher Price</h4>
                                                        <select class="form-control changeprice" name="" id="selectprice"
                                                            style="font-size:15px">
                                                            <option value="">--select--</option>
                                                            @foreach ($voucherprice as $vo)
                                                                <option value="{{ $vo->id }}">LKR
                                                                    {{ $vo->price }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="rule">
                                                    <div class="mb-3">
                                                        <hr class="border-bottom border-dark border-top m-0">
                                                    </div>
                                                </div>
                                                <input type="hidden" id="idcvoucher" name="idcvoucher">
                                                <div class="button">
                                                    <div class="mb-2">
                                                        <button
                                                            class="btn btn-block btn-primary rounded-0 border-0 py-2 px-4"
                                                            id="vouchersubmit" type="button">

                                                            Add to box

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <div class="promotion">
                                            <div class="text-center mb-2">
                                                <svg class="d-inline-block mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 15.38 10" fill="#888" height="10">
                                                    <path
                                                        d="M15.23,4.94v0h0l-.3-1.53h0l-.15-.78a1.37,1.37,0,0,0-1.3-1.06H10.38A1.21,1.21,0,0,0,10,1.6V1.15A1.16,1.16,0,0,0,8.85,0H1.15A1.16,1.16,0,0,0,0,1.15V7.31A1.16,1.16,0,0,0,1.15,8.46H2.31a1.54,1.54,0,1,0,3.07,0H9.3a1.15,1.15,0,0,0,1.08.77H11a1.53,1.53,0,0,0,2.66,0h.59a1.15,1.15,0,0,0,1.15-1.15V6.54a10.7,10.7,0,0,0-.15-1.6Zm-.85-.32H12.31V3.85h1.91ZM3.85,9.23a.77.77,0,0,1,0-1.54.77.77,0,0,1,0,1.54ZM5.18,7.69a1.54,1.54,0,0,0-2.67,0H1.15a.38.38,0,0,1-.38-.38V1.15A.38.38,0,0,1,1.15.77h7.7a.38.38,0,0,1,.38.38V7.69Zm7.13,1.54a.77.77,0,1,1,0-1.54.77.77,0,0,1,0,1.54Zm1.92-.77h-.38a1.54,1.54,0,1,0-3.08,0h-.39A.38.38,0,0,1,10,8.08V2.69a.38.38,0,0,1,.38-.38h3.08a.59.59,0,0,1,.54.44l.07.33H11.92a.38.38,0,0,0-.38.38V5a.39.39,0,0,0,.38.39h2.6c0,.24.06.51.08.76h-.37a.39.39,0,0,0-.38.39.38.38,0,0,0,.38.38h.39V8.08A.39.39,0,0,1,14.23,8.46Z">
                                                    </path>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="rule">
                                            <div class="mb-3">
                                                <hr class="border-dark m-0">
                                            </div>
                                        </div>
                                        <div class="description">

                                            <style>
                                                .description h5:before {

                                                    content: '- ';

                                                }

                                                .description .collapsed h5:before {

                                                    content: '+ ';

                                                }

                                            </style>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .boxfox-modal.visible {
                    opacity: 1;
                }

                .boxfox-modal {
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    padding: 20px 10px;
                    background: rgba(0, 0, 0, .4);
                    overflow: auto;
                    opacity: 0;
                    z-index: 2147483647;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    -webkit-transition: opacity .25s cubic-bezier(.25, .46, .45, .94);
                    -moz-transition: opacity .25s cubic-bezier(.25, .46, .45, .94);
                    -ms-transition: opacity .25s cubic-bezier(.25, .46, .45, .94);
                    -o-transition: opacity .25s cubic-bezier(.25, .46, .45, .94);
                    transition: opacity .25s cubic-bezier(.25, .46, .45, .94);
                }

                .boxfox-modal .modal-dialog {
                    margin: auto;
                    width: 100%;
                    max-width: 500px;
                    background: #fff;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
                    border: solid 1px rgba(0, 0, 0, .4);
                    border-radius: 6px;
                    align-self: center;
                    opacity: 0;
                    -webkit-transform: scale(0);
                    -moz-transform: scale(0);
                    transform: scale(0);
                    -webkit-transition: all .15s cubic-bezier(.25, .46, .45, .94);
                    -moz-transition: all .15s cubic-bezier(.25, .46, .45, .94);
                    -ms-transition: all .15s cubic-bezier(.25, .46, .45, .94);
                    -o-transition: all .15s cubic-bezier(.25, .46, .45, .94);
                    transition: all .15s cubic-bezier(.25, .46, .45, .94);
                }

                .boxfox-modal.visible .modal-dialog {
                    opacity: 1;
                    -webkit-transform: scale(1);
                    -moz-transform: scale(1);
                    transform: scale(1);
                }

                .boxfox-modal .modal-dialog-header {
                    display: block;
                    padding: 20px 25px 0 25px;
                    font-size: 20px;
                    color: #000;
                    text-align: left;
                }

                .boxfox-modal .modal-dialog-content {
                    display: block;
                    padding: 20px 25px;
                    font-size: 14px;
                    color: #000;
                    text-align: left;
                }

                .boxfox-modal .modal-dialog-actions {
                    display: block;
                    padding: 20px 25px;
                    border-top: solid 1px #eaeaea;
                    text-align: right;
                }

                .boxfox-modal .modal-dialog-actions .btn,
                .boxfox-modal .modal-dialog-actions .button {
                    display: inline-block;
                    width: auto;
                }

                .vi {
                    display: none;
                }

            </style>
            <style>
                .hides {
                    display: block;
                }

            </style>
            {{-- function --}}
            <script>
                var imge;
                $('#cardsmesage').click(function() {
                    $('#card').modal('show');
                    $('#modelcard').modal('hide');
                    // document.getElementById('cardprev').style.backgroundImage="url({{ asset('upload') }}/"+imge ")" 
                    document.getElementById('cardprev').style.backgroundImage = 'url({{ asset('upload') }}/' + imge + ')'
                    // $('.pick-card-modal').modal('show');
                    console.log(imge);
                })
                function takescreenshort(){
                   
                html2canvas(document.querySelector("#cardprev")).then(canvas => {
                
                    var dataUrl  = canvas.toDataURL()
                    $.ajax({
                        type: "POST",
                        url: "/add-to-cart/card/screenshort",
                        data: { 
                            image: dataUrl
                        },
                        headers: {
                         'X-CSRF-Token': '{{ csrf_token() }}' 
                        },
                    }).done(function(o) {
                        console.log('cc');
                        var data = [{
                            'id':o.id,
                            'box':state.id
                        }]
                        setcart(data, 'image');
                      
                    });
                });
                }
                function cardview(data) {

                    $('#modelcard').modal('show');
                    $('#heding').text(data.name);
                    $('#price').text('LKR ' + data.price);
                    $('#id').val(data.id);
                    $('.descriptioncard').text(data.description);
                    imge = data.image;
                    document.getElementById('card_img').src = "{{ asset('upload') }}/" + data.image
                    document.getElementById('card_img1').src = "{{ asset('upload') }}/" + data.image1

                }
                function boxview(data) {

                $('#modelbox').modal('show');
                
                $('#hedingbox').text(data.name);
                $('#pricebox').text('LKR ' + data.price);
                $('#idbox').val(data.id);
                $('.descriptionbox').text(data.description);
                // imge = data.image;
                document.getElementById('box_img').src = "{{ asset('upload') }}/" + data.image

                }
                $('#dismiss1').click(function(){
                    $('#modelbox').modal('hide');
                })
                $('#dismiss2').click(function(){
                    $('#modelsticker').modal('hide');
                })
                $('#dismiss3').click(function(){
                    $('#modelvoucher').modal('hide');
                })
                $('#dismiss').click(function(){
                    $('#modelcard').modal('hide');
                })
                $('#cardpre').click(function(){
                    $('#card').modal('hide');
                })
                
                $('.done').click(function(e) {
                    $('.modl2').addClass('vi');
                    reset();
                });
                $('.itemdone').click(function(e) {
                    $('.modl3').addClass('vi');
                    var value = sessionStorage.getItem('tegetid');
                    console.log(value);
                    console.log('sdsdteget', value);
                    state.gifts.push(data.gifts[value]);
                    store(state);
                    render(state);
                    addGiftsToCart();
                    if (data.gifts[value].discount == '0') {
                        loadtotal(data.gifts[value].price);
                    } else {
                        loadtotal(data.gifts[value].discountprice);
                    }

                });


                $('.limited').click(function(e) {
                    $('.modl4').addClass('vi');

                });



                // sticker
                function stickerview(data) {
                    console.log(data);
                    $('#modelsticker').modal('show');
                    $('#hedingsticker').text(data.name);
                    $('#pricesticker').text('LKR ' + data.price);
                    $('#idsrticker').val(data.id)
                    $('.descriptionsticker').text(data.description);
                    document.getElementById('sticker_img').src = "{{ asset('upload') }}/" + data.image

                }

                $('#stickersubmit').click(function(e) {
                    var id = $('#idsrticker').val();


                    if (state.sticker) {
                        loadtotal(data.stickers[id].price, 'change', data.stickers[state.sticker].price)
                        state.sticker = id;
                    } else {
                        state.sticker = id;
                        loadtotal(data.stickers[state.sticker].price)

                    }

                    render(state);
                    store(state);
                    addStickerToCart();
                    $('#modelsticker').modal('hide');
                    $('#link-stickers-next').html('Next &rarr;');
                });

                function voucherview(data) {
                    $('#modelvoucher').modal('show');
                    $('#hedingvoucher').text(data.name);
                    $('#pricevoucher').text('LKR ' + data.price);
                    $('#idcvoucher').val(data.id)
                    $('.description').text(data.description);
                    document.getElementById('voucher_img').src = "{{ asset('upload') }}/" + data.image
                }
                $(".changeprice").click(function(e){
                    var vid = document.getElementById("selectprice").value;
                    if(vid != ""){
                    var voucher = data.voucherprice[vid].image
                     document.getElementById('voucher_img').src =  voucher;
                    }
                })
                $('#vouchersubmit').click(function(e) {
                    var id = $('#idcvoucher').val();
                    var vid = document.getElementById("selectprice").value;

                    if (state.voucherprice) {
                        console.log("1111");
                        loadtotal(data.voucherprice[vid].price, 'change',0)
                        state.voucherprice = vid;
                        state.voucher = id;
                        
                    } else {
                        console.log("1112");
                        state.voucherprice = vid;
                        state.voucher = id;
                        loadtotal(data.voucherprice[state.voucherprice].price)
                       
                    }
                    render(state);
                    store(state);
                    addvoucherToCart();
                    $('#modelvoucher').modal('hide');
                    $('#link-voucher-next').html('Next &rarr;');
                });
                $('.cancel').click(function() {
                    $('#card').modal('hide');

                })
            </script>
            <!-- Reset -->
            <script>
                var reset = function() {
                    sessionStorage.removeItem('state');
                };
            </script>
            <!-- Store -->
            <script>
                var to = document.getElementById('to');
                var from = document.getElementById('from');
                var message = document.getElementById('message');
                to.addEventListener('keyup', function(event) {
                    $('.previewto').text( event.target.value)
                })
                from.addEventListener('keyup', function(event) {
                    $('.previewfrom').text( event.target.value)
                });
                message.addEventListener('keyup', function(event) {
                    if (event.target.value.length >= 350) {
                        $('.modl1').removeClass('vi')
                        $('.modl1').addClass('boxfox-modal')
                        $('.modl1').addClass('visible')

                        return false;
                    } else {
                        $('.previewmessage').text(event.target.value)
                    }

                })
                $('.okwarnbing').click(function() {
                    $('.modl1').addClass('vi');
                })

                var json = sessionStorage.getItem('state');
                var store = function(state) {
                    var json = JSON.stringify(state);
                    console.log('datata', json);

                    sessionStorage.setItem(
                        'state',
                        json
                    );
                };
                if (json) {
                    console.log('There is a state.');
                    var state = JSON.parse(json);

                } else {
                    console.log('There is no state.');
                    var state = {
                        id: Math.random().toString(36).substr(2, 5),
                        gifts: [],
                        step: 0
                    };

                }

                function savemessage(status) {
                 takescreenshort();
                    const to = $('#to').val();
                    const from = $('#from').val();
                    const message = $('#message').val();
                    var id = $('#id').val();
                    if(status == 1){
                       
                        state.to = to || '';
                        state.from = from || '';
                        state.message = message || '';
                   

                        if (state.card) {
                            loadtotal(data.cards[id].price, 'change', data.cards[state.card].price)
                            state.card = id;
                        } else {
                            state.card = id;
                            loadtotal(data.cards[state.card].price)

                        
                    }
                    console.log('pick',id);
                    }
                    else{
                        state.to = '';
                        state.from = '';
                        state.message = '';
                        
                        if (state.card) {
                            loadtotal(data.cards[id].price, 'change', data.cards[state.card].price)
                            state.card = id;
                        } else {
                            state.card = id;
                            loadtotal(data.cards[state.card].price)

                        }
                    }
                   
                        render(state);
                        store(state);
                        addCardToCart();

                        $('#card').modal('hide');
                        $('#link-cards-next').html('Next &rarr;');



                    
                }
            </script>
            <!-- Events -->
            <script>
                // boxx setup
                document.getElementById('addbox').addEventListener(
                        'click',
                        function(event) {
                            var boxid = $('#idbox').val();
                            console.log(boxid);
                            if (state.box) {

                                loadtotal(data.boxes[boxid].price, 'change', data.boxes[state.box].price);
                                state.box = boxid;
                            } else {
                                state.box = boxid;
                                loadtotal(data.boxes[boxid].price, 'new', 0);
                            }
                            $('#modelbox').modal('hide');
                            $('#footer').collapse('show');
                            console.log('Box sgyu');
                            render(state);
                            store(state);
                            addBoxToCart();

                        }
                    );
                // document
                //     .forms
                //     .card
                //     .addEventListener(
                //         'change',
                //         function(event) {
                //             console.log(event, this);
                //             state.card = this.elements.id.value;
                //             $('#card').modal('show');
                //             console.log(state);
                //             render(state);
                //             store(state);

                //             // Change cards next button to say skip until card is selected
                //             $('#link-cards-next').html('Next &rarr;');
                //         }
                //     );
                // document
                // .forms
                // .voucher
                // .addEventListener(
                //     'change',
                //     function(event) {
                //         console.log(event, this);
                //         state.voucher = this.elements.id.value;
                //         $('#voucher').modal('show');
                //         console.log(state);
                //         render(state);
                //         store(state);

                //         // Change cards next button to say skip until card is selected
                //         // $('#link-voucher-next').html('Next &rarr;');
                //     }
                // );
                // document
                //     .forms
                //     .message
                //     .elements
                //     .to
                //     .addEventListener(
                //         'change',
                //         function(event) {
                //             console.log(event, this);
                //             state.to = this.value;
                //             console.log(state);
                //             render(state);
                //             store(state);
                //         }
                //     );
                // document
                //     .forms
                //     .message
                //     .elements
                //     .from
                //     .addEventListener(
                //         'change',
                //         function(event) {
                //             console.log(event, this);
                //             state.from = this.value;
                //             console.log(state);
                //             render(state);
                //             store(state);
                //         }
                //     );
                // document
                //     .forms
                //     .message
                //     .elements
                //     .message
                //     .addEventListener(
                //         'change',
                //         function(event) {
                //             console.log(event, this);
                //             state.message = this.value;
                //             console.log(state);
                //             render(state);
                //             store(state);
                //         }
                //     );

                // document
                //     .forms
                //     .sticker
                //     .addEventListener(
                //         'change',
                //         function(event) {
                //             console.log(event, this);
                //             state.sticker = event.target.value;
                //             console.log(state);
                //             render(state);
                //             store(state);

                //             // Change stickers next button to say skip until sticker is selected
                //             $('#link-stickers-next').html('Next &rarr;');
                //         }
                //     );
            </script>

            <!-- Total -->
            <script>
                var total = function(state) {
                    var amount = 0;
                    if (state.box) {
                        amount = amount + parseInt(data.boxes[state.box].price);
                    }
                    if (state.gifts.length > 0) {
                        for (var index = 0; index < state.gifts.length; index++) {
                            var gift = state.gifts[index];
                            if (gift.discount == '0') {
                                amount = amount + parseInt(gift.price);

                            } else {
                                amount = amount + parseInt(gift.discountprice);
                            }

                        }
                    }
                    if (state.card) {
                        amount = amount + parseInt(data.cards[state.card].price);
                    }
                    if (state.sticker) {
                        amount = amount + parseInt(data.stickers[state.sticker].price);
                    }
                    if (state.voucher) {
                        amount = amount + parseInt(data.voucherprice[state.voucherprice].price);
                    }
                    return amount;
                };
            </script>
            <!-- Render -->
            <script>
                var render = function() {
                    if (state.box) {

                        var box = data.boxes[state.box];
                        var previewImagesHTML = (
                            '<div class="col-3 px-2">' +
                            '<div class="mb-3">' +
                            '<div class="embed-responsive embed-responsive-1by1">' +
                            '<div class="embed-responsive-item">' +
                            '<img class="w-100" src="' + box.image + '">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        );
                        var previewCaptionHTML = (
                            '<div class="row no-gutters">' +
                            '<div class="col px-lg-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col-auto px-2">' +
                            '1' +
                            '</div>' +
                            '<div class="col px-2">' +
                            box.title +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-auto px-2 px-lg-4">' +
                            'LKR ' + box.price +
                            '</div>' +
                            '<div class="col-auto text-muted">' +
                                ' <button  class="btn remove" style="width:37px"> </button>' +
                            '</div>' +
                            '</div>'
                        );
                        if (box.price == '0') {
                            var price = 'Free!';
                        } else {
                            var price = 'LKR ' + box.price;
                        }
                        var summaryCaptionHTML = (
                            '<div class="mb-3" data-remove="' + box.id + '">' +
                            '<div class="row no-gutters">' +
                            '<div class="col">' +
                            '<div class="row no-gutters">' +
                            '<div class="col-auto px-2">' +
                            '1' +
                            '</div>' +
                            '<div class="col px-2">' +
                            box.title +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-auto px-2">' +
                            price +
                            '</div>' +

                            '</div>' +
                            '</div>'
                        );
                        if (state.gifts.length > 0) {
                            console.log('There are gifts.');

                            console.log('ddhfiuhui');
                            $('#link-gifts-next').removeClass("disabled");

                            for (var index = 0; index < state.gifts.length; index++) {
                                var gift = state.gifts[index];
                                var price;
                                console.log(state);
                                if (gift.discount == '0') {
                                    price = gift.price

                                } else {
                                    price = gift.discountprice
                                }
                                previewImagesHTML = (
                                    previewImagesHTML +
                                    '<div class="col-3 px-2">' +
                                    '<div class="mb-3">' +
                                    '<div class="embed-responsive embed-responsive-1by1">' +
                                    '<div class="embed-responsive-item">' +
                                    '<img class="w-100" src="' + gift.image + '">' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                                previewCaptionHTML = (
                                    previewCaptionHTML +
                                    '<div class="gift" data-remove="' + gift.id + '">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col px-lg-3">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '1' +
                                    '</div>' +
                                    '<div class="col">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '<span class="d-inline-block text-truncate">' +
                                    gift.title +
                                    '</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-auto px-2 px-lg-4">' +

                                    'LKR ' + price +
                                    '</div>' +
                                    '<div class="col-auto text-muted">' +
                                    ' <button class="btn remove" style="border-radius: 25px;font-size:13px;margin-top:-10px"><i class="fas fa-trash" style="color:red"></i></button>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                                summaryCaptionHTML = (
                                    summaryCaptionHTML +
                                    '<div class="mb-3">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '1' +
                                    '</div>' +
                                    '<div class="col px-2">' +
                                    gift.title +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-auto px-2">' +
                                    'LKR ' + price +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                            }

                        } else {
                            console.log('There are no gifts.');
                        }
                        if (state.card) {
                            console.log('There is a card.');
                            var card = data.cards[state.card];
                            console.log(card,'card s');
                            if (card.price == '0') {
                                var price = 'Free!';
                            } else {
                                var price = 'LKR ' + card.price;
                            }
                            previewImagesHTML = (
                                    previewImagesHTML +
                                    '<div class="col-3 px-2">' +
                                    '<div class="mb-3">' +
                                    '<div class="embed-responsive embed-responsive-1by1">' +
                                    '<div class="embed-responsive-item">' +
                                    '<img class="w-100" src="' + card.image + '">' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                                previewCaptionHTML = (
                                    previewCaptionHTML +
                                    '<div class="gift" data-remove="' + card.id + '">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col px-lg-3">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '1' +
                                    '</div>' +
                                    '<div class="col">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '<span class="d-inline-block text-truncate">' +
                                    card.title +
                                    '(Card)</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-auto px-2 px-lg-4">' +

                                    '' + price +
                                    '</div>' +
                                    '<div class="col-auto text-muted">' +
                                    ' <button onclick=remove('+card.id+',"card") class="btn remove" style="border-radius: 25px;font-size:13px;margin-top:-10px"><i class="fas fa-trash" style="color:red"></i></button>'+
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                            summaryCaptionHTML = (
                                summaryCaptionHTML +
                                '<div class="mb-3">' +
                                '<div class="row no-gutters">' +
                                '<div class="col">' +
                                '<div class="row no-gutters">' +
                                '<div class="col-auto px-2">' +
                                '1' +
                                '</div>' +
                                '<div class="col px-2">' +
                                card.title +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-auto px-2">' +
                                price +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                        } else {
                            console.log('There is no card.');
                        }
                        if (state.voucher) {
                            console.log('There is a sticker.');
                            var voucher = data.voucher[state.voucher];
                           
                            if (voucherprice[state.voucherprice].price == '0') {
                                var price = 'Free!';
                            } else {
                                var price = 'LKR ' +voucherprice[state.voucherprice].price;
                            }
                            previewImagesHTML = (
                                    previewImagesHTML +
                                    '<div class="col-3 px-2">' +
                                    '<div class="mb-3">' +
                                    '<div class="embed-responsive embed-responsive-1by1">' +
                                    '<div class="embed-responsive-item">' +
                                    '<img class="w-100" src="' + voucher.image + '">' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                                previewCaptionHTML = (
                                    previewCaptionHTML +
                                    '<div class="gift" data-remove="' + voucher.id + '">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col px-lg-3">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '1' +
                                    '</div>' +
                                    '<div class="col">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '<span class="d-inline-block text-truncate">' +
                                        voucher.title +
                                    '(Voucher)</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-auto px-2 px-lg-4">' +

                                    '' + price +
                                    '</div>' +
                                    '<div class="col-auto text-muted">' +
                                        ' <button onclick=remove('+voucher.id+',"voucher") class="btn remove" style="border-radius: 25px;font-size:13px;margin-top:-10px"><i class="fas fa-trash" style="color:red"></i></button>'+
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                            summaryCaptionHTML = (
                                summaryCaptionHTML +
                                '<div class="mb-3">' +
                                '<div class="row no-gutters">' +
                                '<div class="col">' +
                                '<div class="row no-gutters">' +
                                '<div class="col-auto px-2">' +
                                '1' +
                                '</div>' +
                                '<div class="col px-2">' +
                                voucher.title +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-auto px-2">' +
                                price +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                        } else {
                            console.log('There is no sticker.');
                        }
                        var summaryHTML = (
                            '<div class="pb-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col-lg-6 px-2 px-lg-4">' +
                            '<div class="mb-3">' +
                            '<div class="embed-responsive embed-responsive-1by1">' +
                            '<div class="embed-responsive-item">' +
                            '<img class="w-100" src="' + box.image + '">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-lg-6 px-lg-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col px-2">' +
                            '<div class="mb-3">' +
                            '<h3 class="display-3">' +
                            'Box Contents : ' +
                            '</h3>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            summaryCaptionHTML +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        );

                        if (state.sticker) {
                            console.log('There is a sticker.');
                            var sticker = data.stickers[state.sticker];
                            if (sticker.price == '0') {
                                var price = 'Free!';
                            } else {
                                var price = 'LKR ' +sticker.price;
                            }
                            previewImagesHTML = (
                                    previewImagesHTML +
                                    '<div class="col-3 px-2">' +
                                    '<div class="mb-3">' +
                                    '<div class="embed-responsive embed-responsive-1by1">' +
                                    '<div class="embed-responsive-item">' +
                                    '<img class="w-100" src="' + sticker.image + '">' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                                previewCaptionHTML = (
                                    previewCaptionHTML +
                                    '<div class="gift" data-remove="' + sticker.id + '">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col px-lg-3">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '1' +
                                    '</div>' +
                                    '<div class="col">' +
                                    '<div class="row no-gutters">' +
                                    '<div class="col-auto px-2">' +
                                    '<span class="d-inline-block text-truncate">' +
                                    sticker.title +
                                    '(Sticker)</span>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="col-auto px-2 px-lg-4">' +

                                    '' + price +
                                    '</div>' +
                                    '<div class="col-auto text-muted">' +
                                        ' <button onclick=remove('+sticker.id+',"sticker") class="btn remove" style="border-radius: 25px;font-size:13px;margin-top:-10px"><i class="fas fa-trash" style="color:red"></i></button>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                            summaryCaptionHTML = (
                                summaryCaptionHTML +
                                '<div class="mb-3">' +
                                '<div class="row no-gutters">' +
                                '<div class="col">' +
                                '<div class="row no-gutters">' +
                                '<div class="col-auto px-2">' +
                                '1' +
                                '</div>' +
                                '<div class="col px-2">' +
                                sticker.title +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-auto px-2">' +
                                price +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                        } else {
                            console.log('There is no sticker.');
                        }
                        var summaryHTML = (
                            '<div class="pb-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col-lg-6 px-2 px-lg-4">' +
                            '<div class="mb-3">' +
                            '<div class="embed-responsive embed-responsive-1by1">' +
                            '<div class="embed-responsive-item">' +
                            '<img class="w-100" src="' + box.image + '">' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-lg-6 px-lg-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col px-2">' +
                            '<div class="mb-3">' +
                            '<h3 class="display-3">' +
                            'Box Contents : ' +
                            '</h3>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            summaryCaptionHTML +
                            '</div>' +
                            '</div>' +
                            '</div>'
                        );
                        if (state.card) {
                            console.log('There is a card.');
                            var card = data.cards[state.card];
                            if (state.to || state.from || state.message) {
                                var message = (
                                    '<div class="to">' +
                                    '<div class="mb-3">' +
                                    '<div class="title">' +
                                    '<div class="mb-3">' +
                                    '<h6>' +
                                    'To' +
                                    '</h6>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="text">' +
                                    '<div class="mb-3">' +
                                    '<em>' +
                                    state.to +
                                    '</em>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="from">' +
                                    '<div class="mb-3">' +
                                    '<div class="title">' +
                                    '<div class="mb-3">' +
                                    '<h6>' +
                                    'From' +
                                    '</h6>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="text">' +
                                    '<div class="mb-3">' +
                                    '<em>' +
                                    state.from +
                                    '</em>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="message">' +
                                    '<div class="mb-3">' +
                                    '<div class="title">' +
                                    '<div class="mb-3">' +
                                    '<h6>' +
                                    'Card Message' +
                                    '</h6>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="text">' +
                                    '<div class="mb-3">' +
                                    '<em>' +
                                    state.message +
                                    '</em>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>'
                                );
                            } else {
                                var message = (
                                    '<em>' +
                                    'Your card will be left blank.' +
                                    '</em>'
                                );
                            }
                            summaryHTML = (
                                summaryHTML +
                                '<div class="row no-gutters">' +
                                '<div class="col-lg-6 px-2 px-lg-4">' +
                                '<div class="mb-3">' +
                                '<div class="embed-responsive embed-responsive-1by1">' +
                                '<div class="embed-responsive-item">' +
                                '<img class="w-100" src="' + card.image + '">' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '<div class="col-lg-6 px-2 px-lg-4">' +
                                '<div class="title">' +
                                '<div class="mb-3">' +
                                '<h3 class="display-3">' +
                                'Card &amp; Message :' +
                                '</h3>' +
                                '</div>' +
                                '</div>' +
                                message +
                                '</div>' +
                                '</div>'
                            );
                        } else {
                            console.log('There is no card.');
                        }
                        document.getElementById('preview').innerHTML = (
                            '<div class="row no-gutters">' +
                            '<div class="col-lg-6 px-lg-3">' +
                            '<div class="row no-gutters">' +
                            previewImagesHTML +
                            '</div>' +
                            '</div>' +
                            '<div class="col-lg-6">' +
                            '<div class="mb-3">' +
                            previewCaptionHTML +
                            '<div class="m-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col px-2"style="font-size:20px">' +
                                ' Box total : ' +
                            '</div>' +
                            '<div class="col-auto px-2 px-lg-5" style="Text-align:End;font-size:20px">' +
                            'LKR ' + total(state) +
                           
                            '</div>' +
                            '</div>'+
                            '</div>' +
                            '</div>' +

                            '</div>' +
                            '</div>' +
                            '</div>' 
                            
                        );
                        document.getElementById('preview-review').innerHTML = (
                            '<div class="row no-gutters">' +
                            '<div class="col-lg-6 px-lg-3">' +
                            '<div class="row no-gutters">' +
                            previewImagesHTML +
                            '</div>' +
                            '</div>' +
                            '<div class="col-lg-6">' +
                            '<div class="mb-3">' +
                            previewCaptionHTML +
                            '</div>' +
                            '<div class="m-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col px-2"style="font-size:20px">' +
                                ' Box total : ' +
                            '</div>' +
                            '<div class="col-auto px-2 px-lg-5" style="Text-align:End;font-size:20px">' +
                            'LKR ' + total(state) +
                            '<div class="py-2" style="font-weight: normal;"><input type="checkbox" checked="1"> Include Gift Receipt</div>' +
                            '</div>' +
                            '</div>'+
                            '</div>' +
                            '</div>' +
                            
                            
                            '</div>' +
                            '</div>' 
                            
                        );
                        document.getElementById('summary').innerHTML = (
                            '<div class="mb-5">' +
                            summaryHTML +
                            '</div>' +
                            '<div class="m-3">' +
                            '<div class="row no-gutters">' +
                            '<div class="col px-2"style="font-size:20px">' +
                                ' Box total : ' +
                            '</div>' +
                            '<div class="col-auto px-2 px-lg-5" style="Text-align:End;font-size:20px">' +
                            'LKR ' + total(state) +
                            '<div class="py-2" style="font-weight: normal;"><input type="checkbox" checked="1"> Include Gift Receipt</div>' +
                            '</div>' +
                            '</div>'+
                            '</div>' +
                            '</div>' 
                        );
                        bind();
                    } else {
                        console.log('Can not render without box!');
                    }
                };
                function remove(data,type){
                    var cart = sessionStorage.getItem('cart');
                    var cart1 = JSON.parse(cart);
                    console.log(cart1[state.id].gifts);
                    if(type == "sticker"){
                        state.sticker ="";
                        loadtotal(0, 'change', cart1[state.id].sticker.item_price)
                        cart1[state.id].sticker =""
                        
                        console.log('12');
                    }
                    if(type == "card"){
                        state.card ="";
                        loadtotal(0, 'change', cart1[state.id].card.item_price)
                        cart1[state.id].card="";
                        console.log('12');
                    }
                    if(type == "voucher"){
                        state.voucher ="";
                        loadtotal(0, 'change', cart1[state.id].voucher.item_price)
                        cart1[state.id].voucher="";
                        console.log('12');
                    }
                    sessionStorage.setItem('state',JSON.stringify(state));
                    sessionStorage.setItem('cart',JSON.stringify(cart1));
                }
            </script>

            <script>
                var currentindex1 = 0;
                var currentindex = 0;
                var obj1 = {};
                var brand = [];
                @foreach ($brand as $br)
                    obj1 = "{{ $br->bname }}"
                    brand.push(obj1)
                @endforeach;

                var obj = {};
                var category = [];
                @foreach ($category as $cat)
                    obj = "{{ $cat->cname }}"
                    category.push(obj)
                @endforeach;

                function loadmorebrand() {

                    var maxresult1 = 2;
                    for (var i = 0; i < maxresult1; i++) {
                        if (currentindex1 >= brand.length) {
                            $('#loadbtnbrand').hide();
                            return;
                        }
                        console.log(brand[i + currentindex1]);
                        if (!brand[i + currentindex1]) {
                            $('#brandlist').append('')
                            $('#loadbtnbrand').hide();
                            return;
                        } else {
                            $('#brandlist').append(
                                '<li class="list-item"><a class="dropdown-item" href="/collections/gift-box-builder-gifts/' +
                                brand[i + currentindex1] + '">' + brand[i + currentindex1] + '</a></li>')

                        }
                    }
                    currentindex1 += maxresult1;
                }

                function loadmore() {
                    var maxresult = 2;
                    for (var i = 0; i < maxresult; i++) {
                        if (currentindex >= category.length) {
                            $('#loadbtncat').hide();
                            return;
                        }

                        if (!category[i + currentindex]) {
                            $('#catrgorylist').append('')
                            $('#loadbtncat').hide();
                            return;
                        } else {
                            $('#catrgorylist').append(
                                '<li class="list-item"><a class="dropdown-item" href="/collections/gift-box-builder-gifts/' +
                                category[i + currentindex] + '">' + category[i + currentindex] + '</a></li>')

                        }
                    }
                    currentindex += maxresult;
                }
                loadmore();
                loadmorebrand();
                var gifts = {};
                @foreach ($products as $product)
                    gifts["{{ $product->id }}"] = {
                    image: '{{ asset('upload') }}/{{ $product->pimage }}',
                    variant: "Default Title",
                    product: "{{ $product->short_description }}",
                    vendor: "{{ $product->name }}",
                    title: "{{ $product->name }}",
                    price: "{{ $product->regular_price }}",
                    discount: "{{ $product->discount }}",
                    discountprice: "{{ $product->discountprice }}",
                    id: "{{ $product->product_id }}"
                
                
                    };
                @endforeach;

                var boxes = {};
                @foreach ($box as $b)
                    boxes["{{ $b->id }}"] = {
                    image: "{{ asset('upload') }}/{{ $b->image }}",
                    title: "{{ $b->name }} GIFT BAR |{{ $b->title }}",
                    price: "{{ $b->price }}",
                    id: "{{ $b->id }}"
                    };
                @endforeach;


                var cards = {};
                @foreach ($card as $c)
                    cards["{{ $c->id }}"] = {
                    image: "{{ asset('upload') }}/{{ $c->image }}",
                    title: "{{ $c->name }}|{{ $c->title }}",
                    price: "{{ $c->price }}",
                    id: "{{ $c->id }}"
                    };
                @endforeach;

                var stickers = {};
                @foreach ($sticker as $s)
                    stickers["{{ $s->id }}"] = {
                    image: "{{ asset('upload') }}/{{ $s->image }}",
                    title: "{{ $s->name }}|{{ $s->title }}",
                    price: "{{ $s->price }}",
                    id: "{{ $s->id }}"
                    };
                @endforeach;

                var voucher = {};
                @foreach ($voucher as $v)
                    voucher["{{ $v->id }}"] = {
                    image: "{{ asset('upload') }}/{{ $v->image }}",
                    title: "{{ $v->name }}|{{ $v->title }}",
                    id: "{{ $v->id }}"
                    };
                @endforeach;
                var voucherprice = {};
                @foreach ($voucherprice as $va)
                    voucherprice["{{ $va->id }}"] = {
                    image: "{{ asset('upload') }}/{{ $va->image }}",
                    price: "{{ $va->price }}",
                    id: "{{ $va->id }}"
                    };
                @endforeach;
            </script>
            <!-- Data -->
            <script>
                var data = {
                    boxes,
                    cards,
                    stickers,
                    gifts,
                    voucher,
                    voucherprice
                }
                console.log(cards);
            </script>
            <!-- Add -->

            <script>
                var addBoxToCart = function() {

                    if (state.box) {
                        console.log('There is a box.');
                        var xhr = new XMLHttpRequest();
                        xhr.open(
                            'POST',
                            '/add-to-cart/box'
                        );
                        xhr.setRequestHeader(
                            'Content-Type',
                            'application/json'
                        );
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.addEventListener(
                            'load',
                            function(event) {
                                // var response =this.response;

                                var response = JSON.parse(this.response);
                                setcart(response, 'box');
                                notify('success','Item Successfully added.. ')


                            }
                        );

                        xhr.send(
                            JSON.stringify({

                                properties: {
                                    box: state.id
                                },
                                id: state.box,
                                status: 'box',
                                type: 'medium'

                            })
                        );

                    } else {
                        console.log('There is no box.');
                    }
                };
                var addGiftsToCart = function() {
                    var queue = state.gifts.map(function(g) {
                        return g.id;
                    });

                    console.log('The queue is ' + queue);
                    if (queue.length) {
                        var item = queue.pop();
                        console.log('Adding ' + item + ' to cart');
                        var xhr = new XMLHttpRequest();
                        xhr.open(
                            'POST',
                            '/add-to-cart/gift'
                        );
                        xhr.setRequestHeader(
                            'Content-Type',
                            'application/json'
                        );
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

                        xhr.addEventListener(
                            'load',
                            function(event) {
                                var response = JSON.parse(this.response);
                                setcart(response, 'gift');
                                notify('success','Item Successfully added.. ')
                                // $('#bagkload').load(location.href + ' .bag');

                            }
                        );
                        xhr.send(
                            JSON.stringify({
                                properties: {
                                    box: state.id
                                },
                                id: item,
                                status: 'gift'
                            })
                        );
                    } else {
                        console.log('All the gifts have been added to the cart.');
                        console.log('Next, I need to add the card to the cart.');
                        // addCardToCart();

                    }
                };
                var addCardToCart = function() {
                    console.log('sdvggd');
                    var font = $('#font1').val();
                    if (state.card) {
                        console.log('There is a card.');
                        var xhr = new XMLHttpRequest();
                        xhr.open(
                            'POST',
                            '/add-to-cart/card'
                        );
                        xhr.setRequestHeader(
                            'Content-Type',
                            'application/json'
                        );
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.addEventListener(
                            'load',
                            function(event) {
                                var response = JSON.parse(this.response);
                                setcart(response, 'card');
                                notify('success','Item Successfully added.. ')
                            }
                        );
                        xhr.send(
                            JSON.stringify({
                                properties: {
                                    box: state.id,
                                    to: state.to || '',
                                    from: state.from || '',
                                    message: state.message || '',
                                    font: font || ''
                                },
                                id: state.card,
                                status: 'card'
                            })
                        );
                    } else {
                        console.log('There is no card.');

                    }
                };

                var addStickerToCart = function() {
                    console.log('sgfjgsdjfh');
                    if (state.sticker) {
                        console.log('There is a sticker.');
                        var xhr = new XMLHttpRequest();
                        xhr.open(
                            'POST',
                            '/add-to-cart/sticker'
                        );
                        xhr.setRequestHeader(
                            'Content-Type',
                            'application/json'
                        );
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.addEventListener(
                            'load',
                            function(event) {
                                var response = JSON.parse(this.status);
                                console.log(this);
                                console.log(event);
                                console.log(response);
                                var response = JSON.parse(this.response);
                                setcart(response, 'sticker');
                            }
                        );
                        xhr.send(
                            JSON.stringify({
                                properties: {
                                    box: state.id
                                },
                                id: state.sticker,
                                status: 'sticker'
                            })
                        );
                    } else {
                        console.log('There is no sticker.');

                    }
                };
                var addvoucherToCart = function() {
                    if (state.voucher) {
                        console.log('There is a voucher.');
                        var xhr = new XMLHttpRequest();
                        xhr.open(
                            'POST',
                            '/add-to-cart/voucher'
                        );
                        xhr.setRequestHeader(
                            'Content-Type',
                            'application/json'
                        );
                        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
                        xhr.addEventListener(
                            'load',
                            function(event) {
                                var response = JSON.parse(this.response);
                                setcart(response, 'voucher');

                            }
                        );

                        xhr.send(
                            JSON.stringify({
                                properties: {
                                    box: state.id
                                },
                                id: state.voucher,
                                id1: state.voucherprice,
                                status: 'voucher'
                            })
                        );
                    } else {
                        console.log('There is no voucher.');

                    }
                };


                document.getElementById('complete')
                    .addEventListener(
                        'click',
                        function(event) {
                            $('.modl2').removeClass('vi')
                            $('.modl2').addClass('boxfox-modal')
                            $('.modl2').addClass('visible')
                        }
                    );
            </script>
            <!-- Bind -->
            <script>
                console.log('ss', );
                var cart = JSON.parse(sessionStorage.getItem('cart'));
                var bind = function() {


                    var elements = document.querySelectorAll('[data-remove]');
                    for (var index = 0; index < elements.length; index++) {
                        var element = elements[index];
                        element
                            .addEventListener(
                                'click',
                                function(event) {
                                    var cart = JSON.parse(sessionStorage.getItem('cart'));
                                    var id = this.dataset.remove;
                                    for (var i = 0; i < state.gifts.length; i++) {
                                        console.log('gift', i);
                                        if (state.gifts[i].id == id) {
                                            if (state.gifts[i].discount == '0') {
                                                loadtotal(0, 'change', state.gifts[i].price)
                                            } else {
                                                loadtotal(0, 'change', state.gifts[i].discountprice)
                                            }


                                            state.gifts.splice(i, 1);
                                            cart[state.id].gift.splice(i, 1)
                                            break;
                                        }

                                    }
                                    // for (var a = 0; a < cart[state.id].gift.length; a++) {
                                    // console.log('cart',a);
                                    //     if(cart[state.id].gift[a].item_id == id){
                                    //         // console.log(true);
                                    //         cart[state.id].gift.splice(a, 1);
                                    //         break;
                                    //     }

                                    // }
                                    // Disable link next button until gifts have been added
                                    if (state.gifts.length == 0) {

                                        $('#link-gifts-next').addClass("disabled");
                                    }

                                    render(state);
                                    store(state);
                                    // storecart(cart)
                                    sessionStorage.setItem('cart', JSON.stringify(cart))
                                }
                            );
                    }
                };
            </script>
            <!-- Initialize -->
            <script>
                console.log(state);
                render();
            </script>
            <!-- Scroll -->
            <script>
                document
                    .getElementById('builder')
                    .getElementsByClassName('carousel-item')[state.step]
                    .classList
                    .add('active');
                window.addEventListener(
                    'load',
                    function() {
                        $('#builder').on(
                            'slide.bs.carousel',
                            function(event) {
                                state.step = event.to;
                                store(state);
                                window.scrollTo(
                                    0,
                                    0
                                );
                            }
                        );
                    }
                );
            </script>
            <!-- Validation -->
            <div class="modal fade" id="gifts-warning">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <a href="#builder" data-dismiss="modal" style="font-size: 1.5rem;">×</a>
                                <div class="text-center p-4">
                                    <p style="font-size: 1.1rem;">Please add some gifts to your box.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="leaving-warning">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <a href="#builder" data-dismiss="modal" style="font-size: 1.5rem;">×</a>
                                <div class="text-center p-4">
                                    <p style="font-size: 1.1rem; line-height: 1.6rem;">Wait...you're leaving your gift
                                        box behind. Do you want to stay and finish it?</p>
                                    <div class="mt-4">
                                        <a class="btn btn-primary border-0 px-6 py-2" data-dismiss="modal"
                                            href="#builder">Stay</a>
                                        <a class="btn btn-outline-primary border-0 px-6 py-2" href="#"
                                            id="leave-btn">Leave</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function() {
                    // var state = sessionStorage.getItem('sate');

                    $('#link-gifts-next').click(function(e) {
                        e.preventDefault();
                        if (state.gifts.length > 0) {
                            $('.carousel').carousel('next');
                            $('.carousel').carousel('pause');
                        }
                    });


                    // Disable gifts next button until a gift is added
                    if (state.gifts.length > 0) {

                        $('#link-gifts-next').removeClass("disabled");
                    }

                    // Change cards next button to say skip until card is selected
                    if (state.card) {
                        $('#link-cards-next').html('Next &rarr;');
                    }

                    // Change stickers next button to say skip until sticker is selected
                    if (state.sticker) {
                        $('#link-stickers-next').html('Next &rarr;');
                    }
                    if (state.voucher) {
                        $('#link-voucher-next').html('Next &rarr;');
                    }
                    // Warn before leaving the gift box
                    $('#shopify-section-navigation a').click(function(e) {
                        e.preventDefault();
                        $('#leaving-warning').modal('show');
                        $('#leave-btn').attr('href', $(this).attr('href'));
                    });
                });
            </script>

     
        </div>

    </div>

</div>
