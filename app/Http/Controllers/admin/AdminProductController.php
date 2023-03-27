<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('dfdsfdsf');
        if (Auth::user()->roles == 1) {
            return view('admin_panel.products.add-product');
        } else {
            return redirect()->back();
        }
    }

    public function product_list()
    {
        $product = Product::orderBy('id', 'DESC')->get();
        return view('admin_panel.products.product-list', compact('product'));
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
        $product = new Product();

        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        // $product->product_size = $request->product_size;
        $product->product_discount = $request->product_discount;
        $product->slug = $request->slug;
        $product->product_quantity = $request->product_quantity;
        $isSpecial = isset($request->isSpecial[0]) ? 'y' : 'n';
        $isExclusive = isset($request->isExclusive[0]) ? 'y' : 'n';
        $deals_of_the_days = isset($request->deals_of_the_days[0]) ? 'y' : 'n';
        $isBlackFriday = isset($request->isBlackFriday[0]) ? 'y' : 'n';
        $product->isSpecial = $isSpecial;
        $product->isExclusive = $isExclusive;
        $product->deals_of_the_days = $deals_of_the_days;
        $product->isBlackFriday = $isBlackFriday;
        $product->tags = $request->tags;
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
        $product->status = 'A';
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
        // if ($save) {
        //     return response()->json([
        //         'message' => 'created'
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'message' => 'failed'
        //     ], 424);
        // }
        if ($save) {
            return redirect()->back()->with('message', 'Product created successfully');
        } else {
            return redirect()->back()->with('message', 'Failed');
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
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return view('admin_panel.products.edit-product', compact('product'));
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
        // dd($request->all());
        $isSpecial = isset($request->isSpecial[0]) ? 'y' : 'n';
        $isBlackFriday = isset($request->isBlackFriday[0]) ? 'y' : 'n';
        $isExclusive = isset($request->isExclusive[0]) ? 'y' : 'n';
        $deals_of_the_days = isset($request->deals_of_the_days[0]) ? 'y' : 'n';
        $product = Product::find($request->id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_discount = $request->product_discount;
        $product->slug = $request->slug;
        $product->tags = $request->tags;
        $product->isSpecial = $isSpecial;
        $product->isExclusive = $isExclusive;
        $product->deals_of_the_days = $deals_of_the_days;
        $product->isBlackFriday = $isBlackFriday;
        $product->status = $request->status;
        // $product->category_id = $request->category_id;
        $product->product_quantity = $request->product_quantity;
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
            // unlink($product->product_image);
            $fileName = time() . '.' . $request->product_image->getClientOriginalExtension();
            $request->product_image->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        if ($request->product_image_1) {
            // unlink($product->product_image_1);
            $fileName = time() . '.' . $request->product_image_1->getClientOriginalExtension();
            $request->product_image_1->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_1 = $file_path;
        }
        if ($request->product_image_2) {
            // unlink($product->product_image_2);
            $fileName = time() . '.' . $request->product_image_2->getClientOriginalExtension();
            $request->product_image_2->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_2 = $file_path;
        }
        if ($request->product_image_3) {
            // unlink($product->product_image_3);
            $fileName = time() . '.' . $request->product_image_3->getClientOriginalExtension();
            $request->product_image_3->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image = $file_path;
        }
        if ($request->product_image_4) {
            // unlink($product->product_image_4);
            $fileName = time() . '.' . $request->product_image_4->getClientOriginalExtension();
            $request->product_image_4->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_4 = $file_path;
        }
        if ($request->product_image_5) {
            // unlink($product->product_image_5);
            $fileName = time() . '.' . $request->product_image_5->getClientOriginalExtension();
            $request->product_image_5->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_5 = $file_path;
        }
        if ($request->product_image_6) {
            // unlink($product->product_image_6);
            $fileName = time() . '.' . $request->product_image_6->getClientOriginalExtension();
            $request->product_image_6->move(public_path('assets/img/products'), $fileName);
            $file_path = "assets/img/products/" . $fileName;
            $product->product_image_6 = $file_path;
        }
        $update = $product->save();
        if ($update) {
            return redirect()->back()->with('message', 'Product updated successfully');
        } else {
            return redirect()->back()->with('message', 'Failed');
        }
        // if ($update) {
        //     return response()->json([
        //         'message' => 'updated'
        //     ], 200);
        // } else {
        //     return response()->json([
        //         'message' => 'failed'
        //     ], 424);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // dd($request->all());
        $product = Product::find($request->id);
        $delete = $product->delete();
        if ($delete) {
            return redirect()->back()->with('message', 'Deleted');
        }
    }
}
