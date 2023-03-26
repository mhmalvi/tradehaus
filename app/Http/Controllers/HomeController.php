<?php

namespace App\Http\Controllers;

use App\Models\VisitorCount;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count =  VisitorCount::latest()->first();
        $count->count = $count->count + 1;
        $count->created_at = Carbon::now();
        $count->updated_at = Carbon::now();
        $count->save();
        // return view('home');
    }
}
