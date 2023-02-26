<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
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

    public function increment($id)
    {
        $cart = Cart::find($id);
        $product = Product::find($cart->product_id);
        // dd($product);
        $quantity = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($quantity) {
            $product_quantity = $quantity->product_quantity;
            $updated_quantity = $product_quantity + 1;
            if ($updated_quantity <= $product->product_quantity) {                
                $quantity->product_quantity = $updated_quantity;
                $quantity->save();
                $this->emit('cart_items');
            } else {
                $this->dispatchBrowserEvent('over_quantity');
            }
            // $this->dispatchBrowserEvent('quantity_updated');
        }
    }

    public function decrement($id)
    {
        $cart = Cart::find($id);
        // $product = Product::find($cart->product_id);
        $quantity = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        if ($quantity) {
            $product_quantity = $quantity->product_quantity;
            $updated_quantity = $product_quantity - 1;
            if ($updated_quantity > 0) {
                $quantity->product_quantity = $updated_quantity;
                $quantity->save();
                $this->emit('cart_items');
            } else {
                $this->dispatchBrowserEvent('over_quantity');
            }
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
