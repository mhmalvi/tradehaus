<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class MobileWishlistCount extends Component
{
    protected $listeners = ['count' => 'count'];
    public function render()
    {
        return view('livewire.mobile-wishlist-count');
    }

    public function mount()
    {
        return view('livewire.mobile-wishlist-count');
    }

    public function count()
    {
        $count = Wishlist::where('user_id', Auth::user()->id)->count();
        return view('livewire.mobile-wishlist-count', ['count' => $count]);
    }
    // public function render()
    // {
    //     return view('livewire.mobile-wishlist-count');
    // }
}
