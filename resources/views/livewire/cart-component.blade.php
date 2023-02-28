<div>

    <?php
                                    if(auth()->check()){
                                    $count = App\Models\Cart::where('user_id',Auth::user()->id)->count();
                                    ?>
    <span class="ec-header-count ec-cart-count">{{ $count }}</span>


    <?php
                                    }
                                    ?>


</div>


<style>
    @media(min-width:992px) {
        .ec-cart-count {
            margin-left: 57%;
            margin-top: -12px;
            background: #6e6e6e;
            color: white;
            border-radius: 43%;
            font-weight: 800;
            width: 78%;
            display: block;
            text-align: center;

        }


    }

</style>
