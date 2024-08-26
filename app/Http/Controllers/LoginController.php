<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('front.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username','password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            $name = $user->name;
            if(Auth::check()){
                return redirect()->route('index')->with('success','Welcome To Lucky Market')->with('name',$name);
            }
        }

        return redirect()->back()->withErrors([
            'error'=>'Email ve ya Sifre hatali'
        ])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
