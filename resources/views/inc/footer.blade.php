<footer class="footer-section section-top-gap-100">
    <!-- Start Footer Top Area -->
    <div class="footer-top section-inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-5">
                    <div class="footer-widget footer-widget-contact" >
                        <div class="footer-logo">
                            <a href="/"><img src="{{asset('assets/images/logo/logo.png')}}" alt="" class="img-fluid"></a>
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
                    <div class="footer-widget footer-widget-subscribe">
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
                    <div class="footer-widget footer-widget-menu">
                        <h3 class="footer-widget-title">Information</h3>
                        <div class="footer-menu">
                            <ul class="footer-menu-nav">
                                <li><a href="/service">Service</a></li>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact us</a></li>
                            </ul>
                            <ul class="footer-menu-nav">
                                <li><a href="/faq">Faq</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/privasy-polisy">Privasy-polisy</a></li>
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
                        <p class="copyright-area-text">Copyright &copy; 2023 <a class="copyright-link" href="#!">By devs</a></p>
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
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart successfully!</div>
                                    <div class="modal-add-cart-product-cart-buttons">
                                        <a href="/cart">View Cart</a>
                                        <a href="/checkout">Checkout</a>
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
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-large-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-large-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-large-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-large-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-large-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="product-image-thumb modal-product-image-thumb">
                                    <div class="zoom-active product-image-thumb-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-thumb-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-thumb-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-thumb-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-thumb-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
                                    </div>
                                    <div class="product-image-thumb-single">
                                        <img class="img-fluid" src="{{asset('assets/images/no-image.jpg')}}" alt="">
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
                                        <li><a href="/wishlist"><i class="icon-heart"></i>Add to wishlist</a></li>
                                        <li><a href="/cart" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-shopping-cart"></i>Add To Cart</a></li>
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
</div> 