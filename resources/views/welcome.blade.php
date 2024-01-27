@extends('layouts.navbar', ['title'=> 'Home'])

@section('page-content')
<div class="body-wrapper">



    <!-- Utilize Cart Menu Start -->
    <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <span class="ltn__utilize-menu-title">Cart</span>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="mini-cart-product-area ltn__scrollbar">
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/img/product/1.png") }}" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="{{ url("#") }}">Wheel Bearing Retainer</a></h6>
                        <span class="mini-cart-quantity">1 x $65.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/img/product/2.png") }}" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="{{ url("#") }}">Brake Conversion Kit</a></h6>
                        <span class="mini-cart-quantity">1 x $85.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/img/product/3.png") }}" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="{{ url("#") }}">OE Replica Wheels</a></h6>
                        <span class="mini-cart-quantity">1 x $92.00</span>
                    </div>
                </div>
                <div class="mini-cart-item clearfix">
                    <div class="mini-cart-img">
                        <a href="{{ url("#") }}"><img src="{{ asset("/img/product/4.png") }}" alt="Image"></a>
                        <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                    </div>
                    <div class="mini-cart-info">
                        <h6><a href="{{ url("#") }}">Shock Mount Insulator</a></h6>
                        <span class="mini-cart-quantity">1 x $68.00</span>
                    </div>
                </div>
            </div>
            <div class="mini-cart-footer">
                <div class="mini-cart-sub-total">
                    <h5>Subtotal: <span>$310.00</span></h5>
                </div>
                <div class="btn-wrapper">
                    <a href="{{ url("cart.html") }}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                    <a href="{{ url("cart.html") }}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                </div>
                <p>Free Shipping on All Orders Over $100!</p>
            </div>

        </div>
    </div>
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="{{ url("index.html") }}"><img src="{{ asset("/img/logo.png") }}" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="{{ url("#") }}">Home</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url("index.html") }}">Home Style - 01</a></li>
                            <li><a href="{{ url("index-2.html") }}">Home Style - 02</a></li>
                            <li><a href="{{ url("index-3.html") }}">Home Style - 03</a></li>
                            <li><a href="{{ url("index-4.html") }}">Home Style - 04</a></li>
                            <li><a href="{{ url("index-5.html") }}">Home Style - 05 <span class="menu-item-badge">video</span></a></li>
                            <li><a href="{{ url("index-6.html") }}">Home Style - 06</a></li>
                            <li><a href="{{ url("index-7.html") }}">Home Style - 07</a></li>
                            <li><a href="{{ url("index-8.html") }}">Home Style - 08 <span class="menu-item-badge">Map</span></a></li>
                            <li><a href="{{ url("index-9.html") }}">Home Style - 09</a></li>
                            <li><a href="{{ url("index-10.html") }}">Home Style - 10</a></li>
                            <li><a href="{{ url("index-11.html") }}">Home Style - 11</a></li>
                            <li><a href="{{ url("index-12.html") }}">Home Style - 12</a></li>
                            <li><a href="{{ url("index-13.html") }}">Home Style - 13</a></li>
                            <li><a href="{{ url("index-14.html") }}">Home Style - 14</a></li>
                            <li><a href="{{ url("index-15.html") }}">Home Style - 15</a></li>
                            <li><a href="{{ url("index-16.html") }}">Home Style - 16</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url("#") }}">About</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url("about.html") }}">About</a></li>
                            <li><a href="{{ url("service.html") }}">Services</a></li>
                            <li><a href="{{ url("service-details.html") }}">Service Details</a></li>
                            <li><a href="{{ url("portfolio.html") }}">Portfolio</a></li>
                            <li><a href="{{ url("portfolio-2.html") }}">Portfolio - 02</a></li>
                            <li><a href="{{ url("portfolio-details.html") }}">Portfolio Details</a></li>
                            <li><a href="{{ url("team.html") }}">Team</a></li>
                            <li><a href="{{ url("team-details.html") }}">Team Details</a></li>
                            <li><a href="{{ url("faq.html") }}">FAQ</a></li>
                            <li><a href="{{ url("locations.html") }}">Google Map Locations</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url("#") }}">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url("shop.html") }}">Shop</a></li>
                            <li><a href="{{ url("shop-grid.html") }}">Shop Grid</a></li>
                            <li><a href="{{ url("shop-left-sidebar.html") }}">Shop Left sidebar</a></li>
                            <li><a href="{{ url("shop-right-sidebar.html") }}">Shop right sidebar</a></li>
                            <li><a href="{{ url("product-details.html") }}">Shop details </a></li>
                            <li><a href="{{ url("product-details-2.html") }}">Shop details 02</a></li>
                            <li><a href="{{ url("shop-car-grid.html") }}">Shop Car Grid</a></li>
                            <li><a href="{{ url("shop-car-left-sidebar.html") }}">Shop Car Left sidebar</a></li>
                            <li><a href="{{ url("shop-car-right-sidebar.html") }}">Shop Car right sidebar</a></li>
                            <li><a href="{{ url("product-details-3.html") }}">Shop Car details </a></li>
                            <li><a href="{{ url("cart.html") }}">Cart</a></li>
                            <li><a href="{{ url("wishlist.html") }}">Wishlist</a></li>
                            <li><a href="{{ url("checkout.html") }}">Checkout</a></li>
                            <li><a href="{{ url("order-tracking.html") }}">Order Tracking</a></li>
                            <li><a href="{{ url("account.html") }}">My Account</a></li>
                            <li><a href="{{ url("login.html") }}">Sign in</a></li>
                            <li><a href="{{ url("register.html") }}">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url("#") }}">News</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url("blog.html") }}">News</a></li>
                            <li><a href="{{ url("blog-grid.html") }}">News Grid</a></li>
                            <li><a href="{{ url("blog-left-sidebar.html") }}">News Left sidebar</a></li>
                            <li><a href="{{ url("blog-right-sidebar.html") }}">News Right sidebar</a></li>
                            <li><a href="{{ url("blog-details.html") }}">News details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url("#") }}">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{ url("about.html") }}">About</a></li>
                            <li><a href="{{ url("service.html") }}">Services</a></li>
                            <li><a href="{{ url("service-details.html") }}">Service Details</a></li>
                            <li><a href="{{ url("portfolio.html") }}">Portfolio</a></li>
                            <li><a href="{{ url("portfolio-2.html") }}">Portfolio - 02</a></li>
                            <li><a href="{{ url("portfolio-details.html") }}">Portfolio Details</a></li>
                            <li><a href="{{ url("team.html") }}">Team</a></li>
                            <li><a href="{{ url("team-details.html") }}">Team Details</a></li>
                            <li><a href="{{ url("faq.html") }}">FAQ</a></li>
                            <li><a href="{{ url("history.html") }}">History</a></li>
                            <li><a href="{{ url("appointment.html") }}">Appointment</a></li>
                            <li><a href="{{ url("locations.html") }}">Google Map Locations</a></li>
                            <li><a href="{{ url("404.html") }}">404</a></li>
                            <li><a href="{{ url("contact.html") }}">Contact</a></li>
                            <li><a href="{{ url("coming-soon.html") }}">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url("contact.html") }}">Contact</a></li>
                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="{{ url("account.html") }}" title="My Account">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            My Account
                        </a>
                    </li>
                    <li>
                        <a href="{{ url("wishlist.html") }}" title="Wishlist">
                            <span class="utilize-btn-icon">
                                <i class="far fa-heart"></i>
                                <sup>3</sup>
                            </span>
                            Wishlist
                        </a>
                    </li>
                    <li>
                        <a href="{{ url("cart.html") }}" title="Shoping Cart">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>5</sup>
                            </span>
                            Shoping Cart
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a href="{{ url("#") }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ url("#") }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ url("#") }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="{{ url("#") }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-4) -->
    <div class="ltn__slider-area ltn__slider-4 ">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-4 bg-image bg-overlay-theme-black-80" data-bg="img/slider/background.jpg">
                <div class="ltn__slide-item-inner text-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-car-dealer-form">
                                    <h1 class="slide-title text-color-white text-center mb-10">PURE SHINE. WASSEN OP LOCATIE</h1>
                                    <h3 class="text-color-white text-center mb-30">Over 100+ tevreden klanten</h3>
                                    <div class="ltn__car-dealer-form-tab">
                                        <div class="tab-content pb-10">
                                            <div class="car-dealer-form-inner">
                                                <form action="#" class="ltn__car-dealer-form-box row"> 
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                        <select class="nice-select">
                                                            <option>Selecteer voertuigtype</option>
                                                            <option>Auto</option>
                                                            <option>Bus</option>
                                                            <option>Stationwagen</option>
                                                            <option>Motorfiets</option>
                                                            <option>Bestelwagen</option>
                                                        </select>
                                                    </div> 
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-cog col-lg-3 col-md-6">
                                                        <select class="nice-select">
                                                            <option>Selecteer waspakket</option>
                                                            <option>Basis</option>
                                                            <option>Premium</option>
                                                            <option>Deluxe</option>
                                                            <option>Ultimate</option>
                                                        </select>
                                                    </div> 
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                        <select class="nice-select">
                                                            <option>Selecteer datum</option>
                                                            <option>2022-01-01</option>
                                                            <option>2022-01-02</option>
                                                            <option>2022-01-03</option>
                                                            <option>2022-01-04</option>
                                                            <option>2022-01-05</option>
                                                            <option>2022-01-06</option>
                                                        </select>
                                                    </div>
                                                    <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                        <div class="btn-wrapper text-center mt-0">
                                                            <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                                            <a href="{{ url("shop-right-sidebar.html") }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">Maak een afspraak</a>
                                                        </div>
                                                    </div>
                                                </form>
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
    <!-- SLIDER AREA END -->
    <!-- PRICING PLAN AREA START -->
    <div class="ltn__pricing-plan-area pt-115 pb-120" id="liton_pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">Onze prijzen</h6>
                        <h1 class="section-title">Pakketen<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-50">
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__pricing-plan-item text-center">
                        <h2 class="pricing-title">Basis Pakket</h2>
                        <div class="pricing-price">
                            <h2><sup>€</sup>49<sub>,-</sub></h2>
                        </div>
                        <ul>
                        <li>Exterieur Wassen</li>
                            <li>Banden Reinigen</li>
                            <li>Interieur Stofzuigen</li>
                            <li>Ruiten Reinigen</li>
                            <li>Dashboard Afvegen</li>
                            <li>Wielen Reinigen</li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="#" class="theme-btn-2 btn">AANSCHAFFEN</a>
                        </div>
                    </div>
                </div>
  
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__pricing-plan-item text-center active ---active-price">
                        <span class="pricing-badge">Meest Populair</span>
                        <h2 class="pricing-title">Premium Pakket</h2>
                        <div class="pricing-price">
                            <h2><sup>€</sup>79<sub>,-</sub></h2>
                        </div>
                        <ul>
                            <li>Exterieur Wassen</li>
                            <li>Banden Reinigen</li>
                            <li>Interieur Stofzuigen</li>
                            <li>Ruiten Reinigen</li>
                            <li>Dashboard Afvegen</li>
                            <li>Wielen Reinigen</li>
                            <li>Waxen</li>
                            <li>Polijsten</li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="#" class="theme-btn-2 btn">AANSCHAFFEN</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__pricing-plan-item text-center">
                        <h2 class="pricing-title">Deluxe Pakket</h2>
                        <div class="pricing-price">
                            <h2><sup>€</sup>99<sub>,-</sub></h2>
                        </div>
                        <ul>
                            <li>Exterieur Wassen</li>
                            <li>Banden Reinigen</li>
                            <li>Interieur Stofzuigen</li>
                            <li>Ruiten Reinigen</li>
                            <li>Dashboard Afvegen</li>
                            <li>Wielen Reinigen</li>
                            <li>Waxen</li>
                            <li>Polijsten</li>
                            <li>Onderkant Reinigen</li>
                            <li>Motorruimte Reinigen</li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="#" class="theme-btn-2 btn">AANSCHAFFEN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRICING PLAN AREA END -->

    <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Vragen</h6>
                            <h1 class="section-title white-color">06 1234567</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="{{ url("tel:+123456789") }}" class="theme-btn-1 btn btn-effect-1">Bel ons</a>
                            <a href="{{ url("contact.html") }}" class="btn btn-transparent btn-effect-4 white-color">Contacteer ons</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <img src="{{ asset('/img/bg/12.png') }}" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <!-- <img src="{{ asset("/img/bg/11.png") }}" alt="#"> -->
        </div>
    </div>
    <!-- CALL TO ACTION END -->



      <!-- PRODUCT TAB GEBIED START (product-item-3) -->
      <div class="ltn__product-tab-gebied ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectie-titel-gebied ltn__sectie-titel-2 text-center">
                        <h6 class="sectie-ondertitel ltn__secundaire-kleur"> Onderdelen</h6>
                        <h1 class="sectie-titel">Onze Producten</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                        <div class="nav">
                            <a class="actief weergeven" data-toggle="tab" href="{{ url("#liton_tab_3_1") }}">Wielen</a>
                            <a data-toggle="tab" href="{{ url("#liton_tab_3_2") }}" class="">Geluiden</a>
                            <a data-toggle="tab" href="{{ url("#liton_tab_3_3") }}" class="">Uitgelicht</a>
                            <a data-toggle="tab" href="{{ url("#liton_tab_3_4") }}" class="">Kleuren</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_3_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/1.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Wheel Bearing Retainer</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/2.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Brake Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/3.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Shock Mount Insulator</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/4.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Tail Light Lens</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/5.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Coil Spring Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/7.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">OE Replica Wheels</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_2">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/4.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Tail Light Lens</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/5.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Coil Spring Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/7.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">OE Replica Wheels</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/1.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Wheel Bearing Retainer</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/2.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Brake Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/3.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Shock Mount Insulator</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/7.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">OE Replica Wheels</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/1.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Wheel Bearing Retainer</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/4.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Tail Light Lens</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/5.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Coil Spring Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/2.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Brake Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/3.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Shock Mount Insulator</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_3_4">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/5.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Coil Spring Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/2.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Brake Conversion Kit</a></h2>
                                                <div class="product-price">
                                                    <span>$62.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/7.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">OE Replica Wheels</a></h2>
                                                <div class="product-price">
                                                    <span>$150.00</span>
                                                    <del>$180.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/1.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Wheel Bearing Retainer</a></h2>
                                                <div class="product-price">
                                                    <span>$149.00</span>
                                                    <del>$162.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/4.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Tail Light Lens</a></h2>
                                                <div class="product-price">
                                                    <span>$78.00</span>
                                                    <del>$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="{{ url("product-details.html") }}"><img src="{{ asset("/img/product/3.png") }}" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url("#") }}" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="{{ url("product-details.html") }}">Shock Mount Insulator</a></h2>
                                                <div class="product-price">
                                                    <span>$75.00</span>
                                                    <del>$92.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->

    <!-- COUNTDOWN AREA START -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 ltn__call-to-action-4-2 bg-overlay-black-50 bg-image pt-110 pb-120" data-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-color-white text-center">
                        <h2 class="ltn__secondary-color">Schiet Op!</h2>
                        <h1 class="h1">Black Friday deal 50% korting</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Explicabo id, unde hic molestias omnis.</p>
                        <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2024/11/01"></div>
                        <div class="btn-wrapper animated">
                            <a href="{{ url("shop.html") }}" class="theme-btn-1 btn btn-effect-1 text-uppercase">Bestel nu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="ltn__call-to-4-img-1">
            <img src="{{ asset("/img/product/7.png") }}" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="{{ asset("/img/bg/11.png") }}" alt="#">
        </div> -->
    </div>
    <!-- COUNTDOWN AREA END -->

    <!-- PROGRESS BAR AREA START -->
    <div class="ltn__progress-bar-area before-bg-right--- pt-115 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__progress-bar-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">vaardigheden</h6>
                            <h1 class="section-title">We hebben het meest
                                vaardige team ooit<span>.</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                        </div>
                        <div class="ltn__progress-bar-inner">
                            <div class="ltn__progress-bar-item">
                                <p>Auto reparatie</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 72%">
                                        <span>72%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Autoverhuur service</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 74%">
                                        <span>74%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ltn__progress-bar-item">
                                <p>Auto schoonmaak & onderdelen</p>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".5s" role="progressbar" style="width: 81%">
                                        <span>81%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50-- bg-image ml-30" data-bg="img/others/5.jpg">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROGRESS BAR AREA END -->


    <!-- BANNER AREA START -->
    <div class="ltn__banner-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ url("shop.html") }}"><img src="{{ asset("/img/banner/1.jpg") }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="{{ url("shop.html") }}"><img src="{{ asset("/img/banner/2.jpg") }}" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

    <!-- VIDEO AREA START -->
    <div class="ltn__video-popup-area ltn__video-popup-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-10-- bg-image" data-bg="img/bg/15.jpg">
                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VIDEO AREA END -->

    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 bg-image bg-overlay-theme-black-90 pt-290 pb-110 plr--9" data-bg="img/bg/7.jpg">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset("/img/brand-logo/b1.png") }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset("/img/brand-logo/b2.png") }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset("/img/brand-logo/b3.png") }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset("/img/brand-logo/b4.png") }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset("/img/brand-logo/b5.png") }}" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="{{ asset("/img/brand-logo/b3.png") }}" alt="Brand Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-3) -->
    <div class="ltn__testimonial-area bg-image pt-115 pb-70" data-bg="img/bg/8.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color"></h6>
                        <h1 class="section-title">Feedbacks<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-2-active slick-arrow-3">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="{{ asset("/img/blog/4.jpg") }}" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset("/img/testimonial/1.jpg") }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Jacob William</h4>
                                    <h6>Founder, Browni Co.</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="{{ asset("/img/blog/5.jpg") }}" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset("/img/testimonial/1.jpg") }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Ethan James</h4>
                                    <h6>Admin</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="{{ asset("/img/blog/6.jpg") }}" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset("/img/testimonial/1.jpg") }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Jacob William</h4>
                                    <h6>Founder, Browni Co.</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="{{ asset("/img/blog/1.jpg") }}" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset("/img/testimonial/1.jpg") }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Liam Mason</h4>
                                    <h6>Officer</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="{{ asset("/img/blog/2.jpg") }}" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="{{ asset("/img/testimonial/1.jpg") }}" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Noah Alexander</h4>
                                    <h6>Professor</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- TESTIMONIAL AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area">
        <div class="container-fluid">
            <div class="row ltn__image-slider-4-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ url("img/img-slide/21.jpg") }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset("/img/img-slide/21.jpg") }}" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="{{ url("portfolio-details.html") }}">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ url("portfolio-details.html") }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ url("img/img-slide/22.jpg") }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset("/img/img-slide/22.jpg") }}" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="{{ url("portfolio-details.html") }}">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ url("portfolio-details.html") }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ url("img/img-slide/23.jpg") }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset("/img/img-slide/23.jpg") }}" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="{{ url("portfolio-details.html") }}">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ url("portfolio-details.html") }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ url("img/img-slide/24.jpg") }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset("/img/img-slide/24.jpg") }}" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="{{ url("portfolio-details.html") }}">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ url("portfolio-details.html") }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="{{ url("img/img-slide/22.jpg") }}" data-rel="lightcase:myCollection">
                            <img src="{{ asset("/img/img-slide/22.jpg") }}" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="{{ url("portfolio-details.html") }}">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="{{ url("portfolio-details.html") }}" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- BLOG AREA START (blog-4) -->
    <div class="ltn__blog-area pt-85 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// blog & insights</h6>
                        <h1 class="section-title">News Feeds<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1">
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="img/blog/1.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url("blog-details.html") }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="img/blog/2.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url("blog-details.html") }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="img/blog/3.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url("blog-details.html") }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bg="img/blog/4.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url("blog-details.html") }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4">
                        <!-- <div class="ltn__blog-img">
                            <a href="{{ url("blog-details.html") }}"><img src="img/blog/21.jpg" alt="#"></a>
                        </div> -->
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="{{ url("#") }}"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="{{ url("blog-details.html") }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

    <div class="contact-feature-area before-bg-bottom mb--30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__contact-feature-item">
                        <div class="ltn__contact-feature-icon">
                            <img src="{{ asset("/img/icons/7.png") }}" alt="Icon Image">
                        </div>
                        <div class="ltn__contact-feature-info">
                            <a href="{{ url("tel:+123456789") }}">
                                <span class="h6">+123-456-789</span><br>
                                <span class="h2">Make A Call</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__contact-feature-item">
                        <div class="ltn__contact-feature-icon">
                            <img src="{{ asset("/img/icons/8.png") }}" alt="Icon Image">
                        </div>
                        <div class="ltn__contact-feature-info">
                            <a href="{{ url("mailto:info@webmail.com") }}">
                                <span class="h6">info@webmail.com</span><br>
                                <span class="h2">Support Mail</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ltn__contact-feature-item">
                        <div class="ltn__contact-feature-icon">
                            <img src="{{ asset("/img/icons/9.png") }}" alt="Icon Image">
                        </div>
                        <div class="ltn__contact-feature-info">
                            <a href="{{ url("locations.html") }}">
                                <span class="h6">12/A, New York, USA</span><br>
                                <span class="h2">Office Address</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area footer-top-extra-padding  section-bg-2 bg-image" data-bg="img/bg/footer-bg-1.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget footer-about-widget clearfix">
                            <h4 class="footer-title">About Us.</h4>
                            <p>Corporate clients and leisure travelers has been relying on <a href="{{ url("contact.html") }}">Groundlink</a> for dependable,
                                safe, and professional chauffeured car service in major cities across <a href="{{ url("locations.html") }}">World</a>.
                                Indeed, it has been more than one decade and five years that Groundlink</p>
                            <div class="ltn__social-media-4">
                                <ul>
                                    <li><a href="{{ url("#") }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ url("#") }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ url("#") }}" title="Behance"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="{{ url("#") }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Services.</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ url("service.html") }}">Engine Diagnostics</a></li>
                                    <li><a href="{{ url("service.html") }}">Vehicles Damaged</a></li>
                                    <li><a href="{{ url("service.html") }}">Air Conditioning Evac</a></li>
                                    <li><a href="{{ url("service.html") }}">Anti Lock Brake Service</a></li>
                                    <li><a href="{{ url("service.html") }}">Computer Diagnostics</a></li>
                                    <li><a href="{{ url("service.html") }}">Performance Upgrades</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ url("service.html") }}">Car Wash & Cleaning</a></li>
                                    <li><a href="{{ url("service.html") }}">Choose your Repairs</a></li>
                                    <li><a href="{{ url("service.html") }}">Free Consultancy</a></li>
                                    <li><a href="{{ url("service.html") }}">Emergency Time</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">News Feeds.</h4>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 28, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">Electric Car Maintenance, Servicing & Repairs</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="{{ url("blog-details.html") }}">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{ url("index.html") }}"><img src="{{ asset("/img/logo-2.png") }}" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Copyright & Design By</h6>
                                    <h4>Example - <span class="current-year"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-right">
                            <ul>
                                <li><a href="{{ url("#") }}">Terms & Conditions</a></li>
                                <li><a href="{{ url("#") }}">Claim</a></li>
                                <li><a href="{{ url("#") }}">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="{{ asset("/img/product/4.png") }}" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="{{ url("#") }}"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="{{ url("#") }}"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="{{ url("#") }}"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="{{ url("#") }}"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3>Brake Conversion Kit</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="{{ url("#") }}">Parts</a>
                                                            <a href="{{ url("#") }}">Car</a>
                                                            <a href="{{ url("#") }}">Seat</a>
                                                            <a href="{{ url("#") }}">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url("#") }}" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span>ADD TO CART</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-3">
                                                <ul>
                                                    <li>
                                                        <a href="{{ url("#") }}" class="" title="Wishlist" data-toggle="modal" data-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span>Add to Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url("#") }}" class="" title="Compare" data-toggle="modal" data-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="{{ url("#") }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="{{ url("#") }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="{{ url("#") }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="{{ url("#") }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="{{ asset("/img/product/1.png") }}" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="{{ url("product-details.html") }}">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="{{ url("cart.html") }}" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="{{ url("checkout.html") }}" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="{{ asset("/img/icons/payment.png") }}" alt="#">
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="{{ asset("/img/product/7.png") }}" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="{{ url("product-details.html") }}">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="{{ url("wishlist.html") }}" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="{{ asset("/img/icons/payment.png") }}" alt="#">
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
    <!-- MODAL AREA END -->

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
    @endsection
