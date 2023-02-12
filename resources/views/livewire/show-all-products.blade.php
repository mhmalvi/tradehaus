<div>
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">All Products</h2>
                        <h6 class="ec-sub-title">Lorem Ipsum is simply dummy text of the printing</h6>

                    </div>
                </div>

            </div>

            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            @foreach($products as $product)
                            @if($product->status=='A')



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
                                                        <ul class="ec-opt-swatch ec-change-img">
                                                            <li class="active">
                                                                <a href="#" class="ec-opt-clr-img" data-src="{{ env('APP_URL').'/'. $product->product_image }}" data-src-hover="{{ env('APP_URL').'/'. $product->product_image }}" data-tooltip="Gray">
                                                                    {{-- <span style="background-color:#ef7ca3;"></span> --}}
                                                                </a>
                                                            </li>


                                                        </ul>
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
                                                <a wire:click="add_to_wishlist({{$product->id}},{{$price}})" class="ec-btn-group wishlist" title="Wishlist"><img src="{{asset('assets/images/icons/pro_wishlist.svg')}}" class="svg_img pro_svg" alt="" /></a>
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

</div>
