<div>
@php
if(auth()->check()){
$count = App\Models\Wishlist::where('user_id',Auth::user()->id)->count();
}
@endphp

@if(auth()->check())

    <span class="ec-cart-noti">{{ $count }}</span>
    @endif

</div>
