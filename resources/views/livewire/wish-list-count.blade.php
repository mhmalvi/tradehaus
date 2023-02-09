<div>
    @php
    if(auth()->check()){
    $count = App\Models\Wishlist::where('user_id',Auth::user()->id)->count();
    }
    @endphp


    <span style="position: absolute;
    margin-top: -12px;

    margin-left: 1%;
    background: #6e6e6e;
    border-radius: 61%;
    width: 2%;
    height: 23px;
    text-align: center;
    color: white;
    font-weight: 800;" class="ec-header-count">{{ $count }}</span>

</div>
