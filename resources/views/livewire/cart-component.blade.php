<div>
    
<div class="align-self-center ec-header-bottons">
    <div class="ec-header-bottons">

        <!-- Header wishlist End -->
        <!-- Header Cart Start -->
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="{{ asset('assets/images/icons/cart_5.svg') }}" class="svg_img header_svg" alt="" /></div>

            <span class="ec-btn-title"><span class="ec-cart-count">{{ $count }}
                    @if($count=1)
                </span> item</span>
            @else
            </span> item(s)</span>

            @endif


        </a>
        <!-- Header Cart End -->
    </div>
</div>
</div>
