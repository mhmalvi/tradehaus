<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartComponent extends Component
{
    public $product_quantity;
    protected $listeners = ['cart_count' => 'cart_count'];
    public function render()
    {
        $ipAddr=\Request::ip();
        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else if(isset($ipAddr)){
            $count = Cart::where('ip', $ipAddr)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else {
            return view('livewire.cart-component');
        }
    }

    function mount()
    {
        $ipAddr=\Request::ip();
        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else if(isset($ipAddr)){
            $count = Cart::where('ip', $ipAddr)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else {
            return view('livewire.cart-component');
        }
    }

    public function cart_count()
    {
        $ipAddr=\Request::ip();
        if (Auth::check()) {
            $count = Cart::where('user_id', Auth::user()->id)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }else if(isset($ipAddr)){
            $count = Cart::where('ip', $ipAddr)->count();
            return view('livewire.cart-component', ['count' => $count]);
        }       
        
    }
}
