<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pure Shine | Laat het shinen</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    
    <link href="{{ asset('font/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{ asset('font/css/brands.css')}}" rel="stylesheet">
    <link href="{{ asset('font/css/solid.css')}}" rel="stylesheet">
    <script src="{{ asset('assets/js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

<body>
    </head>
    
    <body ng-app="">
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    




         <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-6 ltn__header-transparent gradient-color-2">

        <!-- ltn__header-top-area end -->
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black plr--9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        {{-- <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index.html"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix get-support-color-white">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li><a href="contact.html">HOME</a></li>
                                        <li><a href="contact.html">PORTFOLIO</a></li>
                                        <li><a href="contact.html">CLEANING</a></li>
                                        <li><a href="contact.html">DETAILING</a></li>
                                        <li><a href="contact.html">COATING</a></li>
                                        {{-- <li><a href="contact.html">PRODUCTS</a></li> --}}
                                        <li><a href="contact.html">PORTFOLIO</a></li>
                                            <li class="special-link"><a href="{{ route('appointment.index') }}">Maak Afspraak</a></li>
                                        </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->






    <div style="min-height:750px">
        @yield('page-content')
    </div>

    <!-- ***** Footer Start ***** -->
            <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
            <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
                <div class="footer-top-area  section-bg-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-md-5">
                                <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bg="img/bg/4.jpg">
                                    <h6 class="ltn__secondary-color text-uppercase">// tijdschema</h6>
                                    <h4 class="footer-title">Ontmoet in de tijdlijn.</h4>
                                    <ul>
                                        <li>Maandag <span>07:00AM - 20:00PM</span></li>
                                        <li>Dinsdag <span>07:00AM - 20:00PM</span></li>
                                        <li>Woensdag <span>07:00AM - 20:00PM</span></li>
                                        <li>Donderdag <span>07:00AM - 20:00PM</span></li>
                                        <li>Vrijdag <span>07:00AM - 20:00PM</span></li>
                                        <li>Zaterdag <span>07:00AM - 20:00PM</span></li>
                                        <li>Zondag <span>Officiële feestdag</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-7">
                                <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                                    <h4 class="footer-title">Diensten.</h4>
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="service.html">Motor Diagnostiek</a></li>
                                            <li><a href="service.html">Beschadigde Voertuigen</a></li>
                                            <li><a href="service.html">Airconditioning Evacuatie</a></li>
                                            <li><a href="service.html">Anti Blokkeer Rem Service</a></li>
                                            <li><a href="service.html">Computer Diagnostiek</a></li>
                                            <li><a href="service.html">Prestatie-upgrades</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="service.html">Auto Wassen & Reinigen</a></li>
                                            <li><a href="service.html">Kies uw Reparaties</a></li>
                                            <li><a href="service.html">Gratis Consultancy</a></li>
                                            <li><a href="service.html">Noodtijd</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="footer-widget footer-blog-widget">
                                    <h4 class="footer-title">Nieuws Feeds.</h4>
                                    <div class="ltn__footer-blog-item">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> 24 juni 2020</li>
                                            </ul>
                                        </div>
                                        <h4 class="ltn__blog-title"><a href="blog-details.html">De tak van de biologie die zich bezighoudt met het normale.</a></h4>
                                    </div>
                                    <div class="ltn__footer-blog-item">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> 24 juni 2020</li>
                                            </ul>
                                        </div>
                                        <h4 class="ltn__blog-title"><a href="blog-details.html">De tak van de biologie die zich bezighoudt met het normale.</a></h4>
                                    </div>
                                    <div class="ltn__footer-blog-item">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> 24 juni 2020</li>
                                            </ul>
                                        </div>
                                        <h4 class="ltn__blog-title"><a href="blog-details.html">De tak van de biologie die zich bezighoudt met het normale.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ltn__copyright-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="site-logo-wrap">
                                    <div class="site-logo">
                                        <a href="index.html"><img src="img/logo-2.png" alt="Logo"></a>
                                    </div>
                                    <div class="get-support">
                                        <div class="get-support-info">
                                            <h6>Auteursrecht & Ontwerp Door</h6>
                                            <h4>Bedrijf - <span class="current-year"></span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 align-self-center">
                                <div class="footer-menu text-right">
                                    <ul>
                                        <li><a href="#">Algemene Voorwaarden</a></li>
                                        <li><a href="#">Claim</a></li>
                                        <li><a href="#">Privacy & Beleid</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER AREA END -->

        </div>
        <!-- Body main wrapper end -->

            <!-- preloader area start -->
            <div class="preloader d-none" id="preloader">
                <div class="preloader-inner">
                    <div class="spinner">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>
            </div>
  </body>
</html>