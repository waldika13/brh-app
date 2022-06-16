<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register Page',
            'active' => 'signup'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        Alert::success('Congrats', 'You have Successfully Registered');

        return redirect('/signin');
    }
}
