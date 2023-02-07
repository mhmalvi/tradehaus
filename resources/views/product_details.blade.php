@extends('layout.inner-master')

@section('inner-content')

<div>
    {{-- <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ecicons.min.css')}}" />


    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" />
    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('assets/css/backgrounds/bg-4.css')}}"> --}}

    {{-- --}}
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Single Products</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">

                    <!-- Single product content Start -->
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}

                    </div>

                    @endif


                    <form method="post" action="{{ route('store.cart') }}">
                        @csrf
                        <div class="single-pro-block">
                            <div class="single-pro-inner">
                                <div class="row">
                                    <div class="single-pro-img">
                                        <div class="single-product-scroll">
                                            <div class="single-product-cover">
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ env('APP_URL').'/'.$products->product_image }}" alt="">
                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ env('APP_URL').'/'.$products->product_image_2 }}" alt="">

                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ env('APP_URL').'/'.$products->product_image_3 }}" alt="">

                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ env('APP_URL').'/'.$products->product_image_4 }}" alt="">

                                                </div>
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ env('APP_URL').'/'.$products->product_image_5 }}" alt="">

                                                </div>
                                            </div>
                                            <div class="single-nav-thumb">
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="assets/images/product-image/9_1.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="assets/images/product-image/9_2.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="assets/images/product-image/9_3.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="assets/images/product-image/9_4.jpg" alt="">
                                                </div>
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="assets/images/product-image/9_3.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-pro-desc">
                                        <div class="single-pro-content">
                                            <h5 class="ec-single-title">{{ $products->product_name }}</h5>
                                            <div class="ec-single-rating-wrap">
                                                <div class="ec-single-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </div>
                                                <span class="ec-read-review"><a href="#ec-spt-nav-review">Be the first to
                                                        review this product</a></span>
                                            </div>
                                            <div class="ec-single-desc">{{ $products->product_short_description }}</div>

                                            <div class="ec-single-sales">
                                                <div class="ec-single-sales-inner">
                                                    <div class="ec-single-sales-title">sales accelerators</div>
                                                    {{-- <div class="ec-single-sales-visitor">real time <span>24</span> visitor right now!</div> --}}
                                                    <div class="ec-single-sales-progress">
                                                        <span class="ec-single-progress-desc">Hurry up!left {{ $products->product_quantity }} in
                                                            stock</span>
                                                        {{-- <span class="ec-single-progressbar"></span> --}}
                                                    </div>
                                                    {{-- <div class="ec-single-sales-countdown">
                                                        <div class="ec-single-countdown"><span id="ec-single-countdown"></span></div>
                                                        <div class="ec-single-count-desc">Time is Running Out!</div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            @php

                                            @endphp
                                            @if(isset($products->product_discount))
                                            @php
                                            $price = $products->product_price*($products->product_discount/100)

                                            @endphp
                                            {{-- <span class="new-price">${{ $price }}</span>
                                            <span class="old-price">${{ $products->product_price }}</span> --}}

                                            @else
                                            @php
                                            $price = $products->product_price
                                            @endphp

                                            @endif
                                            <div class="ec-single-price-stoke">
                                                <div class="ec-single-price">
                                                    <span class="ec-single-ps-title">As low as</span>
                                                    <span class="new-price">${{ $price }}</span>
                                                </div>
                                                <div class="ec-single-stoke">
                                                    <span class="ec-single-ps-title">IN STOCK</span>
                                                    <span class="ec-single-sku">{{ $products->product_code_name }}</span>
                                                </div>
                                            </div>

                                            <div class="ec-pro-variation">
                                                <!-- {{$products->id}} -->
                                                <input type="hidden" name="product_id" value="{{ $products->id }}" />
                                                <input type="hidden" name="product_price" value="{{ $price }}" />
                                                <!-- <input type="hidden" name="product_id" id="product_id" value="{{ $products->id }}" /> -->
                                                <input type="hidden" name="product_name" id="product_name" value="{{ $products->product_name }}" />

                                                @if($products->category->category_name=='Shirts')

                                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                    <span>SIZE</span>
                                                    <div class="ec-pro-variation-content">
                                                        <ul id="myForm">


                                                            @if(isset($products->size1))
                                                            {{-- <li class="active"><span style="{{ $products->size1 }}" name="size1">{{ $products->size1 }}</span></li> --}}
                                                            {{-- <div class="form-check form-check-inline"> --}}
                                                            {{-- <div class="form-group" style="display:flex;"> --}}
                                                            <input type="radio" class="size-radio" name="size" value="{{ $products->size1 }}">

                                                            <label class=" mr-3">{{ $products->size1 }}</label>

                                                            {{-- </div> --}}
                                                            @endif






                                                            @if(isset($products->size2))

                                                            {{-- <li class="active"><span style="{{ $products->size2 }}" name="size2">{{ $products->size2 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" name="size" value="{{ $products->size2 }}">

                                                            <label class=" mr-3">{{ $products->size2 }}</label>



                                                            @endif
                                                            @if(isset($products->size3))

                                                            {{-- <li class="active"><span style="{{ $products->size3 }}" name="size3">{{ $products->size3 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" name="size" value="{{ $products->size3 }}">


                                                            <label class=" mr-3">{{ $products->size3 }}</label>



                                                            @endif
                                                            @if(isset($products->size4))

                                                            {{-- <li class="active"><span style="{{ $products->size4 }}" name="size4">{{ $products->size4 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" name="size" value="{{ $products->size4 }}">


                                                            <label class=" mr-3">{{ $products->size4 }}</label>



                                                            @endif
                                                            @if(isset($products->size5))

                                                            {{-- <li class="active"><span name="size5" style="{{ $products->size5 }}">{{ $products->size5 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" name="size" value="{{ $products->size5 }}">


                                                            <label class=" mr-3">{{ $products->size5 }}</label>



                                                            @endif

                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                    <span>Color</span>
                                                    <div class="ec-pro-variation-content">
                                                        <div style="display:flex" class="mb-3 required checkbox-group" id="color-form">


                                                            <div class="form-group" id="" style="margin-left: 5%;">

                                                                <input type="radio" name="color" style="margin-left: 70%;height: 24px;" id="color" value="{{ $products->color_1 }}" title="Choose your color" />



                                                                <span class="form-control form-control-color" id="color_1" style="width:212%;margin-left: 27%;min-height: 10px; background:{{ $products->color_1 }};" title="Choose your color"></span>



                                                            </div>
                                                            <div class="form-group" style="margin-left: 5%;">


                                                                <input type="radio" name="color" style="margin-left: 70%;height: 24px;" id="color" value="{{ $products->color_2 }}" title="Choose your color" />



                                                                <span class="form-control form-control-color" style="width:212%;min-height: 10px; margin-left: 27%;background:{{ $products->color_2 }};" id="color_2" title="Choose your color"></span>



                                                            </div>

                                                            <div class="form-group" style="margin-left: 5%;">


                                                                <input type="radio" name="color" style="margin-left: 70%;height: 24px;" id="color" value="{{ $products->color_3 }}" title="Choose your color" />







                                                                <span style=" width:212%;margin-left: 27%;background:{{ $products->color_3 }};min-height: 10px;" class="form-control form-control-color" id="color_3" title="Choose your color"></span>



                                                            </div>

                                                            <div class="form-group" style="margin-left: 5%;">


                                                                <input type="radio" name="color" style=" height: 24px;margin-left: 70%;" id="color" value="{{ $products->color_4 }}" title="Choose your color" />






                                                                <span style=" background:{{ $products->color_4 }};margin-left: 27%;width:212%;min-height: 10px;" class="form-control form-control-color" id="color_4" title="Choose your color"></span>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                @endif
                                            </div>
                                            <div class="ec-single-qty">
                                                <div class="qty-plus-minus">
                                                    <input class="qty-input" type="text" name="product_quantity" value="1" />

                                                </div>
                                                <div class="ec-single-cart ">
                                                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                                                </div>
                                                {{-- @if(Session::has('message'))
                                                <div class="alert alert-success">
                                                    {{ Session::get('message') }}
                                            </div>
                                            @endif --}}

                                            <div class="ec-single-wishlist">
                                                <form action="{{ route('wishlist.store') }}">

                                                    @csrf
                                                    <input type="hidden" id="product_name" name="product_name" value="{{ $products->product_name }}" />
                                                    <input type="hidden" id="product_price" name="product_price" value="{{ $price }}" />
                                                    <input type="hidden" id="product_id" name="product_id" value="{{ $products->id }}" />
                                                    <button type="submit" class="ec-btn-group" title="Wishlist"><img src="{{ asset('assets/images/icons/wishlist.svg') }}" class="svg_img pro_svg" alt="" /></button>

                                                </form>
                                            </div>
                                            {{-- <div class="ec-single-quickview">
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div> --}}
                                        </div>
                                        <div class="ec-single-social">
                                            <ul class="mb-0">
                                                <li class="list-inline-item facebook"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                                <li class="list-inline-item twitter"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                                <li class="list-inline-item instagram"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                                <li class="list-inline-item youtube-play"><a href="#"><i class="ecicon eci-youtube-play"></i></a></li>
                                                <li class="list-inline-item behance"><a href="#"><i class="ecicon eci-behance"></i></a></li>
                                                <li class="list-inline-item whatsapp"><a href="#"><i class="ecicon eci-whatsapp"></i></a></li>
                                                <li class="list-inline-item plus"><a href="#"><i class="ecicon eci-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>

                <!--Single product content End -->
                <!-- Single product tab start -->
                <div class="ec-single-pro-tab">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details" role="tablist">Detail</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info" role="tablist">More Information</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review" role="tablist">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    <p>{!! $products->product_details !!}
                                    </p>
                                    {{-- <ul>
                                        <li>Any Product types that You want - Simple, Configurable</li>
                                        <li>Downloadable/Digital Products, Virtual Products</li>
                                        <li>Inventory Management with Backordered items</li>
                                        <li>Flatlock seams throughout.</li>
                                    </ul> --}}
                                </div>
                            </div>
                            {{-- <div id="ec-spt-nav-info" class="tab-pane fade">
                                <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        <li><span>Weight</span> 1000 g</li>
                                        <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                        <li><span>Color</span> Black, Pink, Red, White</li>
                                    </ul>
                                </div>
                            </div> --}}

                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/1.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Jeny Doe</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="assets/images/review-image/2.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Linda Morgus</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ec-ratting-content">
                                        <h3>Add a Review</h3>
                                        <div class="ec-ratting-form">
                                            <form action="#">
                                                <div class="ec-ratting-star">
                                                    <span>Your rating:</span>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-name" placeholder="Name" type="text" />
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-email" placeholder="Email*" type="email" required />
                                                </div>
                                                <div class="ec-ratting-input form-submit">
                                                    <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                                    <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Category Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Category</h3>
                        </div>
                        @php
                        $parents=App\Models\Category::where(function($query){
                        $query->whereNull('parent_category');
                        })->get();
                        @endphp
                        @foreach($parents as $parent)
                        @if($parent->status=='A')


                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">{{ $parent->category_name }}</div>
                                    <ul style="display: block;">
                                        @php
                                        $childs=App\Models\Category::where(function($query){
                                        $query->whereNotNull('parent_category');

                                        })->where('parent_category',$parent->id)->get();
                                        @endphp
                                        @foreach($childs as $child)
                                        @php
                                        $count = App\Models\Product::where('category_id',$child->id)->count();
                                        @endphp
                                        @if($child->status=='A')
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="{{ route('product.category',[$child->id]) }}">{{ $child->category_name }} <span>-{{ $count }}</span></a>
                                            </div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        @endif
                        @endforeach

                    </div>
                    <!-- Sidebar Category Block -->
                </div>

            </div>
            <!-- Sidebar Area Start -->
        </div>
</div>
</section>
<!-- Modal end -->

<!-- Footer navigation panel for responsive display -->
<div class="ec-nav-toolbar">
    <div class="container">
        <div class="ec-nav-panel">
            <div class="ec-nav-panel-icons">
                <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="index.html" class="ec-header-btn"><img src="assets/images/icons/home.svg" class="svg_img header_svg" alt="icon" /></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="login.html" class="ec-header-btn"><img src="assets/images/icons/user.svg" class="svg_img header_svg" alt="icon" /></a>
            </div>

        </div>
    </div>
</div>
<!-- Footer navigation panel for responsive display end -->

<!-- Recent Purchase Popup  -->
<div class="recent-purchase">
    <img src="assets/images/product-image/1.jpg" alt="payment image">
    <div class="detail">
        <p>Someone in new just bought</p>
        <h6>stylish baby shoes</h6>
        <p>10 Minutes ago</p>
    </div>
    <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
</div>
<!-- Recent Purchase Popup end -->

<!-- Cart Floating Button -->
<div class="ec-cart-float">
    <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
        <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
        <span class="ec-cart-count cart-count-lable">3</span>
    </a>
</div>
<!-- Cart Floating Button end -->

<!-- Whatsapp -->
<div class="ec-style ec-right-bottom">
    <!-- Start Floating Panel Container -->
    <div class="ec-panel">
        <!-- Panel Header -->
        <div class="ec-header">
            <strong>Need Help?</strong>
            <p>Chat with us on WhatsApp</p>
        </div>
        <!-- Panel Content -->
        <div class="ec-body">
            <ul>
                <!-- Start Single Contact List -->
                <li>
                    <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                        <div class="d-flex bd-highlight">
                            <!-- Profile Picture -->
                            <div class="ec-img-cont">
                                <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img" alt="Profile image">
                                <span class="ec-status-icon"></span>
                            </div>
                            <!-- Display Name & Last Seen -->
                            <div class="ec-user-info">
                                <span>Sahar Darya</span>
                                <p>Sahar left 7 mins ago</p>
                            </div>
                            <!-- Chat iCon -->
                            <div class="ec-chat-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <!--/ End Single Contact List -->
                <!-- Start Single Contact List -->
                <li>
                    <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                        <div class="d-flex bd-highlight">
                            <!-- Profile Picture -->
                            <div class="ec-img-cont">
                                <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img" alt="Profile image">
                                <span class="ec-status-icon ec-online"></span>
                            </div>
                            <!-- Display Name & Last Seen -->
                            <div class="ec-user-info">
                                <span>Yolduz Rafi</span>
                                <p>Yolduz is online</p>
                            </div>
                            <!-- Chat iCon -->
                            <div class="ec-chat-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <!--/ End Single Contact List -->
                <!-- Start Single Contact List -->
                <li>
                    <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                        <div class="d-flex bd-highlight">
                            <!-- Profile Picture -->
                            <div class="ec-img-cont">
                                <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img" alt="Profile image">
                                <span class="ec-status-icon ec-offline"></span>
                            </div>
                            <!-- Display Name & Last Seen -->
                            <div class="ec-user-info">
                                <span>Nargis Hawa</span>
                                <p>Nargis left 30 mins ago</p>
                            </div>
                            <!-- Chat iCon -->
                            <div class="ec-chat-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <!--/ End Single Contact List -->
                <!-- Start Single Contact List -->
                <li>
                    <a class="ec-list" data-number="918866774266" data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                        <div class="d-flex bd-highlight">
                            <!-- Profile Picture -->
                            <div class="ec-img-cont">
                                <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img" alt="Profile image">
                                <span class="ec-status-icon ec-offline"></span>
                            </div>
                            <!-- Display Name & Last Seen -->
                            <div class="ec-user-info">
                                <span>Khadija Mehr</span>
                                <p>Khadija left 50 mins ago</p>
                            </div>
                            <!-- Chat iCon -->
                            <div class="ec-chat-icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                        </div>
                    </a>
                </li>
                <!--/ End Single Contact List -->
            </ul>
        </div>
    </div>
    <!--/ End Floating Panel Container -->
    <!-- Start Right Floating Button-->
    <div class="ec-right-bottom">
        <div class="ec-box">
            <div class="ec-button rotateBackward">
                <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon" />
            </div>
        </div>
    </div>
    <!--/ End Right Floating Button-->
</div>
<!-- Whatsapp end -->

<!-- Feature tools -->
<div class="ec-tools-sidebar-overlay"></div>
<div class="ec-tools-sidebar">
    <div class="tool-title">
        <h3>Features</h3>
    </div>
    <a href="#" class="ec-tools-sidebar-toggle in-out">
        <img alt="icon" src="{{ asset('assets/images/common/settings.png') }}" />

    </a>
    <div class="ec-tools-detail">
        <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
            <h3>Color Scheme</h3>
            <ul class="bg-panel">
                <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                <li data-color="02"><a href="#" class="colorcode2"></a></li>
                <li data-color="03"><a href="#" class="colorcode3"></a></li>
                <li data-color="04"><a href="#" class="colorcode4"></a></li>
                <li data-color="05"><a href="#" class="colorcode5"></a></li>
            </ul>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Backgrounds</h3>
            <ul class="bg-panel">
                <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
            </ul>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Full Screen mode</h3>
            <div class="ec-fullscreen-mode">
                <div class="ec-fullscreen-switch">
                    <div class="ec-fullscreen-btn">Mode</div>
                    <div class="ec-fullscreen-on">On</div>
                    <div class="ec-fullscreen-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Dark mode</h3>
            <div class="ec-change-mode">
                <div class="ec-mode-switch">
                    <div class="ec-mode-btn">Mode</div>
                    <div class="ec-mode-on">On</div>
                    <div class="ec-mode-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>RTL mode</h3>
            <div class="ec-change-rtl">
                <div class="ec-rtl-switch">
                    <div class="ec-rtl-btn">Rtl</div>
                    <div class="ec-rtl-on">On</div>
                    <div class="ec-rtl-off">Off</div>
                </div>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Language</h3>
            <div class="ec-change-lang">
                <span id="google_translate_element"></span>
            </div>
        </div>
        <div class="ec-tools-sidebar-content">
            <h3>Clear local storage</h3>
            <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
        </div>
    </div>
</div>

<style>
    .size-radio {
        height: 16px;
        width: 4%;

    }

</style>
{{-- <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script> --}}
{{-- <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script> --}}
{{-- <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script> --}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.wish-btn').on('click', function(e) {
        e.preventDefault();
        var product_id = $('#product_id').val()
        var product_price = $('#product_price').val()
        var product_name = $('#product_name').val()
        var token = $(this).data('token');

        var datastr = 'product_id=' + product_id + '&product_price=' + product_price + '&product_name=' + product_name

        $.ajax({
            type: 'post'
            , data: datastr
            , url: "{{ route('wishlist.store') }}"
            , success: function($data) {

            }
        })
    });

</script>


</div>



@endsection
