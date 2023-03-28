<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($total)
    {

        $ipAddr = \Request::ip();
        $prev_items = Cart::where('user_id', Auth::user()->id)->get();
        $exitems = Cart::where('ip', $ipAddr)->get();
        foreach ($exitems as $items) {
            $items->user_id = Auth::user()->id;
            $items->save();
        }
        // if($prev_items->isEmpty()){
        if ($prev_items->isEmpty() && $prev_items[0]->user_id == "") {
            if (!$exitems->isEmpty()) {

                $total_price = 0;
                for ($i = 0; $i < count($exitems); $i++) {
                    $price = ($exitems[$i]->product_price) * ($exitems[$i]->product_quantity);
                    $total_price = $price + $total_price;
                }
                // dd($total_price);
                $prev_items_total = 0;
                // $prev_items = Cart::where('user_id', Auth::user()->id)->get();
                for ($j = 0; $j < count($prev_items); $j++) {
                    $prev_price = $prev_items[$j]->product_price * $prev_items[$j]->product_quantity;
                    $prev_items_total = $prev_price + $prev_items_total;
                }
                $sub_total = $prev_items_total + $total_price;
                // dd($sub_total);
                return view('checkout', compact('sub_total', 'exitems'));
            } else {
                $sub_total = $total;
                return view('checkout', compact('sub_total'));
            }
        } else {
            // dd($total);
            $sub_total = $total;
            return view('checkout', compact('sub_total'));
        }
    // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
