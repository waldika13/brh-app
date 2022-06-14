<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

class AdminRegisterController extends Controller
{
    public function index(){
        return view('dashboard.adminRegister.index', [
            'users' => User::all(),
        ]);
    }

    public function create()
    {
        return view('dashboard.adminRegister.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
            'is_admin' => 'min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['is_admin'] = '1';


        User::create($validatedData);

        return redirect('/dashboard/adminRegister')->with('success', 'Registration Successfull!');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/adminRegister')->with('success', 'Admin has been deleted!');
    }

    public function edit(User $user)
    {
        return view('dashboard.adminRegister.edit', [
            'users' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255'
        ];

        $validateData['id'] = auth()->user()->id;
        $validateData['password'] = Hash::make($validatedData['password']);
        $validateData['is_admin'] = '1';

        $validateData = $request->validate($rules);

        User::where('id', $user->id)->update($validateData);

        return redirect('/dashboard/adminRegister')->with('success', 'Admin has been updated!');
    }
}
