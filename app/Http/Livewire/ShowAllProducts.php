<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;

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

    public function add_to_cart($product_id, $product_price, $quantity)
    {
        // dd($quantity);
        $ipAddr = \Request::ip();
        // dd($macAddr);
        if (Auth::check()) {
            $product = Product::find($product_id);
            if ($product->product_quantity > 0) {
                $cart_item = Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists();
                if ($cart_item) {
                    $this->dispatchBrowserEvent('item_exists');
                } else {
                    $cart = new Cart();
                    $cart->product_name = $product->product_name;
                    $cart->product_price = $product_price;
                    // $cart->product_size = $request->size;
                    // $cart->product_color = $request->color;
                    $cart->product_image = $product->product_image;
                    $cart->product_quantity = $quantity;
                    $cart->product_id = $product_id;
                    $cart->user_id = Auth::user()->id;
                    // $cart->ip = $ipAddr;
                    $cart->save();
                    // Alert::success('Congrats', 'Added to cart');
                    $this->dispatchBrowserEvent('add_to_cart');
                    $this->emit('cart_items');
                    $this->emit('count');
                    // $cart_item = "";
                }
            } else {
                $this->dispatchBrowserEvent('not_available');
            }
        } else {
            // $this->dispatchBrowserEvent('login');
            $product = Product::find($product_id);
            if ($product->product_quantity > 0) {
                $cart_item = Cart::where('product_id', $product_id)->where('ip', $ipAddr)->exists();
                if ($cart_item) {
                    $this->dispatchBrowserEvent('item_exists');
                } else {
                    $cart = new Cart();
                    $cart->product_name = $product->product_name;
                    $cart->product_price = $product_price;
                    // $cart->product_size = $request->size;
                    // $cart->product_color = $request->color;
                    $cart->product_image = $product->product_image;
                    $cart->product_quantity = $quantity;
                    $cart->product_id = $product_id;
                    $cart->ip = $ipAddr;
                    // $cart->user_id = Auth::user()->id;
                    $cart->save();
                    // Alert::success('Congrats', 'Added to cart');
                    $this->dispatchBrowserEvent('add_to_cart');
                    $this->emit('cart_items');
                    $this->emit('cart_count');
                    // $cart_item = "";
                }
            } else {
                $this->dispatchBrowserEvent('not_available');
            }
        }


        // return view('livewire.cart-component',['items'=>$cart_item]);
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
