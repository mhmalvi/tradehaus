<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\VisitorCount;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class HomeComponent extends Component
{
    public function render()
    {
        $count = VisitorCount::latest()->first();
        $count->counter = $count->counter + 1;
        $count->created_at = Carbon::now();
        $count->updated_at = Carbon::now();
        $count->save();
        $products = Product::orderBy('id', 'DESC')->get();
        return view('livewire.home-component', ['products' => $products]);
    }

    public function add_to_cart($id, $price, $quantity)
    {
        // dd($id);
        // $macAddr = exec('getmac');
        $ipAddr = \Request::ip();
        // dd($macAddr);
        if (Auth::check()) {
            $product = Product::find($id);
            if ($product->product_quantity > 0) {
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
                    $cart->product_quantity = $quantity;
                    $cart->product_id = $id;
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
            $product = Product::find($id);
            if ($product->product_quantity > 0) {
                $cart_item = Cart::where('product_id', $id)->where('ip', $ipAddr)->exists();
                if ($cart_item) {
                    $this->dispatchBrowserEvent('item_exists');
                } else {
                    $cart = new Cart();
                    $cart->product_name = $product->product_name;
                    $cart->product_price = $price;
                    // $cart->product_size = $request->size;
                    // $cart->product_color = $request->color;
                    $cart->product_image = $product->product_image;
                    $cart->product_quantity = $quantity;
                    $cart->product_id = $id;
                    $cart->ip = $ipAddr;
                    // $cart->user_id = Auth::user()->id;
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
