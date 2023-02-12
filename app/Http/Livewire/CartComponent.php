<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $product_quantity;
    protected $listeners = ['count' => 'cart_count'];
    public function render()
    {
        if (Auth::check()) {
            $count = Cart::where('user_id',Auth::user()->id)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else{
            return view('livewire.cart-component');
        }
    }

    function mount()
    {
        if(Auth::check()){
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('livewire.cart-component', ['count' => $count]);
        }else{
            return view('livewire.cart-component');
        }
    }

    public function cart_count()
    {
        // dd("hello");
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('livewire.cart-component', ['count' => $count]);
    }
}
