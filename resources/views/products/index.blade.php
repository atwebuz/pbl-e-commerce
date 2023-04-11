@extends('layouts.app')

@section('content_section')

  <!-- ...:::: Start Breadcrumb Section:::... -->
  <div class="breadcrumb-section">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                    <h3 class="breadcrumb-title">Shop List Sidebar Left</h3>
                    <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Shop</a></li>
                                <li class="active" aria-current="page">Shop List Sidebar Left</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <!-- Start Sidebar Area -->
                <div class="siderbar-section">

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">FILTER BY PRICE</h6>
                        <div class="sidebar-content">
                            <div id="slider-range"></div>
                            <div class="filter-type-price">
                                <label for="amount">Price range:</label>
                                <input type="text" id="amount">
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">CATEGORIES</h6>
                        <div class="sidebar-content">
                            <div class="filter-type-select">
                                <ul>
                                    <li>
                                        <label class="checkbox-default" for="catagory_1">
                                            <input type="checkbox" id="catagory_1">
                                            <span>Catagory (1)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="catagory_2">
                                            <input type="checkbox" id="catagory_2">
                                            <span>Catagory (2)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="catagory_3">
                                            <input type="checkbox" id="catagory_3">
                                            <span>Catagory (3)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="catagory_4">
                                            <input type="checkbox" id="catagory_4">
                                            <span>Catagory (4)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="catagory_5">
                                            <input type="checkbox" id="catagory_5">
                                            <span>Catagory (5)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->
                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">MANUFACTURER</h6>
                        <div class="sidebar-content">
                            <div class="filter-type-select">
                                <ul>
                                    <li>
                                        <label class="checkbox-default" for="brakeParts">
                                            <input type="checkbox" id="brakeParts">
                                            <span>Brake Parts(6)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="accessories">
                                            <input type="checkbox" id="accessories">
                                            <span>Accessories (10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="EngineParts">
                                            <input type="checkbox" id="EngineParts">
                                            <span>Engine Parts (4)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="hermes">
                                            <input type="checkbox" id="hermes">
                                            <span>hermes (10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="tommyHilfiger">
                                            <input type="checkbox" id="tommyHilfiger">
                                            <span>Tommy Hilfiger(7)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">SELECT BY COLOR</h6>
                        <div class="sidebar-content">
                            <div class="filter-type-select">
                                <ul>
                                    <li>
                                        <label class="checkbox-default" for="black">
                                            <input type="checkbox" id="black">
                                            <span>Black (6)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="blue">
                                            <input type="checkbox" id="blue">
                                            <span>Blue (8)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="brown">
                                            <input type="checkbox" id="brown">
                                            <span>Brown (10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="Green">
                                            <input type="checkbox" id="Green">
                                            <span>Green (6)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-default" for="pink">
                                            <input type="checkbox" id="pink">
                                            <span>Pink (4)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <div class="sidebar-content">
                            <a href="#!" class="sidebar-banner">
                                <img class="img-fluid" src="{{asset('assets/images/banner_images/aments_banner_04.jpg')}}" alt="">
                            </a>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                </div> <!-- End Sidebar Area -->
            </div>
            <div class="col-lg-9">
                <!-- Start Shop Product Sorting Section -->
                <div class="shop-sort-section">
                    <div class="container">
                        <div class="row">
                            <!-- Start Sort Wrapper Box -->
                            <div class="sort-box d-flex justify-content-between align-items-center flex-wrap">
                                <!-- Start Sort tab Button -->
                                <div class="sort-tablist">
                                    <ul class="tablist nav sort-tab-btn">
                                        <li><a class="nav-link active" data-bs-toggle="tab" href="#layout-3-grid"><img src="{{asset('assets/images/icon/bkg_grid.png')}}" alt=""></a></li>
                                        <li><a class="nav-link " data-bs-toggle="tab" href="#layout-list"><img src="{{asset('assets/images/icon/bkg_list.png')}}" alt=""></a></li>
                                    </ul>
                                </div> <!-- End Sort tab Button -->

                                <!-- Start Sort Select Option -->
                                <div class="sort-select-list">
                                    <form action="#">
                                        <fieldset>
                                            <select name="speed" id="speed">
                                                <option>Sort by average rating</option>
                                                <option>Sort by popularity</option>
                                                <option selected="selected">Sort by newness</option>
                                                <option>Sort by price: low to high</option>
                                                <option>Sort by price: high to low</option>
                                                <option>Product Name: Z</option>
                                            </select>
                                        </fieldset>
                                    </form>
                                </div> <!-- End Sort Select Option -->

                                <!-- Start Page Amount -->
                                <div class="page-amount">
                                    {{$products->count()}}
                                    <span>Showing 1–9 of 21 results</span>
                                </div> <!-- End Page Amount -->

                            </div> <!-- Start Sort Wrapper Box -->
                        </div>
                    </div>
                </div> <!-- End Section Content -->

                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content tab-animate-zoom">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active sort-layout-single" id="layout-3-grid">
                                        <div class="row">
                                            @foreach ($products as $product)
                                                <div class="col-xl-4 col-sm-6 col-12">
                                                    <!-- Start Product Defautlt Single -->
                                                    <div class="product-default-single border-around">
                                                        <div class="product-img-warp">
                                                            <a href="/products/{{$product->id}}" class="product-default-img-link">
                                                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="{{$product->name}}" class="product-default-img img-fluid">
                                                            </a>
                                                            <div class="product-action-icon-link">
                                                                <ul>
                                                                    <li><a href="#" class="switch"><i class="icon-heart" ></i></a></li>
                                                                                    <li><a href="/products/{{$product->id}}" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                                    <li><a href="/cart" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-default-content">
                                                            <h6 class="product-default-link"><a href="/products/{{$product->id}}">{{$product->name}}</a></h6>
                                                            <span class="product-default-price"><del class="product-default-price-off">{{$product->stock}}.000</del> {{$product->price}}</span>
                                                        </div>
                                                    </div> <!-- End Product Defautlt Single -->
                                                </div>
                                            @endforeach
                                           
                                         
                                        </div>
                                    </div> <!-- End Grid View Product -->
                                    <!-- Start List View Product -->
                                    <div class="tab-pane show sort-layout-single" id="layout-list">
                                        <div class="row">
                                            
                                            @foreach ($products as $product)
                                                 <div class="col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-list-single border-around">
                                                    <a href="/product" class="product-list-img-link">
                                                        <img src="{{asset('assets/images/no-image.jpg')}}" alt="{{$product->name}}" class="img-fluid">
                                                    </a>
                                                    <div class="product-list-content">
                                                        <h5 class="product-list-link"><a href="/products/{{$product->id}}">{{$product->name}}</a></h5>
                                                        <span class="product-list-price"><del class="product-list-price-off">{{$product->stock}}.000</del> {{$product->price}}</span>
                                                        <p>
                                                            {{$product->description}}
                                                        </p>
                                                        <div class="product-action-icon-link-list">
                                                            <ul>
                                                                <li><a href="#" class="switch"><i class="icon-heart"></i></a></li>
                                                                                 <li><a href="/product" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-eye"></i></a></li>
                                                                <li><a href="/cart" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>
                                            @endforeach
                                           
                                       
                                        </div>
                                    </div> <!-- End List View Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Tab Wrapper -->

                <!-- Start Pagination -->
                <div class="page-pagination text-center" data-aos="fade-up"  data-aos-delay="0">
                    {{-- <ul>
                        <li><a href="#">Previous</a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul> --}}

                    {{$products->links()}}
                </div> 
                <!-- End Pagination -->
            </div> <!-- End Shop Product Sorting Section  -->
        </div>
    </div>
</div> <!-- ...:::: End Shop Section:::... -->


@endsection