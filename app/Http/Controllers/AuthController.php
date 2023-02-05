<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    function construct()
    {
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
        // if (Auth::guard('admin')) {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            // dd('hello');
            return redirect()->back()->with('message', 'Email or password not valid');
        } else {
            // dd(Auth::user());
            // if ($user->roles == 1) {
            // dd("hello");
            // dd(Auth::id());
            return redirect('/');
            // }
        }
        // }else{
        //     dd('fail');
        // }
    }

    public function register()
    {
        return view('register');
    }

    public function register_user(Request $request)
    {
        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;

        $user->name = $request->first_name . ' ' . $request->last_name;
        if ($request->password == $request->confirm_password) {
            $user->password = Hash::make($request->password);
        } else {
            return response()->back()->with('message', 'password do not match');
        }
        // dd("hello");
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->post_code = $request->post_code;
        $user->region = $request->region;
        $user->roles = 0;

        $save = $user->save();
        if ($save) {
            return redirect()->back()->with('message', 'Registered successfully');
        }
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
