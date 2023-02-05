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
            $count = Cart::all()->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else{
            return view('livewire.cart-component');
        }
    }

    function mount()
    {
        $count = Cart::all()->count();
        return view('livewire.cart-component', ['count' => $count]);
    }

    public function cart_count()
    {
        $count = Cart::all()->count();
        return view('livewire.cart-component', ['count' => $count]);
    }
}
