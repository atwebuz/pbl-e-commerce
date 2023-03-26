<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/aments/aments/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 00:25:28 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aments - Car Accessories Shop HTML Template</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/plaza-icon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-ui.min.css')}}"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/venobox.min.css')}}"> -->

    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">




</head>

<body>

    <!-- ...:::: Start Header Section:::... -->
    <header class="header-section d-lg-block d-none">
        <!-- Start Header Top Area -->
        <div class="header-top">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-6">
                        <div class="header-top--left">
                            <span>Welcome to our store!</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-top--right">
                            <!-- Start Header Top Menu -->
                            <ul class="header-user-menu">
                                <li class="has-user-dropdown">
                                    <a href="#">Setting</a>
                                    <!-- Header Top Menu's Dropdown -->
                                    <ul class="user-sub-menu">
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Shopping Cart</a></li>
                                        <li><a href="#">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="has-user-dropdown">
                                    <a href="#">$ USD</a>
                                    <!-- Header Top Menu's Dropdown -->
                                    <ul class="user-sub-menu">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                                <li class="has-user-dropdown">
                                    <a href="#">English</a>
                                    <!-- Header Top Menu's Dropdown -->
                                    <ul class="user-sub-menu">
                                        <li><a href="#"><img class="user-sub-menu-in-icon" src="{{asset('assets/images/icon/lang-en.png')}}" alt=""> English</a></li>
                                        <li><a href="#"><img class="user-sub-menu-in-icon" src="{{asset('assets/images/icon/lang-uz.png')}}" alt=""> Uzbek</a></li>
                                        <li><a href="#"><img class="user-sub-menu-in-icon" src="{{asset('assets/images/icon/lang-ru.png')}}" alt=""> Russian</a></li>
                                    </ul>
                                </li>
                                <li><a href="compare.html"><i class="icon-repeat"></i> Compare (0)</a></li>
                            </ul> <!-- End Header Top Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Header Top Area -->

        <!-- Start Header Center Area -->
        <div class="header-center">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-3">
                        <!-- Logo Header -->
                        <div class="header-logo">
                            <a href="index.html"><img src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Start Header Search -->
                        <div class="header-search">
                            <form action="#" method="post">
                                <div class="header-search-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search entire store here ..." required>
                                    <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div> <!-- End Header Search -->
                    </div>
                    <div class="col-3 text-end">
                        <!-- Start Header Action Icon -->
                        <ul class="header-action-icon">
                            <li>
                                <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                    <i class="icon-heart"></i>
                                    <span class="header-action-icon-item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="header-action-icon-item-count">3</span>
                                </a>
                            </li>
                        </ul> <!-- End Header Action Icon -->
                    </div>
                </div>
            </div>
        </div> <!-- End Header Center Area -->

        <!-- Start Bottom Area -->
        <div class="header-bottom sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Header Main Menu -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a class="active main-menu-link" href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown has-megaitem">
                                        <a href="product-details-default.html">Shop <i class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Shop Layouts</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                                        <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                                        <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                                        <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Other Pages</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="my-account.html">My Account</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Product Types</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="product-details-default.html">Product Default</a></li>
                                                        <li><a href="product-details-variable.html">Product Variable</a></li>
                                                        <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                                        <li><a href="product-details-group.html">Product Group</a></li>
                                                        <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Mega Menu Sub Link -->
                                                <li class="mega-menu-item">
                                                    <a href="#" class="mega-menu-item-title">Product Types</a>
                                                    <ul class="mega-menu-sub">
                                                        <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                                        <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                                        <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                                        <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                                        <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                                        <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="menu-banner">
                                                <a href="#" class="menu-banner-link">
                                                    <img class="menu-banner-img" src="{{asset('assets/images/banner/menu-banner.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog-single-sidebar-left.html">Blog <i class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                            <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                            <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                            <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                            <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="contact-us.html">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!-- Header Main Menu Start -->
                    </div>
                </div>
            </div>
        </div> <!-- End Bottom Area -->
    </header> <!-- ...:::: End Header Section:::... -->

    <!-- ...:::: Start Mobile Header Section:::... -->
    <div class="mobile-header-section d-block d-lg-none">
        <!-- Start Mobile Header Wrapper -->
        <div class="mobile-header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="mobile-header--left">
                             <a href="index.html" class="mobile-logo-link">
                                <img src="{{asset('assets/images/logo/logo.png')}}" alt="" class="mobile-logo-img">
                            </a>
                        </div>
                        <div class="mobile-header--right">
                            <a href="#mobile-menu-offcanvas" class="mobile-menu offcanvas-toggle">
                                <span class="mobile-menu-dash"></span>
                                <span class="mobile-menu-dash"></span>
                                <span class="mobile-menu-dash"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Mobile Header Wrapper -->
    </div> <!-- ...:::: Start Mobile Header Section:::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header d-flex justify-content-end">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu User Top -->
            <div class="mobile-menu-top">
                <span>Welcome to our store!</span>
                <!-- Start Header Top Menu -->
                <ul class="mobile-menu-user-menu">
                    <li><a class="header-user-menu-link" href="#"><i class="icon-repeat"></i>Compare (0)</a></li>
                    <li class="has-mobile-user-dropdown">
                        <a class="mobile-user-menu-link" href="#">Setting</a>
                        <!-- Header Top Menu's Dropdown -->
                        <ul class="mobile-user-sub-menu">
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class=" has-mobile-user-dropdown">
                        <a class="mobile-user-menu-link" href="#">$ USD</a>
                        <!-- Header Top Menu's Dropdown -->
                        <ul class="mobile-user-sub-menu">
                            <li><a href="#">EUR – Euro</a></li>
                            <li><a href="#">GBP – British Pound</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">INR – India Rupee</a></li>
                        </ul>
                    </li>
                    <li class="has-mobile-user-dropdown">
                        <a class="mobile-user-menu-link" href="#">English</a>
                        <!-- Header Top Menu's Dropdown -->
                        <ul class="mobile-user-sub-menu">
                            <li><a href="#"><img class="user-sub-menu-link-icon" src="{{asset('assets/images/icon/lang-en.png')}}" alt=""> English</a></li>
                            <li><a href="#"><img class="user-sub-menu-link-icon" src="{{asset('assets/images/icon/lang-gr.png')}}" alt=""> Germany</a></li>
                        </ul>
                    </li>
                </ul> <!-- End Header Top Menu -->
            </div> <!-- End Mobile Menu User Top -->
            <!-- Start Mobile Menu User Center -->
            <div class="mobile-menu-center">
                <form action="#" method="post">
                    <div class="header-search-box default-search-style d-flex">
                        <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search entire store here ..." required>
                        <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                    </div>
                </form>
                <div class="mobile-menu-customer-support">
                    <div class="mobile-menu-customer-support-icon">
                        <img src="{{asset('assets/images/icon/support-icon.png')}}" alt="">
                    </div>
                    <div class="mobile-menu-customer-support-text">
                        <span>Customer Support</span>
                        <a class="mobile-menu-customer-support-text-phone" href="tel:(08)123456789">(08) 123 456 789</a>
                    </div>
                </div>
                <!-- Start Header Action Icon -->
                <ul class="mobile-action-icon">
                    <li class="mobile-action-icon-item">
                        <a href="wishlist.html" class="mobile-action-icon-link">
                            <i class="icon-heart"></i>
                            <span class="mobile-action-icon-item-count">3</span>
                        </a>
                    </li>
                    <li class="mobile-action-icon-item">
                        <a href="cart.html" class="mobile-action-icon-link">
                            <i class="icon-shopping-cart"></i>
                            <span class="mobile-action-icon-item-count">3</span>
                        </a>
                    </li>
                </ul> <!-- End Header Action Icon -->
            </div> <!-- End Mobile Menu User Center -->
            <!-- Start Mobile Menu Bottom -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="#"><span>Home</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Layout</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                        <li><a href="shop-full-width.html">Full Width</a></li>
                                        <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                        <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Product Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details-default.html">Product Default</a></li>
                                        <li><a href="product-details-variable.html">Product Variable</a></li>
                                        <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                        <li><a href="product-details-group.html">Product Group</a></li>
                                        <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                        <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                        <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                        <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                        <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                        <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                        <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Blogs</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Blog Grid</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                        <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-full-width.html">Blog Full Width</a>
                                </li>
                                <li>
                                    <a href="#">Blog Single</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                        <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->

                <!-- Mobile Manu Mail Address -->
                <a class="mobile-menu-email icon-text-end" href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"> info@yourdomain.com</i></a>

                <!-- Mobile Manu Social Link -->
                <ul class="mobile-menu-social">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div> <!-- End Mobile Menu Bottom -->
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- ...:::: Start Offcanvas Addcart Section :::... -->
    <div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-end">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- End Offcanvas Header -->

        <!-- Start  Offcanvas Addcart Wrapper -->
        <div class="offcanvas-add-cart-wrapper">
            <h4 class="offcanvas-title">Shopping Cart</h4>
            <ul class="offcanvas-cart">
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Wheel</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-end">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="{{asset('assets/images/categories_images/aments_categories_08.jpg')}}" alt="" class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Car Vails</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">3 x </span>
                                <span class="offcanvas-cart-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-end">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">Shock Absorber</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">1 x </span>
                                <span class="offcanvas-cart-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-end">
                        <a href="#" class="offcanvas-cart-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Subtotal:</span>
                <span class="offcanvas-cart-total-price-value">$170.00</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li class="offcanvas-cart-action-button-list"><a href="cart.html" class="offcanvas-cart-action-button-link">View Cart</a></li>
                <li class="offcanvas-cart-action-button-list"><a href="checkout.html" class="offcanvas-cart-action-button-link">Checkout</a></li>
            </ul>
        </div> <!-- End  Offcanvas Addcart Wrapper -->

    </div> <!-- ...:::: End  Offcanvas Addcart Section :::... -->

    <!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
    <div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-end">
            <button class="offcanvas-close"><i class="fa fa-times"></i></button>
        </div> <!-- ENd Offcanvas Header -->

        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-wishlist-wrapper">
            <h4 class="offcanvas-title">Wishlist</h4>
            <ul class="offcanvas-wishlist">
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-end">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="{{asset('assets/images/categories_images/aments_categories_08.jpg')}}" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-end">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
                <li class="offcanvas-wishlist-item-single">
                    <div class="offcanvas-wishlist-item-block">
                        <a href="#" class="offcanvas-wishlist-item-image-link">
                            <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="offcanvas-wishlist-image">
                        </a>
                        <div class="offcanvas-wishlist-item-content">
                            <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                            <div class="offcanvas-wishlist-item-details">
                                <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                                <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-wishlist-item-delete text-end">
                        <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                    </div>
                </li>
            </ul>
            <ul class="offcanvas-wishlist-action-button">
                <li class="offcanvas-wishlist-action-button-list"><a href="wishlist.html" class="offcanvas-wishlist-action-button-link">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <div class="offcanvas-overlay"></div>

    <!-- ...:::: Start Hero Area Section:::... -->
    <div class="hero-area">
        <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
            <!-- Start Hero Slider Single -->
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="hero-img" src="{{asset('assets/images/slider_images/home_1/aments_home_1_slider_1.jpg')}}" alt="">
                </div>
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 col-md-8 col-xl-6">
                                <h5>World Best Quality</h5>
                                <h2>New Car Parts</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiu</p>
                                <a href="product-details-default.html" class="hero-button">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Hero Slider Single -->
            <!-- Start Hero Slider Single -->
            <div class="hero-area-single">
                <div class="hero-area-bg">
                    <img class="hero-img" src="{{asset('assets/images/slider_images/home_1/aments_home_1_slider_2.jpg')}}" alt="">
                </div>
                <div class="hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 col-md-8 col-xl-6">
                                <h5>World Best Quality</h5>
                                <h2>New Car Parts</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiu</p>
                                <a href="product-details-default.html" class="hero-button">Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Hero Slider Single -->
        </div>
    </div> <!-- ...:::: End Hero Area Section:::... -->

    <!-- ...:::: Start Product Catagory Section:::... -->
    <div class="product-catagory-section section-top-gap-100">
        <!-- Start Section Content -->
        <div class="section-content-gap">
            <div class="container">
                <div class="row">
                    <div class="section-content">
                        <h3 class="section-title" data-aos="fade-up" data-aos-delay="50">Popular Categories</h3>
                    </div>
                </div>
            </div>
        </div> <!-- End Section Content -->

        <!-- Start Catagory Wrapper -->
        <div class="product-catagory-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="0">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_01.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="200">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_02.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="400">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_03.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="600">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_04.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="0">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_05.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="200">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_06.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="400">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_07.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <!-- Start Product Catagory Single -->
                        <a href="product-details-default.html" class="product-catagory-single" data-aos="fade-up"  data-aos-delay="600">
                            <div class="product-catagory-img">
                                <img src="{{asset('assets/images/categories_images/aments_categories_08.jpg')}}" alt="">
                            </div>
                            <div class="product-catagory-content">
                                <h5 class="product-catagory-title">Parts Box</h5>
                                <span class="product-catagory-items">(20 Items)</span>
                            </div>
                        </a> <!-- End Product Catagory Single -->
                    </div>
                </div>
            </div>
        </div> <!-- End Catagory Wrapper -->
    </div> <!-- ...:::: End Product Catagory Section:::... -->

    <!-- ...:::: Start Banner Section:::... -->
    <div class="banner-section section-top-gap-100">
        <!-- Start Banner Wrapper -->
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Banner Single -->
                        <div class="banner-single" data-aos="fade-up"  data-aos-delay="0">
                            <a href="product-details-default.html" class="banner-img-link">
                                <img class="banner-img" src="{{asset('assets/images/banner_images/aments_banner_01.jpg')}}" alt="">
                            </a>
                            <div class="banner-content">
                                <span class="banner-text-tiny">Car Wheel</span>
                                <h3 class="banner-text-large">30% Off</h3>
                                <a href="product-details-default.html" class="banner-link">Shop Now</a>
                            </div>
                        </div> <!-- End Banner Single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Banner Single -->
                        <div class="banner-single" data-aos="fade-up"  data-aos-delay="200">
                            <a href="product-details-default.html" class="banner-img-link">
                                <img class="banner-img" src="{{asset('assets/images/banner_images/aments_banner_02.jpg')}}" alt="">
                            </a>
                            <div class="banner-content">
                                <span class="banner-text-tiny">Car Vails</span>
                                <h3 class="banner-text-large">40% Off</h3>
                                <a href="product-details-default.html" class="banner-link">Shop Now</a>
                            </div>
                        </div> <!-- End Banner Single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Banner Single -->
                        <div class="banner-single" data-aos="fade-up"  data-aos-delay="400">
                            <a href="product-details-default.html" class="banner-img-link">
                                <img class="banner-img" src="{{asset('assets/images/banner_images/aments_banner_03.jpg')}}" alt="">
                            </a>
                            <div class="banner-content">
                                <span class="banner-text-tiny">Car Vails</span>
                                <h3 class="banner-text-large">50% Off</h3>
                                <a href="product-details-default.html" class="banner-link">Shop Now</a>
                            </div>
                        </div> <!-- End Banner Single -->
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Wrapper -->
    </div> <!-- ...:::: End Banner Section:::... -->

    <!-- ...:::: Start Product Tab Section:::... -->
    <div class="product-tab-section section-top-gap-100">
        <!-- Start Section Content -->
        <div class="section-content-gap">
            <div class="container">
                <div class="row">
                    <div class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                        <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">New Arrivals</h3>
                        <ul class="tablist nav product-tab-btn" data-aos="fade-up"  data-aos-delay="400">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#car_and_drive">Car & Drive </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#motorcycle">Motorcycle</a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#truck_drive">Truck & Drive</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End Section Content -->

        <!-- Start Tab Wrapper -->
        <div class="product-tab-wrapper" data-aos="fade-up"  data-aos-delay="50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane show active" id="car_and_drive">
                                <div class="product-default-slider product-default-slider-4grids-1row">
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                </div>
                            </div>
                            <div class="tab-pane" id="motorcycle">
                                <div class="product-default-slider product-default-slider-4grids-1row">
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                </div>
                            </div>
                            <div class="tab-pane" id="truck_drive">
                                <div class="product-default-slider product-default-slider-4grids-1row">
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Catagory Wrapper -->

    </div> <!-- ...:::: End Product Tab Section:::... -->

    <!-- ...:::: Start Product Catagory Section:::... -->
    <div class="banner-section section-top-gap-100">
        <!-- Start Banner Wrapper -->
        <div class="banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Banner Single -->
                        <div class="banner-single" data-aos="fade-up"  data-aos-delay="0">
                            <a href="product-details-default.html" class="banner-img-link">
                                <img class="banner-img banner-img-big" src="{{asset('assets/images/banner_images/aments_big-banner.jpg')}}" alt="">
                            </a>
                            <div class="banner-content">
                                <span class="banner-text-small">2021 Latest Collection</span>
                                <h2 class="banner-text-big"><span class="banner-text-big-highlight">-40%</span> Offer All Car Parts</h2>
                            </div>
                        </div> <!-- End Banner Single -->
                    </div>
                </div>
            </div>
        </div> <!-- End Banner Wrapper -->
    </div> <!-- ...:::: End Product Catagory Section:::... -->

    <!-- ...:::: Start Product Tab Section:::... -->
    <div class="product-tab-section section-top-gap-100">
        <!-- Start Section Content -->
        <div class="section-content-gap">
            <div class="container">
                <div class="row">
                    <div class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                        <h3 class="section-title"  data-aos="fade-up"  data-aos-delay="0">Hot Deals</h3>
                        <ul class="tablist nav product-tab-btn" data-aos="fade-up"  data-aos-delay="200" >
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#drive_and_car">Drive & Car </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#bike">Bikes</a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#drive_trucks">Drive & Truck</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- End Section Content -->

        <!-- Start Tab Wrapper -->
        <div class="product-tab-wrapper" data-aos="fade-up" data-aos-delay="50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content tab-animate-zoom">
                            <div class="tab-pane" id="drive_and_car">
                                <div class="product-default-slider product-default-slider-4grids-1row">
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                </div>
                            </div>
                            <div class="tab-pane" id="bike">
                                <div class="product-default-slider product-default-slider-4grids-1row">
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                </div>
                            </div>
                            <div class="tab-pane show active" id="drive_trucks">
                                <div class="product-default-slider product-default-slider-4grids-1row">
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                    <!-- Start Product Defautlt Single -->
                                    <div class="product-default-single border-around">
                                        <div class="product-img-warp">
                                            <a href="product-details-default.html" class="product-default-img-link">
                                                <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}" alt="" class="product-default-img img-fluid">
                                            </a>
                                            <div class="product-action-icon-link">
                                                <ul>
                                                    <li><a href="wishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="compare.html"><i class="icon-repeat"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-default-content">
                                            <h6 class="product-default-link"><a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a></h6>
                                            <span class="product-default-price"><del class="product-default-price-off">$30.12</del> $25.12</span>
                                        </div>
                                    </div> <!-- End Product Defautlt Single -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Catagory Wrapper -->
    </div> <!-- ...:::: End Product Tab Section:::... -->

    <!-- ...:::: Start Company Logo Section:::... -->
    <div class="company-logo-section section-top-gap-100">
        <!-- Start Company Logo Wrapper -->
        <div class="company-logo-wrapper" data-aos="fade-up"  data-aos-delay="50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="company-logo-slider">
                            <!-- Start Company logo Single -->
                            <div class="company-logo-single">
                                <img src="{{asset('assets/images/company_logo/company_logo_1.png')}}" alt="" class="img-fluid company-logo-image">
                            </div> <!-- End Company logo Single -->
                            <!-- Start Company logo Single -->
                            <div class="company-logo-single">
                                <img src="{{asset('assets/images/company_logo/company_logo_2.png')}}" alt="" class="img-fluid company-logo-image">
                            </div> <!-- End Company logo Single -->
                            <!-- Start Company logo Single -->
                            <div class="company-logo-single">
                                <img src="{{asset('assets/images/company_logo/company_logo_3.png')}}" alt="" class="img-fluid company-logo-image">
                            </div> <!-- End Company logo Single -->
                            <!-- Start Company logo Single -->
                            <div class="company-logo-single">
                                <img src="{{asset('assets/images/company_logo/company_logo_4.png')}}" alt="" class="img-fluid company-logo-image">
                            </div> <!-- End Company logo Single -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Company Logo Wrapper -->
    </div> <!-- ...:::: End Company Logo Section:::... -->

    <!-- ...:::: Start Blog Feed Section:::... -->
    <div class="blog-feed-section section-top-gap-100">
        <!-- Start Section Content -->
        <div class="section-content-gap">
            <div class="container">
                <div class="row">
                    <div class="section-content">
                        <h3 class="section-title" data-aos="fade-up"  data-aos-delay="0">Latest News</h3>
                    </div>
                </div>
            </div>
        </div> <!-- End Section Content -->

        <!-- Start Blog Feed Wrapper -->
        <div class="blog-feed-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Blog Feed Single -->
                        <div class="blog-feed-single" data-aos="fade-up"  data-aos-delay="0" >
                            <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                <img src="{{asset('assets/images/blog_images/aments_blog_01.jpg')}}" alt="" class="blog-feed-img">
                            </a>
                            <div class="blog-feed-content">
                                <div class="blog-feed-post-meta">
                                    <span>By:</span>
                                    <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                                    <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                                </div>
                                <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor amet cons adipisicing elit</a></h5>
                            </div>
                        </div><!-- End Blog Feed Single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Blog Feed Single -->
                        <div class="blog-feed-single" data-aos="fade-up"  data-aos-delay="400">
                            <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                <img src="{{asset('assets/images/blog_images/aments_blog_02.jpg')}}" alt="" class="blog-feed-img">
                            </a>
                            <div class="blog-feed-content">
                                <div class="blog-feed-post-meta">
                                    <span>By:</span>
                                    <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                                    <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                                </div>
                                <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor amet cons adipisicing elit</a></h5>
                            </div>
                        </div><!-- End Blog Feed Single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Blog Feed Single -->
                        <div class="blog-feed-single" data-aos="fade-up"  data-aos-delay="600">
                            <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                                <img src="{{asset('assets/images/blog_images/aments_blog_03.jpg')}}" alt="" class="blog-feed-img">
                            </a>
                            <div class="blog-feed-content">
                                <div class="blog-feed-post-meta">
                                    <span>By:</span>
                                    <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                                    <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                                </div>
                                <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor amet cons adipisicing elit</a></h5>
                            </div>
                        </div><!-- End Blog Feed Single -->
                    </div>
                </div>
            </div>
        </div> <!-- End Blog Feed Wrapper -->


    </div> <!-- ...:::: End Blog Feed Section:::... -->

    <!-- ...:::: Start Footer Section:::... -->
    <footer class="footer-section section-top-gap-100">
        <!-- Start Footer Top Area -->
        <div class="footer-top section-inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <div class="footer-widget footer-widget-contact" data-aos="fade-up"  data-aos-delay="0">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('assets/images/logo/logo.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="footer-contact">
                                <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart...</p>
                                <div class="customer-support">
                                    <div class="customer-support-icon">
                                        <img src="{{asset('assets/images/icon/support-icon.png')}}" alt="">
                                    </div>
                                    <div class="customer-support-text">
                                        <span>Customer Support</span>
                                        <a class="customer-support-text-phone" href="tel:(08)123456789">(08) 123 456 789</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="footer-widget footer-widget-subscribe" data-aos="fade-up"  data-aos-delay="200">
                            <h3 class="footer-widget-title">Subscribe newsletter to get updated</h3>
                            <form action="#" method="post">
                                <div class="footer-subscribe-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none subscribe-form" type="email" placeholder="Search entire store here ..." required>
                                    <button class="default-search-style-input-btn" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <p class="footer-widget-subscribe-note">We’ll never share your email address <br> with a third-party.</p>
                            <ul class="footer-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget footer-widget-menu" data-aos="fade-up"  data-aos-delay="600">
                            <h3 class="footer-widget-title">Information</h3>
                            <div class="footer-menu">
                                <ul class="footer-menu-nav">
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                    <li><a href="#">Stores</a></li>
                                </ul>
                                <ul class="footer-menu-nav">
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">Secure payment</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Top Area -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-area">
                            <p class="copyright-area-text">Copyright &copy; 2022 <a class="copyright-link" href="https://hasthemes.com/">Hasthemes</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-payment">
                            <a href="#"><img class="img-fluid" src="{{asset('assets/images/icon/payment-icon.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Bottom Area -->
    </footer> <!-- ...:::: End Footer Section:::... -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-end">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart successfully!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="cart.html">View Cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</strong></li>
                                    <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE SHOPPING</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-end">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-details-gallery-area">
                                    <div class="product-large-image modal-product-image-large">
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-large-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="product-image-thumb modal-product-image-thumb">
                                        <div class="zoom-active product-image-thumb-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}" alt="">
                                        </div>
                                        <div class="product-image-thumb-single">
                                            <img class="img-fluid" src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-details-content-area">
                                    <!-- Start  Product Details Text Area-->
                                    <div class="product-details-text">
                                        <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                        <div class="price"><del>$70.00</del>$80.00</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae</p>
                                    </div> <!-- End  Product Details Text Area-->
                                    <!-- Start Product Variable Area -->
                                    <div class="product-details-variable">
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item">
                                            <span>Color</span>
                                            <div class="product-variable-color">
                                                <label for="modal-product-color-red">
                                                    <input name="modal-product-color" id="modal-product-color-red" class="color-select" type="radio" checked>
                                                    <span class="product-color-red"></span>
                                                </label>
                                                <label for="modal-product-color-tomato">
                                                    <input name="modal-product-color" id="modal-product-color-tomato" class="color-select" type="radio">
                                                    <span class="product-color-tomato"></span>
                                                </label>
                                                <label for="modal-product-color-green">
                                                    <input name="modal-product-color" id="modal-product-color-green" class="color-select" type="radio">
                                                    <span class="product-color-green"></span>
                                                </label>
                                                <label for="modal-product-color-light-green">
                                                    <input name="modal-product-color" id="modal-product-color-light-green" class="color-select" type="radio">
                                                    <span class="product-color-light-green"></span>
                                                </label>
                                                <label for="modal-product-color-blue">
                                                    <input name="modal-product-color" id="modal-product-color-blue" class="color-select" type="radio">
                                                    <span class="product-color-blue"></span>
                                                </label>
                                                <label for="modal-product-color-light-blue">
                                                    <input name="modal-product-color" id="modal-product-color-light-blue" class="color-select" type="radio">
                                                    <span class="product-color-light-blue"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Product Variable Single Item -->
                                        <div class="variable-single-item ">
                                            <span>Quantity</span>
                                            <div class="product-variable-quantity">
                                                <input min="1" max="100" value="1" type="number">
                                            </div>
                                        </div>
                                    </div> <!-- End Product Variable Area -->
                                    <!-- Start  Product Details Meta Area-->
                                    <div class="product-details-meta mb-20">
                                        <ul>
                                            <li><a href="#"><i class="icon-heart"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="icon-repeat"></i>Compare</a></li>
                                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-shopping-cart"></i>Add To Cart</a></li>
                                        </ul>
                                    </div> <!-- End  Product Details Meta Area-->
                                    <!-- Start  Product Details Social Area-->
                                    <ul class="modal-product-details-social">
                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    </ul> <!-- End  Product Details Social Area-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-ui.min.js')}}"></script> -->

    <!--Plugins JS-->
    <!-- <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/material-scrolltop.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/aos.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ajax-mail.js')}}"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from htmldemo.net/aments/aments/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Mar 2023 00:26:44 GMT -->
</html>
