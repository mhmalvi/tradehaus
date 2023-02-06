<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
// use RealRashid\SweetAlert\Facades\Alert;
use Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart_items = Cart::all();
        return view('product_details', compact('cart_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'product_name' => 'required',
        //     'product_size' => 'required',
        //     'product_color' => 'required',
        //     'product_quantity' => 'required'
        // ]);
        if (Auth::check()) {
            // $product = Product::find($request->id);
            $cart_item = Cart::where('product_id', $request->product_id)->exists();
            if ($cart_item) {
                return redirect()->back()->with('error', 'Item already exist');
            } else {
                $cart = new Cart();
                // dd($request->all());
                $cart->product_name = $request->product_name;
                echo "hr";
                $cart->product_price = $request->product_price;
                $cart->product_size = $request->size;
                $cart->product_color = $request->color;
                $cart->product_quantity = $request->product_quantity;
                $cart->product_id = $request->product_id;
                $cart->user_id = Auth::user()->id;
                // dd("after_id");

                $save = $cart->save();
                if ($save) {
                    echo "after_save";
                    // Alert::success('Congrats', 'You\'ve Successfully added to cart');
                    return redirect()->back()->with('message', 'Added successfully');
                }
            }
        } else {
            return redirect()->back()->with('error', 'Please login first');
        }
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
