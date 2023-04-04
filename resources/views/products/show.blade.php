@extends('layouts.app')

@section('content_section')


       <!-- Start Product Details Section -->
       <div class="product-details-section py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-details-gallery-area" data-aos="fade-up"  data-aos-delay="0">
                        <div class="product-large-image product-large-image-horaizontal">
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="">
                            </div>
                            <div class="product-image-large-single zoom-image-hover">
                                <img src="{{asset('assets/images/no-image.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="product-image-thumb product-image-thumb-horizontal pos-relative">
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
                           <div class="product-details-content-area" data-aos="fade-up"  data-aos-delay="200">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text">
                            <h4 class="title">{{$product->name}}</h4>
                            <h6 class="product-ref mb-20">Reference By: <span>Jhon Doe</span></h6>
                            <div class="d-flex align-items-center">
                                <div class="product-review">
                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                    <span class="review-empty"><i class="fa fa-star"></i></span>
                                </div>
                                <a href="#" class="customer-review">(customer review )</a>
                            </div>
                            <div class="price"><del>{{$product->stock}}</del>{{$product->price}}</div>
                            <p>{{$product->description}}</p>
                        </div> <!-- End  Product Details Text Area-->
                        <!-- Start Product Variable Area -->
                        <div class="product-details-variable">
                            <h4 class="title">Available Options</h4>
                            <!-- Product Variable Single Item -->
                            <ul class="my-3 d-flex justify-content-between">
                                <li> <b>Oil: {{$product->oil}}</b></li>
                                <li> <b>Color: {{$product->color}}</b></li>
                                <li> <b>Condition: {{$product->condition}}</b></li>
                                <li> <b>Body_type: {{$product->body_type}}</b></li>
                                <li> <b>Transmission: {{$product->transmission}}</b></li>
                            </ul>
                        

                            <!-- Product Variable Single Item -->
                            <div class="d-flex align-items-center">
                                <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                        <input min="1" max="100" value="{{$product->quantity}}" type="number">
                                    </div>
                                </div>

                                <div class="product-add-to-cart-btn">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview">Add To Cart</a>
                                </div>
                            </div>

                            <!-- Product Variable Single Item -->
                          
                        </div> <!-- End Product Variable Area -->
                        <!-- Start  Product Details Meta Area-->
                        <div class="product-details-meta mb-20">
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart"><i class="icon-heart"></i>Add to wishlist</a></li>
                            </ul>
                        </div> <!-- End  Product Details Meta Area-->
                        <!-- Start  Product Details Social Area-->
                        <div class="product-details-social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i>Like</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i>Tweet</a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i>Save</a></li>
                                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i>Save</a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i>Linked</a></li>
                            </ul>
                        </div> <!-- End  Product Details Social Area-->
                    </div>
                  
                 
                </div>
            </div>
        </div>
    </div> <!-- End Product Details Section -->

    <!-- Start Product Content Tab Section -->
    <div class="product-details-content-tab-section section-inner-bg section-top-gap-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-details-content-tab-wrapper">

                        <!-- Start Product Details Tab Button -->
                        <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                            <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                    <h5>Description</h5>
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                    <h5>Specification</h5>
                                </a></li>
                            <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                    <h5>Reviews (1)</h5>
                                </a></li>
                        </ul> <!-- End Product Details Tab Button -->

                        <!-- Start Product Details Tab Content -->
                        <div class="product-details-content-tab">
                            <div class="tab-content">
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane active show" id="description">
                                    <div class="single-tab-content-item">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. </p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget</p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="specification">
                                    <div class="single-tab-content-item">
                                        <table class="table table-bordered mb-20">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Compositions</th>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Styles</th>
                                                    <td>Girly</td>
                                                <tr>
                                                    <th scope="row">Properties</th>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                                <!-- Start Product Details Tab Content Singel -->
                                <div class="tab-pane" id="review">
                                    <div class="single-tab-content-item">
                                        <!-- Start - Review Comment -->
                                        <ul class="comment">
                                            <!-- Start - Review Comment list-->
                                            <li class="comment-list">
                                                <div class="comment-wrapper">
                                                    <div class="comment-img">
                                                        <img src="{{asset('assets/images/user/image-1.png')}}" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">Kaedyn Fraser</h6>
                                                                <div class="product-review">
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-empty"><i class="fa fa-star"></i></span>
                                                                </div>
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
                                                                <img src="{{asset('assets/images/user/image-2.png')}}" alt="">
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
                                                        <img src="{{asset('assets/images/user/image-3.png')}}" alt="">
                                                    </div>
                                                    <div class="comment-content">
                                                        <div class="comment-content-top">
                                                            <div class="comment-content-left">
                                                                <h6 class="comment-name">Jaydin Jones</h6>
                                                                <div class="product-review">
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-fill"><i class="fa fa-star"></i></span>
                                                                    <span class="review-empty"><i class="fa fa-star"></i></span>
                                                                </div>
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
                                        <div class="review-form">
                                            <div class="review-form-text-top">
                                                <h5>ADD A REVIEW</h5>
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
                                                        <button class="form-submit-btn" type="submit">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- End Product Details Tab Content Singel -->
                            </div>
                        </div> <!-- End Product Details Tab Content -->

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Product Content Tab Section -->


 
@endsection