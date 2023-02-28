<div>
<?php
                                    if(auth()->check()){
                                    $count = App\Models\Cart::where('user_id',Auth::user()->id)->count();
                                    ?>

    <span class="ec-cart-noti ec-header-count cart-count-lable">{{ $count }}</span>
<?php
                                    }
                                    ?>
</div>
