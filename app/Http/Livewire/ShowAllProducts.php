<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class ShowAllProducts extends Component
{
    public $products;
    // public $product_id;
    // public $product_name;
    public function render()
    {
        return view('livewire.show-all-products', ['products' => $this->products]);
    }

    // public function mount()
    // {
    //     // $this->product_id = $this->products->id;
    //     // $this->product_name = $this->products->product_name;
    // }

    public function add_to_cart($product_id,$product_name,$product_price,$quantity)
    {
        dd($quantity);
        if (Auth::check()) {
            $product = Product::find($product_id);
            $image = $product->product_image;
            $cart_item = Cart::where('product_id', $product_id)->exists();
            if ($cart_item) {
                $this->dispatchBrowserEvent('item_exists');
            } else {
                $cart = new Cart();
                $cart->product_name = $product_name;
                $cart->product_price = $product_price;
                $cart->product_quantity = $quantity;
                $cart->product_image = $image;
                $cart->product_id = $product_id;
                $cart->user_id = Auth::user()->id;
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
