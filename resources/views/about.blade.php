@extends('layout')
@section('title', 'ABOUT')
@section('content')
    <style>
        .features .features-item h3 {
            font-size: 43px;
        }

        .service-item.position-relative {
            display: flex;
            flex-direction: column;
        }
    </style>
    <section class="about_banner">
        <div class="about_content">
            <div class="container">
                <div class="principal">
                    <h1>About Us</h1>

                    <p style="color: #AAAAAA">
                        Learn the story of WINBANCE And its future goals
                    </p>

                </div>
            </div>

        </div>
    </section>


    <!-- ======= Features Section ======= -->
    <section id="features" class="features"style=" background-color: #0F0F0F">
        <div class="container">
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/about/about1.png" class="img-fluid about-img" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1">
                    <h3>Our Mission</h3>
                    <p style="color:#D5D5D5">We are working on developing the financing service
                        and developing our services into a global service
                        This change enables us to create a global financing
                        platform and help many traders.
                        And we will be able to fund individual traders and
                        groups involved in trading
                        <br>
                        <br>
                        Let's come together to create a community of
                        successful traders and create the largest global
                        financing system
                    </p>

                </div>
            </div>
            <!-- Features Item -->
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                <div class="col-md-5" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/about/about2.png" class="img-fluid about-img" alt="">
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                        <h3>
                            winbance story
                        </h3>
                    </div>
                    <p style="color:#D5D5D5">

                        The idea of creating WINBANCE started in 2019 in the
                        house of the current CEO AE(Aymanee lotfi)with some
                        merchants
                        and subtract AE Some traders have the idea of a
                        financing program
                        At first, it won the admiration of its trading friends And
                        the project to establish the winbance financing program
                        began In the year 2020 with a group of traders
                        <br>
                        <br>
                        Despite the many difficulties in this service, in 2022 we
                        were not able to complete the establishment of the
                        financing system with a partnership Many of the leading
                        companies in the field of trading

                    </p>

                </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

                {{--  --}}
                <div class="col-md-5">

                    
                    <div class="banner-media" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/images/about/shape.svg" class="img-fluid media_img animated"alt="" />
                        <div class="move-2">
                            <img src="assets/images/about/ceo.svg" class="wow fadeInUp" data-wow-delay="2s" alt=""
                                style="    margin-top: -116px;" />

                        </div>
                        <h5 style="color: #fff; text-align: center; margin-top: -4em;" translate="no">AE(Aymane lotfi)</h5>
                        <p style="color: #E8B30B ; text-align: center" translate="no">CEO winbance & Founder</p>
                    </div>

                </div>
       

                <div class="col-md-7">
<h3 style="    color: #fff;
    text-align: left;
    line-height: 68px;">Our Founders</h3>
                    <p style="color:#D5D5D5">Aymane lotfi He is the founder and CEO of the company WINBANCE
                        He founded winbance company in October 2021 To be a leading
                        financing program in the field of trading services Noting that AE or
                        better known as Aymane lotfi He worked with the VECHAIN system
                        development team in 2018 And boarded the year 2019 To move to
                        the idea of founding the company WINBANCE</p>
                </div>
            </div><!-- Features Item -->
        </div>
    </section><!-- End Features Section -->
    <section id="services" class="services " style=" background-color: #0F0F0F ; color: #ffff">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Global Advisory Servers
                </h3>

            </div>
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="100" style="    align-items: flex-start;">

                <div class="col-lg-4 col-md-6">
                    <div class="service-item  position-relative" style="display: flex">
                        <img src="assets/images/icons/european-union.png" alt="" style="width: 2em; ">
                        <h4 style="    margin-left: 46px;
                        margin-top: -30px;">European</h4>
                        <ul style="color: #E8B30B">
                            <li>Italy

                            </li>
                            <li>
                                Spain
                            </li>
                            <li>
                                France
                            </li>
                            <li>
                                Germany
                            </li>
                            <li>
                                Ukraine
                            </li>
                        </ul>


                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative" style="display: flex">
                        <img src="assets/images/icons/argentina.png" alt="" style="width: 2em; ">
                        <h4 style="margin-left: 46px;
                        margin-top: -30px;">LATINE</h4>
                        <ul style="color: #E8B30B">
                            <li> Argentina</li>
                            <li>

                                Brazil
                            </li>
                            <li>
                                Colombia
                            </li>
                            <li>
                                Ecuador
                            </li>
                            <li>
                                Mexico
                            </li>
                            <li>
                                Nicaragua
                            </li>
                        </ul>

                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative" style="display: flex">
                        <img src="assets/images/icons/turkey.png" alt="" style="width: 2em; ">
                        <h4 style="    margin-left: 46px;
                        margin-top: -30px;">TURBINE</h4>
                        <ul style="color: #E8B30B">
                            <li>
                                Turkey
                            </li>
                            <li>
                                Iran
                            </li>

                        </ul>


                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative"style="display: flex">
                        <img src="assets/images/icons/british.svg" alt="" style="width: 2em; ">
                        <h4 style="    margin-left: 46px;
                        margin-top: -30px;">NAITEL</h4>
                        <ul style="color: #E8B30B">
                            <li>
                                United kingdom
                            </li>
                            <li>
                                America
                            </li>
                            <li>
                                Canada
                            </li>
                            <li>
                                (International)
                            </li>
                        </ul>


                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6">
                    <div class="service-item position-relative" style="display: flex"> <img
                            src="assets/images/icons/saudi-arabia.png" alt="" style="width: 2em; ">
                        <h4 style="    margin-left: 46px;
                        margin-top: -30px;">ARABICE</h4>
                        <ul style="color: #E8B30B">
                            <li>Qatar</li>
                            <li>Tunisia</li>

                            <li>
                                Morocco
                            </li>
                            <li>
                                Egypt
                            </li>
                            <li>
                                Emirates
                            </li>
                            <li>
                                Algeria
                            </li>
                            <li>
                                Saudi Arabia
                            </li>
                            <li>Kuwait</li>

                        </ul>


                    </div>
                </div><!-- End Service Item -->



            </div>

        </div>
    </section><!-- End Our Services Section -->
@endsection
