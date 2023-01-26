<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Symfony\Contracts\Service\Attribute\Required;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::orderBy('id', 'desc')->get();
        // dd($categories);
        return view('admin_panel.categories.add-category');
    }

    public function view_subcategory()
    {
        return view('admin_panel.categories.add-subCategory');
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
        $request->validate([
            'name' => 'required',
            'slug'=>'required|unique:categories',
            'short_description' => 'required',
            'full_description' => 'required',
        ]);

        $category = new category();
        $category->category_name = $request->name;
        $category->slug = $request->slug;
        $category->short_description = $request->short_description;
        $category->full_description = $request->full_description;
        $category->status = 'A';
        $category->tags = $request->tags;
        $category->parent_category = $request->parent_category;
        if($request->hasFile('category_image')){
            // unlink($product->product_image);
            $fileName = time() . '.' . $request->category_image->getClientOriginalExtension();
            $request->category_image->move(public_path('assets/img/categories'), $fileName);
            $file_path = "assets/img/categories/" . $fileName;
            $category->category_image = $file_path;
        }
        $save = $category->save();
        if ($save) {
            return redirect()->back()->with('message', 'Saved successfully');
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
        $category = Category::where('slug',$request->slug)->first();
        return view('admin_panel.categories.add-category', compact('category'));
    }

    public function edit_subCategory(Request $request)
    {
        // dd($request->slug);
        $category = Category::where('slug',$request->slug)->first();
        return view('admin_panel.categories.add-subCategory', compact('category'));
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
        // dd($request->slug);
        $category = Category::where('slug',$request->slug)->first();
        // dd("here");
        $category->category_name = $request->name;
        $category->slug = $request->slug;
        $category->short_description = $request->short_description;
        $category->full_description = $request->full_description;
        $category->status = $request->status;
        $category->tags = $request->tags;
        $category->parent_category = $request->parent_category;
        if ($request->hasFile('category_image')) {
            // unlink($product->product_image);
            $fileName = time() . '.' . $request->category_image->getClientOriginalExtension();
            $request->category_image->move(public_path('assets/img/categories'), $fileName);
            $file_path = "assets/img/categories/" . $fileName;
            $category->category_image = $file_path;
        }
        $update = $category->save();
        if ($update) {
            return redirect()->back()->with('message', 'Updated successfully');
        } else {
            return redirect()->back()->with('message', 'Failed');
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
        // dd($request->id);
        $category = Category::findOrFail($request->id);
        $delete_data = $category->delete();
        if ($delete_data) {
            return redirect()->back()->with('message', 'Deleted');
        }else{
            return redirect()->back()->with('message', 'Not deleted');
        }
    }
}
