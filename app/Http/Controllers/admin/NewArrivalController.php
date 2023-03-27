<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewArrival;
use Illuminate\Http\Request;

class NewArrivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_panel.home_slider.newArrival');
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
            'title' => 'required',

        ]);
        $arrival = new NewArrival();
        $arrival->title = $request->title;
        $arrival->short_description = $request->short_description;
        $arrival->full_details = $request->full_details;
        $arrival->price = $request->price;
        $arrival->slug = $request->slug;
        $arrival->quantity = $request->quantity;
        $arrival->color = $request->color;
        $arrival->size = $request->size;
        if ($request->file('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/newArrival'), $fileName);
            $file_path = "assets/img/newArrival/" . $fileName;
            $arrival->image = $file_path;
        }
        $arrival->save();
        return redirect()->back()->with('message', 'Product inserted');
    }

    // public function showAll(){
    //     $product = NewArrival::all();
    //     return view()
    // }

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
    public function edit($slug)
    {
        $product = NewArrival::where('slug', $slug)->first();
        // dd($product);
        return view('admin_panel.home_slider.newArrival', compact('product'));
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
        $arrival = NewArrival::find($request->id);
        $arrival->title = $request->title;
        $arrival->short_description = $request->short_description;
        $arrival->price = $request->price;
        $arrival->quantity = $request->quantity;
        $arrival->color = $request->color;
        $arrival->size = $request->size;
        $arrival->slug = $request->slug;
        $arrival->full_details = $request->full_details;
        $arrival->code_name = $request->code_name;
        if ($request->file('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/newArrival'), $fileName);
            $file_path = "assets/img/newArrival/" . $fileName;
            $arrival->image = $file_path;
        }
        $update = $arrival->save();
        if ($update) {
            return redirect()->back()->with('message', 'updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        // dd("hello");
        // dd($request->id);
        $arrival = NewArrival::find($id);
        $delete = $arrival->delete();
        if($delete){
            return redirect()->back()->with('message','Deleted successfully');
        }
    }
}
