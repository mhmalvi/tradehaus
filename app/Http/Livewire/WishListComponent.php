<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishListComponent extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $items = Wishlist::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
            return view('livewire.wish-list-component', ['products' => $items]);
        } else {
            $this->dispatchBrowserEvent('login');
        }
    }

    public function mount()
    {
        if (Auth::check()) {
            $items = Wishlist::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
            return view('livewire.wish-list-component', ['products' => $items]);
        } else {
            $this->dispatchBrowserEvent('login');
        }
    }

    public function add_to_cart($id, $price, $quantity)
    {
        // dd($id);
        if (Auth::check()) {
            $product = Product::find($id);
            // dd($product->id);
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


        // return view('livewire.cart-component',['items'=>$cart_item]);
    }

    public function remove($wishlist_item_id)
    {
        if (Auth::check()) {
            $item = Wishlist::find($wishlist_item_id);
            $item->delete();
            $this->emit('count');
        } else {
            $this->dispatchBrowserEvent('login');
        }
    }
}
