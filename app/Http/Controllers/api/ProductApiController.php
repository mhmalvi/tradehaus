<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $product = Product::orderBy('id', 'DESC')->get();
        $product = Product::orderBy('id', 'DESC')->with('types')->get();
        return $product;
        // for ($i = 0; $i < count($product); $i++) {
        //     // $type[] = $product[$i]['id'];
        //     if()
        // }
        // dd($type);
        if (!$product->isEmpty()) {
            return response()->json([
                'data' => $product
            ], 200);
        } else {
            return response()->json([
                'message' => 'failed'
            ], 424);
        }
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
        dd($request->all());
        $product = new Product();

        $product->product_name = $request->product_name;
        // $product->product_price = $request->product_price;
        $product->size1 = $request->size1;
        $product->size2 = $request->size2;
        $product->size3 = $request->size3;
        $product->size4 = $request->size4;
        $product->size5 = $request->size5;
        // $product->product_discount = $request->product_discount;
        // $product->product_weight = $request->product_weight;
        $product->color_1 = $request->color_1;
        $product->color_2 = $request->color_2;
        $product->color_3 = $request->color_3;
        $product->color_4 = $request->color_4;
        $product->product_code_name = $request->product_code_name;
        $product->product_short_description = $request->product_short_description;
        // $product->product_dimension = $request->product_dimension;
        $product->product_details = $request->product_details;
        $product->category_id = $request->category_id;
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
        return $products = Product::find($id);
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
        $product = Product::find($request->id);
        $product->product_name = $request->product_name;
        // $product->product_price = $request->product_price;
        // $product->product_size = $request->product_size;
        // $product->product_discount = $request->product_discount;
        // $product->product_weight = $request->product_weight;
        $product->product_color = $request->product_color;
        $product->product_code_name = $request->product_code_name;
        $product->product_short_description = $request->product_short_description;
        // $product->product_dimension = $request->product_dimension;
        $product->product_details = $request->product_details;
        $product->category_id = $request->category_id;
        if ($request->product_image) {

            $fileName = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        $update = $product->save();
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
