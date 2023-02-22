<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartPage extends Component
{
    public $items;
    public $product_quantity;
    protected $listeners = ['cart_items' => 'mount'];
    protected $rules = [
        'items.*.product_quantity' => 'required',
        // 'items.*.content' => 'required',
    ];

    
    public function render()
    {
        // $cart_items = Cart::where('user_id', auth()->user()->id)->get();
        // dd(Auth::id());
        if (Auth::check()) {
            $this->items = Cart::where('user_id', Auth::user()->id)->get();
            // dd($this->items);
            return view('livewire.cart-page', ['cart_items' => $this->items]);
        } else {
            return view('livewire.cart-page');
        }
        // return view('livewire.cart-page', ['cart_items' => $cart_items]);
        // }
    }

    public function increment($id){
        $quantity = Cart::where('id',$id)->where('user_id',Auth::user()->id)->first();
        if($quantity){
            $quantity->increment('product_quantity');
            // $this->dispatchBrowserEvent('quantity_updated');
        }
    }

    public function decrement($id){
        $quantity = Cart::where('id',$id)->where('user_id',Auth::user()->id)->first();
        if($quantity){
            $quantity->decrement('product_quantity');
            // $this->dispatchBrowserEvent('quantity_updated');
        }
    }

    function mount()
    {
        if (Auth::check()) {
            $this->items = Cart::where('user_id', Auth::user()->id)->get();
        }
    }

    public function checkout($sub_total, $cart_items)
    {
        // dd($sub_total);
        return view('checkout', compact('sub_total', 'cart_items'));
    }

    public function changePrice()
    {
        dd("hello");
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
}
