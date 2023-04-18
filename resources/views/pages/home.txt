@extends('layouts.app')

@section('content_header')
<div class="hero-area">
    <div class="hero-area-wrapper hero-slider-dots fix-slider-dots">
        <!-- Start Hero Slider Single -->
        <div class="hero-area-single">
            <div class="hero-area-bg">
                {{-- <img style="filter: blur(10px); -webkit-filter:blur(4px);" class="hero-img"
                    src="{{asset('assets/images/slider_images/home_1/malibu.webp')}}" alt=""> --}}
                <img class="hero-img"
                    src="{{asset('assets/images/slider_images/home_1/aments_home_1_slider_1.jpg')}}" alt="">
            </div>
            <div class="hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-10 col-md-8 col-xl-6">
                            <h5>World Best Quality</h5>
                            <h2>New Car Parts</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiu</p>
                            <a href="/product" class="hero-button">Shopping Now</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div> <!-- End Hero Slider Single -->
        <!-- Start Hero Slider Single -->
        <div class="hero-area-single">
            <div class="hero-area-bg">
                <img class="hero-img" src="{{asset('assets/images/slider_images/home_1/aments_home_1_slider_2.jpg')}}"
                    alt="">
            </div>
            <div class="hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-10 col-md-8 col-xl-6">

                            <h5>World Best Quality</h5>
                            <h2>New Car Parts</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiu</p>
                            <a href="/product" class="hero-button">Shopping Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Hero Slider Single -->
    </div>
</div>
@endsection

@section('content_section')
<div class="product-catagory-section section-top-gap-100">
    <!-- Start Section Content -->
    <div class="section-content-gap">
        <div class="container">
            <div class="row">
                <div class="section-content">
                    <h3 class="section-title" data-aos="fade-up" data-aos-delay="50">{{__('Popular Categories')}}</h3>
                </div>
            </div>
        </div>
    </div> <!-- End Section Content -->

    <!-- Start Catagory Wrapper -->
    {{-- <div class="product-catagory-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="0">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/chevrolet.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Chevrolet</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/daewoo.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Daewoo</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/mercedes.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Mercedes-Benz</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/bmw.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Bmw</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="0">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/audi.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Audi</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/hyundai.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Hyundai</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="400">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/lexus.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Lexus</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- Start Product Catagory Single -->
                    <a href="/product" class="product-catagory-single" data-aos="fade-up" data-aos-delay="600">
                        <div class="product-catagory-img">
                            <img src="{{asset('assets/images/categories_images/lada.png')}}" alt="">
                        </div>
                        <div class="product-catagory-content">
                            <h5 class="product-catagory-title">Lada</h5>
                            <span class="product-catagory-items">(0 Items)</span>
                        </div>
                    </a> <!-- End Product Catagory Single -->
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
    <ul data-testid="category-count-links" class="css-13y1qrz">
        @foreach ($brands as $brand)
              <li class="css-szrfjb"><a href="/d/transport/legkovye-avtomobili/chevrolet" class="css-pyvavn">{{$brand->name}}<span
                    class="css-wz88">{{ $brand->products_count }}</span></a></li>
        @endforeach
      
     

                    {{-- <li class="css-szrfjb"><a href="/d/transport/legkovye-avtomobili/chevrolet" class="css-pyvavn">Chevrolet<span
                        class="css-wz88">46&nbsp;212</span></a></li> --}}
         
    </ul>
</div>
    <!-- End Catagory Wrapper -->
</div>
<!-- ...:::: End Product Catagory Section:::... -->

<!-- ...:::: Start Product Tab Section:::... -->
<div class="product-tab-section section-top-gap-100">
    <!-- Start Section Content -->
    <div class="section-content-gap">
        <div class="container">
            <div class="row">
                <div
                    class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                    <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">{{ __('New Arrivals') }}</h3>
                    <ul class="tablist nav product-tab-btn" data-aos="fade-up" data-aos-delay="400">
                        <li><a class="nav-link active" data-bs-toggle="tab" href="#car_and_drive">Car & Drive </a></li>
                        <li><a class="nav-link" data-bs-toggle="tab" href="#motorcycle">Motorcycle</a></li>
                        <li><a class="nav-link" data-bs-toggle="tab" href="#truck_drive">Truck & Drive</a></li>
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
                        <div class="tab-pane show active" id="car_and_drive">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                @foreach($products as $product)
                                    
                                        @if (3 === $product->category->id)
                                           
                                    


                                {{-- @dd($categories) --}}
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="{{ route('product', $product->id) }}" class="product-default-img-link">
                                            <img src="{{asset('assets/images/no-image.jpg')}}"
                                            alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            {{-- @dump($product->id); --}}

                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">{{$product->name}}</a></h6>
                                        <span class="product-default-price"> <b>Price: </b> <del
                                                class="product-default-price-off">${{$product->stock}}.0</del> ${{$product->price}}</span>
                                                
                                    </div>
                                  <b class="">Created at:</b>  {{  $product->created_at->format('Y.m.d')}}

                                </div> <!-- End Product Defautlt Single --> 
                                   @endif
                                @endforeach    
                              
                            
                            </div>
                        </div>
                        <div class="tab-pane" id="motorcycle">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                @foreach($products as $product)
                                    
                                        @if (1 === $product->category->id)
                                           
                                    


                                {{-- @dd($categories) --}}
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="{{ route('product', $product->id) }}" class="product-default-img-link">
                                            <img src="{{asset('assets/images/no-image.jpg')}}"
                                            alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            {{-- @dump($product->id); --}}

                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">{{$product->name}}</a></h6>
                                        <span class="product-default-price"> <b>Price: </b> <del
                                                class="product-default-price-off">${{$product->stock}}.0</del> ${{$product->price}}</span>
                                                
                                    </div>
                                  <b class="">Created at:</b>  {{  $product->created_at->format('Y.m.d')}}

                                </div> <!-- End Product Defautlt Single --> 
                                   @endif
                                @endforeach    
                              
                            
                            </div>
                        </div>
                        <div class="tab-pane" id="truck_drive">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                @foreach($products as $product)
                                    
                                        @if (2 === $product->category->id)
                                           
                                    


                                {{-- @dd($categories) --}}
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="{{ route('product', $product->id) }}" class="product-default-img-link">
                                            <img src="{{asset('assets/images/no-image.jpg')}}"
                                            alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            {{-- @dump($product->id); --}}

                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">{{$product->name}}</a></h6>
                                        <span class="product-default-price"> <b>Price: </b> <del
                                                class="product-default-price-off">${{$product->stock}}.0</del> ${{$product->price}}</span>
                                                
                                    </div>
                                  <b class="">Created at:</b>  {{  $product->created_at->format('Y.m.d')}}

                                </div> <!-- End Product Defautlt Single --> 
                                   @endif
                                @endforeach    
                              
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Catagory Wrapper -->

</div>
<!-- ...:::: End Product Tab Section:::... -->

<!-- ...:::: Start Product Catagory Section:::... -->
<div class="banner-section section-top-gap-100">
    <!-- Start Banner Wrapper -->
    <div class="banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Banner Single -->
                    <div class="banner-single" data-aos="fade-up" data-aos-delay="0">
                        <a href="/product" class="banner-img-link">
                            <img class="banner-img banner-img-big"
                                src="{{asset('assets/images/banner_images/aments_big-banner.jpg')}}" alt="">
                        </a>
                        <div class="banner-content">
                            <span class="banner-text-small">2021 Latest Collection</span>
                            <h2 class="banner-text-big"><span class="banner-text-big-highlight">-40%</span> Offer All
                                Car Parts</h2>
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
                <div
                    class="section-content d-flex justify-content-between align-items-md-center align-items-start flex-md-row flex-column">
                    <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Hot Deals</h3>
                    <ul class="tablist nav product-tab-btn" data-aos="fade-up" data-aos-delay="200">
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
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                            </div>
                        </div>
                        <div class="tab-pane" id="bike">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                            </div>
                        </div>
                        <div class="tab-pane show active" id="drive_trucks">
                            <div class="product-default-slider product-default-slider-4grids-1row">
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_2.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_1.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_4.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_3.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_6.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_5.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_8.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
                                    </div>
                                </div> <!-- End Product Defautlt Single -->
                                <!-- Start Product Defautlt Single -->
                                <div class="product-default-single border-around">
                                    <div class="product-img-warp">
                                        <a href="/product" class="product-default-img-link">
                                            <img src="{{asset('assets/images/products_images/aments_products_image_7.jpg')}}"
                                                alt="" class="product-default-img img-fluid">
                                        </a>
                                        <div class="product-action-icon-link">
                                            <ul>
                                                <li><a href="/wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a href="/product" data-bs-toggle="modal"
                                                        data-bs-target="#modalQuickview"><i class="icon-eye"></i></a>
                                                </li>
                                                <li><a href="/cart" data-bs-toggle="modal"
                                                        data-bs-target="#modalAddcart"><i
                                                            class="icon-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-default-content">
                                        <h6 class="product-default-link"><a href="/product">New Balance Fresh Foam
                                                Kaymin Car Purts</a></h6>
                                        <span class="product-default-price"><del
                                                class="product-default-price-off">$30.12</del> $25.12</span>
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


<div class="company-logo-section section-top-gap-100">
    <!-- Start Company Logo Wrapper -->
    <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-logo-slider">
                        <!-- Start Company logo Single -->
                        <div class="company-logo-single">
                            <img src="{{asset('assets/images/company_logo/company_logo_1.png')}}" alt=""
                                class="img-fluid company-logo-image">
                        </div> <!-- End Company logo Single -->
                        <!-- Start Company logo Single -->
                        <div class="company-logo-single">
                            <img src="{{asset('assets/images/company_logo/company_logo_2.png')}}" alt=""
                                class="img-fluid company-logo-image">
                        </div> <!-- End Company logo Single -->
                        <!-- Start Company logo Single -->
                        <div class="company-logo-single">
                            <img src="{{asset('assets/images/company_logo/company_logo_3.png')}}" alt=""
                                class="img-fluid company-logo-image">
                        </div> <!-- End Company logo Single -->
                        <!-- Start Company logo Single -->
                        <div class="company-logo-single">
                            <img src="{{asset('assets/images/company_logo/company_logo_4.png')}}" alt=""
                                class="img-fluid company-logo-image">
                        </div> <!-- End Company logo Single -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Company Logo Wrapper -->
</div>


<div class="blog-feed-section section-top-gap-100">
    <!-- Start Section Content -->
    <div class="section-content-gap">
        <div class="container">
            <div class="row">
                <div class="section-content">
                    <h3 class="section-title" data-aos="fade-up" data-aos-delay="0">Latest News</h3>
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
                    <div class="blog-feed-single" data-aos="fade-up" data-aos-delay="0">
                        <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                            <img src="{{asset('assets/images/blog_images/aments_blog_01.jpg')}}" alt=""
                                class="blog-feed-img">
                        </a>
                        <div class="blog-feed-content">
                            <div class="blog-feed-post-meta">
                                <span>By:</span>
                                <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                                <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                            </div>
                            <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor amet
                                    cons adipisicing elit</a></h5>
                        </div>
                    </div><!-- End Blog Feed Single -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Blog Feed Single -->
                    <div class="blog-feed-single" data-aos="fade-up" data-aos-delay="400">
                        <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                            <img src="{{asset('assets/images/blog_images/aments_blog_02.jpg')}}" alt=""
                                class="blog-feed-img">
                        </a>
                        <div class="blog-feed-content">
                            <div class="blog-feed-post-meta">
                                <span>By:</span>
                                <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                                <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                            </div>
                            <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor amet
                                    cons adipisicing elit</a></h5>
                        </div>
                    </div><!-- End Blog Feed Single -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Blog Feed Single -->
                    <div class="blog-feed-single" data-aos="fade-up" data-aos-delay="600">
                        <a href="blog-single-sidebar-left.html" class="blog-feed-img-link">
                            <img src="{{asset('assets/images/blog_images/aments_blog_03.jpg')}}" alt=""
                                class="blog-feed-img">
                        </a>
                        <div class="blog-feed-content">
                            <div class="blog-feed-post-meta">
                                <span>By:</span>
                                <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                                <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                            </div>
                            <h5 class="blog-feed-link"><a href="blog-single-sidebar-left.html">Lorem ipsum dolor amet
                                    cons adipisicing elit</a></h5>
                        </div>
                    </div><!-- End Blog Feed Single -->
                </div>
            </div>
        </div>
    </div> <!-- End Blog Feed Wrapper -->


</div>

@endsection