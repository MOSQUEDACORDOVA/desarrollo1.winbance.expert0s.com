<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>WINBANCE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/images/icons/logo_favi.png" rel="icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/logo_favi.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/logo_favi.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/logo_favi.png">
    <link rel="manifest" href="assets/images/icons/logo_favi.png">
    <link rel="mask-icon" href="assets/images/icons/logo_favi.png" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1549804213570.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .start-date {
            font-size: 1.2rem;
            font-weight: 400;
            font-family: Arial, sans-serif;
            text-align: center;
            color: #ffffff;
            margin-top: -4rem;
            background-color: #00c0ff;
            padding: 0.5rem;
        }

        @keyframes color-change {
            0% {
                color: #fff;
            }
            50% {
                color: #000;
            }
            100% {
                color: #fff;
            }
        }
        
    </style>
    <link rel="stylesheet" href="assets/css/google-translate.css">
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="assets/js/google-translate.js"></script>
    
    
            <script>
                window.onload = function () {
                  let lists = document.querySelectorAll(".dropdown-content.language .lang-li");
                  lists.forEach((flag) => {
                    if (flag.classList.contains("language__img_active")) {
                      document.querySelector("#lang_flag").setAttribute("src", flag.querySelector(".lang-flag").getAttribute("src")) 
                        
                    }
                  });
                };
        </script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="{{ route('home.index') }}" class="logo me-auto"><img src="assets/images/logo_site.png" alt="" class="img-fluid" style="margin-bottom: 50px;"></a>
            
            <nav id="navbar" class="navbar" style="margin-bottom: 50px;">
                <ul>
                    <li class=" scrollto "><a {{ Request::is('/') ? 'active' : 'nav-link' }} href="{{ route('home.index') }}">Home</a></li>
                    <li><a class="nav-link scrollto" data-toggle="collapse" data-target=".navbar-collapse" href="#funding">Funding <span class="sr-only"></span></a></li>

                    <li class="dropdown"><a href=""> <span>Trading</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('home.trading') }}">Our Blog</a></li>
                           <!-- <li><a href="{{ route('home.leaderboard') }}">LeaderBoard</a></li>-->
                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" {{ Request::is('platform') ? 'active' : 'nav-link' }} href="{{ route('home.platform') }}">Platform</a></li>
                    <li class="dropdown"><a href="">contact <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('home.about') }}">About Us</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="https://winbance-33633.groovehq.com/help" target="_blanck" translate="no">FAQ</a></li>
                    <li><a class="nav-link scrollto active" href="">client area</a></li>
                    <li class="dropdown d-flex" style=" margin: 0 3rem !important;" translate="no">
                         <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
                        <a href="" style="padding-left: 8px;"><i class="bi bi-chevron-down"> </i></a>
                    
                       <ul class="dropdown-content language" translate="no">

                            <li class="lang-li" data-google-lang="es"> <a href="#"> <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Spain.png" />
                                    <p class="lang-text">ES</p>
                                </a></li>
                                
                                <li class="lang-li" data-google-lang="en"> <a href="#"> <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
                                <p class="lang-text">EN</p>
                               
                                </a></li>
                                
                            <li class="lang-li" data-google-lang="fr"> <a href="#"> <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png" />
                            <p class="lang-text">FR</p>
                                </a></li>
                           
                            <li class="lang-li" data-google-lang="it"> <a href="#"> <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Italy.png" />
                            <p class="lang-text">IT</p>
                                </a></li>
                            <li class="lang-li" data-google-lang="ar"> <a href="#"> <img class="lang-flag" id="lang_flag" src="assets/images/flags/arabia_of_flag_saudi_icon.png" />
                            <p class="lang-text">AR</p>
                                </a></li>
                            <li class="lang-li" data-google-lang="tr">
                                <a href="#"><img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Turkey.png" />
                                <p class="lang-text">TR</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            
        </div>
        <div class="start-date" >60% discount in valuation account of $100K & $200k</div>
    </header>

    @yield('footer')


    


    @yield('content')

    {{-- FOOTER AREA --}}
    <footer>
        <div class="container">
            <div class="logo-footer">
                <a href="{{ route('home.index') }}"><img src="assets/images/white_logo.svg" alt=""></a>
            </div>
            <!-- Footer main -->
            <section class="ft-main">

                <div class="ft-main-item">
                    <h2 class="ft-title">Trading</h2>
                    <ul>
                        <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#funding">Funding <span class="sr-only"></span> </a></li>
                        <li><a href="{{ route('home.leaderboard') }}">Leaderboard</a></li>
                        <li><a href="" {{ route('home.trading') }}"">Our Blog</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Platform </h2>
                    <ul>
                        <li><a href="https://yyy3.rithmic.com/?page_id=16" target="_blank">Rithmic </a></li>
                        <li><a href="https://ninjatrader.com/es/LP/VendorDemo/" target="_blank">NinjaTrader</a></li>
                        <li><a href="https://www.tradingview.com/" target="_blank">Tradingview </a></li>
                    </ul>
                </div>

                <div class="ft-main-item">
                    <h2 class="ft-title">About us</h2>
                    <ul>
                        <li><a href="{{ route('home.trading') }}"> blog</a></li>
                        <li><a href="{{ route('home.about') }}"> About </a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="ft-main-item">
                    <h2 class="ft-title">Contact </h2>
                    <ul>
                        <li><a href="mailto:support@winbance.com">Support@winbance.com</a></li>
                        <li><a href="tel:+34 632120941">+34 632120941</a></li>
                           <li><a href="tel:+57 3122255555">+57 3122255555</a></li>
                        <li><a href="#">WhatsApp</a></li>
                    </ul>
                </div>

            </section>
      <div class="p_links">  <a href="{{ route('home.privacy') }}" style="text-decoration : white;     font-size: 18px;; margin-left:30px;">Privacy Policy</a>
            <a href="{{ route('home.conditions') }}" style="text-decoration : white;     font-size: 18px;; margin-left:30px;">Conditions</a>
           <a href="{{ route('home.risks') }}" style="text-decoration : white;     font-size: 18px;; margin-left:30px;">Risks</a>
        </div>
            <!-- Footer social -->
            <section class="ft-social">
                <ul class="ft-social-list">
                    <li class="contact_icon"><a href="https://web.facebook.com/people/Winbance/100086258052616/" target="_blank" style="text-align: center; color: #000;
                        display: block;"><i class="bi bi-facebook"></i></a></li>
                    <li class="contact_icon"><a href="https://twitter.com/winbance?s=21&t=6NWwVq8wVuSe40Trq3P-EA" target="_blank" style="text-align: center;  color: #000;
                        display: block;"><i class="bi bi-twitter"></i></a></li>
                    <li class="contact_icon"><a href="https://www.instagram.com/winbance/" target="_blank" style="text-align: center;
                        color: #000;
                        display: block;"><i class="bi bi-instagram"></i></a></li>
                    <li class="contact_icon"><a href="https://www.youtube.com/c/MEEDBNF" target="_blank" style="text-align: center;
                        color: #000;
                        display: block;"><i class="bi bi-youtube"></i></a></li>
                </ul>
            </section>
        </div>
        <!-- Footer legal -->
        <section class="ft-legal">
            <div class="container">
                <ul class="ft-legal-list">
                    <li>
                        <p style="font-size: 12px;">Full Risk Disclosure: Futures and Forex trading contains significant risks and is not for every investor. The investor will likely lose all or more of the initial investment.
                            Venture capital is money that can be wasted without jeopardizing one's financial security or lifestyle. Only risk capital should be used for trading and only those with
                            sufficient risk capital should consider trading. Past performance is not necessarily indicative of future results. CFTC Rule 4.41: Hypothetical or simulated performance
                            results have certain limitations. Unlike the actual performance record, simulated results do not represent actual trading. Also, since the trades are not executed, the r
                            esults may be under or over the impact, if any, of some market factors, such as a lack of liquidity. Simulated trading software is generally subject to the fact that it
                            is designed to take advantage of hindsight. No representation is being made that any account will or is likely to achieve profits or losses similar to those shown.


                            Risk Disclosure: Futures and forex trading contains substantial risk and is not for every investor. An investor could potentially lose all or more than the initial investment.
                            Risk capital is money that can be lost without jeopardizing ones’ financial security or lifestyle. Only risk capital should be used for trading and only those with sufficient
                            risk capital should consider trading. Past performance is not necessarily indicative of future results.

                            Hypothetical Performance Disclosure: Hypothetical performance results have many inherent limitations, some of which are described below. No representation is being made that any
                            account will or is likely to achieve profits or losses similar to those shown; in fact, there are frequently sharp differences between hypothetical performance results and the
                            actual results subsequently achieved by any particular trading program. One of the limitations of hypothetical performance results is that they are generally prepared with the
                            benefit of hindsight. In addition, hypothetical trading does not involve financial risk, and no hypothetical trading record can completely account for the impact of financial
                            risk of actual trading. for example, the ability to withstand losses or to adhere to a particular trading program in spite of trading losses are material points which can also
                            adversely affect actual trading results. There are numerous other factors related to the markets in general or to the implementation of any specific trading program which cannot
                            be fully accounted for in the preparation of hypothetical performance results and all which can adversely affect trading results.</p>
                        </a>
                    </li>
                    {{-- <li><a href="#">Privacy Policy</a></li> --}}
                    <li style="display: block;
                    margin-left: auto;
                    margin-right: auto; font-size: 15px;">
                        2022 © Copyright - winbance.com Made for trading</li>
                </ul>
            </div>
        </section>

    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="//code.tidio.co/3yll0vfsckioqrfps4viojulonwjlfm1.js"async></script>


    <!-- Vendor JS Files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</html>