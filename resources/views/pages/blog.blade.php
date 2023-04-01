@extends('layouts.app')

@section('content_header')
       <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                        <h3 class="breadcrumb-title">Blog Single Sidebar Left</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="blog-grid-sidebar-left.html">Blog</a></li>
                                    <li class="active" aria-current="page">Blog Single Sidebar Left</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Blog Single Section:::... -->
    <div class="blog-single-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section" data-aos="fade-up"  data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Search</h6>
                            <div class="sidebar-content">
                                <div class="search-bar">
                                    <div class="default-search-style d-flex">
                                        <input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search..." required>
                                        <button class="default-search-style-input-btn" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Recent Post</h6>
                            <div class="sidebar-content">
                                <div class="recent-post">
                                    <ul>
                                        <!-- Start Single Recent Post Item -->
                                        <li class="recent-post-list">
                                            <a href="blog-single-sidebar-left.html" class="post-image">
                                                <img src="assets/images/blog_recent_post/blog1.jpg" alt="">
                                            </a>
                                            <div class="post-content">
                                                <a class="post-link" href="blog-single-sidebar-left.html">Blog Image Post</a>
                                                <span class="post-date">March 16, 2022</span>
                                            </div>
                                        </li> <!-- End Single Recent Post Item -->
                                        <!-- Start Single Recent Post Item -->
                                        <li class="recent-post-list">
                                            <a href="blog-single-sidebar-left.html" class="post-image">
                                                <img src="assets/images/blog_recent_post/blog2.jpg" alt="">
                                            </a>
                                            <div class="post-content">
                                                <a class="post-link" href="blog-single-sidebar-left.html">Blog Image Post</a>
                                                <span class="post-date">March 16, 2022</span>
                                            </div>
                                        </li> <!-- End Single Recent Post Item -->
                                        <!-- Start Single Recent Post Item -->
                                        <li class="recent-post-list">
                                            <a href="blog-single-sidebar-left.html" class="post-image">
                                                <img src="assets/images/blog_recent_post/blog3.jpg" alt="">
                                            </a>
                                            <div class="post-content">
                                                <a class="post-link" href="blog-single-sidebar-left.html">Blog Image Post</a>
                                                <span class="post-date">March 16, 2022</span>
                                            </div>
                                        </li> <!-- End Single Recent Post Item -->
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Tag products</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">asian</a>
                                    <a href="#">brown</a>
                                    <a href="#">euro</a>
                                    <a href="#">fashion</a>
                                    <a href="#">hat</a>
                                    <a href="#">t-shirt</a>
                                    <a href="#">teen</a>
                                    <a href="#">travel</a>
                                    <a href="#">white</a>
                                </div>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <!-- Start Blog Single Content Area -->
                    <div class="blog-single-wrapper">
                        <div class="blog-single-img" data-aos="fade-up"  data-aos-delay="0">
                            <img class="img-fluid" src="assets/images/blog_images/blog-big1.jpg" alt="">
                        </div>
                        <div class="blog-feed-post-meta" data-aos="fade-up"  data-aos-delay="200">
                            <span>By:</span>
                            <a href="#" class="blog-feed-post-meta-author">Admin</a> -
                            <a href="#" class="blog-feed-post-meta-date">Sep 14, 2022</a>
                        </div>
                        <h4 class="post-title" data-aos="fade-up"  data-aos-delay="400">Blog image post</h4>
                        <div class="para-content" data-aos="fade-up"  data-aos-delay="600">
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <blockquote class="blockquote-content">
                                Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.
                            </blockquote>
                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                        </div>
                        <div class="para-tags" data-aos="fade-up"  data-aos-delay="0">
                            <span>Tags: </span>
                            <ul>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">t-shirt</a></li>
                                <li><a href="#">white</a></li>
                            </ul>
                        </div>
                    </div> <!-- End Blog Single Content Area -->
                    <div class="comment-area">
                        <div class="comment-box" data-aos="fade-up"  data-aos-delay="0">
                            <h4 class="mb-30">3 Comments</h4>
                            <!-- Start - Review Comment -->
                            <ul class="comment">
                                <!-- Start - Review Comment list-->
                                <li class="comment-list">
                                    <div class="comment-wrapper">
                                        <div class="comment-img">
                                            <img src="assets/images/user/image-1.png" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-content-top">
                                                <div class="comment-content-left">
                                                    <h6 class="comment-name">Kaedyn Fraser</h6>
                                                </div>
                                                <div class="comment-content-right">
                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>

                                            <div class="para-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start - Review Comment Reply-->
                                    <ul class="comment-reply">
                                        <li class="comment-reply-list">
                                            <div class="comment-wrapper">
                                                <div class="comment-img">
                                                    <img src="assets/images/user/image-2.png" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-content-top">
                                                        <div class="comment-content-left">
                                                            <h6 class="comment-name">Oaklee Odom</h6>
                                                        </div>
                                                        <div class="comment-content-right">
                                                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul> <!-- End - Review Comment Reply-->
                                </li> <!-- End - Review Comment list-->
                                <!-- Start - Review Comment list-->
                                <li class="comment-list">
                                    <div class="comment-wrapper">
                                        <div class="comment-img">
                                            <img src="assets/images/user/image-3.png" alt="">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-content-top">
                                                <div class="comment-content-left">
                                                    <h6 class="comment-name">Jaydin Jones</h6>
                                                </div>
                                                <div class="comment-content-right">
                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                </div>
                                            </div>

                                            <div class="para-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                            </div>
                                        </div>
                                    </div>
                                </li> <!-- End - Review Comment list-->
                            </ul> <!-- End - Review Comment -->
                        </div>

                        <!-- Start comment Form -->
                        <div class="comment-form" data-aos="fade-up"  data-aos-delay="0">
                            <div class="coment-form-text-top mt-30">
                                <h4>Leave a Reply</h4>
                                <p style="color: red">Your email address will not be published. Required fields are marked *</p>
                            </div>

                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="default-form-box mb-20">
                                            <label for="comment-name">Your name <span>*</span></label>
                                            <input id="comment-name" type="text" placeholder="Enter your name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="default-form-box mb-20">
                                            <label for="comment-email">Your Email <span>*</span></label>
                                            <input id="comment-email" type="email" placeholder="Enter your email" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="default-form-box mb-20">
                                            <label for="comment-review-text">Your review <span>*</span></label>
                                            <textarea id="comment-review-text" placeholder="Write a review" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="form-submit-btn" type="submit">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- End comment Form -->
                    </div>


                </div> <!-- End Shop Product Sorting Section  -->
            </div>
        </div>
    </div> <!-- ...:::: End Blog Single Section:::... -->

@endsection