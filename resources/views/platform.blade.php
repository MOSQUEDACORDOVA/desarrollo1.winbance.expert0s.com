@extends('layout')
@section('title', 'Platform')
@section('content')
    <style>
        .slider_title {
            font-weight: 600;
            font-size: 40px;
            line-height: 95px;
            color: #000000
        }

        .cr4 {
            letter-spacing: 0.05em;
            text-align: left;
            line-height: 1.9em;
            color: #000000
        }

        .slider-img {
            width: 100%;
        }

        .slider-img img {

            margin: auto 0;
            margin-left: 2em;
        }


        .wrap {
            position: relative;
            /* width: 90%; */
            background: #888888;
            border-radius: 3em;
            margin-left: auto;
            margin-right: auto;
        }
        
        ul.powered-by {
    display: flex;
    align-items: center;
    gap: 2rem;
    justify-content: space-around;
}

        /* .powered-by {
            align-items: center;
            -webkit-box-align: center;
            display: grid;
            gap: 0.8rem 1.8rem;
            grid-template-columns: auto auto;
            justify-items: center;
            margin: 4.8rem auto;
        } */

        .powered-by li {
            list-style: none;
            margin: 0;
            
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }

        /* .powered-by img {
                height: 2rem;
                width: 12em;

            } */


        @media (min-width: 1024px) {
            /* .powered-by {
                grid-template-columns: auto auto auto auto;
            } */

            /* .powered-by img {
                height: 2rem;
                width: 12em; } */

        }

        #sliderproduct {
            width: 100%;
        }

        #sliderproduct .carousel-inner {
            overflow: visible;
        }

        #sliderproduct .col-sm-6.image {
            /* background: #fff;
                            box-shadow: 0px 4px 8px 0px #959595;
                            position: relative; */

            /*top: -44px;
                              padding: 100px;
                              padding-top: 40px;*/
        }

        .item {
            padding: 20px 20px 40px 20px;
        }

        .col-sm-6.image .item img.img-fluid {

            /*min-width: 100%;*/
            width: 315px;
        }

        .col-sm-6.image h1 {
            margin-bottom: 20px;
        }

        #sliderproduct .col-sm-4.mr-auto {
            margin-top: 22px;
        }

        #sliderproduct p.cr1 {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 30px;
        }

        #sliderproduct .col-sm-6:last-child {
            padding-top: 27px;
            padding-bottom: 27px;
        }

        #sliderproduct .details h2 {
            margin: 25px 0px 30px 0px;
            font-size: 24px;
            font-weight: 700;
        }

        #sliderproduct .details p.cr4 {
            font-weight: 500;
            font-size: 16px;
            line-height: 19px;
            margin-bottom: 0px;
        }

        #sliderproduct .carousel-item {
            transition: 0.4s;
        }



        #sliderproduct a.carousel-control-next {
            border-radius: 50%;
            background-color: #1A1A1A;
            width: 46px;
            height: 46px;
            font-size: 30px;
            text-align: center;
            line-height: 40px;
            margin-top: 10px;
            opacity: 1;
            /* top: 50%;
                    transform: translate(-1869%, 226%) */
        }

        #sliderproduct a.carousel-control-prev {
            border-radius: 50%;
            background-color: #1A1A1A;
            width: 47px;
            height: 46px;
            font-size: 30px;
            margin-top: 10px;
            margin-left: 20px;
            text-align: center;
            line-height: 40px;
            opacity: 1;
            /* top: 50%;
                    transform: translate(530%, 226%); */
        }

        .controls {
            position: absolute;
            width: 9em;
            top: 55%;
            left: 10%;
        }

        .bg {
           /* height: 90vh;
           */
            overflow: hidden;
        }

        #sliderproduct ol.carousel-indicators {
            display: none;
        }

        .mt-5 {
            margin-top: -1rem !important;
        }
    
        .platforms {
   
    padding: 60px 0 0;
}

.slider_description{
    margin-top: -13em;
}
@media (max-width: 1458px) {
    .slider_description {
    margin-top: -9em;
}
.controls {
    top: 59%;
}


}
@media (max-width: 991px) {

.controls {
    left: 33% !important;
    top: 42% !important;
}
.slider_description {
    margin-top: 2em !important;
}
.bg {
    height: 1051px !important;
    overflow: hidden;
}
.controls {
    left: 34% !important;
    top: 29% !important;
}
}

    </style>

    </style>

    <section class="about_banner">
        <div class="about_content">
            <div class="container">
                <div class="principal">
                    <h1>TRUSTEDPLATFORMS</h1>

                    <p style="color: #AAAAAA">
                        We utilize the industry’s biggest and most trusted platforms
                        to facilitate your trading.
                    </p>

                </div>
            </div>

        </div>
    </section>
    <section id="platforms" class="platforms">
        <div class="container">
            {{-- <div class="row">
                <div class="col-4">col-4</div>
                <div class="col-8"><img alt="" class="img-fluid"
                    src="assets/images/platform/91374.png" title=""></div>

              </div> --}}
            <div class="bg mt-5">
                <div class="bg-product mt-5">
                    <div class=" product">
                        <div class="row platform">
                            <div id="sliderproduct" class="carousel slide " data-ride="carousel" data-interval="10000">
                                <ol class="carousel-indicators">
                                    <li data-target="#sliderproduct" data-slide-to="0" class="active"></li>
                                    <li data-target="#sliderproduct" data-slide-to="1"></li>
                                    <li data-target="#sliderproduct" data-slide-to="2"></li>
                                    <li data-target="#sliderproduct" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox" data-interval="10000000">
                                    <div class="carousel-item active" >
                                        <div class=" text-center">
                                            <div class="row slider_platform">
                                                <div class="col-lg-4 pt-3 pt-lg-0 content slider_description" style=" ">
                                                    <h2 class="pl-3 pr-3 slider_title">NINJATRADER
                                                    </h2>
                                                    <div class="slider-img d-block d-sm-none">
                                                        <img alt="" class="img-fluid"
                                                            src="assets/images/platform/91374.png" title="">
                                                    </div>
                                                    <p class="cr4">One of the best futures trading platforms It is a
                                                        leading
                                                        technology provider and award winning company
                                                        It is a free application for data graphing, market analysis
                                                        and trading system development</p>

                                                </div>
                                                <div class="col-lg-8 d-flex align-items-centercontent">
                                                    <div class="slider-img d-none d-sm-flex justify-content-center">
                                                        <img alt="" class="img-fluid"
                                                            src="assets/images/platform/91374.png" title="">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-8 d-flex align-items-centercontent">
                                                    <div class="picContainer">
                                                        <div class="platform_background">
                                                            <img class="img-fluid"
                                                                src="assets/images/platform/91374.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                <!--endcol-->
                                            </div>
                                            <!--endrow-->
                                        </div>
                                        <!--endcontainer-->
                                    </div>

                                    <div class="carousel-item" >
                                        <div class="container text-center">
                                            <div class="row slider_platform">
                                                <div class="col-lg-4 pt-3 pt-lg-0 content slider_description" style=" ">
                                                    {{-- <div class="details unique-apps"> --}}
                                                    <h2 class="pl-3 pr-3 slider_title">R | TRADERTM</h2>
                                                    <p class="cr4">It is a front-end trading screen and real-time
                                                        risk
                                                        management
                                                        with R | TRADERTM Prices and deals can be displayed</p>

                                                    <!--endrating-->

                                                    {{-- </div> --}}
                                                    <!--enddetails-->
                                                </div>
                                                <!--endcol-->
                                                <div class="col-lg-8 d-flex align-items-centercontent">
                                                    <div class="picContainer">
                                                        <div class="platform_background">
                                                            {{-- <div class="item"> --}}
                                                            <img class="img-fluid" src="assets/images/platform/91374.png"
                                                                alt="">
                                                        </div>
                                                        <!--enditem-->

                                                    </div>
                                                    <!--enditem-->
                                                </div>
                                            </div>
                                            <!--endrow-->
                                        </div>
                                        <!--endcontainer-->
                                    </div>
                                    <!--endcarousel-item-->
                                    <div class="carousel-item" >
                                        <div class="container text-center">
                                            <div class="row slider_platform">
                                                <div class="col-lg-4 pt-3 pt-lg-0 content slider_description" style=" ">
                                                    {{-- <div class="details unique-apps"> --}}
                                                    <h2 class="pl-3 pr-3 slider_title">R | TRADER
                                                        PROTM</h2>
                                                    <p class="cr4">R | TRADERTM is R | TRADER PROTM With data graphic
                                                        interface
                                                        and real-time interface with real-time use
                                                        Iinto the R treder execution platform
                                                    </p>

                                                    <!--endrating-->
                                                    {{--
                                                    </div> --}}
                                                    <!--enddetails-->
                                                </div>
                                                <!--endcol-->
                                                <div class="col-lg-8 d-flex align-items-centercontent">
                                                    <div class="picContainer">
                                                        <div class="platform_background">
                                                            {{-- <div class="item"> --}}
                                                            <img class="img-fluid" src="assets/images/platform/91374.png"
                                                                alt="">
                                                        </div>
                                                        <!--enditem-->

                                                    </div>
                                                    <!--enditem-->
                                                </div>
                                                <!--endcol-->
                                            </div>
                                            <!--endrow-->
                                        </div>
                                        <!--endcontainer-->
                                    </div>
                                    <!--endcarousel-item-->
                                    <div class="carousel-item">
                                        <div class="container text-center">
                                            <div class="row ">
                                                <div class="col-lg-4 pt-3 pt-lg-0 content slider_description" style=" ">
                                                    {{-- <div class="details unique-apps"> --}}
                                                    <h2 class="pl-3 pr-3 slider_title">Winbance System</h2>
                                                    <p class="cr4">One of the best control panel for traders, easy to
                                                        use
                                                        supports several languages, and there are several
                                                        tools to help you</p>

                                                    <!--endrating-->

                                                </div>
                                                <!--enddetails-->
                                                {{-- </div> --}}
                                                <!--endcol-->
                                                <div class="col-lg-8 d-flex align-items-centercontent">
                                                    <div class="picContainer">
                                                        <div class="platform_background">
                                                            {{-- <div class="item"> --}}
                                                            <img class="img-fluid" src="assets/images/platform/91374.png"
                                                                alt="">
                                                        </div>
                                                        <!--enditem-->

                                                    </div>
                                                    <!--enditem-->
                                                </div>
                                                <!--endcol-->
                                            </div>
                                            <!--endrow-->
                                        </div>
                                        <!--endcontainer-->
                                    </div>
                                    <!--endcarousel-item-->
                                    {{-- <div class="controls">
                                        <a href="javascript:void(0);" class="left carousel-control-prev fa fa-angle-left" href="#sliderproduct" role="button"
                                        data-slide="prev" >
                                            <i class="fa fa-chevron-left"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="right carousel-control-next fa fa-angle-right" href="#sliderproduct" role="button"
                                        data-slide="next">
                                            <i class="fa fa-chevron-right"></i>
                                        </a>
                                    </div> --}}
                                    <div class="controls">
                                        <a class="carousel-control-prev bi bi-arrow-left" href="#sliderproduct"
                                            role="button" data-slide="prev" style="margin-left: 60px;">
                                        </a>
                                        <a class="carousel-control-next bi bi-arrow-right" href="#sliderproduct"
                                            role="button" data-slide="next">
                                        </a>
                                    </div>
                                </div>
                                <!--endslidesliderproduct-->
                            </div>
                            <!--endrow-->
                        </div>
                        <!--endcontainer-->
                    </div>
                    <!--endbg-product-->
                </div>
            </div>


        </div>

    </section>

    <div class="platform_by" style="padding-bottom:2em">
       <div class="container" >
                <div class="wrap"style="
        width: 650.5px;
    height: 74.64px; ">
                    <ul class="powered-by">
                        <li>
                            <h2 style="font-size: 14px;">PLATFORM BY </h2>
                        </li>
                        <li><a href=""><img src="assets/images/icons/logo winbance drawn name WHITE.png" alt=""style="    width: 124px;
                            height: 58px;
                            border: 0;
                            padding-top: -29px;
                            margin: 0;
                            top: -11px;
                            padding: 0;
                            position: relative;"></a>
                        </li>
                        <li><a href=""><img src="assets/images/icons/ninja trader logo white.png" alt=""style="width: 160px;
                            height: 99px;border:0;margin:0;padding:0;position:relative; top: 4px;"></a>

                        </li>
                        <li><a href=""><img src="assets/images/icons/r rithmic white.png" alt=""style="width: 138px;
                            height: 30px;border:0;margin:0;padding:0;position:relative; top: -3px;"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    {{-- <div class="container text-center my-3">
        <div class="row mx-auto my-auto">
            <div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item py-5 active">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">
                                    <h2 class="pl-3 pr-3 slider_title">winbance system</h2>
                                    <p class="cr4">One of the best control panel for traders, easy to
                                        use
                                        supports several languages, and there are several
                                        tools to help you</p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">
                                    <img class="img-fluid" src="assets/images/platform/91374.png" alt="">
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item py-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">Card</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">Card</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item py-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">Card</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                  </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                  <div class="card-body">
                                    <h4 class="card-title">Card</h4>
                                    <p class="card-text">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Button</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">
                    <span class="fa fa-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">
                    <span class="fa fa-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>



<script>$('#myCarousel').carousel({
    interval: 5000
  })

  </script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
