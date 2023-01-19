<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
class TypeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Type::all();
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
        $product = new Type();

        $product->size = $request->size;
        // $product->product_price = $request->product_price;
        // $product->product_size = $request->product_size;
        // $product->product_discount = $request->product_discount;
        // $product->product_weight = $request->product_weight;
        $product->price = $request->price;
        $product->weight = $request->weight;
        // $product->product_dimension = $request->product_dimension;
        $product->dimension = $request->dimension;
        $product->discount = $request->discount;
        $product->product_id = $request->product_id;
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
        $product = Type::find($id);
        $product->size = $request->size;
        // $product->product_price = $request->product_price;
        // $product->product_size = $request->product_size;
        // $product->product_discount = $request->product_discount;
        // $product->product_weight = $request->product_weight;
        $product->price = $request->price;
        $product->weight = $request->weight;
        // $product->product_dimension = $request->product_dimension;
        $product->dimension = $request->dimension;
        $product->discount = $request->discount;
        $product->product_id = $request->product_id;
        if ($request->product_image) {

            $fileName = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        $save = $product->save();
        if ($save) {
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
    public function destroy($id)
    {
        $type=Type::find($id);
        $type->delete();
    }
}
