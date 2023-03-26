<div>
    <div class="ec-main-slider section ">
        <div class="ec-slider">
            @php
            $url = env('APP_URL');
            $new = App\Models\NewArrival::all();
            @endphp
            @foreach($new as $product)
            <!-- <style>
                .slide-10 {
                    
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;

                }
            </style> -->

            <div class="ec-slide-item d-flex slide-10" style="background-image: url('{{ url($product->image) }}');">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">new arrival</h2>
                                <h1 class="ec-slide-title">{{ $product->title }}</h1>
                                <p>{{$product->short_description}}</p>
                                <a href="{{ route('new.arrival',['slug'=>$product->slug]) }}" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="ec-slide-item d-flex slide-2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Trending Item</h2>
                                <h1 class="ec-slide-title">Motion Camera</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-3">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">upcoming item</h2>
                                <h1 class="ec-slide-title">google nest</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-mb">
        <div class="container">
            <div class="row">
                <div class="ec_cat_slider">
                    @php
                    $categories=App\Models\Category::where(function($query){
                    $query->whereNotNull('parent_category');
                    })->get();
                    @endphp
                    @foreach($categories as $category)

                    <div class="ec_cat_content">

                        <div class="ec_cat_inner">
                            {{-- <h2 class="d-none">Category</h2> --}}
                            {{-- svg_img cat_svg --}}
                            <a href="{{ route('product.category',[$category->id]) }}">

                                <div class="ec-cat-image">
                                    <img src="{{ $category->category_image }}" class="" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">{{ $category->category_name }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- @if(auth()->check())
    <h1>{{ auth()->user()->name }}</h1>
    @endif -->
    <!--category Section End -->
    <!-- @if(session()->has('message')) -->
    <!-- @endif -->
    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Featured Products</h2>
                        <h6 class="ec-sub-title">Lorem Ipsum is simply dummy text of the printing</h6>

                    </div>
                </div>

            </div>

            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            @foreach($products as $product)
                            @if($product->status=='A' && $product->isBlackFriday=='n')



                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">

                                <a href="{{ route('product.details',[$product->id]) }}" class="image">

                                    <div class="ec-product-inner">
                                        <div class="ec-product-hover"></div>
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{ env('APP_URL').'/'. $product->product_image }}" alt="Product" />
                                                    <img class="hover-image" src="{{ env('APP_URL').'/'. $product->product_image }}" alt="Product" />

                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-opt-inner">
                                                    <div class="ec-pro-color">
                                                        {{-- <ul class="ec-opt-swatch ec-change-img">
                                                            <li class="active">
                                                                <a href="#" class="ec-opt-clr-img" data-src="{{ env('APP_URL').'/'. $product->product_image }}" data-src-hover="{{ env('APP_URL').'/'. $product->product_image }}" data-tooltip="Gray">
                                </a>
                                </li>


                                </ul> --}}
                            </div>
                            {{-- <div class="ec-pro-compare">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="{{ env('APP_URL').'/'. $product->product_image }}" class="svg_img pro_svg" alt="" />


                        </div> --}}


                    </div>
                </div>
                <h5 class="ec-pro-title"><a href="{{ route('product.details',[$product->id]) }}">{{ $product->product_name }}</a></h5>

                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{$product->category->category_name}}</a></h6>
                <div class="ec-pro-rat-price">
                    <div class="ec-pro-rat-pri-inner">
                        <span class="ec-price">
                            @php
                            $price = $product->product_price*($product->product_discount/100)




                            @endphp
                            @if(isset($product->product_discount))


                            <span class="new-price">${{ $price }}</span>
                            <span class="old-price">${{ $product->product_price }}</span>




                            @else
                            <span class="new-price">${{ $price = $product->product_price }}</span>


                            @endif

                        </span>
                        <span class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star-o"></i>
                            <i class="ecicon eci-star-o"></i>
                        </span>
                    </div>
                </div>
                <div class="pro-hidden-block">

                    <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                    <div class="ec-pro-actions">
                        <a class="ec-btn-group wishlist" wire:click="add_to_wishlist({{$product->id}},{{$price}})" title="Wishlist"><img src="assets/images/icons/pro_wishlist.svg" class="svg_img pro_svg" alt="" /></a>

                        <button wire:click="add_to_cart({{$product->id}},{{$price}},1)" title="Add To Cart" class=" btn btn-primary">Add To Cart</button>
                        {{-- <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a> --}}
                    </div>
                </div>
            </div>
            </a>
        </div>
        </a>
</div>
@endif
@endforeach

</div>
</div>
</div>
</div>
</div>
</section>
<!-- ec Product tab Area End -->

<!-- ec Banner Section Start -->

<!-- ec Banner Section End -->

<!--  Feature & Special Section Start -->
<section class="section ec-exe-spe-section section-space-ptb-100 section-space-mt section-space-mb-100" style="background-image: url('assets/images/special-product/background.jpg');">
    <div class="container">
        <div class="row">
            <!--  Special Section Start -->
            <div class="ec-spe-section col-lg-6 col-md-12 col-sm-12 margin-b-30">
                <div class="col-md-12 text-left">
                    <div class="section-title mb-6">
                        <h2 class="ec-title">Deals of the days</h2>
                    </div>
                </div>

                <div class="ec-spe-products">
                    @php
                    $deals = App\Models\Product::where('deals_of_the_days','y')->get();
                    @endphp
                    @foreach($deals as $deal)
                    @if($deal->deals_of_the_days=='y')
                    <div class="ec-fs-product">
                        <div class="ec-fs-pro-inner ec-product-inner">
                            <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                <div class="ec-fs-pro-image">
                                    <a href="product-left-sidebar.html" class="image"><img class="main-image" src="{{ env("APP_URL").'/'.$deal->product_image }}" alt="Product" /></a>

                                </div>
                            </div>
                            <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{ $deal->product_name }}</a></h5>

                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{ $deal->category->category_name }}</a></h6>

                                <div class="ec-pro-rat-price">
                                    <span class="ec-price">
                                        @php
                                        $price = $deal->product_price*($deal->product_discount/100)


                                        @endphp
                                        @if(isset($deal->product_discount))

                                        <span class="new-price">${{ $price }}</span>

                                        <span class="old-price">${{ $deal->product_price }}</span>



                                        @else
                                        <span class="new-price">${{ $price=$deal->product_price }}</span>

                                        @endif

                                    </span>
                                </div>
                                <div class="ec-fs-pro-progress">
                                    <span class="ec-fs-pro-progress-desc"><span>Solid:
                                            <b>0</b></span><span>Available: <b>{{ $deal->product_quantity }}</b></span></span>

                                    <span class="ec-fs-pro-progressbar"></span>
                                </div>
                                <div class="countdowntimer">
                                    <span class="ec-fs-count-desc"> Hurry up ! offers ends in:</span>
                                    <span id="ec-fs-count-1"></span>
                                </div>
                                <div class="ec-pro-actions">
                                    <button title="Add To Cart" style="width: 105%; color: white;" wire:click="add_to_cart({{$deal->id}},{{$price}},1)" class="add-to-cart btn btn-primary">Add To


                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    {{-- <div class="ec-fs-product">
                        <div class="ec-fs-pro-inner ec-product-inner">
                            <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                <div class="ec-fs-pro-image">
                                    <a href="product-left-sidebar.html" class="image"><img class="main-image" src="assets/images/special-product/2_1.jpg" alt="Product" /></a>
                                </div>
                            </div>
                            <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless Earphone with Mic neckband </a></h5>
                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia</a></h6>
                                <div class="ec-pro-rat-price">
                                    <span class="ec-price">
                                        <span class="new-price">$480.00</span>
                                        <span class="old-price">$700.00</span>
                                    </span>
                                </div>
                                <div class="ec-fs-pro-progress">
                                    <span class="ec-fs-pro-progress-desc"><span>Solid:
                                            <b>0</b></span><span>Available: <b>200</b></span></span>
                                    <span class="ec-fs-pro-progressbar"></span>
                                </div>
                                <div class="countdowntimer">
                                    <span class="ec-fs-count-desc"> Hurry up ! offers ends in:</span>
                                    <span id="ec-fs-count-2"></span>
                                </div>
                                <div class="ec-pro-actions">
                                    <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!--  Special Section End -->
            <!--  Feature Section Start -->
            <div class="ec-exe-section col-lg-6 col-md-12 col-sm-12">
                <div class="col-md-12 text-left">
                    <div class="section-title mb-6">
                        <h2 class="ec-title">Exclusive Products</h2>
                    </div>
                </div>
                @php
                $exclusive = App\Models\Product::where('isExclusive','y')->get();
                @endphp

                <div class="ec-exe-products product-mt-minus-15">
                    @foreach($exclusive as $data)

                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-product-hover"></div>
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ env('APP_URL').'/'.$data->product_image }}" alt="Product" />
                                        <img class="hover-image" src="{{ env('APP_URL').'/'.$data->product_image }}" alt="Product" />

                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-option">
                                    <div class="ec-pro-opt-inner">
                                        <div class="ec-pro-color">
                                            {{-- <ul class="ec-opt-swatch ec-change-img">
                                                <li class="active">
                                                <a href="#" class="ec-opt-clr-img" data-src="{{ env('APP_URL').'/'.$data->product_image }}" data-src-hover="{{ env('APP_URL').'/'.$data->product_image }}" data-tooltip="Gray">
                                            <span style="background-color:#dbdbdb;"></span>
                                            </a>
                                            </li>


                                            <li><a href="#" class="ec-opt-clr-img" data-src="{{ env('APP_URL').'/'.$data->product_image }}" data-src-hover="{{ env('APP_URL').'/'.$data->product_image }}" data-tooltip="Orange">
                                                    <span style="background-color:#76e7e7;"></span>
                                                </a></li>


                                            </ul> --}}
                                        </div>
                                        {{-- <div class="ec-pro-compare">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare_5.svg" class="svg_img pro_svg" alt="" /></a>
                                        </div> --}}
                                    </div>
                                </div>
                                <h5 class="ec-pro-title"><a href="{{ route('product.details',[$data->id]) }}">{{ $data->product_name }}</a></h5>

                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">{{ $data->category->category_name }}</a></h6>

                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            @php
                                            $price = $data->product_price*($data->product_discount/100)




                                            @endphp
                                            @if(isset($data->product_discount))


                                            <span class="new-price">${{ $price }}</span>

                                            <span class="old-price">${{ $data->product_price }}</span>




                                            @else
                                            <span class="new-price">${{ $price=$data->product_price }}</span>


                                            @endif

                                        </span>
                                        <span class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="pro-hidden-block">

                                    <div class="ec-pro-desc">{{ $data->product_short_description }} </div>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" wire:click="add_to_wishlist({{$data->id}},{{$data->product_price}})" title="Wishlist"><img src="assets/images/icons/pro_wishlist.svg" class="svg_img pro_svg" alt="" /></a>


                                        <button title="Add To Cart" wire:click="add_to_cart({{$data->id}},{{$price}},1)" class="add-to-cart btn btn-primary">Add To

                                            Cart</button>
                                        {{-- <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-product-hover"></div>
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/special-product/4_1.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/special-product/4_2.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-option">
                                    <div class="ec-pro-opt-inner">
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch ec-change-img">
                                                <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/special-product/4_1.jpg" data-src-hover="assets/images/special-product/4_2.jpg" data-tooltip="Gray"><span style="background-color:#202020;"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="ec-pro-compare">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare_5.svg" class="svg_img pro_svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Galacy 8 phone 4gb | 64gb </a></h5>
                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Phone</a></h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$159.00</span>
                                            <span class="old-price">$200.00</span>
                                        </span>
                                        <span class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="pro-hidden-block">

                                    <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/pro_wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                        <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                            Cart</button>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-product-hover"></div>
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/special-product/6_1.jpg" alt="Product" />
                                        <img class="hover-image" src="assets/images/special-product/6_2.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-option">
                                    <div class="ec-pro-opt-inner">
                                        <div class="ec-pro-color">
                                            <ul class="ec-opt-swatch ec-change-img">
                                                <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/special-product/6_1.jpg" data-src-hover="assets/images/special-product/6_1.jpg" data-tooltip="Gray"><span style="background-color:#dfdfdf;"></span></a></li>
                                                <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/special-product/6_2.jpg" data-src-hover="assets/images/special-product/6_2.jpg" data-tooltip="Orange"><span style="background-color:#91b6ff;"></span></a></li>
                                            </ul>
                                        </div>
                                        <div class="ec-pro-compare">
                                            <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare_5.svg" class="svg_img pro_svg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Ultra sound smart speaker</a></h5>
                                <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia</a></h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$768.00</span>
                                            <span class="old-price">$845.00</span>
                                        </span>
                                        <span class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="pro-hidden-block">

                                    <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/pro_wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                        <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                            Cart</button>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach

                </div>

            </div>
            <!--  Feature Section End -->

        </div>
    </div>
</section>
<!-- Feature & Special Section End -->

<!--  offer Section Start -->
<section class="section ec-offer-section section-space-mt section-space-mb">
    <h2 class="d-none">Offer</h2>
    <div class="container">
        @php
        $friday = App\Models\Product::where('isBlackFriday','y')->get();
        @endphp
        @foreach($friday as $data)

        <div class="ec-offer-inner ofr-img">

            <img style="width: 26%;" src="{{ env('APP_URL').'/'.$data->product_image }}">


            <!-- <img src="assets/images/offer-image/offer_bg.png" alt="" class="offer_bg" /> -->

            <div class="col-sm-6 ec-offer-content">

                <div class="ec-offer-content-inner">
                    <h2 class="ec-offer-stitle">black friday</h2>
                    <h2 class="ec-offer-title">up to {{$data->product_discount}} % off</h2>
                    <span class="ec-offer-desc">Select accessories for your favourites gadgets</span>
                    <span class="ec-offer-btn"><a href="{{ route('product.details',[$data->id]) }}" class="btn btn-primary">Shop Now</a></span>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</section>
<!-- offer Section End -->

<!-- All Product Start -->
<section class="section ec-all-products section-space-p">
    <h2 class="d-none">all product</h2>
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30">
                <div class="col-md-12 text-left">
                    <div class="section-title">
                        <h2 class="ec-title">New Arrivals</h2>
                    </div>
                </div>
                <div class="ec-new-slider">
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/39_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Camera instant image</a></h5>
                                <h6 class="ec-pro-stitle">Camera</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$589.00</span>
                                            <span class="old-price">$658.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/40_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest speaker</a></h5>
                                <h6 class="ec-pro-stitle">Multimedia</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$256.00</span>
                                            <span class="old-price">$298.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/41_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless airpods</a></h5>
                                <h6 class="ec-pro-stitle">accessories</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$56.00</span>
                                            <span class="old-price">$78.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/42_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">iPhone 13 max</a></h5>
                                <h6 class="ec-pro-stitle">Phone</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$2580.00</span>
                                            <span class="old-price">$3650.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/43_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Room Purifier</a></h5>
                                <h6 class="ec-pro-stitle">Electronics</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$385.00</span>
                                            <span class="old-price">$456.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/44_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless headphone</a></h5>
                                <h6 class="ec-pro-stitle">Music</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$159.00</span>
                                            <span class="old-price">$200.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/45_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung laptop</a></h5>
                                <h6 class="ec-pro-stitle">Laptop</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$1520.00</span>
                                            <span class="old-price">$1752.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/46_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch</a></h5>
                                <h6 class="ec-pro-stitle">Electronics</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$20.00</span>
                                            <span class="old-price">$30.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-special-product-content margin-b-30">
                <div class="col-md-12 text-left">
                    <div class="section-title">
                        <h2 class="ec-title">Special offer</h2>
                    </div>
                </div>
                <div class="ec-special-slider">
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/42_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">iPhone 13 max</a></h5>
                                <h6 class="ec-pro-stitle">Phone</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$2580.00</span>
                                            <span class="old-price">$3650.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/43_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Room Purifier</a></h5>
                                <h6 class="ec-pro-stitle">Electronics</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$385.00</span>
                                            <span class="old-price">$456.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/44_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless headphone</a></h5>
                                <h6 class="ec-pro-stitle">Music</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$159.00</span>
                                            <span class="old-price">$200.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/45_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung laptop</a></h5>
                                <h6 class="ec-pro-stitle">Laptop</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$1520.00</span>
                                            <span class="old-price">$1752.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/41_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless airpods</a></h5>
                                <h6 class="ec-pro-stitle">accessories</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$56.00</span>
                                            <span class="old-price">$78.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/39_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Camera instant image</a></h5>
                                <h6 class="ec-pro-stitle">Camera</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$589.00</span>
                                            <span class="old-price">$658.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/40_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest speaker</a></h5>
                                <h6 class="ec-pro-stitle">Multimedia</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$256.00</span>
                                            <span class="old-price">$298.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/46_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch</a></h5>
                                <h6 class="ec-pro-stitle">Electronics</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$20.00</span>
                                            <span class="old-price">$30.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-best-product-content">
                <div class="col-md-12 text-left">
                    <div class="section-title">
                        <h2 class="ec-title">Best Sellers</h2>
                    </div>
                </div>
                <div class="ec-best-slider">
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/44_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless headphone</a></h5>
                                <h6 class="ec-pro-stitle">Music</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$159.00</span>
                                            <span class="old-price">$200.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/45_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung laptop</a></h5>
                                <h6 class="ec-pro-stitle">Laptop</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$1520.00</span>
                                            <span class="old-price">$1752.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/42_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">iPhone 13 max</a></h5>
                                <h6 class="ec-pro-stitle">Phone</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$2580.00</span>
                                            <span class="old-price">$3650.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/43_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Room Purifier</a></h5>
                                <h6 class="ec-pro-stitle">Electronics</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$385.00</span>
                                            <span class="old-price">$456.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/40_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest speaker</a></h5>
                                <h6 class="ec-pro-stitle">Multimedia</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$256.00</span>
                                            <span class="old-price">$298.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/41_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless airpods</a></h5>
                                <h6 class="ec-pro-stitle">accessories</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$56.00</span>
                                            <span class="old-price">$78.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/46_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch</a></h5>
                                <h6 class="ec-pro-stitle">Electronics</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$20.00</span>
                                            <span class="old-price">$30.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ec-all-product-block">
                        <div class="ec-all-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="assets/images/product-image/39_1.jpg" alt="Product" />
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Camera instant image</a></h5>
                                <h6 class="ec-pro-stitle">Camera</h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">$589.00</span>
                                            <span class="old-price">$658.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-right-banner-content dis-n-767">
                <div class="ec-right-banner-inner">
                    <div class="right-banner-block">
                        <img class="right-banner-img" src="assets/images/banner/22.png" alt="Banner" />
                        <div class="right-banner-content">
                            <span class="ec-right-banner-title">mi 8 lite</span>
                            <span class="ec-right-banner-stitle">selfies and style</span>
                            <span class="ec-right-banner-btn"><a href="#" class="btn-primary">Add to cart</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- All Item end -->

<!-- ec testimonial Start -->
{{-- <section class="section ec-test-section section-space-ptb-100 section-space-mt section-space-mb" style="background-image: url('assets/images/testimonial/testimonial_bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-block">
                <div class="section-title">
                    <h2 class="ec-title">Client Testimonials</h2>
                    <h6 class="ec-sub-title">Lorem Ipsum is simply dummy text of the printing</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ec-test-outer">
                <ul id="ec-testimonial-slider">
                    <li class="ec-test-item">
                        <div class="ec-test-inner">
                            <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/1.jpg" /></div>
                            <div class="ec-test-content">
                                <div class="ec-test-name">david james</div>
                                <div class="ec-test-designation">united states of america</div>
                                <div class="ec-test-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry</div>

                            </div>
                        </div>
                    </li>
                    <li class="ec-test-item">
                        <div class="ec-test-inner">
                            <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/2.jpg" /></div>
                            <div class="ec-test-content">
                                <div class="ec-test-name">david james</div>
                                <div class="ec-test-designation">united states of america</div>
                                <div class="ec-test-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry</div>

                            </div>
                        </div>
                    </li>
                    <li class="ec-test-item">
                        <div class="ec-test-inner">
                            <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/3.jpg" /></div>
                            <div class="ec-test-content">
                                <div class="ec-test-name">david james</div>
                                <div class="ec-test-designation">united states of america</div>
                                <div class="ec-test-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry</div>

                            </div>
                        </div>
                    </li>
                    <li class="ec-test-item">
                        <div class="ec-test-inner">
                            <div class="ec-test-img"><img alt="testimonial" title="testimonial" src="assets/images/testimonial/1.jpg" /></div>
                            <div class="ec-test-content">
                                <div class="ec-test-name">david james</div>
                                <div class="ec-test-designation">united states of america</div>
                                <div class="ec-test-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                </div>
                                <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry</div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}
<!-- ec testimonial end -->

<!-- Ec Brand Section Start -->
{{-- <section class="section ec-brand-area section-space-p">
    <h2 class="d-none">Brand</h2>
    <div class="container">
        <div class="row">
            <div class="ec-brand-outer">
                <ul id="ec-brand-slider">
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/1.png" /></a></div>
                    </li>
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/2.png" /></a></div>
                    </li>
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/3.png" /></a></div>
                    </li>
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/4.png" /></a></div>
                    </li>
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/5.png" /></a></div>
                    </li>
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/6.png" /></a></div>
                    </li>
                    <li class="ec-brand-item">
                        <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand" src="assets/images/brand-image/7.png" /></a></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Ec Brand Section End -->

<!-- Ec Instagram Start -->
<section class="section ec-instagram-section section-space-pt">
    <div class="ec-insta-wrapper">
        <div class="ec-insta-outer">
            <div class="insta-auto">
                <h2 class="d-none">Instagram</h2>
                <!-- instagram item -->
                <div class="ec-insta-item">
                    <div class="ec-insta-inner">
                        <a href="#" target="_blank"><img src="assets/images/instragram-image/1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- instagram item -->
                <div class="ec-insta-item">
                    <div class="ec-insta-inner">
                        <a href="#" target="_blank"><img src="assets/images/instragram-image/2.jpg" alt="">

                        </a>
                    </div>
                </div>
                <!-- instagram item -->
                <div class="ec-insta-item">
                    <div class="ec-insta-inner">
                        <a href="#" target="_blank"><img src="assets/images/instragram-image/3.jpg" alt="">

                        </a>
                    </div>
                </div>
                <!-- instagram item -->
                <div class="ec-insta-item">
                    <div class="ec-insta-inner">
                        <a href="#" target="_blank"><img src="assets/images/instragram-image/4.jpg" alt="">

                        </a>
                    </div>
                </div>
                <!-- instagram item -->
                <div class="ec-insta-item">
                    <div class="ec-insta-inner">
                        <a href="#" target="_blank"><img src="assets/images/instragram-image/5.jpg" alt="">

                        </a>
                    </div>
                </div>
                <!-- instagram item -->
            </div>
        </div>
    </div>
</section> --}}
<!-- Ec Instagram End -->

<!--  services Section Start -->
{{-- <section class="section ec-services-section">
    <h2 class="d-none">Services</h2>
    <div class="container">
        <div class="row">
            <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-3">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_5_1.svg" class="svg_img" alt="" />
                    </div>
                    <div class="ec-service-desc">
                        <h2>Free shipping</h2>
                        <p>Free shipping on all US orders</p>
                    </div>
                </div>
            </div>
            <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-3">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_2.svg" class="svg_img" alt="" />
                    </div>
                    <div class="ec-service-desc">
                        <h2>money gaurntee</h2>
                        <p>30 days money back guarantee</p>
                    </div>
                </div>
            </div>
            <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-3">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_3.svg" class="svg_img" alt="" />
                    </div>
                    <div class="ec-service-desc">
                        <h2>online support</h2>
                        <p>We support online 24/7 on day</p>
                    </div>
                </div>
            </div>
            <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-3">
                <div class="ec_ser_inner">
                    <div class="ec-service-image">
                        <img src="assets/images/icons/service_5_4.svg" class="svg_img" alt="" />
                    </div>
                    <div class="ec-service-desc">
                        <h2>Member Discount</h2>
                        <p>Onevery order over $120.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
</div>