<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class ShowAllProducts extends Component
{
    public $products;
    public function render()
    {
        return view('livewire.show-all-products',['products'=>$this->products]);
    }

    public function add_to_cart($id, $price, $quantity)
    {
        // dd($price);
        if (Auth::check()) {
            $product = Product::find($id);
            $cart_item = Cart::where('product_id', $id)->exists();
            if ($cart_item) {
                $this->dispatchBrowserEvent('item_exists');
            } else {
                $cart = new Cart();
                $cart->product_name = $product->product_name;
                $cart->product_price = $price;
                $cart->product_quantity = $quantity;
                $cart->product_id = $id;
                $cart->save();
                // Alert::success('Congrats', 'Added to cart');
                $this->dispatchBrowserEvent('add_to_cart');
                $this->emit('cart_items');
                $this->emit('count');
            }
        } else {
            $this->dispatchBrowserEvent('login');
        }


        // return view('livewire.cart-component',['items'=>$cart_item]);
    }
}
