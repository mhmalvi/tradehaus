<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
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

    public function show_all()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('home',compact('products'));
        // if (!$product->isEmpty()) {
        //     return response()->json([
        //         'data' => $product
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'message' => 'failed'
        //     ], 424);
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
        $product = new Product();

        $product->product_name = $request->product_name;
        $product->product_size = $request->product_size;
        $product->product_price = $request->product_price;
        $product->product_color = $request->product_color;
        $product->product_short_description = $request->product_short_description;
        $product->product_dimension = $request->product_dimension;
        $product->product_details = $request->product_details;
        $product->product_discount = $request->product_discount;
        $product->category_id = $request->category_id;
        $product->product_quantity = $request->product_quantity;
        $product->product_weight = $request->product_weight;
        if ($request->product_image) {

            $fileName = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        $save = $product->save();
        if ($save) {
            return response()->json([
                'message' => 'created'
            ], 200);
        } else {
            return response()->json([
                'message' => 'failed'
            ], 424);
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
        // dd($id);
        $products = Product::find($id);
        return view('product_details', compact('products'));
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
    public function update(Request $request)
    {
        // dd($request->all());
        $products = Product::find($request->id);
        $products->product_name = $request->product_name;
        $products->product_size = $request->product_size;
        $products->product_price = $request->product_price;
        $products->product_color = $request->product_color;
        $products->product_short_description = $request->product_short_description;
        $products->product_dimension = $request->product_dimension;
        $products->product_details = $request->product_details;
        $products->product_discount = $request->product_discount;
        $products->category_id = $request->category_id;
        $products->product_quantity = $request->product_quantity;
        $products->product_weight = $request->product_weight;
        if ($request->product_image) {

            $fileName = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $products->product_image = $file_path;
        }
        $update = $products->save();
        if ($update) {
            return response()->json([
                'message' => 'updated'
            ], 200);
        } else {
            return response()->json([
                'message' => 'failed'
            ], 424);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::find($request->id);
        $data = $product->delete();
        if ($data) {
            return response()->json([
                'message' => 'deleted'
            ], 200);
        } else {
            return response()->json([
                'message' => 'failed'
            ], 424);
        }
    }
}
