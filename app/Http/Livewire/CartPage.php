<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartPage extends Component
{
    protected $listeners = ['cart_items' => 'get_cart_items'];
    public function render()
    {
        // dd(Auth::id());
        // if (Auth::check()) {
            // $items = Cart::where('user_id', Auth::user()->id)->get();
        //     return view('livewire.cart-page', ['cart_items' => $items]);
        // } else {
            return view('livewire.cart-page');
        // }
    }

    public function checkout($sub_total, $cart_items)
    {
        // dd($sub_total);
        return view('checkout', compact('sub_total', 'cart_items'));
    }

    public function get_cart_items()
    {
        if (auth()->check()) {
            $items = Cart::where('user_id', Auth::user()->id)->get();
            return view('livewire.cart-page', ['cart_items' => $items]);
        } else {
            return view('livewire.cart-page');
        }
    }

    public function delete_cart_item($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        // $this->emit('cart_items');
        $this->emit('count');
    }

    function mount()
    {
    }
}
