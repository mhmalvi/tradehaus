<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class CartPage extends Component
{
    protected $listeners = ['cart_items'=>'get_cart_items'];
    public function render()
    {
        $items = Cart::all();
        return view('livewire.cart-page',['cart_items'=>$items]);
    }

    public function checkout($sub_total,$cart_items){
        dd($sub_total);
        return view('checkout',compact('sub_total','cart_items'));
    }

    public function get_cart_items(){
        $items = Cart::all();
        return view('livewire.cart-page',['cart_items'=>$items]);

    }

    public function delete_cart_item($id){
        $cart = cart::find($id);
        $cart->delete();
        // $this->emit('cart_items');
        $this->emit('count');
    }

    function mount(){

    }
}
