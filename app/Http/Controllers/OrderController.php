<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
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
        // dd($request->all());
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
        
        $order_id=$order->save();
// dd($order->id);
        $order_id=$order->id;

        $ordered_products = new OrderedProducts();
        foreach($request->images as $image){
            $ordered_products->product_image = $image;
            $ordered_products->order_id = $order_id;
            $ordered_products->product_quantity = 2;
            $ordered_products->save();
        }
        foreach ($request->product_price as $price) {
            $ordered_products->product_price = $price;
            $ordered_products->save();
            // $ordered_products->order_id = $order_id;
        }

        foreach ($request->product_name as $name) {
            $ordered_products->product_name = $name;
            $ordered_products->save();
            // $ordered_products->order_id = $order_id;
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
