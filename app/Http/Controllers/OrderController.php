<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderedProducts;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request->items);
        // $item = array();

        // dd($request->items);
        $items = $request->items;
        $items = json_decode($items);
        // dd($items);
        $order = new Order();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->post_code = $request->post_code;
        $order->country = $request->country;
        $order->region = $request->region;
        $order->sub_total = $request->sub_total;
        $order->delivery_charge = $request->delivery_charge;
        $order->total_amount = $request->total_amount;

        $order_id = $order->save();
        // dd($order_id);
        $order_id = $order->id;

        // $ordered_products = new OrderedProducts();
        foreach ($items as $item) {
            OrderedProducts::create([
                'product_name' => $item->product_name,
                'product_price' => $item->product_price,
                'product_image' => $item->product_image,
                'product_quantity' => $item->product_quantity,
                'order_id' => $order_id,
            ]);
            $product = Product::where('product_name', $item->product_name)->first();
            $remaining_quantity = $product->product_quantity - $item->product_quantity;
            $product->product_quantity = $remaining_quantity;
            $product->save();
        }

        $cart_items = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($cart_items as $item) {
            $item->delete();
        }
        return response()->json([
            'status' => 'created'
        ]);
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
