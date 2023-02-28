<div>
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">

            {{-- @if( auth()->check())
            @php


            $total=0;
            $cart_items=App\Models\Cart::where('user_id',auth()->user()->id)->get();
            @endphp

            @endif --}}

            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    @php
                    $total =0;

                    @endphp
                    @if(isset($cart_items))
<!-- @dump($cart_items) -->
                    @foreach($cart_items as $cart_item)

                    <li>


                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img src="{{ asset(env('APP_URL').'/'.$cart_item->product->product_image) }}" alt="{{ $cart_item->product_name }}"></a>
                        {{-- {{ $cart_item->user_id }} --}}
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">{{ $cart_item->product_name }}</a>

                            <span class="cart-price"><span>${{ $cart_item->product_price}}</span> x {{ $cart_item->product_quantity }}</span>


                            @php
                            $price = $cart_item->product_price * $cart_item->product_quantity;

                            $total=$price+$total
                            @endphp
                            <!-- {{$price}}
                        {{ $total }} -->
                            <div class="form-group d-flex" style="width:36%;">


                                <!-- <input class="qty-input" wire:change="updateCart" type="number" wire:model="product_quantity" value="{{ $cart_item->product_quantity }}" /> -->
                                <button type="button" wire:click="decrement({{$cart_item->id}})" class="btn"><span >-</span></button>



                                <input class="qty-input" style="border: 1px solid #d3d3d3;height: 22px;    margin-top: 12px;width:3rem;" type="text" value="{{$cart_item->product_quantity}}"  /> 
                                <button type="button" wire:click="increment({{$cart_item->id}})" class="btn">+</button>
                            </div>
                            <button wire:click="delete_cart_item({{$cart_item->id}})" class="remove">×</button>
                        </div>


                    </li>


                    @endforeach
                    @php



                    @endphp

                    @endif




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
                                @if($total!=0)


                                <td class="text-right primary-color">${{ $total + 60 }}</td>
                                @else
                                <td class="text-right primary-color">$0</td>

                                @endif

                            </tr>
                        </tbody>
                    </table>
                </div>
                @if(auth()->check())
                <div class="cart_btn">
                    {{-- <a href="cart.html" class="btn btn-primary">View Cart</a> --}}
                    {{-- @php
                    $items = serialize($cart_items)
                    @endphp --}}
                    @if(!$cart_items->isEmpty())
                    <a href="{{ route('checkout.view',$total) }}" class="btn btn-secondary">Checkout</a>

                    {{-- wire:click="checkout({{ $total }},{{ $total +60 }},{{ $cart_items }})" --}}
                    @endif
                </div>
                @endif
            </div>
            {{-- @endif --}}
        </div>
    </div>
</div>
