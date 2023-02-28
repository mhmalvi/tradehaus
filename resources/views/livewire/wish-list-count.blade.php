<div>
    @php
    if(auth()->check()){
    $count = App\Models\Wishlist::where('user_id',Auth::user()->id)->count();
    }
    @endphp

    @if(auth()->check())

    <span class="ec-header-count ec-wishlist-count">



        {{ $count }}

    </span>
    @endif

</div>

<style>
    @media(min-width:992px) {
        .ec-wishlist-count {
            position: absolute;
            margin-top: -12px;            
            margin-left: 1%;
            background: #6e6e6e;
            border-radius: 61%;
            width: 2%;
            height: 23px;
            text-align: center;
            color: white;
            font-weight: 800;

        }
    }

</style>


{{-- style="position: absolute;
margin-top: -12px;

margin-left: 1%;
background: #6e6e6e;
border-radius: 61%;
width: 2%;
height: 23px;
text-align: center;
color: white;
font-weight: 800;" class="ec-header-count" --}}
