<?php

namespace App\Http\Controllers;

use App\Models\SignupCounter;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;

class AuthController extends Controller
{
    function construct()
    {
    }

    public function login_access(Request $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
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
            $counter = SignupCounter::latest()->first();
            $counter->counter = $counter->counter+1;
            $counter->created_at = Carbon::now();
            $counter->updated_at = Carbon::now();
            $counter->save();
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
