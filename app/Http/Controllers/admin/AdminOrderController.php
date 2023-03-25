<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedProducts;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin_panel.orders.new_order');
    }

    public function order_history(){
        return view('admin_panel.orders.order-history');
    }

    public function show_order_details(Request $request,$id){
        // dd($id);
        $order = Order::find($id);
        return view('admin_panel.orders.order-details',compact('order'));
    }

    public function order_cancel($id){
        $order = OrderedProducts::find($id);
        $order->status = 'cancelled';
        $order->save();
        return redirect()->back()->with('message','Cancelled');
    }
}
