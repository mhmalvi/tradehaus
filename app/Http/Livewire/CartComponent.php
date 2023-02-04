<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class CartComponent extends Component
{
    public $product_quantity;
    protected $listeners = ['count' => 'cart_count'];
    public function render()
    {
        $count = Cart::all()->count();
        return view('livewire.cart-component',['count'=>$count]);
    }

    function mount(){
        $count = Cart::all()->count();
        return view('livewire.cart-component',['count'=>$count]);
    }

    public function cart_count()
    {
        $count = Cart::all()->count();
        return view('livewire.cart-component',['count'=>$count]);
    }
}
