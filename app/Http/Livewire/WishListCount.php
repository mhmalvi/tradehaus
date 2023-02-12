<?php

namespace App\Http\Livewire;

use App\Models\Wishlist;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class WishListCount extends Component
{
    protected $listeners = ['count' => 'count'];
    public function render()
    {
        return view('livewire.wish-list-count');
    }

    public function mount()
    {
        return view('livewire.wish-list-count');
    }

    public function count()
    {
        $count = Wishlist::where('user_id', Auth::user()->id)->count();
        return view('livewire.wish-list-count', ['count' => $count]);
    }
}
