<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Sign in Page',
            'active' => 'signin'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        Alert::error('Upss', 'Email or Password is Incorrect!');

        return back();
    }

    public function signout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        Alert::success('Congrats', 'You have been Logout');
        return redirect('/');
    }
}
