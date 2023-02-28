<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class MobileCartCount extends Component
{
    public $product_quantity;
    protected $listeners = ['count' => 'cart_count'];
    public function render()
    {
        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
            return view('livewire.mobile-cart-count', ['count' => $count]);
        } else {
            return view('livewire.mobile-cart-count');
        }
    }

    function mount()
    {
        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
            return view('livewire.mobile-cart-count', ['count' => $count]);
        } else {
            return view('livewire.mobile-cart-count');
        }
    }

    public function cart_count()
    {
        // dd("hello");
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return view('livewire.mobile-cart-count', ['count' => $count]);
    }
    // public function render()
    // {
    //     return view('livewire.mobile-cart-count');
    // }
}
