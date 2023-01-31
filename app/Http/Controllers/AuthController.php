<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_access(Request $request)
    {
        // dd('hello');
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd('hello');
        $user = User::where('email', $request->email)->first();
        if (!$user || $request->password !== $user->password) {

            return redirect()->back()->with('message', 'Email or password not valid');
        } else {
            // dd(Auth::user());
            if ($user->roles == 1) {
                $token = $user->createToken('api_token')->plainTextToken;
                // dd($token);
                return redirect('admin/dashboard');
            }
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout_admin(Request $request)
    {
        Auth::logout();
        return redirect('/login');
        // $logout = $request->user()->tokens()->delete();
        // if ($logout) {
        //     return redirect('/login');
        // }
    }
}
