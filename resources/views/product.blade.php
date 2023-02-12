@extends('layout.master')
@section('content')
<!-- <div class="ec-side-cart-overlay"></div>
<div id="ec-side-cart" class="ec-side-cart">
    <div class="ec-cart-inner">
        <div class="ec-cart-top">
            <div class="ec-cart-title">
                <span class="cart_title">My Cart</span>
                <button class="ec-close">×</button>
            </div>
            <ul class="eccart-pro-items">
                @php
                $total=0;
                $cart_items = App\Models\Cart::all();
                @endphp

                @if(isset($cart_items))


                @foreach($cart_items as $cart_item)

                <li>


                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{ asset(env('APP_URL').'/'.$cart_item->product->product_image) }}" alt="{{ $cart_item->product_name }}"></a>

                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">{{ $cart_item->product_name }}</a>

                        <span class="cart-price"><span>${{ $cart_item->product->product_price}}</span> x {{ $cart_item->product_quantity }}</span>

                        @php
                        $price = $cart_item->product->product_price * $cart_item->product_quantity;

                        $total=$price+$total
                        @endphp
                        {{-- {{ $total }} --}}
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="product_quantity" value="{{ $cart_item->product_quantity }}" />

                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>


                </li>


                @endforeach
                @php



                @endphp

                @endif


                {{-- <li>

                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/12_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                        <span class="cart-price"><span>$64.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="assets/images/product-image/3_1.jpg" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                        <span class="cart-price"><span>$59.00</span> x 1</span>
                        <div class="qty-plus-minus">
                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                        </div>
                        <a href="javascript:void(0)" class="remove">×</a>
                    </div>
                </li> --}}
            </ul>
        </div>
        <div class="ec-cart-bottom">
            <div class="cart-sub-total">
                <table class="table cart-table">
                    <tbody>
                        <tr>
                            <td class="text-left">Sub-Total :</td>
                            @if(isset($total))


                            <td class="text-right">${{ $total }}</td>

                            @endif
                        </tr>
                        <tr>
                            <td class="text-left">VAT (20%) :</td>
                            <td class="text-right">$60.00</td>
                        </tr>
                        <tr>
                            <td class="text-left">Total :</td>
                            @if(isset($total))


                            <td class="text-right primary-color">${{ $total + 60 }}</td>

                            @endif

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cart_btn">
                <a href="cart.html" class="btn btn-primary">View Cart</a>
                <a href="checkout.html" class="btn btn-secondary">Checkout</a>
            </div>
        </div>
    </div>
</div> -->


<!-- Ekka Cart End -->

<!-- Main Slider Start -->
<livewire:product-by-category :products='$products'>



@endsection