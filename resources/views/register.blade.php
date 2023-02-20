<!--========================================================= 
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Trade Trade Us</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/ecicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/countdownTimer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nouislider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <link rel="stylesheet" id="bg-switcher-css" href="{{asset('assets/css/backgrounds/bg-4.css')}}">


</head>
<body class="register_page">
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <a href="{{ url('/') }}">

                                <h2 class="ec-breadcrumb-title">Trade TradeUs</h2>
                            </a>

                        </div>

                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="ec-breadcrumb-item active">Register</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Start Register -->
    @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Register</h2>
                        <h2 class="ec-title">Register</h2>
                        <p class="sub-title mb-3">Best place to buy and sell digital products</p>
                    </div>
                </div>

                <div class="ec-register-wrapper">
                    <div class="ec-register-container">
                        <div class="ec-register-form">
                            <form action="{{ route('register.user') }}" method="post">
                                @csrf
                                <span class="ec-register-wrap ec-register-half">
                                    <label>First Name*</label>
                                    <input type="text" name="first_name" placeholder="Enter your first name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Last Name*</label>
                                    <input type="text" name="last_name" placeholder="Enter your last name" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Email*</label>
                                    <input type="email" name="email" placeholder="Enter your email add..." required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Password*</label>
                                    <input type="password" name="password" placeholder="Enter your password" required />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Confirm Password*</label>
                                    <input type="password" name="confirm_password" placeholder="Confirm password" required />
                                </span>

                                <span class="ec-register-wrap ec-register-half">
                                    <label>Phone Number*</label>
                                    <input type="text" name="phone" placeholder="Enter your phone number" required />
                                </span>
                                <span class="ec-register-wrap">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Address Line 1" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>City *</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="city" id="ec-select-city" class="ec-register-select">
                                            <option selected disabled>City</option>
                                            <option value="City one">City 1</option>
                                            <option value="City two">City 2</option>
                                            <option value="City thre">City 3</option>
                                            <option value="City four">City 4</option>
                                            <option value="City five">City 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Post Code</label>
                                    <input type="text" name="post_code" placeholder="Post Code" />
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Country *</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="country" id="ec-select-country" class="ec-register-select">
                                            <option selected disabled>Country</option>
                                            <option value="country one">Country 1</option>
                                            <option value="country two">Country 2</option>
                                            <option value="country three">Country 3</option>
                                            <option value="country four">Country 4</option>
                                            <option value="country five">Country 5</option>
                                        </select>
                                    </span>
                                </span>
                                <span class="ec-register-wrap ec-register-half">
                                    <label>Region State</label>
                                    <span class="ec-rg-select-inner">
                                        <select name="region" id="ec-select-state" class="ec-register-select">
                                            <option selected disabled>Region/State</option>
                                            <option value="state one">Region/State 1</option>
                                            <option value="state two">Region/State 2</option>
                                            <option value="state three">Region/State 3</option>
                                            <option value="state four">Region/State 4</option>
                                            <option value="state five">Region/State 5</option>

                                        </select>
                                    </span>
                                </span>
                                {{-- <span class="ec-register-wrap ec-recaptcha">
                                    <span class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></span>
                                    <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                                    <span class="help-block with-errors"></span>
                                </span> --}}
                                <span class="ec-register-wrap ec-register-btn">
                                    <button class="btn btn-primary" type="submit">Register</button>
                                    <a style="font-size:1vw;" href="{{ route('login') }}" class="btn btn-secondary">Login</a>

                                </span>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/countdownTimer.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/infiniteslidev2.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
    <!-- Google translate Js -->
    <script src="{{asset('assets/js/vendor/google-translate.js')}}"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }

    </script>
    <!-- Main Js -->
    <script src="{{asset('assets/js/vendor/index.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>


</body>
</html>
