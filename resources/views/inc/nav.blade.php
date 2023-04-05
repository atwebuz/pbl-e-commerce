
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
                                    <a href="#">English</a>
                                    <!-- Header Top Menu's Dropdown -->
                                    <ul class="user-sub-menu">
                                        <li><a href="/language/en"><img class="user-sub-menu-link-icon" src="assets/images/icon/lang-en.png" alt=""> English</a></li>
                                        <li><a href="/language/ru"><img class="user-sub-menu-link-icon" src="assets/images/icon/lang-ru.png" alt=""> Russian</a></li>
                                        <li><a href="/language/uz"><img class="user-sub-menu-link-icon" src="assets/images/icon/lang-uz.png" alt=""> Uzbek</a></li>
                                    </ul>
                                </li>
                                <li class="has-user-dropdown">
                                    <a href="#">Setting </a>
                                    <!-- Header Top Menu's Dropdown -->
                                    <ul class="user-sub-menu">
                                        <li><a href="/checkout">Checkout</a></li>
                                        <li><a href="/profile">My Account</a></li>
                                        <li><a href="/cart">Shopping Cart</a></li>
                                        <li><a href="/wishlist">Wishlist</a></li>
                                    </ul>
                                </li>
                              
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
                            <a href="/"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- Start Header Search -->
                        <div class="header-search">
                            <form action="/">
                                <div class="header-search-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none" type="search" name="search" placeholder="Search entire store here ..." required>
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
                                        <a class="active main-menu-link" href="/">{{ __('Home')}}</a> 
                                      
                                    </li>
                                    <li class="has-dropdown has-megaitem">
                                        <a href="{{route('products')}}">{{ __('Shop')}}</a>
                                    
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="/blog">{{ __('Blog')}}</a>
                                      
                                    </li>
                                    <li>
                                        <a href="/about">{{ __('About Us')}}</a>
                                    </li>
                                    <li>
                                        <a href="/contact">{{ __('Contact Us')}}</a>
                                    </li>

                                    <li>
                                        <a class="btn btn-dark" href="/products/create">Create </a>
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
                             <a href="/" class="mobile-logo-link">
                                <img src="assets/images/logo/logo.png" alt="" class="mobile-logo-img">
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
                      
                    <li class="has-mobile-user-dropdown">
                        <a class="mobile-user-menu-link" href="#">English</a>
                        <!-- Header Top Menu's Dropdown -->
                        <ul class="mobile-user-sub-menu">
                            <li><a href="#"><img class="user-sub-menu-link-icon" src="assets/images/icon/lang-en.png" alt=""> English</a></li>
                            <li><a href="#"><img class="user-sub-menu-link-icon" src="assets/images/icon/lang-ru.png" alt=""> Russina</a></li>
                            <li><a href="#"><img class="user-sub-menu-link-icon" src="assets/images/icon/lang-uz.png" alt=""> Uzbek</a></li>
                        </ul>
                    </li>
                    <li class="has-mobile-user-dropdown">
                        <a class="mobile-user-menu-link" href="#">Setting</a>
                        <!-- Header Top Menu's Dropdown -->
                        <ul class="mobile-user-sub-menu">
                            <li><a href="/checkout">Checkout</a></li>
                            <li><a href="/profile">My Account</a></li>
                            <li><a href="/cart">Shopping Cart</a></li>
                            <li><a href="/wishlist">Wishlist</a></li>
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
                        <img src="assets/images/icon/support-icon.png" alt="">
                    </div>
                    <div class="mobile-menu-customer-support-text">
                        <span>Customer Support</span>
                        <a class="mobile-menu-customer-support-text-phone" href="tel:(08)123456789">(08) 123 456 789</a>
                    </div>
                </div>
                <!-- Start Header Action Icon -->
                <ul class="mobile-action-icon">
                    <li class="mobile-action-icon-item">
                        <a href="/wishlist" class="mobile-action-icon-link">
                            <i class="icon-heart"></i>
                            <span class="mobile-action-icon-item-count">3</span>
                        </a>
                    </li>
                    <li class="mobile-action-icon-item">
                        <a href="/cart" class="mobile-action-icon-link">
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
                            <a href="/"><span>Home</span></a>
                           
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                        
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="/cart">Cart</a></li>
                                        <li><a href="/wishlist">Wishlist</a></li>
                                        <li><a href="/checkout">Checkout</a></li>
                                        <li><a href="//">Login</a></li>
                                        <li><a href="/profile">My Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="/products">Products</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/blog"><span>Blogs</span></a>
                        
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/service">Service</a></li>
                                <li><a href="/faq">Frequently Questions</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact Us</a></li>
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
                            <img src="assets/images/products_images/aments_products_image_6.jpg" alt="" class="offcanvas-cart-image">
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
                            <img src="assets/images/categories_images/aments_categories_08.jpg" alt="" class="offcanvas-cart-image">
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
                            <img src="assets/images/products_images/aments_products_image_2.jpg" alt="" class="offcanvas-cart-image">
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
                <li class="offcanvas-cart-action-button-list"><a href="/cart" class="offcanvas-cart-action-button-link">View Cart</a></li>
                <li class="offcanvas-cart-action-button-list"><a href="/checkout" class="offcanvas-cart-action-button-link">Checkout</a></li>
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
                            <img src="assets/images/products_images/aments_products_image_6.jpg" alt="" class="offcanvas-wishlist-image">
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
                            <img src="assets/images/categories_images/aments_categories_08.jpg" alt="" class="offcanvas-wishlist-image">
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
                            <img src="assets/images/products_images/aments_products_image_2.jpg" alt="" class="offcanvas-wishlist-image">
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
                <li class="offcanvas-wishlist-action-button-list"><a href="/wishlist" class="offcanvas-wishlist-action-button-link">View wishlist</a></li>
            </ul>
        </div> <!-- End Offcanvas Mobile Menu Wrapper -->

    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
