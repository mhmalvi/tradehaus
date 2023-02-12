<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class ProductByCategory extends Component
{
    public $products;
    public $product_id;
    // public $product_name;
    public $product_quantity = 1;
    public $color;
    public $size;
    public $product_price;
    public function render()
    {
        return view('livewire.product-by-category', ['products' => $this->products]);
    }

    public function add_to_cart($id, $price)
    {
        // dd("hello");
        if (Auth::check()) {
            $product = Product::find($id);
            $cart_item = Cart::where('product_id', $id)->where('user_id', Auth::user()->id)->exists();
            if ($cart_item) {
                $this->dispatchBrowserEvent('item_exists');
            } else {
                $cart = new Cart();
                $cart->product_name = $product->product_name;
                $cart->product_price = $price;
                // $cart->product_size = $request->size;
                // $cart->product_color = $request->color;
                $cart->product_image = $product->product_image;
                // $cart->product_quantity = $quantity;
                $cart->product_id = $id;
                $cart->user_id = Auth::user()->id;
                $cart->save();
                // Alert::success('Congrats', 'Added to cart');
                $this->dispatchBrowserEvent('add_to_cart');
                $this->emit('cart_items');
                $this->emit('count');
                // $cart_item = "";
            }
        } else {
            $this->dispatchBrowserEvent('login');
        }
    }

    public function add_to_wishlist($product_id, $price)
    {
        $product = Product::find($product_id)->first();
        if (Auth::check()) {
            $wish_exist = Wishlist::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
            if ($wish_exist) {
                $this->dispatchBrowserEvent('item_exists');
            } else {
                $wishlist = new WishList();
                $wishlist->product_name = $product->product_name;
                $wishlist->product_price = $price;
                $wishlist->product_id = $product_id;
                $wishlist->user_id = Auth::user()->id;
                $wishlist->save();
                $this->dispatchBrowserEvent('add_to_wishlist');
                // $this->emit('wishlist_item');
                $this->emit('count');
            }
        } else {
            $this->dispatchBrowserEvent('login');
        }
    }
}
