<div>


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

                    <form wire:submit.prevent="add_to_cart">
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
                                            {{-- <div class="single-nav-thumb">
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
                                            </div> --}}
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
                                            $price = ($products->product_price*$products->product_discount)/100;


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
                                                <input type="hidden" wire:model="product_id" name="product_id" value="{{ $products->id }}" />
                                                <input type="hidden" wire:model="product_price" name="product_price" value="{{ $price }}" />
                                                <!-- <input type="hidden" name="product_id" id="product_id" value="{{ $products->id }}" /> -->
                                                <input type="hidden" wire:model="product_name" name="product_name" id="product_name" value="{{ $products->product_name }}" />

                                                @if($products->category->category_name=='Shirts')

                                                <div class="ec-pro-variation-inner ec-pro-variation-size">
                                                    <span>SIZE</span>
                                                    <div class="ec-pro-variation-content">
                                                        <ul id="">


                                                            @if(isset($products->size1))
                                                            {{-- <li class="active"><span style="{{ $products->size1 }}" name="size1">{{ $products->size1 }}</span></li> --}}
                                                            {{-- <div class="form-check form-check-inline"> --}}
                                                            {{-- <div class="form-group" style="display:flex;"> --}}
                                                            <input type="radio" class="size-radio" wire:model="size" value="{{ $products->size1 }}">


                                                            <label class=" mr-3">{{ $products->size1 }}</label>

                                                            {{-- </div> --}}
                                                            @endif
                                                            @if(isset($products->size2))

                                                            {{-- <li class="active"><span style="{{ $products->size2 }}" name="size2">{{ $products->size2 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" wire:model="size" value="{{ $products->size2 }}">


                                                            <label class=" mr-3">{{ $products->size2 }}</label>



                                                            @endif
                                                            @if(isset($products->size3))

                                                            {{-- <li class="active"><span style="{{ $products->size3 }}" name="size3">{{ $products->size3 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" wire:model="size" value="{{ $products->size3 }}">



                                                            <label class=" mr-3">{{ $products->size3 }}</label>



                                                            @endif
                                                            @if(isset($products->size4))

                                                            {{-- <li class="active"><span style="{{ $products->size4 }}" name="size4">{{ $products->size4 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" wire:model="size" value="{{ $products->size4 }}">



                                                            <label class=" mr-3">{{ $products->size4 }}</label>



                                                            @endif
                                                            @if(isset($products->size5))

                                                            {{-- <li class="active"><span name="size5" style="{{ $products->size5 }}">{{ $products->size5 }}</span></li> --}}
                                                            <input type="radio" class="size-radio" wire:model="size" value="{{ $products->size5 }}">


                                                            <label class=" mr-3">{{ $products->size5 }}</label>



                                                            @endif

                                                        </ul>

                                                    </div>
                                                </div>
                                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                                    <span>Color</span>
                                                    <div class="ec-pro-variation-content">
                                                        <div style="display:flex" class="mb-3 required checkbox-group" id="">


                                                            <div class="form-group" id="" style="margin-left: 5%;">

                                                                <input type="radio" wire:model="color" style="margin-left: 70%;height: 24px;" id="color" value="{{ $products->color_1 }}" title="Choose your color" />




                                                                <span class="form-control form-control-color" id="color_1" style="width:212%;margin-left: 27%;min-height: 10px; background:{{ $products->color_1 }};" title="Choose your color"></span>



                                                            </div>
                                                            <div class="form-group" style="margin-left: 5%;">


                                                                <input type="radio" wire:model="color" style="margin-left: 70%;height: 24px;" id="color" value="{{ $products->color_2 }}" title="Choose your color" />





                                                                <span class="form-control form-control-color" style="width:212%;min-height: 10px; margin-left: 27%;background:{{ $products->color_2 }};" id="color_2" title="Choose your color"></span>



                                                            </div>

                                                            <div class="form-group" style="margin-left: 5%;">


                                                                <input type="radio" wire:model="color" style="margin-left: 70%;height: 24px;" id="color" value="{{ $products->color_3 }}" title="Choose your color" />










                                                                <span style=" width:212%;margin-left: 27%;background:{{ $products->color_3 }};min-height: 10px;" class="form-control form-control-color" id="color_3" title="Choose your color"></span>



                                                            </div>

                                                            <div class="form-group" style="margin-left: 5%;">


                                                                <input type="radio" wire:model="color" style=" height: 24px;margin-left: 70%;" id="color" value="{{ $products->color_4 }}" title="Choose your color" />









                                                                <span style=" background:{{ $products->color_4 }};margin-left: 27%;width:212%;min-height: 10px;" class="form-control form-control-color" id="color_4" title="Choose your color"></span>


                                                            </div>









                                                            {{-- <ul>


                                            <li class="active form-control-color"><span value="{{ $products->color_1 }}" name="color_1" style="background-color:{{ $products->color_1 }}"></span></li>



                                                            <li class="active form-control-color"><span value="{{ $products->color_2 }}" name="color_2" style="background-color:{{ $products->color_2 }}"></span></li>




                                                            <li class="active"><span value="{{ $products->color_3 }}" name="color_3" style="background-color:{{ $products->color_3 }}"></span></li>



                                                            <li class="active"><span name="color_4" value="{{ $products->color_4 }}" style="background-color:{{ $products->color_4 }}"></span></li>

                                                            </ul> --}}




                                                        </div>
                                                    </div>

                                                </div>
                                                @endif
                                            </div>
                                            {{-- <div id="field1">
                                                <button type="button" id="sub" class="minus">-</button>
                                                <input type="number" wire:model="quantity" value="1" min="1" class='quantity' max="10" />
                                                <button type="button" id="add" class="plus">+</button>
                                            </div> --}}

                                            <div class="ec-single-qty">                                          
                                                <div class="qty-plus-minus" style="width:20%;">

                                                    <input class="qty-input" style="border: 1px solid #d3d3d3;height: 40px;" type="number" wire:model="product_quantity" />



                                                    <input type="hidden" wire:model="product_image" value="product_image"/>

                                                </div>
                                                <div class="ec-single-cart ">
                                                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                                                </div>
                                                <div class="ec-single-wishlist">
                                                    <a class="ec-btn-group wishlist" wire:click="add_to_wishlist({{$products->id}},{{$price}})" title="Wishlist"><img src="{{ asset('assets/images/icons/wishlist.svg')}}" class="svg_img pro_svg " alt="" /></a>



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
                                            {{-- <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li> --}}
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            @endif
                            @endforeach
                            {{-- <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">shoes</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">bag</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">cosmetics</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">electronics</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">phone</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="ec-sb-block-content">
                            <ul>
                                <li>
                                    <div class="ec-sidebar-block-item">accessories</div>
                                    <ul>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Men <span>-25</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Women <span>-52</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Boy <span>-40</span></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ec-sidebar-sub-item"><a href="#">Girl <span>-35</span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                    {{-- <div class="ec-sidebar-slider">
                    <div class="ec-sb-slider-title">Best Sellers</div>
                    <div class="ec-sb-pro-sl">
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/1_1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Teddy Bear</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/2_1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Gym Backpack</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/3_1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Purse for Women</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/4_1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wool Felt Long Brim Hat</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/5_1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Black Leather Belt</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/6_2.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Beautiful Tee for Women</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/7_1.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cotton Shirt for Men</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ec-sb-pro-sl-item">
                                <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/8_2.jpg" alt="product" /></a>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">I Watch for Men</a></h5>
                                    <div class="ec-pro-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star"></i>
                                    </div>
                                    <span class="ec-price">
                                        <span class="old-price">$100.00</span>
                                        <span class="new-price">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->
    {{-- <section class="section ec-releted-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Related products</h2>
                    <h2 class="ec-title">Related products</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-30">
            <!-- Related Product Content -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="assets/images/product-image/6_1.jpg" alt="Product" />
                                <img class="hover-image" src="assets/images/product-image/6_2.jpg" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                <button wire:click="add_to_cart({{$product->id}},{{$price}},1)" title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
</div>
</div>
</div>
<div class="ec-pro-content">
    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
    <div class="ec-pro-rating">
        <i class="ecicon eci-star fill"></i>
        <i class="ecicon eci-star fill"></i>
        <i class="ecicon eci-star fill"></i>
        <i class="ecicon eci-star fill"></i>
        <i class="ecicon eci-star"></i>
    </div>
    <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
    <span class="ec-price">
        <span class="old-price">$27.00</span>
        <span class="new-price">$22.00</span>
    </span>
    <div class="ec-pro-option">
        <div class="ec-pro-color">
            <span class="ec-pro-opt-label">Color</span>
            <ul class="ec-opt-swatch ec-change-img">
                <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_1.jpg" data-src-hover="assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/6_2.jpg" data-src-hover="assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
            </ul>
        </div>
        <div class="ec-pro-size">
            <span class="ec-pro-opt-label">Size</span>
            <ul class="ec-opt-size">
                <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
    <div class="ec-product-inner">
        <div class="ec-pro-image-outer">
            <div class="ec-pro-image">
                <a href="product-left-sidebar.html" class="image">
                    <img class="main-image" src="assets/images/product-image/7_1.jpg" alt="Product" />
                    <img class="hover-image" src="assets/images/product-image/7_2.jpg" alt="Product" />
                </a>
                <span class="percentage">20%</span>
                <span class="flags">
                    <span class="sale">Sale</span>
                </span>
                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                <div class="ec-pro-actions">
                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="ec-pro-content">
            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
            <div class="ec-pro-rating">
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star"></i>
            </div>
            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
            <span class="ec-price">
                <span class="old-price">$12.00</span>
                <span class="new-price">$10.00</span>
            </span>
            <div class="ec-pro-option">
                <div class="ec-pro-color">
                    <span class="ec-pro-opt-label">Color</span>
                    <ul class="ec-opt-swatch ec-change-img">
                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_1.jpg" data-src-hover="assets/images/product-image/7_1.jpg" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/7_2.jpg" data-src-hover="assets/images/product-image/7_2.jpg" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
                    </ul>
                </div>
                <div class="ec-pro-size">
                    <span class="ec-pro-opt-label">Size</span>
                    <ul class="ec-opt-size">
                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">S</a></li>
                        <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00" data-tooltip="Medium">M</a></li>
                        <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
    <div class="ec-product-inner">
        <div class="ec-pro-image-outer">
            <div class="ec-pro-image">
                <a href="product-left-sidebar.html" class="image">
                    <img class="main-image" src="assets/images/product-image/1_1.jpg" alt="Product" />
                    <img class="hover-image" src="assets/images/product-image/1_2.jpg" alt="Product" />
                </a>
                <span class="percentage">20%</span>
                <span class="flags">
                    <span class="sale">Sale</span>
                </span>
                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                <div class="ec-pro-actions">
                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="ec-pro-content">
            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
            <div class="ec-pro-rating">
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star"></i>
            </div>
            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
            <span class="ec-price">
                <span class="old-price">$40.00</span>
                <span class="new-price">$30.00</span>
            </span>
            <div class="ec-pro-option">
                <div class="ec-pro-color">
                    <span class="ec-pro-opt-label">Color</span>
                    <ul class="ec-opt-swatch ec-change-img">
                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_1.jpg" data-src-hover="assets/images/product-image/1_1.jpg" data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_2.jpg" data-src-hover="assets/images/product-image/1_2.jpg" data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a></li>
                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_3.jpg" data-src-hover="assets/images/product-image/1_3.jpg" data-tooltip="Green"><span style="background-color:#ffc476;"></span></a></li>
                        <li><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/1_4.jpg" data-src-hover="assets/images/product-image/1_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#1af0ba;"></span></a></li>
                    </ul>
                </div>
                <div class="ec-pro-size">
                    <span class="ec-pro-opt-label">Size</span>
                    <ul class="ec-opt-size">
                        <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Small">S</a></li>
                        <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Medium">M</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
    <div class="ec-product-inner">
        <div class="ec-pro-image-outer">
            <div class="ec-pro-image">
                <a href="product-left-sidebar.html" class="image">
                    <img class="main-image" src="assets/images/product-image/2_1.jpg" alt="Product" />
                    <img class="hover-image" src="assets/images/product-image/2_2.jpg" alt="Product" />
                </a>
                <span class="percentage">20%</span>
                <span class="flags">
                    <span class="new">New</span>
                </span>
                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                <div class="ec-pro-actions">
                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                    <button title="Add To Cart" class=" add-to-cart"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                    <a class="ec-btn-group wishlist" title="Wishlist"><img src="assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="ec-pro-content">
            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
            <div class="ec-pro-rating">
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star fill"></i>
                <i class="ecicon eci-star"></i>
            </div>
            <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
            <span class="ec-price">
                <span class="old-price">$50.00</span>
                <span class="new-price">$40.00</span>
            </span>
            <div class="ec-pro-option">
                <div class="ec-pro-color">
                    <span class="ec-pro-opt-label">Color</span>
                    <ul class="ec-opt-swatch ec-change-img">
                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="assets/images/product-image/2_1.jpg" data-src-hover="assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section> --}}
<!-- Related Product end -->

<!-- Footer Start -->
{{-- <footer class="ec-footer section-space-mt">
    <div class="footer-container">
        <div class="footer-offer">
            <div class="container">
                <div class="row">
                    <div class="text-center footer-off-msg">
                        <span>Win a contest! Get this limited-editon</span><a href="#" target="_blank">View
                            Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 ec-footer-contact">
                        <div class="ec-footer-widget">
                            <div class="ec-footer-logo"><a href="#"><img src="assets/images/logo/footer-logo.png" alt=""><img class="dark-footer-logo" src="assets/images/logo/dark-logo.png" alt="Site Logo" style="display: none;" /></a></div>
                            <h4 class="ec-footer-heading">Contact us</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                    <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                            0123 456 789</a></li>
                                    <li class="ec-footer-link"><span>Email:</span><a href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-info">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Information</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                    <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                    <li class="ec-footer-link"><a href="#">Delivery Information</a></li>
                                    <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-account">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Account</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">My Account</a></li>
                                    <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                    <li class="ec-footer-link"><a href="#">Wish List</a></li>
                                    <li class="ec-footer-link"><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Services</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                    <li class="ec-footer-link"><a href="#">Policy & policy </a></li>
                                    <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                    <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-news">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Newsletter</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">Get instant updates about our new products and
                                        special promos!</li>
                                </ul>
                                <div class="ec-subscribe-form">
                                    <form id="ec-newsletter-form" name="ec-newsletter-form" method="post" action="#">
                                        <div id="ec_news_signup" class="ec-form">
                                            <input class="ec-email" type="email" required="" placeholder="Enter your email here..." name="ec-email" value="" />
                                            <button id="ec-news-btn" class="button btn-primary" type="submit" name="subscribe" value=""><i class="ecicon eci-paper-plane-o" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Footer social Start -->
                    <div class="col text-left footer-bottom-left">
                        <div class="footer-bottom-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer social End -->
                    <!-- Footer Copyright Start -->
                    <div class="col text-center footer-copy">
                        <div class="footer-bottom-copy ">
                            <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper" href="#">ekka<span>.</span></a>. All Rights Reserved</div>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->
                    <!-- Footer payment -->
                    <div class="col footer-bottom-right">
                        <div class="footer-bottom-payment d-flex justify-content-end">
                            <div class="payment-link">
                                <img src="assets/images/icons/payment.png" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- Footer payment -->
                </div>
            </div>
        </div>
    </div>
</footer> --}}
<!-- Footer Area End -->

<!-- Modal -->
<div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <!-- Swiper -->
                        <div class="qty-product-cover">
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                            </div>
                        </div>
                        <div class="qty-nav-thumb">
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_1.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_2.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_3.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_4.jpg" alt="">
                            </div>
                            <div class="qty-slide">
                                <img class="img-responsive" src="assets/images/product-image/3_5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="quickview-pro-content">
                            <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Handbag leather purse for women</a>
                            </h5>
                            <div class="ec-quickview-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>

                            <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s,</div>
                            <div class="ec-quickview-price">
                                <span class="old-price">$100.00</span>
                                <span class="new-price">$80.00</span>
                            </div>

                            <div class="ec-pro-variation">
                                <div class="ec-pro-variation-inner ec-pro-variation-color">
                                    <span>Color</span>
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch">
                                            <li><span style="background-color:#696d62;"></span></li>
                                            <li><span style="background-color:#d73808;"></span></li>
                                            <li><span style="background-color:#577023;"></span></li>
                                            <li><span style="background-color:#2ea1cd;"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ec-pro-variation-inner ec-pro-variation-size ec-pro-size">
                                    <span>Size</span>
                                    <div class="ec-pro-variation-content">
                                        <ul class="ec-opt-size">
                                            <li class="active"><a href="#" class="ec-opt-sz" data-tooltip="Small">S</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Medium">M</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Large">X</a></li>
                                            <li><a href="#" class="ec-opt-sz" data-tooltip="Extra Large">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-quickview-qty">
                                <div class="qty-plus-minus">
                                    <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                </div>
                                <div class="ec-quickview-cart ">
                                    <button class="btn btn-primary"><img src="assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
{{-- <div class="recent-purchase">
    <img src="assets/images/product-image/1.jpg" alt="payment image">
    <div class="detail">
        <p>Someone in new just bought</p>
        <h6>stylish baby shoes</h6>
        <p>10 Minutes ago</p>
    </div>
    <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
</div> --}}
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
                <img class="whatsapp" src="{{ asset('assets/images/common/whatsapp.png') }}" alt="whatsapp icon" />

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
<!-- Main Js -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<script>
    var input = $('.quantity')
        , minValue = parseInt(input.attr('min'))
        , maxValue = parseInt(input.attr('max'));


    $('.plus').on('click', function() {
        var inputValue = input.val();
        if (inputValue < maxValue) {
            input.val(parseInt(inputValue) + 1);
        }
    });
    $('.minus').on('click', function() {
        var inputValue = input.val();
        if (inputValue < script maxValue) {
            input.val(parseInt(inputValue) - 1);
        }
    });

</script>
