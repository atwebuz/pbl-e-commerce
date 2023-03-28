@extends('layouts.app')

@section('content_header')
   <!-- ...:::: Start Breadcrumb Section:::... -->
   <div class="breadcrumb-section">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                    <h3 class="breadcrumb-title">About Us</h3>
                    <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active" aria-current="page">About</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...::::Start About Us Top Section:::... -->
<div class="about-us-top-area section-top-gap-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-us-top-img" data-aos="fade-up"  data-aos-delay="0">
                    <img class="img-fluid" src="assets/images/about/about.jpg" alt="">
                </div>
                <div class="about-us-top-content text-center" data-aos="fade-up"  data-aos-delay="200">
                    <h4>Welcome To Esther!</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima consequuntur nulla voluptate sunt accusamus error dolores laboriosam facere, et saepe, velit incidunt doloremque ab eius. Explicabo magnam iure et.</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End About Us Top Section:::... -->

@endsection