<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class ProductByCategory extends Component
{
    public $products;
    public $product_id;
    public $product_name;
    public $product_quantity = 1;
    public $color;
    public $size;
    public $product_price;
    public function render()
    {
        return view('livewire.product-by-category', ['products' => $this->products]);
    }

    public function add_to_cart($id,$name,$price)
    {
        dd("hello");
        $cart_item = Cart::where('product_id', $id)->exists();
        dd($cart_item);
        if ($cart_item) {
            $this->dispatchBrowserEvent('item_exists');
        } else {
            $cart = new Cart();
            $cart->product_id = $id;
            $cart->product_name = $name;
            // $cart->product_quantity = $this->product_quantity;
            // $cart->product_color = $color;
            // $cart->product_size = $size;
            $cart->product_price = $price;
            $save = $cart->save();
            if ($save) {
                $this->dispatchBrowserEvent('add_to_cart');
                $this->emit('cart_items');
                $this->emit('count');
            }
        }
    }
}
