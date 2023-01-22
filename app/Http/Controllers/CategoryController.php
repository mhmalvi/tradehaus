<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
        $category = Category::all();
        return view('home', compact('category'));
        // $product_discount = $category->product->product_discount;
        // // dd($product_discount);
        // if (!$category->isEmpty()) {
        //     return response()->json([
        //         'data' => $category,
        //         'product_discount'=>$product_discount
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
        $category = new Category();

        $category->category_name = $request->category_name;
        $save = $category->save();
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
        // $category = Category::find($id)->first();
        // $products = Product::orderBy('id','DESC')->where('category_id',$id)->get();
        // dd($products);
        // foreach ($products as $product) {
        //     echo $product->id;
        // }
        // die;

        // return view('layout.home',compact('category'));
        // dd($products);
        // if ($category) {
        //     return response()->json([
        //         'data' => $category,
        //         'products'=>$products
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'message' => 'failed'
        //     ], 424);
        // }
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
        $category = Category::find($request->id);
        if ($category) {
            $category->category_name = $request->category_name;
            $update = $category->save();
            if ($update) {
                return response()->json([
                    'message' => 'updated'
                ], 200);
            } else {
                return response()->json([
                    'message' => 'failed'
                ], 424);
            }
        } else {
            return response()->json([
                'message' => 'Category not found'
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
        $category = Category::find($request->id);
        $category = $category->delete();
        if ($category) {
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
