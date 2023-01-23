<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Type;
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
        
    }

    public function show_all()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('home', compact('products'));
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
        $product->product_price = $request->product_price;
        $product->product_size = $request->product_size;
        $product->product_discount = $request->product_discount;
        $product->slug = $request->slug;
        $product->product_quantity = $request->product_quantity;
        $product->tags = $request->tags;
        $product->product_color = $request->product_color;
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
        if ($request->product_image_1) {

            $fileName = time() . '.' . $request->product_image_1->getClientOriginalExtension();
            $request->product_image_1->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_1 = $file_path;
        }
        if ($request->product_image_2) {

            $fileName = time() . '.' . $request->product_image_2->getClientOriginalExtension();
            $request->product_image_2->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_2 = $file_path;
        }
        if ($request->product_image_3) {

            $fileName = time() . '.' . $request->product_image_3->getClientOriginalExtension();
            $request->product_image_3->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        if ($request->product_image_4) {

            $fileName = time() . '.' . $request->product_image_4->getClientOriginalExtension();
            $request->product_image_4->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_4 = $file_path;
        }
        if ($request->product_image_5) {

            $fileName = time() . '.' . $request->product_image_5->getClientOriginalExtension();
            $request->product_image_5->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_5 = $file_path;
        }
        if ($request->product_image_6) {

            $fileName = time() . '.' . $request->product_image_6->getClientOriginalExtension();
            $request->product_image_6->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_6 = $file_path;
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
        $product = Product::find($request->id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_size = $request->product_size;
        $product->product_discount = $request->product_discount;
        $product->slug = $request->slug;
        $product->tags = $request->tags;
        $product->product_quantity = $request->product_quantity;
        $product->product_color = $request->product_color;
        $product->product_short_description = $request->product_short_description;
        // $product->product_dimension = $request->product_dimension;
        $product->product_details = $request->product_details;
        $product->category_id = $request->category_id;
        if ($request->product_image) {
            unlink($product->product_image);
            $fileName = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        if ($request->product_image_1) {
            unlink($product->product_image_1);
            $fileName = time() . '.' . $request->product_image_1->getClientOriginalExtension();
            $request->product_image_1->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_1 = $file_path;
        }
        if ($request->product_image_2) {
            unlink($product->product_image_2);
            $fileName = time() . '.' . $request->product_image_2->getClientOriginalExtension();
            $request->product_image_2->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_2 = $file_path;
        }
        if ($request->product_image_3) {
            unlink($product->product_image_3);
            $fileName = time() . '.' . $request->product_image_3->getClientOriginalExtension();
            $request->product_image_3->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        if ($request->product_image_4) {
            unlink($product->product_image_4);
            $fileName = time() . '.' . $request->product_image_4->getClientOriginalExtension();
            $request->product_image_4->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_4 = $file_path;
        }
        if ($request->product_image_5) {
            unlink($product->product_image_5);
            $fileName = time() . '.' . $request->product_image_5->getClientOriginalExtension();
            $request->product_image_5->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_5 = $file_path;
        }
        if ($request->product_image_6) {
            unlink($product->product_image_6);
            $fileName = time() . '.' . $request->product_image_6->getClientOriginalExtension();
            $request->product_image_6->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_6 = $file_path;
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
        unlink($product->product_image);
        unlink($product->product_image_1);
        unlink($product->product_image_2);
        unlink($product->product_image_3);
        unlink($product->product_image_4);
        unlink($product->product_image_5);
        unlink($product->product_image_6);
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
