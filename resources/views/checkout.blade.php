@extends('layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/vendor/ecicons.min.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/countdownTimer.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />

<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}" />

<link rel="stylesheet" id="bg-switcher-css" href="{{ asset('assets/css/backgrounds/bg-4.css')}}">




<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title">Checkout</h2>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="ec-breadcrumb-item active">Checkout</li>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ec breadcrumb end -->

<!-- Ec checkout page -->
<style>
    input[type="radio"] {
        width: 11%;
        height: 11px;

    }

    .ec-product-inner {
        border: none;
    }

    .ec-pro-rating {
        margin-left: -61%;

    }

</style>


<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-checkout-leftside col-lg-8 col-md-12 ">
                <!-- checkout content Start -->
                <div class="ec-checkout-content">
                    <div class="ec-checkout-inner">
                        {{-- <div style="padding: 30px;border: 1px solid #ededed;" class="ec-checkout-wrap margin-bottom-30">


                            <div class="ec-checkout-block ec-check-new">
                                <h3 style="margin-bottom: 21px;" class=" ec-checkout-title">New Customer</h3>

                                <div class="ec-check-block-content">
                                    <div class="ec-check-subtitle">Checkout Options</div>
                                    <form action="#">
                                        <span class="ec-new-option">
                                            <span>
                                                <input type="radio" id="account1" name="radio-group" checked>

                                                <label for="account1">Register Account</label>
                                            </span>
                                            <span>
                                                <input type="radio" id="account2" name="radio-group">

                                                <label for="account2">Guest Account</label>
                                            </span>
                                        </span>
                                    </form>
                                    <div class="ec-new-desc">By creating an account you will be able to shop faster,
                                        be up to date on an order's status, and keep track of the orders you have
                                        previously made.
                                    </div>
                                    <div class="ec-new-btn"><a href="#" class="btn btn-primary">Continue</a></div>

                                </div>
                            </div>
                            <div class="ec-checkout-block ec-check-login">
                                <h3 style="margin-bottom: 21px;" class="ec-checkout-title">Returning Customer</h3>

                                <div class="ec-check-login-form">
                                    <form action="#" method="post">
                                        <span class="ec-check-login-wrap">
                                            <label>Email Address</label>
                                            <input type="text" name="name" placeholder="Enter your email address" required />
                                        </span>
                                        <span class="ec-check-login-wrap">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Enter your password" required />
                                        </span>

                                        <span class="ec-check-login-wrap ec-check-login-btn">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                            <a class="ec-check-login-fp" href="#">Forgot Password?</a>
                                        </span>
                                    </form>
                                </div>
                            </div>

                        </div> --}}
                        @if(auth()->check())

                        @php
                        $items = App\Models\Cart::where('user_id',auth()->user()->id)->get();
                       
                        @endphp
                        @endif
                        <form>
                            {{-- @csrf --}}
                            <div style="border: 1px solid #ededed;padding: 30px;" class="ec-checkout-wrap margin-bottom-30 padding-bottom-3">

                                {{-- {{ $sub_total }} --}}
                                <div class="ec-checkout-block ec-check-bill">
                                    <h3 style="margin-bottom: 21px;" class="ec-checkout-title">Billing Details</h3>

                                    <div class="ec-bl-block-content">
                                        {{-- <div class="ec-check-subtitle">Checkout Options</div>
                                        <span class="ec-bill-option">
                                            <span>
                                                <input type="radio" id="bill1" name="radio-group">
                                                <label for="bill1">I want to use an existing address</label>
                                            </span>
                                            <span>
                                                <input type="radio" id="bill2" name="radio-group" checked>
                                                <label for="bill2">I want to use new address</label>
                                            </span>
                                        </span> --}}
                                        <div class="ec-check-bill-form">

                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>First Name*</label>
                                                <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required />

                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Last Name*</label>
                                                <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required />


                                            </span>
                                            <span class="ec-bill-wrap">
                                                <label>Address</label>
                                                <input type="string" id="address" name="address" placeholder="Address Line 1" />



                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>City *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="city" id="city" class="ec-bill-select">
                                                        <option selected disabled>City</option>
                                                        <option value="city one">City 1</option>
                                                        <option value="city one">City 2</option>
                                                        <option value="city one">City 3</option>
                                                        <option value="city one">City 4</option>
                                                        <option value="city one">City 5</option>
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Post Code</label>
                                                <input type="text" name="post_code" id="post_code" placeholder="Post Code" />

                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Country *</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="country" id="country" class="ec-bill-select">


                                                        <option selected disabled>Country</option>
                                                        <option value="country one">Country 1</option>
                                                        <option value="country one">Country 2</option>
                                                        <option value="country one">Country 3</option>
                                                        <option value="country one">Country 4</option>
                                                        <option value="country one">Country 5</option>
                                                    </select>
                                                </span>
                                            </span>
                                            <span class="ec-bill-wrap ec-bill-half">
                                                <label>Region State</label>
                                                <span class="ec-bl-select-inner">
                                                    <select name="region" id="region" class="ec-bill-select">


                                                        <option selected disabled>Region/State</option>
                                                        <option value="state">Region/State 1</option>
                                                        <option value="state">Region/State 2</option>
                                                        <option value="state">Region/State 3</option>
                                                        <option value="state">Region/State 4</option>
                                                        <option value="state">Region/State 5</option>
                                                    </select>
                                                    @php
                                                    $delivery_charge = 80.00;
                                                    $product_items = json_encode($items);


                                                    @endphp

                                                    <input type="hidden" name="items" id="items" value="{{ $product_items }}" />





                                                    <input type="hidden" name="sub_total" id="sub_total" value="{{ $sub_total }}" />

                                                    {{-- <input type="hidden" name="sub_total" id="sub_total" value="{{ $sub_total }}" /> --}}



                                                    <input type="hidden" name="delivery_charge" id="delivery_charge" value="{{ $delivery_charge }}" />


                                                    <input type="hidden" name="total_amount" id="total_amount" value="{{ $sub_total+$delivery_charge }}" />


                                                </span>

                                                @if($items)

                                                @foreach($items as $cart_item)
                                                @php
                                                $product_item = App\Models\Product::find($cart_item->product_id)->first();
                                                @endphp
                                                {{-- <input type="hidden" name="product_price[]" id="product_price" value="{{ $product_item->product_name }}" /> --}}


                                                @php



                                                @endphp
                                                @if(isset($product_item->product_discount))

                                                @php
                                                $price = $product_item->product_price*($product_item->product_discount/100)

                                                @endphp

                                                @else
                                                @php
                                                $price = $item->product_price

                                                @endphp
                                                @endif

                                                {{-- <input type="hidden" name="product_price[]" id="region" value="{{ $price }}" /> --}}


                                                {{-- <input type="hidden" name="images[]" value="{{ $product_item->product_image }}" /> --}}

                                                @endforeach
                                                @endif

                                            </span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <span class="ec-check-order-btn">
                                <button class="btn btn-primary place_order m-auto" type="button" href="#">Place Order</button>
                            </span>
                        </form>

                    </div>
                </div>
                <!--cart content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-checkout-rightside col-lg-4 col-md-12">
                <div class="ec-sidebar-wrap">
                    <!-- Sidebar Summary Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Summary</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-checkout-summary">
                                <div>
                                    <span class="text-left">Sub-Total</span>
                                    <span class="text-right">${{ $sub_total }}.00</span>

                                </div>
                                <div>
                                    <span class="text-left">VAT(20%)</span>
                                    <span class="text-right">$60.00</span>

                                </div>
                                <div>
                                    <span class="text-left">Delivery Charges</span>
                                    <span class="text-right">${{ $delivery_charge }}.00</span>
                                </div>
                                @php
                                $total = $sub_total+$delivery_charge+60;

                                @endphp
                                <div>
                                    <span class="text-left">Coupan Discount</span>
                                    <span class="text-right"><a class="ec-checkout-coupan">Apply Coupan</a></span>
                                </div>
                                <div class="ec-checkout-coupan-content">
                                    <form class="ec-checkout-coupan-form" name="ec-checkout-coupan-form" method="post" action="#">
                                        <input class="ec-coupan" type="text" required="" placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                        <button class="ec-coupan-btn button btn-primary" type="submit" name="subscribe" value="">Apply</button>
                                    </form>
                                </div>
                                <div class="ec-checkout-summary-total">
                                    <span class="text-left">Total Amount</span>
                                    <span class="text-right">${{ $total }}.00</span>

                                </div>
                            </div>
                            @php
                            $items = App\Models\Cart::where('user_id',auth()->user()->id)->get();
                            @endphp
                            <div class="ec-checkout-pro">
                                @foreach($items as $item)
                                @php
                                $image = App\Models\Product::find($item->product_id);

                                @endphp
                                <div class="col-sm-12 mb-6">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <input type="hidden" name="product_image[]" value="{{ $image->product_image }}" />

                                                    <img class="main-image" src="{{ env('APP_URL').'/'.$image->product_image }}" alt="Product" />

                                                    <img class="hover-image" src="{{ env('APP_URL').'/'.$image->product_image }}" alt="Product" />

                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $item->product_name }}</a></h5>
                                            <div class="ec-pro-rating" style="margin-left: -42%;">

                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <span class="ec-price" style="width:115%;">
                                                @php
                                                $price = $item->product_price*($item->product_discount/100)
                                                @endphp
                                                @if(isset($item->product_discount))

                                                <span class="new-price">${{ $price }}</span>
                                                <span class="old-price">${{ $image->product_price }}</span>

                                                @else
                                                <span class="new-price">${{ $price = $item->product_price }}</span>

                                                @endif

                                                <span class="old-price">${{ $image->product_price }}.00</span>

                                                <span class="new-price">${{ $price }}.00</span>
                                            </span>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Summary Block -->
                </div>
                <div class="ec-sidebar-wrap ec-checkout-del-wrap">
                    <!-- Sidebar Summary Block -->
                    {{-- <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Delivery Method</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-checkout-del">
                                <div class="ec-del-desc">Please select the preferred shipping method to use on this
                                    order.</div>
                                <form action="#">
                                    <span class="ec-del-option">
                                        <span>
                                            <span class="ec-del-opt-head">Free Shipping</span>
                                            <input type="radio" id="del1" name="radio-group" checked>
                                            <label for="del1">Rate - $0 .00</label>
                                        </span>
                                        <span>
                                            <span class="ec-del-opt-head">Flat Rate</span>
                                            <input type="radio" id="del2" name="radio-group">
                                            <label for="del2">Rate - $5.00</label>
                                        </span>
                                    </span>
                                    <span class="ec-del-commemt">
                                        <span class="ec-del-opt-head">Add Comments About Your Order</span>
                                        <textarea name="your-commemt" placeholder="Comments"></textarea>
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Sidebar Summary Block -->
                </div>
                {{-- <div class="ec-sidebar-wrap ec-checkout-pay-wrap">
                    <!-- Sidebar Payment Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Payment Method</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-checkout-pay">
                                <div class="ec-pay-desc">Please select the preferred payment method to use on this
                                    order.</div>
                                <form action="#">
                                    <span class="ec-pay-option">
                                        <span>
                                            <input type="radio" id="pay1" name="radio-group" checked>
                                            <label for="pay1">Cash On Delivery</label>
                                        </span>
                                    </span>
                                    <span class="ec-pay-commemt">
                                        <span class="ec-pay-opt-head">Add Comments About Your Order</span>
                                        <textarea name="your-commemt" placeholder="Comments"></textarea>
                                    </span>
                                    <span class="ec-pay-agree"><input type="checkbox" value=""><a href="#">I have
                                            read and agree to the <span>Terms & Conditions</span></a><span class="checked"></span></span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Payment Block -->
                </div> --}}
                <div class="ec-sidebar-wrap ec-check-pay-img-wrap">
                    <!-- Sidebar Payment Block -->
                    <div class="ec-sidebar-block">
                        <div class="ec-sb-title">
                            <h3 class="ec-sidebar-title">Payment Method</h3>
                        </div>
                        <div class="ec-sb-block-content">
                            <div class="ec-check-pay-img-inner">
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment1.png')}}" alt="">
                                </div>
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment2.png')}}" alt="">
                                </div>
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment3.png')}}" alt="">
                                </div>
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment4.png')}}" alt="">
                                </div>
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment5.png')}}" alt="">
                                </div>
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment6.png')}}" alt="">
                                </div>
                                <div class="ec-check-pay-img">
                                    <img src="{{asset('assets/images/icons/payment7.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Payment Block -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product Start -->
<!-- <section class="section ec-new-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">New Arrivals</h2>
                    <h2 class="ec-title">New Arrivals</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- New Product Content -->
        </div>
    </div>
</section> -->
{{-- <script src="{{ asset('js/ajax.js')}}"></script> --}}

{{-- <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/countdownTimer.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/slick.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/infiniteslidev2.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
<script src="{{ asset('assets/js/vendor/google-translate.js')}}"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }

</script>
<!-- Main Js -->
<script src="{{ asset('assets/js/vendor/index.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script> --}}


@endsection
