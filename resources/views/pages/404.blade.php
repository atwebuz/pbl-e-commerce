@extends('layouts.app')

@section('content_section')
       <!-- ...:::: Start Breadcrumb Section:::... -->
       <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">404 Pages</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active" aria-current="page">404</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Error Section :::... -->
    <div class="error-section">
        <div class="container">
            <div class="row">
                <div class="error_form">
                    <h1 data-aos="fade-up"  data-aos-delay="0">404</h1>
                    <h4 data-aos="fade-up"  data-aos-delay="200">Opps! PAGE NOT BE FOUND</h4>
                    <p data-aos="fade-up"  data-aos-delay="400">Sorry but the page you are looking for does not exist, have been<br> removed, name changed or is temporarily unavailable.</p>
                    <div class="row">
                        <div class="col-10 offset-1 col-md-6 offset-md-3">
                            <div class="default-search-style d-flex" data-aos="fade-up"  data-aos-delay="600">
                                <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search entire store here ..." required>
                                <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                            </div>
                            <a href="index.html" data-aos="fade-up"  data-aos-delay="800">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Error Section :::... -->

@endsection