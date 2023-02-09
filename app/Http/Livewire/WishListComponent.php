<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishListComponent extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $items = Wishlist::where('user_id', Auth::user()->id)->get();
            return view('livewire.wish-list-component', ['products' => $items]);
        } else {
            $this->dispatchBrowserEvent('login');
        }
    }

    public function mount(){
        if (Auth::check()) {
            $items = Wishlist::where('user_id', Auth::user()->id)->get();
            return view('livewire.wish-list-component', ['products' => $items]);
        } else {
            $this->dispatchBrowserEvent('login');
        }
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
