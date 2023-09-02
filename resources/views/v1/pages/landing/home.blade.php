@extends('v1.layouts.default', ['title' => 'Winbance'])
@section('content')
<!-- Begin menu -->
<header id="header" class="">
   <nav class="navbar navbar-expand-md navbar-dark ">
      <div class="container">
         <a class="logo" href="#"><img src="assets/images/logo_site.png" alt="" class="img-fluid  "></a>
        
         <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Challange</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Trading
                  </a>
                  <ul>
                     <li><a href="https://yyy3.rithmic.com/?page_id=16" target="_blank">Rithmic </a></li>
                     <li><a href="https://ninjatrader.com/es/LP/VendorDemo/" target="_blank">NinjaTrader</a></li>
                     <li><a href="https://www.tradingview.com/" target="_blank">Tradingview </a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Platfrom</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                  </a>
                  <ul >
                     <li><a href="mailto:support@winbance.com">Support@winbance.com</a></li>
                     <li><a href="tel:+34 632120941">+34 632120941</a></li>
                     <li><a href="tel:+57 3122255555">+57 3122255555</a></li>
                     <li><a href="#">WhatsApp</a></li>
                  </ul>
               </li>
               <li class="nav-item">
                  <a class="nav-link">FAQ</a>
               </li>
            </ul>
            <ul class="navbar-nav ">
               <li class="d-flex">
                  <button type="button" class=" nbtn mr-4 inactivo btn bg-transparent ">SIGN UP</button>
                  <button type="button" class="nbtn activo  btn">Client Area</button>
               </li>
               <li class="dropdown d-flex" style=" margin: 0 3rem !important;" translate="no">
                  <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
                  <a href="" style="padding-left: 8px;"><i class="bi bi-chevron-down"> </i></a>
                  <ul class="dropdown-content language" translate="no">
                     <li class="lang-li" data-google-lang="es">
                        <a href="#">
                           <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Spain.png" />
                           <p class="lang-text">ES</p>
                        </a>
                     </li>
                     <li class="lang-li" data-google-lang="en">
                        <a href="#">
                           <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_United_Kingdom.png" />
                           <p class="lang-text">EN</p>
                        </a>
                     </li>
                     <li class="lang-li" data-google-lang="fr">
                        <a href="#">
                           <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_France.png" />
                           <p class="lang-text">FR</p>
                        </a>
                     </li>
                     <li class="lang-li" data-google-lang="it">
                        <a href="#">
                           <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Italy.png" />
                           <p class="lang-text">IT</p>
                        </a>
                     </li>
                     <li class="lang-li" data-google-lang="ar">
                        <a href="#">
                           <img class="lang-flag" id="lang_flag" src="assets/images/flags/arabia_of_flag_saudi_icon.png" />
                           <p class="lang-text">AR</p>
                        </a>
                     </li>
                     <li class="lang-li" data-google-lang="tr">
                        <a href="#">
                           <img class="lang-flag" id="lang_flag" src="https://cdn2.iconfinder.com/data/icons/world-flag-icons/128/Flag_of_Turkey.png" />
                           <p class="lang-text">TR</p>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
      <i class="bi bi-list mobile-nav-toggle"></i>
   </nav>
  
</header>
<!-- END menu -->


<!-- Begin Hero Section -->
<!-- END Hero Section -->
@endsection