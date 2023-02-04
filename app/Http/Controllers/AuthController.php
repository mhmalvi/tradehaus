<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    function construct(){
        
    }



    public function login_access(Request $request)
    {
        // dd($request->all());
        // dd('hello');
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd('hello');
        if (Auth::guard('admin')) {
            $user = Admin::where('email', $request->email)->first();
            if (!$user || $request->password !== $user->password) {
dd('hello');
                return redirect()->back()->with('message', 'Email or password not valid');
            } else {
                // dd(Auth::user());
                // if ($user->roles == 1) {
// dd("hello");
                return redirect('admin/dashboard');
                // }
            }
        }else{
            dd('fail');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout_admin(Request $request)
    {
       Auth::guard('admin')->logout();
       return redirect()->route('login.page');
    }
}
