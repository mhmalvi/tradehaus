<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_panel.blogs.add-blog');
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
        // $request->validate([
        //     'title' => 'required',
        //     'image'=>'required',
        //     'description' => 'required',
        //     'short_description'=>'required',
        //     'status' => 'required'
        // ]);
// dd($request->all());
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->description = $request->full_details;
        if ($request->image) {
            // unlink($product->product_image);
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/blogs'), $fileName);
            $file_path = "assets/img/blogs/" . $fileName;
            $blog->image = $file_path;
        }
        $blog->save();
        return redirect()->back()->with('message', 'Blog added');
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
