@extends('layout')
@section('title', 'HOME')
@section('content')
<style>
#hero .container {
    padding-bottom: 140px;
    padding-top: 140px;
}

s, strike{text-decoration:none;position:relative;}
s::before, strike::before {
    top: 50%; /*tweak this to adjust the vertical position if it's off a bit due to your font family */
    background:red; /*this is the color of the line*/
    opacity:.7;
    content: '';
    width: 110%;
    position: absolute;
    height:.1em;
    border-radius:.1em;
    left: -5%;
    white-space:nowrap;
    display: block;
    transform: rotate(-15deg);  
}
s.straight::before, strike.straight::before{transform: rotate(0deg);left:-1%;width:102%;}
  
  .pricing_paragraph s {
    position: absolute;
    top: 118px;
    right: 233px;
  }




@media (max-width: 1680px) {
  #hero .container {
    padding-bottom: 244px;
    padding-top: 257px;
  }
}



@media (max-width: 1024px) {
  #hero .container {
    padding-bottom: 80px;
    padding-top: 80px;
  }
}

@media (max-width: 767px) {
  #hero .container {
    padding-bottom: 60px;
    padding-top: 60px;
  }
  .hand {
    display: none;
  }
}

.banner {
    display: flex;
    justify-content: center;
    height: 20vh;
    position: relative;
}

@media (max-width: 1680px) {
  .banner {
    height: 15vh;
  }
}

@media (max-width: 1024px) {
  .banner {
    height: 10vh;
  }
}

.coin {
    width: 70px;
    height: 70px;
    animation: upanddown 5s linear infinite;
}

.coin.second {
    width: 120px;
    height: 120px;
    transform: rotate(45deg);
}

@media (max-width: 1680px) {
  .coin {
    width: 60px;
    height: 60px;
  }
  
  .coin.second {
    width: 100px;
    height: 100px;
  }
}

@media (max-width: 1024px) {
  .coin {
    width: 40px;
    height: 40px;
    position: relative;
    top: -80%;
    transform: translateY(-50%);
  }
  
  .coin.second {
    width: 80px;
    height: 80px;
  }
}


@keyframes upanddown {
    0% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-50px);
    }
    100% {
      transform: translateY(0);
    }
}

.hand {
    position: absolute;
    top: -146px;
    left: 27px;
}

@media (max-width: 1680px) {
  .hand {
    top: -106px;
    left: 70px;
  }
}

@media (max-width: 993px) {
  .hand {
    display: none;
  }
}

@keyframes move {
    0% {
      transform: translateX(-100px);
    }
    50% {
      transform: translateX(100px);
    }
    100% {
      transform: translateX(-100px);
    }
}
</style>

<script>

 function setPrice(price) {
     window.localStorage.clear();
     var prix = price;
    window.localStorage.setItem("price", prix);
  
 }


</script>
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="heading-xl"><strong>start trading</strong></h1>
                    <h6 class="bold_title"> Our Capital. Your Expertise </h6>
                    <p style="color: #fff"> Trade our capital, earn up to 90% profit. Join our team and access resources, training, 
and technology to succeed in the markets.</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a data-toggle="collapse" data-target=".navbar-collapse"
                            href="#funding" class="btn-get-started scrollto">Account Funding  <span class="sr-only"></span> </a>
                        
                        <p></p>
                        <p></p>
                        <a href="{{ route('home.about') }}" class="btn-get-second scrollto">About Service </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="200">
                    <div class="banner">
                          <!--<img class="coin second" src="assets/images/banner/1.png" alt="Cryptocurrency">-->
                          <!--<img class="coin " src="assets/images/banner/2.png" alt="Cryptocurrency"> -->
                          <!--<img class="coin second" src="assets/images/banner/2.png" alt="Cryptocurrency">-->
                          <!--<img class="hand" src="assets/images/banner/hand.png" alt="Hand">-->
                        
                        <img class="css-1 hand" src="assets/img/Home01.png" alt="Hand">
			            <img src="assets/img/LastCostslast.png" alt="Cryptocurrency" class="css-1 front-image">
			            <img src="assets/img/Efficiencydark.jpg" alt="Cryptocurrency" class="css-1 front-image2">
                        <style>
                            .front-image {
                              width: 200px;
                              height: auto;
                              position: absolute;
                              top: 0;
                              right: 0;
                              z-index: 9999;
                            }
                            .css-1:hover { 
                                transform: scale(1.1);
                                }
                          </style>
                        <style>
                            .front-image2 {
                              width: 200px;
                              height: auto;
                              position: absolute;
                              bottom: 0;
                              left: 0;
                              z-index: 9999;
                            }
                          </style>
                
                    </div>
                    
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <main id="main">
        <section class="counter-section" style="    margin-bottom: -4em;">
            <div id="projectFacts" class="sectionClass  container" data-wow-duration="1.4s">

                <div class="fullWidt height columns">
                     <div class="container">
                    <div class="projectFactsWrap ">

                            <div class="item wow fadeInUpBig  counter" style="visibility: visible;">
                                <h4 id="number1" class="number" translate="no">$<span class="counting" data-count="48" translate="no">0</span>K</h4>
                                <p style="color: #ffff">winbance payments to
                                    the traders

                                </p>
                            </div>
                            <div class="item wow fadeInUpBig  counter" style="visibility: visible;">
                                <h4 id="number2" class="number" translate="no"> <span class="counting" data-count="18" translate="no">0</span>K
                                </h4>
                                <p style="color: #ffff">Open deals this month
                                </p>
                            </div>
                            <div class="item wow fadeInUpBig  counter" style="visibility: visible;">
                                <h4 id="number3" class="number" translate="no"><span class="counting" data-count="320" translate="no">0</span></h4>
                                <p style="color: #ffff">Number of Traders
                                </p>
                            </div>
                            <div class="item wow fadeInUpBig  counter" style="visibility: visible;">
                                <h4 id="number4" class="number" ><span class="counting" data-count="32" translate="no">0</span>
                                </h4>
                                <p style="color: #ffff">The number of countries registered in our service
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Clients Section ======= -->
               <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-xs-12 col-sm-6 col-md-3 d-flex align-items-center justify-content-center">
                        <a href="https://www.barclays.co.uk/" target="_blank"><img src="assets/images/clients-logo/4.png" class="img-fluid"
                                alt=""></a>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 d-flex align-items-center justify-content-center">
                        <a href="https://coingate.com/" target="_blank"><img src="assets/images/clients-logo/clients-logo-2.png" class="img-fluid"
                                alt=""></a>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 d-flex align-items-center justify-content-center">
                        <a href="https://www.tradingview.com/" target="_blank"><img src="assets/images/clients-logo/clients-logo-1.png" class="img-fluid"
                                alt=""></a>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 d-flex align-items-center justify-content-center">
                        <a href="https://wise.com/" target="_blank"><img src="assets/images/clients-logo/clients-logo-4.png" class="img-fluid"
                                alt="" style="    width: 282px;"></a>
                    </div>



                </div>

            </div>
        </section>

      <!-- ======= about Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row" style="    align-items: center;">

                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>TRADE YOUR WAY In Winbance
                            Financing Program</h3>
                        <br>
                        <p>Looking to trade with a larger amount of capital? Join our proprietary trading firm and access the company's capital to trade financial instruments  futures, and forex . Our traders have the potential to earn up to 90% of the capital's profits, while benefiting from our resources, training, and technology.
                        </p>
                        <p> Don't let limited capital hold you back from your trading goals. Join our team and start trading with the support and backing of a successful prop firm.</p>


                    </div>
                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/about/funding.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section><!-- End about Section -->
        <!-- End Cliens Section -->

        <section class="evaluation">
            <div class="container">
                <div class="heading_title wow fadeInRight animated animated" data-wow-duration="1s" data-wow-delay=".1s">
                    <h3>Evaluation Process</h3>
                </div>
                <div class="evaluation_section">
                    <div class="evaluation_cards">
                        <br>
                        <br>
                        <div class="content_cards">
                            <div class="cartes card-1 wow fadeInUpBig animated animated" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <div class="pad-top">
                                    <img src="assets/images/about/evaluation_card1.svg" alt="">
                                </div><br>
                                <div class="carte_title">
                                    <h3>Sign-up for winbance
                                        program funding
                                    </h3>
                                    <br>

                                    <p class="evaluation_paragraph">Choose your funded account size and start the evaluation process today. Get your account data and access the support you need to succeed.</p>
                                </div>
                            </div>
                            <div class="cartes card-2 wow fadeInUpBig animated animated" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <div class="pad-top">
                                    <img src="assets/images/about/evaluation_card2.svg" alt="">
                                </div>
                                <br>
                                <div class="carte_title">
                                    <h3> Challenge</h3>
                                    <br>
                                    <p class="evaluation_paragraph">The first step in our evaluation process is to trade in a test account. This is a chance to demonstrate your trading skills and discipline in risk management.</p>
                                </div>
                            </div>
                            <div class="cartes card-3 wow fadeInUpBig animated animated" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <div class="pad-top">
                                    <img src="assets/images/about/evaluation_card3.svg" alt="">
                                </div>
                                <br>
                                <div class="carte_title">
                                    <h3>Winbance trader</h3>
                                    <br>
                                    <p class="evaluation_paragraph">Become a funded trader with Winbance and earn 90% of your profits. Trade responsibly, follow our max loss rules, and trade at your own discretion - no profit targets required.
                                    </p>
                                </div>

                            </div>
                        </div> <br>
                        <div class="foot">
                            <img src="assets/images/about/evaluation-line.svg" alt="">
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </section>
       

        <section class="Trading" id="funding">
            <div class="container-fluid container">
                <div class="section-header">
                    <h3 style="color: #262729;">Choose your account plan
                    </h3>
                    <br>
                    <p>Our trading accounts connect traders with our proprietary funds, allowing you to trade with
 a larger amount of capital and access more trading opportunities.</p>
                </div>
                <br>
                <hr style=" margin-block: 20px;color:#707070; ">

                <br>
                <br><br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pricing-plans d-flex flex-column flex-lg-row my-auto">
                            <div class="plan ">
                                <div class="plan-header gray first-plan">
                                    <div class="card-header">
                                        <div class="w-title">
                                            <h4 style="color: #000;">Aspire</h4>
                                        </div>
                                        <div class="w-price" translate="no">
                                            <h3 style="color: #000;" ><sup>$</sup>15k</h3>
                                        </div>
                                        <p class="pricing_paragraph"><s class="pricing-span">$120</s>$90/ <span class="pricing-span" >Month</span> </p>
                                        <div class="container-button" onclick="setPrice(90)">
                                            
                                            <a class="w-button" href="{{ route('home.payment') }}?acoount_size=15k&price=$90&AccountSize=Aspire" target="_blank"  >Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="plan-info">
                                    <ul class="list-group">
                                        <li class="list-group-item">$1,200 <span class="pricing-span" >Profit Trager</span> </li>
                                        <li class="list-group-item" >$500 <span class="pricing-span">Daily Loss Limet </span> </li>
                                     <!--   <li class="list-group-item">$1,000 <span class="pricing-span"> Pro Drawdown</span>  </li> -->
                                        <li class="list-group-item">$1,000 <span class="pricing-span"> Ult Drawdown</span>  </li>
                                        <li class="list-group-item">5 <span class="pricing-span"> Contract (Max)</span> </li>
                                        <li class="list-group-item">7<span class="pricing-span">Minimum Trading Days </span>  </li>
                                        <li class="list-group-item">90<span class="pricing-span" color=> maximum trading days </span>  </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plan">
                                <div class="plan-header bronze" style="border: 1px solid #ddd;border-top-color: transparent;">
                                    <div class="card-header">
                                        <div class="w-title">
                                            <h4 style="color: #000;">Launch</h4>
                                        </div>
                                        <div class="w-price" translate="no">
                                            <h3 style="color: #000;"><sup>$</sup>50k</h3>

                                        </div>
                                        <p class="pricing_paragraph">
                                          <s class="pricing-span">$190</s>$120/<span class="pricing-span" >Month</span>
                                        </p>
                                            <div class="container-button" onclick="setPrice(120)">

                                            <a class="w-button"  href="{{ route('home.payment') }}?acoount_size=50k&price=$120&AccountSize=Launch" target="_blank" > Choose Plan</a>
                                        </div>
                                    </div>
                                
                                </div>
                                <div class="plan-info">
                                    <ul class="list-group">
                                        <li class="list-group-item"> $2,400 <span class="pricing-span"> Profit Trager</span> </li>
                                        <li class="list-group-item">$1,100 <span class="pricing-span">Daily Loss Limet </span>
                                        </li>
                                        <li class="list-group-item">$2,000 <span class="pricing-span">Ult Drawdown </span> </li>
                                        <li class="list-group-item">8 <span class="pricing-span">Contract (Max) </span> </li>
                                        <li class="list-group-item">7 <span class="pricing-span"> Minimum Trading Days</span> </li>
                                     <li class="list-group-item">90<span class="pricing-span" color=> maximum trading days </span>  </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plan">
                                <div class="plan-header silver" style="border: 1px solid #ddd;border-top-color: transparent;">
                                    <div class="card-header">
                                        <div class="w-title">
                                            <h4 style="color: #000;">Premium</h4>
                                        </div>
                                        <div class="w-price" translate="no">
                                            <h3 style="color: #000;"><sup>$</sup>100k</h3>

                                        </div>
                                        <p class="pricing_paragraph"><s  class="pricing-span">$370</s> $148/<span class="pricing-span" >Month</span> </p>
                                        <div class="container-button" onclick="setPrice(148)">
                                            <a class="w-button" href="{{ route('home.payment') }}?acoount_size=100k&price=$148&AccountSize=Premium" target="_blank" >Choose Plan</a>
                                        </div>
                                    </div>
                                    {{-- <div class="button"><a href="/step1?silver/" class="btn btn-secondary btn-sm">Try It Free</a></div> --}}
                                </div>
                                <div class="plan-info">
                                    <ul class="list-group">
                                        <li class="list-group-item"> $6,500 <span class="pricing-span"> Profit Trager</span> </li>
                                        <li class="list-group-item">$2,500 <span class="pricing-span">Daily Loss Limet </span>
                                        </li>
                                        <li class="list-group-item">$4,000 <span class="pricing-span"> Ult Drawdown</span> </li>
                                        <li class="list-group-item">12 <span class="pricing-span"> Contract (Max)</span> </li>
                                        <li class="list-group-item">7 <span class="pricing-span">Minimum Trading Days </span> </li>
                                        <li class="list-group-item">90<span class="pricing-span" color=> maximum trading days </span>  </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="plan popular">
                                <div class="plan-header gold">
                                    <div class="card-header">
                                        <div class="w-title">
                                            <h4 style="color: #000;">Explode</h4>
                                        </div>
                                        <div class="w-price" translate="no">
                                            <h3 style="color: #000;"><sup>$</sup>200k</h3>

                                        </div>
                                        <p class="pricing_paragraph"><s class="pricing-span">$550</s>$220/<span class="pricing-span" >Month</span></p>
                                            <div class="container-button" onclick="setPrice(220)">
                                            <a class="w-button" href="{{ route('home.payment') }}?acoount_size=200k&price=$220&AccountSize=Explode" target="_blank" >Choose Plan</a>
                                        </div>
                                    </div>
                                    {{-- <div class="button"><a href="/step1?gold/" class="btn btn-secondary btn-sm">Try It Free</a></div> --}}
                                </div>
                                <div class="plan-info">
                                    <ul class="list-group">
                                        <li class="list-group-item"> $13,000 <span class="pricing-span">Profit Trager </span> </li>
                                        <li class="list-group-item">$3,500 <span class="pricing-span"> Daily Loss Limet</span></li>
                                        <li class="list-group-item">$6,000 <span class="pricing-span"> Ult Drawdown </span></li>
                                        <li class="list-group-item">20 <span class="pricing-span"> Contract (Max)</span> </li>
                                        <li class="list-group-item">7 <span class="pricing-span">Minimum Trading Days </span> </li>
                                        <li class="list-group-item">90<span class="pricing-span" color=> maximum trading days </span>  </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <section class="our_service_section">
            <div class="container">
                <h3 class="section_title"> Main Advantages
                </h3>
                <div class="single_service_container">

                    <!-- single service start -->
                    <div class="single_service">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/key1.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">

                                <h3 class="__two">Without data charges
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px; color: #555b6e;">
                                No Data Fees in Evaluation & Funded Accounts – Empower Your Trading Journey

                            </p>
                        </div>
                    </div>
                    <!-- single service end -->

                    <!-- single service start -->
                    <div class="single_service">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/key2.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">

                                <h3 class="__two">Professional certificate
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px; color: #555b6e;">
                                Professional certificate is granted after you pass an exam and is authorized and signed by
                                the
                                CEO of WINBANCE and licensed by Rithmic

                            </p>
                        </div>
                    </div>
                    <!-- single service end -->

                    <!-- single service start -->
                    <div class="single_service" >
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/key3.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">
                                <h3 class="__two">Digital payments
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px; color: #555b6e;">
                                We provide you with the process of payment and withdrawal in cryptocurrencies, and there is
                                a
                                reduction of up to 15% in the process of purchasing cryptocurrencies
                            </p>
                        </div>
                    </div>
                    <!-- single service end -->

                </div>
                <hr style="margin-block: 20px;color:#707070;">
            </div>
        </section>


        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/about/payout.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100" style="margin-bottom:100px;">
                        <h3 style=" line-height: 66px;">Payout System</h3>
                        <p>
                            Winbance has a default payout ratio of 80:20 for all its traders. However, this is not a hard limit. If you meet the criteria of our expansion plan, we will increase your Winbance account balance by 25% and change the payout ratio to 90:10, which is an excellent deal.</p>

                        <p>All Winbance traders can request a payout at any time, but payments will only be processed after 25 days. Additionally, you have the flexibility to select your profit split day, which can be changed up to four times. We want to ensure that you receive your withdrawal amount on the most convenient day for you.</p>


                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <div class="fourth section" style="">
            <div class="container" >
                <div class="row">

                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h1 class="sec_banner-title"> The best known platforms
                            trading </h1>
                        <p style="color: #fff;">
                            We Offer The Best Trading Solution With Ninjatrader, Rithmic Accounts Powered By 
Prime Liquidity Providers. Our Demo Accounts Simulate Real Market
 Conditions With Super-Raw Spreads, Low Commissions, And No 
Markup. Join Us Today For An Authentic Trading Experience.
                        </p>

                        <div class="skills-content">
                            <div class="banner_logo">
                                <a href="https://ninjatrader.com/es/LP/VendorDemo/" target="_blank"><img
                                        src="assets/images/icons/logo-about1.svg" alt="" /> </a>
                                <a href="https://yyy3.rithmic.com/?page_id=16" target="_blank" style=" margin-top: -73px;"><img
                                        src="assets/images/icons/r rithmic white.png" alt=""     style="width: 25em; "/></a>
                                        <a href="https://kinetick.com/NinjaTrader" target="_blank"><img
                                            src="assets/images/icons/Kinetick_Logo.png" alt="" /></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/images/banner/banner.png" class="img-fluid sec--baner" alt="">
                    </div>
                </div>
            </div>

        </div>
        <section id="services" class="services sections-bg" style="color: #262729;">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h3 style="color: #262729;">Benefits Of Our TraderFunding
                        Program
                    </h3>
                    <br>
                </div>
                <hr style=" margin-block: 20px;color:#707070; ">
                <div class="single_service_container">

                    <!-- single service start -->
                    <div class="single_service">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/service-icon1.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">

                                <h3 class="__two">Most popular trading platform
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px;">Trade with professional platforms such as NinjaTrader 
or Rithmic, and gain access to advanced tools and 
features to support your trading activities.</p>
                            <br>

                        </div>
                    </div>
                    <!-- single service end -->

                    <!-- single service start -->
                    <div class="single_service">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/service-icon2.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">

                                <h3 class="__two">Best Trading Conditions
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px;">
                               Explore a diverse range of trading opportunities 
with our offering of forex and futures assets.
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <!-- single service end -->

                    <!-- single service start -->
                    <div class="single_service service-content">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/service-icon3.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">
                                <h3 class="__two">Advanced Dashboard
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px;">
                                Our trader dashboard provides all your account info
and helps you stay disciplined in your trades.
                            </p>
                            <br>
                        </div>
                    </div>
                    <!-- single service end -->
                    <!-- single service start -->
                    <div class="single_service">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/service-icon4.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">
                                <h3 class="__two">The Service Speed
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px;">
                                Fastest customer service process at all stages.
                                <br>
                                <br>
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <!-- single service end -->
                    <!-- single service start -->
                    <div class="single_service">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/service-icon5.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">
                                <h3 class="__two">No Trading Limit
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px;">
                                Trade without limits or restrictions and have complete
 control over your trading activities.
                                <br>
                                <br>
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <!-- single service end -->
                    <!-- single service start -->
                    <div class="single_service service-content">
                        <div class="top">
                            <span class="icon">
                                <img src="assets/images/icons/service-icon6.svg" alt="" style="width: 2em;">
                            </span>
                            <div class="text">
                                <h3 class="__two">Customer Support Service
                                </h3>
                            </div>
                        </div>

                        <div class="bottom">
                            <p style="font-size: 15px;">
                                We value communication with our traders and offer
 customer support in 10 international languages. Our
 dedicated team is always available to assist you.
                            </p>
                            <br>
                            <br>
                        </div>
                    </div>
                    <!-- single service end -->
                </div>
        </section>







        <!-- ======= Our Services Section ======= -->
        {{-- <section id="services" class="services sections-bg" style="color: #262729;">
                    <div class="container" data-aos="fade-up">

                        <div class="section-header">
                            <h3 style="color: #262729;">Benefits Of Our TraderFunding
                                Program
                            </h3>
                            <br>
                        </div>
                        <hr style=" margin-block: 20px;color:#707070; ">
                        <div class="col-xl-12 d-flex content">
                        <div class="row align-self-center gy-4"" data-aos="fade-up" data-aos-delay="100">

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item  position-relative">
                                    <img src="assets/images/icons/service-icon1.svg" alt="" style="width: 2em; ">
                                    <h4 style="color: #262729;"> Most popular trading platform</h4>
                                    <p>NinjaTrader or Rithmic Trade with professional
                                        platforms

                                    </p>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item position-relative">
                                    <img src="assets/images/icons/service-icon2.svg" alt="" style="width: 2em; ">
                                    <h4 style="color: #262729;">Best Trading Conditions</h4>

                                    <p>We offer you a wide range of assets
                                        forex and futures.</p>

                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item position-relative">
                                    <img src="assets/images/icons/service-icon3.svg" alt="" style="width: 2em; ">
                                    <h4 style="color: #262729;">Advanced Dashboard</h4>

                                    <p>We have developed a dashboard for traders
                                        that provides you with all the account.
                                        information and helps you with discipline</p>
                                        <br>
                                        

                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item position-relative">
                                    <img src="assets/images/icons/service-icon4.svg" alt="" style="width: 2em; ">
                                    <h4 style="color: #262729;">The Service Speed</h4>

                                    <p>The fastest customer service process at all
                                        stages.</p>

                                </div>
                            </div><!-- End Service Item -->

                            <div class="col-lg-4 col-md-6">
                                <div class="service-item position-relative">
                                    <img
                                        src="assets/images/icons/service-icon5.svg" alt="" style="width: 2em; ">
                                    <h4 style="color: #262729;">No Trading Limit</h4>

                                    <p>Trade your way without limits or restrictions
                                        You can use external agents and advisors</p>

                                </div>
                            </div><!-- End Service Item -->
                            <br>
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item position-relative">

                                        <img src="assets/images/icons/service-icon6.svg" alt=""
                                            style="width: 2em; ">
                                        <h4 style="color: #262729;">Customer Support Service</h4>

                                    <p>Communicating with traders is important to
                                        us, that's why we provide customer support
                                        who are always there for you and they speak
                                        10 international languages
                                    </p>
                                     <br>

                                </div>
                            </div><!-- End Service Item -->

                        </div>
                        </div>
                    </div>
                </section><!-- End Our Services Section --> --}}

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">To register for Winbance, you can visit their website and look for a 'Sign Up' or 'Register' <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    To apply for financing with us, simply visit our website and select the appropriate financing amount that fits your needs. Once you've chosen your desired amount, you'll be asked to pay a fee to start the application process. After we receive your completed application, we'll send you the funded account information via email. Please ensure that you provide us with accurate contact information so that we can reach you in a timely manner.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Why should I join
                                Winbance
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    We provide an opportunity for traders to take advantage of the company's capital
                                    financing and trading, with their reward 80% of the profits ,winbance Provides you with
                                    a comprehensive solution
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">If you're interested in joining our team, here's what you can do
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    You must secure your own financing program with monthly fees and be over 18 years
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">The evaluation
                                accounts will start on a demo account and the trader can start earning once the evaluation
                                goals are achieved.
                                <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Traders will start with a real account in our funding program and get their share of the
                                    profits once they reach the funding goals

                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="lorem ipsum">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Does Winabnce
                                allow trading on weekends <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Uncle, there is no time limit for trading periods, we allow the trader to make trades
                                    during weekends
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="lorem ipsum">
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">If I break the
                                rules, will I get a second chance <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Yes, you can file a complaint with winbance about the reasons for violating the rules,
                                    and you will be answered that this invitation can be accepted
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
                <br>
                <a href="{{ route('home.faq') }}" class="faq_btn">visit FAQ</a>
            </div>
        </section><!-- End Frequently Asked Questions Section -->

    </main>
@endsection
