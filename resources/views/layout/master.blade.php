<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Trade TradeUs</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon-5.png')}}" sizes="32x32" />


    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon-5.png')}}" />


    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/favicon-5.png')}}" />



    <!-- css Icon Font -->
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon-5.png')}}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon-5.png')}}" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/favicon-5.png')}}" />



    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/ecicons.min.css')}}" />



    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/countdownTimer.css')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.css')}}" />
    


    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo5.css')}}" />



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @livewireStyles


</head>

<style>
    .ec-main-menu ul li a {
        color: white !important;
    }

    .ec-main-menu ul li.dropdown ul li a {
        color: black !important;
    }

</style>

<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top phone Start -->
                    <div class="col header-top-left">
                        <!-- Social Start -->
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social End -->
                    </div>
                    <!-- Header Top phone End -->
                    <!-- Header Top call Start -->
                    <div class="col header-top-center">
                        <!-- Language Start -->
                        <div class="header-top-lan-curr header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-lan-curr header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->

                    </div>
                    <!-- Header Top call End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-right-inner d-flex justify-content-end">

                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                {{-- @if(auth()->check()) --}}

                                {{-- {{ auth()->user()->name }} --}}
                                {{-- @endif --}}

                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img src="{{ asset('assets/images/icons/user_5.svg')}}" class="svg_img top_svg" alt="" />
                                    @if(auth()->check())
                                    <span class="ec-btn-title">{{ auth()->user()->first_name }}</span>
                                    @endif

                                </button>

                                <ul class="dropdown-menu dropdown-menu-right">

                                    {{-- <li><a class="dropdown-item" href="checkout.html">Checkout</a></li> --}}
                                    @if(auth()->check())
                                    <li><a class="dropdown-item" href="{{ route('logout.perform') }}">Logout</a></li>

                                    @else
                                    <li><a class="dropdown-item" href="{{ route('register.page') }}">Register</a></li>

                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    @endif
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header wishlist Start -->
                            <div class="ec-header-wishlist" style="">

                                {{-- <a href="{{ route('wish.list') }}">

                                <div class="top-icon"><img src="{{ asset('assets/images/icons/pro_wishlist.svg')}}" class="svg_img top_svg" alt="" /></div>
                                <span class="ec-btn-title">wishlist</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col header-top-res d-lg-none">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img src="{{ asset('assets/images/icons/user_5.svg') }}" class="svg_img header_svg" alt="" /></button>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    @if(auth()->check())
                                    <li><a class="dropdown-item" href="{{ route('logout.perform') }}">Logout</a></li>

                                    @else
                                    <li><a class="dropdown-item" href="{{ route('register.page') }}">Register</a></li>

                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                    @endif

                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="{{ route('wish.list') }}" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="{{ asset('assets/images/icons/wishlist.svg')}}" class="svg_img header_svg" alt="" /></div>

                                @include('wishlist-count')

                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{ asset('assets/images/icons/cart_5.svg')}}" class="svg_img header_svg" alt="" /></div>


                                @include('layout.cart')

                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="ecicon eci-bars"></i>
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center ec-header-logo ">
                            <div class="header-logo">
                                <a href="{{ url('/') }}">
                                    <h2>Trade TradeUS</h2>
                                </a>

                            </div>

                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="{{ route('product.search') }}" method="GET">
                                    @csrf
                                    {{-- <div class="ec-search-select-inner"> --}}
                                    {{-- <div class="ec-search-cat-title">All</div>
                                        <ul class="ec-search-cat-block">
                                            <li><a href="#">Cloths</a></li>
                                            <li><a href="#">Bag</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul> --}}
                                    {{-- </div> --}}
                                    <input class="form-control" name="search" placeholder="Search Here..." type="text">
                                    <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <a href="{{ route('wish.list') }}" style="margin-right: -15%;" class="ec-header-btn ec-header-wishlist">

                            <div class="header-icon"><img src="{{ asset('assets/images/icons/wishlist.svg')}}" class="svg_img header_svg" alt="" /></div>

                            @include('wishlist-count')

                        </a>

                        <!-- Ec Header Button Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">

                            <div class="header-icon"><img src="{{ asset('assets/images/icons/cart_5.svg') }}" class="svg_img header_svg" alt="" />

                                @include('layout.cart')
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">Trade TradeUS</a>

                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="{{ route('product.search') }}" method="GET">
                                @csrf

                                {{-- <div class="ec-search-select-inner">
                                    <div class="ec-search-cat-title">All</div>
                                    <ul class="ec-search-cat-block">
                                        <li><a href="#">Cloths</a></li>
                                        <li><a href="#">Bag</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div> --}}
                                <input class="form-control" placeholder="Search Here..." name="search" type="text">

                                <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col ec-category-block">
                        <div class="ec-cat-menu">
                            <div class="ec-category-toggle">
                                <span class="ec-category-icon"></span>
                                <span class="ec-category-title">all categories</span>
                            </div>
                            <div class="ec-category-content">
                                <div id="ec-category-menu" class="ec-category-menu">
                                    <ul class="ec-category-wrapper">
                                        @php
                                        $categories=App\Models\Category::where(function($query){
                                        $query->whereNotNull('parent_category');
                                        })->get();
                                        @endphp
                                        @foreach($categories as $category)

                                        <li><a title="" class="ec-cat-menu-link" href="{{ route('product.category',[$category->id]) }}">{{ $category->category_name }}</a></li>

                                        {{-- <li><a title="" class="ec-cat-menu-link" href="#">Electronics & Digital</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Home Accessories</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Electronics</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Office Furniture</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Hotel Furniture</a></li> --}}
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ec-main-menu-block align-self-center d-none d-lg-block p-0">
                        <div class="ec-main-menu">
                            <ul>
                                <li style="color: white;" class="dropdown"><a href="{{ url('/') }}">Home</a>

                                    <!-- <ul class="sub-menu">
                                        <li><a href="index.html">Fashion 1</a></li>
                                        <li><a href="demo-2.html">Fashion 2</a></li>
                                        <li><a href="demo-3.html">Furniture</a></li>
                                        <li><a href="demo-4.html">Mix products</a></li>
                                        <li><a href="demo-5.html">Electronic</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic</a></li>
                                                <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Banner</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.html">left sidebar 3
                                                        column</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.html">left sidebar 4
                                                        column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.html">right sidebar
                                                        3 column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.html">right sidebar
                                                        4 column</a></li>
                                                <li><a href="shop-banner-full-width.html">Full width 4 column</a>
                                                </li>
                                            </ul> -->
                                <!-- <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Columns</a></li>
                                                <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                                <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">List</a>
                                                </li>
                                                <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                                <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a>
                                                </li>
                                                <li><a href="shop-list-banner-right-sidebar.html">Banner right
                                                        sidebar</a></li>
                                                <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                            </ul> -->
                                <!-- </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive" src="assets/images/menu-banner/1.jpg" alt=""></a></li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img class="img-responsive" src="assets/images/menu-banner/2.jpg" alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img class="img-responsive" src="assets/images/menu-banner/3.jpg" alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img class="img-responsive" src="assets/images/menu-banner/4.jpg" alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li><a href="{{route('show.all')}}">Products</a>
                                    <!-- <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product page
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                                <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product 360
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                                <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product video
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-video-left-sidebar.html">Video left sidebar</a>
                                                </li>
                                                <li><a href="product-video-right-sidebar.html">Video right sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                                gallery
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a>
                                                </li>
                                                <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                        sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-full-width.html">Product full width</a></li>
                                        <li><a href="product-360-full-width.html">360 full width</a></li>
                                        <li><a href="product-video-full-width.html">Video full width</a></li>
                                        <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                    </ul> -->
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a style="color:black !important;" href="{{ route('about.us') }}">About Us</a></li>
                                        <li><a style="color:black !important;" href="{{route('contact.us')}}">Contact Us</a></li>
                                        {{-- <li><a href="cart.html">Cart</a></li> --}}
                                        {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                                        {{-- <li><a href="compare.html">Compare</a></li> --}}
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>

                                        @if(!auth()->check())
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register.page')}}">Register</a></li>
                                        @else
                                        <li><a href="{{route('logout')}}">Logout</a></li>
                                        @endif

                                        {{-- <li><a href="track-order.html">Track Order</a></li> --}}
                                        <li><a href="{{route('terms.condition')}}">Terms Condition</a></li>
                                        <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip" title="NEW"></span><a href="javascript:void(0)">Others</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Confirmation
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                                <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                                <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                                <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                                <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail Reset
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-forgot-password-1.html">Reset password 1</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-2.html">Reset password 2</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-3.html">Reset password 3</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-4.html">Reset password 4</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-5.html">Reset password 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Promotional
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                                <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                                <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                                <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                                <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                                <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                                <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                                <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-hot"></span>
                                            <a href="javascript:void(0)">Vendor account
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                                <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                                <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                                <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-trending"></span>
                                            <a href="javascript:void(0)">User account
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="user-history.html">History</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="user-invoice.html">Invoice</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Construction
                                                pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="404-error-page.html">404 error page</a></li>
                                                <li><a href="under-maintenance.html">maintanence page</a></li>
                                                <li><a href="coming-soon.html">Coming soon page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-new"></span>
                                            <a href="javascript:void(0)">Vendor Catalog
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                                <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <li><a href="{{route('blog.view')}}">Blog</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">detail left sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">detail right sidebar</a></li>
                                        <li><a href="blog-full-width.html">full width</a></li>
                                        <li><a href="blog-detail-full-width.html">detail full width</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                    <ul class="sub-menu">
                                        <li><a href="elemets-products.html">Products</a></li>
                                        <li><a href="elemets-typography.html">Typography</a></li>
                                        <li><a href="elemets-title.html">Titles</a></li>
                                        <li><a href="elemets-categories.html">Categories</a></li>
                                        <li><a href="elemets-buttons.html">Buttons</a></li>
                                        <li><a href="elemets-tabs.html">Tabs</a></li>
                                        <li><a href="elemets-accordions.html">Accordions</a></li>
                                        <li><a href="elemets-blog.html">Blogs</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col ec-spe-offer-block">
                        <div class="ec-spe-offer-link">
                            <a href="offer.html" class="ec-spe-offer-title">Special offer</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- Ekka Menu Start -->
         <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a style="" href="{{ url('/') }}">Home</a>


                            {{-- <ul class="sub-menu">
                                <li><a href="index.html">Fashion 1</a></li>
                                <li><a href="demo-2.html">Fashion 2</a></li>
                                <li><a href="demo-3.html">Furniture</a></li>
                                <li><a href="demo-4.html">Mix products</a></li>
                                <li><a href="demo-5.html">Electronic</a></li>
                            </ul> --}}
                        </li>

                        {{-- <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Columns Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">List Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                    </ul>
                                </li>
                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive" src="assets/images/menu-banner/1.jpg" alt=""></a>
                                </li>
                            </ul>
                        </li> --}}
                        <li><a href="{{route('show.all')}}">Products</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Product page</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product 360</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                        <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product vodeo</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                        <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product gallery</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a></li>
                                        <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html">Product full width</a></li>
                                <li><a href="product-360-full-width.html">360 full width</a></li>
                                <li><a href="product-video-full-width.html">Video full width</a></li>
                                <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                            </ul> -->
                        </li>
                        {{-- <li><a href="javascript:void(0)">Others</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Mail Confirmation</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                        <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                        <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                        <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                        <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Reset password</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                        <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                        <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                        <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                        <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Promotional</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                        <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                        <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                        <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                        <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                        <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                        <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                        <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                        <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                        <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">User Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">User History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">User Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Construction Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404-error-page.html">404 Error Page</a></li>
                                        <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                        <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                        <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>  --}}
                        {{-- <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div> --}}

                        <li><a href="javascript:void(0)">Pages</a>

                            <ul class="sub-menu" style="color:black;">
                                <li><a href="{{ route('about.us') }}">About Us</a></li>
                                <li><a href="{{route('contact.us')}}">Contact Us</a></li>
                                {{-- <li><a href="cart.html">Cart</a></li> --}}
                                {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                                {{-- <li><a href="compare.html">Compare</a></li> --}}
                                <li><a href="{{ route('faq') }}">FAQ</a></li>

                                @if(!auth()->check())
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register.page')}}">Register</a></li>
                                @else
                                <li><a href="{{route('logout')}}">Logout</a></li>
                                @endif

                                {{-- <li><a href="track-order.html">Track Order</a></li> --}}
                                <li><a href="{{route('terms.condition')}}">Terms Condition</a></li>
                                <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>

                            </ul>
                        </li>
                        <!-- Example single danger button -->

                        {{-- <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div> --}}



                        <li class="dropdown"><a href="{{route('blog.view')}}">Blog</a>

                            {{-- <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog full width</a></li>
                                <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                            </ul> --}}
                        </li>
                        {{-- <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="elemets-products.html">Products</a></li>
                                <li><a href="elemets-typography.html">Typography</a></li>
                                <li><a href="elemets-title.html">Titles</a></li>
                                <li><a href="elemets-categories.html">Categories</a></li>
                                <li><a href="elemets-buttons.html">Buttons</a></li>
                                <li><a href="elemets-tabs.html">Tabs</a></li>
                                <li><a href="elemets-accordions.html">Accordions</a></li>
                                <li><a href="elemets-blog.html">Blogs</a></li>
                            </ul>
                        </li>
                        <li><a href="offer.html">Hot Offers</a></li> --}}
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div> 

        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="javascript:void(0)">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Fashion 1</a></li>
                                <li><a href="demo-2.html">Fashion 2</a></li>
                                <li><a href="demo-3.html">Furniture</a></li>
                                <li><a href="demo-4.html">Mix products</a></li>
                                <li><a href="demo-5.html">Electronic</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Columns Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">List Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                    </ul>
                                </li>
                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive" src="assets/images/menu-banner/1.jpg" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Product page</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product 360</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                        <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product vodeo</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                        <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product gallery</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a></li>
                                        <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html">Product full width</a></li>
                                <li><a href="product-360-full-width.html">360 full width</a></li>
                                <li><a href="product-video-full-width.html">Video full width</a></li>
                                <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="javascript:void(0)">Others</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Mail Confirmation</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                        <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                        <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                        <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                        <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Reset password</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                        <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                        <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                        <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                        <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Promotional</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                        <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                        <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                        <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                        <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                        <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                        <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                        <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                        <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                        <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">User Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">User History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">User Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Construction Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404-error-page.html">404 Error Page</a></li>
                                        <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                        <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                        <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> --}}
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="track-order.html">Track Order</a></li>
                                <li><a href="terms-condition.html">Terms Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog full width</a></li>
                                <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="elemets-products.html">Products</a></li>
                                <li><a href="elemets-typography.html">Typography</a></li>
                                <li><a href="elemets-title.html">Titles</a></li>
                                <li><a href="elemets-categories.html">Categories</a></li>
                                <li><a href="elemets-buttons.html">Buttons</a></li>
                                <li><a href="elemets-tabs.html">Tabs</a></li>
                                <li><a href="elemets-accordions.html">Accordions</a></li>
                                <li><a href="elemets-blog.html">Blogs</a></li>
                            </ul>
                        </li>
                        <li><a href="offer.html">Hot Offers</a></li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>

        <!-- Ekka Menu End -->
        @include('layout.cart-view')
    </header>


    @yield('content')
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>

    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>


    <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>


    <!--Plugins JS-->
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/chat-pro.js')}}"></script>


    <!-- Main Js -->
    <script src="{{ asset('assets/js/vendor/index.js')}}"></script>

    {{-- <script src="{{ asset('assets/js/demo-5.js')}}"></script> --}}


    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <!-- Main Js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <!-- Main Js -->
    <script src="{{ asset('assets/js/vendor/index.js')}}"></script>
    <script src="{{ asset('assets/js/demo-5.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.addEventListener('item_exists', event => {
            Swal.fire({
                icon: 'error'
                , title: 'Oops...'
                , text: 'Item already exists.'
            , })
        });

    </script>
    <script>
        window.addEventListener('add_to_cart', event => {
            Swal.fire({
                // position: 'top-end',
                icon: 'success'
                , title: 'Added to cart'
                , showConfirmButton: true,
                // timer: 1500
            })
        });

    </script>
    <script>
        window.addEventListener('quantity_updated', event => {
            Swal.fire({
                // position: 'top-end',
                icon: 'success'
                , title: 'Quantity Updated'
                , showConfirmButton: true,
                // timer: 1500
            })
        });

    </script>
    <script>
        window.addEventListener('add_to_wishlist', event => {
            Swal.fire({
                // position: 'top-end',
                icon: 'success'
                , title: 'Added to wishlist'
                , showConfirmButton: true,
                // timer: 1500
            })
        });

    </script>

    <script>
        window.addEventListener('not_available', event => {

            Swal.fire({
                title: 'Product not available in stock'
                , showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
                , hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <script>
        window.addEventListener('color', event => {


            Swal.fire({
                title: 'Please select color'
                , showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
                , hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <script>
        window.addEventListener('size', event => {


            Swal.fire({
                title: 'Please select size'

                , showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
                , hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <script>
        window.addEventListener('over_quantity', event => {

            Swal.fire({
                title: 'The number of products is not available'

                , showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
                , hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>

    <script>
        window.addEventListener('login', event => {
            Swal.fire({
                title: 'Please login first'
                , showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
                , hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>
    <script>
        window.addEventListener('fields', event => {
            Swal.fire({
                title: 'Please select all required fields.'
                , showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
                , hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            })
        });

    </script>


    @include('layout.footer')

    @livewireScripts
    @include('sweetalert::alert')
</body>

</html>
