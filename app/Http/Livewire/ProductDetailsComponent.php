<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class ProductDetailsComponent extends Component
{
    public $products;
    public $product_id;
    public $product_name;
    public $product_quantity;
    public $color;
    public $size;
    public $product_price;
    public $product_image;
    public function render()
    {
        // $products = Product::find($id);
        return view('livewire.product-details-component', ['products' => $this->products]);
    }
    public function mount()
    {
        // $product_quantity = 1;
        if ($this->products->product_discount) {
            $price = $this->products->product_price * ($this->products->product_discount / 100);
        } else {
            $price = $this->products->product_price;
        }
        $this->product_quantity = 1;
        $this->product_id = $this->products->id;
        $this->product_name = $this->products->product_name;
        $this->product_price = $price;
        $this->product_image = $this->products->product_image;
    }
    public function add_to_cart()
    {
        dd($this->color !== " ");
        // dd($this->product_quantity);
        if ($this->color !== " " || $this->size !== "") {
            if (Auth::check()) {
                $cart_item = Cart::where('product_id', $this->product_id)->where('user_id', Auth::user()->id)->exists();
                if ($cart_item) {
                    $this->dispatchBrowserEvent('item_exists');
                } else {
                    $cart = new Cart();
                    $cart->product_id = $this->product_id;
                    $cart->product_name = $this->product_name;
                    $cart->product_quantity = $this->product_quantity;
                    $cart->product_color = $this->color;
                    $cart->product_size = $this->size;
                    $cart->product_price = $this->product_price;
                    $cart->product_image = $this->product_image;
                    $cart->user_id = Auth::user()->id;
                    $save = $cart->save();
                    $this->dispatchBrowserEvent('add_to_cart');
                    $this->emit('cart_items');
                    $this->emit('count');
                }
            } else {
                $this->dispatchBrowserEvent('login');
            }
        } else {
            $this->dispatchBrowserEvent('fields');
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
