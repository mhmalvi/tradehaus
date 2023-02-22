{{-- <livewire:cart-page/> --}}

<div>
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div id="cart">
<div id="hello"></div>
                @if( auth()->check())
                @php
                $total=0;
                $cart_items=App\Models\Cart::where('user_id',auth()->user()->id)->get();
                @endphp

                @endif


                <div class="ec-cart-top">
                    <div class="ec-cart-title">
                        <span class="cart_title">My Cart</span>
                        <button class="ec-close">×</button>
                    </div>
                    <div id="inner_cart">
                        <ul class="eccart-pro-items">
                            @php
                            $total =0;

                            @endphp
                            @if(isset($cart_items))
                            @php
                            $i=1;
                            @endphp
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
                                    <div class="" style="width:36%;">

                                        {{-- {{ $cart_item->id }} --}}


                                        {{-- {{ $i }} --}}
                                        {{-- <input class="qty-input" type="number" id="quantity_<?=$i;?>" name="product_quantity" value="{{ $cart_item->product_quantity }}" /> --}}
                                        <input type="hidden" id="pro_id_<?=$i;?>" value="{{ $cart_item->id }}" />


                                        <input class="qty-input" id="quantity_<?=$i;?>" style="border: 1px solid #d3d3d3;height: 40px;" type="number" value="{{ $cart_item->product_quantity }}" />


                                    </div>
                                    <button href="javascript:void(0)" class="remove">×</button>
                                </div>
                            </li>

                            @php
                            $i++;
                            @endphp
                            @endforeach
                            @php



                            @endphp

                            @endif



                        </ul>
                    </div>
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
                    @if(auth()->check())
                    <div class="cart_btn">
                        {{-- <a href="cart.html" class="btn btn-primary">View Cart</a> --}}
                        {{-- @php
                    $items = serialize($cart_items)
                    @endphp --}}
                        <a href="{{ route('checkout.view',$total) }}" class="btn btn-secondary">Checkout</a>

                        {{-- wire:click="checkout({{ $total }},{{ $total +60 }},{{ $cart_items }})" --}}
                    </div>
                    @endif
                </div>
                {{-- @endif --}}
            </div>

        </div>
    </div>

</div>


<script>
    $(document).ready(function() {

        $.ajax({
            method: 'GET'
            , url: "/get-cart",
            dataType:"json"
            , success:function(data){
            }
        }).then((res)=>{
            
            console.log(res)
        })

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            , }
        , });

        <?php
        for ($index = 1; $index < 20; $index++) {
            ?>
            $('#quantity_<?=$index;?>').change(function() {
                var id = $('#pro_id_<?=$index;?>').val()
                var quantity = $('#quantity_<?=$index;?>').val();
                var datastr = 'id=' + id + '&quantity=' + quantity

                $.ajax({
                    method: "POST"
                    , url: "/cart-quantity"
                    , data: datastr
                    , success: function(data) {
                        $('#inner_cart').load("#inner_cart")

                    }
                })
            }); <?php
        } ?>

        

    })

</script>
