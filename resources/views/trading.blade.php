@extends('layout')
@section('title', 'OUR BLOG')
@section('content')

    <!-- ======= Breadcrumbs ======= -->


    <section class="about_banner">
            <div class="container">
                <div class="row gy-4 align-items-center features-item-banner" data-aos="fade-up">


                    <div class="col-md-7 baner-header">
                        <div class="section-header">
                            <h1>Our Blog</h1>
                        </div>
                        <p style="color: #AAAAAA">Stay up to date with the latest stories and commentaryand
                            <br>
                            new financing systems

                        </p>

                    </div>
                    <div class="col-md-5">
                        <img src="assets/images/banner/5754.png" class="img-fluid about-img" alt="">
                    </div>
                </div>

    </section>



    <section class="container" style="    padding-top: 8em;">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                       <a href="{{ route('home.blog10') }}"><img src="assets/images/blog/blog-details/blog1.svg" class="img-fluid" alt=""></a> 
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                          <h2 ><a href="{{ route('home.blog10') }}" style="color: #000">Partnership with wise bank</a> </h2>
                            <br>
                        <p style="color: #707070">A new partnership was announced with a different quality company, a company that combines winbance, a bank and wise ,
                       </p>

                        <p style="color: #707070"> and it is the first partnership with a bank through which winbance  provides facilitation for the trader and the establishment</p>

                        <p>11-11-2022
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/blog/blog8.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h2 style="color: #000"><a href="{{ route('home.blog2') }}" style="color: #000"> Announcing the countries in the server latinoamerica  
</a></h2>
                          <br>
                        <p style="color: #707070">Announcing the second server in winbance, which is the Latin American server that is located in it:
Chile 
Colombia 
Brazil 
Argentina 
Mexico 
Nicaragua 
Venezuela
.</p>


                        <p>11-11-2022
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/blog/blog-details.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                          <h2 style="color: #000"><a href="{{ route('home.blog3') }}" style="color: #000">Partnership with RITHMIC</a></h2>
                          <br>
                        <p style="color: #707070">A partnership agreement has been concluded with RITHMIC company
 by granting the system license and this thing we are really pleased to 
deal with Rithmic </p>

                        <p style="color: #707070">company and they granted us the system with the
 license and this thing is very important for traders.</p>

                        <p>11-11-2022
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/blog/blog-details/blog7.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                          <h2 style="color: #000"><a href="{{ route('home.blog4') }}" style="color: #000">Agreement between Winbance and tradingview</a></h2>
                          <br>
                        <p style="color: #707070">Today, an agreement was signed between Winbance and tradingview  on the 
basis of providing an analysis platform in the dashboard and new in the 
finance sector</p>

                      

                        <p>11-11-2022
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/blog/slider.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                          <h2 style="color: #000"><a href="{{ route('home.blog5') }}" style="color: #000">The purpose of the servers</a></h2>
                          <br>
                        <p style="color: #707070">A map of the organization of servers of a company winbance 
ach server a main country</p>

                        <!--<p style="color: #707070">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,-->
                        <!--    luctus nec-->
                        <!--    ullamcorper mattis, pulvinar dapibus.</p>-->

                        <p>11-11-2022
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4 posts-list">

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <a href="{{ route('home.blog6') }}">
                            <img src="assets/images/blog/blog1.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 > <a href="{{ route('home.blog6') }}" class="trading-title center">winbance signs a partnership
                            agreement with rithmic</a> </h6>
                        <p class="trading-text">A partnership agreement has been concluded with RITHMIC company
 by granting the system license and ...


                        </p>

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog7') }}">
                            <img src="assets/images/blog/blog2.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 > <a href="{{ route('home.blog7') }}"class="trading-title center">Partnership with Winbance
                            on the basis of savings chart</a></h6>
                        <p class="trading-text">Today, an agreement was signed between Winbance and tradingview  on the 
basis  ...
                        </p>
                       
                        


                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                            <a href="{{ route('home.blog8') }}">
                            <img src="assets/images/blog/blog3.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog8') }}"class="trading-title center">Announcing the countries in
                            the server arabic</a></h6>
                        <p class="trading-text">To offer you again the last server in the winbance servers, 
the Arab server. The servant of  ...
                        </p>
                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>

                        <div class="post-img">
                             <a href="{{ route('home.blog9') }}">
                            <img src="assets/images/blog/blog4.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog9') }}"class="trading-title center">Announcing the countries in
                            the server UK</a></h6>
                        <p class="trading-text">Welcome back to the new Winbance server UK in ...
                        </p>
                      
                        

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog10') }}">
                            <img src="assets/images/blog/blog5.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog10') }}"class="trading-title center">Week about Winbance</a></h6>
                       
                        <p class="trading-text">The NinjaTrader company through which the dashboard will be uploaded to the traders ...
                        </p>
                        

                    </article>
                </div><!-- End post list item -->

                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog11') }}">
                            <img src="assets/images/blog/blog6.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog11') }}" class="trading-title center">Winbance or NinjaTrader They
                            partner to provide a trading
                            platform</a></h6>
                        <p class="trading-text">A partnership was concluded between Winbance...
                        </p>
                    </article>
                </div><!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog12') }}">
                            <img src="assets/images/blog/blog7.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 class><a href="{{ route('home.blog12') }}" class="trading-title center">Announcing the countries in
                            the server turkiye</a></h6>
                        <p class="trading-text">Hello Winbance community, let's welcome the new server, which is the server of Turkey,...
                        </p>
                    </article>
                </div><!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog13') }}">
                            <img src="assets/images/blog/blog8.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog13') }}" class="trading-title center">Announcing the countries in
                            the server latinoamerica</a></h6>
                        <p class="trading-text">Announcing the second server in winbance, which is the Latin American server...
                        </p>
                        
                        
                        
                    </article>
                </div><!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                             <a href="{{ route('home.blog14') }}">
                            <img src="assets/images/blog/blog9.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog14') }}" class="trading-title center">Announcing the countries in
                            the server European</a></h6>
                        <p class="trading-text">Winbance has announced the first server, which is the European server,...
                        </p>
                        
                    </article>
                </div><!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>
                        <div class="post-img">
                            <a href="{{ route('home.blog15') }}">
                            <img src="assets/images/blog/blog10.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog15') }}" class="trading-title center">Forum in the server of the
                            Arabs about launchpad</a></h6>
   <p class="trading-text">The CEO of winbance and kanber, the manager of the Turkey server,...
                        </p>
                    </article>
                </div><!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog16') }}">
                            <img src="assets/images/blog/blog11.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog16') }}" class="trading-title center">Which countries is the service
                            available in?</a></h6>
<br>
<br>
                    </article>
                </div><!-- End post list item -->
                <div class="col-xl-4 col-md-6">
                    <article>


                        <div class="post-img">
                            <a href="{{ route('home.blog17') }}">
                            <img src="assets/images/blog/blog12.svg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <h6 ><a href="{{ route('home.blog17') }}" class="trading-title center">winbance story...</a></h6>
   <p class="trading-text">The idea of creating WINBANCE started in 2019 in the house of the current CEO AE(Aymanee lotfi)with,...
                        </p>
                    </article>
                </div><!-- End post list item -->
               
               
                

            </div><!-- End blog posts list -->

        </div>
    </section><!-- End Blog Section -->

@endsection
